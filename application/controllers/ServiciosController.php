<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ServiciosController extends CI_Controller {

	
	
        public function calcular()
	{
        $datos=$_POST;
        //Se carga el Header
        if(isset($datos["Cortepelo"]) ){ 
                $cortepelo = intval($_POST["Cortepelo"]);
        }else{
            $cortepelo = 0;
        }

          if(isset($datos["Corteunas"]) ){ 
            $Corteunas = intval($_POST["Corteunas"]);
        }else{
            $Corteunas = 0;
        }

        if(isset($datos["CorteHigienico"]) ){ 
            $CorteHigienico = intval($_POST["CorteHigienico"]);
        }else{
            $CorteHigienico = 0;
        }

        if(isset($datos["Limpiezaoidos"]) ){ 
            $Limpiezaoidos = intval($_POST["Limpiezaoidos"]);
        }else{
            $Limpiezaoidos = 0;
        }

        if(isset($datos["Cepillado"]) ){ 
            $Cepillado = intval($_POST["Cepillado"]);
        }else{
            $Cepillado = 0;
        }

        if(isset($datos["Banobasico"]) ){ 
            $Banobasico = intval($_POST["Banobasico"]);
        }else{
            $Banobasico = 0;
        }

        if(isset($datos["Banoarreglo"]) ){ 
            $Banoarreglo = intval($_POST["Banoarreglo"]);
        }else{
            $Banoarreglo = 0;
        }

        if(isset($datos["Stripping"]) ){ 
            $Stripping = intval($_POST["Stripping"]);
        }else{
            $Stripping = 0;
        }

        $ValorTotal= $cortepelo+$Corteunas+$CorteHigienico+$Limpiezaoidos+$Cepillado+$Banobasico+$Banoarreglo+$Stripping;
        echo $ValorTotal;
        $this->load->view('Layout/HeaderView');
        //Se carga el Contenido de el Body
        $this->load->view('InicioView',compact("ValorTotal"));
        //Se carga el Footer
        $this->load->view('Layout/FooterView');
	}
        
       
}