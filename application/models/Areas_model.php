<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Areas_model extends CI_Model
{

	public function getAreas()
	{
		$this->db->select("g.nombre as nombreGerencia,a.*");
		$this->db->from("gerencias g");
		$this->db->join("areas a", "a.gerencia_id = g.id");
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
