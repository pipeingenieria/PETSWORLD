		<!-- Footer -->
		<footer class="navbar-footer">
				<!-- Footer Links -->
				<div class="container text-center text-md-left">
							<!-- Grid row -->
					<div class="row">
								<!-- Grid column -->
								<div class="col-md-4 mx-auto">
									<!-- Content -->
									<h5 class="font-weight-bold text-uppercase mt-3 mb-4">Contenido</h5>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id, possimus est ducimus obcaecati quos expedita quibusdam! Libero, voluptates, facere expedita asperiores esse ex delectus dolore illum cum ratione sequi magni?</p>

								</div>
								<!-- Grid column -->

								<hr class="clearfix w-100 d-md-none">

									<!-- Grid column -->
								<div class="col-md-2 mx-auto">
									<!-- Links -->
									<h5 class="font-weight-bold text-uppercase mt-3 mb-4">Contactenos:</h5>
									<ul class="list-unstyled">
									<li>
										<h4>celular:</h4>
										<a href="#!">(+57) 3008345961</a>
									</li>
									<li>
										<h4>telefono:</h4>
										<a href="#!">(+034) 2869541</a>
									</li>
									<li>
										<h4>Correo Electronico:</h4>
										<a href="#!">petsworld@gmail.com</a>
									</li>
								</div>
							<!-- Grid column -->

							<hr class="clearfix w-100 d-md-none">

							<!-- Grid column -->
							<div class="col-md-2 mx-auto">

								<!-- Links -->
								<h5 class="font-weight-bold text-uppercase mt-3 mb-4">Aclaramos tus dudas: </h5>

								<ul class="list-unstyled">
									<li>
										<a  href="<?php echo base_url();?>/InicioController/preguntas">Preguntas frecuentes</a>
									</li>						
								</ul>

							</div>
							<!-- Grid column -->

						<!-- Social buttons -->
						<ul class="list-unstyled list-inline text-center">
							<li class="list-inline-item">
								<h5>Siguenos:</h5>
								<a target="blank" href="https://www.facebook.com/henaocristian"</a>
								<img  src="<?php echo base_url();?>/assets/img/logof.png" width="50px" height="50px">
								<a href="https://www.facebook.com/henaocristian"</a>
								<img src="<?php echo base_url();?>/assets/img/twitter.jpg" width="50px" height="50px">
							</li>         
						</ul>
						<!-- Copyright -->
						
					</div>  
					<div style="text-align: center">&copy 2018 TODOS LOS DERECHOS RESERVADOS</div>
				</div>						
		</footer>
			<!-- script -->
			<script src="<?php echo base_url();?>/assets/js/jquery.min.js"></script>
			<script src="<?php echo base_url();?>/assets/js/popper.min.js"></script>
			<script src="<?php echo base_url();?>/assets/js/bootstrap.min.js"></script>
			<!--<script type="text/javascript" src="<?php echo base_url();?>/assets/js/materialize.min.js"></script>-->
		
			</body>
</html>
<!-- AJAX ---------------------------->
<script>
$(document).ready(function(){

	load_data();
	$('#result').hide();
	//$('#result').hide();

	function load_data(query)
	{
		$.ajax({
			url:"<?php echo base_url(); ?>Registro/fetch",
			method:"POST",
			data:{query:query},
			success:function(data){
				$('#result').html(data);
			}
		})
	}

	$('#search_text').keyup(function(){
		var search = $(this).val();
		if(search != '')
		{
			load_data(search);
		}
		else
		{
			load_data();
		}
	});

	//-------------- AJAX Para enviar variables a Controllador

	function load_data2(query)
	{
		$.ajax({
			url:"<?php echo base_url(); ?>Registro/fetch2",
			method:"POST",
			data:{query:query},
			success:function(data){
				$('#result2').append(data);
			}
		})
	}

	
		var search = $('#search_text2').val();
		if(search != '')
		{
			load_data2(search);
		}
		else
		{
			load_data2();
		}

	function loginAdmin(usuario, password)
	{
		$.ajax({
			url:"<?php echo base_url(); ?>Usuarios/Login",
			method:"POST",
			data:{usuario:usuario,password:password},
			success:function(){
				$('#result').show();
				alert ("HOLA");
			}
		})
	}

	
	$('#btnAdmin').click(function(){
		var usuario = $('#usuario').val();
		var password = $('#password').val();
		
		loginAdmin(usuario, password);
		
	});

	$("#prueba").val($('#search_text2').val());

	
});

//$(selector).show(duracion,callback);
</script>
