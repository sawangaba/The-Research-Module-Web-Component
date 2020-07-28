<?php

require_once("db.php");
$sql = "SELECT * FROM sign_up ORDER BY full_name";
$result = mysqli_query($conn,$sql);
?>
<html>
<head>
<title>Users List</title>
<link rel="stylesheet" type="text/css" href="assets/css/crud.css" />
    
    <meta http-equiv="refresh" content="600;url=logout.php" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD Operations</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700">
    <link rel="stylesheet" href="assets/css/3D-animated-text-on-hover.css">
	<link rel="stylesheet" href="assets/css/3D-animated-text-on-hover-1.css">
    <link rel="stylesheet" href="assets/css/3D-animated-text-on-hover.css">
    <link rel="stylesheet" href="assets/css/Button-Hover-Animate.css">
    <link rel="stylesheet" href="assets/css/Drag--Drop-Upload-Form.css">
    <link rel="stylesheet" href="assets/css/Form-Select---Full-Date---Month-Day-Year.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Modal-commerce-popup-button-1.css">
    <link rel="stylesheet" href="assets/css/Modal-commerce-popup-button.css">
    <link rel="stylesheet" href="assets/css/Sidebar-Menu-1.css">
    <link rel="stylesheet" href="assets/css/Sidebar-Menu.css">
    <link rel="stylesheet" href="assets/css/User-Payment-Overview-Rows---Panel-Container.css">
    <link rel="stylesheet" href="assets/css/User-Tasks-and-User-Activity-Streams---List-Group-Component.css">
	<link rel="stylesheet" href="assets/css/Navigation-Clean.css">
	<link rel="stylesheet" href="assets/css/home.css">
	<link rel="stylesheet" href="assets/css/dynamic_button.css">

</head>
    <style>
        body{
            
            height: 100%;
            width: 100%;
            
        }
        table,td
{
  border: 1px solid black;
  border-collapse: collapse;
}
       
        
    
    </style>
<body>
    
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-6" style="margin-left: -40%;"><img data-bs-hover-animate="pulse" src="assets/img/University-Logo.jpg" style="width: 280px;margin: 0px;margin-top: 18px;margin-left: 38px;"></div>
                <div class="col-md-6">
                    <h1 style="width: 463px;font-size: 75px;height: 484px;margin: -166px;margin-right: -135px;margin-left: 0px;margin-top: -171px;background-color: rgb(255,255,255);color: rgb(99,97,97);">The &nbsp;research &nbsp;centre</h1>
                </div>
            </div>
        </div>
    </div>
    <div>
        <nav class="navbar navbar-light navbar-expand-md navigation-clean" style="background-color: #fc0000; z-index:1;">
            <div class="container"><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse text-left" id="navcol-1" style="background-color: #fc0000;color: rgb(255,255,255);width: 1173px;margin-left: -421px;margin-right: -398px;padding-left: 9px;padding-right: 4px;font-size: 20px;">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item" role="presentation"><a class="nav-link" href="admin_home.php" style="color: white;">Home</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link active" href="crud.php" style="color: black;">CRUD Operations</a></li>
                        
                    </ul>
                </div>
            </div>
        </nav>
    </div><br>
    <div align="right" style="width:97.5%;padding-bottom:10px; "><a  href="add_user.php" class="link"><img alt='Add' title='Add' src='images/add.png' width='15px' height='15px'/>&nbsp;Add User</a></div>
     <div class="card-body" style="hieght:1080vh;width: 100vw;overflow-y: hidden; overflow-x:scroll;padding-left: 1px;">
<form name="frmUser" method="post" action="">
<div style="width:100%; height:39.6%; overflow-y: auto;">
<div class="message"><?php if(isset($message)) { echo $message; } ?></div>

<table style="padding-right:10px;"border="0" cellpadding="10" cellspacing="1" width="100" class="tblListForm">
<tr class="listheader">
<td >Employee ID</td>
<td >Official Email</td>
<td>Password</td>
    <td>Prefix</td>
<td>Full name</td>
<td>Gender</td>
    <td>Father's Name</td>
<td>Mobile</td>
<td>Aaadhar Number</td>
    <td>Pan Number</td>
<td>Passport Number</td>
<td>Category</td>
    <td>University</td>
<td>Institute</td>
<td>department</td>
    <td>Designation</td>
<td>Joining Date</td>
<td>Highest Qualification</td>
    <td>Country</td>
<td>State</td>
<td>District</td>
<td>Research Area</td>
<td>Actions</td>
</tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
if($i%2==0)
$classname="evenRow";
else
$classname="oddRow";
?>
<tr class="<?php if(isset($classname)) echo $classname;?>">
<td ><?php echo $row["emp_id"]; ?></td>
<td ><?php echo $row["work_email"]; ?></td>
<td><?php echo $row["password"]; ?></td>
<td><?php echo $row["prefix"]; ?></td>
<td><?php echo $row["full_name"]; ?></td>
<td><?php echo $row["gender"]; ?></td>
<td><?php echo $row["father_name"]; ?></td>
<td><?php echo $row["mobile"]; ?></td>
<td><?php echo $row["aadhar"]; ?></td>
<td><?php echo $row["pan"]; ?></td>
<td><?php echo $row["passport"]; ?></td>
<td><?php echo $row["category"]; ?></td>
<td><?php echo $row["university"]; ?></td>
<td><?php echo $row["institute"]; ?></td>
<td><?php echo $row["department"]; ?></td>
<td><?php echo $row["designation"]; ?></td>
<td><?php echo $row["date"]; ?></td>
<td><?php echo $row["highest_qualification"]; ?></td>
<td><?php echo $row["country"]; ?></td>
<td><?php echo $row["state"]; ?></td>
<td><?php echo $row["district"]; ?></td>
<td><?php echo $row["research_area"]; ?></td>
<td><a href="edit_user.php?id=<?php echo $row["id"]; ?>" class="link"><img alt='Edit' title='Edit' src='images/edit.png' width='15px' height='15px' hspace='10' /></a><a href="delete_user.php?id=<?php echo $row["id"]; ?>"  class="link"><img alt='Delete' title='Delete' src='images/delete.png' width='15px' height='15px'hspace='10' /></a></td>
</tr>
<?php
$i++;
}
?>
</table>

         </div>
    
    </form>
    
</div>
<label>&nbsp;&nbsp;*Note: Documents associated with the user will also be deleted if user is deleted. </label>
    <footer class="footer-distributed">

			<div class="footer-right">

				<a href="#"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-linkedin"></i></a>
				<a href="#"><i class="fa fa-github"></i></a>

			</div>

			<div class="footer-left">

				<p class="footer-links">
					<a class="link-1" href="admin_home.php">Home</a>
                    <a href="about.html" target="_blank">About</a>
					
				
				</p>

				<p>Maharishi Markandeshwar (Deemed to be University) &copy; 2020</p>
			</div>

		</footer>
</body></html>