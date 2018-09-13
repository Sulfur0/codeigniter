<?php
/**
* Controlador de persona necesario para CRUD de atributos a usuarios.
**/
class Items extends CI_Controller
{
   
   function __construct()
   {
       parent::__construct();
       $this->load->model('MUsuario2');
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
			'itm_fecha_creacion' => $this->input->post("itm_fecha_creacion "),
			'itm_fecha_actualizacion' => $this->input->post("itm_fecha_actualizacion",
			'itm_fecha_actualizacion' => $this->input->post("itm_fecha_actualizacion")
		);

		//valido si el items ya ha sido registrado...
		$query = $this->db->get_where('items', array('itm_creado_por' => $this->input->post("itm_creado_por")));
		if(empty($query->row()))
		{
			$idUsuario = $this->MUsuario->guardar($paramUsuario);
			$paramItems["idUsuario"] = $idUsuario;
			if($this->MItems->guardar($paramItems))
			{				
				$data['items'] = $this->MItems->get_users();
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
			$datos = array('errors' => 'El items '.$this->input->post("itm_creado_por").' ya está registrado.');
			$this->load->view('items/registro',$datos);	
        }
    }
}