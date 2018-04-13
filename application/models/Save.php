<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 
 */
class Save extends CI_Model 
{
	
	public function __construct() 
	{
		parent::__construct();
	}
	public function SaveConsultas($data)
	{
		$queryHijo = array(
			'dbc_nombre' 			=> $data['dbc_nombre'],
			'dbc_peso' 				=> $data['dbc_peso'],
			'dbc_altura'			=> $data['dbc_altura'],
			'dbc_fechaNacimiento'	=> $data['dbc_fechaNacimiento'],
			'dbc_sexo' 				=> $data['dbc_sexo'] 
		);
		$this->db->insert("dbc_hijos", $queryHijo);
		$id = $this->db->insert_id();		
		if ($this->db->affected_rows() > 0)
		{
			$queryConsulta = array(
			'dbc_descripcion'		=> 		$data['dbc_descripcion'],
			'dbc_idMedico' 			=>		$data['dbc_idMedico'],
			'dbc_timepo'			=> 		$data['dbc_timepo'],
			'dbc_fechaLim'			=>		$data['dbc_fechaLim'],
			'dbc_idHijo'			=> 		$id,
			'dbc_motivosConsulta' 	=>		$data['dbc_motivosConsulta'],
			'dbc_nip' 				=> 		$data['dbc_nip'],

			);
			$this->db->insert("dbc_consulta", $queryConsulta);
			if ($this->db->affected_rows() > 0)
			{
				$queryAlergias = array(
				'dbc_nombre'		=> 		$data['AlergiasString'],
				'dbc_idHijo' 		=>		$id
				);
				$this->db->insert("dbc_alergias", $queryAlergias);
				if ($this->db->affected_rows() > 0)
				{
					$queryEnfermedades = array(
					'dbc_nombe'		=> 		$data['EnfermedadesString'],
					'dbc_idHijo' 		=>		$id
					);
					$this->db->insert("dbc_enfermedades_hereditarias", $queryEnfermedades);
					if ($this->db->affected_rows() > 0)
					{
						$queryVacunas = array(
						'dbc_nombre'		=> 		$data['VacunasString'],
						'dbc_idHijo' 		=>		$id,
						'dbc_fecha'			=>		$data['VacunasFechaString']
						);
						$this->db->insert("dbc_vacunas", $queryVacunas);
						if ($this->db->affected_rows() > 0)
						{
							return true;
						}
					}
				}
			}
			
		} 
		else
		{
			return false;
		}
	}
	public function DataLoads()
	{
		$this->db->select('*');
		$this->db->from('dbc_hijos');
		return $this->db->get()->result();
	}
}



//$this->db->insert("dbc_consulta", $query);
/*
$query = array(
'dbc_descripcion'		=> 		$data['dbc_descripcion'],
'dbc_idMedico' 			=>		$data['dbc_idMedico'],
'dbc_timepo'			=> 		$data['dbc_timepo'],
'dbc_fechaLim'			=>		$data['dbc_fechaLim'],
'dbc_idHijo'			=> 		$data['dbc_idHijo'],
'dbc_motivosConsulta' 	=>		$data['dbc_motivosConsulta'],
'dbc_nip' 				=> 		$data['dbc_nip']
);
*/