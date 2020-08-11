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
		$this->load->model("Usuarios_model");
		$this->load->helper('date');
	}

	public function index()
	{
		$now = time();
		$añoActual = date("Y",  $now);
		$estado_val_obj = $this->Valoracion_adm_model->getEstadoObj($this->session->userdata("id"), $añoActual);

		// $estado_entrevista2 =  $this->Valoracion_adm_model->getEntrevista2($this->session->userdata("id"),$añoActual,1);
		$estado_entrevista2_colab =  $this->Valoracion_adm_model->getEntrevistaColaborador($this->session->userdata("id"), $añoActual, 1);


		if ($estado_entrevista2_colab == false) {
			$data  = array(
				'permisos' => $this->permisos,

				'padre_registrador' => $this->Valoracion_adm_model->getusuariosPadreRegistrar($this->session->userdata("id"), $añoActual, 1, 1),

				'puntajes1_val1' => $this->Valoracion_adm_model->getvaloracion1($this->session->userdata("id"), $añoActual, 1, 1),
				'puntajes2_val1' => $this->Valoracion_adm_model->getvaloracion1($this->session->userdata("id"), $añoActual, 2, 1),
				'puntajes3_val1' => $this->Valoracion_adm_model->getvaloracion1($this->session->userdata("id"), $añoActual, 3, 1),
				'puntajes4_val1' => $this->Valoracion_adm_model->getvaloracion1($this->session->userdata("id"), $añoActual, 4, 1),

				'puntajes1_val2' => $this->Valoracion_adm_model->getvaloracion1($this->session->userdata("id"), $añoActual, 1, 2),
				'puntajes2_val2' => $this->Valoracion_adm_model->getvaloracion1($this->session->userdata("id"), $añoActual, 2, 2),
				'puntajes3_val2' => $this->Valoracion_adm_model->getvaloracion1($this->session->userdata("id"), $añoActual, 3, 2),
				'puntajes4_val2' => $this->Valoracion_adm_model->getvaloracion1($this->session->userdata("id"), $añoActual, 4, 2),

				'estado' => $estado_val_obj,
				'estado_entrevista2_colab' => $estado_entrevista2_colab,
			);

			$this->load->view("layouts/header");
			$this->load->view("layouts/aside");
			$this->load->view("valoraciones/valoracion_adm/mi_valoracion", $data);
			$this->load->view("layouts/footer");
		}else{
			if($estado_entrevista2_colab[0]->evaluador_id == null){
				$data  = array(
					'permisos' => $this->permisos,
	
					'padre_registrador' => $this->Valoracion_adm_model->getusuariosPadreRegistrar($this->session->userdata("id"), $añoActual, 1, 1),
	
					'puntajes1_val1' => $this->Valoracion_adm_model->getvaloracion1($this->session->userdata("id"), $añoActual, 1, 1),
					'puntajes2_val1' => $this->Valoracion_adm_model->getvaloracion1($this->session->userdata("id"), $añoActual, 2, 1),
					'puntajes3_val1' => $this->Valoracion_adm_model->getvaloracion1($this->session->userdata("id"), $añoActual, 3, 1),
					'puntajes4_val1' => $this->Valoracion_adm_model->getvaloracion1($this->session->userdata("id"), $añoActual, 4, 1),
	
					'puntajes1_val2' => $this->Valoracion_adm_model->getvaloracion1($this->session->userdata("id"), $añoActual, 1, 2),
					'puntajes2_val2' => $this->Valoracion_adm_model->getvaloracion1($this->session->userdata("id"), $añoActual, 2, 2),
					'puntajes3_val2' => $this->Valoracion_adm_model->getvaloracion1($this->session->userdata("id"), $añoActual, 3, 2),
					'puntajes4_val2' => $this->Valoracion_adm_model->getvaloracion1($this->session->userdata("id"), $añoActual, 4, 2),
	
					'estado' => $estado_val_obj,
					'estado_entrevista2_colab' => $estado_entrevista2_colab,
				);
	
				$this->load->view("layouts/header");
				$this->load->view("layouts/aside");
				$this->load->view("valoraciones/valoracion_adm/mi_valoracion", $data);
				$this->load->view("layouts/footer");
			}else{
				$colaboradoraux =  $this->Usuarios_model->getUsuario($estado_entrevista2_colab[0]->colaborador_id);
				$colaborador = $colaboradoraux->nombres . " " . $colaboradoraux->apellidos;
				$evaluadoraux =  $this->Usuarios_model->getUsuario($estado_entrevista2_colab[0]->evaluador_id);
				$evaluador = $evaluadoraux->nombres . " " . $evaluadoraux->apellidos;

				$data  = array(
					'permisos' => $this->permisos,

					'padre_registrador' => $this->Valoracion_adm_model->getusuariosPadreRegistrar($this->session->userdata("id"), $añoActual, 1, 1),

					'puntajes1_val1' => $this->Valoracion_adm_model->getvaloracion1($this->session->userdata("id"), $añoActual, 1, 1),
					'puntajes2_val1' => $this->Valoracion_adm_model->getvaloracion1($this->session->userdata("id"), $añoActual, 2, 1),
					'puntajes3_val1' => $this->Valoracion_adm_model->getvaloracion1($this->session->userdata("id"), $añoActual, 3, 1),
					'puntajes4_val1' => $this->Valoracion_adm_model->getvaloracion1($this->session->userdata("id"), $añoActual, 4, 1),

					'puntajes1_val2' => $this->Valoracion_adm_model->getvaloracion1($this->session->userdata("id"), $añoActual, 1, 2),
					'puntajes2_val2' => $this->Valoracion_adm_model->getvaloracion1($this->session->userdata("id"), $añoActual, 2, 2),
					'puntajes3_val2' => $this->Valoracion_adm_model->getvaloracion1($this->session->userdata("id"), $añoActual, 3, 2),
					'puntajes4_val2' => $this->Valoracion_adm_model->getvaloracion1($this->session->userdata("id"), $añoActual, 4, 2),

					'estado' => $estado_val_obj,
					'estado_entrevista2_colab' => $estado_entrevista2_colab,
					'colaborador' => $colaborador,
					'evaluador' => $evaluador,
				);
				
				$this->load->view("layouts/header");
				$this->load->view("layouts/aside");
				$this->load->view("valoraciones/valoracion_adm/mi_valoracion", $data);
				$this->load->view("layouts/footer");

			}
		}

	}

	public function entrevista2_colab_registro()
	{
		$now = time();
		$añoActual = date("Y",  $now);
		$fechaActual = date("Y-m-d",  $now);

		$entrevista2_obj_1 = $this->input->post("entrevista2_obj_1");
		$entrevista2_obj_2 = $this->input->post("entrevista2_obj_2");
		$entrevista2_obj_3 = $this->input->post("entrevista2_obj_3");




		$data = array(
			'coment1_colab	' => $entrevista2_obj_1,
			'coment2_colab	' => $entrevista2_obj_2,
			'coment3_colab	' => $entrevista2_obj_3,

			'tipo_entrevista_id' => 1,
			'estado' => 1,
			'colaborador_id' => $this->session->userdata("id"),
			'create_at' => $fechaActual,
			'create_by' => $this->session->userdata("nombres") . " " . $this->session->userdata("apellidos")
		);

		$this->Valoracion_adm_model->saveEntrevista2($data);
		redirect(base_url() . "valoracion/mi_valoracion_adm/");
	}

	public function entrevista2_evalu_registro()
	{
		$now = time();
		$añoActual = date("Y",  $now);
		$fechaActual = date("Y-m-d",  $now);

		$entrevista2_obj_1 = $this->input->post("entrevista2_obj_1");
		$entrevista2_obj_2 = $this->input->post("entrevista2_obj_2");
		$entrevista2_obj_3 = $this->input->post("entrevista2_obj_3");
		$id_colaborador = $this->input->post("id_colaborador");



		$tipo_entrevista = '1';
		$data = array(
			'coment1_evalu	' => $entrevista2_obj_1,
			'coment2_evalu	' => $entrevista2_obj_2,
			'coment3_evalu	' => $entrevista2_obj_3,
			'evaluador_id' => $this->session->userdata("id"),
			'update_at' => $fechaActual,
			'update_by' => $this->session->userdata("nombres") . " " . $this->session->userdata("apellidos")
		);

		$this->Valoracion_adm_model->updateEntrevista($id_colaborador, $tipo_entrevista, $data);
		redirect(base_url() . "valoracion/valoracion_adm/");
	}
}
