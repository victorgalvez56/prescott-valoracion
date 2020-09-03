<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Valoracion_docentes extends CI_Controller
{
	private $permisos;
	public function __construct()
	{
		parent::__construct();
		$this->permisos = $this->backend_lib->control();
		$this->load->model("Valoracion_adm_model");
		$this->load->model("Valoracion_docentes_model");
		$this->load->model("Periodos_model");
		$this->load->model("Usuarios_model");
		$this->load->helper('date');
	}

	public function index()
	{
		$now = time();
		$añoActual = date("Y",  $now);

		$hijos = $this->Valoracion_adm_model->getusuariosHijosRegistrar($this->session->userdata("id"));
		for ($i =0; $i<count($hijos);$i++){
			$hijos[$i]->val1= $this->Valoracion_adm_model->getExistValoracion($hijos[$i]->hijo_id,1,$añoActual);
			$hijos[$i]->val2= $this->Valoracion_adm_model->getExistValoracion($hijos[$i]->hijo_id,2,$añoActual);
			$hijos[$i]->val3= $this->Valoracion_adm_model->getExistValoracion($hijos[$i]->hijo_id,3,$añoActual);
		}

		$data  = array(
			'permisos' => $this->permisos,
			'hijos' => $hijos,
			'permisovaloracion' => 'Registrar',
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("valoraciones/valoracion_docentes/list", $data);
		$this->load->view("layouts/footer");

	}
//	public function show()
//	{
//		$data  = array(
//			'permisos' => $this->permisos,
//			'hijos' => $this->Valoracion_adm_model->getusuariosHijosLeer($this->session->userdata("id")),
//			'permisovaloracion' => 'Leer'
//		);
//
//		$this->load->view("layouts/header");
//		$this->load->view("layouts/aside");
//		$this->load->view("valoraciones/valoracion_adm/list", $data);
//		$this->load->view("layouts/footer");
//	}
//
//	public function validacion1_leer()
//	{
//
//		$now = time();
//		$añoActual = date("Y",  $now);
//		$id = $this->input->post("id");
//
//		$validacion = "1";
//		$data = array(
//			'permisos' => $this->permisos,
//			'detalle_valoraciones' => $this->Valoracion_adm_model->getDetalleValoracion($id, $añoActual),
//			'tipo_validacion' => $validacion,
//			'usuario' => $this->Valoracion_adm_model->getusuario($id),
//			'competencias' => $this->Valoracion_adm_model->getCompetencias(),
//			'comunicaciones' => $this->Valoracion_adm_model->getindicadorComunicacion(),
//			'trabajosequipo' => $this->Valoracion_adm_model->getindicadorTrabajos(),
//			'aprendizajes' => $this->Valoracion_adm_model->getindicadorAprendizajes(),
//			'proactividades' => $this->Valoracion_adm_model->getindicadorProactividades(),
//			'permisovaloracion' => 'Leer'
//		);
//
//
//		if ($data["detalle_valoraciones"] == false) {
//			$this->load->view("valoraciones/valoracion_adm/valoracion_no_registrada", $data);
//		} else {
//			$this->load->view("valoraciones/valoracion_adm/view", $data);
//		}
//	}
//
//
//	public function validacion2_leer()
//	{
//
//		$now = time();
//		$añoActual = date("Y",  $now);
//		$id = $this->input->post("id");
//
//		$validacion = "2";
//		$data = array(
//			'permisos' => $this->permisos,
//			'detalle_valoraciones' => $this->Valoracion_adm_model->getDetalleValoracion($id, $añoActual),
//			'tipo_validacion' => $validacion,
//			'usuario' => $this->Valoracion_adm_model->getusuario($id),
//			'competencias' => $this->Valoracion_adm_model->getCompetencias(),
//			'comunicaciones' => $this->Valoracion_adm_model->getindicadorComunicacion(),
//			'trabajosequipo' => $this->Valoracion_adm_model->getindicadorTrabajos(),
//			'aprendizajes' => $this->Valoracion_adm_model->getindicadorAprendizajes(),
//			'proactividades' => $this->Valoracion_adm_model->getindicadorProactividades(),
//			'permisovaloracion' => 'Leer'
//		);
//
//
//		if ($data["detalle_valoraciones"] == false) {
//			$this->load->view("valoraciones/valoracion_adm/valoracion_no_registrada", $data);
//		} else {
//			$this->load->view("valoraciones/valoracion_adm/view", $data);
//		}
//	}
//
//
//	public function validacion3_leer()
//	{
//		$now = time();
//		$añoActual = date("Y",  $now);
//		$fechaActual = date("Y-m-d",  $now);
//
//		$validacion = "3";
//		$fechas_valoraciones = $this->Periodos_model->getFechasValidacion($añoActual, $validacion);
//		$fecha_inicio_val1 = $fechas_valoraciones->fecha_inicio;
//		$fecha_fin_val1 = $fechas_valoraciones->fecha_fin;
//		$id = $this->input->post("id");
//
//		$estado_val_obj = $this->Valoracion_adm_model->getEstadoObj($id, $añoActual);
//
//		$estado_entrevista2_colab =  $this->Valoracion_adm_model->getEntrevistaColaborador($id, $añoActual, 1);
//		$estado_entrevista3_evalu =  $this->Valoracion_adm_model->getEntrevistaColaborador($id, $añoActual, 2);
//
//
//		if ($estado_entrevista2_colab == false) {
//
//			$valoracion_objetivo =  " ";
//
//			$data = array(
//				'id' => $id,
//				'permisos' => $this->permisos,
//				'usuario' => $this->Valoracion_adm_model->getusuario($id),
//				'tipo_validacion' => $validacion,
//				'estado' => $estado_val_obj,
//				'estado_entrevista2_colab' => $estado_entrevista2_colab,
//				'total_val_obj' => $valoracion_objetivo,
//
//			);
//			$this->load->view("valoraciones/valoracion_adm/show_objetivos", $data);
//		} else {
//			if ($estado_entrevista2_colab[0]->evaluador_id == null) {
//				$valoracion_objetivo =  " ";
//
//				$data = array(
//					'id' => $id,
//					'permisos' => $this->permisos,
//					'usuario' => $this->Valoracion_adm_model->getusuario($id),
//					'tipo_validacion' => $validacion,
//					'estado' => $estado_val_obj,
//					'estado_entrevista2_colab' => $estado_entrevista2_colab,
//					'total_val_obj' => $valoracion_objetivo,
//
//				);
//				$this->load->view("valoraciones/valoracion_adm/show_objetivos", $data);
//			} else {
//
//				$colaboradoraux =  $this->Usuarios_model->getUsuario($estado_entrevista2_colab[0]->colaborador_id);
//				$colaborador = $colaboradoraux->nombres . " " . $colaboradoraux->apellidos;
//				$evaluadoraux =  $this->Usuarios_model->getUsuario($estado_entrevista2_colab[0]->evaluador_id);
//				$evaluador = $evaluadoraux->nombres . " " . $evaluadoraux->apellidos;
//
//				$valoracion_objetivo_aux =  $this->Valoracion_adm_model->getValoracionObjetivos($id, $añoActual, 3);
//
//				if ($valoracion_objetivo_aux == false) {
//					$valoracion_objetivo = " ";
//				} else {
//					$valoracion_objetivo = $valoracion_objetivo_aux[0]->total_valoracion;
//				}
//
//				$data = array(
//					'id' => $id,
//					'permisos' => $this->permisos,
//					'usuario' => $this->Valoracion_adm_model->getusuario($id),
//					'tipo_validacion' => $validacion,
//					'estado' => $estado_val_obj,
//					'estado_entrevista2_colab' => $estado_entrevista2_colab,
//					'estado_entrevista3_evalu' => $estado_entrevista3_evalu,
//					'colaborador' => $colaborador,
//					'evaluador' => $evaluador,
//					'total_val_obj' => $valoracion_objetivo,
//				);
//
//				$this->load->view("valoraciones/valoracion_adm/show_objetivos", $data);
//			}
//		}
//	}
//
//	public function success_objetivos()
//	{
//		$now = time();
//		$nowFormat = date("d-m-Y H:i:s",  $now);
//
//		$id = $this->input->post("idObjetivos");
//		$comentario_opcional = $this->input->post("comentario_opcional");
//
//
//		$data = array(
//
//			'comentario_opcional' => $comentario_opcional,
//			'update_at' => $nowFormat,
//			'update_by' => $this->session->userdata("nombres") . " " . $this->session->userdata("apellidos"),
//			'estado' => 'aceptado',
//		);
//		$this->Valoracion_adm_model->update($id, $data);
//		redirect(base_url() . "valoracion/valoracion_adm/");
//	}
//
//
//
//
//	public function validacion1_registro()
//	{
//		$now = time();
//		$añoActual = date("Y",  $now);
//		$fechaActual = date("Y-m-d",  $now);
//
//		$validacion = "1";
//		$fechas_valoraciones = $this->Periodos_model->getFechasValidacion($añoActual, $validacion);
//		$fecha_inicio_val1 = $fechas_valoraciones->fecha_inicio;
//		$fecha_fin_val1 = $fechas_valoraciones->fecha_fin;
//		$id = $this->input->post("id");
//
//		$previo_registro = $this->Valoracion_adm_model->validacionValoracion($id, $validacion);
//		if ($previo_registro == true) {
//			$data = array(
//				'previo_registro' => $this->Valoracion_adm_model->getValoracion($id, $validacion,$añoActual),
//				'permisos' => $this->permisos,
//				'usuario' => $this->Valoracion_adm_model->getusuario($id),
//				'tipo_validacion' => $validacion,
//				'puntajes1_val1' => $this->Valoracion_adm_model->getvaloracion1($id, $añoActual, 1, 1),
//				'puntajes2_val1' => $this->Valoracion_adm_model->getvaloracion1($id, $añoActual, 2, 1),
//				'puntajes3_val1' => $this->Valoracion_adm_model->getvaloracion1($id, $añoActual, 3, 1),
//				'puntajes4_val1' => $this->Valoracion_adm_model->getvaloracion1($id, $añoActual, 4, 1),
//			);
//		} else {
//			$data = array(
//				'previo_registro' => $this->Valoracion_adm_model->getValoracion($id, $validacion,$añoActual),
//				'permisos' => $this->permisos,
//				'usuario' => $this->Valoracion_adm_model->getusuario($id),
//				'tipo_validacion' => $validacion,
//				'competencias' => $this->Valoracion_adm_model->getCompetencias(),
//				'comunicaciones' => $this->Valoracion_adm_model->getindicadorComunicacion(),
//				'trabajosequipo' => $this->Valoracion_adm_model->getindicadorTrabajos(),
//				'aprendizajes' => $this->Valoracion_adm_model->getindicadorAprendizajes(),
//				'proactividades' => $this->Valoracion_adm_model->getindicadorProactividades(),
//			);
//		}
//		if ($fechaActual >= $fecha_inicio_val1 && $fechaActual <= $fecha_fin_val1) {
//			$this->load->view("valoraciones/valoracion_adm/add", $data);
//		} else {
//			$this->load->view("valoraciones/valoracion_adm/valoracion_cerrada", $data);
//		}
//	}
//
//	public function validacion2_registro()
//	{
//		$now = time();
//		$añoActual = date("Y",  $now);
//		$fechaActual = date("Y-m-d",  $now);
//
//		$validacion = "2";
//		$fechas_valoraciones = $this->Periodos_model->getFechasValidacion($añoActual, $validacion);
//		$fecha_inicio_val1 = $fechas_valoraciones->fecha_inicio;
//		$fecha_fin_val1 = $fechas_valoraciones->fecha_fin;
//		$id = $this->input->post("id");
//
//		$previo_registro = $this->Valoracion_adm_model->validacionValoracion($id, $validacion);
//		if ($previo_registro == true) {
//			$data = array(
//				'previo_registro' => $this->Valoracion_adm_model->getValoracion($id, $validacion, $añoActual),
//				'permisos' => $this->permisos,
//				'usuario' => $this->Valoracion_adm_model->getusuario($id),
//				'tipo_validacion' => $validacion,
//				'puntajes1_val1' => $this->Valoracion_adm_model->getvaloracion1($id, $añoActual, 1, 2),
//				'puntajes2_val1' => $this->Valoracion_adm_model->getvaloracion1($id, $añoActual, 2, 2),
//				'puntajes3_val1' => $this->Valoracion_adm_model->getvaloracion1($id, $añoActual, 3, 2),
//				'puntajes4_val1' => $this->Valoracion_adm_model->getvaloracion1($id, $añoActual, 4, 2),
//			);
//		} else {
//			$data = array(
//				'previo_registro' => $this->Valoracion_adm_model->getValoracion($id, $validacion, $añoActual),
//				'permisos' => $this->permisos,
//				'usuario' => $this->Valoracion_adm_model->getusuario($id),
//				'tipo_validacion' => $validacion,
//				'competencias' => $this->Valoracion_adm_model->getCompetencias(),
//				'comunicaciones' => $this->Valoracion_adm_model->getindicadorComunicacion(),
//				'trabajosequipo' => $this->Valoracion_adm_model->getindicadorTrabajos(),
//				'aprendizajes' => $this->Valoracion_adm_model->getindicadorAprendizajes(),
//				'proactividades' => $this->Valoracion_adm_model->getindicadorProactividades(),
//			);
//		}
//		if ($fechaActual >= $fecha_inicio_val1 && $fechaActual <= $fecha_fin_val1) {
//			$this->load->view("valoraciones/valoracion_adm/add", $data);
//		} else {
//			$this->load->view("valoraciones/valoracion_adm/valoracion_cerrada", $data);
//		}
//	}
//
//	public function validacion3_registro()
//	{
//		$now = time();
//		$añoActual = date("Y",  $now);
//		$fechaActual = date("Y-m-d",  $now);
//
//		$evaluador = $this->Valoracion_adm_model->getusuariosPadreRegistrar($this->session->userdata("id"));
//		$username_evaluador = $evaluador->username;
//
//
//		$n_obj_1 = $this->input->post("n_obj_1");
//		$a_obj_1 = $this->input->post("a_obj_1");
//		$p_obj_1 = $this->input->post("p_obj_1");
//		$i_obj_1 = $this->input->post("i_obj_1");
//		$r_obj_1 = $this->input->post("r_obj_1");
//
//		$n_obj_2 = $this->input->post("n_obj_2");
//		$a_obj_2 = $this->input->post("a_obj_2");
//		$p_obj_2 = $this->input->post("p_obj_2");
//		$i_obj_2 = $this->input->post("i_obj_2");
//		$r_obj_2 = $this->input->post("r_obj_2");
//
//		$n_obj_3 = $this->input->post("n_obj_3");
//		$a_obj_3 = $this->input->post("a_obj_3");
//		$p_obj_3 = $this->input->post("p_obj_3");
//		$i_obj_3 = $this->input->post("i_obj_3");
//		$r_obj_3 = $this->input->post("r_obj_3");
//
//		$data  = array(
//			'n_obj_1' => $n_obj_1,
//			'a_obj_1' => $a_obj_1,
//			'p_obj_1' => $p_obj_1,
//			'i_obj_1' => $i_obj_1,
//			'r_obj_1' => $r_obj_1,
//
//			'n_obj_2' => $n_obj_2,
//			'a_obj_2' => $a_obj_2,
//			'p_obj_2' => $p_obj_2,
//			'i_obj_2' => $i_obj_2,
//			'r_obj_2' => $r_obj_2,
//
//			'n_obj_3' => $n_obj_3,
//			'a_obj_3' => $a_obj_3,
//			'p_obj_3' => $p_obj_3,
//			'i_obj_3' => $i_obj_3,
//			'r_obj_3' => $r_obj_3,
//
//			'estado' => 'espera',
//			'usuario_id' => $this->session->userdata("id"),
//			'create_at' => $fechaActual,
//			'create_by' => $this->session->userdata("nombres") . " " . $this->session->userdata("apellidos")
//		);
//		$this->Valoracion_adm_model->saveObjetivos($data);
//		$this->send_mail_add_objetivos($username_evaluador, $this->session->userdata("nombres") . " " . $this->session->userdata("apellidos"));
//		redirect(base_url() . "valoracion/mi_valoracion_adm/");
//	}
//
//
//	public function send_mail_add_objetivos( $username_evaluador, $colaborador)
//	{
//			$this->load->library('email');
//			$this->email->from('sistemapdp@prescott.edu.pe', 'Sistema Valoración Prescott');
//			$this->email->to($username_evaluador);
//
//			$this->email->subject('Registro de objetivos - colaborador(a) ' . $colaborador);
//			$this->email->message('El colaborador ' . $colaborador . " registro sus objetivos. Ingrese al sistema para ver más detalles. https://colegioprescott.edu.pe/prescott-valoracion");
//			$this->email->send();
//	}
//
//	public function send_mail_update_objetivos($username_evaluador, $colaborador)
//	{
//			$this->load->library('email');
//			$this->email->from('sistemapdp@prescott.edu.pe', 'Sistema Valoración Prescott');
//			$this->email->to($username_evaluador);
//
//			$this->email->subject('Actualización de objetivos - colaborador(a) ' . $colaborador);
//			$this->email->message('El colaborador ' . $colaborador . " actualizó sus objetivos. Ingrese al sistema para ver más detalles. https://colegioprescott.edu.pe/prescott-valoracion");
//			$this->email->send();
//	}
//
//	public function store()
//	{
//		$now = time();
//		$idUsuario = $this->input->post("idUsuario");
//		$fechaActual = date("Y-m-d",  $now);
//
//		$tipo_validacion = $this->input->post("tipo_validacion");
//		$promediovaloracion = $this->input->post("promediovaloracion");
//
//		$puntajeTrabajosequipo = $this->input->post("puntajeTrabajosequipo");
//		$puntajeComunicacion = $this->input->post("puntajeComunicacion");
//		$puntajeProactividad = $this->input->post("puntajeProactividad");
//		$puntajeAprendizaje = $this->input->post("puntajeAprendizaje");
//
//		$inputTrabajo = $this->input->post("inputTrabajo");
//		$inputComunicacion = $this->input->post("inputComunicacion");
//		$inputProactividad = $this->input->post("inputProactividad");
//		$inputAprendizaje = $this->input->post("inputAprendizaje");
//
//		$idPuntajeComunicaciones = $this->input->post("idPuntajeComunicaciones");
//		$idPuntajeProactividad = $this->input->post("idPuntajeProactividad");
//		$idPuntajeAprendizaje = $this->input->post("idPuntajeAprendizaje");
//		$idPuntajeTrabajo = $this->input->post("idPuntajeTrabajo");
//
//		$suma1 = 0;
//		$suma2 = 0;
//		$suma3 = 0;
//		$suma4 = 0;
//
//		for ($i = 0; $i < count($inputComunicacion); $i++) {
//			$suma1  = $suma1 + $inputComunicacion[$i];
//			$suma2  = $suma2 + $inputTrabajo[$i];
//			$suma3  = $suma3 + $inputProactividad[$i];
//			$suma4  = $suma4 + $inputAprendizaje[$i];
//		}
//		$promedio_final = ($suma1 + $suma2 + $suma3 + $suma4) / 4;
//
//		if ($tipo_validacion == '1') {
//			$data  = array(
//				'total_valoracion' => $promedio_final,
//				'estado' => "1",
//				'usuario_id' => $idUsuario,
//				'tipo_valoracion_id	' => $tipo_validacion,
//				'create_at' => $fechaActual,
//				'create_by' => $this->session->userdata("nombres") . " " . $this->session->userdata("apellidos")
//			);
//			if ($this->Valoracion_adm_model->save($data)) {
//				$idvaloracion = $this->Valoracion_adm_model->lastID();
//				$this->save_detalleValoracion(
//					$idvaloracion,
//					$inputTrabajo,
//					$inputComunicacion,
//					$inputProactividad,
//					$inputAprendizaje,
//					$idPuntajeComunicaciones,
//					$idPuntajeProactividad,
//					$idPuntajeAprendizaje,
//					$idPuntajeTrabajo
//				);
//				redirect(base_url() . "valoracion/valoracion_adm");
//			} else {
//				$this->session->set_flashdata("error", "No se pudo guardar la informacion");
//				redirect(base_url() . "valoracion/valoracion_adm/add");
//			}
//		} elseif ($tipo_validacion == '2') {
//			$data  = array(
//				'total_valoracion' => $promediovaloracion,
//				'estado' => "1",
//				'usuario_id' => $idUsuario,
//				'tipo_valoracion_id	' => $tipo_validacion,
//				'create_at' => $fechaActual,
//				'create_by' => $this->session->userdata("nombres") . " " . $this->session->userdata("apellidos")
//			);
//			if ($this->Valoracion_adm_model->save($data)) {
//				$idvaloracion = $this->Valoracion_adm_model->lastID();
//				$this->save_detalleValoracion(
//					$idvaloracion,
//					$inputTrabajo,
//					$inputComunicacion,
//					$inputProactividad,
//					$inputAprendizaje,
//					$idPuntajeComunicaciones,
//					$idPuntajeProactividad,
//					$idPuntajeAprendizaje,
//					$idPuntajeTrabajo
//				);
//				redirect(base_url() . "valoracion/valoracion_adm");
//			} else {
//				$this->session->set_flashdata("error", "No se pudo guardar la informacion");
//				redirect(base_url() . "valoracion/valoracion_adm/add");
//			}
//		}
//	}
//
//
//
//	protected function save_detalleValoracion(
//		$idvaloracion,
//		$inputTrabajo,
//		$inputComunicacion,
//		$inputProactividad,
//		$inputAprendizaje,
//		$idPuntajeComunicaciones,
//		$idPuntajeProactividad,
//		$idPuntajeAprendizaje,
//		$idPuntajeTrabajo
//	) {
//		$now = time();
//		$nowFormat = date("d-m-Y H:i:s",  $now);
//
//
//
//
//		for ($i = 0; $i < count($inputComunicacion); $i++) {
//			$data  = array(
//				'puntaje' => $inputComunicacion[$i],
//				'estado' => '1',
//				'valoracion_id' => $idvaloracion,
//				'indicador_id' => $idPuntajeComunicaciones[$i],
//				'create_at' => $nowFormat,
//				'create_by' => $this->session->userdata("nombres") . " " . $this->session->userdata("apellidos")
//			);
//			$this->Valoracion_adm_model->save_detalleValoracion($data);
//		}
//		for ($i = 0; $i < count($inputTrabajo); $i++) {
//			$data  = array(
//				'puntaje' => $inputTrabajo[$i],
//				'estado' => '1',
//				'valoracion_id' => $idvaloracion,
//				'indicador_id' => $idPuntajeTrabajo[$i],
//				'create_at' => $nowFormat,
//				'create_by' => $this->session->userdata("nombres") . " " . $this->session->userdata("apellidos")
//			);
//			$this->Valoracion_adm_model->save_detalleValoracion($data);
//		}
//		for ($i = 0; $i < count($inputProactividad); $i++) {
//			$data  = array(
//				'puntaje' => $inputProactividad[$i],
//				'estado' => '1',
//				'valoracion_id' => $idvaloracion,
//				'indicador_id' => $idPuntajeProactividad[$i],
//				'create_at' => $nowFormat,
//				'create_by' => $this->session->userdata("nombres") . " " . $this->session->userdata("apellidos")
//			);
//			$this->Valoracion_adm_model->save_detalleValoracion($data);
//		}
//		for ($i = 0; $i < count($inputAprendizaje); $i++) {
//			$data  = array(
//				'puntaje' => $inputAprendizaje[$i],
//				'estado' => '1',
//				'valoracion_id' => $idvaloracion,
//				'indicador_id' => $idPuntajeAprendizaje[$i],
//				'create_at' => $nowFormat,
//				'create_by' => $this->session->userdata("nombres") . " " . $this->session->userdata("apellidos")
//			);
//			$this->Valoracion_adm_model->save_detalleValoracion($data);
//		}
//	}
//
//	protected function update_detalleValoracion(
//		$fechaActual,
//		$inputTrabajo,
//		$inputComunicacion,
//		$inputProactividad,
//		$inputAprendizaje,
//		$idUpdateComunicacion,
//		$idUpdateTrabajo,
//		$idUpdateProactividad,
//		$idUpdateAprendizaje
//	) {
//
//		for ($i = 0; $i < count($inputTrabajo); $i++) {
//			$data  = array(
//				'puntaje' => $inputTrabajo[$i],
//				'update_at' => $fechaActual,
//				'update_by' => $this->session->userdata("nombres") . " " . $this->session->userdata("apellidos")
//			);
//			$this->Valoracion_adm_model->update_detalleValoracion($idUpdateTrabajo[$i], $data);
//		}
//		for ($i = 0; $i < count($inputComunicacion); $i++) {
//			$data  = array(
//				'puntaje' => $inputComunicacion[$i],
//				'update_at' => $fechaActual,
//				'update_by' => $this->session->userdata("nombres") . " " . $this->session->userdata("apellidos")
//			);
//			$this->Valoracion_adm_model->update_detalleValoracion($idUpdateComunicacion[$i], $data);
//		}
//		for ($i = 0; $i < count($inputProactividad); $i++) {
//			$data  = array(
//				'puntaje' => $inputProactividad[$i],
//				'update_at' => $fechaActual,
//				'update_by' => $this->session->userdata("nombres") . " " . $this->session->userdata("apellidos")
//			);
//			$this->Valoracion_adm_model->update_detalleValoracion($idUpdateProactividad[$i], $data);
//		}
//		for ($i = 0; $i < count($inputAprendizaje); $i++) {
//			$data  = array(
//				'puntaje' => $inputAprendizaje[$i],
//				'update_at' => $fechaActual,
//				'update_by' => $this->session->userdata("nombres") . " " . $this->session->userdata("apellidos")
//			);
//			$this->Valoracion_adm_model->update_detalleValoracion($idUpdateAprendizaje[$i], $data);
//		}
//	}
//
//
//
//
//	public function update()
//	{
//		$now = time();
//		$idUsuario = $this->input->post("idUsuario");
//		$idValoracion = $this->input->post("idValoracion");
//
//		$fechaActual = date("Y-m-d",  $now);
//
//		$tipo_validacion = $this->input->post("tipo_validacion");
//		$promediovaloracion = $this->input->post("promediovaloracion");
//
//		$puntajeTrabajosequipo = $this->input->post("puntajeTrabajosequipo");
//		$puntajeComunicacion = $this->input->post("puntajeComunicacion");
//		$puntajeProactividad = $this->input->post("puntajeProactividad");
//		$puntajeAprendizaje = $this->input->post("puntajeAprendizaje");
//
//		$inputTrabajo = $this->input->post("inputTrabajo");
//		$inputComunicacion = $this->input->post("inputComunicacion");
//		$inputProactividad = $this->input->post("inputProactividad");
//		$inputAprendizaje = $this->input->post("inputAprendizaje");
//
//		$idUpdateComunicacion = $this->input->post("idUpdateComunicacion");
//		$idUpdateTrabajo = $this->input->post("idUpdateTrabajo");
//		$idUpdateProactividad = $this->input->post("idUpdateProactividad");
//		$idUpdateAprendizaje = $this->input->post("idUpdateAprendizaje");
//
//
//
//		$suma1 = 0;
//		$suma2 = 0;
//		$suma3 = 0;
//		$suma4 = 0;
//
//		for ($i = 0; $i < count($inputComunicacion); $i++) {
//			$suma1  = $suma1 + $inputComunicacion[$i];
//			$suma2  = $suma2 + $inputTrabajo[$i];
//			$suma3  = $suma3 + $inputProactividad[$i];
//			$suma4  = $suma4 + $inputAprendizaje[$i];
//		}
//		$promedio_final = ($suma1 + $suma2 + $suma3 + $suma4) / 4;
//
//
//		if ($tipo_validacion == '1') {
//			$data  = array(
//				'total_valoracion' => $promedio_final,
//				'update_by' => $fechaActual,
//				'update_by' => $this->session->userdata("nombres") . " " . $this->session->userdata("apellidos")
//			);
//			if ($this->Valoracion_adm_model->updateValoracion($idValoracion, $data)) {
//				$this->update_detalleValoracion(
//					$fechaActual,
//					$inputTrabajo,
//					$inputComunicacion,
//					$inputProactividad,
//					$inputAprendizaje,
//					$idUpdateComunicacion,
//					$idUpdateTrabajo,
//					$idUpdateProactividad,
//					$idUpdateAprendizaje
//				);
//				redirect(base_url() . "valoracion/valoracion_adm");
//			} else {
//				$this->session->set_flashdata("error", "No se pudo guardar la informacion");
//				redirect(base_url() . "valoracion/valoracion_adm/add");
//			}
//		} elseif ($tipo_validacion == '2') {
//			$data  = array(
//				'total_valoracion' => $promedio_final,
//				'update_by' => $fechaActual,
//				'update_by' => $this->session->userdata("nombres") . " " . $this->session->userdata("apellidos")
//			);
//			if ($this->Valoracion_adm_model->updateValoracion($idValoracion, $data)) {
//				$this->update_detalleValoracion(
//					$fechaActual,
//					$inputTrabajo,
//					$inputComunicacion,
//					$inputProactividad,
//					$inputAprendizaje,
//					$idUpdateComunicacion,
//					$idUpdateTrabajo,
//					$idUpdateProactividad,
//					$idUpdateAprendizaje
//				);
//				redirect(base_url() . "valoracion/valoracion_adm");
//			} else {
//				$this->session->set_flashdata("error", "No se pudo guardar la informacion");
//				redirect(base_url() . "valoracion/valoracion_adm/add");
//			}
//		}
//	}
//
//
//	public function validacion3_update()
//	{
//		$evaluador = $this->Valoracion_adm_model->getusuariosPadreRegistrar($this->session->userdata("id"));
//		$username_evaluador = $evaluador->username;
//
//		$now = time();
//		$añoActual = date("Y",  $now);
//		$fechaActual = date("Y-m-d",  $now);
//		$idObjetivos = $this->input->post("idObjetivos");
//
//
//		$n_obj_1 = $this->input->post("n_obj_1");
//		$a_obj_1 = $this->input->post("a_obj_1");
//		$p_obj_1 = $this->input->post("p_obj_1");
//		$i_obj_1 = $this->input->post("i_obj_1");
//		$r_obj_1 = $this->input->post("r_obj_1");
//
//		$n_obj_2 = $this->input->post("n_obj_2");
//		$a_obj_2 = $this->input->post("a_obj_2");
//		$p_obj_2 = $this->input->post("p_obj_2");
//		$i_obj_2 = $this->input->post("i_obj_2");
//		$r_obj_2 = $this->input->post("r_obj_2");
//
//		$n_obj_3 = $this->input->post("n_obj_3");
//		$a_obj_3 = $this->input->post("a_obj_3");
//		$p_obj_3 = $this->input->post("p_obj_3");
//		$i_obj_3 = $this->input->post("i_obj_3");
//		$r_obj_3 = $this->input->post("r_obj_3");
//
//		$data  = array(
//			'n_obj_1' => $n_obj_1,
//			'a_obj_1' => $a_obj_1,
//			'p_obj_1' => $p_obj_1,
//			'i_obj_1' => $i_obj_1,
//			'r_obj_1' => $r_obj_1,
//
//			'n_obj_2' => $n_obj_2,
//			'a_obj_2' => $a_obj_2,
//			'p_obj_2' => $p_obj_2,
//			'i_obj_2' => $i_obj_2,
//			'r_obj_2' => $r_obj_2,
//
//			'n_obj_3' => $n_obj_3,
//			'a_obj_3' => $a_obj_3,
//			'p_obj_3' => $p_obj_3,
//			'i_obj_3' => $i_obj_3,
//			'r_obj_3' => $r_obj_3,
//
//			'update_at' => $fechaActual,
//			'update_by' => $this->session->userdata("nombres") . " " . $this->session->userdata("apellidos")
//		);
//		$this->Valoracion_adm_model->updateObjetivos($idObjetivos,$data);
//		$this->send_mail_update_objetivos($username_evaluador, $this->session->userdata("nombres") . " " . $this->session->userdata("apellidos"));
//		redirect(base_url() . "valoracion/mi_valoracion_adm/");
//	}
//
//
//	public function show_promedio_general()
//	{
//		$now = time();
//		$añoActual = date("Y",  $now);
//		$fechaActual = date("Y-m-d",  $now);
//		$id = $this->input->post("id");
//
//		$valoracion1= $this->Valoracion_adm_model->getValoracion($id,1, $añoActual);
//		$valoracion2= $this->Valoracion_adm_model->getValoracion($id,2, $añoActual);
//		$valoraciono=$this->Valoracion_adm_model->getValoracionObjetivos($id, $añoActual, 3);
//
//
//
//
//
//		if($valoracion1 == false || $valoracion2 == false || $valoraciono == false){
//			$this->load->view("valoraciones/valoracion_adm/promedio_general_cerrado");
//
//		}else{
//
//			$total_valoracion_1 = round($valoracion1->total_valoracion);
//			$total_valoracion_2 = round($valoracion2->total_valoracion);
//			$total_valoracion_o = round($valoraciono[0]->total_valoracion);
//
//			$promediovaloraciones = ($total_valoracion_1  + $total_valoracion_2)/2 ;
//
//			$promedio_final = $promediovaloraciones * 0.4 + $total_valoracion_o*0.6;
//
//
//			$data = array(
//				'total_valoracion_1' => $total_valoracion_1,
//				'total_valoracion_2' => $total_valoracion_2,
//				'total_valoracion_o' => $total_valoracion_o,
//				'promediovaloraciones' => $promediovaloraciones,
//				'promedio_final' => $promedio_final,
//			);
//			$this->load->view("valoraciones/valoracion_adm/promedio_general",$data);
//		}
//
//
//	}
}
