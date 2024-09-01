<?php

class Dashboard extends CI_Controller
{
    public function index()
	{
		if(isset($_SESSION['userName'])){
            $this->load->model('Model_blog');
            $query = $this->Model_blog->view_blog($this->session->userdata('id', TRUE));
            $data['result'] = $query->result_array();
			$this->load->view('dashboard', $data);

		}else{
			redirect('login');
		}
	}


}