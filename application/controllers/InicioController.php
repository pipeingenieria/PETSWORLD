<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InicioController extends CI_Controller {

	
	
        public function index()
	{
                //Se carga el Header
                $this->load->view('Layout/HeaderView');
                //Se carga el Contenido de el Body
		$this->load->view('InicioView');
                //Se carga el Footer
                $this->load->view('Layout/FooterView');
	}
        public function contacto()
	{
                //Se carga el Header
                $this->load->view('Layout/HeaderView');
                //Se carga el Contenido de el Body
		$this->load->view('ContactoView');
                //Se carga el Footer
                $this->load->view('Layout/FooterView');
	}
        public function registro()
	{
                //Se carga el Header
                $this->load->view('Layout/HeaderView');
                //Se carga el Contenido de el Body
		$this->load->view('RegistroView');
                //Se carga el Footer
                $this->load->view('Layout/FooterView');
                //$this->RegistroModel->insertar();
               // echo 'Usuario  Registrado!!';
	}
        public function inicioSesion()
	{
                //Se carga el Header
                $this->load->view('Layout/HeaderView');
                //Se carga el Contenido de el Body
		$this->load->view('InicioSesionView');
                //Se carga el Footer
                $this->load->view('Layout/FooterView');
	}
        public function preloader() {
             $this->load->view('Layout/HeaderView');
             $this->load->view('preloaderview');
             $this->load->view('Layout/FooterView');
        }
        public function Razas() {
             $this->load->view('Layout/HeaderView');
             $this->load->view('razasview');
             $this->load->view('Layout/FooterView');
        }
          public function perros() {
             $this->load->view('Layout/HeaderView');
             $this->load->view('perrosview');
             $this->load->view('Layout/FooterView');
        }
           public function peluqueria() {
             $this->load->view('Layout/HeaderView');
             $this->load->view('peluqueriaview');
             $this->load->view('Layout/FooterView');
        } 
        public function Cuidados() {
             $this->load->view('Layout/HeaderView');
             $this->load->view('CuidadosView');
             $this->load->view('Layout/FooterView');
        }
}
