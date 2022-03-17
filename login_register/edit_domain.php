<?php
include("sqls/conexion_users.php");
$name = '';
$domain = '';

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM domains WHERE id=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $name = $row['name'];
    $domain = $row['domain'];
  }
}

if (isset($_POST['update'])) {
  $id = $_GET['id'];
  $name = $_POST['name'];
  $domain = $_POST['domain'];

  $query = "UPDATE domains set name = '$name', domain = '$domain' WHERE id=$id";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Dominio actualizado correctamente';
  $_SESSION['message_type'] = 'Peligro';
  header('Location: welcome.php');
}

?>
<?php include('includes/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
        <form action="edit_domain.php?id=<?php echo $_GET['id']; ?>" method="POST">
          <div class="form-group">
            <input name="name" type="text" class="form-control" value="<?php echo $name; ?>" placeholder="Actualizar nombre">
          </div>
          <div class="form-group">
            <textarea name="domain" class="form-control" cols="30" rows="10"><?php echo $domain; ?></textarea>
          </div>
          <button class="btn-success" name="update">
            Actualizar
          </button>
        </form>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>