<?php
/**
 * Controlador de persona necesario para CRUD de atributos a usuarios.
 */
class Persona extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('MPersona');
		$this->load->model('MUsuario');
		$this->load->library('encrypt');
		$this->load->helper('url');
		$this->load->library('session');
	}
	/*
	* Método index, para mostrar una pagina de inicio
	*
	*/
	public function index(){
		$this->load->view('layouts/top');
		$this->load->view('persona/home');
		$this->load->view('layouts/bottom');
	}
	/*
	* Método para el mostrar el formulario de registro de usuarios
	*
	*/
	public function create(){
		$this->load->view('register/register');
	}
	/*
	* Método para el registro de usuarios
	*
	*/
	public function guardar(){		
		$paramPersona = array(
			'nombre' => $this->input->post("nombre"), 
			'appaterno' => $this->input->post("appaterno"), 
			'apmaterno' => $this->input->post("apmaterno"),
			'email' => $this->input->post("email"),
			'dni' => $this->input->post("dni"),
			'direccion' => $this->input->post("direccion")			
		);
		$paramUsuario = array(
			'nomUsuario' => $this->input->post("nomUsuario"),
			'clave' => sha1($this->input->post("clave")),
			'privilegio' => 'user',
			'usr_fec_creacion' => date('Y-m-d'),
			'usr_fec_actualizacion' => date('Y-m-d'),
		);

		//valido si el usuario ya ha sido registrado...
		$query = $this->db->get_where('usuario', array('nomUsuario' => $this->input->post("nomUsuario")));
		if(empty($query->row()))
		{
			$idPersona = $this->MPersona->guardar($paramPersona);
			$paramUsuario["idPersona"] = $idPersona;
			if($this->MUsuario->guardar($paramUsuario))
			{				
				$data['usuarios'] = $this->MUsuario->get_users();
				$data['response'] = 'Se ha registrado el usuario correctamente.';
				if(!$this->session->userdata('user'))
				{
					$this->load->view('layouts/top');
					$this->load->view('persona/list', $data);
					$this->load->view('layouts/bottom');
				}
				else
					$this->load->view('auth/login',$data);
					
						
			}
			else
			{
				echo "Ha ocurrido un error.";
				print_r($paramUsuario);	
			}			
		}
		else
		{
			$datos = array('errors' => 'El usuario '.$this->input->post("nomUsuario").' ya está registrado.');
			$this->load->view('register/register',$datos);	
		}	
	}	
	/*
	* Método para mostrar una lista con todos los usuarios
	*
	*/
	public function list()
	{
		if(!$this->session->userdata('user')) header('location: '.base_url());
		$data['usuarios'] = $this->MUsuario->get_users();		
		$this->load->view('layouts/top');
		$this->load->view('persona/list', $data);
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
		
		$item = $this->MUsuario->get_users($id);

       	$this->load->view('layouts/top');
       	$this->load->view('persona/edit',array('item'=>$item));
       	$this->load->view('layouts/bottom');
	}
	/*
	* Método para guardar la edición de los usuarios
	*
	*/
	public function update($id)
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
	/*
	* Metodo para eliminar un usuario
	*
	*/
	public function delete($id)
	{
		/*
		se puede eliminar un usuario pero deberia poder seguir existiendo como persona bajo la base de datos
		*/
		if(!$this->session->userdata('user')) header('location: '.base_url());
		$item = $this->MUsuario->delete($id);
		$data['response'] = 'Usuario eliminado correctamente.';
		$data['usuarios'] = $this->MUsuario->get_users();
		
		$this->load->view('layouts/top');
		$this->load->view('persona/list', $data);
		$this->load->view('layouts/bottom');
	}
}
?>