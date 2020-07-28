<?php
// Variable setting

$textarea = $_REQUEST['feed'];
$FirstName = $_REQUEST['firstname'];
$LastName = $_REQUEST['lastname'];
$Email = $_REQUEST['email'];

// check input fields

if(empty($textarea) || empty($FirstName) || empty($LastName) ||empty($Email))
{
	echo "Please fill all the fields ";
}
else 
{
	mail("namansingla6640@gmail.com","Feedback","$textarea","From: '$Email'" );
	
	echo "<script> type ='text/javascript'>alert('Your Message sent Succesfully')
	window.open('home.php','_top');
	
	</script>";
}


?>
