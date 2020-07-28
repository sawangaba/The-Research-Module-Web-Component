<?php

session_start();

$emp_id = $_POST['emp_id'];
$gender = $_POST['gender'];
$prefix = $_POST['name_prefix'];
$full_name = $_POST['fullname'];
$father_name= $_POST['f_name'];
$mobile = $_POST['mobile'];
$aadhar = $_POST['aadhar'];
$pan = $_POST['pan'];
$passport = $_POST['passport'];
$category = $_POST['category'];
$email = $_POST['email'];
$work_email= $_SESSION['work'];
$university = $_POST['university'];
$institute = $_POST['institute'];
$department = $_POST['department'];
$designation = $_POST['designation'];
$date = $_POST['date'];
$highest_qualification = $_POST['highest_qualification'];
$research_area = $_POST['research_area'];


$host="localhost";
$dbusername="id13346941_localhost";
$dbpassword="CoDQy{evk7o4q3V%";
$dbname="id13346941_project_research";


// $host="localhost";
// $dbusername="root";
// $dbpassword="";
// $dbname="project_research";


    
$target_dir = "image/";
$target_file = $target_dir.basename($_FILES["images"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image


if(isset($_POST["submit"])) {
    
   
    
  $check = getimagesize($_FILES["images"]["tmp_name"]);
    
  if($check !== false) {
      
    $uploadOk = 1;
  } else {
      
       echo"
        <script>
        alert('File is not an image.');
        
        </script>
        
        ";
 
    $uploadOk = 0;
  }
}

//Check if file already exists
    
//if (file_exists($target_file)) {
//    
//     echo"
//        <script>
//        alert('Sorry, file already exists.');
//        window.open('signup.php','_top');
//        </script>
//        
//        ";
//
//  $uploadOk = 0;
//}

//// Check file size
//if ($_FILES["images"]["size"] > 500000) {
//  echo "Sorry, your file is too large.";
//  $uploadOk = 0;
//}

// Allow certain file formats


// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    
     $target_file= $_POST['temp'];
}
    
 //if everything is ok, try to upload file

    else {
  if (move_uploaded_file($_FILES["images"]["tmp_name"], $target_file)) {
       echo"
        <script>
        alert('The file ". basename( $_FILES["images"]["name"]). " has been uploaded.');
        </script>
        
        ";
//      echo "1";
   
  } 
        
    
    else {
      $target_file= $_POST['temp'];
  }
    }

//    echo "1";
try {
//    echo "1";
    
  
    
    
  $conn = new PDO("mysql:3306=$host;dbname=$dbname", $dbusername, $dbpassword);
    
   
    
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
//   echo "1"; 

     
  $sql = $conn->prepare("UPDATE sign_up SET emp_id= :emp_id,img_dir= :img_dir, gender= :gender, prefix= :prefix, full_name= :full_name, father_name= :father_name, mobile=:mobile, aadhar=:aadhar, pan= :pan, passport= :passport, category= :category, email= :email, university= :university, institute= :institute, department= :department, designation= :designation, date= :date, highest_qualification= :highest_qualification, research_area=:research_area WHERE work_email= :work_email;
  ");
    
    
$sql->bindParam(":emp_id", $emp_id);
$sql->bindParam(":img_dir", $target_file);
$sql->bindParam(":gender", $gender);
$sql->bindParam(":prefix", $prefix);
$sql->bindParam(":full_name", $full_name);
$sql->bindParam(":father_name", $father_name);
$sql->bindParam(":mobile", $mobile);
$sql->bindParam(":aadhar",$aadhar);
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
$sql->bindParam(":research_area", $research_area);


//echo "2";
//    echo $target_file . " " . ;

$sql->execute();

echo"
        <script>
       
        window.open('edit_info.php','_top');
        </script>";  

    
//    echo "3";
 
    

  
    
 
    
 
    
} catch(Exception $e) {
    
  echo "Error: " . $e->getMessage();
    
 header("Location: edit_info.php");
   
   
}

 /*$INSERT = "INSERT INTO sign_up(emp_id, gender, image_dir, prefix, full_name, father_name, mobile, aadhar, pan, passport, category, email, work_email, university, institute, department, designation, date, highest_qualification,country, state, district, research_area, password) VALUES('$emp_id', '$gender', '$image_dir', '$prefix', '$full_name', '$father_name', $mobile, $aadhar, '$pan', '$passport', '$category', '$email', '$work_email', '$university', '$institute', '$department', '$designation', '$date', '$highest_qualification' , '$country', '$state', '$district', '$research_area', '$password'*/


?>
    