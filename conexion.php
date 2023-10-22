<!--login-->

<?php
    $host   = "localhost";
    $user   =  "root" ;
    $pass   =   "";
    $db     =   "universidad";


    $conexion = mysqli_connect($host, $user, $pass, $db);

    if(!$conexion){
    /*if(!$con){*/
        echo "fallo la conexion";
    }



?>