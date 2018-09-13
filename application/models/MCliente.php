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
		$this->db->join('persona', 'cliente.idPersona = persona.idPersona', 'left');
		if ($clienteid === FALSE)
	    {
	        $query = $this->db->get('cliente');
	        return $query->result_array();
	    }
		$query = $this->db->get_where('cliente', array('cliente.cli_id' => $clienteid));
	    return $query->row_array();
	}
	public function guardar($paramCliente){
		if($this->db->insert("cliente",$paramCliente))
			return true;
		else
			return false;
	}
	public function update($id) 
    {    
    	$data=array(
        	'email' => $this->input->post('email'),            
            'nombre' => $this->input->post('nombre'),
            'appaterno' => $this->input->post('appaterno'),
            'apmaterno' => $this->input->post('apmaterno'),
            'dni' => $this->input->post('dni'),
            'direccion' => $this->input->post('direccion'),
        );        
		$this->db->where('idPersona', $this->input->post('idPersona'));		
       	return $this->db->update('persona', $data);
    }
	public function delete($id)
    {
    	return $this->db->delete('cliente', array('cli_id' => $id));
    }
}
 ?>