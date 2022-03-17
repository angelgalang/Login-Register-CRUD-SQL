<?php

include('sqls/conexion_users.php');

if (isset($_POST['save_domain'])) {
  $name = $_POST['name'];
  $domain = $_POST['domain'];
  $query = "INSERT INTO domains(name, domain) VALUES ('$name', '$domain')";

  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Error.");
  }

  $_SESSION['message'] = 'Dominio guardado con éxito';
  $_SESSION['message_type'] = 'Éxito';
  header('Location: welcome.php');

}
