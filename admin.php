<?php
   session_start();
   require('functions.php');
   $result=$function->view_note();//storing notes in result variable
   
   if (isset($_GET["delete"])) {
   
       $id=$_GET['delete'];
       $function->delete_note($id);
   }
   
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <title>Dashboard -Admin</title>
      <link href="css/styles.css" rel="stylesheet" />
      <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
      <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
   </head>
   <body class="sb-nav-fixed">
      <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
         <h2 class="navbar-brand" >Welcome</h2>
         <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
         <!-- Navbar Search-->
         <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
            <div class="input-group">
               <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
               <div class="input-group-append">
                  <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
               </div>
            </div>
         </form>
         <!-- Navbar-->
         <ul class="navbar-nav ml-auto ml-md-0"style="color: white;">
         <?php
            $name=$_SESSION["ainfo"]["name"];
            // $name="Admin";
            $function->show_admin_name($name);
        ?>
         </ul>
         <ul class="navbar-nav ml-auto ml-md-0">
            <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                  
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="adminlogout.php">Logout</a>
               </div>
            </li>
         </ul>
      </nav>
      <div id="layoutSidenav">
         <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
               <div class="sb-sidenav-menu">
                  <div class="nav">
                     <div class="sb-sidenav-menu-heading">Core</div>
                     
                     <a class="nav-link" href="home.php">
                     <div class="sb-nav-link-icon"><i class="fas fa-columns"></i>
                     Home </div> </a>
                     
                     
                     <div class="sb-sidenav-menu-heading">Interface</div>
                     <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePending" aria-expanded="false" aria-controls="collapsePending"> 
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Pending Requests
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                              </a>
                            <div class="collapse" id="collapsePending" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav" id="sidenavAccordionPending">
                                    <a class="nav-link" href="pendingStudent.php">Pending Students </a>
                                    <a class="nav-link" href="pendingNote.php">Pending Notes</a>
                                </nav>
                            </div>


                            

                     <div class="sb-sidenav-menu-heading">Addons</div>
                     
                    <a class="nav-link" href="allstudents.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                All Students
                     </a>
                     <a class="nav-link" href="logout.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-sign-out-alt"></i></div>
                        Logout
                    </a>
                  </div>
               </div>
               <div class="sb-sidenav-footer">
                  <div class="small">Logged in as:</div>
                  Admin
               </div>
            </nav>
         </div>
         <div id="layoutSidenav_content">
            <main>
               <div class="container-fluid">
                  <h1 class="mt-4">Dashboard</h1>
                  <ol class="breadcrumb mb-4">
                     <li class="breadcrumb-item active">Admin Dashboard</li>
                  </ol>
                  <div class="row">
                     <div class="col-xl-3 col-md-6">
                        <div class="card bg-primary text-white mb-4">
                           <div class="card-body">Home Page</div>
                           <div class="card-footer d-flex align-items-center justify-content-between">
                              <a class="small text-white stretched-link" href="home.php">Go to home</a>
                              <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-3 col-md-6">
                        <div class="card bg-warning text-white mb-4">
                           <div class="card-body">Pending Notes</div>
                           <div class="card-footer d-flex align-items-center justify-content-between">
                              <a class="small text-white stretched-link" href="pendingNote.php">View Details</a>
                              <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                           </div>
                        </div>
                     </div>
                    
                     <div class="col-xl-3 col-md-6">
                        <div class="card bg-danger text-white mb-4">
                           <div class="card-body">Pending Studenst</div>
                           <div class="card-footer d-flex align-items-center justify-content-between">
                              <a class="small text-white stretched-link" href="pendingStudent">View Details</a>
                              <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-3 col-md-6">
                        <div class="card bg-success text-white mb-4">
                           <div class="card-body">All Student</div>
                           <div class="card-footer d-flex align-items-center justify-content-between">
                              <a class="small text-white stretched-link" href="allstudents.php">View Details</a>
                              <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="card mb-4">
                     <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                        All Notes
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
                              </tfoot>
                              <?php
                                 while ($row = $result->fetch_assoc()) { ?>
                              <tr>
                                 <td><?= $row['n_name']; ?> </td>
                                 <td><?= $row['course']; ?> </td>
                                 <td><?= $row['dept']; ?> </td>
                                 <td><?= $row['description']; ?> </td>
                                 <td><?= date("l jS \of F Y h:i:s A",strtotime($row['datetime'])); ?> 
                                 </td>
                                
                                 <td>
                                 <img src="picture/<?php echo $row['n_image']; ?>" height=50rem; 
                                                 data-toggle="modal"
                                                 data-target="#exampleModal-<?php echo $row['n_name']; ?>">

                                            <div class="modal fade" id="exampleModal-<?php echo $row['n_name']; ?>"
                                                 tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                                 aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Modal
                                                                title</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <img src="picture/<?php echo $row['n_image']; ?>"
                                                                 height=350rem; width=450rem;>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Close
                                                            </button>
                                                            <button type="button" class="btn btn-primary">Save changes
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> 
                                 </td>
                                 <td>
                                            <a href="" data-toggle="modal"
                                               data-target="#exampleModalCenter-<?php echo $row['n_name']; ?>"
                                               id="file">
                                                <?php echo $row['n_file']; ?>
                                            </a>
                                            <div class="modal fade"
                                                 id="exampleModalCenter-<?php echo $row['n_name']; ?>"
                                                 tabindex="-1" role="dialog"
                                                 aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLongTitle">File Information</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body" id="modalbody">
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <div class="row">
                                                                        <div class="col-7">
                                                                            <img src="picture/<?php echo $row['n_image']; ?>" width="250rem" height="auto" style="border: 2px solid #2c3e50; border-radius: 5px">
                                                                        </div>
                                                                        <div class="col-5">
                                                                            <ol style="list-style-type: none">
                                                                                <li><span class="font-weight-bold">Note Name: </span><?= $row['n_name']; ?> </li>
                                                                                <li><span class="font-weight-bold">Course Name: </span><?= $row['course']; ?> </li>
                                                                                <li><span class="font-weight-bold">Department: </span><?= $row['dept']; ?> </li>
                                                                                <li><span class="font-weight-bold">Description: </span><?= $row['description']; ?></li>
                                                                                <li><span class="font-weight-bold">Upload Time: </span><?= date("l jS \of F Y h:i:s A",strtotime($row['datetime'])); ?> </li>
                                                                            </ol>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Close
                                                            </button>
                                                            <a href="files/<?php echo $row['n_file'] ?>"
                                                               download="<?php echo $row['n_file']; ?>"
                                                               class="btn btn-primary">Download</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                 <td>
                                    <!-- <form method="POST"> -->
                                    <a href="admin.php?delete=<?=($row['n_id']); ?>" class="btn btn-danger" type="submit" name="delete">Delete</a> <!-- </form> -->
                                    <!--  <a href="pendingStudent.php?cancel=<?=$row['id']; ?>" class="btn btn-danger" >Delete </a>  -->
                                 </td>
                              </tr>
                              <?php   }  ?>
                              
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
               </div>
            </footer>
         </div>
      </div>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
      <script src="js/scripts.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
      <script src="assets/demo/chart-area-demo.js"></script>
      <script src="assets/demo/chart-bar-demo.js"></script>
      <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
      <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
      <script src="assets/demo/datatables-demo.js"></script>
   </body>
</html>