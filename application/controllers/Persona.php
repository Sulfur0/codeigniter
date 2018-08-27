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
	}
	public function index(){
		$this->load->view('register/register');
	}
	public function guardar(){
		session_start();
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
				$datos = array('response' => 'Se ha registrado el usuario correctamente.');	
				$this->load->view('auth/login',$datos);					
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
	public function list()
	{
		$data['usuarios'] = $this->MUsuario->get_users();		
		$this->load->view('layouts/top',$data);
		$this->load->view('persona/list', $data);
		$this->load->view('layouts/bottom');	

	}
}
?>