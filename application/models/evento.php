<?php 

class Evento extends CI_Model
{
	
	public $ID_EVENTO;
	public $LUGAR;
	public $TIPO;
	public $DESCRIPCION;
	public $FECHA;
	public $USUARIOLOG;

	public function get_evento()
	{
		$query = $this->db->get('evento');
		return $query->result();
	}

	public function get_all()
	{
		$query = $this->db->get('evento');
		return $query->result();
	}

	public function add($evento=null)
	{
		if ($evento!=null) {
			$this->LUGAR       = $_POST['lugar'];
			$this->TIPO        = $_POST['tipo'];
			$this->DESCRIPCION = $_POST['descripcion'];
			$this->FECHA = $_POST['fecha'];
			$this->USUARIOLOG     = $this->session->userdata('id');
			$this->db->insert('evento', $this);
		}
	}

	public function update_entry()
	{
		$this->title    = $_POST['title'];
		$this->content  = $_POST['content'];
		$this->date     = time();

		$this->db->update('entries', $this, array('id' => $_POST['id']));
	}


}
?>