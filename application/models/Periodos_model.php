<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Periodos_model extends CI_Model
{

	public function getPeriodos()
	{
		$this->db->select("*");
		$this->db->from("periodos");
		$resultados = $this->db->get();
		return $resultados->result();
	}


	public function getDetallePeriodo($id)
	{
		$this->db->select("dp.id,p.periodo,tv.nombre as nombre,dp.fecha_inicio,dp.fecha_fin");
		$this->db->from("periodos p");
		$this->db->join("detalles_periodos dp", "dp.periodo_id = p.id");
		$this->db->join("tipos_valoracion tv", "dp.tipo_valoracion_id = tv.id");
		$this->db->where("dp.periodo_id", $id);
		$resultado = $this->db->get();
		return $resultado->result();
	}
	public function getDetallePeriodoedit($id)
	{
		$this->db->select("dp.*,p.periodo,tv.nombre");
		$this->db->from("periodos p");
		$this->db->join("detalles_periodos dp", "dp.periodo_id = p.id");
		$this->db->join("tipos_valoracion tv", "dp.tipo_valoracion_id = tv.id");
		$this->db->where("dp.id", $id);
		$resultado = $this->db->get();
		return $resultado->row();
	}
	public function getFechasValidacion($añoactual,$validacion)
	{
		$this->db->select("tv.nombre,dp.fecha_inicio,dp.fecha_fin");
		$this->db->from("periodos p");
		$this->db->join("detalles_periodos dp", "dp.periodo_id = p.id");
		$this->db->join("tipos_valoracion tv", "dp.tipo_valoracion_id = tv.id");
		$this->db->where("p.periodo", $añoactual);
		$this->db->where("dp.tipo_valoracion_id", $validacion);
		$resultado = $this->db->get();
		return $resultado->row();
	}

	
	// CRUD // 
	public function save($data)
	{
		return $this->db->insert("detalles_periodos", $data);
	}
	public function update($id, $data)
	{
		$this->db->where("id", $id);
		return $this->db->update("detalles_periodos", $data);
	}
}