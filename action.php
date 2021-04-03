<?php
		  session_start();
      require('functions.php');
       $email = '';
        $pass = '';
        $log_id='';
        $data=$_SESSION['data'] ;

    if (isset($_POST["login"])) {

        $_SESSION['email']=$_POST['log_email'];
        $_SESSION['pass'] =md5($_POST['log_pass']);


        if ($sql=$function->student_login($_SESSION['email'],$_SESSION['pass'] )) 
      {
        $_SESSION['data'] = mysqli_fetch_assoc($sql);
        $_SESSION['id']=$data['student_id'];
        $num_rows = mysqli_num_rows($sql);
        if ($num_rows == 1) {
            
            header("location:dashboard.php");
        } 
    
      }

      else {

        echo " <div class='p-3 mb-2 bg-danger text-white'>Wrong email or password!!!</div>"; 
    }

        
    }
   
    
  ?>  
