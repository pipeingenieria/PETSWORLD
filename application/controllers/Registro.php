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

   function fetch()
	{
		$output = '';
		$query = '';
		$this->load->model('RegistroModel');
		if($this->input->post('query'))
		{
			$query = $this->input->post('query');
		}
		$data = $this->RegistroModel->fetch_data($query);
		$output .= '
		<div class="table-responsive">
					<table class="table table-striped table-dark table-hover">
						<tr>
							<th>Nombre</th>
							<th>Apellido</th>
							<th>Pais</th>
							<th>Departamento</th>
                            <th>Ciudad</th>
                            <th>telefono</th>
                            <th>E-mail</th>
						</tr>
		';
		if($data->num_rows() > 0)
		{
			foreach($data->result() as $row)
			{
				$output .= '
						<tr>
							<td>'.$row->nombre.'</td>
							<td>'.$row->apellido.'</td>
							<td>'.$row->pais.'</td>
							<td>'.$row->departamento.'</td>
                            <td>'.$row->ciudad.'</td>
                            <td>'.$row->telefono.'</td>
                            <td>'.$row->email.'</td>
						</tr>
				';
			}
		}
		else
		{
			$output .= '<tr>
							<td colspan="5">No se Encontraron Datos</td>
						</tr>';
		}
		$output .= '</table>';
		echo $output;
	}
}

