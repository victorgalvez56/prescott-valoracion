<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mi_valoracion_docentes extends CI_Controller
{
	private $permisos;
	public function __construct()
	{
		parent::__construct();
		$this->permisos = $this->backend_lib->control();
		$this->load->model("Valoracion_docentes_model");
		$this->load->model("Valoracion_adm_model");

		$this->load->model("Usuarios_model");
		$this->load->model("Periodos_model");
		$this->fecha = time();
		$this->fecha_actual = date("Y-m-d", $this->fecha);
		$this->año_actual = date("Y", $this->fecha);
	}

	public function index()
	{
		$now = time();
		$añoActual = date("Y",  $now);
		$validacion = "1";
		$estado_ultima_visita = $this->Valoracion_docentes_model->get_estado_ultima_visita($this->session->userdata("id"),$this->fecha_actual);

		$valoracion1= $this->Valoracion_adm_model->getValoracion($this->session->userdata("id"),1, $añoActual);
		$valoracion2= $this->Valoracion_adm_model->getValoracion($this->session->userdata("id"),2, $añoActual);
		$valoraciono=$this->Valoracion_adm_model->getValoracionObjetivos($this->session->userdata("id"), $añoActual, 3);
		$observaciones = $this->Valoracion_docentes_model->get_observaciones($this->session->userdata("id"),$this->fecha_actual);

		$comentarios_profesor = $this->Valoracion_docentes_model->get_comentario_visita_concluida($this->session->userdata("id"),$this->fecha_actual);




		if($valoracion1 == false || $valoracion2 == false || $valoraciono == false){
			$total_valoracion_11 = false;
			$total_valoracion_22 = false;
			$total_valoracion_oo = false;

			$promediovaloraciones =false;

			$promedio_final = false;
			$color_promedio_final = false;

		}else {

			$total_valoracion_11 = round($valoracion1->total_valoracion);
			$total_valoracion_22 = round($valoracion2->total_valoracion);
			$total_valoracion_oo = round($valoraciono[0]->total_valoracion);

			$promediovaloraciones = ($total_valoracion_11 + $total_valoracion_22) / 2;

			$promedio_final = $promediovaloraciones * 0.4 + $total_valoracion_oo * 0.6;
			if($promedio_final>0 && $promedio_final < 6){
				$color_promedio_final = "danger";
			}elseif ($promedio_final>5 && $promedio_final < 13){
				$color_promedio_final = "warning";
			}elseif ($promedio_final>12 && $promedio_final < 19){
				$color_promedio_final = "success";
			}else{
				$color_promedio_final = "primary";
			}
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
				'total_valoracion_1' => $total_valoracion_11,
				'total_valoracion_2' => $total_valoracion_22,
				'total_valoracion_o' => $total_valoracion_oo,
				'promediovaloraciones' => $promediovaloraciones,
				'promedio_final' => $promedio_final,
				'color_tarjeta_promedio' => $color_promedio_final,

				'observaciones' => $observaciones,
				'comentarios_profesor' => $comentarios_profesor,
				'estado_ultima_visita' => $estado_ultima_visita,
			);


			$this->load->view("layouts/header");
			$this->load->view("layouts/aside");
			$this->load->view("valoraciones/valoracion_docentes/mi_valoracion", $data);
			$this->load->view("layouts/footer");
	}




public function registro_comentario_profesor()
	{

		$id_visita = $this->input->post("id_visita");
		$comentario_profesor = $this->input->post("comentario_profesor");

		$data = array(
			'estado' => 'concluido',
			'opinion_colab' => $comentario_profesor,
			'update_at' => $this->fecha_actual,
			'update_by' => $this->session->userdata("nombres") . " " . $this->session->userdata("apellidos")
		);

		$this->Valoracion_docentes_model->concluir_visita($id_visita,$data);
		redirect(base_url() . "valoracion/mi_valoracion_docentes/");
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
		redirect(base_url() . "valoracion/mi_valoracion_docentes/");
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
		redirect(base_url() . "valoracion/mi_valoracion_docentes/");
	}
}
