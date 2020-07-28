<?php

session_start();

$conn= new mysqli("localhost", "id13346941_localhost", "CoDQy{evk7o4q3V%", "id13346941_project_research") or die("ERROR:could not connect to the database!!!");
//$conn= new mysqli("localhost","root","","project_research") or die("ERROR:could not connect to the database!!!");


$_SESSION['filter']="select * from document where work_email='{$_SESSION['work_email']}' ORDER BY upload_date DESC";

$approved = 1;
if(empty($_POST['approved'])) $approved = 0;
$pending = 1;
if(empty($_POST['pending'])) $pending = 0;
$sort_date = 0;
if($_POST['sort']=='d') $sort_date = 1;
$sort_name = 0;
if($_POST['sort']=='n') $sort_name = 1;



if($approved==0 && $pending ==0 && $sort_name==1){
    
    $_SESSION['filter']="select * from document where work_email='{$_SESSION['work_email']}' ORDER BY full_jName ASC";
    
}
else if($approved==0 && $pending ==0 && $sort_date==1){
    
    $_SESSION['filter']="select * from document where work_email='{$_SESSION['work_email']}' ORDER BY upload_date DESC";
    
}
else if($approved==1 && $pending ==0 && $sort_date==1){
    
    $_SESSION['filter']="select * from document where work_email='{$_SESSION['work_email']}' AND approved=1 ORDER BY upload_date DESC";
    
}
else if($approved==0 && $pending ==1 && $sort_date==1){
    
    $_SESSION['filter']="select * from document where work_email='{$_SESSION['work_email']}' AND approved=0 ORDER BY upload_date DESC";
    
}
else if($approved==1 && $pending ==0 && $sort_name==1){
    
    $_SESSION['filter']="select * from document where work_email='{$_SESSION['work_email']}' AND approved=1 ORDER BY full_jName ASC";
    
}
else if($approved==0 && $pending ==1 && $sort_name==1){
    
    $_SESSION['filter']="select * from document where work_email='{$_SESSION['work_email']}' AND approved=0 ORDER BY full_jName ASC";
    
}
else if($approved==1 && $pending ==1 && $sort_name==1){
    
    $_SESSION['filter']="select * from document where work_email='{$_SESSION['work_email']}' ORDER BY full_jName ASC";
    
}
else if($approved==1 && $pending ==1 && $sort_date==1){
    
    $_SESSION['filter']="select * from document where work_email='{$_SESSION['work_email']}' ORDER BY upload_date DESC";
    
}
else if($approved==1 && $pending ==0){
    
    $_SESSION['filter']="select * from document where work_email='{$_SESSION['work_email']}' AND approved=1";
    
}
else if($approved==0 && $pending ==1){
    
    $_SESSION['filter']="select * from document where work_email='{$_SESSION['work_email']}' AND approved=0";
    
}



else{
    
    $_SESSION['filter']="select * from document where work_email='{$_SESSION['work_email']}' ORDER BY upload_date DESC";
}



$ema= $_SESSION['work_email'];
$filter="insert into filter(filter_email,approved, pending, sort_date, sort_name) VALUES('$ema','$approved','$pending','$sort_date','$sort_name');";
   
mysqli_query($conn, $filter); 



echo"
       <script>
       
       window.open('home.php','_top');
       </script>
        
        ";

?>