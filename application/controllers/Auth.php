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
			
			session_start();
			$_SESSION['user'] = $result->idUsuario;			
			$this->load->view('persona/list',$result);
			
			//print_r($result);
		}
		else
		{
			$datos = array('errors' => 'El usuario o la contraseña es incorrecta');
			$this->load->view('auth/login',$datos);
		}
	}

	public function logout(){
		session_start();
		session_destroy();				
		$this->load->view('auth/login');
	}
}
?>