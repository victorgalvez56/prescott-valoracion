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
		$this->load->model("Periodos_model");
		$this->load->helper('date');
	}

	public function index()
	{


		$data  = array(
			'permisos' => $this->permisos,
			'hijos' => $this->Valoracion_adm_model->getusuariosHijosRegistrar($this->session->userdata("id")),
			'permisovaloracion' => 'Registrar'
		);

		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("valoraciones/valoracion_adm/list", $data);
		$this->load->view("layouts/footer");
	}
	public function show()
	{
		$data  = array(
			'permisos' => $this->permisos,
			'hijos' => $this->Valoracion_adm_model->getusuariosHijosLeer($this->session->userdata("id")),
			'permisovaloracion' => 'Leer'
		);

		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("valoraciones/valoracion_adm/list", $data);
		$this->load->view("layouts/footer");
	}

	public function validacion1_leer()
	{

		$now = time();
		$añoActual = date("Y",  $now);
		$id = $this->input->post("id");

		$validacion = "1";
		$data = array(
			'permisos' => $this->permisos,
			'detalle_valoraciones' => $this->Valoracion_adm_model->getDetalleValoracion($id, $añoActual),
			'tipo_validacion' => $validacion,
			'usuario' => $this->Valoracion_adm_model->getusuario($id),
			'competencias' => $this->Valoracion_adm_model->getCompetencias(),
			'comunicaciones' => $this->Valoracion_adm_model->getindicadorComunicacion(),
			'trabajosequipo' => $this->Valoracion_adm_model->getindicadorTrabajos(),
			'aprendizajes' => $this->Valoracion_adm_model->getindicadorAprendizajes(),
			'proactividades' => $this->Valoracion_adm_model->getindicadorProactividades(),
			'permisovaloracion' => 'Leer'
		);


		if ($data["detalle_valoraciones"] == false) {
			$this->load->view("valoraciones/valoracion_adm/valoracion_no_registrada", $data);

		}else{
			$this->load->view("valoraciones/valoracion_adm/view", $data);

		}

	}


	public function validacion2_leer()
	{

		$now = time();
		$añoActual = date("Y",  $now);
		$id = $this->input->post("id");

		$validacion = "2";
		$data = array(
			'permisos' => $this->permisos,
			'detalle_valoraciones' => $this->Valoracion_adm_model->getDetalleValoracion($id, $añoActual),
			'tipo_validacion' => $validacion,
			'usuario' => $this->Valoracion_adm_model->getusuario($id),
			'competencias' => $this->Valoracion_adm_model->getCompetencias(),
			'comunicaciones' => $this->Valoracion_adm_model->getindicadorComunicacion(),
			'trabajosequipo' => $this->Valoracion_adm_model->getindicadorTrabajos(),
			'aprendizajes' => $this->Valoracion_adm_model->getindicadorAprendizajes(),
			'proactividades' => $this->Valoracion_adm_model->getindicadorProactividades(),
			'permisovaloracion' => 'Leer'
		);


		if ($data["detalle_valoraciones"] == false) {
			$this->load->view("valoraciones/valoracion_adm/valoracion_no_registrada", $data);

		}else{
			$this->load->view("valoraciones/valoracion_adm/view", $data);

		}

	}


	public function validacion3_leer()
	{
		$now = time();
		$añoActual = date("Y",  $now);
		$fechaActual = date("Y-m-d",  $now);

		$validacion = "3";
		$fechas_valoraciones = $this->Periodos_model->getFechasValidacion($añoActual, $validacion);
		$fecha_inicio_val1 = $fechas_valoraciones->fecha_inicio;
		$fecha_fin_val1 = $fechas_valoraciones->fecha_fin;
		$id = $this->input->post("id");

		$estado_val_obj = $this->Valoracion_adm_model->getEstadoObj($id,$añoActual);
		$data = array(
			'id' => $id,
			'permisos' => $this->permisos,
			'usuario' => $this->Valoracion_adm_model->getusuario($id),
			'tipo_validacion' => $validacion,
			'estado' => $estado_val_obj,
		);
		// echo json_encode($data);
		$this->load->view("valoraciones/valoracion_adm/show_objetivos", $data);

	}

	public function success_objetivos()
	{
		$now = time();
		$nowFormat = date("d-m-Y H:i:s",  $now);

		$id = $this->input->post("idObjetivos");

		$data = array(
			'update_at' => $nowFormat,
			'update_by' => $this->session->userdata("nombres")." ".$this->session->userdata("apellidos"),
			'estado' => 'aceptado',
		);
		$this->Valoracion_adm_model->update($id,$data);
		redirect(base_url() . "valoracion/mi_valoracion_adm/");
	}




	public function validacion1_registro()
	{
		$now = time();
		$añoActual = date("Y",  $now);
		$fechaActual = date("Y-m-d",  $now);

		$validacion = "1";
		$fechas_valoraciones = $this->Periodos_model->getFechasValidacion($añoActual, $validacion);
		$fecha_inicio_val1 = $fechas_valoraciones->fecha_inicio;
		$fecha_fin_val1 = $fechas_valoraciones->fecha_fin;
		$id = $this->input->post("id");

		$previo_registro = $this->Valoracion_adm_model->validacionValoracion($id, $validacion);
		if ($previo_registro == true) {
			$data = array(
				'previo_registro' => $this->Valoracion_adm_model->validacionValoracion($id, $validacion),
				'permisos' => $this->permisos,
				'usuario' => $this->Valoracion_adm_model->getusuario($id),
				'tipo_validacion' => $validacion,
				'puntajes1_val1' => $this->Valoracion_adm_model->getvaloracion1($id, $añoActual, 1, 1),
				'puntajes2_val1' => $this->Valoracion_adm_model->getvaloracion1($id, $añoActual, 2, 1),
				'puntajes3_val1' => $this->Valoracion_adm_model->getvaloracion1($id, $añoActual, 3, 1),
				'puntajes4_val1' => $this->Valoracion_adm_model->getvaloracion1($id, $añoActual, 4, 1),
			);
		} else {
			$data = array(
				'previo_registro' => $this->Valoracion_adm_model->validacionValoracion($id, $validacion),
				'permisos' => $this->permisos,
				'usuario' => $this->Valoracion_adm_model->getusuario($id),
				'tipo_validacion' => $validacion,
				'competencias' => $this->Valoracion_adm_model->getCompetencias(),
				'comunicaciones' => $this->Valoracion_adm_model->getindicadorComunicacion(),
				'trabajosequipo' => $this->Valoracion_adm_model->getindicadorTrabajos(),
				'aprendizajes' => $this->Valoracion_adm_model->getindicadorAprendizajes(),
				'proactividades' => $this->Valoracion_adm_model->getindicadorProactividades(),
			);
		}
		if ($fechaActual >= $fecha_inicio_val1 && $fechaActual <= $fecha_fin_val1) {
			$this->load->view("valoraciones/valoracion_adm/add", $data);
		} else {
			$this->load->view("valoraciones/valoracion_adm/valoracion_cerrada", $data);
		}
	}

	public function validacion2_registro()
	{
		$now = time();
		$añoActual = date("Y",  $now);
		$fechaActual = date("Y-m-d",  $now);

		$validacion = "2";
		$fechas_valoraciones = $this->Periodos_model->getFechasValidacion($añoActual, $validacion);
		$fecha_inicio_val1 = $fechas_valoraciones->fecha_inicio;
		$fecha_fin_val1 = $fechas_valoraciones->fecha_fin;
		$id = $this->input->post("id");

		$previo_registro = $this->Valoracion_adm_model->validacionValoracion($id, $validacion);
		if ($previo_registro == true) {
			$data = array(
				'previo_registro' => $this->Valoracion_adm_model->validacionValoracion($id, $validacion),
				'permisos' => $this->permisos,
				'usuario' => $this->Valoracion_adm_model->getusuario($id),
				'tipo_validacion' => $validacion,
				'puntajes1_val1' => $this->Valoracion_adm_model->getvaloracion1($id, $añoActual, 1, 2),
				'puntajes2_val1' => $this->Valoracion_adm_model->getvaloracion1($id, $añoActual, 2, 2),
				'puntajes3_val1' => $this->Valoracion_adm_model->getvaloracion1($id, $añoActual, 3, 2),
				'puntajes4_val1' => $this->Valoracion_adm_model->getvaloracion1($id, $añoActual, 4, 2),
			);
		} else {
			$data = array(
				'previo_registro' => $this->Valoracion_adm_model->validacionValoracion($id, $validacion),
				'permisos' => $this->permisos,
				'usuario' => $this->Valoracion_adm_model->getusuario($id),
				'tipo_validacion' => $validacion,
				'competencias' => $this->Valoracion_adm_model->getCompetencias(),
				'comunicaciones' => $this->Valoracion_adm_model->getindicadorComunicacion(),
				'trabajosequipo' => $this->Valoracion_adm_model->getindicadorTrabajos(),
				'aprendizajes' => $this->Valoracion_adm_model->getindicadorAprendizajes(),
				'proactividades' => $this->Valoracion_adm_model->getindicadorProactividades(),
			);
		}
		if ($fechaActual >= $fecha_inicio_val1 && $fechaActual <= $fecha_fin_val1) {
			$this->load->view("valoraciones/valoracion_adm/add", $data);
		} else {
			$this->load->view("valoraciones/valoracion_adm/valoracion_cerrada", $data);
		}
	}

	public function validacion3_registro()
	{
		$now = time();
		$añoActual = date("Y",  $now);
		$fechaActual = date("Y-m-d",  $now);

		$n_obj_1 = $this->input->post("n_obj_1");
		$a_obj_1 = $this->input->post("a_obj_1");
		$p_obj_1 = $this->input->post("p_obj_1");
		$i_obj_1 = $this->input->post("i_obj_1");
		$r_obj_1 = $this->input->post("r_obj_1");

		$n_obj_2 = $this->input->post("n_obj_2");
		$a_obj_2 = $this->input->post("a_obj_2");
		$p_obj_2 = $this->input->post("p_obj_2");
		$i_obj_2 = $this->input->post("i_obj_2");
		$r_obj_2 = $this->input->post("r_obj_2");

		$n_obj_3 = $this->input->post("n_obj_3");
		$a_obj_3 = $this->input->post("a_obj_3");
		$p_obj_3 = $this->input->post("p_obj_3");
		$i_obj_3 = $this->input->post("i_obj_3");
		$r_obj_3 = $this->input->post("r_obj_3");

		$data  = array(
			'n_obj_1' => $n_obj_1,
			'a_obj_1' => $a_obj_1,
			'p_obj_1' => $p_obj_1,
			'i_obj_1' => $i_obj_1,
			'r_obj_1' => $r_obj_1,

			'n_obj_2' => $n_obj_2,
			'a_obj_2' => $a_obj_2,
			'p_obj_2' => $p_obj_2,
			'i_obj_2' => $i_obj_2,
			'r_obj_2' => $r_obj_2,

			'n_obj_3' => $n_obj_3,
			'a_obj_3' => $a_obj_3,
			'p_obj_3' => $p_obj_3,
			'i_obj_3' => $i_obj_3,
			'r_obj_3' => $r_obj_3,
			
			'estado' => 'espera',
			'usuario_id' => $this->session->userdata("id"),
			'create_at' => $fechaActual,
			'create_by' => $this->session->userdata("nombres") . " " . $this->session->userdata("apellidos")
		);
		$this->Valoracion_adm_model->saveObjetivos($data);
		redirect(base_url() . "valoracion/mi_valoracion_adm/");

	}

	public function store()
	{
		$now = time();
		$idUsuario = $this->input->post("idUsuario");
		$fechaActual = date("Y-m-d",  $now);

		$tipo_validacion = $this->input->post("tipo_validacion");
		$promediovaloracion = $this->input->post("promediovaloracion");

		$puntajeTrabajosequipo = $this->input->post("puntajeTrabajosequipo");
		$puntajeComunicacion = $this->input->post("puntajeComunicacion");
		$puntajeProactividad = $this->input->post("puntajeProactividad");
		$puntajeAprendizaje = $this->input->post("puntajeAprendizaje");

		$inputTrabajo = $this->input->post("inputTrabajo");
		$inputComunicacion = $this->input->post("inputComunicacion");
		$inputProactividad = $this->input->post("inputProactividad");
		$inputAprendizaje = $this->input->post("inputAprendizaje");

		$idPuntajeComunicaciones = $this->input->post("idPuntajeComunicaciones");
		$idPuntajeProactividad = $this->input->post("idPuntajeProactividad");
		$idPuntajeAprendizaje = $this->input->post("idPuntajeAprendizaje");
		$idPuntajeTrabajo = $this->input->post("idPuntajeTrabajo");

		$suma1 = 0;
		$suma2 = 0;
		$suma3 = 0;
		$suma4 = 0;

		for ($i = 0; $i < count($inputComunicacion); $i++) {
			$suma1  = $suma1 + $inputComunicacion[$i];
			$suma2  = $suma2 + $inputTrabajo[$i];
			$suma3  = $suma3 + $inputProactividad[$i];
			$suma4  = $suma4 + $inputAprendizaje[$i];
		}
		$promedio_final = ($suma1 + $suma2 + $suma3 + $suma4) / 4;

		if ($tipo_validacion == '1') {
			$data  = array(
				'total_valoracion' => $promedio_final,
				'estado' => "1",
				'usuario_id' => $idUsuario,
				'tipo_valoracion_id	' => $tipo_validacion,
				'create_at' => $fechaActual,
				'create_by' => $this->session->userdata("nombres") . " " . $this->session->userdata("apellidos")
			);
			if ($this->Valoracion_adm_model->save($data)) {
				$idvaloracion = $this->Valoracion_adm_model->lastID();
				$this->save_detalleValoracion(
					$idvaloracion,
					$inputTrabajo,
					$inputComunicacion,
					$inputProactividad,
					$inputAprendizaje,
					$idPuntajeComunicaciones,
					$idPuntajeProactividad,
					$idPuntajeAprendizaje,
					$idPuntajeTrabajo
				);
				redirect(base_url() . "valoracion/valoracion_adm");
			} else {
				$this->session->set_flashdata("error", "No se pudo guardar la informacion");
				redirect(base_url() . "valoracion/valoracion_adm/add");
			}
		} elseif ($tipo_validacion == '2') {
			$data  = array(
				'total_valoracion' => $promediovaloracion,
				'estado' => "1",
				'usuario_id' => $idUsuario,
				'tipo_valoracion_id	' => $tipo_validacion,
				'create_at' => $fechaActual,
				'create_by' => $this->session->userdata("nombres") . " " . $this->session->userdata("apellidos")
			);
			if ($this->Valoracion_adm_model->save($data)) {
				$idvaloracion = $this->Valoracion_adm_model->lastID();
				$this->save_detalleValoracion(
					$idvaloracion,
					$inputTrabajo,
					$inputComunicacion,
					$inputProactividad,
					$inputAprendizaje,
					$idPuntajeComunicaciones,
					$idPuntajeProactividad,
					$idPuntajeAprendizaje,
					$idPuntajeTrabajo
				);
				redirect(base_url() . "valoracion/valoracion_adm");
			} else {
				$this->session->set_flashdata("error", "No se pudo guardar la informacion");
				redirect(base_url() . "valoracion/valoracion_adm/add");
			}
		}
	}



	protected function save_detalleValoracion(
		$idvaloracion,
		$inputTrabajo,
		$inputComunicacion,
		$inputProactividad,
		$inputAprendizaje,
		$idPuntajeComunicaciones,
		$idPuntajeProactividad,
		$idPuntajeAprendizaje,
		$idPuntajeTrabajo
	) {
		$now = time();
		$nowFormat = date("d-m-Y H:i:s",  $now);




		for ($i = 0; $i < count($inputComunicacion); $i++) {
			$data  = array(
				'puntaje' => $inputComunicacion[$i],
				'estado' => '1',
				'valoracion_id' => $idvaloracion,
				'indicador_id' => $idPuntajeComunicaciones[$i],
				'create_at' => $nowFormat,
				'create_by' => $this->session->userdata("nombres") . " " . $this->session->userdata("apellidos")
			);
			$this->Valoracion_adm_model->save_detalleValoracion($data);
		}
		for ($i = 0; $i < count($inputTrabajo); $i++) {
			$data  = array(
				'puntaje' => $inputTrabajo[$i],
				'estado' => '1',
				'valoracion_id' => $idvaloracion,
				'indicador_id' => $idPuntajeTrabajo[$i],
				'create_at' => $nowFormat,
				'create_by' => $this->session->userdata("nombres") . " " . $this->session->userdata("apellidos")
			);
			$this->Valoracion_adm_model->save_detalleValoracion($data);
		}
		for ($i = 0; $i < count($inputProactividad); $i++) {
			$data  = array(
				'puntaje' => $inputProactividad[$i],
				'estado' => '1',
				'valoracion_id' => $idvaloracion,
				'indicador_id' => $idPuntajeProactividad[$i],
				'create_at' => $nowFormat,
				'create_by' => $this->session->userdata("nombres") . " " . $this->session->userdata("apellidos")
			);
			$this->Valoracion_adm_model->save_detalleValoracion($data);
		}
		for ($i = 0; $i < count($inputAprendizaje); $i++) {
			$data  = array(
				'puntaje' => $inputAprendizaje[$i],
				'estado' => '1',
				'valoracion_id' => $idvaloracion,
				'indicador_id' => $idPuntajeAprendizaje[$i],
				'create_at' => $nowFormat,
				'create_by' => $this->session->userdata("nombres") . " " . $this->session->userdata("apellidos")
			);
			$this->Valoracion_adm_model->save_detalleValoracion($data);
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
