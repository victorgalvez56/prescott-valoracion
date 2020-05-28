<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Areas extends CI_Controller {
	private $permisos;
	public function __construct(){
        parent::__construct();
        $this->permisos = $this->backend_lib->control();
		$this->load->model("Areas_model");
		$this->load->model("Gerencias_model");
	}

	public function index(){
		$data  = array(
			'permisos' => $this->permisos,
			'areas' => $this->Areas_model->getAreas(), 
		);

		$this->load->view("layouts/header");
		$this->load->view("layouts/aside",);
		$this->load->view("mantenimiento/areas/list",$data);
        $this->load->view("layouts/footer");
	}
	public function add(){
		$data  = array(
			'gerencias' => $this->Gerencias_model->getGerencias(), 
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("mantenimiento/areas/add",$data);
		$this->load->view("layouts/footer");
	}


	public function store(){

		$nombre = $this->input->post("nombre");
		$descripcion = $this->input->post("descripcion");
		$gerencia = $this->input->post("gerencia");

		$data  = array(
			'nombre' => $nombre, 
			'descripcion' => $descripcion,
			'gerencia_id' => $gerencia,
			'estado' => "1",
			'create_at' => $this->session->userdata("nombres")." ".$this->session->userdata("apellidos")
		);

		if ($this->Areas_model->save($data)) {
			redirect(base_url()."mantenimiento/areas");
		}
		else{
			$this->session->set_flashdata("error","No se pudo guardar la informacion");
			redirect(base_url()."mantenimiento/areas/add");
		}
	}


	public function edit($id){
		$data  = array(
			'gerencias' => $this->Gerencias_model->getGerencias(), 
			'area' => $this->Areas_model->getArea($id)
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("mantenimiento/areas/edit",$data);
		$this->load->view("layouts/footer");
	}

	public function update(){
		$idArea = $this->input->post("idArea");
		$nombre = $this->input->post("nombre");
		$descripcion = $this->input->post("descripcion");
		$gerencia = $this->input->post("gerencia");

		$data  = array(
			'nombre' => $nombre, 
			'descripcion' => $descripcion,
			'gerencia_id' => $gerencia,
			'update_at' => $this->session->userdata("nombres")." ".$this->session->userdata("apellidos")
		);

		if ($this->Areas_model->update($idArea,$data)) {
			redirect(base_url()."mantenimiento/areas");
		}
		else{
			$this->session->set_flashdata("error","No se pudo guardar la informacion");
			redirect(base_url()."mantenimiento/areas/edit/".$idArea);
		}
	}

	public function delete($id)
	{
		$data  = array(
			'estado' => "0",
		);
		$this->Areas_model->update($id, $data);
		redirect(base_url()."mantenimiento/areas");
	}

}