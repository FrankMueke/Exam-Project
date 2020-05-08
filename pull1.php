<?php 
session_start();
?>
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Real Estate Agnecy</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.css"/>
    <link rel="manifest" href="js/manifest.json"/>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/main.js"></script>
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
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
<body>

    <nav class="navbar navbar-expand-lg dark">
        
    <a class="navbar-brand" href="#">
    <img src="image/icon.png" width="30" height="30" class="d-inline-block align-top" alt="">
    <i class="fa fa-user" aria-hidden="true"></i>
    <span style="color:Plum;">
    <i class="fa fa-user" aria-hidden="true"></i>RL Agents</span>
  </a>
            <button class="navbar-toggler dropdown-toggle" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
                <div class="collapse navbar-collapse float-md-right" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="#"><span style="color:Plum;">Home</span><span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <i class="fa fa-user" aria-hidden="true"></i>
                            <span style="color:Plum;">Register</span>
                            </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="regt.php">As Tenant</a>
                            <a class="dropdown-item" href="regl.php">As Landlord</a>
                            <a class="dropdown-item" href="rego.php">As Office</a>
                            <a class="dropdown-item" href="rega.php">As Agent</a>
                        </div>
                        </li>
                             
                        <li class="nav-item">
                            <a class="nav-link" href="about.php"><span style="color:Plum;">About Us</span></a>
                        </li>
                        <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span style="color:Plum;">Login</span>
                            </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="logt.php">As Tenant</a>
                            <a class="dropdown-item" href="logl.php">As Landlord</a>
                            <a class="dropdown-item" href="logo.php">As Office</a>
                            <a class="dropdown-item" href="loga.php">As Agent</a>
                        </div>
                        </li>
                     </ul>
                 </div>
     </nav>
     <p><br/></p>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" style="height:auto;">
    <div class="carousel-item active">
    <div class="carousel-caption d-none d-md-block">
    <div class="row flex-caption">
        <div class="col-md-1"></div>
		<div class="col-md-10 text-monospace">
    <h1>welcome to your home,your community.
        A place where every one is matters.
    </h1>
    </div>
    <div class="col-md-1"></div>
    </div>
  </div>
      <img class="d-block w-100"  src="222.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
    <div class="carousel-caption d-none d-md-block">
    <div class="row flex-caption">
        <div class="col-md-1"></div>
		<div class="col-md-10 text-monospace">
    <h1>Raise issue to your appartment manager and check the progress.
        Pay your rent with a click of the button using M-pesa
    </h1>
    </div>
    <div class="col-md-1"></div>
    </div>
</div>

      <img class="d-block w-100"  src="333.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
    <div class="carousel-caption d-none d-md-block">
    <div class="row flex-caption">
        <div class="col-md-1"></div>
		<div class="col-md-10 text-monospace">
    <h1>Dont pay for your room pay for the services.
        Thanks to RL AGENTS
    </h1>
    </div>
    <div class="col-md-1"></div>
    </div>
  </div>
      <img class="d-block w-100"  src="222.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<p><br/></p>
<div class='row'>
  <div class='col-md-1'></div>
  <div class='col-md-10'>
  <footer class="section footer-classic" style="background-color: BurlyWood;">
        <div class="container">
          <div class="row row-30">
            <div class="col-md-4 col-xl-5">
              <div class="pr-xl-4"><a class="brand" href="index.html"><img class="brand-logo-light" src="images/agency/logo-inverse-140x37.png" alt="" width="140" height="37" srcset="images/agency/logo-retina-inverse-280x74.png 2x"></a>
                <p>We are an award-winning creative agency, dedicated to the best result in web design, promotion.</p>
                
              </div>
            </div>
            <div class="col-md-4">
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
            <div class="col-md-4 col-xl-3">
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
          <div class="col"><a class="social-inner" href="#"><span class="icon mdi mdi-facebook"></span><span>Facebook</span></a></div>
          <div class="col"><a class="social-inner" href="#"><span class="icon mdi mdi-instagram"></span><span>instagram</span></a></div>
          <div class="col"><a class="social-inner" href="#"><span class="icon mdi mdi-twitter"></span><span>twitter</span></a></div>
          <div class="col"><a class="social-inner" href="#"><span class="icon mdi mdi-youtube-play"></span><span>google</span></a></div>
</div>
</footer>
<hr>
<!-- Rights-->
<p class="rights"><span>©  </span><span class="copyright-year">2018</span><span> </span><span>Kenya</span><span>. </span><span>All Rights Reserved.</span></p>
  </div>
  <div class='col-md-1'></div>
</div>
 <!-- /Start your project here-->
  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
</body>
</html>