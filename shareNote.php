<?php
   //include('sidenav.php');
   require('action.php');

    $note_name='';
    $course='';
    $dept='';
    $description='';
    $n_image='';
    $temp_name='';
    $n_file='';
   

 if (isset($_POST["submit"])) {
    

     $note_name=$_POST['note_name'];
     $s_id=$_SESSION['data']['student_id'];
     $course=$_POST['course'];
     $dept=$_POST['dept'];
     $description=$_POST['description'];
     $image=$_FILES['image']['name'];
     $file=$_FILES['file']['name'];
     $tmp=$_FILES['image']['tmp_name'];
     $tmp2=$_FILES['file']['tmp_name'];
     $imgfolder="picture/".$image;
     $filefolder="files/".$file;
     date_default_timezone_set("Asia/Dhaka");
    //  $datetime=date("l jS \of F Y h:i:s A");
     $datetime=date("Y-m-d h:i:sa");

     //$n_file=$_POST['n_file'];
     
     if($note_insert=$function->note_insert($note_name,$s_id,$course,$dept,$description,$image,$file,$datetime));
     {
        move_uploaded_file($tmp,$imgfolder);
        move_uploaded_file($tmp2,$filefolder);
        echo " <div class='p-3 mb-2 bg-success text-white'> Your note has been submitted.Please wait for the approval.<a href='dashboard.php' style='color:white;'><u>Go back?</u></a></div>"; 
     }
     // else{
     //    echo " doesnt upload";
     // }
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
    <title>Page Title - SB Admin</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">
                                        Notes Request Form</h3>        
                                </div>
                                <div class="card-body">
                                    <form action="" method="POST" enctype="multipart/form-data">

                                        <div class="form-row ">
                                            <div class="col-md-4">
                                                <label class="small mb-1" for="inputFirstName">Note Name</label>
                                            </div>
                                                <div class="form-group col-md-8">
                                                    
                                                    <input class="form-control py-6" id="inputFirstName" type="text" name="note_name" placeholder="Enter a notes name" required>
                                                </div>
                                            
                                        </div>
                                           <div class="form-row ">
                                            <div class="col-md-4">
                                                <label class="small mb-1" for="inputFirstName">Course Name</label>
                                            </div>
                                                <div class="form-group col-md-8">
                                                    
                                                    <input class="form-control py-6" id="inputFirstName" type="text" name="course" placeholder="Enter your course name" required>
                                                </div>
                                            
                                        </div>
                                        <div class="form-row ">
                                            <div class="col-md-4">
                                                <label class="small mb-1" for="inputFirstName">Depertment</label>
                                            </div>
                                                <div class="form-group col-md-8"> 
                                                    <input class="form-control py-6" id="inputFirstName" type="text" name="dept" placeholder="Enter your depertment name" required>
                                                </div>
                                            
                                        </div>
                                        <div class="form-row ">
                                            <div class="col-md-4">
                                                <label class="small mb-1" for="inputFirstName">Description</label>
                                            </div>
                                                <div class="form-group col-md-8">
                                                    <input class="form-control py-4" id="inputFirstName" type="text" name="description" placeholder="write a description" required>
                                                    
                                                </div>
                                            
                                        </div>
                                        <div class="form-row ">
                                            <div class="col-md-4">
                                                <label class="small mb-1" for="inputFirstName">Upload Image</label>
                                            </div>
                                                <div class="form-group col-md-8">
                                                    <input class="" id="inputFirstName" type="file" name="image" required>
                                                </div>
                                            
                                        </div>
                                        <div class="form-row ">
                                            <div class="col-md-4">
                                                <label class="small mb-1" for="inputFirstName">Upload File</label>
                                            </div>
                                                <div class="form-group col-md-8">
                                                    <input class=""  type="file" name="file" >
                                                </div>
                                                <br>
                                        </div>
                                        
                                        <div class="form-group container row justify-content-md-center">
                                            
                                          <button type="submit" class="btn btn-warning" value="ok" name="submit">Submit</button>
                                            
                                        </div>
                                        
                                    </form>

                                    <div class="card-footer text-center">
                                        <div class="small"><a href="home.php">Go to home</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </main>
        </div>
        <br>
        <div id="layoutAuthentication_footer">
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
</body>

</html>