<?php
session_start();
$conn = mysqli_connect("localhost", "id13346941_localhost", "CoDQy{evk7o4q3V%", "id13346941_project_research");
//= new mysqli("localhost","root","","project_research") or die("ERROR:could not connect to the database!!!");
date_default_timezone_set('Asia/Kolkata');
$timestamp = date("Y-m-d H:i:s");

$doi= $_POST['doi'];
$chk=""; 

foreach($doi as $chk1)  
   {  
     $query=mysqli_query($conn,"UPDATE document SET approved=1, approval_date='$timestamp' where DOI='$chk1'");  
    
    $rr= "select work_email from document where DOI='$chk1'";
    
        $stmt = mysqli_query($conn, $rr);
        $row = mysqli_fetch_assoc($stmt);
    
    
$to = $row['work_email'];
$subject = "Document Approved";
$txt = "Document of DOI: ".$chk1." is approved! ";
$headers = "From: mmu.no.reply.com";

if(!mail($to,$subject,$txt,$headers)){
    
echo"
        <script>
       alert('Mails can not be sent! Mail server down.');
        </script>";  
    
}
    
   }  



echo"
        <script>
       alert('Documents Approved!');
        window.open('admin_home.php','_top');
        </script>";  



?>