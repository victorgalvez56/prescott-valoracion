<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Parentesco extends CI_Controller
{
	private $permisos;
	public function __construct()
	{
		parent::__construct();
		$this->permisos = $this->backend_lib->control();
		$this->load->model("Parentesco_model");
		$this->load->model("Areas_model");
		$this->load->model("Gerencias_model");
	}

	public function index()
	{
		$data  = array(
			'permisos' => $this->permisos,
			'usuarios' => $this->Parentesco_model->getusuariosParentesco(),
		);

		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/parentesco/list", $data);
		$this->load->view("layouts/footer");
	}

	public function add()
	{
		$data  = array(
			'gerencias' => $this->Gerencias_model->getGerencias(),
			'usuarios' => $this->Parentesco_model->getUsuarios(),
		);

		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/parentesco/add", $data);
		$this->load->view("layouts/footer");
	}
	public function permitions()
	{
		$data  = array(
			'usuarios' => $this->Parentesco_model->getUsuarios(),
		);

		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/parentesco/permitions", $data);
		$this->load->view("layouts/footer");
	}
	public function store()
	{
		$leer = $this->input->post("leer");
		$registro = $this->input->post("valoracion");

		$nombres = $this->input->post("nombres");
		$apellidos = $this->input->post("apellidos");
		$username = $this->input->post("usuario");
		$password = $this->input->post("password");
		$rol = $this->input->post("rol");
		$area = $this->input->post("area");
		// $this->form_validation->set_rules("username", "Usuario", "required|is_unique[usuarios.username]");

		// if ($this->form_validation->run() == TRUE) {
		$data  = array(
			'nombres' => $nombres,
			'apellidos' => $apellidos,
			'username' => $username,
			'password' => sha1($password),
			'rol_id' => $rol,
			'area_id' => $area,
			'estado' => "1"
		);
		if ($this->Parentesco_model->save($data)) {
			$idusuario = $this->Parentesco_model->lastID();
			$this->save_padresUsuario($idusuario, $leer, $registro);
			redirect(base_url() . "administrador/parentesco");
		} else {
			redirect(base_url() . "administador/parentesco/add");
		}
		// } else {
		// 	$this->session->set_flashdata("error", "El campo usuario ya está registrado");
		// 	$this->add();
		// }
	}

	public function store_hijosPadres()
	{
		$leer = $this->input->post("leer");
		$registro = $this->input->post("valoracion");
		$idPadres = $this->input->post("idPadres");

		$arrayRegistro = array();
		$arrayLeer = array();

		if (0 < ($leer) && 0 == ($registro)) {
			for ($i = 0; $i < count($idPadres); $i++) {
				for ($j = 0; $j < count($leer); $j++) {
					$data  = array(
						'hijo_id' => $leer[$j],
						'padre_id' => $idPadres[$i],
						'leer' => '1',
						'estado' => '1',
					);
					$this->Parentesco_model->save_detalleParentesco($data);
				}
			}
			redirect(base_url() . "administrador/parentesco");
		}
		if (0 < ($registro) && 0 == ($leer)) {
			for ($i = 0; $i < count($idPadres); $i++) {
				for ($j = 0; $j < count($registro); $j++) {
					$data  = array(
						'hijo_id' => $registro[$j],
						'padre_id' => $idPadres[$i],
						'registrar' => '1',
						'estado' => '1'
					);
					$this->Parentesco_model->save_detalleParentesco($data);
				}
			}
			redirect(base_url() . "administrador/parentesco");

		}
		if (0 < ($registro) && 0 < ($leer)) {
			$arrayintersection = array_values(array_intersect($registro, $leer));

			for ($i = 0; $i < count($registro); $i++) {
				$igual = false;
				for ($j = 0; $j < count($arrayintersection) & !$igual; $j++) {
					if ($registro[$i] == $arrayintersection[$j])
						$igual = true;
				}
				if (!$igual) array_push($arrayRegistro, $registro[$i]);
			}

			for ($i = 0; $i < count($leer); $i++) {
				$igual = false;
				for ($j = 0; $j < count($arrayintersection) & !$igual; $j++) {
					if ($leer[$i] == $arrayintersection[$j])
						$igual = true;
				}
				if (!$igual) array_push($arrayLeer, $leer[$i]);
			}
			for ($i = 0; $i < count($idPadres); $i++) {
				for ($j = 0; $j < count($arrayintersection); $j++) {
					$data  = array(
						'hijo_id' => $arrayintersection[$j],
						'padre_id' => $idPadres[$i],
						'registrar' => '1',
						'leer' => '1',
						'estado' => '1'
					);
					$this->Parentesco_model->save_detalleParentesco($data);
				}
			}
			for ($i = 0; $i < count($idPadres); $i++) {
				for ($j = 0; $j < count($arrayRegistro); $j++) {
					$data  = array(
						'hijo_id' => $arrayRegistro[$j],
						'padre_id' => $idPadres[$i],
						'registrar' => '1',
						'estado' => '1'
					);
					$this->Parentesco_model->save_detalleParentesco($data);
				}
			}
			for ($i = 0; $i < count($idPadres); $i++) {
				for ($j = 0; $j < count($arrayLeer); $j++) {
					$data  = array(
						'hijo_id' => $arrayLeer[$j],
						'padre_id' => $idPadres[$i],
						'leer' => '1',
						'estado' => '1'
					);
					$this->Parentesco_model->save_detalleParentesco($data);
				}
			}
			redirect(base_url() . "administrador/parentesco");
		}
	}
	protected function save_padresUsuario($idusuario, $leer, $registro)
	{


		$arrayintersection = array_intersect($registro, $leer);
		$arrayRegistro = array();
		$arrayLeer = array();

		if (0 < ($leer) && 0 == ($registro)) {
			for ($i = 0; $i < count($leer); $i++) {
				$data  = array(
					'hijo_id' => $idusuario,
					'padre_id' => $leer[$i],
					'leer' => '1',
					'estado' => '1',
				);
				$this->Parentesco_model->save_detalleParentesco($data);
			}
			redirect(base_url() . "administrador/parentesco");
		}
		if (0 < ($registro) && 0 == ($leer)) {
			for ($i = 0; $i < count($registro); $i++) {
				$data  = array(
					'hijo_id' => $idusuario,
					'padre_id' => $registro[$i],
					'registrar' => '1',
					'estado' => '1'
				);
				$this->Parentesco_model->save_detalleParentesco($data);
			}
			redirect(base_url() . "administrador/parentesco");
		}
		if (0 < ($registro) && 0 < ($leer)) {
			$arrayintersection = array_values(array_intersect($registro, $leer));

			for ($i = 0; $i < count($registro); $i++) {
				$igual = false;
				for ($j = 0; $j < count($arrayintersection) & !$igual; $j++) {
					if ($registro[$i] == $arrayintersection[$j])
						$igual = true;
				}
				if (!$igual) array_push($arrayRegistro, $registro[$i]);
			}

			for ($i = 0; $i < count($leer); $i++) {
				$igual = false;
				for ($j = 0; $j < count($arrayintersection) & !$igual; $j++) {
					if ($leer[$i] == $arrayintersection[$j])
						$igual = true;
				}
				if (!$igual) array_push($arrayLeer, $leer[$i]);
			}
			for ($i = 0; $i < count($arrayintersection); $i++) {
				$data  = array(
					'hijo_id' => $idusuario,
					'padre_id' => $arrayintersection[$i],
					'registrar' => '1',
					'leer' => '1',
					'estado' => '1'
				);
				$this->Parentesco_model->save_detalleParentesco($data);
			}
			for ($i = 0; $i < count($arrayRegistro); $i++) {
				$data  = array(
					'hijo_id' => $idusuario,
					'padre_id' => $arrayRegistro[$i],
					'registrar' => '1',
					'estado' => '1'
				);
				$this->Parentesco_model->save_detalleParentesco($data);
			}
			for ($i = 0; $i < count($arrayLeer); $i++) {
				$data  = array(
					'hijo_id' => $idusuario,
					'padre_id' => $arrayLeer[$i],
					'leer' => '1',
					'estado' => '1'
				);
				$this->Parentesco_model->save_detalleParentesco($data);
			}
			redirect(base_url() . "administrador/parentesco");
		}
	}
	public function edit($id)
	{
		$data  = array(
			'roles' => $this->Parentesco_model->getRoles(),
			'usuario' => $this->Parentesco_model->getUsuario($id)
		);


		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/parentesco/edit", $data);
		$this->load->view("layouts/footer");
	}

	public function update()
	{
		$idusuario = $this->input->post("idUsuario");
		$nombres = $this->input->post("nombres");
		$apellidos = $this->input->post("apellidos");
		$telefono = $this->input->post("telefono");
		$email = $this->input->post("email");
		$username = $this->input->post("usuario");
		$password = $this->input->post("password");
		$rol = $this->input->post("rol");
		$area = $this->input->post("area");

		$data  = array(
			'nombres' => $nombres,
			'apellidos' => $apellidos,
			'username' => $username,
			'password' => sha1($password),
			'rol_id' => $rol,
			'area' => $area,
		);

		if ($this->Parentesco_model->update($idusuario, $data)) {
			redirect(base_url() . "administrador/parentesco");
		} else {
			$this->session->set_flashdata("error", "No se pudo guardar la informacion");
			redirect(base_url() . "administrador/parentesco/edit/" . $idusuario);
		}
	}

	public function delete($id)
	{
		$data  = array(
			'estado' => "0",
		);
		$this->Parentesco_model->update($id, $data);
		redirect(base_url() . "administrador/parentesco");
	}
	public function getRolesbyGerencia()
	{
		$id = $this->input->post("id");
		$data = array(
			"roles" => $this->Parentesco_model->getRolbyGerencia($id)
		);
		echo json_encode($data);
	}


	public function getAreasbyGerencia()
	{
		$id = $this->input->post("id");
		$data = array(
			"areas" => $this->Parentesco_model->getRolbyArea($id)
		);
		echo json_encode($data);
	}


	public function getUsuario()
	{
		$id = $this->input->post("id");
		$data = array(
			"usuario" => $this->Parentesco_model->getUsuario($id)
		);
		echo json_encode($data);
	}
	public function view()
	{
		$idusuario = $this->input->post("id");
		$data = array(
			"usuarios" => $this->Parentesco_model->getHijos($idusuario),
		);
		$this->load->view("admin/parentesco/view", $data);
	}
}
