<?php
/**
 * Controlador de persona necesario para CRUD de atributos a usuarios.
 */
class Cliente extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('MCliente');
		$this->load->model('MPersona');
		$this->load->helper('url');
		$this->load->library('session');
	}
	/*
	* Método index, para mostrar los clientes
	*
	*/
	public function index(){
		if(!$this->session->userdata('user')) header('location: '.base_url());
		$data['clientes'] = $this->MCliente->get_clientes();	
		//print_r($data['clientes']);
		
		$this->load->view('layouts/top');
		$this->load->view('cliente/list', $data);
		$this->load->view('layouts/bottom');

	}
	/*
	* Método para el mostrar el formulario de registro de clientes
	*
	*/
	public function create(){
		if(!$this->session->userdata('user')) header('location: '.base_url());		
		$this->load->view('layouts/top');
		$this->load->view('cliente/create');
		$this->load->view('layouts/bottom');
		
	}
	/*
	* Método para el registro de clientes
	*
	*/
	public function store(){		
		$paramPersona = array(
			'nombre' => $this->input->post("nombre"), 
			'appaterno' => $this->input->post("appaterno"), 
			'apmaterno' => $this->input->post("apmaterno"),
			'email' => $this->input->post("email"),
			'dni' => $this->input->post("dni"),
			'direccion' => $this->input->post("direccion")			
		);
		$paramCliente = array();

		//valido si el usuario ya ha sido registrado...
		$query = $this->db->get_where('persona', array('dni' => $this->input->post("dni")));
		print_r($query->row());
		if(empty($query->row()))
		{
			$idPersona = $this->MPersona->guardar($paramPersona);
			$paramCliente["idPersona"] = $idPersona;
			if($this->MCliente->guardar($paramCliente))
			{				
				$data['clientes'] = $this->MCliente->get_clientes();
				$data['response'] = 'Se ha registrado el cliente correctamente.';
				$this->load->view('layouts/top');
				$this->load->view('cliente/list', $data);
				$this->load->view('layouts/bottom');			
					
						
			}
			else
			{
				echo "Ha ocurrido un error.";
				print_r($paramCliente);	
			}			
		}
		else
		{
			$datos = array('errors' => 'El cliente con DNI '.$this->input->post("dni").' ya está registrado.');
			$this->load->view('layouts/top');
			$this->load->view('cliente/create',$datos);
			$this->load->view('layouts/bottom');
		}	
	}	
	
	/*
	* @Description: Método para mostrar el formulario de edición de clientes
	* @Params $id -> id del cliente a modificar
	* @return Response
	*/
	public function edit($id)
	{
		if(!$this->session->userdata('user')) header('location: '.base_url());		
		$item = $this->MCliente->get_clientes($id);

       	$this->load->view('layouts/top');
       	$this->load->view('cliente/edit',array('item'=>$item));
       	$this->load->view('layouts/bottom');
	}
	/*
	* Método para guardar la edición de los clientes
	*
	*/
	public function update($id)
	{
		if(!$this->session->userdata('user')) header('location: '.base_url());

		$query = $this->db->get_where(
			'cliente', array(
				'cli_id' => $id
			)
		);
		if($query->row_array())
		{
			$this->MCliente->update($id);
			$data['clientes'] = $this->MCliente->get_clientes();
			$data['response'] = 'El cliente se ha actualizado correctamente.';
			$this->load->view('layouts/top');
	       	$this->load->view('cliente/list', $data);
	       	$this->load->view('layouts/bottom');
		}
		else
		{
			$data['clientes'] = $this->MCliente->get_clientes($id);
			$data['error'] = 'Ha ocurrido un error de validación de cliente.';
			$this->load->view('layouts/top');
	       	$this->load->view('cliente/edit',$data);
	       	$this->load->view('layouts/bottom');
		}
	}
	/*
	* Metodo para confirmar eliminación de un usuario
	*
	*/
	public function confirm_delete($id)
	{		
		if(!$this->session->userdata('user')) header('location: '.base_url());
		$data['clientes'] = $this->MCliente->get_clientes($id);		
		$this->load->view('layouts/top');
		$this->load->view('cliente/delete', $data);
		$this->load->view('layouts/bottom');
	}
	/*
	* Metodo para eliminar un cliente
	*
	*/
	public function delete($id)
	{		
		if(!$this->session->userdata('user')) header('location: '.base_url());
		$item = $this->MCliente->delete($id);
		$data['response'] = 'Cliente eliminado correctamente.';
		$data['clientes'] = $this->MCliente->get_clientes();
		
		$this->load->view('layouts/top');
		$this->load->view('cliente/list', $data);
		$this->load->view('layouts/bottom');
	}
}
?>