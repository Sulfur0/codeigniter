<?php
/**
 * Controlador de persona necesario para CRUD de atributos a usuarios.
 */
class Compania extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('MCompania');
		$this->load->library('session');

	}
	/*
	* Método para el mostrar el formulario de registro de usuarios
	*
	*/
	public function index(){
		$this->load->view('layouts/top');
		$this->load->view('compania/index');
		$this->load->view('layouts/bottom');
	}
	public function store(){
		$this->load->view('register/register');
	}	
	public function update(){
		$this->load->view('register/register');
	}
}
?>