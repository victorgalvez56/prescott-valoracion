<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Periodos extends CI_Controller
{
	private $permisos;
	public function __construct()
	{
		parent::__construct();
		$this->permisos = $this->backend_lib->control();
		$this->load->model("Periodos_model");
		$this->load->helper('date');
	}

	public function index()
	{
		$data  = array(
			'permisos' => $this->permisos,
			'periodos' => $this->Periodos_model->getPeriodos(),
		);

		$this->load->view("layouts/header");
		$this->load->view("layouts/aside",);
		$this->load->view("admin/periodos/list", $data);
		$this->load->view("layouts/footer");
	// echo json_encode($data);
	// die();
	}
	public function add()
	{
		$data  = array(
			'tipo_valoraciones' => $this->Periodos_model->getTipo_valoraciones(),
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/periodos/add", $data);
		$this->load->view("layouts/footer");
	}


	// public function store()
	// {
	// 	$now = time();
	// 	$nowFormat = date("d-m-Y H:i:s",  $now);;
	// 	$descripcion = $this->input->post("descripcion");
	// 	$competencia = $this->input->post("competencia");

	// 	$data  = array(
	// 		'descripcion' => $descripcion,
	// 		'competencia_id' => $competencia,
	// 		'estado' => "1",
	// 		'create_at' => $nowFormat,
	// 		'create_by' => $this->session->userdata("nombres") . " " . $this->session->userdata("apellidos")
	// 	);

	// 	if ($this->Indicadores_model->save($data)) {
	// 		redirect(base_url() . "administrador/indicadores");
	// 	} else {
	// 		$this->session->set_flashdata("error", "No se pudo guardar la informacion");
	// 		redirect(base_url() . "administrador/indicadores/add");
	// 	}
	// }


	public function edit($id)
	{
		$data  = array(
			'detalle_periodo' => $this->Periodos_model->getDetallePeriodoedit($id),
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/periodos/edit", $data);
		$this->load->view("layouts/footer");
	}

	public function update()
	{
		$now = time();
		$nowFormat = date("d-m-Y H:i:s",  $now);;
		
		$idDetallePeriodo = $this->input->post("idDetallePeriodo");

		$fecha_inicio = $this->input->post("fecha_inicio");
		$fecha_fin = $this->input->post("fecha_fin");
		$competencia = $this->input->post("competencia");

		$data  = array(
			'fecha_inicio' => $fecha_inicio,
			'fecha_fin' => $fecha_fin,
			// 'update_at' => $nowFormat,
			// 'update_by' => $this->session->userdata("nombres") . " " . $this->session->userdata("apellidos")
		);

		if ($this->Periodos_model->update($idDetallePeriodo, $data)) {
			redirect(base_url() . "administrador/periodos");
		} else {
			$this->session->set_flashdata("error", "No se pudo guardar la informacion");
			redirect(base_url() . "administrador/periodos/edit/" . $idDetallePeriodo);
		}
	}


	public function getDetallePeriodo()
	{
		$id = $this->input->post("id");
		$data = array(
			"detallesPeriodo" => $this->Periodos_model->getDetallePeriodo($id)
		);
		echo json_encode($data);
	}
}
