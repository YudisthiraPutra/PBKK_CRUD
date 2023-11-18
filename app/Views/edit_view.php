<!DOCTYPE html>
<html>
<head>
  <title>Codeigniter 4 CRUD - Edit User Demo</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/styles.css">
  <style>
    .container {
      max-width: 500px;
    }
    .error {
      display: block;
      padding-top: 5px;
      font-size: 14px;
      color: red;
    }
  </style>
</head>
<body>
     <div class="navbar">
      <div class="title">
        <h1>CRUD CODE IGNITER</h1>
      </div>
    </div>
  <div class="container mt-5">
    <form method="post" id="update_user" name="update_user" 
    action="<?= site_url('/update') ?>">
      <div class="form-group">
        <label>ID</label>
        <input type="text" name="ID" class="form-control" value="<?php echo $user_obj['ID']; ?>" readonly>
      </div>
      <div class="form-group">
        <label>Nama</label>
        <input type="text" name="Nama" class="form-control" value="<?php echo $user_obj['Nama']; ?>">
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block">Edit</button>
      </div>
    </form>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
</body>
</html>