<?php  
class MVentas extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->library('encrypt');
	}

	public function guardarVentas($paramVentas){
		if($this->db->insert("ventas",$paramVentas))
			return true;
		else
			return false;
	}

	public function guardarOperacion($paramOperacion){		
		$this->db->insert("operacion",$paramOperacion);
		return $this->db->insert_id();
	}

	
	public function get_ventas($vent_codigo = FALSE)
	{
		/* aqui llamas con el join a la tabla operacion, en donde op_id es igual al otro op_id que esta en la tabla vntas */
		$this->db->join('operacion', 'operacion.op_id = ventas.op_id', 'left');

		/* luego aqui abajo en los querys llamaremos a la tabla ventas, para que se traiga el array de ella y los datos del op_id de la tabla operacion*/
	    if ($vent_codigo=== FALSE)
	    {
	        $query = $this->db->get('ventas');
	        return $query->result_array();
	    }
		$query = $this->db->get_where('ventas', array('ventas.vent_codigo' => $vent_codigo));
	    return $query->row_array();
	}

}
 ?>