<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Usuarios_model extends CI_Model
{

	public function getUsuarios()
	{
		$this->db->select("u.*,r.nombre as nombreRol,g.nombre as nombreGerencia");
		$this->db->from("usuarios u");
		$this->db->join("roles r", "r.id = u.rol_id");
		$this->db->join("gerencias g", "r.gerencia_id = g.id");
		$this->db->where("u.estado", "1");
		$resultados = $this->db->get();
		return $resultados->result();
	}

	public function getUsuario($id)
	{
		$this->db->select("u.*,r.nombre as nombreRol");
		$this->db->from("usuarios u");
		$this->db->join("roles r", "r.id = u.rol_id");
		$this->db->where("u.id", $id);
		$this->db->where("u.estado", "1");
		$resultado = $this->db->get();
		return $resultado->row();
	}

	public function getRoles()
	{
		$resultados = $this->db->get("roles");
		return $resultados->result();
	}

	public function login($username, $password)
	{
		$this->db->select("u.*,g.nombre as nombreGerencia,r.nombre as nombreRol");
		$this->db->from("usuarios u");
		$this->db->join("roles r", "r.id = u.rol_id");
		$this->db->join("gerencias g", "r.gerencia_id = g.id");
		$this->db->where("username", $username);
		$this->db->where("password", $password);
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
		$this->db->where("g.nombre", $id);
		$this->db->where("g.estado", '1');
		$resultado = $this->db->get();
		return $resultado->result();
	}
	// CRUD // 
	public function save($data)
	{
		return $this->db->insert("usuarios", $data);
	}
	public function update($id, $data)
	{
		$this->db->where("id", $id);
		return $this->db->update("usuarios", $data);
	}
}
