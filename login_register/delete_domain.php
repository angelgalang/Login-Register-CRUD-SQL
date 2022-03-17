<?php

include("sqls/conexion_users.php");

if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "DELETE FROM domains WHERE id = $id";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Error.");
  }

  $_SESSION['message'] = 'Dominio eliminado correctamente.';
  $_SESSION['message_type'] = 'Peligro';
  header('Location: welcome.php');
}

?>
