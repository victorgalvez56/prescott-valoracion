<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Indicadores_model extends CI_Model
{

	public function getIndicadores()
	{
		$this->db->select("c.nombre as nombreCompetencia,i.*");
		$this->db->from("competencias c");
		$this->db->join("indicadores i", "i.competencia_id = c.id");
		$this->db->where("i.estado", '1');
		$this->db->order_by("nombreCompetencia", 'asc');
		$resultados = $this->db->get();
		return $resultados->result();
	}

	public function getIndicador($id)
	{
		$this->db->select("c.nombre as nombreCompetencia,i.*");
		$this->db->from("competencias c");
		$this->db->join("indicadores i", "i.competencia_id = c.id");
		$this->db->where("i.id", $id);
		$resultado = $this->db->get("indicadores");
		return $resultado->row();
	}

	//CRUD//
	public function save($data)
	{
		return $this->db->insert("indicadores", $data);
	}

	public function update($id, $data)
	{
		$this->db->where("id", $id);
		return $this->db->update("indicadores", $data);
	}
}
