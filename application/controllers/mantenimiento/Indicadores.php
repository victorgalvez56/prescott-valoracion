<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Indicadores extends CI_Controller {
	private $permisos;
	public function __construct(){
        parent::__construct();
        $this->permisos = $this->backend_lib->control();
		$this->load->model("Indicadores_model");
		$this->load->model("Competencias_model");
		$this->load->helper('date');

	}

	public function index(){
		$data  = array(
			'permisos' => $this->permisos,
			'indicadores' => $this->Indicadores_model->getIndicadores(), 
		);

		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("mantenimiento/indicadores/list",$data);
        $this->load->view("layouts/footer");
	}
	public function add(){
		$data  = array(
			'competencias' => $this->Competencias_model->getCompetencias(), 
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("mantenimiento/indicadores/add",$data);
		$this->load->view("layouts/footer");
		}


	public function store(){
		$now = time();
		$nowFormat = date("d-m-Y H:i:s",  $now);;
		$descripcion = $this->input->post("descripcion");
		$competencia = $this->input->post("competencia");

		$data  = array(
			'descripcion' => $descripcion,
			'competencia_id' => $competencia,
			'estado' => "1",
			'create_at' => $nowFormat,
			'create_by' => $this->session->userdata("nombres")." ".$this->session->userdata("apellidos")	
		);

		if ($this->Indicadores_model->save($data)) {
			redirect(base_url()."mantenimiento/indicadores");
		}
		else{
			$this->session->set_flashdata("error","No se pudo guardar la informacion");
			redirect(base_url()."mantenimiento/indicadores/add");
		}
	}


	public function edit($id){
		$data  = array(
			'competencias' => $this->Competencias_model->getCompetencias(), 
			'indicador' => $this->Indicadores_model->getIndicador($id)
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("mantenimiento/indicadores/edit",$data);
		$this->load->view("layouts/footer");
	}

	public function update(){
		$now = time();
		$nowFormat = date("d-m-Y H:i:s",  $now);;
		$idIndicador = $this->input->post("idIndicador");
		$descripcion = $this->input->post("descripcion");
		$competencia = $this->input->post("competencia");

		$data  = array(
			'descripcion' => $descripcion,
			'competencia_id' => $competencia,
			'update_at' => $nowFormat,
			'update_by' => $this->session->userdata("nombres")." ".$this->session->userdata("apellidos")
		);

		if ($this->Indicadores_model->update($idIndicador,$data)) {
			redirect(base_url()."mantenimiento/indicadores");
		}
		else{
			$this->session->set_flashdata("error","No se pudo guardar la informacion");
			redirect(base_url()."mantenimiento/indicadores/edit/".$idIndicador);
		}
	}

	public function delete($id)
	{
		$data  = array(
			'estado' => "0",
		);
		$this->Indicadores_model->update($id, $data);
		redirect(base_url()."mantenimiento/indicadores");
	}

}