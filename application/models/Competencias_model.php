<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Competencias_model extends CI_Model
{

	public function getCompetencias()
	{
		$this->db->where("estado", '1');
		$resultado = $this->db->get("competencias");
		return $resultado->result();
	}
	public function getCompetencia($id)
	{
		$this->db->where("id", $id);
		$resultado = $this->db->get("competencias");
		return $resultado->row();
	}
	//CRUD//
	public function save($data)
	{
		return $this->db->insert("competencias", $data);
	}

	public function update($id, $data)
	{
		$this->db->where("id", $id);
		return $this->db->update("competencias", $data);
	}
}
