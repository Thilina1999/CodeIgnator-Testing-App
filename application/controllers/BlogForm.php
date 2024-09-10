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
		if (isset($_SESSION['userName'])) {
			$this->load->model('Model_blog');
			$query = $this->Model_blog->view_blog_by_id($id);
			$data['editData'] = $query->result_array();
			$this->load->view('editform', $data);
		} else {
			redirect('login');
		}
	}

	public function update() {
		if (isset($_SESSION['userName'])) {
			$this->form_validation->set_rules('title', 'Titlte', 'required');
			$this->form_validation->set_rules('description', 'Description', 'required');

			$id = $this->input->post('blog_id', TRUE);
			$data = array(
				'blog_title' => $this->input->post('title', TRUE),
				'blog_dec' => $this->input->post('description', TRUE),
				'status' => $this->input->post('status', TRUE)
			);

			$this->load->model('Model_blog');
			if ($this->form_validation->run() == FALSE) {
				$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
				$this->load->view('editForm');
			} else {
				$response = $this->Model_blog->update_blog($id, $data);
				if ($response) {
					$this->session->set_flashdata('blogmsg', "Blog Update successfully");
					redirect('dashboard');
				} else {
					$this->session->set_flashdata('blogmsgEdit', "Blog Update unsuccessful");
					redirect('editform');
				}
			}
		}else {
			redirect('login');
		}

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
