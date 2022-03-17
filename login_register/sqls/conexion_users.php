<?php
    session_start();

    $conn = mysqli_connect("localhost", "root", "", "login_registro_db") or die(mysqli_error($mysqli));
    /*
    if($conn){
        echo 'Conectado con éxito a la BDD';
    } else {
        echo 'No se ha podido conectar a la BDD';
    }
    */
    
?>