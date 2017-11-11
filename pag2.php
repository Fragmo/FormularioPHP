<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
       
    </head>
    <!--APUNTES DE COMO PEGAR LAS VARIABLE DE UNA PAGINA A OTRA-->
        <?php
      //  echo $_POST["textoNombre"]."<br>".$_POST["textoTelefono"]."<br>".$_POST["textoEmail"]."<br>"  /*.$_GET["equipo"]."<br>".$_GET["entrenador"]*/;
        
        ?>
    <!--FIN DE ESTOS APUNTES, ES SOLO EL PHP-->
    
    <body style="background-color:<?php echo $_POST["listaColores"] ?> ">
        
        
        
        <div class="row">
            <div class=" col-xs-offset-5 col-xs-6">
                <p><h1>Hola, <?php echo $_POST["textoNombre"] ?> Bienvenido a tu pagina customizada<h1></p>  
            </div>
            
        </div><!--row-->
        <script>
        $('textoNombre').click(function(){
            this.fadeToggle('slow');
        })
        </script>
        
    </body>
</html>
