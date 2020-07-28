<?php
session_start();

date_default_timezone_set('Asia/Kolkata');
$timestamp = date("Y-m-d H:i:s");



try {
 
   // $conn = new mysqli("localhost", "root", "", "project_research");
    $conn = new mysqli("localhost", "id13346941_localhost", "CoDQy{evk7o4q3V%", "id13346941_project_research");
  // set the PDO error mode to exception
 
    
$logout = "UPDATE log SET logout_time='$timestamp' WHERE work_email='".$_SESSION['work_email']."' ORDER BY login_time DESC LIMIT 1;";

mysqli_query($conn, $logout);
 
    
    
    session_destroy();
    
echo"<script>alert('Logging out...');
window.open('login.html','_top');</script>";

 
 
    
} catch(PDOException $e) {
  echo ' something went wrong! ';
   
   
}

?>