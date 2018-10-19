<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Registro extends CI_Controller{
   public function InsertUser(){
       $datos=$_POST;
       var_dump($datos);
       $this->RegistroModel->insertar($datos);
       //Cargo Header
       $this->load->view("Layout/HeaderView");
       //Cargo la vista
       $this->load->view("RegistroView");
       //Cargo Footer
       $this->load->view("Layout/FooterView");
   }
   
   public function getUser(){
       $datos = $this->RegistroModel->GetUser();
       $this->load->view("Layout/HeaderView");
       $this->load->view("UsersView", $result);
       $this->load->view("Layout/FooterView");
       //$query->$this->db->query();
               
   }
}

