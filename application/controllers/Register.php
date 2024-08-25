<?php

class Register extends CI_Controller
{
    public function RegisterUser()
    {
        $this->form_validation->set_rules('name', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('passwordAgain', 'Password Confirmation', 'required|matches[password]');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[user.email]');

        if ($this->form_validation->run() == FALSE)
        {
                $this->load->view('Register');
        }
        else
        {
                echo "form validatio";
        }

    }
}