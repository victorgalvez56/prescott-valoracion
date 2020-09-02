<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Anecdotarios_model extends CI_Model
{

	public function getAnecdotarios()
	{
		$this->db->where("estado", '1');
		$resultado = $this->db->get("anecdotarios");
		return $resultado->result();
	}
	public function getAnecdotario($id)
	{
		$this->db->where("id", $id);
		$resultado = $this->db->get("anecdotarios");
		return $resultado->row();
	}

	public function getAnecdotariobyUsuario($id,$añoActual)
	{
		$this->db->where("usuario_id", $id);
		$this->db->where("year(create_at)", $añoActual);
		$this->db->order_by("create_at","asc");
		$resultados = $this->db->get("anecdotarios");
		if ($resultados->num_rows() > 0) {
			return $resultados->result();
		} else {
			return false;
		}
	}

	//CRUD//
	public function save($data)
	{
		return $this->db->insert("anecdotarios", $data);
	}

	public function update($id, $data)
	{
		$this->db->where("id", $id);
		return $this->db->update("anecdotarios", $data);
	}
}
