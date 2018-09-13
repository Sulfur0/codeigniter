<?php
/**
* Controlador de persona necesario para CRUD de atributos a usuarios.
**/
class Items extends CI_Controller
{
   
   function __construct()
   {
       parent::__construct();
       //$this->load->model('MUsuario');
       $this->load->model('MItems');
       $this->load->library('encrypt');
       $this->load->helper('url');
       $this->load->library('session');
   }
   /**
   * Método index, para mostrar una pagina de inicio
   **/
   public function index(){
       $this->load->view('layouts/top');
       $this->load->view('persona/home');
       $this->load->view('layouts/bottom');
   }
   	/**
	* Método para el mostrar el formulario de registro de usuarios
	**/
	public function create(){
		$this->load->view('items/registro');
	}

    public function guardar(){		
        $paramItems = array(
			'itm_nombre' => $this->input->post("itm_nombre"), 
			'itm_unidad' => $this->input->post("itm_unidad"), 
			'itm_precio_compra' => $this->input->post("itm_precio_compra"),
			'itm_creado_por' => $this->session->userdata('user'),
			'itm_fecha_creacion' => $this->input->post("itm_fecha_creacion"),
			'itm_fecha_actualizacion' => $this->input->post("itm_fecha_actualizacion")
		);

		//valido si el items ya ha sido registrado...
		$query = $this->db->get_where('items', array('itm_nombre' => $this->input->post("itm_nombre")));
		if(empty($query->row()))
		{
			if($this->MItems->guardar($paramItems))
			{				
				$data['items'] = $this->MItems->get_items();
				$data['response'] = 'Se ha registrado el items correctamente.';
				if(!$this->session->userdata('user'))
				{
					$this->load->view('layouts/top');
					$this->load->view('items/list', $data);
					$this->load->view('layouts/bottom');
				}
				else
					$this->load->view('auth/login',$data);
					
						
			}
			else
			{
				echo "Ha ocurrido un error.";
				print_r($paramItems);	
			}			
		}
		else
		{
			$datos = array('errors' => 'El items '.$this->input->post("itm_nombre").' ya está registrado.');
			$this->load->view('items/registro',$datos);	
        }
	}
	/*
	* Método para mostrar una lista con todos los usuarios
	*
	*/
	public function listar()
	{
		if(!$this->session->userdata('user')) header('location: '.base_url());
		$data['items'] = $this->MItems->get_items();		
		$this->load->view('layouts/top');
		$this->load->view('items/list', $data);
		$this->load->view('layouts/bottom');	

	}
	/*
	* @Description: Método para mostrar el formulario de edición de usuarios
	* @Params $id -> id del usuario a modificar
	* @return Response
	*/
	public function edit($id)
	{
		if(!$this->session->userdata('user')) header('location: '.base_url());
		
		$item = $this->MItems->get_items($id);

       	$this->load->view('layouts/top');
       	$this->load->view('items/edit',array('item'=>$item));
       	$this->load->view('layouts/bottom');
	}
	/**
	* Método para guardar la edición de los usuarios
	**/
	/*public function update($id)
	{
		if(!$this->session->userdata('user')) header('location: '.base_url());

		$query = $this->db->get_where(
			'usuario', array(
				'nomUsuario' => $this->input->post('nomUsuario'), 
				'clave' => sha1($this->input->post('viejaclave'))
			)
		);
		if($query->row_array())
		{
			$this->MUsuario->update($id);
			$data['usuarios'] = $this->MUsuario->get_users();
			$data['response'] = 'El usuario se ha actualizado correctamente.';
			$this->load->view('layouts/top');
	       	$this->load->view('persona/list', $data);
	       	$this->load->view('layouts/bottom');
		}
		else
		{
			$data['item'] = $this->MUsuario->get_users($id);
			$data['error'] = 'La contraseña anterior no coincide.';
			$this->load->view('layouts/top');
	       	$this->load->view('persona/edit',$data);
	       	$this->load->view('layouts/bottom');
		}
	}
	*/
	/**
	* Metodo para eliminar un usuario
	**/
	public function delete($id)
	{
		/*
		se puede eliminar un usuario pero deberia poder seguir existiendo como persona bajo la base de datos
		*/
		if(!$this->session->userdata('user')) header('location: '.base_url());
		$item = $this->MItems->delete($id);
		$data['response'] = 'Items eliminado correctamente.';
		$data['items'] = $this->MItems->get_items();
		
		$this->load->view('layouts/top');
		$this->load->view('items/list', $data);
		$this->load->view('layouts/bottom');
	}
}