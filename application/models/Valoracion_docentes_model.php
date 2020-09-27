<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Valoracion_docentes_model extends CI_Model
{
	public function get_tipo_docente($id_docente)
	{
		$this->db->select("u.*,r.id as id_tipo_docente,r.nombre as tipo_docente");
		$this->db->from("usuarios u");
		$this->db->join("roles r", "r.id = u.rol_id");
		$this->db->where("u.id", $id_docente);
		$resultados = $this->db->get();
		return $resultados->result();
	}

	public function get_docentes_registrar($idPadre)
	{
		$this->db->select("p.*,u.*,r.nombre as tipo_docente");
		$this->db->from("parentesco p");
		$this->db->join("usuarios u", "u.id = p.hijo_id");
		$this->db->join("roles r", "r.id = u.rol_id");
		$this->db->where("p.padre_id", $idPadre);
		$this->db->where("p.estado", "1");
		$this->db->where("p.registrar", "1");
		$resultados = $this->db->get();
		return $resultados->result();
	}

	public function get_items_by_tipos($tipo_profesor, $id)
	{
		$this->db->select("t.nombre as nombre_tipo_item,i.*");
		$this->db->from("tipos_items t");
		$this->db->join("items i", "i.id_tipo_item = t.id");
		$this->db->where("i.id_tipo_profesor", $tipo_profesor);
		$this->db->where("i.id_tipo_item", $id);
		$resultados = $this->db->get();
		return $resultados->result();
	}


	public function get_id_items($tipo_profesor)
	{
		$this->db->select("t.nombre as nombre_tipo_item,i.*");
		$this->db->from("tipos_items t");
		$this->db->join("items i", "i.id_tipo_item = t.id");
		$this->db->where("i.id_tipo_profesor", $tipo_profesor);
		$resultados = $this->db->get();
		return $resultados->result();
	}

	public function get_items_by_profesor($id_profesor,$año_actual,$id_bimestre)
	{
		$this->db->select("i.nombre, dv.item_id,dv.marked");
		$this->db->from("fichas_pedagogicas f");
		$this->db->join("visitas v", "v.ficha_pedagogica_id = f.id");
		$this->db->join("detalles_visitas dv", "v.id = dv.visita_id");
		$this->db->join("items i", "i.id = dv.item_id");
		$this->db->where("f.usuario_id", $id_profesor);
		$this->db->where("v.bimestre_id", $id_bimestre);
		$this->db->where("year(f.create_at)", $año_actual);
		$this->db->order_by("i.id,v.id", "ASC");
		$resultados = $this->db->get();
		return $resultados->result();
	}

	public function get_bimestre($fecha_actual)
	{
		$this->db->select("*");
		$this->db->from("bimestres");
		$this->db->where("fecha_inicio <=", $fecha_actual);
		$this->db->where("fecha_fin >=", $fecha_actual);
		$resultados = $this->db->get();
		return $resultados->row();
	}
	public function get_puntaje_by_profesor($id_profesor,$año_actual,$id_bimestre)
	{
		$this->db->select("v.*");
		$this->db->from("fichas_pedagogicas f");
		$this->db->join("visitas v", "v.ficha_pedagogica_id = f.id");
		$this->db->where("f.usuario_id", $id_profesor);
		$this->db->where("year(f.create_at)", $año_actual);
		$this->db->where("v.bimestre_id", $id_bimestre);
		$this->db->order_by("v.bimestre_id", "asc");

		$resultados = $this->db->get();
		if ($resultados->num_rows() > 0) {
			return $resultados->result();
		} else {
			return false;
		}
	}

	public function get_observaciones($id_profesor,$año_actual)
	{
		$this->db->select("v.*,u.nombres ,u.apellidos");
		$this->db->from("fichas_pedagogicas f");
		$this->db->join("visitas v", "v.ficha_pedagogica_id = f.id");
		$this->db->join("usuarios u", "f.usuario_id = u.id");
		$this->db->where("f.usuario_id", $id_profesor);
		$this->db->where("year(f.create_at)", $año_actual);
		$this->db->order_by("v.id", "asc");
		$resultados = $this->db->get();
		if ($resultados->num_rows() > 0) {
			return $resultados->result();
		} else {
			return false;
		}
	}

	public function existe_ficha($id_profesor,$añoActual)
	{
		$this->db->select("*");
		$this->db->from("fichas_pedagogicas");
		$this->db->where("usuario_id",$id_profesor);
		$this->db->where("year(create_at)", $añoActual);
		$resultados = $this->db->get();
		if ($resultados->num_rows() > 0) {
			return $resultados->row();
		} else {
			return false;
		}
	}

	public function get_ficha_visitas($id,$añoActual,$bimestre)
	{
		$this->db->select("f.promedio,f.create_at,f.update_by, v.*,dv.*");
		$this->db->from("fichas_pedagogicas f");
		$this->db->join("visitas v", "v.ficha_pedagogica_id = f.id");
		$this->db->join("detalles_visitas dv", "dv.visita_id = v.id");
		$this->db->join("items i", "dv.item_id = i.id");
		$this->db->join("tipos_items ti", "i.id_tipo_item = ti.id");
		$this->db->where("f.usuario_id", $id);
		$this->db->where("year(f.create_at)", $añoActual);
		$this->db->where("v.bimestre_id", $bimestre);
		$resultados = $this->db->get();
		if ($resultados->num_rows() > 0) {
			return $resultados->result();
		} else {
			return false;
		}
	}



//SELECT
//from fichas_pedagogicas f join visitas v
//on f.id = v.ficha_pedagogica_id join detalles_visitas dv
//on dv.visita_id = v.id join items i
//on dv.item_id = i.id;



	public function lastID(){
		return $this->db->insert_id();
	}

	public function save_new_ficha_pedagogica($array_ficha)
	{
		return $this->db->insert("fichas_pedagogicas", $array_ficha);
	}


	public function update_ficha_pedagogica($id_profesor, $data,$añoActual)
	{
		$this->db->where("usuario_id", $id_profesor);
		$this->db->where("year(create_at)", $añoActual);
		return $this->db->update("fichas_pedagogicas", $data);
	}

	public function save_new_visita($array_visita)
	{
		return $this->db->insert("visitas", $array_visita);
	}


	public function update_visita($id_profesor, $data)
	{
		$this->db->where("usuario_id", $id_profesor);
		return $this->db->update("visitas", $data);
	}

	public function save_detalle_visita($data)
	{
		return $this->db->insert("detalles_visitas", $data);
	}

}
