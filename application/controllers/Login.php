<?php

class Login extends CI_Controller
{
    public function login()
	{
		$this->load->view('login');
	}

    public function LoginUser()
    {
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

            $email = $this->input->post('email',TRUE);
            $password = $this->input->post('password',TRUE);


        if ($this->form_validation->run() == FALSE) {
            $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
            $this->load->view('login');
        } else {
            $this->load->model('Model_user');
            $response = $this->Model_user->login_user($email);
            if (count($response) > 0) {
                if (password_verify($password, $response[0]->password)) {
                    echo 'succese';
                } else {
                    echo 'Invalide Password';
                }
            } else {
                $this->session->set_flashdata("errmsgLogin","Invalid Credentials");
            }
        }
    }
}