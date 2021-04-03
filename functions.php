<?php
class notes {

	function __construct()
    {
        $this->open_db_connection(); 
        
    }

    public function open_db_connection()
    {
       $this->connection= new mysqli('localhost','root','','notes_project');
        if($this->connection->connect_errno)
        {
            die("database connection failed".$this->connection->connect_error);

        }

    }
    
    public function view_student()
	{
		$sql=$this->connection->query ("SELECT* FROM student WHERE approval=1 ") or die($this->connection->error); 

		return $sql;
	}

	public function student_insert($s_name,$s_id,$dept,$u_name,$address,$email,$pass)
	{

       $sql=$this->connection->query("INSERT INTO `student`(`student_name`, `student_id`, `dept`, `u_name`, `address`, `email`,`password`) VALUES ('$s_name','$s_id','$dept','$u_name','$address','$email','$pass')") or die($this->connection->error);
		
	}

	public function pending_students()
	{

         $result=$this->connection->query ("SELECT* FROM student WHERE approval=0 ") or die($this->connection->error);
           return $result;       
	}

	public function approve_student($id)
	{

		$sql=$this->connection->query("UPDATE `student` SET `approval` = '1' WHERE `student`.`id` = $id") or die($this->connection->error);
	}
	public function delete_student($id)
	{

		$sql=$this->connection->query("DELETE FROM `student` WHERE  id =$id ") or die($this->connection->error);
	}

	public function student_login($email,$pass)
	{
		$sql=$this->connection->query("SELECT * FROM `student` WHERE email='$email' AND password='$pass'") or die($this->connection->error);
        return $sql;
	}

	public function view_note()
	{
		$sql=$this->connection->query ("SELECT* FROM notes WHERE approval=1 ") or die($this->connection->error);
		return $sql;
	}
	public function view_note_of_one_student($s_id)
	{
		$sql=$this->connection->query ("SELECT* FROM notes WHERE s_id='$s_id' AND approval='1' ") or die($this->connection->error);
		return $sql;
	}

	public function note_insert($note_name,$log_id,$course,$dept,$description,$image,$file)
	{
		 $sql=$this->connection->query("INSERT INTO `notes`( `n_name`,`s_id`, `course`, `dept`, `description`, `n_image`, `n_file`) VALUES ('$note_name','$log_id','$course','$dept','$description','$image','$file')") or die($this->connection->error);
		
	}
	public function pending_note()
	{
		 $result=$this->connection->query ("SELECT* FROM notes WHERE approval=0 ") or die($this->connection->error);
         return $result;       
	}

	public function approve_note($id)
	{
		$sql=$this->connection->query("UPDATE `notes` SET `approval` = '1' WHERE `notes`.`n_id` = $id") or die($this->connection->error);
	}

	public function delete_note($id)
	{
		$sql=$this->connection->query("DELETE FROM `notes` WHERE  n_id =$id ") or die($this->connection->error);
	}

    public function admin_login($email,$pass)
	{
  	  $sql=$this->connection->query("SELECT * FROM `admin` WHERE email='$email' AND password='$pass'") or die($this->connection->error);
      return $sql;
	}
    public function logout()
	{
		session_destroy();
	}
	public function edit($id)
	{
    	$sql=$this->connection->query("SELECT * FROM crud WHERE  id =$id") or die($this->connection->error);
		if ($sql) {
		
          $row = $sql->fetch_assoc();
		  $this->name = $row['name'];
		  $this->location = $row['location'];
	}

	}
	public function update($id,$name,$location)
	{
	 
       $sql=$this->connection->query("UPDATE crud SET name='$name',location='$location'
		  WHERE id= $id ") or die($this->connection->error);
		
	}
}


   $function= new notes();

  
?>