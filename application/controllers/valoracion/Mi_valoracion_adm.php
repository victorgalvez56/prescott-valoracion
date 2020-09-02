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
		$this->load->model("Periodos_model");

		$this->load->helper('date');
	}

	public function index()
	{
		$now = time();
		$añoActual = date("Y",  $now);
		$estado_val_obj = $this->Valoracion_adm_model->getEstadoObj($this->session->userdata("id"), $añoActual);
		$validacion = "1";

		// $estado_entrevista2 =  $this->Valoracion_adm_model->getEntrevista2($this->session->userdata("id"),$añoActual,1);
		$estado_entrevista2_colab =  $this->Valoracion_adm_model->getEntrevistaColaborador($this->session->userdata("id"), $añoActual, 1);
		$estado_entrevista3_evalu =  $this->Valoracion_adm_model->getEntrevistaColaborador($this->session->userdata("id"), $añoActual, 2);
		$fechas_valoraciones = $this->Periodos_model->getFechasValidacion($añoActual, $validacion);



		if ($estado_entrevista2_colab == false) {
			$valoracion_objetivo = " ";

			$data  = array(
				'permisos' => $this->permisos,


				'padre_registrador' => $this->Valoracion_adm_model->getusuariosPadreRegistrar($this->session->userdata("id"), $añoActual, 1, 1),


				'puntajes1_val2' => $this->Valoracion_adm_model->getvaloracion1($this->session->userdata("id"), $añoActual, 1, 2),
				'puntajes2_val2' => $this->Valoracion_adm_model->getvaloracion1($this->session->userdata("id"), $añoActual, 2, 2),
				'puntajes3_val2' => $this->Valoracion_adm_model->getvaloracion1($this->session->userdata("id"), $añoActual, 3, 2),
				'puntajes4_val2' => $this->Valoracion_adm_model->getvaloracion1($this->session->userdata("id"), $añoActual, 4, 2),


				'tipo_validacion' => $validacion,
				'puntajes1_val1' => $this->Valoracion_adm_model->getvaloracion1($this->session->userdata("id"), $añoActual, 1, 1),
				'puntajes2_val1' => $this->Valoracion_adm_model->getvaloracion1($this->session->userdata("id"), $añoActual, 2, 1),
				'puntajes3_val1' => $this->Valoracion_adm_model->getvaloracion1($this->session->userdata("id"), $añoActual, 3, 1),
				'puntajes4_val1' => $this->Valoracion_adm_model->getvaloracion1($this->session->userdata("id"), $añoActual, 4, 1),

				'total_val_obj'=> $valoracion_objetivo,

				'estado' => $estado_val_obj,
				'estado_entrevista2_colab' => $estado_entrevista2_colab,
			);


			$this->load->view("layouts/header");
			$this->load->view("layouts/aside");
			$this->load->view("valoraciones/valoracion_adm/mi_valoracion", $data);
			$this->load->view("layouts/footer");
		} else {
			if ($estado_entrevista2_colab[0]->evaluador_id == null) {
				$valoracion_objetivo = " ";

				$data  = array(
					'permisos' => $this->permisos,

					'padre_registrador' => $this->Valoracion_adm_model->getusuariosPadreRegistrar($this->session->userdata("id"), $añoActual, 1, 1),


					'puntajes1_val2' => $this->Valoracion_adm_model->getvaloracion1($this->session->userdata("id"), $añoActual, 1, 2),
					'puntajes2_val2' => $this->Valoracion_adm_model->getvaloracion1($this->session->userdata("id"), $añoActual, 2, 2),
					'puntajes3_val2' => $this->Valoracion_adm_model->getvaloracion1($this->session->userdata("id"), $añoActual, 3, 2),
					'puntajes4_val2' => $this->Valoracion_adm_model->getvaloracion1($this->session->userdata("id"), $añoActual, 4, 2),

					'tipo_validacion' => $validacion,
					'puntajes1_val1' => $this->Valoracion_adm_model->getvaloracion1($this->session->userdata("id"), $añoActual, 1, 1),
					'puntajes2_val1' => $this->Valoracion_adm_model->getvaloracion1($this->session->userdata("id"), $añoActual, 2, 1),
					'puntajes3_val1' => $this->Valoracion_adm_model->getvaloracion1($this->session->userdata("id"), $añoActual, 3, 1),
					'puntajes4_val1' => $this->Valoracion_adm_model->getvaloracion1($this->session->userdata("id"), $añoActual, 4, 1),

					'total_val_obj'=> $valoracion_objetivo,

					'estado' => $estado_val_obj,
					'estado_entrevista2_colab' => $estado_entrevista2_colab,
				);

				$this->load->view("layouts/header");
				$this->load->view("layouts/aside");
				$this->load->view("valoraciones/valoracion_adm/mi_valoracion", $data);
				$this->load->view("layouts/footer");
			} else {
				$colaboradoraux =  $this->Usuarios_model->getUsuario($estado_entrevista2_colab[0]->colaborador_id);
				$colaborador = $colaboradoraux->nombres . " " . $colaboradoraux->apellidos;
				$evaluadoraux =  $this->Usuarios_model->getUsuario($estado_entrevista2_colab[0]->evaluador_id);
				$evaluador = $evaluadoraux->nombres . " " . $evaluadoraux->apellidos;


				$valoracion_objetivo_aux =  $this->Valoracion_adm_model->getValoracionObjetivos($this->session->userdata("id"), $añoActual, 3);

				if($valoracion_objetivo_aux == false){
					$valoracion_objetivo= " ";
				}else{
					$valoracion_objetivo = $valoracion_objetivo_aux[0]->total_valoracion;
				}

				$data  = array(
					'permisos' => $this->permisos,

					'padre_registrador' => $this->Valoracion_adm_model->getusuariosPadreRegistrar($this->session->userdata("id"), $añoActual, 1, 1),

					'puntajes1_val2' => $this->Valoracion_adm_model->getvaloracion1($this->session->userdata("id"), $añoActual, 1, 2),
					'puntajes2_val2' => $this->Valoracion_adm_model->getvaloracion1($this->session->userdata("id"), $añoActual, 2, 2),
					'puntajes3_val2' => $this->Valoracion_adm_model->getvaloracion1($this->session->userdata("id"), $añoActual, 3, 2),
					'puntajes4_val2' => $this->Valoracion_adm_model->getvaloracion1($this->session->userdata("id"), $añoActual, 4, 2),


					'tipo_validacion' => $validacion,
					'puntajes1_val1' => $this->Valoracion_adm_model->getvaloracion1($this->session->userdata("id"), $añoActual, 1, 1),
					'puntajes2_val1' => $this->Valoracion_adm_model->getvaloracion1($this->session->userdata("id"), $añoActual, 2, 1),
					'puntajes3_val1' => $this->Valoracion_adm_model->getvaloracion1($this->session->userdata("id"), $añoActual, 3, 1),
					'puntajes4_val1' => $this->Valoracion_adm_model->getvaloracion1($this->session->userdata("id"), $añoActual, 4, 1),


					'estado' => $estado_val_obj,
					'estado_entrevista2_colab' => $estado_entrevista2_colab,
					'estado_entrevista3_evalu' => $estado_entrevista3_evalu,
					'total_val_obj'=> $valoracion_objetivo,

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

		$this->Valoracion_adm_model->updateEntrevista($id_colaborador, $tipo_entrevista, $data, $añoActual);
		redirect(base_url() . "valoracion/valoracion_adm/");
	}


	public function entrevista3_evalu_registro()
	{
		$now = time();
		$añoActual = date("Y",  $now);
		$fechaActual = date("Y-m-d",  $now);

		$option1 = $this->input->post("option1");
		$option2 = $this->input->post("option2");
		$option3 = $this->input->post("option3");
		$id_colaborador = $this->input->post("id_colaborador");

		$entrevista3_obj_1 = $this->input->post("entrevista3_obj_1");
		$entrevista3_obj_2 = $this->input->post("entrevista3_obj_2");
		$entrevista3_obj_3 = $this->input->post("entrevista3_obj_3");




		$puntaje_val_obj = $option1+$option2+$option3;
	
		if($puntaje_val_obj == 0){
			$puntaje_final_objetivos = 0;
		}elseif($puntaje_val_obj == 1){
			$puntaje_final_objetivos = 7;

		}elseif($puntaje_val_obj == 2){
			$puntaje_final_objetivos = 14;

		}else{
			$puntaje_final_objetivos = 20;

		}





		$tipo_entrevista = '2';
		$data = array(
			'calif_obj1	' => $option1,
			'calif_obj2	' => $option2,
			'calif_obj3	' => $option3,

			'coment1_evalu	' => $entrevista3_obj_1,
			'coment2_evalu	' => $entrevista3_obj_2,
			'coment3_evalu	' => $entrevista3_obj_3,

			'tipo_entrevista_id	' => $tipo_entrevista,

			'estado' => '1',

			'colaborador_id' => $id_colaborador,
			'evaluador_id' => $this->session->userdata("id"),
			'create_at' => $fechaActual,
			'create_by' => $this->session->userdata("nombres") . " " . $this->session->userdata("apellidos")
		);

		$data_promedio_objetivos = array(
			'total_valoracion' => $puntaje_final_objetivos,
			'tipo_valoracion_id	' => 3,
			'estado' => '1',
			'usuario_id' => $id_colaborador,
			'create_at' => $fechaActual,
			'create_by' => $this->session->userdata("nombres") . " " . $this->session->userdata("apellidos")
		);

		$this->Valoracion_adm_model->save($data_promedio_objetivos);

		$this->Valoracion_adm_model->saveEntrevista2($data);
		redirect(base_url() . "valoracion/valoracion_adm/");
	}

	public function entrevista3_colab_registro()
	{
		$now = time();
		$añoActual = date("Y",  $now);
		$fechaActual = date("Y-m-d",  $now);

		$id_colaborador = $this->input->post("id_colaborador");

		$entrevista3_obj_1 = $this->input->post("entrevista3_obj_1");
		$entrevista3_obj_2 = $this->input->post("entrevista3_obj_2");
		$entrevista3_obj_3 = $this->input->post("entrevista3_obj_3");



		$tipo_entrevista = '2';
		$data = array(
			'coment1_colab	' => $entrevista3_obj_1,
			'coment2_colab	' => $entrevista3_obj_2,
			'coment3_colab	' => $entrevista3_obj_3,

			'colaborador_id' => $id_colaborador,
			'create_at' => $fechaActual,
			'create_by' => $this->session->userdata("nombres") . " " . $this->session->userdata("apellidos")
		);
		$this->Valoracion_adm_model->updateEntrevista($id_colaborador, $tipo_entrevista, $data, $añoActual);
		redirect(base_url() . "valoracion/mi_valoracion_adm/");
	}

	public function firma_colab_registro()
	{
		$now = time();
		$añoActual = date("Y",  $now);
		$fechaActual = date("Y-m-d",  $now);

		$firma_colab = $this->input->post("firma_colab");

		$colaborador = $this->input->post("colaborador");

		$data_uri = "data:image/png;base64,iVBORw0K...";
		$encoded_image = explode(",", $firma_colab)[1];

		$decoded_image = base64_decode($encoded_image);

		$nombre_firma = "firma_" . $colaborador . "_" . $añoActual;
		$ruta_firma = "assets/img/firmas/" . $nombre_firma . ".png";

		file_put_contents("assets/img/firmas/" . $nombre_firma . ".png", $decoded_image);


		$tipo_entrevista = '2';
		$data = array(
			'ruta_firma_colab' => $ruta_firma,
			'update_at' => $fechaActual,
		);
		$this->Valoracion_adm_model->updateEntrevista($this->session->userdata("id"), $tipo_entrevista, $data, $añoActual);
		redirect(base_url() . "valoracion/mi_valoracion_adm/");
	}

	public function firma_evalu_registro()
	{
		$now = time();
		$añoActual = date("Y",  $now);
		$fechaActual = date("Y-m-d",  $now);

		$firma_evalu = $this->input->post("firma_evalu");
		$evaluador = $this->input->post("evaluador");
		$data_uri = "data:image/png;base64,iVBORw0K...";
		$encoded_image = explode(",", $firma_evalu)[1];

		$decoded_image = base64_decode($encoded_image);

		$nombre_firma = "firma_" . $evaluador . "_" . $añoActual;
		$ruta_firma = "assets/img/firmas/" . $nombre_firma . ".png";

		file_put_contents("assets/img/firmas/" . $nombre_firma . ".png", $decoded_image);

		$tipo_entrevista = '2';
		$data = array(
			'ruta_firma_evalu' => $ruta_firma,
			'update_at' => $fechaActual,
		);
		$this->Valoracion_adm_model->updateEntrevistaEvalu($this->session->userdata("id"), $tipo_entrevista, $data, $añoActual);
		redirect(base_url() . "valoracion/valoracion_adm/");
	}
}
