<?php  
class MVentas extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->library('encrypt');
	}

	public function guardarOperacion($paramOperacion){
		if($this->db->insert("operacion",$paramOperacion))
			return true;
		else
			return false;
	}

	public function guardarVentas($paramVentas){		
		$this->db->insert("ventas",$paramVentas);
		return $this->db->insert_id();
	}

	
	public function get_users($vent_codigo = FALSE)
	{
		$this->db->join('operacion', 'operacion.op_id = ventas.op_id', 'left');
	    if ($op_id === FALSE)
	    {
	        $query = $this->db->get('operacion');
	        return $query->result_array();
	    }
		$query = $this->db->get_where('operacion', array('operacion.op_id' => $vent_codigo));
	    return $query->row_array();
	}

}
 ?>