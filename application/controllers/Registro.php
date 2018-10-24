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
							<th>Edicion</th>
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
							
							<td>
								<a href="'.base_url().'/InicioController/Detalles?id='.$row->id.'"><button class="btn btn-warning">Detalles</button></a>
							</td>

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


	function fetch2()
	{
		$output = '';
		$query = '';
		$this->load->model('RegistroModel');
		if($this->input->post('query'))
		{
			$query = $this->input->post('query');
		}
		$data = $this->RegistroModel->detalle($query);
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
							<th>Edicion</th>
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
							
							<td>
							<button type="submit" class="btn btn-primary ">Editar</button>
							</td>

						</tr>

						<div class="jumbotron container-fluid col-10 align-center d-non">
                   
                
				   <form class="my-5" action="<?php echo base_url() ?>/Registro/InsertUser" method="POST" >
					   <div class="row">
						   <div class="col">
							   <div class="form-group">
								   <label for="nombre">Nombre</label>
								   <input type="text" name="nombre" class="form-control" value="'.$row->nombre.'" id="nombre" aria-describedby="nombreHelp" placeholder="Ingrese nombre" required>

								   <small id="nombreHelp" class="form-text text-muted">No compartiremos sus datos con otras personas.</small>
							   </div>
						   </div>
						   <div class="col">
							   <div class="form-group">
								   <label for="apellido">Apellido</label>
								   <input type="text" name="apellido" class="form-control" value="'.$row->apellido.'" id="apellido" placeholder="Apellido" required>
							   </div>
						   </div>
					   </div>

					   <div class="row">
						   <div class="col">
							   <div class="form-group">
								   <label for="pais">Pais</label>
								   <select class="form-control" id="pais" name="pais" value="'.$row->pais.'" required>
									 <option value="Colombia">Colombia</option>
									 <option value="Venezuela">Venezuela</option>
									 <option value="Jamaica">Jamaica</option>
									 <option value="Uruguay">Uruguay</option>
									 <option value="Brasil">Brasil</option>
								   </select>
							   </div>
						   </div>
						  
						   <div class="col">
							   <div class="form-group">
								   <label for="departamento">Departamento</label>
								   <select class="form-control" id="departamento" value="'.$row->departamento.'" name="departamento">
									 <option value="Antioquia">Antioquia</option>
									 <option value="Cundinamarca">Cundinamarca</option>
									 <option value="Nariño">Nariño</option>
									 <option value="Amazonas">Amazonas</option>
									 <option value="Atlantico">Atlantico</option>
								   </select>
							   </div>
						   </div>
						   <div class="col">
							   <div class="form-group">
								   <label for="ciudad">Ciudad</label>
								   <select class="form-control" id="ciudad" value="'.$row->ciudad.'" name="ciudad" required>
									 <option value="Medellin">Medellin</option>
									 <option value="Barbosa">Barbosa</option>
									 <option value="Copacabana">Copacabana</option>
									 <option value="Envigado">Envigado</option>
									 <option value="Sabaneta">Sabaneta</option>
								   </select>
							   </div>
						   </div>
					   </div>
					   <div class="row">
						   <div class="col">
							   <div class="form-group">
								   <label for="telefono">Telefono</label>
								   <input type="text" name="telefono" class="form-control" value="'.$row->telefono.'" id="telefono" aria-describedby="telefonoHelp" placeholder="Ingrese Telefono" required>
							   </div>
						   </div>
						   <div class="col">
							   <div class="form-group">
								   <label for="nombre">Email</label>
								   <input type="email" name="email" class="form-control" value="'.$row->email.'" id="email" aria-describedby="emailHelp" placeholder="ejemplo@gmail.com" required>
							   </div>
						   </div>
					   </div>
					   
					   <hr class="my-4">
					   <p class="lead" style="text-align: center;">Elija Usuario y Contaseña para ingresar a nuestar plataforma</p>
					   
					   <div class="row">
						   <div class="col">
							   <div class="form-group">
								   <label for="usuario">Usuario</label>
								   <input type="text" name="usuario" class="form-control" id="usuario" aria-describedby="nombreHelp" placeholder="Ingrese nombre" required>

								   <small id="nombreHelp" class="form-text text-muted">Tu usuario para login.</small>
							   </div>
						   </div>
						   <div class="col">
							   <div class="form-group">
								   <label for="password">Contraseña</label>
								   <input type="password" name="password" class="form-control" id="password" placeholder="Apellido" required>
									<small id="nombreHelp" class="form-text text-muted">Tu Contraseña para login.</small>
							   </div>
						   </div>
					   </div>  
					   
					   <div class="form-group form-check">
						   <input type="checkbox" name="terminos" class="form-check-input" id="terminos" required>
						   <label class="form-check-label" for="exampleCheck1">Acepta Terminos y condiciones</label>
					   </div>
					   <footer>             
						   <div class="text-center">
								  <button type="submit" class="btn btn-primary ">Completar registro</button>
								  <button type="reset" class="btn btn-primary">Borrar</button>
								  <button type="" data-dismiss="modal" class="btn btn-primary" value="cancelar" >Cancelar</button>                              
					   </footer>
				   </form>
			 </div>
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

