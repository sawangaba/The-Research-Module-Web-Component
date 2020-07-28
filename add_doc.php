<?php

session_start();

date_default_timezone_set('Asia/Kolkata');
$author_name = $_POST['author1'];

$manuscript = $_POST['manuscript'];
$full_JN = $_POST['full_JN'];
$publisher = $_POST['publisher'];
$p_type = $_POST['p_type'];
$p_status = $_POST['p_status'];
$year =$_POST['year'];		
$month = $_POST['month'];
$E_ISSN = $_POST['E_ISSN'];
$P_ISSN = $_POST['P_ISSN'];
$web_link = $_POST['web_link'];
$doi = $_POST['doi'];
$author_mail= $_SESSION['work_email'];
$timestamp = date("Y-m-d H:i:s");
$approved=0;
$approved_date= "Pending";


if(empty($_POST['author2'])){
    $author_name2 = "none";
}
else{
    
   $author_name2 = $_POST['author2'];  
}


if(empty($_POST['author3'])){
    $author_name3 = "none";
}
else{
    
   $author_name3 = $_POST['author2'];  
}

if(empty($_POST['author4'])){
    $author_name4 = "none";
}
else{
    
   $author_name4 = $_POST['author2'];  
}


if(empty($_POST['author5'])){
    $author_name5 = "none";
}
else{
    
   $author_name5 = $_POST['author2'];  
}


// Idexes for the Journals
$MMDU_Affiliation = 1;
if(empty($_POST['MMDU_Affiliation'])) $MMDU_Affiliation = 0;

$MMDU_sw = 1;
if(empty($_POST['MMDU_sw'])) $MMDU_sw = 0;

$AreYou_FA = 1;
if(empty($_POST['AreYou_FA'])) $AreYou_FA = 0;

$C_Author = 1;
if(empty($_POST['C_Author'])) $C_Author = 0;

$Guide_toC = 1;
if(empty($_POST['Guide_toC'])) $Guide_toC = 0;

$PubMed = 1;
if(empty($_POST['PubMed'])) $PubMed = 0;

$IndexCopernicus = 1;
if(empty($_POST['IndexCopernicus'])) $IndexCopernicus = 0;

$Scopus_Indexed =1;
if(empty($_POST['Scopus_Indexed'])) $Scopus_Indexed = 0;

$SCI_SCIE_SSCI_Indexed = 1;
if(empty($_POST['SCI_SCIE_SSCI_Indexed'])) $SCI_SCIE_SSCI_Indexed = 0;

$GS_Indexed = 1;
if(empty($_POST['GS_Indexed'])) $GS_Indexed = 0;

$UGC_Journal = 1;
if(empty($_POST['UGC_Journal'])) $UGC_Journal = 0;


$arr=[];


if(!empty($_POST['IndexCopernicus'])) array_push($arr, "Index_Copernicus");


if(!empty($_POST['Scopus_Indexed'])) array_push($arr, "Scopus_Indexed");


if(!empty($_POST['SCI_SCIE_SSCI_Indexed'])) array_push($arr, "SCI_SCIE_SSCI_Indexed");


if(!empty($_POST['GS_Indexed'])) array_push($arr, "Google_Scholar_Indexed");

$indexes= implode(" ", $arr);




$servername = "localhost";
$username = "root";
$password = "";
$dbsn = "project_research";







$target_dir = "doc_image/";
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
    
     echo"
        <script>
        alert('Sorry, your file was not uploaded.');
        
        </script>
        
        ";
}
    
 //if everything is ok, try to upload file

    else {
  if (move_uploaded_file($_FILES["images"]["tmp_name"], $target_file)) {
       
//      echo "1";
   
  } 
        
    
    else {
       echo"
        <script>
        alert('Sorry, File is not uploaded right now');
       
        </script>
        
        ";
   
  }
    }








try{
// Create connection
$conn = mysqli_connect("localhost", "id13346941_localhost", "CoDQy{evk7o4q3V%", "id13346941_project_research");
//$conn = new mysqli("localhost", "root", "", "project_research");
    


$sql = "INSERT INTO document VALUES ('".$author_mail."','".$author_name."','".$author_name2."','".$author_name3."','".$author_name4."','".$author_name5."','".$target_file."','".$manuscript."','".$full_JN."','".$publisher."','".$p_type."','".$p_status."',".$year.",'".$month."','".$E_ISSN."','".$P_ISSN."','".$web_link."','".$doi."',".$AreYou_FA.",".$MMDU_Affiliation.",".$MMDU_sw.",".$C_Author.",".$Guide_toC.",".$PubMed.",".$IndexCopernicus.",".$Scopus_Indexed.",".$SCI_SCIE_SSCI_Indexed.",".$GS_Indexed.",".$UGC_Journal.",'".$indexes."',".$approved.",'".$timestamp."','".$approved_date."')";

$conn->query($sql);


$sql = "INSERT INTO doc_indexes VALUES('".$doi."',".$MMDU_Affiliation.",".$MMDU_sw.",".$C_Author.",".$Guide_toC.",".$PubMed.",".$IndexCopernicus.",".$Scopus_Indexed.",".$SCI_SCIE_SSCI_Indexed.",".$GS_Indexed.",".$UGC_Journal.")";

$conn->query($sql);
    
echo"<script>

alert('Document Uploaded! Documents with same DOI will be deleted!');
window.open('add_document.html','_top');

</script>;";
    
}


catch(Exception $e){
    
     echo "Error! Wrong Document Details".$e->getMessage();
}


?>