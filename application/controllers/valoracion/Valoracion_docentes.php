<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Valoracion_docentes extends CI_Controller
{
	private $permisos;
	private $fecha_actual;
	private $año_actual;

	public function __construct()
	{
		parent::__construct();
		$this->permisos = $this->backend_lib->control();
		$this->load->model("Valoracion_adm_model");
		$this->load->model("Valoracion_docentes_model");
		$this->load->model("Periodos_model");
		$this->load->model("Usuarios_model");
		$this->load->helper('date');
		$this->fecha = time();
		$this->fecha_actual = date("Y-m-d", $this->fecha);
		$this->año_actual = date("Y", $this->fecha);
	}

	public function index()
	{
		$hijos = $this->Valoracion_docentes_model->get_docentes_registrar($this->session->userdata("id"));
		for ($i = 0; $i < count($hijos); $i++) {
			$hijos[$i]->val1 = $this->Valoracion_adm_model->getExistValoracion($hijos[$i]->hijo_id, 1, $this->año_actual);
			$hijos[$i]->val2 = $this->Valoracion_adm_model->getExistValoracion($hijos[$i]->hijo_id, 2, $this->año_actual);
			$hijos[$i]->val3 = $this->Valoracion_adm_model->getExistValoracion($hijos[$i]->hijo_id, 3, $this->año_actual);
		}

		$tipo_docente = $this->Valoracion_docentes_model->get_tipo_docente($this->session->userdata("id"));

		/* Head */
		if ($tipo_docente[0]->id_tipo_docente == 8) {
			$data = array(
				'permisos' => $this->permisos,
				'hijos' => $hijos,
			);

			$this->load->view("layouts/header");
			$this->load->view("layouts/aside");
			$this->load->view("valoraciones/valoracion_docentes/PS/list_head", $data);
			$this->load->view("layouts/footer");
			/* Coordinadora */
		} elseif ($tipo_docente[0]->id_tipo_docente == 10) {
			$data = array(
				'permisos' => $this->permisos,
				'hijos' => $hijos,
			);
			$this->load->view("layouts/header");
			$this->load->view("layouts/aside");
			$this->load->view("valoraciones/valoracion_docentes/PS/list_coordinadora", $data);
			$this->load->view("layouts/footer");
		}


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
//		$this->load->view("valoraciones/valoracion_docentes/list", $data);
//		$this->load->view("layouts/footer");
//	}
//


	public function ver_ficha_pedagogica($id)
	{
//
		$docente = $this->Valoracion_docentes_model->get_tipo_docente($id);
		$tipo_docente = $docente[0]->id_tipo_docente;
		$bimestre = $this->Valoracion_docentes_model->get_bimestre($this->fecha_actual);


		$data = array(
			'id_profesor' => $id,
//			'ficha_pedagogica' => $ficha,
			'bimestre' => $bimestre,
			'items' => $this->Valoracion_docentes_model->get_id_items($tipo_docente),
			'observaciones' => $this->Valoracion_docentes_model->get_observaciones($id,$this->fecha_actual),
		);
//
//		echo json_encode($this->Valoracion_docentes_model->get_observaciones($id,$this->fecha_actual));
//die();
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("valoraciones/valoracion_docentes/view", $data);
		$this->load->view("layouts/footer", $data);
	}

	function unique_multidim_array($array, $key)
	{
		$temp_array = array();
		$i = 0;
		$key_array = array();

		for ($i = 0; $i < count($array); $i++) {
			if (!in_array($array[$i][$key], $key_array)) {
				$key_array[$i] = $array[$i][$key];
				$temp_array[$i] = $array[$i];
			}
			$i++;
		}
		return $temp_array;
	}


	public function view_registro_ficha_pedagogica()
	{
		$id = $this->input->post("id");
		$docente = $this->Valoracion_docentes_model->get_tipo_docente($id);
		$tipo_docente = $docente[0]->id_tipo_docente;

		$bimestre = $this->Valoracion_docentes_model->get_bimestre($this->fecha_actual);


		$data = array(
			'id_profesor' => $id,
			'fecha_hoy' => $this->fecha_actual,
			'bimestre' => $bimestre,
			'enseñanzas' => $this->Valoracion_docentes_model->get_items_by_tipos($tipo_docente, 1),
			'procesos' => $this->Valoracion_docentes_model->get_items_by_tipos($tipo_docente, 2),
			'manejos' => $this->Valoracion_docentes_model->get_items_by_tipos($tipo_docente, 3),
			'documentos' => $this->Valoracion_docentes_model->get_items_by_tipos($tipo_docente, 4),
		);

		$this->load->view("valoraciones/valoracion_docentes/add", $data);
	}


	public function registro_ficha_pedagogica()
	{
		$id_profesor = $this->input->post("id_profesor");
		$docente = $this->Valoracion_docentes_model->get_tipo_docente($id_profesor);
		$tipo_docente = $docente[0]->id_tipo_docente;
		$items_by_tipo_docente = $this->Valoracion_docentes_model->get_id_items($tipo_docente);


		$describo = $this->input->post("describo");
		$valoro = $this->input->post("valoro");
		$pregunto = $this->input->post("pregunto");
		$sugiero = $this->input->post("sugiero");

		$bimestre = $this->input->post("id_bimestre");

		$items_si_marked = $this->input->post("items");


		$ficha_pedagógica = $this->Valoracion_docentes_model->existe_ficha($id_profesor, $this->año_actual);

		$puntaje_visita = count($items_si_marked);

		if ($ficha_pedagógica == false) {

			$array_ficha = array(
				'estado' => "EN PROCESO",
				'usuario_id' => $id_profesor,
				'create_at' => $this->fecha_actual,
				'create_by' => $this->session->userdata("nombres") . " " . $this->session->userdata("apellidos"),
			);
			$this->Valoracion_docentes_model->save_new_ficha_pedagogica($array_ficha);

			$ultimo_registro_ficha = $this->Valoracion_docentes_model->lastID();
			$array_visita = array(
				'puntaje' => $puntaje_visita,
				'describo_eval' => $describo,
				'valoro_eval' => $valoro,
				'pregunto_eval' => $pregunto,
				'sugiero_eval' => $sugiero,
				'ficha_pedagogica_id' => $ultimo_registro_ficha,
				'bimestre_id' => $bimestre,
				'create_at' => $this->fecha_actual,
				'create_by' => $this->session->userdata("nombres") . " " . $this->session->userdata("apellidos"),
			);

			$this->Valoracion_docentes_model->save_new_visita($array_visita);
			$ultimo_registro_visita = $this->Valoracion_docentes_model->lastID();
			$this->save_detalle_visita($ultimo_registro_visita, $items_si_marked, $items_by_tipo_docente);
			redirect('/valoracion/valoracion_docentes/', 'refresh');
		} else {

			$array_visita = array(
				'puntaje' => $puntaje_visita,
				'describo_eval' => $describo,
				'valoro_eval' => $valoro,
				'pregunto_eval' => $pregunto,
				'sugiero_eval' => $sugiero,
				'ficha_pedagogica_id' => $ficha_pedagógica->id,
				'bimestre_id' => $bimestre,
				'create_at' => $this->fecha_actual,
				'create_by' => $this->session->userdata("nombres") . " " . $this->session->userdata("apellidos"),

			);
			$array_ficha = array(
				'update_at' => $this->fecha_actual,
				'update_by' => $this->session->userdata("nombres") . " " . $this->session->userdata("apellidos"),
			);

			$this->Valoracion_docentes_model->update_ficha_pedagogica($id_profesor, $array_ficha, $this->año_actual);
			$this->Valoracion_docentes_model->save_new_visita($array_visita);
			$ultimo_registro_visita = $this->Valoracion_docentes_model->lastID();
			$this->save_detalle_visita($ultimo_registro_visita, $items_si_marked, $items_by_tipo_docente);
			redirect('/valoracion/valoracion_docentes/', 'refresh');

		}
	}


	protected function save_detalle_visita(
		$id_visita,
		$items_si_marked,
		$items_by_tipo_docente
	)
	{

		for ($i = 0; $i < count($items_by_tipo_docente); $i++) {
			$items_array[] = $items_by_tipo_docente[$i]->id;
		}
		$resultado = array_diff($items_array, $items_si_marked);

		$items_no_marked = array_values($resultado);


		for ($i = 0; $i < count($items_si_marked); $i++) {
			$data = array(
				'visita_id' => $id_visita,
				'item_id' => $items_si_marked[$i],
				'marked' => "si",
				'create_at' => $this->fecha_actual,
				'create_by' => $this->session->userdata("nombres") . " " . $this->session->userdata("apellidos")
			);
			$this->Valoracion_docentes_model->save_detalle_visita($data);

		}
		for ($i = 0; $i < count($items_no_marked); $i++) {
			$data = array(
				'visita_id' => $id_visita,
				'item_id' => $items_no_marked[$i],
				'marked' => "no",
				'create_at' => $this->fecha_actual,
				'create_by' => $this->session->userdata("nombres") . " " . $this->session->userdata("apellidos")
			);
			$this->Valoracion_docentes_model->save_detalle_visita($data);

		}

	}

	public function get_detalle_visitas_bimestre1()
	{

		$id_profesor = $this->input->post("id");

		$data = $this->Valoracion_docentes_model->get_items_by_profesor($id_profesor, $this->año_actual, 1);

		echo json_encode($data);
	}


	public function get_detalle_visitas_bimestre2()
	{

		$id_profesor = $this->input->post("id");

		$data = $this->Valoracion_docentes_model->get_items_by_profesor($id_profesor, $this->año_actual, 2);

		echo json_encode($data);
	}

	public function get_detalle_visitas_bimestre3()
	{

		$id_profesor = $this->input->post("id");

		$data = $this->Valoracion_docentes_model->get_items_by_profesor($id_profesor, $this->año_actual, 3);

		echo json_encode($data);
	}
	public function get_detalle_visitas_bimestre4()
	{

		$id_profesor = $this->input->post("id");

		$data = $this->Valoracion_docentes_model->get_items_by_profesor($id_profesor, $this->año_actual, 4);

		echo json_encode($data);
	}



	public function get_puntaje_bimestre1()
	{

		$id_profesor = $this->input->post("id");

		$data = $this->Valoracion_docentes_model->get_puntaje_by_profesor($id_profesor, $this->año_actual, 1);

		echo json_encode($data);
	}

	public function get_puntaje_bimestre2()
	{

		$id_profesor = $this->input->post("id");

		$data = $this->Valoracion_docentes_model->get_puntaje_by_profesor($id_profesor, $this->año_actual, 2);

		echo json_encode($data);
	}

	public function get_puntaje_bimestre3()
	{

		$id_profesor = $this->input->post("id");

		$data = $this->Valoracion_docentes_model->get_puntaje_by_profesor($id_profesor, $this->año_actual, 3);

		echo json_encode($data);
	}


	public function get_puntaje_bimestre4()
	{

		$id_profesor = $this->input->post("id");

		$data = $this->Valoracion_docentes_model->get_puntaje_by_profesor($id_profesor, $this->año_actual, 4);

		echo json_encode($data);
	}





	public function get_id_items()
	{

		$id_profesor = $this->input->post("id");
		$docente = $this->Valoracion_docentes_model->get_tipo_docente($id_profesor);
		$tipo_docente = $docente[0]->id_tipo_docente;


		$data = $this->Valoracion_docentes_model->get_id_items($tipo_docente);

		echo json_encode($data);
	}


}
