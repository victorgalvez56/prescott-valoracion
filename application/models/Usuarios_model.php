<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Usuarios_model extends CI_Model
{


	public function getusuariosPadres()
	{
		$this->db->select("u.*");
		$this->db->from("usuarios u");
		$this->db->join("padres p", "u.id = p.usuario_id");
		$this->db->where("p.estado", "1");
		$resultados = $this->db->get();
		return $resultados->result();
	}

	public function getUsuarios()
	{

		
// select u.*,up.nombres as nombrePadre,up.apellidos as apellidoPadre
// from usuarios u join hijos h
// on u.id=h.hijo_id

// join padres p 
// on p.id=h.padre_id

// join usuarios up
// on up.id=p.usuario_id

// join areas a 
// on u.area_id = a.id

// join roles r 
// on u.rol_id = r.id

// join gerencias g 
// on r.gerencia_id= g.id

		$this->db->select("u.*,a.nombre as nombreArea,g.nombre as nombreGerencia,r.nombre as nombreRol,up.nombres as nombrePadre,up.apellidos as apellidoPadre");
		$this->db->from("usuarios u");
		$this->db->join("hijos h", "u.id = h.hijo_id");
		$this->db->join("padres p", "p.id = h.padre_id");
		$this->db->join("usuarios up", "up.id = p.usuario_id");
		$this->db->join("areas a", "u.area_id = a.id");
		$this->db->join("roles r", "r.id = u.rol_id");
		$this->db->join("gerencias g", "r.gerencia_id = g.id");
		$this->db->order_by("nombrePadre", "asc");
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
		$this->db->select("u.*,a.nombre as nombreArea,g.nombre as nombreGerencia,r.nombre as nombreRol,p.id as idPadre");
		$this->db->from("usuarios u");
		$this->db->join("roles r", "r.id = u.rol_id");
		$this->db->join("areas a", "u.area_id = a.id");
		$this->db->join("gerencias g", "a.gerencia_id = g.id");
		$this->db->join("padres p", "p.usuario_id = u.id");
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
		$this->db->join("roles r", "r.area_id = g.id");
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
