<?php
/**
 * Controlador de persona necesario para CRUD de atributos a usuarios.
 */
class Ventas extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('MVentas');
		$this->load->model('MCliente');
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
		$this->load->view('ventas/homeventas');
		$this->load->view('layouts/bottom');
	}
	/*
	* Método para el mostrar el formulario de registro de usuarios
	*
	*/
	public function create(){
		$this->load->view('register/registerventas');
	}
	/*
	* Método para el registro de usuarios
	*
	*/
	public function guardar(){		
		$paramVentas = array(
			'vent_fecha' => $this->input->post("vent_fecha")			
		);
		$paramOperacion = array(
			'op_comentario' => $this->input->post("op_comentario"),

		);

		//valido si el usuario ya ha sido registrado...
		 /* no lo necesitamos pors los momentos
		$query = $this->db->get_where('operacion', array('op_comentario' => $this->input->post("op_comentario")));
		if(empty($query->row()))
		*/
		
			$op_id = $this->MVentas->guardarOperacion($paramOperacion);
			$paramOperacion["op_id"] = $op_id;
			if($this->MVentas->guardarVentas($paramVentas))
			{				
				$data['operaciones'] = $this->MVentas->get_users();
				$data['response'] = 'La operacion se ha registrado correctamente.';
				if(!$this->session->userdata('user'))
				{
					$this->load->view('layouts/top');
					$this->load->view('ventas/listventas', $data);
					$this->load->view('layouts/bottom');
				}

				else
					$this->load->view('auth/login',$data);
					
						
			}
			else
			{
				echo "Ha ocurrido un error.";
				print_r($paramOperacion);	
			}	
		
		/* este else lo comente por que me estaba tirando un error creo que se relaciona con el query que tambien comente arriba
		else
		{
			$datos = array('errors' => 'Esa operacion '.$this->input->post("op_comentario").' ya fue registrada.');

			$this->load->view('register/registerventas',$datos);	
		}	
		*/
	}	

	

	/*
	* Método para mostrar una lista con todos los usuarios
	*
	*/
	public function listar()
	{
		if(!$this->session->userdata('user')) header('location: '.base_url());
		$data['operaciones'] = $this->MVentas->get_users();		
		$this->load->view('layouts/top');
		$this->load->view('ventas/listventas', $data);
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
       	$this->load->view('ventas/editventas',array('item'=>$item));
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