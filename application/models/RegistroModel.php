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
               "apellido"=>$datos ['apellido'],
                "pais"=>$datos ['pais'],
                "departamento"=>$datos ['departamento'],
                "ciudad"=>$datos ['ciudad'],
                "telefono"=>$datos ['telefono'],
                "email"=>$datos ['email'],
                "usuario"=>$datos ['usuario'],
                "password"=>$datos ['password'],
               
               );
           $this->db->insert("usuarios",$usuarios);
       }

       function fetch_data($query)
        {
            $this->db->select("*");
            $this->db->from("usuarios");
            if($query != '')
            {
                $this->db->like('nombre', $query);
                $this->db->or_like('apellido', $query);
                $this->db->or_like('ciudad', $query);
                $this->db->or_like('pais', $query);
                $this->db->or_like('departamento', $query);
            }
            $this->db->order_by('nombre', 'DESC');
            return $this->db->get();
        }
      
}

