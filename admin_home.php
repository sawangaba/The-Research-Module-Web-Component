<?php

session_start();

date_default_timezone_set('Asia/Kolkata');
$conn= new mysqli("localhost", "id13346941_localhost", "CoDQy{evk7o4q3V%", "id13346941_project_research") or die("ERROR:could not connect to the database!!!");
//$conn= new mysqli("localhost","root","","project_research") or die("ERROR:could not connect to the database!!!");

//$query=$conn->prepare("select * from document where work_email='{$_SESSION['work_email']}'");
//
//$query->execute();


$update= "select * from document where approved=0  ORDER BY upload_date DESC LIMIT 3";

if(empty($_SESSION['filter'])){

$workemail= "select * from document ORDER BY upload_date DESC";}

else
{
    $workemail= $_SESSION['filter'];
    $_SESSION['filter']="";
}


$query=mysqli_query($conn,$workemail);
$rowcount=mysqli_num_rows($query);

$query2=mysqli_query($conn,$update);
$rowcount2=mysqli_num_rows($query2);

$filterlist=$conn->query("SELECT * FROM filter WHERE f_id=(SELECT max(f_id) FROM filter WHERE filter_email='{$_SESSION['work_email']}' ) ");

$filter_result=$filterlist->fetch_array();

?>


<html>

<head>
    <meta http-equiv="refresh" content="600;url=logout.php" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard</title>
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
    input[type=checkbox] {
    
   width: 30px; /*Desired width*/
  height: 30px;
    
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
                        <li class="nav-item" role="presentation"><a class="nav-link active" href="#" style="color: black;">Home</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="crud.php" style="color: white;">CRUD Operations</a></li>
                        
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    
    <div class="total" style="margin-top: -50px;">
        <div class="container">
            <div class="row" style="max-height:700px;">
                <div class="col-md-4" style="margin-top:-15px;margin-right: -10px;margin-left: -400px;">
                     <div id="wrapper">
                        <form action="admin_filter.php" method="POST">
                        <div class="border rounded" id="sidebar-wrapper" style="width: 75%;background-color: #636161;margin-left: -251px;height: 838px;font-size: 19px; height:570px;">
                            <div class="col"><input class="form-control-plaintext border rounded" type="text" value="Filter Tools" readonly="" style="color: rgb(255,255,255);width: 284px;padding-left: 91px;margin-left: -16px;height: 39px;"></div>
                           
                            <div class="col" style="margin-top: 29px;font-size: 23px;">
                                <div class="form-check"><input name="approved" class="form-check-input" type="checkbox" id="formCheck-1" style="width: 22px;height: 22px;margin-top: 9px;" <?php echo ($filter_result['approved']== 1) ?  "checked" : "" ;  ?>><label class="form-check-label" for="formCheck-1" style="color: rgb(255,255,255);margin-left: 26px;">Approved</label></div>
                                <div
                                    class="form-check" style="height: 24px;"><input name="pending" class="form-check-input" type="checkbox" id="formCheck-2" style="width: 22px;height: 22px;margin-top: 8px;" <?php echo ($filter_result['pending']== 1) ?  "checked" : "" ;  ?> ><label class="form-check-label" for="formCheck-2" style="color: rgb(255,255,255);margin-left: 26px;">Pending</label></div><br>
                                <div
                                    class="form-check" style="height: 24px;"><input value="d"  name="sort" class="form-check-input" type="radio" id="formCheck-2" style="width: 22px;height: 22px;margin-top: 8px;" <?php echo ($filter_result['sort_date']== 1) ?  "checked" : "" ;  ?>><label class="form-check-label" for="formCheck-2" style="color: rgb(255,255,255);margin-left: 26px;">Sort by Date</label></div><br>
                                <div
                                    class="form-check" style="height: 24px;"><input value="n" class="form-check-input" type="radio" id="formCheck-2" style="width: 22px;height: 22px;margin-top: 8px;" name="sort" <?php echo ($filter_result['sort_name']== 1) ?  "checked" : "" ;  ?>><label class="form-check-label" for="formCheck-2" style="color: rgb(255,255,255);margin-left: 26px;">Sort by Name</label></div><br><br>
                           
                </div>
                <div class="col"><input class="btn btn-light switchhover1" type="submit" style="margin-top: 30px;margin-left: 45px;width: 150px;"/></div>
            </div>
                        </form>
        </div>
    </div>
    <div class="col-md-4" style="margin-left: 202px;width: 100%;margin-right: 17px;padding-left: 0px;padding-right: -51px;font-size: 16px; position: relative;">
        <div class="card" style="width: 1199px;margin-left: -271px;height: 570px;background-color: #FCF6F5; position: relative ;">
            <div class="card-header" style="padding-right: 54px;width: 1197px;margin-left: 0px;">
                <h3><span class="fa-stack"><i class="fa fa-circle fa-stack-2x text-muted"></i><i class="fa fa-graduation-cap fa-stack-1x fa-inverse"></i></span>&nbsp;Document Repository</h3>
            </div>
            <div class="card-body" style="width: 100%;overflow-y: scroll;margin-left: 0px;">
                <form method="POST" action="approve.php">
                <div class="row" style="width: 100%">
                    <?php for($i=1;$i<=$rowcount;$i++){ 
                    $row= mysqli_fetch_array($query);?>
                    <div class="col-md-5">              
                        <div class="media">
                            <div><img class="rounded-circle mr-3" src="assets/img/doc-27-512.png" width="50" height="50"></div>
                            <div class="media-body">
                                <h4 style="width: 400px;"><a href="#"><?php echo $row["full_jName"]; ?></a></h4>
                                <p class="text-muted" style="width: 800px;">Uploaded on <?php echo $row["upload_date"]; ?>, Author: <?php echo $row["author1"]; ?>, Publisher : <?php echo $row["publisher"]; ?>, Publication type: <?php echo $row["publication_Type"]; ?>, Publication status: <?php echo $row["publication_Status"]; ?> <br>DOI: <?php echo $row["DOI"]; ?>, EISSN: <?php echo $row["EISSN"]; ?>, PISSN: <?php echo $row["PISSN"]; ?><br>Link: <a target="_blank" href="<?php echo $row["web_Link"]; ?>"><?php echo $row["web_Link"]; ?></a></p>
                            </div>
                        </div>
                    </div>
                   
                    <div class="col-md-3 text-right" style="margin-right: 24px; marging-top: 10px ;margin-left: 199px;">
                        
                        <?php 
    $v=$row['DOI'];
    if($row['approved']== 0) {
                        
     echo "<input name='doi[]' type='checkbox' value='$v' style='margin-top:10px;'/>";
                    }
                        else{
                           echo "<span class='badge badge-primary' style='margin-top: 10px ;margin-right: 0px;margin-left: 103px;background-color: green;'>Approved</span>";  
                            
                        }
                        
                        ?>
                        <br></div>
                         
                      <?php } ?> 
                    
                </div>
                    <input type="submit" value="Approve Documents" style="margin-left: 45% ;"/>
                    </form>
            </div>
        </div>
    </div>
    <div class="col-md-4" style="padding-left: 700px; position:absolute;">
        <ul class="list-group" style="margin-right: 0px;margin-left: 418px;width: 411px; position: absolute;">
            <li class="list-group-item">
                <div class="media">
                    <div></div>
                    <div class="media-body">
                        <?php for($i=1;$i<=$rowcount2;$i++){ 
                                $row2= mysqli_fetch_array($query2);
                            $name= "select * from sign_up where work_email='{$row2['work_email']}'";
                            $query3=mysqli_query($conn,$name);
                            $rowcount3=mysqli_num_rows($query3);
                            $row3= mysqli_fetch_array($query3);
                            
                            ?>
                        <div class="media" style="overflow:visible;">
                            
                            <img class="mr-3" style="width: 25px; height:25px;" src="<?php echo $row3["img_dir"]; ?>">
                            <div class="media-body" style="overflow-x:visible;">
                                  
                                <div class="row" style="width: 406px;">
                                    <div class="col-10" style="width: 596px;">
                                        <h5><a href="#"><strong>
                                            
                                            
                                            New document for approval!
</strong></a></h5>
                                        
                                        
                                        <p><?php echo $row3["emp_id"]; ?> has uploaded a document<a href="#"><strong> <?php echo $row2["full_jName"]; ?></strong></a> for approval<br>
<small class="text-muted"><?php echo $row2["upload_date"]; ?> </small></p>
                                    </div>
                                </div>
                                  
                            </div>
                            
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </li>
			<br><br><br>
			<a href="admin_dy_re.php" class="animated-button1">
			  <span></span>
			  <span></span>
			  <span></span>
			  <span></span>
			  Generate Report
			</a>
            <a href="logout.php" class="animated-button1">
			  <span></span>
			  <span></span>
			  <span></span>
			  <span></span>
			  Log out
			</a>
        </ul>
		
		
    </div>
    </div>
    </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-animation.js"></script>
    <script src="assets/js/File-Input---Beautiful-Input--Button-Approach-Jasny-Bootstrap.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script src="assets/js/Modal-commerce-popup-button.js"></script>
    <script src="assets/js/Sidebar-Menu.js"></script>
	<br><br><br><br><br><br>
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
		

<script>
function openNav() {
  document.getElementById("window").style.width = "100%";
  document.getElementById("window").style.height = "100%";
  

}

function closeNav() {
  document.getElementById("window").style.width = "0%";

}
</script>
	
</body>

</html>