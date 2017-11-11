<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title> Me cago en la puta</title>
        
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
        
        <script src="js/jquery.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/jquery-ui.min.js" type="text/javascript"></script>
    </head>
    <body>
                <script>
            var fecha = new Date();
            var fechaTotal = fecha.getDate() + "-"+ (fecha.getMonth() +1) + "-" + fecha.getFullYear(); 

        </script>
<!--<?/php  $equipo = "Madrid"; le he puesto la raya n el medio paa que se pueda leer bien-->
      <!--$entrenador = "zizu"?>-->
 <!--action="index.php?equipo=</?php echo $equipo?>&entrenador= <?p/hp echo $entrenador ?>"-->       
        
        
        
        <h1 class="col-xs-offset-5  col-xs-4">Formulario</h1>
        <div class="row " style="margin-top: 15%;">
        <div class="col-xs-offset-5  col-xs-4 ">
            <form id="nombreFormulario" action="index.php"  method="post">
                <table border="0">
                    
                        <tr>
                            <td><b>Nombre</b></td>
                            <td> <input type="text" name="textoNombre" placeholder="María" size="15%" /> </td>
                        </tr>
                        
                        <tr>
                            <td><b>Contraseña</b></td>
                            <td><input id="contraseña1" type="password" name="textoContraseña"  size="15%" /></td>
                        </tr>
                       
                        <tr>
                            <td><b>telefono</b></td>
                            <td> <input type="text" name="textoTelefono" placeholder="666 666 666"  size="15%" /></td>
                        </tr>
                        <tr>
                            <td><b>email</b></td>
                            <td><input type="email" name="textoEmail"   placeholder="hola@example.com" size="15%" /></td>
                        </tr>
                        
                        
                        <tr>
                            <td><b>ColorFondo</b></td>
                            <td> <select name="listaColores"> 
                                    <option value="">ninguno</option>
                                    <option value="tomato">rojo</option>
                                    <option value= "springgreen">verde</option>
                                    <option value = yellow>amarillo</option>
                                    <option value="skyblue">azul</option>
                                    <option value="mediumorchid">morado</option>
                                </select> </td>
                                
                        </tr>
                         
                        <tr>
                            <td><b>fecha</b></td>
                            <td><input id="textoFecha" type="text" name="textoFecha"  size="15%" onclick="this.value = fechaTotal " /></td>
                        </tr>
                        
     
  
                   
                </table>
                <br>
                
                <input type="submit" class="btn-success"  value="Enviar"  style="border-radius: 10px; margin-left: 12%; "/>
                <input type="reset" class="btn-danger" value="Borrar" style="border-radius: 10px" />
                
                
            </form>
                              
        </div> 
            
        </div><!--row-->
        
        
        <?php
        if (isset($_POST["textoNombre"]) and isset($_POST["textoContraseña"]) ){$arrayToChulo = array($_POST["textoNombre"], $_POST["textoContraseña"]);}
        ?>
        
        <!--// para saber de donde viene-->
        <?php 
        if(isset($_GET["login"])){
           echo "has venido desde el login";
        }else{
            echo "has venido desde registrarse";
        }
        ?>
        
        
        
    </body>
</html>
