<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function index()
	{
		$this->load->view('main/header');
		$this->load->view('welcome_message');
		$this->load->view('main/footer');
	}

	public function create($id = null){
		$vdata["Nombre"] = $vdata["Correo"] = $vdata["telefono"] = "";

		if(isset($id)) {

			$persona = $this->Persona_model->getUser($id);
			if (isset($persona)) {
				$vdata["Nombre"] = $persona->Nombre;
				$vdata["Correo"] = $persona->Correo;
				$vdata["telefono"] = $persona->telefono;
			}
		}
		/*var_dump($id);
		exit();*/
		if($this->input->server("REQUEST_METHOD") =="POST"){
			$data["Nombre"] = $this->input->post("Name");
			$data["Correo"] = $this->input->post("Correo");
			$data["telefono"] = $this->input->post("telefono");

			if(isset($id)){

				$persona=$this->Persona_model->getUser($id);
				if (isset($persona)){
					$vdata["Nombre"]=$persona->Nombre;
					$vdata["Correo"]=$persona->Correo;
					$vdata["telefono"]=$persona->telefono;
				}
				$this->Persona_model->update($data,$id);
			}else{
				$this->Persona_model->save($data);
			}

		}
		$this->load->view('main/header');
		$this->load->view('persona/create',$vdata);
		//$this->load->view('freddy');
		$this->load->view('main/footer');
	}


	public function  show(){
		$this->load->model('Persona');
		$vdata["personas"]=$this->Persona->getUsers();
		$this->load->view('main/header');
		$this->load->view('persona/show',$vdata);
		//$this->load->view('freddy');
		$this->load->view('main/footer');
	}
	public function  testGet(){
		$this->load->model('Persona');
		$personas = $this->Persona->getUsers();

		var_dump($personas);
	}
	public function  testCreate(){
		$this->load->model('Persona');
		$data["Nombre"] = "Camilo";
		$data["Correo"] = "camilo@gmail.com";
		$data["telefono"] = "3214569874";
		$this->Persona->save($data);
	}
	public function  testGetOne(){
		$this->load->model('Persona');
		$personas = $this->Persona->getUser(1);

		var_dump($personas);
	}
	public function  testEdit(){
		$this->load->model('Persona');
		$data["Nombre"] = "Modificado";
		$data["Correo"] = "modificado@gmail.com";
		$data["telefono"] = "1234567891";
		$this->Persona->update($data,2);
	}
	public function  testDelete($id){
	$this->load->model('Persona');
	$this->Persona->delete($id);
	$this->show();
}
}
