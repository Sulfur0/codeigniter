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
	public function get_users($usuarioid = FALSE)
	{
		$this->db->join('persona', 'usuario.idPersona = persona.idPersona', 'left');
	    if ($usuarioid === FALSE)
	    {
	        $query = $this->db->get('usuario');
	        return $query->result_array();
	    }
		$query = $this->db->get_where('usuario', array('usuario.idUsuario' => $usuarioid));
	    return $query->row_array();
	}

	public function update($id) 
    {
    	
    	$data1=array(
    		'clave' => sha1($this->input->post('clave')),    		
            'usr_fec_actualizacion' => date("Y-m-d"), 
        );
        $data2=array(
        	'email' => $this->input->post('email'),            
            'nombre' => $this->input->post('nombre'),
            'appaterno' => $this->input->post('appaterno'),
            'apmaterno' => $this->input->post('apmaterno'),
            'dni' => $this->input->post('dni'),
            'direccion' => $this->input->post('direccion'),
        );
        $this->db->where('idUsuario', $id);
		$this->db->update('usuario', $data1);

		$this->db->where('idPersona', $this->input->post('idPersona'));		
       	return $this->db->update('persona', $data2);
    }

    public function delete($id)
    {
    	return $this->db->delete('usuario', array('idUsuario' => $id));
    }
}
 ?>