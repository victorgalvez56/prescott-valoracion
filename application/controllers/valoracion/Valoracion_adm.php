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

		$data  = array(
			'permisos' => $this->permisos,
			'hijos' => $this->Valoracion_adm_model->getusuariosHijos($this->session->userdata("idPadre"))
		);

		$this->load->view("layouts/header");
		$this->load->view("layouts/aside",);
		$this->load->view("valoraciones/valoracion_adm/list", $data);
		$this->load->view("layouts/footer");
		//echo json_encode($this->session->userdata());
		//echo json_encode($data);
	}


	public function add()
	{
		$id = $this->input->post("id");
		$validacion = $this->Valoracion_adm_model->validacionValoracion($id);
		if ($validacion == false) {
			$data = array(
				'permisos' => $this->permisos,
				'usuario' => $this->Valoracion_adm_model->getusuario($id),
				'competencias' => $this->Valoracion_adm_model->getCompetencias(),
				'comunicaciones' => $this->Valoracion_adm_model->getindicadorComunicacion(),
				'trabajosequipo' => $this->Valoracion_adm_model->getindicadorTrabajos(),
				'aprendizajes' => $this->Valoracion_adm_model->getindicadorAprendizajes(),
				'proactividades' => $this->Valoracion_adm_model->getindicadorProactividades(),
				'validacion' => $validacion,
			);
			echo json_encode($data);
			$this->load->view("valoraciones/valoracion_adm/add", $data);
		} else if ($validacion->tipo_valoracion_id == '1') {
			$data = array(
				'permisos' => $this->permisos,
				'usuario' => $this->Valoracion_adm_model->getusuario($id),
				'competencias' => $this->Valoracion_adm_model->getCompetencias(),
				'comunicaciones' => $this->Valoracion_adm_model->getindicadorComunicacion(),
				'trabajosequipo' => $this->Valoracion_adm_model->getindicadorTrabajos(),
				'aprendizajes' => $this->Valoracion_adm_model->getindicadorAprendizajes(),
				'proactividades' => $this->Valoracion_adm_model->getindicadorProactividades(),
				'validacion' => $validacion,

			);
			$this->load->view("valoraciones/valoracion_adm/add", $data);

		} else if ($validacion->tipo_valoracion_id == '2') {
			$data = array(
				'permisos' => $this->permisos,
				'usuario' => $this->Valoracion_adm_model->getusuario($id),
				'validacion' => $validacion,
			);
			$this->load->view("valoraciones/valoracion_adm/addObjetivos", $data);
		}
	}
	public function store()
	{
		$nombre = $this->input->post("nombre");
		$descripcion = $this->input->post("descripcion");

		$data  = array(
			'nombre' => $nombre,
			'descripcion' => $descripcion,
			'estado' => "1",
			'create_at' => $this->session->userdata("nombres") . " " . $this->session->userdata("apellidos")
		);

		if ($this->Gerencias_model->save($data)) {
			redirect(base_url() . "mantenimiento/gerencias");
		} else {
			$this->session->set_flashdata("error", "No se pudo guardar la informacion");
			redirect(base_url() . "mantenimiento/gerencias/add");
		}
	}






	/*
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
