<?php 
   include('sidenav.php');
   require('functions.php');
   $result=$function->view_student();
   if (isset($_GET["delete"])) {

    $id=$_GET['delete'];
    $function->delete_student($id);
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
      <div class="container" style="margin-left:220px;">
         <div class="row justify-content-center">
            <h1 class="text-info"> Show Information</h1>
            <div class="card mb-4" >
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-hover table-dark" id="dataTable" width="100%" cellspacing="0">
                       <thead>
                           <tr>
                              <th>Student Name</th>
                              <th>Student Id</th>
                              <th>Depertment</th>
                              <th>University Name</th>
                              <th>Address</th>
                              <th>Email</th>
                              <th>Action</th>
                           </tr>
                        </thead>
                        <?php
                           while ($row = $result->fetch_assoc()) { ?>
                        <tr>
                           <td><?= $row['student_name']; ?> </td>
                           <td><?= $row['student_id']; ?> </td>
                           <td><?= $row['dept']; ?> </td>
                           <td><?= $row['u_name']; ?> </td>
                           <td><?= $row['address']; ?> </td>
                           <td><?= $row['email']; ?> </td>
                           <td>
                    <!-- <form method="POST"> -->
                    <a href="allstudents.php?delete=<?=($row['id']); ?>" class="btn btn-danger" type="submit" name="delete">Delete</a> <!-- </form> -->
                   <!--  <a href="pendingStudent.php?cancel=<?=$row['id']; ?>" class="btn btn-danger" >Delete </a>  -->

                  </td>
                        </tr>
                        <?php   }  ?>
                        <tfoot>
                           <tr>
                              <th>Student Name</th>
                              <th>Student Id</th>
                              <th>Depertment</th>
                              <th>University Name</th>
                              <th>Address</th>
                              <th>Email</th>
                           </tr>
                        </tfoot> 
                     </table>
         </div>
       </div>
      </div>
    </div>
</body>
</html>