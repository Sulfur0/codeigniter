<?php 
/**
 * 
 */
class MUsuario extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->library('encrypt');
	}
	public function guardar($paramUsuario){
		if($this->db->insert("usuario",$paramUsuario))
			return true;
		else
			return false;
	}

	public function ingresar($usuario,$clave){
		$claveEncrypt = sha1($clave);
		
		$this->db->join('persona', 'usuario.idPersona = persona.idPersona', 'left');
		$query = $this->db->get_where('usuario', array('usuario.nomUsuario' => $usuario, 'usuario.clave' => $claveEncrypt));
		if(!empty($query->row()))
		{
			return $query->row();
		}
		else
		{
			return 0;
		}
	}
}
 ?>