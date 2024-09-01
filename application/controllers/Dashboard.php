<?php

class Dashboard extends CI_Controller
{
    public function index()
	{
		if(isset($_SESSION['userName'])){
			$this->load->view('dashboard');

		}else{
			redirect('login');
		}
	}


}