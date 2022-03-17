<?php include("sqls/conexion_users.php"); ?>

<?php include('includes/header.php'); ?>

<main class="container p-4">
  <div class="row">
    <div class="col-md-4">
      <!-- MENSAJES -->

      <?php if (isset($_SESSION['message'])) { ?>
        <div class="alert alert-<?= $_SESSION['message_type'] ?> alert-dismissible fade show" role="alert">
          <?= $_SESSION['message'] ?>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      <?php session_unset();
      } ?>

      <!-- AÑADIR DOMINIOS -->
      <div class="card card-body">
        <form action="save_domain.php" method="POST">
          <div class="form-group">
            <input type="text" name="name" class="form-control" placeholder="Domain name" autofocus>
          </div>
          <div class="form-group">
            <textarea name="domain" rows="2" class="form-control" placeholder="Domain"></textarea>
          </div>
          <input type="submit" name="save_domain" class="btn btn-info btn-block" value="Guardar dominio">
        </form>
      </div>
    </div>
    <div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Domain</th>
            <th>Created At</th>
            <th>Edit / Delete</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $query = "SELECT * FROM domains";
          $result = mysqli_query($conn, $query);

          while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
              <td><?php echo $row['id']; ?></td>
              <td><?php echo $row['name']; ?></td>
              <td><?php echo $row['domain']; ?></td>
              <td><?php echo $row['created_at']; ?></td>
              <td>
                <a href="edit_domain.php?id=<?php echo $row['id'] ?>" class="btn btn-secondary">
                  <i class="fas fa-marker"></i>
                </a>

                <a href="delete_domain.php?id=<?php echo $row['id'] ?>" class="btn btn-success">
                  <i class="far fa-trash-alt"></i>
                </a>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</main>

<?php include('includes/footer.php'); ?>