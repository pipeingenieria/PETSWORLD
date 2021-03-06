<input type="hidden" id="search_text2" value="<?php echo $_GET['id']; ?>"/> 
<div class="container">
			<br />
			<br />
			<br />
			<h2 class="align-center">Seccion Administradores </h2><br />
			<div class="form-group">
				<div class="input-group">
					<span class="input-group-addon">Buscar</span>
					<input type="text" name="search_text2"  placeholder="Busqueda por cualquier campo" class="form-control" />
				</div>
			</div>
			<br />
			<div id="result2"></div>
		</div>

<div class="jumbotron container-fluid col-10 align-center my-4 jumbo administradores" id="administradores">
                   <div class="container-fluid align-center" style="text-align: center;">
                        <h1 class="display-4 align-center"> Administradores </h1>
                        <div class="container-fluid img-form">
                            <img class="img-responsive imagen-form" src="<?php echo base_url() ?>/assets/img/foto2.png" alt="" width="120" height="120">
                        </div>
                        <p class="lead">Formulario para tener aceeso a todos nuestros servicios</p>
                        <hr class="my-4">
                    </div>
            <?php        
                if(isset($datos["nombre"])){
                ?>

                    <form class="my-5" action="<?php echo base_url() ?>/Registro/InsertUser" method="POST" >
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="nombre">Nombre</label>
                                    <input type="text" name="nombre" class="form-control" value="<?php echo $datos["nombre"]?>" id="nombre" aria-describedby="nombreHelp" placeholder="Ingrese nombre" required>

                                    <small id="nombreHelp" class="form-text text-muted">No compartiremos sus datos con otras personas.</small>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="apellido">Apellido</label>
                                    <input type="text" name="apellido" value="<?php echo $datos["apellido"]?>" class="form-control" id="apellido" placeholder="Apellido" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="pais">Pais</label>
                                    <select class="form-control" id="pais" value="<?php echo $datos["pais"]?>" name="pais" required>
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
                                    <select class="form-control" value="<?php echo $datos["departamento"]?>" id="departamento" name="departamento">
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
                                    <select class="form-control" value="<?php echo $datos["ciudad"]?>" id="ciudad" name="ciudad" required>
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
                                    <input type="text" name="telefono" value="<?php echo $datos["telefono"]?>" class="form-control" id="telefono" aria-describedby="telefonoHelp" placeholder="Ingrese Telefono" required>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="nombre">Email</label>
                                    <input type="email" name="email" value="<?php echo $datos["email"]?>" class="form-control" id="email" aria-describedby="emailHelp" placeholder="ejemplo@gmail.com" required>
                                </div>
                            </div>
                        </div>
                        
                        <hr class="my-4">
                        <p class="lead" style="text-align: center;">Elija Usuario y Contaseña para ingresar a nuestar plataforma</p>
                        
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="usuario">Usuario</label>
                                    <input type="text" name="usuario" value="<?php echo $datos["usuario"]?>" class="form-control" id="usuario" aria-describedby="nombreHelp" placeholder="Ingrese nombre" required>

                                    <small id="nombreHelp" class="form-text text-muted">Tu usuario para login.</small>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="password">Contraseña</label>
                                    <input type="password" name="password" value="<?php echo $datos["password"]?>" class="form-control" id="password" placeholder="Apellido" required>
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
            <?php
                }
            ?>
              </div>		
