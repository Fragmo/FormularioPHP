<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>SergioPuta.org</title>
       
    </head>

    <body style="background-color:<?php echo $_POST["listaColores"] ?> ">

        <div id="cajaGuay" name="cajaGuay">
            <h2>SergioPuta.org</h2>
                <?php echo $arrayToChulo[0] . 'ef   w' ?>       
            <input type="text" name="nombreUsuario" placeholder="Nombre de Usuario" value="<?php if(isset($_POST["textoNombre"])){echo $_POST["textoNombre"]; }?>"/><br>
            <input type="password" name="contraseña" placeholder="Contraseña" value="<?php if(isset($_POST["textoContraseña"])){echo $_POST["textoContraseña"];} ?>"/><br>
            <a <?php if( isset($_POST["textoNombre"]) and ($_POST["textoNombre"] == $arrayToChulo[0]) and ($_POST["textoContraseña"] == $arrayToChulo[1])){ ?> href="validar.php?login=true" <?php } ?>><input type="button" value="Login" name="botonLogin"/>
            <a href="validar.php?registrarse=true"><input type="button" value="Registrarse" name="botonRegistro" /></a>
        </div>
        
    </body>
</html>
