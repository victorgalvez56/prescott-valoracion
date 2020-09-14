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
			$this->load->view("valoraciones/valoracion_docentes/list_head", $data);
			$this->load->view("layouts/footer");
			/* Coordinadora */
		} elseif ($tipo_docente[0]->id_tipo_docente == 10) {
			$data = array(
				'permisos' => $this->permisos,
				'hijos' => $hijos,
			);
			$this->load->view("layouts/header");
			$this->load->view("layouts/aside");
			$this->load->view("valoraciones/valoracion_docentes/list_coordinadora", $data);
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
//		$this->load->view("valoraciones/valoracion_adm/list", $data);
//		$this->load->view("layouts/footer");
//	}
//


	public function ver_ficha_pedagogica($id)
	{

		$docente = $this->Valoracion_docentes_model->get_tipo_docente($id);
		$tipo_docente = $docente[0]->id_tipo_docente;

		$visitas_bimestre1 = $this->Valoracion_docentes_model->get_ficha_visitas($id, $this->año_actual, 1);
		$visitas_bimestre2 = $this->Valoracion_docentes_model->get_ficha_visitas($id, $this->año_actual, 2);
		$visitas_bimestre3 = $this->Valoracion_docentes_model->get_ficha_visitas($id, $this->año_actual, 3);
		$visitas_bimestre4 = $this->Valoracion_docentes_model->get_ficha_visitas($id, $this->año_actual, 4);


		$bimestre = $this->Valoracion_docentes_model->get_bimestre($this->fecha_actual);

		$enseñanzas = $this->Valoracion_docentes_model->get_items_by_tipos($tipo_docente, 1);
		$procesos = $this->Valoracion_docentes_model->get_items_by_tipos($tipo_docente, 2);
		$manejos = $this->Valoracion_docentes_model->get_items_by_tipos($tipo_docente, 3);
		$documentos = $this->Valoracion_docentes_model->get_items_by_tipos($tipo_docente, 4);

		$ficha = array();
		if ($visitas_bimestre1 != false) {
			$visits1 = json_decode(json_encode($visitas_bimestre1), true);
			$unique1 = $this->unique_multidim_array($visits1, 'visita_id');


			$i1 = 0;
			$j1 = 0;

			$ficha[0]["nombre"] = "BIMESTRE I";

			foreach ($unique1 as $index => $item) {
				$ficha[0]["visitas"][$i1]["data"] = array("id" => $item["visita_id"]);
				$i1++;
			}

			for ($x = 0; $x < count($ficha[0]["visitas"]); $x++) {
				for ($z = 0; $z < count($visits1); $z++) {

					if ($ficha[0]["visitas"][$x]["data"]["id"] == $visits1[$z]["visita_id"]) {

						$ficha[0]["visitas"][$x]["data"]["item_id"][] = $visits1[$z]["item_id"];
					}

				}
			}
		}

		if ($visitas_bimestre2 != false) {
			$visits2 = json_decode(json_encode($visitas_bimestre2), true);
			$unique2 = $this->unique_multidim_array($visits2, 'visita_id');


			$i2 = 0;
			$j2 = 0;

			$ficha[1]["nombre"] = "BIMESTRE II";

			foreach ($unique2 as $index => $item) {
				$ficha[1]["visitas"][$i2]["data"] = array("id" => $item["visita_id"]);
				$i2++;
			}

			for ($x = 0; $x < count($ficha[1]["visitas"]); $x++) {
				for ($z = 0; $z < count($visits2); $z++) {

					if ($ficha[1]["visitas"][$x]["data"]["id"] == $visits2[$z]["visita_id"]) {

						$ficha[1]["visitas"][$x]["data"]["item_id"][] = $visits2[$z]["item_id"];
					}

				}
			}
		}


		if ($visitas_bimestre3 != false) {
			$visits3 = json_decode(json_encode($visitas_bimestre3), true);
			$unique3 = $this->unique_multidim_array($visits3, 'visita_id');


			$i3 = 0;
			$j3 = 0;

			$ficha[2]["nombre"] = "BIMESTRE III";

			foreach ($unique3 as $index => $item) {
				$ficha[2]["visitas"][$i3]["data"] = array("id" => $item["visita_id"]);
				$i3++;
			}

			for ($x = 0; $x < count($ficha[2]["visitas"]); $x++) {
				for ($z = 0; $z < count($visits3); $z++) {

					if ($ficha[2]["visitas"][$x]["data"]["id"] == $visits3[$z]["visita_id"]) {

						$ficha[2]["visitas"][$x]["data"]["item_id"][] = $visits3[$z]["item_id"];
					}

				}
			}
		}

		if ($visitas_bimestre4 != false) {
			$visits4 = json_decode(json_encode($visitas_bimestre4), true);
			$unique4 = $this->unique_multidim_array($visits4, 'visita_id');


			$i4 = 0;
			$j4 = 0;

			$ficha[3]["nombre"] = "BIMESTRE VI";

			foreach ($unique4 as $index => $item) {
				$ficha[3]["visitas"][$i4]["data"] = array("id" => $item["visita_id"]);
				$i4++;
			}

			for ($x = 0; $x < count($ficha[3]["visitas"]); $x++) {
				for ($z = 0; $z < count($visits4); $z++) {

					if ($ficha[3]["visitas"][$x]["data"]["id"] == $visits4[$z]["visita_id"]) {

						$ficha[3]["visitas"][$x]["data"]["item_id"][] = $visits4[$z]["item_id"];
					}

				}
			}
		}
		echo json_encode($ficha);
		die();

		$data = array(
			'ficha_pedagogica' => $ficha,
			'bimestre' => $bimestre,
			'enseñanzas' => $this->Valoracion_docentes_model->get_items_by_tipos($tipo_docente, 1),
			'procesos' => $this->Valoracion_docentes_model->get_items_by_tipos($tipo_docente, 2),
			'manejos' => $this->Valoracion_docentes_model->get_items_by_tipos($tipo_docente, 3),
			'documentos' => $this->Valoracion_docentes_model->get_items_by_tipos($tipo_docente, 4),
		);
//		echo json_encode($data);
//		die();
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("valoraciones/valoracion_docentes/view", $data);
		$this->load->view("layouts/footer");
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
//		echo json_encode($data);
//		die();
		$this->load->view("valoraciones/valoracion_docentes/add", $data);
	}


	public function registro_ficha_pedagogica()
	{
		$id_profesor = $this->input->post("id_profesor");

		$enseñanzas = $this->input->post("enseñanzas");
		$procesos = $this->input->post("procesos");
		$manejos = $this->input->post("manejos");
		$documentos = $this->input->post("documentos");


		$describo = $this->input->post("describo");
		$valoro = $this->input->post("valoro");
		$pregunto = $this->input->post("pregunto");
		$sugiero = $this->input->post("sugiero");


		$ficha_pedagógica = $this->Valoracion_docentes_model->existe_ficha($id_profesor, $this->año_actual);
		$puntaje_visita = count($enseñanzas) + count($procesos) + count($manejos) + count($documentos);

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
				'create_at' => $this->fecha_actual,
				'create_by' => $this->session->userdata("nombres") . " " . $this->session->userdata("apellidos"),

			);
			$this->Valoracion_docentes_model->save_new_visita($array_visita);
			$ultimo_registro_visita = $this->Valoracion_docentes_model->lastID();
			$this->save_detalle_visita($ultimo_registro_visita, $enseñanzas, $procesos, $manejos, $documentos);
			$this->index();

		} else {

			$array_visita = array(
				'puntaje' => $puntaje_visita,
				'describo_eval' => $describo,
				'valoro_eval' => $valoro,
				'pregunto_eval' => $pregunto,
				'ficha_pedagogica_id' => $ficha_pedagógica->id,
				'sugiero_eval' => $sugiero,
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
			$this->save_detalle_visita($ultimo_registro_visita, $enseñanzas, $procesos, $manejos, $documentos);
			$this->index();

		}
	}


	protected function save_detalle_visita(
		$id_visita,
		$enseñanzas,
		$procesos,
		$manejos,
		$documentos
	)
	{

		for ($i = 0; $i < count($enseñanzas); $i++) {
			$data = array(
				'visita_id' => $id_visita,
				'item_id' => $enseñanzas[$i],
				'create_at' => $this->fecha_actual,
				'create_by' => $this->session->userdata("nombres") . " " . $this->session->userdata("apellidos")
			);
			$this->Valoracion_docentes_model->save_detalle_visita($data);
		}

		for ($i = 0; $i < count($procesos); $i++) {
			$data = array(
				'visita_id' => $id_visita,
				'item_id' => $procesos[$i],
				'create_at' => $this->fecha_actual,
				'create_by' => $this->session->userdata("nombres") . " " . $this->session->userdata("apellidos")
			);
			$this->Valoracion_docentes_model->save_detalle_visita($data);
		}

		for ($i = 0; $i < count($manejos); $i++) {
			$data = array(
				'visita_id' => $id_visita,
				'item_id' => $manejos[$i],
				'create_at' => $this->fecha_actual,
				'create_by' => $this->session->userdata("nombres") . " " . $this->session->userdata("apellidos")
			);
			$this->Valoracion_docentes_model->save_detalle_visita($data);
		}

		for ($i = 0; $i < count($documentos); $i++) {
			$data = array(
				'visita_id' => $id_visita,
				'item_id' => $documentos[$i],
				'create_at' => $this->fecha_actual,
				'create_by' => $this->session->userdata("nombres") . " " . $this->session->userdata("apellidos")
			);
			$this->Valoracion_docentes_model->save_detalle_visita($data);
		}
	}

}
