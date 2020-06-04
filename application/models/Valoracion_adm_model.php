<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Valoracion_adm_model extends CI_Model
{
	// Query para administrador de sistema //
	public function getvaloracionTotal()
	{
		$this->db->select("v.*,u.nombres,u.apellidos,u.area,u.gerencia");
		$this->db->from("valoraciones v");
		$this->db->join("usuarios u", "u.id = v.usuario_id");
		$this->db->join("roles r", "r.id = u.rol_id");
		$this->db->where("v.estado", "1");
		$this->db->where("u.gerencia", "Administración ");
		$resultados = $this->db->get();
		return $resultados->result();
	}


	public function getusuariosTotal()
	{
		$this->db->select("v.*,u.nombres,u.apellidos,u.area,u.gerencia");
		$this->db->from("valoraciones v");
		$this->db->join("usuarios u", "u.id = v.usuario_id");
		$this->db->join("roles r", "r.id = u.rol_id");
		$this->db->where("v.estado", "1");
		$this->db->where("u.gerencia", "Administración ");
		$resultados = $this->db->get();
		return $resultados->result();
	}


	// Query para responsable de área //

	public function getvaloracionArea($gerencia, $area, $rol)
	{
		$this->db->select("u.id,u.nombres,u.apellidos,u.area,u.gerencia");
		$this->db->from("usuarios u");
		$this->db->join("roles r", "r.id = u.rol_id");
		$this->db->where("u.estado", "1");
		$this->db->where("u.gerencia", $gerencia);
		$this->db->where("u.area", $area);
		$this->db->where("r.id<>", $rol);
		$resultados = $this->db->get();
		return $resultados->result();
	}
	// Query para jefe  de área //

	public function getvaloracionGerencia($gerencia, $rol)
	{
		$this->db->select("u.id,u.nombres,u.apellidos,u.area,u.gerencia");
		$this->db->from("usuarios u");
		$this->db->join("roles r", "r.id = u.rol_id");
		$this->db->where("u.estado", "1");
		$this->db->where("u.gerencia", $gerencia);
		$this->db->where("r.id<>", $rol);
		$resultados = $this->db->get();
		return $resultados->result();
	}


	public function getCompetencias()
	{
		$resultado = $this->db->get("competencias");
		return $resultado->result_array();
	}

	public function getindicadorComunicacion()
	{
		$this->db->select("i.*,c.nombre");
		$this->db->from("indicadores i");
		$this->db->join("competencias c", "c.id = i.competencia_id");
		$this->db->where("i.estado", "1");
		$this->db->where("c.nombre", "COMUNICACIÓN");
		$resultados = $this->db->get();
		return $resultados->result();
	}
	public function getindicadorTrabajos()
	{
		$this->db->select("i.*,c.nombre");
		$this->db->from("indicadores i");
		$this->db->join("competencias c", "c.id = i.competencia_id");
		$this->db->where("i.estado", "1");
		$this->db->where("c.nombre", "TRABAJO EN EQUIPO");
		$resultados = $this->db->get();
		return $resultados->result();
	}
	public function getindicadorAprendizajes()
	{
		$this->db->select("i.*,c.nombre");
		$this->db->from("indicadores i");
		$this->db->join("competencias c", "c.id = i.competencia_id");
		$this->db->where("i.estado", "1");
		$this->db->where("c.nombre", "APRENDIZAJE");
		$resultados = $this->db->get();
		return $resultados->result();
	}
	public function getindicadorProactividades()
	{
		$this->db->select("i.*,c.nombre");
		$this->db->from("indicadores i");
		$this->db->join("competencias c", "c.id = i.competencia_id");
		$this->db->where("i.estado", "1");
		$this->db->where("c.nombre", "PROACTIVIDAD");
		$resultados = $this->db->get();
		return $resultados->result();
	}

	public function getArea($id)
	{
		$this->db->select("g.nombre as nombreGerencia,a.*");
		$this->db->from("gerencias g");
		$this->db->join("areas a", "a.gerencia_id = g.id");
		$this->db->where("a.id", $id);
		$resultado = $this->db->get("areas");
		return $resultado->row();
	}

	public function getAreabyGerencia($id)
	{
		$this->db->select("*");
		$this->db->where("gerencia_id", $id);
		$this->db->where("estado", '1');
		$resultado = $this->db->get("areas");
		return $resultado->result();
	}
	//CRUD//
	public function save($data)
	{
		return $this->db->insert("areas", $data);
	}

	public function update($id, $data)
	{
		$this->db->where("id", $id);
		return $this->db->update("areas", $data);
	}
}
