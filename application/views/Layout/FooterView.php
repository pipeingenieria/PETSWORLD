        <footer>
            <div class="container-fluid navbar-footer">
                <h2>&COPY; PETS WORLD -- Todos Los Derechos Reservados</h2>
            </div>

        </footer>
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

	function ObtenerUser(query)
	{
		$.ajax({
			url:"<?php echo base_url(); ?>Registro/fetch",
			method:"POST",
			data:{query:query},
			success:function(data){
				//$('#result').html(data);
			}
		})
	}

	$('#Detalle').onClick(function(){
		var search = $(this).val();
		if(search != '')
		{
			ObtenerUser(search);
		}
		else
		{
			ObtenerUser();
		}
	});
});
</script>
