<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sesion extends CI_Controller 
{
	public function __construct()
	{
        parent::__construct();
        $this->load->model('SesionM');
		$this->load->helper(array('url','form'));
    }

	public function index()
	{
		$this->session->flashdata('message_name');
		switch ($this->session->userdata('Perfil')) 
		{
			case '':
				$data['usuario'] = (isset($_POST['txtUsuario']))?$_POST['txtUsuario']:'';
				$data['contrasenia'] = (isset($_POST['txtContrasenia']))?$_POST['txtContrasenia']:'';
				$data['token'] = $this->token();
				$this->load->view('IniciarSesion',$data);
				break;
			case '1':

				//
				//$data['FullName'] = $this->session->userdata('FullName');
				//$data['Usuario'] = 'Doctor';
				redirect(base_url().'index.php/Inicio');
				//$this->load->view('Inicio',$data);
				//echo base_url();
				break;
			case '2':
				redirect(base_url().'index.php/Administrador');
				break;
		}
	}
	/*public function index()
	{
		$this->load->view('IniciarSesion');
	}*/
	public function Registro()
	{
		$this->load->view('Registro');
	}
		public function new_sesion(){
            $this->form_validation->set_rules('txtUsuario', 'nombre de usuario', 'required');
            $this->form_validation->set_rules('txtContrasenia', 'password', 'required');

            $this->form_validation->set_message('required','El campo %s es obligatorio');
			if ($this->form_validation->run() == FALSE) 
			{
				//echo '<script name="accion">alert("Favor de llenar todos los campos") </script>';
				$this->session->set_flashdata('usuarios','Favor de llenar todos los campos');
				//redirect(base_url().'Inicio','refresh');
				$this->index();
			} 
			else 
			{
				$username = $this->input->post('txtUsuario');
				$password = $this->input->post('txtContrasenia');
			    $check_user = $this->SesionM->login_user($username, $password);
			   /* echo "<pre>";
			    var_dump($check_user);
			    die();//*/
				if (is_object($check_user)) 
				{
					$data = array(
	                'is_logued_in' 		=> 		TRUE,	
	                'FullName' 			=> 		$check_user->dcb_nombre.' '.$check_user->dcb_apellidoP.'  '.$check_user->dcb_apellidoM,
	                'Perfil'			=>		$check_user->dcb_perfil,
	                'Usuario' 			=> 		$check_user->dcb_Usuario,
	                'TipoUsuario' 		=> 		'Medico',
	                'Id_Usuario'		=>		$check_user->dcb_IdMedico
            		);
					$this->session->set_userdata($data);
					$this->index();
				} 
				else 
				{
					if ($check_user['error'] == 'contrasenia') 
					{
						$this->session->set_flashdata('usuarios','Contraseña incorrecta');
					} 
					elseif ($check_user['error'] == 'usuario') 
					{
						$this->session->set_flashdata('usuarios','Usuario no encontrado, favor de registrarse');
					}
					$this->index();
				}
			}
	}
	public function logout_ci()
	{
		$this->session->sess_destroy();
		//$this->index();
		redirect(base_url());
	}
	public function token()
	{
		$token = md5(uniqid(rand(),true));
		$this->session->set_userdata('token',$token);
		return $token;
	}
	public function InsertRegistro()
	{
		$data['Nombre'] 			= $this->input->post("Nombre");
		$data['ApellidoPaterno'] 	= $this->input->post("ApellidoPaterno");
		$data['ApellidoMaterno'] 	= $this->input->post("ApellidoMaterno");
		$data['Correo'] 			= $this->input->post("Correo");
		$data['Contrasena'] 		= $this->input->post("Contrasena");

		$theInsert = [
              'dcb_nombre' 		=> $data['Nombre'],
              'dcb_apellidoP' 	=> $data['ApellidoPaterno'],
              'dcb_apellidoM' 	=> $data['ApellidoMaterno'],
              'dcb_correo' 		=> $data['Correo'],
              'dcb_estatus' 	=> 1
            ];


	    if ($this->SesionM->InsertRegistros($theInsert,$data) == true) 
        {
          echo "Exito";
        }
        else
        {
          echo "Error segundo";
        }



		
	}
}
