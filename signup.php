<?php

session_start();

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Sign Up</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700">
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
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="assets/css/Sidebar-Menu-1.css">
    <link rel="stylesheet" href="assets/css/Sidebar-Menu.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/User-Payment-Overview-Rows---Panel-Container.css">
    <link rel="stylesheet" href="assets/css/User-Tasks-and-User-Activity-Streams---List-Group-Component.css">
	<link rel="stylesheet" href="assets/css/size_and_footer_signup_info.css">
    <link rel="stylesheet" href="assets/css/check.css">
    <script src="assets\js\script1.js"></script> 
    <script src="assets\js\script2.js"></script>
    <script src="assets\js\institute.js"></script>
    <link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="assets\js\check.js"></script>
   
    

</head>

<body>
   
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-6" style="margin-left: -40%;"><img class="img-fluid" data-bs-hover-animate="pulse" src="assets/img/University-Logo.jpg" style="width: 280px;margin: 0px;margin-top: 18px;margin-left: 38px;"></div>
                <div class="col-md-6">
                    <h1 style="width: 463px;font-size: 75px;height: 484px;margin: -166px;margin-right: -135px;margin-left: 0px;margin-top: -171px;background-color: rgb(255,255,255);color: rgb(99,97,97);">The &nbsp;research &nbsp;centre</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="login-clean">
        <form id="login" runat="server" name="ww" action="insert_signup.php" enctype="multipart/form-data" class="d-inline-block" method="POST" style="position: relative;width: 756px;height:1000px;margin-right: 800px;padding-top: 0px;padding-right: 40px;padding-bottom: 40px;padding-left: 40px;min-width: 958px;margin-left: 17.5%;margin-top: -48px;">
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><i class="icon ion-android-contacts" style="color: rgb(248,59,59);"></i></div>
            <div class="form-group"><img src="blank.jpg" id= "image" class="img-fluid border rounded" name="bv" style=" width: 190px;height: 190px; position:relative;"><input class="form-control" type="text" style="margin: 207px;margin-top: -190px;margin-bottom: 7px;width: 246px;" placeholder="Employee ID" name="emp_id" required>
                <div class="form-check" style="width: 50%;margin-left: 228px;margin-top: -4px;"><input class="form-check-input" type="radio" id="formCheck-1" name="gender" value="m"><label class="form-check-label" for="formCheck-1">Male&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;</label>
            <input class="form-check-input" type="radio" id="formCheck-1" name="gender" value= "f"><label class="form-check-label" for="formCheck-1">Female</label></div>
            <div style="margin-right: 697px;height: 150px;width: 242px;padding-right: -39px;padding-left: -136px;margin-left: 0px;"
                >
                <div class="dashed_upload" style="width: 452px;height: 130px;"><div class="wrapper">
  <div class="drop">
  
    <div class="cont">
      <i class="fa fa-cloud-upload"></i> 
      
	  <button class="browse">
        Upload Image
      </button>
    </div>
    <output id="list"></output><input accept="image/*" id="files" name="images" type="file" />


	<script>
        function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#image').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$("#files").change(function(){
    readURL(this);
});
      </script>
  </div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script></div>
                
            </div><select class="custom-select" style="width: 81px; margin-top: 40 px;" name="name_prefix" required><option value="Dr." selected="">Dr.</option><option value="Mr.">Mr.</option><option value="Mrs.">Mrs.</option><option value="Miss">Miss</option></select>
            <input
                class="form-control" type="text" style="margin: 207px;margin-top: -41px;margin-bottom: 7px;width: 360px;margin-left: 93px;" placeholder="Full Name" name="fullname" required><input class="form-control" type="text" style="margin: 207px;margin-top: 23px;margin-bottom: 7px;width: 220px;margin-left: 0px;" placeholder="Father's Name" name="f_name" required=""><input id="mobile" class="form-control" type="text" style="margin: 207px;margin-top: -49px;margin-bottom: 7px;width: 216px;margin-left: 238px;"
                    placeholder="Mobile Number" name="mobile" required><input class="form-control" id= "aadhar" type="text" style="margin: 207px;margin-top: 23px;margin-bottom: 7px;width: 220px;margin-left: 0px;" placeholder="AADHAR Number" name="aadhar" required="">
                <input
                    class="form-control" type="text" style="margin: 207px;margin-top: -49px;margin-bottom: 7px;width: 216px;margin-left: 238px;" id="pan" placeholder="PAN Number" name="pan"><input class="form-control" type="text" style="margin: 0px;margin-top: 40px;margin-bottom: -75px;width: 220px;margin-left: 0px;" placeholder="Passport Number" name="passport"><label style="margin-left: 242px;margin-top: -16px;margin-bottom: 0px;font-size: 15px;"><strong>Category:</strong><br></label>
                    <select
                        class="form-control" style="width: 216px;margin: 0px;margin-top: 9px;margin-left: 241px;margin-bottom: 0px;" name="category" required="">
                        <optgroup label="Category">
                            <option value="General" selected="">General</option>
                            <option value="OBC">OBC</option>
                            <option value="SC/ST">SC/ST</option>
                        </optgroup>
                        </select><input class="form-control" type="email" style="width: 342px;margin-left: 537px;margin-top: -473px;" placeholder="Email ID" name="email" required=""><input class="form-control" type="email" style="width: 341px;margin-left: 538px;margin-top: 23px;"
                            placeholder="Official Email ID" name="work_email" required=""><label style="margin-left: 540px;margin-bottom: 0px;margin-top: 10px;padding-top: 0px;"><strong>University &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Institute:</strong></label>
                        <select
                            class="form-control" style="width: 150px;margin-left: 539px;margin-top: 4px;" name="university" value="uni" required="">
                            <optgroup label="University">
                                <option value="mmdu" selected="">MMDU (Maharishi Markandeshwar Deemed to be University)</option>
                            </optgroup>
                            </select><label style="margin-left: 540px;margin-bottom: 0px;margin-top: 8px;padding-top: 0px;"><strong>Department: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Designation:</strong></label><select id="slct1" name="institute" onchange="populate(this.id,'slct2')" class="form-control"
                                style="width: 150px;margin-left: 723px;margin-top: -73px;"  required=""><option value=""></option>
  <option value="Engineering">Engineering</option>
  <option value="Management">Management</option>
  <option value="Computer Applications">Computer Applications</option>
 <option value="Hotel Management">Hotel Management</option>
  <option value="Pharmacy">Pharmacy</option>
  <option value="Nursing(Co-Education)">Nursing(Co-Education)</option>
   <option value="Physiotherapy & Rehabilition">Physiotherapy & Rehabilition</option>
 <option value="Law">Law</option>
 <option value="Dental Sciences">Dental Sciences</option>
 <option value="Medical Sciences">Medical Sciences</option>

</select>
								
								
								
                            <select
                                id="slct2" name="department" class="form-control" style="width: 150px;margin-left: 539px;margin-top: 41px;" name="Department" value="de" required="">
                               
                                </select><select class="custom-select" style="width: 150px;margin-left: 723px;margin-top: -69px;" name="designation" required=""><optgroup label="Designation"><option value="Professor">Professor</option><option value="Associate Professor">Associate Professor</option></optgroup></select>
                                <label
                                    style="margin-left: 544px;margin-top: -62px;"><strong>Date of Joining :</strong></label><input class="form-control" type="date" style="width: 205px;margin-left: 669px;margin-top: -42px;margin-bottom: 13px;" name="date" value="date" required=""><label style="margin-left: 544px;margin-top: -50px;margin-bottom: -21px;font-size: 15px;"><strong>Highest Qualification: &nbsp; &nbsp; &nbsp; &nbsp;Country:&nbsp;</strong><br></label>
                                    <select name="highest_qualification"
                                        class="form-control" style="width: 150px;margin-left: 541px;margin-top: 10px;" required="">
                                        <optgroup label="Highest Qualification">
                                            <option value="Bachelor's Degree" selected="">Bachelor's Degree</option>
                                            <option value="Master's Degree">Master's Degree</option>
                                            <option value="Doctorate or higher">Docotrate or higher</option>
                                        </optgroup>
                                        </select>
            <select class="countries order-alpha" name="country" id="countryId" style="background: #f7f9fc;
  border: none;
  border-bottom: 1px solid #dfe7f1;
  border-radius: 0;
  box-shadow: none;
  outline: none;
  color: inherit;
  text-indent: 8px; width: 150px;height: 42px; margin-left: 723px;margin-top: -55px;margin-bottom: 13px; vertical-align: middle"><option value="">Select Country</option></select>
                                <label style="margin-left: 544px;margin-top: -34px;margin-bottom: -21px;font-size: 15px;"><strong>State: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; District(HomeTown):&nbsp;</strong><br></label>
            
            <select  name="state" class="states order-alpha" id="stateId" style="background: #f7f9fc;
  border: none;
  border-bottom: 1px solid #dfe7f1;
  border-radius: 0;
  box-shadow: none;
  outline: none;
  color: inherit;
  text-indent: 8px;
  height: 42px;width: 150px;margin-left: 541px;margin-top: 9px;">
                <option value="" >Select State</option></select>
            
            <select name="City" class="cities order-alpha" id="cityId" style="background: #f7f9fc;
  border: none;
  border-bottom: 1px solid #dfe7f1;
  border-radius: 0;
  box-shadow: none;
  outline: none;
  color: inherit;
  text-indent: 8px;
  height: 42px;width: 150px; margin-left: 25px; margin-bottom: 10px">
                                       
                                            <option value="">Select City</option>
                                           
                                        
                                        </select>
                                            <input
                                                class="form-control" type="text" style="width: 873px;margin-top: 8px;margin-left: 0px;margin-bottom: -78px;" placeholder="Research Area" name="research_area" required><input class="form-control" type="password" style="margin-top: 97px;width: 873px;margin-bottom: 22px;" id="pass" placeholder="Enter Password" name="password" required=""><input class="form-control" id="cpass" type="password" style="margin-top: 8px;width: 873px;margin-bottom: 8px;"
                                                    placeholder="Confirm Password" required=""  onkeyup="checkPass()" name="c_password"><button class="btn btn-primary btn-block" type="submit"
                                                    style="font-size: 19px;background-color: rgb(248,59,59);width: 874px;">Sign Up</button><a class="forgot" href="login.html" style="font-size: 17px;margin-top: 6px;">Already a member? <strong>Login</strong></a></div>
    </form>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-animation.js"></script>
    <script src="assets/js/File-Input---Beautiful-Input--Button-Approach-Jasny-Bootstrap.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script src="assets/js/Modal-commerce-popup-button.js"></script>
    <script src="assets/js/Sidebar-Menu.js"></script>
	
<footer class="footer-distributed">

			<div class="footer-right">

				<a href="#"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-linkedin"></i></a>
				<a href="#"><i class="fa fa-github"></i></a>

			</div>

			<div class="footer-left" style=" z-index:100;">

				<p class="footer-links">
				<a href="about.html" target="_blank">About</a>

				
				</p>

				<p>Maharishi Markandeshwar (Deemed to be University) &copy; 2020</p>
			</div>

		</footer>
    
  
    
		
</body>

</html>