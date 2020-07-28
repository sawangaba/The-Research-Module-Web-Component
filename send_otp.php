<?php
session_start();
// Variable setting

$mail = $_POST["email"];

$_SESSION['c_email']= $mail;

// check input fields

$connect= new mysqli("localhost", "id13346941_localhost", "CoDQy{evk7o4q3V%", "id13346941_project_research") or die("ERROR:could not connect to the database!!!");
//$connect= new mysqli("localhost","root","","project_research") or die("ERROR:could not connect to the database!!!");

//select users data
$query="select * from sign_up where work_email='{$mail}'";



$result= mysqli_query($connect, $query);
    
$num= mysqli_num_rows($result);
//fetch data
if($num==1){
    
    $otp= rand ( 10000 , 99999 );
    $_SESSION['otp']= $otp;
    
    $to = $mail;
$subject = "OTP";
$txt = "OTP: ".$otp." ";
$headers = "From: mmu.no.reply.com";

mail($to,$subject,$txt,$headers);
    

    
    echo "<script> type ='text/javascript'>alert('Your Message sent Succesfully');
    window.open('otp.php','_top');
	</script>";
}

else{
    
    echo "<script> type ='text/javascript'>alert('Wrong Email!!');
    window.open('forgot_password.html','_top');
	</script>"; 
    
}



?>
