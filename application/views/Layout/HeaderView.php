<!DOCTYPE html>
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
    <body background="<?php echo base_url();?>assets/img/fondo2.jpg">
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

                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2 " style="width:110px;" type="search" placeholder="Usuario">
                        <input class="form-control mr-sm-2" style="width:110px;" type="search" placeholder="Contraseña">
                        <a class="btn btn-primary my-2 my-sm-0 bg-ligthblue" href="#">Login</a>
                        <a class="btn btn btn-success my-2 my-sm-0 bg-ligthblue" id="registro" href="<?php echo base_url() ?>/InicioController/registro">Registro</a>
                    </form>
                </div>
            </nav>
        </header>
        