<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gerencias extends CI_Controller {
	private $permisos;
	public function __construct(){
        parent::__construct();
        $this->permisos = $this->backend_lib->control();
		$this->load->model("Gerencias_model");
		$this->load->helper('date');

	}

	public function index(){
		$data  = array(
			'permisos' => $this->permisos,
			'gerencias' => $this->Gerencias_model->getGerencias(), 
		);

		$this->load->view("layouts/header");
		$this->load->view("layouts/aside",);
		$this->load->view("mantenimiento/gerencias/list",$data);
		$this->load->view("layouts/footer");
		


	}
	public function add(){
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("mantenimiento/gerencias/add");
		$this->load->view("layouts/footer");
	}

	public function store(){
		$now = time();
		$nowFormat = date("d-m-Y H:i:s",  $now);;

		$nombre = $this->input->post("nombre");
		$descripcion = $this->input->post("descripcion");

		$data  = array(
			'nombre' => $nombre, 
			'descripcion' => $descripcion,
			'estado' => "1",
			'create_at' => $nowFormat,
			'create_by' => $this->session->userdata("nombres")." ".$this->session->userdata("apellidos")		
		);

		if ($this->Gerencias_model->save($data)) {
			redirect(base_url()."mantenimiento/gerencias");
		}
		else{
			$this->session->set_flashdata("error","No se pudo guardar la informacion");
			redirect(base_url()."mantenimiento/gerencias/add");
		}
	}

	public function edit($id){
		$data  = array(
			'gerencia' => $this->Gerencias_model->getGerencia($id)
		);

		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("mantenimiento/gerencias/edit",$data);
		$this->load->view("layouts/footer");
	}

	public function update(){
		$now = time();
		$nowFormat = date("d-m-Y H:i:s",  $now);;

		$idGerencia = $this->input->post("idGerencia");
		$nombre = $this->input->post("nombre");
		$descripcion = $this->input->post("descripcion");

		$data  = array(
			'nombre' => $nombre, 
			'descripcion' => $descripcion,
			'estado' => "1",
			'update_at' => $nowFormat,
			'update_by' => $this->session->userdata("nombres")." ".$this->session->userdata("apellidos")
		);

		if ($this->Gerencias_model->update($idGerencia,$data)) {
			redirect(base_url()."mantenimiento/gerencias");
		}
		else{
			$this->session->set_flashdata("error","No se pudo guardar la informacion");
			redirect(base_url()."mantenimiento/gerencias/edit/".$idGerencia);
		}
	}

	public function delete($id)
	{
		$data  = array(
			'estado' => "0",
		);
		$this->Gerencias_model->update($id, $data);
		redirect(base_url()."mantenimiento/gerencias");
	}

}