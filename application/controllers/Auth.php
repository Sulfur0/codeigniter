<?php 
/**
 * 
 */
class Auth extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('MUsuario');
		$this->load->helper('url');
		$this->load->library('session');
		if(!$this->session->userdata('user')) header('location: '.base_url());
	}

	public function index(){
		$this->load->view('auth/login');		
	}

	public function ingresar(){
		$usuario = $this->input->post('usuario');
		$clave = $this->input->post('clave');

		$result = $this->MUsuario->ingresar($usuario,$clave);
		if($result)
		{			
			//session_start();
			$_SESSION['user'] = $result->idUsuario;
			$this->db->join('persona', 'usuario.idPersona = persona.idPersona', 'left');
			$query = $this->db->get_where('usuario', array('usuario.idUsuario' => $result->idUsuario));
			$user = $query->row_array();
			$_SESSION['nombre_usuario'] = $user["nombre"]." ".$user["appaterno"];
			$_SESSION['correo_electronico'] = $user["email"];
			$this->load->view('layouts/top',$result);
			$this->load->view('layouts/bottom');			
		}
		else
		{
			$datos = array('errors' => 'El usuario o la contraseña es incorrecta');
			$this->load->view('auth/login',$datos);
		}
	}

	public function logout(){
		//session_start();
		session_destroy();				
		$this->load->view('auth/login');
	}
}
?>