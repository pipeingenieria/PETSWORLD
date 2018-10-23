<?php
echo '
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
				echo '
						<tr>
							<td>'.$row->nombre.'</td>
							<td>'.$row->apellido.'</td>
							<td>'.$row->pais.'</td>
							<td>'.$row->departamento.'</td>
                            <td>'.$row->ciudad.'</td>
                            <td>'.$row->telefono.'</td>
							<td>'.$row->email.'</td>
							<td>'.base_url().'/</td>
							<td>
								<a href="'.base_url().'/Usuarios/Detalles"><button class="btn btn-warning">Detalles</button></a>
							</td>

						</tr>
                ';
            }
        }
