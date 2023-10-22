<!--Registro-->
<?php
   $conn = new mysqli("localhost","root","","universidad");
/*$conn = new mysqli("localhost", "id20354909_cdga", "Cdga3454!", "id20354909_eluwu");*/

if($conn){
    echo "Conexión exitosa";
} else {
    echo "Hubo un error";
}
?>
