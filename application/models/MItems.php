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

	public function update($id) 
    {
    	
    	//$data1=array(
    	//	'clave' => sha1($this->input->post('clave')),    		
        //    'usr_fec_actualizacion' => date("Y-m-d"), 
        //);
        $data2=array(
        	'itm_nombre' => $this->input->post('itm_nombre'),            
            'itm_unidad' => $this->input->post('itm_unidad'),
            'itm_precio_compra' => $this->input->post('itm_precio_compra'),
            'itm_fecha_creacion' => $this->input->post('itm_fecha_creacion'),
            'itm_fecha_actualizacion' => $this->input->post('itm_fecha_actualizacion'),
            //'direccion' => $this->input->post('direccion'),
        );
        $this->db->where('itm_codigo', $id);
	$this->db->update('itm_nombre', $data2 /*$data1*/);

		$this->db->where('idUsuario', $this->input->post('idUsuario'));		
       	return $this->db->update('items', $data2);
    }

    public function delete($id)
    {
    	return $this->db->delete('items', array('itm_codigo' => $id));
    }
}
 ?>