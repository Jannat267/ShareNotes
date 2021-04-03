<?php 
   require('functions.php');
   $result=$function->view_note();
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <title></title>
      <link href="css/styles.css" rel="stylesheet" />
      <title>Bare - Start Bootstrap Template</title>
      <!-- Bootstrap core CSS -->
      <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   </head>
   <body>
      <!-- Navigation -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
         <div class="container">
            <a class="navbar-brand" href="#">Start Bootstrap</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
               <ul class="navbar-nav ml-auto">
                  <li class="nav-item active">
                     <a class="nav-link" href="#">Home
                     <span class="sr-only">(current)</span>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="register.php">Sign Up</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="login.php">Sign in</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="adminlogin.php">Admin</a>
                  </li>
               </ul>
            </div>
         </div>
      </nav>
      <!-- Page Content -->
      <div class="container">
      <div class="card mb-4">
         <div class="card-header">
            <i class="fas fa-table mr-1"></i>
            DataTable Example
         </div>
         <div class="card-body">
            <div class="table-responsive">
               <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                     <tr>
                        <th>Note Name</th>
                        <th>Course Name</th>
                        <th>Depertment</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>File</th>
                     </tr>
                  </thead>
                  <?php
                     while ($row = $result->fetch_assoc()) { ?>
                  <tr>
                     <td><?= $row['n_name']; ?> </td>
                     <td><?= $row['course']; ?> </td>
                     <td><?= $row['dept']; ?> </td>
                     <td><?= $row['description']; ?> </td>
                     <td><a href="imageview.php?image=<?=($row['n_image']);?>">
                        <?= $row['n_image']; ?>
                        </a>
                     </td>
                     <td>
                        <a href="fileview.php?file=<?= ($row['n_file']); ?>"> 
                        <?= $row['n_file']; ?>
                        </a> 
                     </td>
                  </tr>
                  <?php   }  ?>
                  <tfoot>
                     <tr>
                        <th>Note Name</th>
                        <th>Course Name</th>
                        <th>Depertment</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>File</th>
                     </tr>
                  </tfoot>
               </table>
            </div>
         </div>
      </div>
      </div>
      </main>
      <footer class="py-4 bg-light mt-auto">
         <div class="container-fluid">
         <div class="d-flex align-items-center justify-content-between small">
            <div class="text-muted">Copyright &copy; Your Website 2020</div>
            <div>
               <a href="#">Privacy Policy</a>
               &middot;
               <a href="#">Terms &amp; Conditions</a>
            </div>
         </div>
      </footer>
   </body>
</html>