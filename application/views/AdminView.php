
<!-- AJAX ------------------------------------>
<div class="container">
    <h1 class="align-center" style="background-color:white; text-align:center;">Login De Administradores</h1><br />
    <div class="container-fluid align-center col-12">
      <form class="my-5" action="<?php echo base_url() ?>/Usuarios/LoginAdmin" method="POST" >
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="nombre">Usuario</label>
                                    <input type="text" name="usuario" class="form-control" id="usuario" aria-describedby="nombreHelp" placeholder="Ingrese nombre" required>

                                    <small id="nombreHelp" class="form-text text-muted">No compartiremos sus datos con otras personas.</small>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="apellido">Contraseña</label>
                                    <input type="text" name="password" class="form-control" id="password" placeholder="Apellido" required>
                                </div>
                            </div>
                        </div>

                        <footer>             
                            <div class="text-center">
                                   <button type="button" class="btn btn-primary" id="btnAdmin">Completar registro</button>
                                   <button type="reset" class="btn btn-primary">Borrar</button>
                                   <button type="" data-dismiss="modal" class="btn btn-primary" value="cancelar" >Cancelar</button>                              
                        </footer>
                    </form>
    </div>
			<br />
			<br />
			<br />
			<div class="form-group">
				<div class="input-group">
					<span class="input-group-addon">Buscar</span>
					<input type="text" name="search_text" id="search_text" placeholder="Busqueda por cualquier campo" class="form-control" />
				</div>
        <h2 class="align-center" style="background-color:white; text-align:center;">Listado de usuarios Registrados</h2><br />
			</div>
			<br />
			<div id="result"></div>
		</div>



