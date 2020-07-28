<?php
require_once("db.php");
if(count($_POST)>0) {
	$sql = "UPDATE sign_up set full_name='" . $_POST["full_name"] . "', password='" . $_POST["password"] . "', father_Name='" . $_POST["father_name"] . "', mobile='" . $_POST["mobile"] . "' WHERE id='" . $_POST["id"] . "'";
	mysqli_query($conn,$sql);
	$message = "Record Modified Successfully";
}
$select_query = "SELECT * FROM sign_up WHERE id='" . $_GET["id"] . "'";
$result = mysqli_query($conn,$select_query);
$row = mysqli_fetch_array($result);
?>
<html>
<head>

 <link rel="stylesheet" type="text/css" href="assets/css/crud.css" />
    
    <meta http-equiv="refresh" content="600;url=logout.php" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit User</title>
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

    
    <style>
     body {
    text-align: center;
}
form {
    display: inline-block;
}
    </style>
</head>
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
    <div>
<form name="frmUser" method="post" action="">
<div style="width:500px;">
<div class="message"><?php if(isset($message)) { echo $message; } ?></div>
<div align="right" style="padding-bottom:5px;"><a href="crud.php" class="link"><img alt='List' title='List' src='images/list.png' width='15px' height='15px'/> List User</a></div>
<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
<tr class="tableheader">
<td colspan="2">Edit User</td>
</tr>
<tr>
<td><label>Official Email</label></td>
<td><input type="hidden" name="id" class="txtField" value="<?php echo $row['id']; ?>"><input type="text" name="work_email" class="txtField" value="<?php echo $row['work_email']; ?>"></td>
</tr>
<tr>
<td><label>Password</label></td>
<td><input type="password" name="password" class="txtField" value="<?php echo $row['password']; ?>"></td>
</tr>
    <td><label>Full Name</label></td>
<td><input type="text" name="full_name" class="txtField" value="<?php echo $row['full_name']; ?>"></td>
</tr>
    <td><label>Email</label></td>
<td><input type="text" name="email" class="txtField" value="<?php echo $row['email']; ?>"></td>
</tr>
    <td><label>Gender</label></td>
<td><input  type="radio" value="m" id="formCheck-1" name="gender" <?php echo ($row['gender']== 'm') ?  "checked" : "" ;  ?>><label  for="formCheck-1">&nbsp;Male&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;</label><input   type="radio" value="f" id="formCheck-1" name="gender" <?php echo ($row['gender']== 'f') ?  "checked" : "" ;  ?>><label  for="formCheck-1">&nbsp;Female</label></td>
</tr>
<td><label>Employee ID</label></td>
<td><input type="text" name="emp_id" class="txtField" value="<?php echo $row['emp_id']; ?>"></td>
</tr>
<td><label>Mobile</label></td>
<td><input type="text" name="mobile" class="txtField" value="<?php echo $row['mobile']; ?>"></td>
</tr>
<tr>
<td colspan="2"><br><input style="margin-left:40%; width:100px;" type="submit" name="submit" value="Submit" class="btnSubmit"></td>
</tr>
</table>
</div>
</form>
</div>
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

					<a href="#">About</a>
					
					<a href="#">Contact</a>
					<a href="about.html" target="_blank">About</a>
				</p>

				<p>Maharishi Markandeshwar (Deemed to be University) &copy; 2020</p>
			</div>

		</footer>
</body></html>