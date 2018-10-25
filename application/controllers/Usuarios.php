<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function getUser(){
		$datos['result'] = $this->RegistroModel->Ver();
		$this->load->view("Layout/HeaderView");
		$this->load->view("UsersView", $datos);
		//Al
		$this->load->view("Layout/FooterView");
		//$query->$this->db->query();
			
	    }
	 
	    function Login(){
			$login=$_POST;
			$this->load->model('RegistroModel');
			$data=$this->RegistroModel->Login($login);
			
			if($data->num_rows()!==0){
				foreach($data->result() as $row)
				{
								
					var_dump ($data);
				}
			
			}else{
				echo("Datos incorrectos");
			}
		}

		 function LoginAdmin(){
			$login=$_POST;
			$this->load->model('RegistroModel');
			$data=$this->RegistroModel->Login($login);
			if($data->num_rows()!==0){
				foreach($data->result() as $row)
				{
								
					var_dump ($data);
				}
			
			}else{
				echo("Datos incorrectos");
			}
		}

		   function detalle(){
				$datos=$_GET['id'];
				var_dump($datos);
				$data=$this->RegistroModel->detalle($datos);
				foreach($data->result() as $row)
					{
									
						$datos = array("nombre" => $row->nombre, 
										"apellido" => $row->apellido,
										"pais" => $row->pais,
										"departamento" => $row->departamento,
										"ciudad" => $row->ciudad,
										"telefono" => $row->telefono,
										"email" => $row->email,
										"usuario" => $row->usuario,
										"password" => $row->password  );
					}
				
				
				//Cargo Header
				$this->load->view("Layout/HeaderView");
				//Cargo la vista
				$this->load->view("DetallesView",compact("datos"));
				//Cargo Footer
				$this->load->view("Layout/FooterView");
			}
}

