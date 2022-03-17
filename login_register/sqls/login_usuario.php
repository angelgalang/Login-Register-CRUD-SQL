<?php
    include 'conexion_users.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    $validar = mysqli_query($conn, "SELECT * FROM users 
    WHERE username='$username' && password='$password'");
    
    if(mysqli_num_rows($validar) > 0){
        header("location: ../welcome.php");
    } else {
        echo '
            <script>
            alert("Usuario no existe, por favor verifique los datos introducidos");
            window.location = "../index.php";
            </script>
        ';
        exit;
    }

?>