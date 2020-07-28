<?php

$timestamp = date("Y-m-d H:i:s");

if(count($_POST)>0) {
    
    
    
    $emp_id = $_POST['emp_id'];
$gender = $_POST['gender'];
$prefix = $_POST['name_prefix'];
$full_name = $_POST['full_name'];
$father_name= $_POST['father_name'];
$mobile = $_POST['mobile'];
$aadhar = $_POST['aadhar'];
$pan = $_POST['pan'];
$passport = $_POST['passport'];
$category = $_POST['category'];
$email = $_POST['email'];
$work_email = $_POST['work_email'];
$university = $_POST['university'];
$institute = $_POST['institute'];
$department = $_POST['department'];
$designation = $_POST['designation'];
$date = $_POST['date'];
$highest_qualification = $_POST['highest_qualification'];
$country = $_POST['country'];
$state = $_POST['state'];
$district = $_POST['district'];
$research_area = $_POST['research_area'];
$password = $_POST['password'];



$host="localhost";
$dbusername="id13346941_localhost";
$dbpassword="CoDQy{evk7o4q3V%";
$dbname="id13346941_project_research";


// $host="localhost";
// $dbusername="root";
// $dbpassword="";
// $dbname="project_research";
    
	 $conn = new PDO("mysql:3306=$host;dbname=$dbname", $dbusername, $dbpassword);
    
   
    
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
	
    
    
    
     $sql = $conn->prepare("INSERT INTO sign_up (emp_id,img_dir, gender, prefix, full_name, father_name, mobile, aadhar, pan, passport, category, email, work_email, university, institute, department, designation, date, highest_qualification,country, state, district, research_area, password, creation_time)
  VALUES (:emp_id,:img_dir,:gender,:prefix, :full_name, :father_name, :mobile, :aadhar, :pan, :passport, :category, :email,:work_email, :university, :institute, :department, :designation, :date, :highest_qualification,:country, :state, :district, :research_area, :password, :timestamp)");
    
    
$sql->bindParam(":emp_id", $emp_id);
$sql->bindParam(":img_dir", $_POST['image_dir']);
$sql->bindParam(":gender", $gender);
$sql->bindParam(":prefix", $prefix);
$sql->bindParam(":full_name", $full_name);
$sql->bindParam(":father_name", $father_name);
$sql->bindParam(":mobile", $mobile);
$sql->bindParam(":aadhar", $aadhar);
$sql->bindParam(":pan", $pan);
$sql->bindParam(":passport", $passport);
$sql->bindParam(":category", $category);
$sql->bindParam(":email", $email);
$sql->bindParam(":work_email", $work_email);
$sql->bindParam(":university", $university);
$sql->bindParam(":institute", $institute);
$sql->bindParam(":department", $department);
$sql->bindParam(":designation", $designation);
$sql->bindParam(":date", $date);
$sql->bindParam(":highest_qualification", $highest_qualification);
$sql->bindParam(":state", $state);
$sql->bindParam(":district", $district);
$sql->bindParam(":country", $country);
$sql->bindParam(":research_area", $research_area);
$sql->bindParam(":password", $password);
$sql->bindParam(":timestamp", $timestamp);

//echo "2";
//    echo $target_file . " " . ;

$sql->execute();

    
	$current_id = $conn->lastInsertId();
	if(!empty($current_id)) {
		$message = "New User Added Successfully";
	}
}
?>
<html>
<head>
<title>Add New User</title>
    <link rel="stylesheet" type="text/css" href="assets/css/crud.css" />
    
    <meta http-equiv="refresh" content="600;url=logout.php" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>home admin</title>
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
    </div>
    <div class="card-body"> 
<form name="frmUser" method="post" action="">
<div style="width:500px;">
<div class="message"><?php if(isset($message)) { echo $message; } ?></div>
<div align="right" style="padding-bottom:5px;"><a href="crud.php" class="link"><img alt='List' title='List' src='images/list.png' width='15px' height='15px'/> List User</a></div>
<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
<tr class="tableheader">
<td colspan="2">Add New User</td>
</tr>
<tr>
<td><label>Employee ID</label></td>
<td><input type="text" name="emp_id" class="txtField" required><input type="hidden" name="image_dir" class="txtField" value="image/blank.jpg"><input type="hidden" name="email" class="txtField" value="null@gmail.com"></td>
</tr>
<tr>
<td><label>Gender</label></td>
<td><input  type="radio"  name="gender" checked value="m"><label>&nbsp;Male&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;</label><input type="radio" name="gender" value="f"><label>&nbsp;Female</label></td>
</tr>
    <tr>
<td><label>Prefix</label></td>
<td><select style="width:70%;" class="txtField" name="name_prefix" required><option value="Dr." selected="">Dr.</option><option value="Mr.">Mr.</option><option value="Mrs.">Mrs.</option><option value="Miss">Miss</option></select></td>
</tr>
    <tr>
<td><label>Full name</label></td>
<td><input type="text" name="full_name" class="txtField" required></td>
</tr>
    <tr>
<td><label>Father name</label></td>
<td><input type="text" name="father_name" class="txtField" required></td>
</tr>
    <tr>
<td><label>Mobile</label></td>
<td><input type="text" name="mobile" class="txtField" required></td>
</tr>
<tr>
<td><label>Aadhar</label></td>
<td><input type="text" name="aadhar" class="txtField" required></td>
</tr>
<tr>
<td><label>Pan</label></td>
<td><input type="text" name="pan" class="txtField" required></td>
</tr>
<tr>
<td><label>Passport Number</label></td>
<td><input type="text" name="passport" class="txtField" required></td>
</tr>
<tr>
<td><label>Category</label></td>
<td><select
                        class="txtField" style="width:70%;" name="category">
                            <option value="General" selected>General</option>
                            <option value="OBC">OBC</option>
                            <option value="SC/ST">SC/ST</option>
                        </select></td>
</tr>
<tr>
<td><label>Official Email</label></td>
<td><input type="email" name="work_email" class="txtField" required></td>
</tr>
    <tr>
<td><label>University</label></td>
<td><input type="text" name="university" value="MMDU" class="txtField" required></td>
</tr>
    <tr>
<td><label>Institute</label></td>
<td><input type="text" name="institute" class="txtField" required></td>
</tr>
    <tr>
<td><label>Department</label></td>
<td><input type="text" name="department" class="txtField" required></td>
</tr>
    <tr>
<td><label>Designation</label></td>
<td><select class="txtField" style="width: 70%;" name="designation"><option value="Professor" selected>Professor</option><option value="Associate Professor">Associate Professor</option></select></td>
</tr>
    <tr>
<td><label>Date</label></td>
<td><input type="date" style="width: 70%;" name="date" class="txtField" required></td>
</tr>
    <tr>
<td><label>Highest Qualification</label></td>
<td>
    <select name="highest_qualification" class="txtField" style="width: 70%;">
                                            <option value="Bachelor's Degree" selected>Bachelor's Degree</option>
                                            <option value="Master's Degree">Master's Degree</option>
                                            <option value="Doctorate or higher">Docotrate or higher</option>
                                        </select></td>
</tr>
    <tr>
<td><label>Country</label></td>
<td><input type="text"  name="country" class="txtField" required></td>
</tr>
    <tr>
<td><label>State</label></td>
<td><input type="text"  name="state" class="txtField" required></td>
</tr>
    <tr>
<td><label>District</label></td>
<td><input type="text"  name="district" class="txtField" required></td>
</tr>
    <tr>
<td><label>Research Area</label></td>
<td><input type="text"  name="research_area" class="txtField" required></td>
</tr>
    <tr>
<td><label>Password</label></td>
<td><input type="password"  name="password" class="txtField" required></td>
</tr>
<tr>
<td colspan="2"><br><input style="margin-left:175px; width:100px;" type="submit" name="submit" value="Submit" class="btnSubmit"></td>
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
					<a href="about.html" target="_blank">About</a>

				
				</p>

				<p>Maharishi Markandeshwar (Deemed to be University) &copy; 2020</p>
			</div>

		</footer>
</body></html>