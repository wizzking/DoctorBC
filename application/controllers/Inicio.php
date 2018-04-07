<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller 
{
	public function index()
	{
		$this->load->view('Inicio');
	}
	public function Error404()
	{
		$this->load->view('Error_/Error404');
	}
	public function Error500()
	{
		$this->load->view('Error_/Error500');
	}
	public function Registro()
	{
		$this->load->view('Registro');
	}
	public function CambiarContrasena()
	{
		$this->load->view('CambiarContrasena');
	}
}
