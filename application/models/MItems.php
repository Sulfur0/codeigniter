<?php 
/**
 * 
 */
class MItems extends CI_Model
{
	function __construct()
	{
		parent::__construct();
    }
    
	public function guardar($paramItems){
		if($this->db->insert("items",$paramItems))
			return true;
		else
			return false;
	}

	
	public function get_items($itm_creado_por = FALSE)
	{
		$this->db->join('usuario', 'items.itm_codigo= usuario.idUsuario', 'left');
	    if ($itm_creado_por === FALSE)
	    {
	        $query = $this->db->get('items');
	        return $query->result_array();
	    }
		$query = $this->db->get_where('items', array('items.itm_codigo' => $itm_codigo));
	    return $query->row_array();
	}
/*
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
    }*/

    public function delete($id)
    {
    	return $this->db->delete('items', array('itm_codigo' => $id));
    }
}
 ?>