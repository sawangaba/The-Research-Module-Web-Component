<?php

session_start();

$new_password = $_POST['new_password'];


$servername = "localhost";
$username = "root";
$password = "";
$dbsn = "project_research";


try{
// Create connection
$conn = mysqli_connect("localhost", "id13346941_localhost", "CoDQy{evk7o4q3V%", "id13346941_project_research");
// $conn = new mysqli("localhost", "root", "", $dbname);

$sql = "UPDATE sign_up SET password= '".$new_password."'";

$conn->query($sql);

session_unset();
echo "<script> type ='text/javascript'>alert('Password Changed!!');
    window.open('login.html','_top');
	</script>";
   
    
}


catch(Exception $e){
    
    
    session_unset();
    echo "<script> type ='text/javascript'>alert('Error in changing password !!');
    window.open('login.html','_top');
	</script>";
   
    
}


?>