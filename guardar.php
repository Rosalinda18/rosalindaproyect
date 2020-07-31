<?php

//Chiphysi programación suscribete 
//V 0.1 original
//Autor: Chiphysi  Autor: Jhonatan Cardona  
//Derechos de autor(Suscribete)


    $usuario = "id14289167_datos"; //en ste caso root por ser localhost
    $password = "#3573481Dota";  //contraseña por si tiene algun servicio de hosting 
    $servidor = "localhost"; //localhost por lo del xampp
    $basededatos ="id14289167_formulario"; //nombre de la base de datos


//por si hay errors de conexion un mensaje "Error con el servidor de la Base de datos".

      $con = mysqli_connect($servidor,$usuario,$password) or die ("Error con el servidor de la Base de datos"); 



//por si hay errors de conexion un mensaje "Error al conectarse a la Base de datos".
$db = mysqli_select_db($con, $basededatos) or die ("Error conexion al conectarse a la Base de datos");


        //recuperar las variables
    $nombre=$_POST['nombre']; //name="nombre"
    $correo=$_POST['correo']; //name="correo"
    $mensaje=$_POST['mensaje']; //name="mensaje"

    //sentencia sql
    $sql="INSERT INTO datos VALUES ('$nombre','$correo','$mensaje')"; //manda a traer los valores de '$nombre','$correo','$mensaje'
    
    //ejecutamos la centencia de sql
    $ejecutar=mysqli_query($con, $sql);


    //verificacion de la ejecucioon
    if(!$ejecutar){
        echo"huvo algun error"; //si algo sale mal mandanos este mensaje
    }else{
        echo"datos guardado correctamente <br><a href='index.html'>volver</a>"; //si todo sale bien mandanos este mensaje
    }
     
?>