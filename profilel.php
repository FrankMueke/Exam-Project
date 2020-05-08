<?php 
session_start();
if(!isset($_SESSION["uid"]))
{
	header("location:loga.php");
}
?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <title>Examination Portal Dekut</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" href="css/bootstrap.css"/>
    <link rel="manifest" href="js/manifest.json"/>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/main.js"></script>
    <style type='text/css'>
    .c
    {
         background-image: url('image/animation.png');
    }
    .b
    {
         background-color: rgba(0,0,0,0.4);
    }
    </style>
</head>
<body class=''>
<nav class="navbar navbar-expand-sm bg-dark">
        
        <a class="navbar-brand" href="#">
        <img src="image/icon.png" width="30" height="30" class="d-inline-block align-top" alt="">
        <i class="fa fa-user" aria-hidden="true"></i>
        Examination
      </a>
                <button class="navbar-toggler dropdown-toggle" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                    <div class="collapse navbar-collapse float-sm-right" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link">LECTURER Portal<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="resul.php">Results</a>
                            </li> 
                            <li>
                              <a class="nav-link" href="logout.php" style="text-decoration:none;">Logout</a>
                            </li>
                         </ul>
                     </div>
         </nav>
<p><br/></p>
<p><br/></p><div class="container-fluid">
		     <div class="row">
			     <div class="col-sm-1"></div>
				 <div class="col-sm-10" id="update_msg"></div>
				 <!--unit message -->
				 <div class="col-sm-1"></div>
			 </div>
       </div>
<div id="confirm_detail">
<div class='container_fluid'>
  <div class='row'>
     <div class='col-sm-4'></div>
        <div class='col-sm-4'>
<form action='POST'>
    <div class="form-group">
        <label for="exampleDropdownFormEmail1" style="color:Plum;">Academic year</label>
        <select name="Academic Year" id='academic_yr'>
            <option value="2015/2016">2015/2016</option>
            <option value="2016/2017">2016/2017</option>
        </select>
 </div>
 <div class="form-group">
      <label for="exampleDropdownFormPassword1" style="color:Plum;">Semester</label>
      <select name="Academic Year" id='sem'>
            <option value="Jan-April">Jan-April</option>
            <option value="May-Aug">May-Aug</option>
            <option value="Sep-Dec">Sep-Dec</option>
        </select>
    </div>
    <input type="Submit" class="bn btn-success" id="displayform" value="displayform">
</form>
  </div>
    <div class='col-sm-4'></div>
   </div>
</div>
</div>

<div id="displaystudents">
</div>
 
<p><br/></p>
<p><br/></p>
<p><br/></p>
 
<div class='row'>
  <div class='col-sm-1'></div>
  <div class='col-sm-10'>
  <footer class="section footer-classic" style="background-color: BurlyWood;">
        <div class="container">
          <div class="row row-30">
            <div class="col-sm-4 col-xl-5">
              <div class="pr-xl-4"><a class="brand" href="index.html"><img class="brand-logo-light" src="images/agency/logo-inverse-140x37.png" alt="" width="140" height="37" srcset="images/agency/logo-retina-inverse-280x74.png 2x"></a>
                <p>We are an award-winning creative agency, dedicated to the best result in web design, promotion.</p>
                
              </div>
            </div>
            <div class="col-sm-4">
              <h5>Contacts</h5>
              <dl class="contact-list">
                <dt>Address:</dt>
                <dd>1000100 Nairobi kenya</dd>
              </dl>
              <dl class="contact-list">
                <dt>email:</dt>
                <dd><a href="mailto:#"><span style="text-color: black;">rlagents@gmail.com</span></a></dd>
              </dl>
              <dl class="contact-list">
                <dt>phones:</dt>
                <dd><a href="tel:#">+254700583879</a> <span>or</span> <a href="tel:#">+254700583879</a>
                </dd>
              </dl>
            </div>
            <div class="col-sm-4 col-xl-3">
              <h5>Links</h5>
              <ul class="nav-list">
                <li><a href="about.php">About Us</a></li>
                <li><a href="help.php">Help Center</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="about.php">Contacts</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row no-gutters social-container c">
          <div class="col"><a class="social-inner" href="#"><span class="icon smi smi-facebook"></span><span>Facebook</span></a></div>
          <div class="col"><a class="social-inner" href="#"><span class="icon smi smi-instagram"></span><span>instagram</span></a></div>
          <div class="col"><a class="social-inner" href="#"><span class="icon smi smi-twitter"></span><span>twitter</span></a></div>
          <div class="col"><a class="social-inner" href="#"><span class="icon smi smi-youtube-play"></span><span>google</span></a></div>
</div>
</footer>

<hr>
<!-- Rights-->
<p class="rights b" style="color:Plum;"><span>©  </span><span class="copyright-year">2018</span><span> </span><span>Kenya</span><span>. </span><span>All Rights Reserved.</span></p>
  </div>
  <div class='col-sm-1'></div>
</div>

 
</body>
</html>