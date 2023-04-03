<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Persona extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->database();
		$this->load->model('Persona');

	}
    public function index()
	{
		$this->load->view('main/header');
		$this->load->view('create');
		$this->load->view('main/footer');
	}

	public function save(){
		$this->load->view('persona/create');
		if($this->input->server("REQUEST_METHOD") =="POST"){
			$data["Nombre"] = $this->input->post("Name");
			$data["Correo"] = $this->input->post("Correo");
			$data["telefono"] = $this->input->post("telefono");

			$this->Persona->save($data);
		}
	}
	public function show(){
		
	}
	public function update(){
		
	}
	public function delete(){
		
	}
}
?>
