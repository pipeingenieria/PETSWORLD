<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class RegistroModel extends CI_Model{
       
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


       

        // Comienza el CRUD --------------------------------------------------------

        public function ver(){
            //Hacemos una consulta
            $consulta=$this->db->query("SELECT * FROM usuarios;");
             
            //Devolvemos el resultado de la consulta
            return $consulta->result();
        }

        public function Detalle($id){
            //Hacemos una consulta
            $consulta=$this->db->query("SELECT * FROM usuarios WHERE id=$id;");
             
            //Devolvemos el resultado de la consulta
            return $consulta->result();
        }
         
        public function add($email,$password,$nombre,$apellido){
            $consulta=$this->db->query("SELECT email FROM usuarios WHERE email LIKE '$email'");
            if($consulta->num_rows()==0){
                $consulta=$this->db->query("INSERT INTO usuarios VALUES(NULL,'$email','$password','$nombre','$apellido');");
                if($consulta==true){
                  return true;
                }else{
                    return false;
                }
            }else{
                return false;
            }
        }
         
        public function mod($id_usuario,$modificar="NULL",$email="NULL",$password="NULL",$nombre="NULL",$apellido="NULL"){
            if($modificar=="NULL"){
                $consulta=$this->db->query("SELECT * FROM usuarios WHERE id_usuario=$id_usuario");
                return $consulta->result();
            }else{
              $consulta=$this->db->query("
                  UPDATE usuarios SET email='$email', password='$password',
                  nombre='$nombre', apellido='$apellido' WHERE id_usuario=$id_usuario;
                      ");
              if($consulta==true){
                  return true;
              }else{
                  return false;
              }
            }
        }
         
        public function eliminar($id_usuario){
           $consulta=$this->db->query("DELETE FROM usuarios WHERE id_usuario=$id_usuario");
           if($consulta==true){
               return true;
           }else{
               return false;
           }
        }
     
     
    
    
      
}

