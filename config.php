 <?php
		  session_start();
      require('functions.php');
       $email = '';
       $pass = '';
       $log_id='';
    

    if (isset($_POST["login"])) {

        $email=$_POST['log_email'];
        $pass=md5($_POST['log_pass']);
        $_SESSION['email'] =$email;
        $_SESSION['pass'] = $pass;
        $sql=$function->student_login($email,$pass);
        $num_rows = mysqli_num_rows($sql);
        
        if ($num_rows == 1) {
           
            header("location:dashboard.php");

        } 
    }
    
     
    $result='';
    $email = $_SESSION['email'] ;
    $pass = $_SESSION['pass'] ;
    $log_id=$_SESSION['id'];

     if ($sql=$function->student_login($email,$pass)) {

        $data = mysqli_fetch_assoc($sql);
        $id=$data['student_id'];
        $_SESSION['id']=$id;
      
     }
     else {
      echo " <div class='p-3 mb-2 bg-danger text-white'>Wrong email or password!!!</div>"; 
  }
    
    
  ?>  
