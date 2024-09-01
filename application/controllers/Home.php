<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		if(isset($_SESSION['userName'])){
			$this->load->model('Model_blog');
            $query = $this->Model_blog->view_blog_all();
            $data['result'] = $query->result_array();
			$this->load->view('home', $data);
		}else {
			redirect('/login');
		}
	}


}
