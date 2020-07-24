<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mi_valoracion_adm extends CI_Controller
{
	private $permisos;
	public function __construct()
	{
		parent::__construct();
		$this->permisos = $this->backend_lib->control();
		$this->load->model("Valoracion_adm_model");
		$this->load->helper('date');
	}

	public function index()
	{
		$now = time();
		$añoActual = date("Y",  $now);
		$estado_val_obj = $this->Valoracion_adm_model->getEstadoObj($this->session->userdata("id"),$añoActual);

		$data  = array(
			'permisos' => $this->permisos,

			'padre_registrador' => $this->Valoracion_adm_model->getusuariosPadreRegistrar($this->session->userdata("id"),$añoActual,1,1),

			'puntajes1_val1' => $this->Valoracion_adm_model->getvaloracion1($this->session->userdata("id"),$añoActual,1,1),
			'puntajes2_val1' => $this->Valoracion_adm_model->getvaloracion1($this->session->userdata("id"),$añoActual,2,1),
			'puntajes3_val1' => $this->Valoracion_adm_model->getvaloracion1($this->session->userdata("id"),$añoActual,3,1),
			'puntajes4_val1' => $this->Valoracion_adm_model->getvaloracion1($this->session->userdata("id"),$añoActual,4,1),
			
			'puntajes1_val2' => $this->Valoracion_adm_model->getvaloracion1($this->session->userdata("id"),$añoActual,1,2),
			'puntajes2_val2' => $this->Valoracion_adm_model->getvaloracion1($this->session->userdata("id"),$añoActual,2,2),
			'puntajes3_val2' => $this->Valoracion_adm_model->getvaloracion1($this->session->userdata("id"),$añoActual,3,2),
			'puntajes4_val2' => $this->Valoracion_adm_model->getvaloracion1($this->session->userdata("id"),$añoActual,4,2),

			'estado'=> $estado_val_obj,
		);

		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("valoraciones/valoracion_adm/mi_valoracion",$data);
		$this->load->view("layouts/footer");
	}
}
