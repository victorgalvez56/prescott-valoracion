<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Anecdotario_adm extends CI_Controller
{
	private $permisos;

	public function __construct()
	{
		parent::__construct();
		$this->permisos = $this->backend_lib->control();
		$this->load->model("Anecdotarios_model");
		$this->load->helper('date');
	}

	public function add_anecdotario()
	{
		$now = time();
		$añoActual = date("Y", $now);
		$fechaActual = date("Y-m-d", $now);

		$id = $this->input->post("id");


		$anecdotarios = $this->Anecdotarios_model->getAnecdotariobyUsuario($id, $añoActual);

		$data = array(
			'id_usuario' => $id,
			'anecdotarios' => $anecdotarios
		);

		$this->load->view("valoraciones/valoracion_adm/anecdotarios/add", $data);
	}


	public function store()
	{
		$now = time();
		$nowFormat = date("Y-m-d", $now);;
		$id_usuario = $this->input->post("id_usuario");
		$anedotario = $this->input->post("anedotario");


		$data = array(
			'descripcion' => $anedotario,
			'usuario_id' => $id_usuario,
			'estado' => "1",
			'create_at' => $nowFormat,
			'create_by' => $this->session->userdata("nombres") . " " . $this->session->userdata("apellidos")
		);

		$this->Anecdotarios_model->save($data);
		redirect(base_url() . "valoracion/valoracion_adm/");
	}


}
