<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


	public function index()
	{
		$this->session->sess_destroy();
		$this->load->view('login');
	}

	public function form()
	{
		$inputUser  = $this->input->post('usuario');
		$inpurPass  = $this->input->post('contrasena');

		$this->load->model('user');
		$fila=$this->user->getUser($inputUser);

		if ($fila!=null) {
			if ($fila->PASS == $inpurPass ) {
				$data = array (
					'user'  => $inputUser,
					'id'    => 0,
					'login' => true
					);
				$this->session->set_userdata($data);
				header("Location:" . base_url().'home' );
			} else {
				header("Location:" . base_url());
			}
		} else {
			header("Location:" . base_url());
		}

	/*	
		

	echo $this->session->userdata('id'); */

}



}
