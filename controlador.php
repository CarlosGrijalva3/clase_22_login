<?php
    /*Conexion a la base de datoss ---------------- */

 $conn = new mysqli("localhost", "root", "", "universidad");

    /*...............Proceso de encriptación. . . . */
    if(isset($_POST['registro'])){
        if(!empty(trim($_POST['Usuario'])) && !empty(trim($_POST['Clave'])) && !empty(trim($_POST['Fname']))){
            $usuario_usu    = $_POST['Usuario'];
            $password_usu   = $_POST['Clave'];
            $Fname_usu    = $_POST['Fname'];

            $enc_password_usu = password_hash($password_usu, PASSWORD_DEFAULT);


            $conn->query("INSERT INTO loginn (Usuario, Clave, Fname) VALUES('$usuario_usu','$password_usu', '$Fname_usu')");

            if($conn->affected_rows !=1){
                $registro_error = "Hubo un error";
            }

        }else{
            $registro_error = "Ambos campos deben ser llenados";
        }
    }


?>






<!--

    $conn = new mysqli("localhost","root","","universidad");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $password_usu = $_POST['password_usu'] ?? '';
    $usuario_usu = $_POST['usuario_usu'] ?? '';

    if (!empty($password_usu) && !empty($usuario_usu)) {
        $enc_password_usu = password_hash($password_usu, PASSWORD_DEFAULT);
        $consulta = "INSERT INTO universidad (usuario_usu, password_usu) VALUES ('$usuario_usu','$password_usu')";

        if ($conn->query($consulta) === TRUE) {
            echo "Información enviada exitosamente.";
        } else {
            echo "Error: " . $consulta . "<br>" . $conn->error;
        }
    } else {
        echo "Por favor, ingrese un nombre de usuario y una contraseña.";
    }
    $conn->close();
}

-->

































