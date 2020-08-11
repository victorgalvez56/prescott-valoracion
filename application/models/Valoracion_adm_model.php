<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Valoracion_adm_model extends CI_Model
{
	// Query para administrador de sistema //
	public function getusuariosTotal()
	{
		$this->db->select("u.*,r.nombre as nombreRol,g.nombre as nombreGerencia");
		$this->db->from("usuarios u");
		$this->db->join("roles r", "r.id = u.rol_id");
		$this->db->join("gerencias g", "r.gerencia_id = g.id");
		$this->db->where("u.estado", "1");
		$this->db->where("g.nombre", "No docentes");
		$resultados = $this->db->get();
		return $resultados->result();
	}

	public function getusuario($id)
	{
		$this->db->select("u.*,r.nombre as nombreRol,g.nombre as nombreGerencia");
		$this->db->from("usuarios u");
		$this->db->join("roles r", "r.id = u.rol_id");
		$this->db->join("gerencias g", "r.gerencia_id = g.id");
		$this->db->where("u.estado", "1");
		$this->db->where("u.id", $id);
		$resultado = $this->db->get();
		return $resultado->row();
	}

	public function getusuariosPadreRegistrar($idHijo)
	{
		$this->db->select("u.nombres,u.apellidos");
		$this->db->from("parentesco p");
		$this->db->join("usuarios u", "u.id = p.padre_id");
		$this->db->where("p.hijo_id", $idHijo);
		$this->db->where("p.estado", "1");
		$this->db->where("p.registrar", "1");
		$resultados = $this->db->get();
		if ($resultados->num_rows() > 0) {
			return $resultados->row();
		} else {
			return false;
		}	
	}

	public function getEstadoObj($id,$añoActual)
	{
		$this->db->select("*");
		$this->db->from("objetivos");
		$this->db->where("usuario_id",$id);
		$this->db->where("year(create_at)", $añoActual);
		$resultados = $this->db->get();
		if ($resultados->num_rows() > 0) {
			return $resultados->row();
		} else {
			return false;
		}	
	}


	public function getusuariosHijosRegistrar($idPadre)
	{
		$this->db->select("p.*,u.*");
		$this->db->from("parentesco p");
		$this->db->join("usuarios u", "u.id = p.hijo_id");
		$this->db->where("p.padre_id", $idPadre);
		$this->db->where("p.estado", "1");
		$this->db->where("p.registrar", "1");
		$resultados = $this->db->get();
		return $resultados->result();
	}
	public function getusuariosHijosLeer($idPadre)
	{
		$this->db->select("p.*,u.*");
		$this->db->from("parentesco p");
		$this->db->join("usuarios u", "u.id = p.hijo_id");
		$this->db->where("p.padre_id", $idPadre);
		$this->db->where("p.estado", "1");
		$this->db->where("p.leer", "1");
		$resultados = $this->db->get();
		return $resultados->result();
	}

	public function validacionValoracion($id,$valoracion)
	{
		$this->db->select("v.tipo_valoracion_id");
		$this->db->from("usuarios u");
		$this->db->join("valoraciones v", "v.usuario_id = u.id");
		$this->db->join("tipos_valoracion t", "v.tipo_valoracion_id = t.id");
		$this->db->where("u.estado", "1");
		$this->db->where("u.id", $id);
		$this->db->where("v.tipo_valoracion_id", $valoracion);
		$this->db->where("v.estado", "1");
		$this->db->order_by("v.tipo_valoracion_id", "desc");
		$resultados = $this->db->get();
		if ($resultados->num_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}

	public function getDetalleValoracion($id,$añoActual)
	{
		$this->db->select("dv.*");
		$this->db->from("usuarios u");
		$this->db->join("valoraciones v", "v.usuario_id = u.id");
		$this->db->join("tipos_valoracion t", "v.tipo_valoracion_id = t.id");
		$this->db->join("detalles_valoraciones dv", "dv.valoracion_id = v.id");
		$this->db->where("v.usuario_id", $id);
		$this->db->where("year(v.create_at)", $añoActual);
		$this->db->order_by("dv.indicador_id", "asc");
		$resultados = $this->db->get();
		if ($resultados->num_rows() > 0) {
			return $resultados->result();
		} else {
			return false;
		}
	}

	public function getValoracion1($id,$añoActual,$competencia,$tipo_val)
	{

		$this->db->select("v.total_valoracion,tv.nombre,u.nombres,u.apellidos,dv.puntaje,i.descripcion,c.nombre,v.create_by");
		$this->db->from("valoraciones v");
		$this->db->join("tipos_valoracion tv", "v.tipo_valoracion_id = tv.id");
		$this->db->join("detalles_valoraciones dv", " v.id = dv.valoracion_id");

		$this->db->join("indicadores i", "dv.indicador_id = i.id");
		$this->db->join("usuarios u", "v.usuario_id = u.id");

		$this->db->join("competencias c", "i.competencia_id= c.id");
		$this->db->where("v.usuario_id", $id);
		$this->db->where("v.tipo_valoracion_id", $tipo_val);
		$this->db->where("c.id", $competencia);
		$this->db->where("year(v.create_at)", $añoActual);
		$resultados = $this->db->get();
		if ($resultados->num_rows() > 0) {
			return $resultados->result();
		} else {
			return false;
		}
	}

	public function getEntrevistaColaborador($id_colaborador,$añoActual,$tipo_entrevista)
	{
		$this->db->select("*");
		$this->db->from("entrevistas");
		$this->db->where("colaborador_id", $id_colaborador);
		$this->db->where("tipo_entrevista_id", $tipo_entrevista);
		$this->db->where("estado", '1');
		$this->db->where("year(create_at)", $añoActual);
		$resultados = $this->db->get();
		if ($resultados->num_rows() > 0) {
			return $resultados->result();
		} else {
			return false;
		}
	}


	


	public function save_detalleValoracion($data){
		$this->db->insert("detalles_valoraciones",$data);
	}

	public function lastID(){
		return $this->db->insert_id();
	}
	public function getCompetencias()
	{
		$resultado = $this->db->get("competencias");
		return $resultado->result_array();
	}

	public function getindicadorComunicacion()
	{
		$this->db->select("i.*,c.nombre");
		$this->db->from("indicadores i");
		$this->db->join("competencias c", "c.id = i.competencia_id");
		$this->db->where("i.estado", "1");
		$this->db->where("c.id", "1");
		$resultados = $this->db->get();
		return $resultados->result();
	}
	public function getindicadorTrabajos()
	{
		$this->db->select("i.*,c.nombre");
		$this->db->from("indicadores i");
		$this->db->join("competencias c", "c.id = i.competencia_id");
		$this->db->where("i.estado", "1");
		$this->db->where("c.id", "2");
		$resultados = $this->db->get();
		return $resultados->result();
	}
	public function getindicadorAprendizajes()
	{
		$this->db->select("i.*,c.nombre");
		$this->db->from("indicadores i");
		$this->db->join("competencias c", "c.id = i.competencia_id");
		$this->db->where("i.estado", "1");
		$this->db->where("c.id", "3");
		$resultados = $this->db->get();
		return $resultados->result();
	}
	public function getindicadorProactividades()
	{
		$this->db->select("i.*,c.nombre");
		$this->db->from("indicadores i");
		$this->db->join("competencias c", "c.id = i.competencia_id");
		$this->db->where("i.estado", "1");
		$this->db->where("c.id", "4");
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

	public function getAreabyGerencia($id)
	{
		$this->db->select("*");
		$this->db->where("gerencia_id", $id);
		$this->db->where("estado", '1');
		$resultado = $this->db->get("areas");
		return $resultado->result();
	}
	//CRUD//
	public function save($data)
	{
		return $this->db->insert("valoraciones", $data);
	}
	public function saveObjetivos($data)
	{
		return $this->db->insert("objetivos", $data);
	}
	public function saveEntrevista2($data)
	{
		return $this->db->insert("entrevistas", $data);
	}
	public function update($id, $data)
	{
		$this->db->where("id", $id);
		return $this->db->update("objetivos", $data);
	}

	public function updateEntrevista($id_colaborador,$tipo_entrevista, $data)
	{
		$this->db->where("colaborador_id", $id_colaborador);
		$this->db->where("tipo_entrevista_id", $tipo_entrevista);
		return $this->db->update("entrevistas", $data);
	}
}
