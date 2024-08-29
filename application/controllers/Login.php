<?php

class Login extends CI_Controller
{

    public function LoginUser()
    {
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

        $data = array(
            'email'=> $this->input->post('email',TRUE),
            'password'=> $this->input->post('password',TRUE),
        ) ;

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('Register');
        } else {
            $this->load->model('Model_user');
            $response = $this->Model_user->login_user($data);
            if ($response) {
                echo "succese";
            } else {
                $this->session->set_flashdata("errmsg","Wrong Email Password");
            }
        }
    }
}