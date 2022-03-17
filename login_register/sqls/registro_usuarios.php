<?php

include 'conexion_users.php';

$nombre_completo = $_POST['nombre'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
//sha256
$password = hash('sha256', $password);


$query = "INSERT INTO users(nombre, username, email, password) 
VALUES('$nombre_completo', '$username', '$email', '$password')";


$ejecutar = mysqli_query($conn, $query);

if ($ejecutar) {
    echo '<script>
            alert("Usuario almacenado correctamente");
            window.location = "../index.php";
          </script>';
} else {
    echo '<script>
            alert("Inténtalo de nuevo, usuario no almacenado");
            window.location = "../index.php";
          </script>';
}

mysqli_close($conn);
?>