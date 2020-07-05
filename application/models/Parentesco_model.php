<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Parentesco_model extends CI_Model
{


	public function getusuariosParentesco()
	{
		$this->db->select("u.*,a.nombre as nombreArea,g.nombre as nombreGerencia,r.nombre as nombreRol");
		$this->db->from("usuarios u");
		$this->db->join("parentesco p", "u.id = p.padre_id");
		$this->db->join("areas a", "u.area_id = a.id");
		$this->db->join("roles r", "r.id = u.rol_id");
		$this->db->join("gerencias g", "r.gerencia_id = g.id");
		$this->db->where("p.estado", "1");
		$this->db->where("u.estado", "1");
		$this->db->group_by("p.padre_id", "ASC");
		$resultados = $this->db->get();
		return $resultados->result();
	}

	public function getUsuarios()
	{

		$this->db->select("u.*,a.nombre as nombreArea,g.nombre as nombreGerencia,r.nombre as nombreRol");
		$this->db->from("usuarios u");
		$this->db->join("areas a", "u.area_id = a.id");
		$this->db->join("roles r", "r.id = u.rol_id");
		$this->db->join("gerencias g", "r.gerencia_id = g.id");
 		$this->db->where("u.estado", "1");
		$this->db->order_by("u.nombres", "ASC");
		$resultados = $this->db->get();
		return $resultados->result();
	}



	public function getUsuario($id)
	{
		$this->db->select("u.*,a.nombre as nombreArea,g.nombre as nombreGerencia,r.nombre as nombreRol");
		$this->db->from("usuarios u");
		$this->db->join("areas a", "u.area_id = a.id");
		$this->db->join("roles r", "r.id = u.rol_id");
		$this->db->join("gerencias g", "r.gerencia_id = g.id");
		$this->db->where("u.id", $id);
		$this->db->where("u.estado", "1");
		$resultado = $this->db->get();
		return $resultado->row();
	}

	public function getHijos($id)
	{
		$this->db->select("u.*,a.nombre as nombreArea,g.nombre as nombreGerencia,r.nombre as nombreRol");
		$this->db->from("usuarios u");
		$this->db->join("parentesco p", "u.id = p.hijo_id");
		$this->db->join("areas a", "u.area_id = a.id");
		$this->db->join("roles r", "r.id = u.rol_id");
		$this->db->join("gerencias g", "r.gerencia_id = g.id");
		$this->db->where("p.padre_id", $id);
		$this->db->where("p.estado", "1");
		$this->db->where("u.estado", "1");
		$this->db->order_by("u.nombres", "ASC");
		$resultados = $this->db->get();
		return $resultados->result();

		
	}

	public function getRoles()
	{
		$resultados = $this->db->get("roles");
		return $resultados->result();
	}

	public function login($username, $password)
	{
		$this->db->select("u.*,a.nombre as nombreArea,g.nombre as nombreGerencia,r.nombre as nombreRol");
		$this->db->from("usuarios u");
		$this->db->join("roles r", "r.id = u.rol_id");
		$this->db->join("areas a", "u.area_id = a.id");
		$this->db->join("gerencias g", "a.gerencia_id = g.id");
		$this->db->where("u.username", $username);
		$this->db->where("u.password", $password);
		$resultados = $this->db->get();
		if ($resultados->num_rows() > 0) {
			return $resultados->row();
		} else {
			return false;
		}
	}

	public function getRolbyGerencia($id)
	{
		$this->db->select("g.nombre,r.*");
		$this->db->from("gerencias g");
		$this->db->join("roles r", "r.gerencia_id = g.id");
		$this->db->where("g.id", $id);
		$this->db->where("g.estado", '1');
		$resultado = $this->db->get();
		return $resultado->result();
	}

	public function getRolbyArea($id)
	{
		$this->db->select("g.nombre,a.*");
		$this->db->from("gerencias g");
		$this->db->join("areas a", "a.gerencia_id = g.id");
		$this->db->where("g.id", $id);
		$this->db->where("g.estado", '1');
		$resultado = $this->db->get();
		return $resultado->result();
	}
	public function lastID(){
		return $this->db->insert_id();
	}
	public function save_detalleParentesco($data){
		$this->db->insert("parentesco",$data);
	}

	// CRUD // 
	public function save($data)
	{
		return $this->db->insert("usuarios", $data);
	}
	public function update($id, $data)
	{
		$this->db->where("hijo_id", $id);
		return $this->db->update("parentesco", $data);
	}

}
