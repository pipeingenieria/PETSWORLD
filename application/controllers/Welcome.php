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
	public function index()
	{
		$this->load->view('welcome_message');
	}
        public function inicio()
	{
                //Se carga el Header
                $this->load->view('Layout/HeaderView');
                //Se carga el Contenido de el Body
		$this->load->view('InicioView');
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
	}
}
