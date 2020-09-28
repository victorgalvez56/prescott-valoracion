<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reportes extends CI_Controller {
	private $permisos;
	public function __construct(){
		parent::__construct();
		$this->permisos = $this->backend_lib->control();
		$this->load->model("Valoracion_docentes_model");
	}

	public function index(){
		$fechainicio = $this->input->post("fechainicio");
		$fechafin = $this->input->post("fechafin");

		if ($this->input->post("buscar")) {
				$valoraciones = $this->Valoracion_docentes_model->getValoracionesbyDate($fechainicio,$fechafin);
		}
		else{
			$valoraciones = $this->Valoracion_docentes_model->getValoraciones();
		}
//
//
//		echo json_encode($valoraciones);
//		die();
		$data = array(
			'permisos' => $this->permisos,
			"valoraciones" => $valoraciones,
			"fechainicio" => $fechainicio,
			"fechafin" => $fechafin,
		);

		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/reportes/valoraciones",$data);
		$this->load->view("layouts/footer");
	}
}
