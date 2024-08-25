<?php

class Register extends CI_Controller
{
    public function RegisterUser()
    {
        $this->form_validation->set_rules('name', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('passwordAgain', 'Password Confirmation', 'required|matches[password]');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[user.email]');

        $data = array(
            'name' => $this->input->post('name',TRUE),
            'email'=> $this->input->post('email',TRUE),
            'password'=> $this->input->post('password',TRUE),
        ) ;

        if ($this->form_validation->run() == FALSE)
        {
                $this->load->view('Register');
        }
        else
        {
                $this->load->model('Model_user');
                $response = $this->Model_user->insert_user($data);
                if ($response){
                    $this->session->set_flashdata('msg','your Registered Successfuly');
                    redirect('Home/Login');
                }else{
                    $this->session->set_flashdata('msg','your Registered UnSuccessfuly');
                    redirect('Home/Register');
                }
        }

    }
}