
            <div class="container-fluid">
                <h1 class="text text-center color">Peluqueria Canina</h1>
                <form action="<?php echo base_url() ?>/ServiciosController/calcular" method="POST">
                    <div class="form-group">
                        <div class="list-group">
                            <a><input type="checkbox" name="Cortepelo" value="40000"/> Corte de pelo</a>
                                <a><input type="checkbox" name="Corteunas" value="20000"/> Corte de uñas</a>
                                <a><input type="checkbox" name="CorteHigienico" value="30000"/> Corte Higienico-Despeje de zona genital</a>
                                <a><input type="checkbox" name="Limpiezaoidos" value="15000"/> Limpieza de oidos</a>
                                <a><input type="checkbox" name="Cepillado" value="25000"/> Cepillado de dientes</a>
                                <a><input type="checkbox" name="Banobasico" value="45000"/> Baño básico</a>
                                <a><input type="checkbox" name="Banoarreglo" value="60000"/> Baño y arreglo</a>
                                <a><input type="checkbox" name=" Stripping" value="70000"/> Stripping</a>                   
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                <form>
               
                    <input type="text" name="ValorServicio" id="ValorServicio" value="<?php echo ( intval( $_POST["Cortepelo"] ) + intval( $_POST["Corteunas"] ) );?>"/>
                
             </div>

             

        <?php if(isset($_POST["Cortepelo"]) ){ ?>
            <a><input type="text" name="tCortepelo" id="tCortepelo" value="<?php echo $_POST["Cortepelo"] ?>"/> </a>
        <?php  }else{  ?>
            <a><input type="text" name="tCortepelo" id="tCortepelo" value="0"/> </a>
        <?php } 
            if(isset($_POST["Corteunas"]) ){ ?>
            <a><input type="text" name="tCorteunas"  id="tCorteunas" value="<?php echo $_POST["Corteunas"] ?>"/> </a>
        <?php  }  ?>
        <?php if(isset($_POST["CorteHigienico"]) ){ ?>
                <a><input type="text" name="tCorteHigienico" value="<?php echo $_POST["CorteHigienico"] ?>"/></a>
        <?php  }  ?>
        <?php if(isset($_POST["Limpiezaoidos"]) ){ ?>
                <a><input type="hidden" name="tLimpiezaoidos" value="<?php echo $_POST["Limpiezaoidos"]?>"/> </a>
        <?php  }  ?>
        <?php if(isset($_POST["Cepillado"]) ){ ?>
                <a><input type="hidden" name="tCepillado" value="<?php echo $_POST["Cepillado"]?>"/></a>
        <?php  }  ?>
        <?php if(isset($_POST["Banobasico"]) ){ ?>
                <a><input type="hidden" name="tBanobasico" value="<?php echo $_POST["Banobasico"]?>"/></a>
        <?php  }  ?>
        <?php if(isset($_POST["Banoarreglo"]) ){ ?>
                <a><input type="hidden" name="tBanoarreglo" value="<?php echo $_POST["Banoarreglo"]?>"/></a>
        <?php  }  ?>
        <?php if(isset($_POST["Stripping"]) ){ ?>
                <a><input type="hidden" name="tStripping" value="<?php echo $_POST["Stripping"]?>"/> </a> 
        <?php  }  ?>

        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        
        


                
          



