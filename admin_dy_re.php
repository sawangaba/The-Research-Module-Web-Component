<?php  
session_start();

$conn= new mysqli("localhost", "id13346941_localhost", "CoDQy{evk7o4q3V%", "id13346941_project_research") or die("ERROR:could not connect to the database!!!");
//$conn= new mysqli("localhost","root","","project_research") or die("ERROR:could not connect to the database!!!");

//$query=$conn->prepare("select * from document where work_email='{$_SESSION['work_email']}'");
//
//$query->execute();

$id="SELECT * FROM sign_up ORDER BY emp_id ASC";

$id_result = mysqli_query($conn,$id);


?>

<!DOCTYPE html>
<html>

<head>
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
 <script>
$(function()
	{
		$("#but1").click(function()
		{
			$("#listbox1 option:selected").each(function()
		
			{
				$(this).remove().appendTo("#listbox2"); 
                var val1=[];
                    
$('select[name="name[]"] option').each(function() {
val1.push($(this).val());
    
   
});
      $('#input').val(val1); 
               
			});
		});
		
		$("#but2").click(function()
		{
			$("#listbox2 option:selected").each(function()
		
			{
				$(this).remove().appendTo("#listbox1"); 
                var val1=[];
                    
$('select[name="name[]"] option').each(function() {
val1.push($(this).val());
    
   
});
      $('#input').val(val1); 
                
                
			});
		});
		
		
	});
        
 
</script>


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
                        <li class="nav-item" role="presentation"><a  class="nav-link" href="admin_home.php" style="color: rgb(255,255,255);">Home</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="crud.php" style="color: white;">CRUD Operations</a></li>
                        
                        
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="col" style="align-content: center; padding-left: 275px; width: 100%;">
        </div>
    <br><label style="margin-left: 42.5%;color: rgb(99,97,97);background-color: rgb(255,255,25:);"><strong>Dynamic Report Generation</strong>&nbsp;</label>
<br><br>
   
    <div class="border rounded shadow" style="margin: auto; height: 501px;  width: 800px;">
	
        <div class="listbox-area">
          <div class="left-area">
            <span id="ms_av_l">Available options:</span><br><br>
			
            <select role="listbox" id="listbox1" multiple="multiple">
                <option>work_email</option>
                <option>author1</option>
                <option>author2</option>
                <option>author3</option>
                <option>author4</option>
                <option>author5</option>
			<option>ms_Title</option>
			<option>full_jName</option>
			<option>publisher</option>
			<option>publication_Type</option>
                <option>publication_Status</option>
			<option>Year</option>
			<option>Month</option>
			<option>EISSN</option>
                <option>PISSN</option>
                <option>web_Link</option>
                <option>DOI</option>
                <option>Indexes</option>
                <option>upload_date</option>
                <option>approval_date</option>
			
			
			</select><br><br>
             <button id="but1" >Add</button>
          </div>
          <div class="right-area" style="padding-left:8%; ">
            <span id="ms_ch_l">Selected Options:</span><br><br>
           
		    <select name="name[]" role="listbox" id="listbox2" multiple="multiple">
			
			</select><br><br>
		   <button id="but2" >Remove</button>
          </div>
        </div>
		<br><br>
		<div align="center">
             <form action="admin_report.php" method="POST">
                 <input type="hidden" name="select" value="" id="input"><select name="users"><option>All users</option>
                 
                 
                 
                 <?php while($row = mysqli_fetch_array($id_result)) { $cf=$row["emp_id"]; echo"<option>$cf</option>";  } ?>
                 
                 
                 
                 
                 </select>
		 <input id="but3" type="submit" value="Generate Report">
                  </form>
		</div>
      </div>
    <br>
   
		<br>
	</div>
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

</html>