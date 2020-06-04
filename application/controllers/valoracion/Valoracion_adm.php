<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Valoracion_adm extends CI_Controller
{
	private $permisos;
	public function __construct()
	{
		parent::__construct();
		$this->permisos = $this->backend_lib->control();
		$this->load->model("Valoracion_adm_model");
	}

	public function index()
	{
		if ($this->session->userdata("rol") == '1') {
			$data  = array(
				'permisos' => $this->permisos,
				'valoraciones' => $this->Valoracion_adm_model->getvaloracionTotal(),
			);
		} 
		if ($this->session->userdata("rol") == '2') {
			$data  = array(
				'permisos' => $this->permisos,
				'valoraciones' => $this->Valoracion_adm_model->getvaloracionGerencia(
					$this->session->userdata("gerencia"),
					$this->session->userdata("rol")
				),
			);
		} 
		if ($this->session->userdata("rol") == '3') {
			$data  = array(
				'permisos' => $this->permisos,
				'valoraciones' => $this->Valoracion_adm_model->getvaloracionArea(
					$this->session->userdata("gerencia"),
					$this->session->userdata("area"),
					$this->session->userdata("rol")
				)
			);
		}



		$this->load->view("layouts/header");
		$this->load->view("layouts/aside",);
		$this->load->view("valoraciones/valoracion_adm/list", $data);
		$this->load->view("layouts/footer");
		echo json_encode($data);
	}

	
	public function add(){
		if ($this->session->userdata("rol") == '1') {
			$d  = array(
				'permisos' => $this->permisos,
				'usuarios' => $this->Valoracion_adm_model->getusuariosTotal(),
				'competencias' => $this->Valoracion_adm_model->getCompetencias(),
				'comunicaciones' => $this->Valoracion_adm_model->getindicadorComunicacion(),
				'trabajosequipo' => $this->Valoracion_adm_model->getindicadorTrabajos(),
				'aprendizajes' => $this->Valoracion_adm_model->getindicadorAprendizajes(),
				'proactividades' => $this->Valoracion_adm_model->getindicadorProactividades(),

			);
		} 

		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("valoraciones/valoracion_adm/add",$d);
		$this->load->view("layouts/footer");
		//echo json_encode($d); 
		}


		public function view()
		{

			$data=array(
					'permisos' => $this->permisos,
					'usuarios' => $this->Valoracion_adm_model->getusuariosTotal(),
					'competencias' => $this->Valoracion_adm_model->getCompetencias(),
					'comunicaciones' => $this->Valoracion_adm_model->getindicadorComunicacion(),
					'trabajosequipo' => $this->Valoracion_adm_model->getindicadorTrabajos(),
					'aprendizajes' => $this->Valoracion_adm_model->getindicadorAprendizajes(),
					'proactividades' => $this->Valoracion_adm_model->getindicadorProactividades(),
	
				);
			$this->load->view("valoraciones/valoracion_adm/add",$data);
		}
/*
	public function store(){

		$nombre = $this->input->post("nombre");
		$descripcion = $this->input->post("descripcion");

		$data  = array(
			'nombre' => $nombre, 
			'descripcion' => $descripcion,
			'estado' => "1",
			'create_at' => $this->session->userdata("nombres")." ".$this->session->userdata("apellidos")
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
		$idGerencia = $this->input->post("idGerencia");
		$nombre = $this->input->post("nombre");
		$descripcion = $this->input->post("descripcion");

		$data  = array(
			'nombre' => $nombre, 
			'descripcion' => $descripcion,
			'estado' => "1",
			'update_at' => $this->session->userdata("nombres")." ".$this->session->userdata("apellidos")
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
*/
}
