<?php

session_start();

$connect= new mysqli("localhost", "id13346941_localhost", "CoDQy{evk7o4q3V%", "id13346941_project_research") or die("ERROR:could not connect to the database!!!");
//$connect= new mysqli("localhost","root","","project_research") or die("ERROR:could not connect to the database!!!");
//select users data
$query=$connect->query("select * from sign_up where work_email='{$_SESSION['work_email']}'");

//fetch data
$result=$query->fetch_array();

$_SESSION['work']=$result['work_email'];

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Profile</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/3D-animated-text-on-hover-1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="assets/css/User-Tasks-and-User-Activity-Streams---List-Group-Component.css">
	<script src="assets\js\script1.js"></script> 
	<script src="assets\js\script2.js"></script>
	<link rel="stylesheet" href="assets/css/size_and_footer_signup_info.css">
	<script src="assets\js\institute.js"></script>
      <script>
                    
                    
                function openDialog() {
                    document.getElementById('files').click();
                }
                     function openDialog2() {
                       
                         
                         document.getElementById("formCheck-1").disabled = false;
                         document.getElementById("formCheck-2").disabled = false;
                         document.getElementById("emp_id").disabled = false;
                         document.getElementById("files").disabled = false;
                         document.getElementById("prefix").disabled = false;
                         document.getElementById("full_name").disabled = false;
                         document.getElementById("father_name").disabled = false;
                         document.getElementById("mobile").disabled = false;
                         document.getElementById("aadhar").disabled = false;
                         document.getElementById("pan").disabled = false;
                         document.getElementById("passport").disabled = false;
                         document.getElementById("category").disabled = false;
                         document.getElementById("email").disabled = false;
                         document.getElementById("university").disabled = false;
                         document.getElementById("slct1").disabled = false;
                         document.getElementById("slct2").disabled = false;
                         document.getElementById("research_area").disabled = false;
                         document.getElementById("highest_qualification").disabled = false;
                         document.getElementById("designation").disabled = false;
                         document.getElementById("date").disabled = false;
                         document.getElementById("save").disabled = false;
                         document.getElementById("edit").disabled = true;
                         document.getElementById("save_label").style.display = 'inline';
                         $("#edit_label").hide();
                        
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                        
                }
                    
                    
                </script>
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
    <div>
        <nav class="navbar navbar-light navbar-expand-md navigation-clean" style="background-color: #fc0000; z-index:100;">
            <div class="container"><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse text-left" id="navcol-1" style="background-color: #fc0000;color: rgb(255,255,255);width: 1173px;margin-left: -421px;margin-right: -398px;padding-left: 9px;padding-right: 4px;font-size: 20px;">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item" role="presentation"><a  class="nav-link" href="home.php" style="color: rgb(255,255,255);">Home</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="feedback.php" style="color: rgb(255,255,255);">Feedback</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="faq.php" style="color: rgb(255,255,255)">FAQ</a></li>
                         <li class="dropdown nav-item"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#" style="color: black;">Profile&nbsp; &nbsp; &nbsp;</a>
                            <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation"  href="profile.php">Edit Info</a><a class="dropdown-item" role="presentation" href="forgot_password.html">Change Password</a></div>
                        </li>
                         <li class="dropdown nav-item"><a class="nav-link" aria-expanded="false" href="add_document.html" style="color: rgb(255,255,255);">Add Document&nbsp;</a>
                           
                        </li>
                        
                        
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="login-clean">
        <form class="d-inline-block" action="edit_info_save.php" enctype="multipart/form-data" method="POST" style="width: 756px;height: 970px;margin-right: 800px;padding-top: 0px;padding-right: 40px;padding-bottom: 40px;padding-left: 40px;min-width: 958px;margin-left: 15%;margin-top: -48px;position: relative;">
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><i class="icon ion-android-contacts" style="color: rgb(248,59,59);"></i><label style="font-size: 87px;">&nbsp; Profile</label></div>
            <div class="form-group" style="margin-top: 12px;"><img id="image" src="<?php echo $result['img_dir']; ?>" class="img-fluid border rounded" style="width: 190px;height: 190px;margin-bottom: -167px;"><label style="margin-top: -55px;margin-bottom: 35px;margin-right: -33px;margin-left: 37px;"><strong>Employee ID &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Email ID</strong></label>
                <input
                    class="form-control"  disabled type="text" style="margin: 207px;margin-top: -29px;margin-bottom: 7px;width: 246px;"value="<?php echo $result['emp_id']; ?>" placeholder="Employee ID" id="emp_id" name="emp_id" required="">
                    <div class="form-check" style="width: 50%;margin-left: 228px;margin-top: -4px;"><input  disabled class="form-check-input" type="radio" value="m" id="formCheck-1" name="gender" <?php echo ($result['gender']== 'm') ?  "checked" : "" ;  ?>><label class="form-check-label" for="formCheck-1">Male&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;</label>
                    <input class="form-check-input" value="f" type="radio" id="formCheck-2" disabled name="gender"  <?php echo ($result['gender']== 'f') ?  "checked" : "" ;  ?>><label class="form-check-label" for="formCheck-1">Female</label></div><button id= "buttonid" onclick="openDialog()" class="btn btn-primary"  type="button" style="margin-left: 258px;margin-top: -141px;margin-right: -382px;margin-bottom: -5px;" >change image</button>
                        <input disabled id="files" name="images" type="file" accept="image/*" onchange="readURL(this)" hidden/>
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
                
                
                
                
                <label style="margin-top: -29px;margin-bottom: 31px;margin-right: 3px;margin-left: 112px;"><strong>Full Name</strong></label><select disabled class="custom-select" style="width: 81px;margin-top: 135px;margin-left: -189px;margin-bottom: 56px;"
                      id="prefix"  name="name_prefix" required="">
               
                    <option value="Dr." <?php if ($result['prefix'] == "Dr." ) echo 'selected' ; ?>>Dr.</option>
                    <option value="Mr." <?php if ($result['prefix'] == "Mr." ) echo 'selected' ; ?>>Mr.</option>
                    <option value="Mrs." <?php if ($result['prefix'] == "Mrs." ) echo 'selected' ; ?>>Mrs.</option>
                    <option value="Miss" <?php if ($result['prefix'] == "Miss" ) echo 'selected' ; ?>>Miss</option>
               </select>
                <input class="form-control" id="full_name"
                        type="text" style="margin: 207px;margin-top: -98px;margin-bottom: 14px;width: 360px;margin-left: 93px;position: relative;" disabled value="<?php echo $result['full_name'];?>" placeholder="Full Name" name="fullname" required=""><label style="margin-top: -33px;margin-bottom: -2px;margin-right: 0px;margin-left: 19px;"><strong>Father's Name &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Mobile Number</strong></label>
                    <input disabled id="father_name"
                        class="form-control" type="text" style="margin: 207px;margin-top: 12px;margin-bottom: 7px;width: 220px;margin-left: 0px;" value="<?php echo $result['father_name'];?>"placeholder="Father's Name" name="f_name" required=""><input id="mobile" class="form-control" type="text" style="margin: 207px;margin-top: -49px;margin-bottom: 12px;width: 216px;margin-left: 238px;" value="<?php echo $result['mobile'];?>" placeholder="Mobile Number" name="mobile" disabled required=""><label style="margin-top: -33px;margin-bottom: -34px;margin-right: 0px;margin-left: 17px;"><strong>&nbsp;AADHAR Number &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; PAN Number</strong><br></label>
                        <input disabled id="aadhar"
                            class="form-control" type="text" style="margin: 207px;margin-top: 14px;margin-bottom: 7px;width: 220px;margin-left: 0px;" value="<?php echo $result['aadhar'];?>" placeholder="AADHAR Number" name="aadhar" required=""><input id="pan" disabled class="form-control" type="text" style="margin: 207px;margin-top: -49px;margin-bottom: 52px;width: 216px;margin-left: 238px;" value="<?php echo $result['pan'];?>"placeholder="PAN Number" name="pan"><input id="passport" disabled class="form-control" type="text" style="margin: 0px;margin-top: 44px;margin-bottom: -85px;width: 220px;margin-left: 0px;"
                                placeholder="Passport Number" value="<?php echo $result['passport']; ?>" name="passport"><label style="margin-left: 21px;margin-top: -26px;margin-bottom: 1px;font-size: 15px;"><strong>Passport Number &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Category</strong><br></label>
                            <select disabled id="category"
                                class="form-control" style="width: 216px;margin: 0px;margin-top: 17px;margin-left: 241px;margin-bottom: 0px;" name="category" required="">
                                
                                    <option value="General" <?php if ($result['category'] == "General" ) echo 'selected' ; ?>>General</option>
                                    <option value="OBC" <?php if ($result['category'] == "OBC" ) echo 'selected' ; ?>>OBC</option>
                                    <option value="SC/ST" <?php if ($result['category'] == "SC/ST" ) echo 'selected' ; ?>>SC/ST</option>
                              
                                </select><input id="email" disabled class="form-control" type="email" style="width: 342px;margin-left: 537px;margin-top: -518px;" value=" <?php echo $result['email']; ?>" placeholder="Email ID" name="email" required=""><label style="margin-left: 540px;margin-bottom: 0px;margin-top: 10px;padding-top: 0px;"><strong>Offiial Email ID</strong><br></label>
                                <input disabled id="work_email"
                                    class="form-control" type="email" style="width: 341px;margin-left: 538px;margin-top: 11px;" placeholder="Official Email ID" name="work_email" value=" <?php echo $result['work_email']; ?>" required=""><label style="margin-left: 540px;margin-bottom: 0px;margin-top: 10px;padding-top: 0px;"><strong>University &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Institute:</strong></label>
                                    <select disabled id="university"
                                        class="form-control" style="width: 150px;margin-left: 539px;margin-top: 4px;" name="university" value="uni" required="" disabled="">
                                       
                                            <option value="mmdu" selected>MMDU (Maharishi Markandeshwar Deemed to be University)</option>
                                        
                                        </select><label style="margin-left: 540px;margin-bottom: 0px;margin-top: 8px;padding-top: 0px;"><strong>Department: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Designation:</strong></label>
                                       <select disabled 
                                               id="slct1" name="institute" onchange="populate(this.id,'slct2')" onload="populate(this.id,'slct2')" class="form-control"
                                style="width: 150px;margin-left: 723px;margin-top: -73px;" value="co" required="">
                                           <option value=""></option>
  <option value="Engineering" <?php if ($result['institute'] == "Engineering" ) echo 'selected' ; ?>>Engineering</option>
  <option value="Management" <?php if ($result['institute'] == "Management" ) echo 'selected' ; ?>>Management</option>
  <option value="Computer Applications" <?php if ($result['institute'] == "Computer Applications" ) echo 'selected' ; ?>>Computer Applications</option>
 <option value="Hotel Management" <?php if ($result['institute'] == "Hotel Management" ) echo 'selected' ; ?> >Hotel Management</option>
  <option value="Pharmacy" <?php if ($result['institute'] == "Pharmacy" ) echo 'selected' ; ?>>Pharmacy</option>
  <option value="Nursing(Co-Education)" <?php if ($result['institute'] == "Nursing(Co-Education)" ) echo 'selected' ; ?>>Nursing(Co-Education)</option>
   <option value="Physiotherapy & Rehabilition" <?php if ($result['institute'] == "Physiotherapy & Rehabilition" ) echo 'selected' ; ?> >Physiotherapy & Rehabilition</option>
 <option value="Law" <?php if ($result['institute'] == "Law" ) echo 'selected' ; ?>>Law</option>
 <option value="Dental Sciences" <?php if ($result['institute'] == "Dental Sciences" ) echo 'selected' ; ?>>Dental Sciences</option>
 <option value="Medical Sciences" <?php if ($result['institute'] == "Medical Sciences" ) echo 'selected' ; ?>>Medical Sciences</option>

</select>

<select 
                                id="slct2" name="department" class="form-control" style="width: 150px;margin-left: 539px;margin-top: 41px;" name="Department" value="de" required="">
    <option value="<?php echo $result['department'];?>"><?php echo $result['department'];?></option>
                                </select>
                                            <select disabled id="designation"
                                                class="custom-select" style="width: 150px;margin-left: 723px;margin-top: -69px;" name="designation" required="">
                                               
                                                    <option value="Professor" <?php if ($result['designation'] == "Professor" ) echo 'selected' ; ?>>Professor</option>
                                                    <option value="Associate Professor" <?php if ($result['designation'] == "Associate Professor" ) echo 'selected' ; ?>>Associate Professor</option>
                                                    
                                                
                                                </select><label style="margin-left: 544px;margin-top: -62px;"><strong>Date of Joining :</strong></label><input id="date" disabled class="form-control" type="date" value="<?php echo $result['date'];?>" style="width: 205px;margin-left: 669px;margin-top: -42px;margin-bottom: 13px;"
                                                    name="date" required=""><label style="margin-left: 544px;margin-top: -50px;margin-bottom: -21px;font-size: 15px;"><strong>Highest Qualification: &nbsp; &nbsp; &nbsp; &nbsp;Country:&nbsp;</strong><br></label>
                                                <select disabled id="highest_qualification" name="highest_qualification"
                                                    class="form-control" style="width: 150px;margin-left: 541px;margin-top: 10px;" required="">
                                                    
                                                        <option value="Bachelor's Degree" <?php if ($result['highest_qualification'] == "Bachelor's Degree" ) echo 'selected' ; ?>>Bachelor's Degree</option>
                                                        <option value="Master's Degree" <?php if ($result['highest_qualification'] == "Master's Degree" ) echo 'selected' ; ?>>Master's Degree</option>
                                                        <option value="Doctorate or higher" <?php if ($result['highest_qualification'] == "Docotrate or higher" ) echo 'selected' ; ?>>Docotrate or higher</option>
                                                    
                                                    
                                                    </select> 
               
                
     
                <select  disabled class="countries order-alpha2" name="country2" id="countryId2" style="background: #f7f9fc;
  border: none;
  border-bottom: 1px solid #dfe7f1;
  border-radius: 0;
  box-shadow: none;
  outline: none;
  color: inherit;
  text-indent: 8px; width: 150px;height: 42px; margin-left: 723px;margin-top: -55px;margin-bottom: 13px; vertical-align: middle"><option><?php echo $result['country'];?></option></select>
               
                                <label style="margin-left: 544px;margin-top: -34px;margin-bottom: -21px;font-size: 15px;">
                                    <strong>State: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; District(HomeTown):&nbsp;</strong><br></label>
            
             <select disabled  name="state2" class="states order-alpha" id="stateId2"  style="background: #f7f9fc;
  border: none;
  border-bottom: 1px solid #dfe7f1;
  border-radius: 0;
  box-shadow: none;
  outline: none;
  color: inherit;
  text-indent: 8px;
  height: 42px;width: 150px;margin-left: 541px;margin-top: 9px;">
                <option ><?php echo $result['state'];?></option></select>
                
            
            <select name="City2" disabled class="cities order-alpha" id="cityId2" style="background: #f7f9fc;
  border: none;
  border-bottom: 1px solid #dfe7f1;
  border-radius: 0;
  box-shadow: none;
  outline: none;
  color: inherit;
  text-indent: 8px;
  height: 42px;width: 150px; margin-left: 25px; margin-bottom: 10px">
                                       
                                            <option value=""><?php echo $result['district'];?></option>
                                           
                                        
                                        </select>
                
             
                                        
                                        </select><label style="margin-left: 20px;margin-top: -34px;margin-bottom: -21px;font-size: 15px;"><strong>Research Area</strong><br></label>
            <input disabled class="form-control" type="text" id="research_area" style="width: 873px;margin-top: 8px;margin-left: 0px;margin-bottom: -78px;" value="<?php echo $result['research_area']; ?>"placeholder="Research Area" name="research_area" required="">
            <button class="btn btn-primary btn-block" id="edit" type="button" onclick="openDialog2()" style="font-size: 19px;background-color: rgb(248,59,59);width: 142px;margin-top: 119px;margin-right: 0px;margin-left: 218px;">Edit Profile</button>
            <button class="btn btn-primary" id="save" type="submit" style="font-size: 19px;background-color: rgb(52,174,42);width: 142px;margin-top: -78px;margin-right: 0px;margin-left: 497px;"disabled="">Save Profile</button><br>
            
            <lablel id="edit_label" style ="color: red;">Click on Edit Button to Edit the fields <span style='font-size:100px;'>&#8679;</span></lablel><lablel id="save_label" style ="color: green; padding-left:500px; display: none">&emsp; &emsp;<span style='font-size:100px;'>&#8679;</span>Click on Save Button to save the fields </lablel>
            
            </div>
            <input type=text name="temp" hidden value="<?php echo $result['img_dir']; ?>">
          
        
        </form>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-animation.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
	<footer class="footer-distributed">

			<div class="footer-right">

				<a href="#"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-linkedin"></i></a>
				<a href="#"><i class="fa fa-github"></i></a>

			</div>

			<div class="footer-left">

				<p class="footer-links">
					<a class="link-1" href="home.php">Home</a>

					<a href="feedback.php">Feedback</a>

					<a href="faq.php">FAQ</a>
					<a href="about.html" target="_blank">About</a>

					
				</p>

				<p>Maharishi Markandeshwar (Deemed to be University) &copy; 2020</p>
			</div>

		</footer>
</body>

</html>