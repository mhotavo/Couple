<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	public function index()
	{
		if ($this->session->userdata('login')) {
			$this->load->view('home/index');
		} else {
			header("Location:" . base_url());
		}
		
	}


}



