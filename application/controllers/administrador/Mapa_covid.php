<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mapa_covid extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	
	}

	public function index()
	{
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/mapa_covid");
		$this->load->view("layouts/footer");
	}

}