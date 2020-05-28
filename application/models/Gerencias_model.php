<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gerencias_model extends CI_Model
{

	public function getGerencias()
	{
		$this->db->where("estado", '1');
		$resultado = $this->db->get("gerencias");
		return $resultado->result();
	}
	public function getGerencia($id)
	{
		$this->db->where("id", $id);
		$resultado = $this->db->get("gerencias");
		return $resultado->row();
	}
	//CRUD//
	public function save($data)
	{
		return $this->db->insert("gerencias", $data);
	}

	public function update($id, $data)
	{
		$this->db->where("id", $id);
		return $this->db->update("gerencias", $data);
	}
}
