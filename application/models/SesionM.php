<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 
 */
class SesionM extends CI_Model 
{
	
	public function __construct() 
	{
		parent::__construct();
	}
	
	public function login_user($username,$password)
	{
		$this->db->where('dcb_Usuario', $username);
	    $query = $this->db->get('dcb_usuarios');
		if($query->num_rows() == 1) 
		{
			/*$this->db->where('dcb_Usuario', $username);
			$this->db->where('dcb_Contrasenia', $password);
			$query = $this->db->get('dcb_usuarios');*/
			/**/
			$this->db->select('*');
			$this->db->from('dcb_usuarios');
			$this->db->join('dcb_medicos', 'dcb_usuarios.dcb_IdMedico = dcb_medicos.dcb_id');
			$this->db->where('dcb_Usuario', $username);
			$this->db->where('dcb_Contrasenia', $password);
			$query = $this->db->get();
			/**/
			if ($query->num_rows() == 1) 
			{
				return $query->row();
			} 
			else 
			{
				return ['success' => false, 'error' => 'contrasenia'];
			}
		} 
		else 
		{
			return ['success' => false, 'error' => 'usuario'];
		}
	}
}
