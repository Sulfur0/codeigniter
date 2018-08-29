<?php 
/**
 * 
 */
class MCompania extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function guardar(){		
		$this->db->insert("persona",$paramPersona);
		return $this->db->insert_id();
	}
	public function actualizar(){		
		$this->db->insert("persona",$paramPersona);
		return $this->db->insert_id();
	}
	public function mostrar(){		
		$this->db->insert("persona",$paramPersona);
		return $this->db->insert_id();
	}

}
?>