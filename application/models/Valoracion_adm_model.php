<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Valoracion_adm_model extends CI_Model
{
	// Query para administrador de sistema //
	public function getusuariosTotal()
	{
		$this->db->select("u.*,r.nombre as nombreRol,g.nombre as nombreGerencia");
		$this->db->from("usuarios u");
		$this->db->join("roles r", "r.id = u.rol_id");
		$this->db->join("gerencias g", "r.gerencia_id = g.id");
		$this->db->where("u.estado", "1");
		$this->db->where("g.nombre", "No docentes");
		$resultados = $this->db->get();
		return $resultados->result();
	}

	public function getusuario($id)
	{
		$this->db->select("u.*,r.nombre as nombreRol,g.nombre as nombreGerencia");
		$this->db->from("usuarios u");
		$this->db->join("roles r", "r.id = u.rol_id");
		$this->db->join("gerencias g", "r.gerencia_id = g.id");
		$this->db->where("u.estado", "1");
		$this->db->where("u.id", $id);
		$resultado = $this->db->get();
		return $resultado->row();
	}

	public function getusuariosHijosRegistrar($idPadre)
	{
		$this->db->select("p.*,u.*");
		$this->db->from("parentesco p");
		$this->db->join("usuarios u", "u.id = p.hijo_id");
		$this->db->where("p.padre_id", $idPadre);
		$this->db->where("p.estado", "1");
		$this->db->where("p.registrar", "1");
		$resultados = $this->db->get();
		return $resultados->result();
	}
	public function getusuariosHijosLeer($idPadre)
	{
		$this->db->select("p.*,u.*");
		$this->db->from("parentesco p");
		$this->db->join("usuarios u", "u.id = p.hijo_id");
		$this->db->where("p.padre_id", $idPadre);
		$this->db->where("p.estado", "1");
		$this->db->where("p.leer", "1");
		$resultados = $this->db->get();
		return $resultados->result();
	}

	public function validacionValoracion($id)
	{
		$this->db->select("v.tipo_valoracion_id");
		$this->db->from("usuarios u");
		$this->db->join("valoraciones v", "v.usuario_id = u.id");
		$this->db->join("tipos_valoracion t", "v.tipo_valoracion_id = t.id");
		$this->db->where("u.estado", "1");
		$this->db->where("u.id", $id);
		$this->db->order_by("v.tipo_valoracion_id", "desc");
		$resultados = $this->db->get();
		if ($resultados->num_rows() > 0) {
			return $resultados->row();
		} else {
			return false;
		}
	}

	public function save_detalleValoracion($data){
		$this->db->insert("detalles_valoraciones",$data);
	}

	public function lastID(){
		return $this->db->insert_id();
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
		$this->db->where("c.id", "1");
		$resultados = $this->db->get();
		return $resultados->result();
	}
	public function getindicadorTrabajos()
	{
		$this->db->select("i.*,c.nombre");
		$this->db->from("indicadores i");
		$this->db->join("competencias c", "c.id = i.competencia_id");
		$this->db->where("i.estado", "1");
		$this->db->where("c.id", "2");
		$resultados = $this->db->get();
		return $resultados->result();
	}
	public function getindicadorAprendizajes()
	{
		$this->db->select("i.*,c.nombre");
		$this->db->from("indicadores i");
		$this->db->join("competencias c", "c.id = i.competencia_id");
		$this->db->where("i.estado", "1");
		$this->db->where("c.id", "3");
		$resultados = $this->db->get();
		return $resultados->result();
	}
	public function getindicadorProactividades()
	{
		$this->db->select("i.*,c.nombre");
		$this->db->from("indicadores i");
		$this->db->join("competencias c", "c.id = i.competencia_id");
		$this->db->where("i.estado", "1");
		$this->db->where("c.id", "4");
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
		return $this->db->insert("valoraciones", $data);
	}

	public function update($id, $data)
	{
		$this->db->where("id", $id);
		return $this->db->update("valoraciones", $data);
	}
}
