<?php

class BlogForm extends CI_Controller
{
    public function index()
    {
        if (isset($_SESSION['userName'])) {
            $this->load->view('addform');
        } else {
            redirect('login');
        }
    }

    public function add()
    {

        $this->form_validation->set_rules('title', 'Titlte', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');


        $data = array(
            'blog_title' => $this->input->post('title', TRUE),
            'blog_dec' => $this->input->post('description', TRUE),
            'user_id' => $this->session->userdata('id', TRUE),
            'status' => TRUE
        );

        $this->load->model('Model_blog');
        if ($this->form_validation->run() == FALSE) {
            $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
            $this->load->view('addForm');
        } else {
            $response = $this->Model_blog->insert_blog($data);
            if ($response) {
                $this->session->set_flashdata('blogmsg', "Blog Add succefuly");
                redirect('dashboard');
            } else {
                $this->session->set_flashdata('blogmsg', "Blog Add unsuccefull");
                redirect('addform');
            }
        }
    }

    public function edit($id)   {
        // print_r($id);
    }

    public function delete($id)
	{
		$this->load->model('Model_blog');
		$res = $this->Model_blog->delete_blog($id);
		if ($res) {
			echo "delete";
		}else {
			echo "notdelete";
		}
	}

	}
