<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Feedback</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/3D-animated-text-on-hover-1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
	<link rel="stylesheet" href="assets/css/Navigation-Clean.css">
	<link rel="stylesheet" href="assets/css/size_and_footer.css">
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
        <nav class="navbar navbar-light navbar-expand-md navigation-clean" style="background-color: #fc0000;z-index:1;">
            <div class="container"><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse text-left" id="navcol-1" style="background-color: #fc0000;color: rgb(255,255,255);width: 1173px;margin-left: -421px;margin-right: -398px;padding-left: 9px;padding-right: 4px;font-size: 20px;">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item" role="presentation"><a  class="nav-link" href="home.php" style="color: rgb(255,255,255);">Home</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link active" href="feedback.php" style="color: black;">Feedback</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="faq.php" style="color: rgb(255,255,255)">FAQ</a></li>
                         <li class="dropdown nav-item"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#" style="color: rgb(255,255,255);">Profile&nbsp; &nbsp; &nbsp;</a>
                            <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation"  href="edit_info.php">Edit Info</a><a class="dropdown-item" role="presentation" href="forgot_password.html">Change Password</a></div>
                        </li>
                         <li class="dropdown nav-item"><a class="nav-link" aria-expanded="false" href="add_document.html" style="color: rgb(255,255,255);">Add Document&nbsp;</a>
                           
                        </li>
                        
                        
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="col"><br>
        <p style="font-size: 22px;"><strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; We would love to hear your thoughts,concerns or problems with anything so we can improve!</strong></p>
    </div>
   <form class="feedbak" action ="fd.php" method="POST">
	
    <div class="col" style="margin-top: 19px;margin-left: 144px;">
        <p style="margin-left: -1px;font-size: 20px;"><strong>Describe Feedback:</strong></p>
    </div><textarea name="feed" class="border rounded" style="margin: -3px;margin-left: 162px;margin-top: -7px;width: 405px;height: 142px;font-size: 20px;"></textarea>
    <div class="col" style="margin-top: 40px;">
        <div class="row" style="font-size: 20px;margin-top: -10px;">
            <div class="col" style="margin-left: 144px;">
                <p><strong>Name:</strong></p>
                <div class="row">
                    <div class="col" style="margin-top: -2px;"><label>FirstName:&nbsp;</label><input name="firstname" class="border rounded" type="text"></div>
                </div>
            </div>
        </div>
        <div class="row" style="font-size: 20px;">
            <div class="col" style="margin-left: 81px;margin-top: 20px;"><label style="margin-left: 63px;margin-top: -55px;">LastName:</label><input name="lastname" class="border rounded" type="text" style="margin-left: 6px;"></div>
        </div>
        <div class="row">
            <div class="col" style="margin-top: 29px;margin-left: 144px;font-size: 20px;">
                <p><strong>Email:</strong></p>
                <div class="row">
                    <div class="col" style="width: 1816px;height: 46px;margin-top: 4px;"><input name="email" class="border rounded" type="email" style="margin-top: -6px;width: 357px;height: 44px;"></div>
                </div><button class="btn btn-primary" type="submit" style="background-color: rgb(3,3,3);position:relative;font-size: 20px;margin-left: 1040px;margin-top: -38px;height: 39px;">Submit Feedback</button></div>
        </div>
    </div>
	</form>
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