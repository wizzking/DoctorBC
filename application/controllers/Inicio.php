<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller 
{
	public function __construct() 
	{
		parent::__construct();
		$this->load->model('Save');
	}

	public function index()
	{
		if($this->session->userdata('Perfil') == FALSE || $this->session->userdata('Perfil') != '1')
        {
            redirect(base_url());
        }
		$this->load->view('Inicio');
	}
	public function Error404()
	{
		if($this->session->userdata('Perfil') == FALSE || $this->session->userdata('Perfil') != '1')
        {
            redirect(base_url());
        }
		$this->load->view('Error_/Error404');
	}
	public function Error500()
	{
		if($this->session->userdata('Perfil') == FALSE || $this->session->userdata('Perfil') != '1')
        {
            redirect(base_url());
        }
		$this->load->view('Error_/Error500');
	}
	public function Registro()
	{
		if($this->session->userdata('Perfil') == FALSE || $this->session->userdata('Perfil') != '1')
        {
            redirect(base_url());
        }
		$this->load->view('Registro');
	}
	public function CambiarContrasena()
	{
		if($this->session->userdata('Perfil') == FALSE || $this->session->userdata('Perfil') != '1')
        {
            redirect(base_url());
        }
		$this->load->view('CambiarContrasena');
	}
	public function consulta()
	{
		if($this->session->userdata('Perfil') == FALSE || $this->session->userdata('Perfil') != '1')
        {
            redirect(base_url());
        }
		$this->load->view('nuevaConsulta');
	}
	public function pacientes()
	{
		if($this->session->userdata('Perfil') == FALSE || $this->session->userdata('Perfil') != '1')
        {
            redirect(base_url());
        }
		$this->load->view('Pacientes');
	}
	public function buscarConsulta()
	{
		if($this->session->userdata('Perfil') == FALSE || $this->session->userdata('Perfil') != '1')
        {
            redirect(base_url());
        }
        $this->load->view('buscarConsulta');
	}
	public function SaveConsulta()
	{
		$data = $this->input->post();

	    if ($this->Save->SaveConsultas($data) == true) 
	      echo "Exito";
	    else
	      echo "Error segundo";
	}
	public function DataLoad()
	{
		$Resul = $this->Save->DataLoads();
	    echo json_encode($Resul);
	}

}
