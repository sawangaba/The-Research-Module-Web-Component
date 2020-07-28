<?php

session_start();

$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="project_research";
$select=$_POST["select"];
$user_id=$_POST["users"];
 $conn = new mysqli("localhost", "id13346941_localhost", "CoDQy{evk7o4q3V%", "id13346941_project_research");
   // $conn = new mysqli("localhost", "root", "", $dbname);

        

if($_POST['users']=="All users"){ $st = " "; }
else{
    $rr= "select work_email from sign_up where emp_id= '$user_id'";
        $stmt = mysqli_query($conn, $rr);
        $row3 = mysqli_fetch_assoc($stmt);
    $email= $row3["work_email"];
    
    $st= "where work_email='$email'";
}


 // set the PDO error mode to exception
$sql= "select * from document $st";

$query=$conn->query("select * from sign_up $st");

//fetch data
$result2=$query->fetch_array();


$result = mysqli_query($conn,$sql);

$str_arr = explode (",", $select);  

?>

<html>
<head>
    <link rel="stylesheet" type="text/css" href="assets/css/report.css" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>DYNAMIC REPORT GENERATION</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
	 <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
	<link rel="stylesheet" href="assets/css/size_and_footer.css">
	<link rel="stylesheet" href="assets/css/3D-animated-text-on-hover-1.css">
	<link rel="stylesheet" href="assets/css/listbox.css">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <style>
    table {
    table-layout: fixed;
    width: 100%;
}

table tr {
    word-wrap:break-word;         /* All browsers since IE 5.5+ */
    
}
    
    </style>
    
<script src="assets/js/saveAsExcel.js"></script>
<script src="assets/js/tableHTMLExport.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
    <script type="text/javascript">
        function Export() {
            html2canvas(document.getElementById('print'), {
                onrendered: function (canvas) {
                    var data = canvas.toDataURL();
                    var docDefinition = {
                        content: [{
                            image: data,
                            width: 500
                            
                        }]
                    };
                    pdfMake.createPdf(docDefinition).download("report.pdf");
                }
            });
        }
    </script>
     

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
                        <li class="nav-item" role="presentation"><a  class="nav-link" href="admin_home.php" style="color: rgb(255,255,255);">Home</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="crud.php" style="color: white;">CRUD Operations</a></li>
                        
                        
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div id="print" style=" align-content:center;">
        <br>
        <h2 style="text-align:center; color: rgb(99,97,97);background-color: rgb(255,255,25:);"><strong>Report of documents uploded by : <?php echo $user_id?></strong></h2><br>
       
     <table style="padding-right:10px;text-align: center;margin: 0 auto;table-layout: fixed;"border="1" cellpadding="5" cellspacing="1" width="100" class="tblListForm" id="table2excel">
<tr class="listheader">
    <?php
    foreach($str_arr as $headers){
  echo "<th >$headers</th>";
}
   
    ?>
</tr> 
         
         <?php
         
while($row = mysqli_fetch_array($result)) {
    
    echo"<tr>";
    
    foreach($str_arr as $value){
  echo "<td>";
      
      
      echo $row["$value"];
        
        
        echo"</td>";
        
        
}
  echo"</tr>"; 
    
}
         
         ?>
        </table>
         
         
  
        <br>
        <br>
        <p style="color:dimgrey;">Automated report generated by Research Repository Portal</p>
        
        
        
        </div>
        <br><br><br>
<div class="controls" style="text-align:center; height:80%;">
     <button style="margin: 0 auto;" onclick="saveAsExcel('table2excel', 'report.xls')">Convert to Excel</button>&nbsp;&nbsp;<button style="margin: 0 auto;" id="pdf" onclick="Export()">Convert to PDF</button>&nbsp;&nbsp;<a href="admin_dy_re.php"><button style="margin: 0 auto;">Back</button></a>
    </div>
        
         <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-animation.js"></script>

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
        
    </body>
    
    
    
    
    
    </head>



</html>