<?php

class Register extends CI_Controller
{
    public function register()
	{
		$this->load->view('register');
	}
    public function RegisterUser()
    {
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('userName', 'User Name', 'required|is_unique[user.email]');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('passwordAgain', 'Password Confirmation', 'required|matches[password]');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[user.email]');

        $data = array(
            'name' => $this->input->post('name',TRUE),
            'userName' => $this->input->post('userName',TRUE),
            'email'=> $this->input->post('email',TRUE),
            'password'=> $this->input->post('password',TRUE),
        ) ;

        if ($this->form_validation->run() == FALSE)
        {
            $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
            $this->load->view('Register');
        }
        else
        {
                $this->load->model('Model_user');
                $data['password'] = password_hash($data['password'], PASSWORD_BCRYPT);
                $response = $this->Model_user->insert_user($data);
                if ($response){
                    $this->session->set_flashdata('msgRister','your Registered Successfuly');
                    redirect('login');
                }else{
                    $this->session->set_flashdata('msgRister','your Registered UnSuccessfuly');
                    redirect('signup');
                }
        }

    }
}