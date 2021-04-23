<?php 

require('sidenav.php');
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
                                                            <h5 class="modal-title" id="exampleModalLongTitle">Modal
                                                                title</h5>
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
                                                                                <li><span class="font-weight-bold">Upload Time: </span><?= $row['datetime']; ?></li>
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