<?php 
require('functions.php');
include('sidenav.php');
$result=$function->pending_students();

if (isset($_GET['approve'])) {

	  $id=$_GET['approve'];
    $function->approve_student($id);
   
    
}
if (isset($_GET['cancel'])) {

    $id=$_GET['cancel'];
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
		<div class="container">
         <div class="row justify-content-center">
            <h1 class="text-info"> Show Information</h1>
            <div class="card mb-4 col-lg-11">
            <div class="card-body">
              <table class="table table-hover table-dark" id="dataTable" width="100%" cellspacing="0">               
                <thead>
                  <th>Student Name</th>
                  <th>Student Id</th>
                  <th>Depertment</th>
                  <th>University Name</th>
                  <th>Address</th>
                  <th>Email</th>
                  <th>Action</th>
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
                  	
                   <a href="pendingStudent.php?approve=<?=($row['id']); ?>" class="btn btn-success" type="submit" name="approve" >Approve  </a>
                   
                   <a href="pendingStudent.php?cancel=<?=($row['id']); ?>" class="btn btn-danger">Cancel</a>

                  </td>
              </tr>
            <?php   }  ?>

            </table>
          </div>
        </div>
         </div>
      </div>
</body>
</html>