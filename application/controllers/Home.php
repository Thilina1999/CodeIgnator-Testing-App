<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		if(isset($_SESSION['userName'])){
			$this->load->view('home');
		}else {
			redirect('/login');
		}
	}


}
