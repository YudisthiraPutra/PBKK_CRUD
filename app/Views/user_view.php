<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>CRUD</title>
  <link rel="stylesheet" href="/css/styles.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
     <div class="navbar">
      <div class="title">
        <h1>CRUD CODE IGNITER</h1>
      </div>
      <div class="nav-item">
        <a href="<?php echo site_url('/user-form') ?>">Add User</a>
      </div>
    </div>

   <div class="container mt-4">
      <?php
      if(isset($_SESSION['msg'])){
         echo $_SESSION['msg'];
         }
      ?>
   <div class="mt-3">
      <table class="table table-bordered" id="users-list">
         <thead>
            <tr>
               <th>ID</th>
               <th>Name</th>
               <th>Action</th>
            </tr>
         </thead>
         <tbody>
            <?php if($users): ?>
            <?php foreach($users as $user): ?>
            <tr>
               <td><?php echo $user['ID']; ?></td>
               <td><?php echo $user['Nama']; ?></td>
               <td>
               <a href="<?php echo base_url('edit-view/'.$user['ID']);?>" class="btn btn-primary btn-sm">Edit</a>
               <a href="<?php echo base_url('delete/'.$user['ID']);?>" class="btn btn-danger btn-sm">Delete</a>
               </td>
            </tr>
            <?php endforeach; ?>
            <?php endif; ?>
         </tbody>
      </table>
   </div>
   </div>
    <div class="footer">
        <p>Al-Ferro Yudisthira Putra (5025211176)</p>
    </div>
 
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready( function () {
      $('#users-list').DataTable();
  } );
</script>
</body>
</html>