<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Eventos extends CI_Controller {


	public function index()
	{
		if ($this->session->userdata('login')) {

			$this->load->model('evento');
			$data['eventos']  =$this->evento->get_all();
			$this->load->view('eventos/index', $data);
		} else {
			header("Location:" . base_url());
		}
	}

	public function agregar()
	{
		if ($this->session->userdata('login')) {

			if ($_POST) {
				$evento = $this->input->post();
				$this->load->model('evento');
				$this->evento->add($evento);
				header("Location:" . base_url());
			} else {
				#Vista
				$this->load->helper('form');
				$this->load->view('eventos/agregar');
			}

		} else {
			header("Location:" . base_url());
		}		
		
	}

	public function editar()
	{
		if ($this->session->userdata('login')) {

			if ($_POST) {
				$evento = $this->input->post();
				$this->load->model('evento');
				$this->evento->add($evento);
				header("Location:" . base_url());
			} else {
				#Vista
				$this->load->helper('form');
				$this->load->view('eventos/editar');
			}

		} else {
			header("Location:" . base_url());
		}		
		
	}

}



