<?php 
/**
 * 
 */
class MCliente extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}
	
	public function get_clientes($clienteid = FALSE)
	{
		if ($clienteid === FALSE)
	    {
	        $query = $this->db->get('cliente');
	        return $query->result_array();
	    }
		$query = $this->db->get_where('cliente', array('cliente.cli_id' => $clienteid));
	    return $query->row_array();
	}
	
}
 ?>