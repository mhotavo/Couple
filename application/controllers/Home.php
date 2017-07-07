<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	public function index()
	{
		if ($this->session->userdata('login')) {

			$UltimaVez=$this->evento->UltimaVez();
			$TotalSex=$this->evento->TotalSex();
			$Total69=$this->evento->Total69();
			$TotalOralEl=$this->evento->TotalOralEl();
			$TotalOralElla=$this->evento->TotalOralElla();
			$UltimoAndres=$this->evento->UltimoAndres();
			$ProximoAndres=$this->evento->ProximoAndres();
			$ProximaInyeccion=$this->evento->ProximaInyeccion();

			
			$data['datos'] = array(
				"UltimaVez" => $UltimaVez->FECHA,
				#"PrimeraVez" => $PrimeraVez,
				"TotalSex" => $TotalSex->TOTAL,
				"Total69" => $Total69->TOTAL,
				"TotalOralEl" => $TotalOralEl->TOTAL,
				"TotalOralElla" => $TotalOralElla->TOTAL,
				"UltimoAndres" => $UltimoAndres->FECHA,
				"ProximoAndres" => $ProximoAndres->NEXT,
				"ProximaInyeccion" => $ProximaInyeccion->NEXT,
				);

			$this->load->view('home/index', $data);

		} else {
			header("Location:" . base_url());
		}
		
	}


}



