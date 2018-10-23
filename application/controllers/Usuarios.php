<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
		$datos = $this->RegistroModel->Ver();
		$this->load->view("Layout/HeaderView");
		$this->load->view("UsersView", $result);
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
}
