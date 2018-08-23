<?php 
/**
 * 
 */
class Persona extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function guardar($paramPersona){		
		$this->db->insert("persona",$paramPersona);
		return $this->db->insert_id();
	}
}
 ?>