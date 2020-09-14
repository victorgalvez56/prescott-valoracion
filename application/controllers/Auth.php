<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Usuarios_model");
		$this->load->model("Valoracion_adm_model");
	}
	public function index()
	{
		if ($this->session->userdata("login")) {
			redirect(base_url() . "dashboard");
		} else {
			$this->load->view("admin/login");
		}
	}

	public function login()
	{
		$username = $this->input->post("username");
		$password = $this->input->post("password");
		$res = $this->Usuarios_model->login($username, sha1($password));

		$hijos = $this->Usuarios_model->get_if_hijos($res->id);
		$padre = $this->Usuarios_model->get_if_padre_registrar($res->id);


//		echo json_encode($hijos);
//		echo json_encode($padre);
//
//		die();
		if (!$res) {
			$this->session->set_flashdata("error", "El usuario y/o contraseña son incorrectos");
			redirect(base_url());
		} else {
			$data  = array(
				'id' => $res->id,
				'nombres' => $res->nombres,
				'apellidos' => $res->apellidos,
				'rol' => $res->rol_id,
				'nombreRol' => $res->nombreRol,
				'area' => $res->nombreArea,
				'gerencia' => $res->nombreGerencia,
				'tiene_hijo' => $hijos,
				'tiene_padre' => $padre,
				'login' => TRUE
			);
			$this->session->set_userdata($data);
			redirect(base_url() . "dashboard");
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url());
	}
}
