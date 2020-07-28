<?php


session_start();

date_default_timezone_set('Asia/Kolkata');

$user_type= $_POST['user_type'];
$work_email = $_POST['email'];
$password = $_POST['password'];
$timestamp = date("Y-m-d H:i:s");


$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="project_research";


try {
 $conn = new mysqli("localhost", "id13346941_localhost", "CoDQy{evk7o4q3V%", "id13346941_project_research");
    //$conn = new mysqli("localhost", "root", "", $dbname);
  // set the PDO error mode to exception
 
    
$check = "select * from sign_up where work_email= '$work_email' && password= '$password' ";


$result= mysqli_query($conn, $check);
    
$num= mysqli_num_rows($result);
   
    if($user_type=="Admin" && $work_email=="admin@mmu.org" && $password=="admin"){
       $_SESSION['username1']= "Admin"; 
        $_SESSION['work_email']= $work_email;
       header("Location: admin_home.php");         
        
    }
    
    elseif($num==1){

    $log="insert into log(user_type, work_email, password, login_time) VALUES('$user_type','$work_email','$password','$timestamp');";
    mysqli_query($conn, $log); 
        
        
        $rr= "select full_name from sign_up where work_email= '$work_email' && password= '$password' ";
        $stmt = mysqli_query($conn, $rr);
        $row = mysqli_fetch_assoc($stmt);
        
        $_SESSION['username']= $row["full_name"];  
         $_SESSION['work_email']= $work_email;

        
   $_SESSION['login_time']= $timestamp; 
        
   header("Location: home.php");      

    }
    
    else{
        echo"
        <script>
        alert('Wrong Login details !!');
        window.open('login.html','_top');
        </script>
        
        ";
    }
 
 
 
 
 
    
} catch(PDOException $e) {
  echo 'wrong';
   
   
}



 /*$INSERT = "INSERT INTO sign_up(emp_id, gender, image_dir, prefix, full_name, father_name, mobile, aadhar, pan, passport, category, email, work_email, university, institute, department, designation, date, highest_qualification,country, state, district, research_area, password) VALUES('$emp_id', '$gender', '$image_dir', '$prefix', '$full_name', '$father_name', $mobile, $aadhar, '$pan', '$passport', '$category', '$email', '$work_email', '$university', '$institute', '$department', '$designation', '$date', '$highest_qualification' , '$country', '$state', '$district', '$research_area', '$password'*/




?>
    
