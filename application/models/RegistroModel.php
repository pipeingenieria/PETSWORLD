<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class RegistroModel extends CI_Model{
       public function  insertar($datos){
           $usuarios=array(
               "nombre"=> $datos["nombre"],
               "Apellidos"=>$datos ['apellido'],
                "pais"=>$datos ['pais'],
                "departamento"=>$datos ['departamento'],
                "ciudad"=>$datos ['ciudad'],
                "telefono"=>$datos ['telefono'],
                "email"=>$datos ['email'],
               
               );
           $this->db->insert("usuarios",$usuarios);
       }
      
}

