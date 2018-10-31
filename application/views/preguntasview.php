<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>PETS WORLD</title>
        <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/normalize.css">
        <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/estilos2.css">
        <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/estilo.css"> 
        <script src="<?php echo base_url();?>/assets/js/validacion.js"></script>
        <!--<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>/assets/css/materialize.min.css"  media="screen,projection"/>-->
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-footer">
                <a class="navbar-brand" href="#">
                    <img src="<?php echo base_url();?>/assets/img/logo.jpg" width="30" height="30" alt="">   
                </a>
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>              
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                         <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url();?>/InicioController/index">Pets World</a>
                        </li>
                        <li class="nav-item active">
                          <a class="nav-link" href="<?php echo base_url();?>/InicioController/index">Inicio<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">

                            <a class="nav-link" href="<?php echo base_url();?>/InicioController/contacto">¿Quienes Somos ?</a>
                        </li> 
                        <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" >
                                  Nuestros servicios
                                </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item text-dark" href="Tienda">Asistencia Veterinaria</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-dark" href="<?php echo base_url();?>/InicioController/peluqueria">Peluqueria Canina</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-dark" href="<?php echo base_url();?>/InicioController/razas">Nuestras Razas</a>
                            </div>
                        </li>
                        <li class="nav-item">

                            <a class="nav-link" href="<?php echo base_url();?>/InicioController/Cuidados">Cuidados</a>
                        </li> 
                        
                    </ul>         

                    <form class="form-inline my-2 my-lg-0" action="<?php echo base_url(); ?>/Usuarios/Login" method="POST">
                        <input class="form-control mr-sm-2 " name="usuario" id="usuario" style="width:110px;" type="search" placeholder="Usuario">
                        <input class="form-control mr-sm-2" name="password" id="password" style="width:110px;" type="search" placeholder="Contraseña">
                        <input type="submit" class="btn btn-primary my-2 my-sm-0 bg-ligthblue" name="Login">
                        <a class="btn btn btn-success my-2 my-sm-0 bg-ligthblue" id="registro" href="<?php echo base_url() ?>/InicioController/registro">Registro</a>
                    </form>
                </div>
            </nav>
        </header>
                <section>
                    <h3 style="text-align: center">dueños de mascotas</h3>
                    <h4>¿Cómo puedo crear mi perfil?</h4>

                    <ul>
                        <li>
                            ¡Es muy fácil! En nuestra plataforma www.petsworld.com haz clic en REGISTRO y llena tus datos completos.
                        </li>
                        <li>
                            Recibirás un email para confirmar que todos tus datos son reales. Al hacer clic en el enlace del mail, volverás a la pagina de PetCrew donde ya podrás crear el perfil de tu mascota.

                        </li>
                    </ul>
                    <h4>¿Cómo sé que mi mascota va a estar segura con los cuidadores de Petsworld?</h4>
                    <ul>
                        <li>En Petswrold nuestra prioridad es velar por la seguridad de tu mascota y por tu tranquilidad. Por eso, al dejar a tu mascota con un miembro de nuestro Crew puedes tener la certeza de que quedará en buenas manos. Todos los cuidadores deben ser mayores de edad, y pasan por un proceso de verificación y validación muy riguroso antes de ser aceptados para prestar servicios en nuestra plataforma. Nuestro equipo realiza la revisión de datos, hacemos entrevistas personales y visitamos los domicilios de cada candidato. Así estamos seguros de que cada miembro que aceptemos sea una persona responsables, que tenga verdadero amor hacia los animales y que tratará a tu peludo como un miembro más de su familia. Haremos constante seguimiento de cada miembro del Crew una vez inscritos y validados por si cambian de vivienda, tienen calificaciones bajas o para ayudarlos a mejorar sus servicios cada vez más.</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio, quam, ad explicabo optio omnis vel quae nemo nesciunt! Sint, perspiciatis voluptatum accusamus eos quos sapiente mollitia velit odit itaque repellat!</li>
                    </ul>
                    <h4>¿Cómo se pagan los servicios?</h4>
                    <ul>
                        <li>Tú eliges cómo quieres pagar. Tenemos la opción de inscribir tarjeta de crédito y descontarte el total cuando te entreguen a tu mascota, o puedes pagar en efectivo directamente, al finalizar el servicio.</li>
                        <li>Únicamente después de finalizar cada servicio, y cuando te hayas reunido nuevamente con tu peludo, se te descontará el valor total de la reserva de la tarjeta de crédito inscrita</li>
                    </ul>

                </section> 



