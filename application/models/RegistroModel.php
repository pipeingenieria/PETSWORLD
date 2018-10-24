<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class RegistroModel extends CI_Model{

    //----------Comienza el CRUD -----------------------------------------------

    //----------------  CREATE  --------------------------------------------------
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

       //-----

       //----------  READ  ----------------------

       public function ver()
        {
            $this->db->select("*");
            $this->db->from("usuarios");

            return $this->db->get();
        }

        public function detalle($query)
        {
            $this->db->select("*");
            $this->db->from("usuarios");
            $this->db->where("id='$query'");

            return $this->db->get();
        }

        //---

        //--------------  UPDATE  -------------------------------------------------

        public function editar($id,$departamento,$ciudad,$pais,$telefono,$email,$nombre,$apellido){
            
              $consulta=$this->db->query("
                  UPDATE usuarios SET email='$email', departamento='$departamento',
                  nombre='$nombre', apellido='$apellido', pais='$pais', ciudad='$ciudad',
                  telefono='$telefono' WHERE id=$id;
                      ");
              if($consulta==true){
                  return true;
              }else{
                  return false;
              }
            
        }

        //---

        //-------------  DELETE  ------------------------------------------------

        public function eliminar($id){
            $consulta=$this->db->query("DELETE FROM usuarios WHERE id=$id");
            if($consulta==true){
                return true;
            }else{
                return false;
            }
         }

        //------------- Termina CRUD ---------------------------------------------


       public function Login($login){
        $usuario=$login['usuario'];
        $password=$login['password'];
        //Hacemos una consulta
        $this->db->select("*");
        $this->db->from("usuarios");
        $this->db->where("usuario='$usuario' AND password=$password");

         
        //Devolvemos el resultado de la consulta
        //var_dump ($this->db->get());
        return $this->db->get();
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
                $this->db->or_like('telefono', $query);
                $this->db->or_like('email', $query);
                $this->db->or_like('usuario', $query);
                $this->db->or_like('password', $query);
            }
            $this->db->order_by('nombre', 'DESC');
            return $this->db->get();
        }


        
    
      
}

