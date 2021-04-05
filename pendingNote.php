<?php 
require('functions.php');
include('sidenav.php');
$result=$function->pending_note();

if (isset($_GET["approve"])) {

  	$id=$_GET['approve'];
    $function->approve_note($id);
}
if (isset($_GET["cancel"])) {

  $id=$_GET['cancel'];
    $function->delete_note($id);
}

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title></title>
    <link href="css/styles.css" rel="stylesheet" />
</head>
<body>



    <div class="container mr-5" style="width: 1050px;">
         <div class="row justify-content-center">
            <h1 class="text-info"> Show Information</h1>
            
             <div class="card mb-4">
                     <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                        All Notes Requests
                     </div>
                     <div class="card-body">
                        <div class="table-responsive">
                           <table class="table table-hover table-bordered" id="dataTable" width="100%" cellspacing="0">
                              <thead>
                                 <tr>
                                    <th>Note Name</th>
                                    <th>Course Name</th>
                                    <th>Depertment</th>
                                    <th>Description</th>
                                    <th>Upload Time</th>
                                    <th>Image</th>
                                    <th>File</th>
                                    <th>Action</th>
                                 </tr>
                              </thead>
                              <tfoot>
                  <th>Note Name</th>
                  <th>Course Name</th>
                  <th>Depertment</th>
                  <th>Description</th>
                  <th>Upload Time</th>
                  <th>Image</th>
                  <th>File</th>
                  <th>Action</th>
               </tfoot>
                  <?php
                   while ($row = $result->fetch_assoc()) { ?>
                    
                      <tr>
                        <td><?= $row['n_name']; ?> </td>
                        <td><?= $row['course']; ?> </td>
                        <td><?= $row['dept']; ?> </td>
                        <td><?= $row['description']; ?> </td>
                        <td><?=$row['datetime'];?></td>
                        <td>
                          <a href="imageview.php?image=<?=($row['n_image']);?>">
                          <?= $row['n_image']; ?>
                         </a>
                       </td>
                        <td>
                          <a href="fileview.php?file=<?= ($row['n_file']); ?>"> 
                          <?= $row['n_file']; ?>
                         </a>
                       </td>

                        <td>
                          <a href="pendingNote.php?approve=<?=($row['n_id']); ?>" class="btn btn-success" type="submit" name="approve" id="btn">Approve  </a> 
                          
                          <a href="pendingNote.php?cancel=<?=$row['n_id']; ?>" class="btn btn-danger" >Cancel</a>
                        </td>
                      </tr>
                    <?php   }  ?>
                              
                           </table>
                        </div>
                     </div>
                  </div>
      </div>
    </div>
  
</body>
</html>