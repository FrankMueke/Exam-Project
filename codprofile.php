<?php 
session_start();
/*if(!isset($_SESSION["uid"]))

//header("location:index.php");
}*/
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <title>The COD Profile</title>
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
<body>
<nav class="navbar navbar-expand-lg bg-dark">
        
        <a class="navbar-brand" href="#">
        <img src="image/icon.png" width="30" height="30" class="d-inline-block align-top" alt="">
        <i class="fa fa-user" aria-hidden="true"></i>
        Examination
      </a>
                <button class="navbar-toggler dropdown-toggle" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                    <div class="collapse navbar-collapse float-md-right" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link">COD Portal<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="loga.php">Home</a>
                            </li> 
                            <li class="nav-item">
                                <a class="nav-link" href="resultc.php">Results</a>
                            </li><li>
                              <a class="nav-link" href="logout.php" style="text-decoration:none;">Logout</a>
                            </li>
                         </ul>
                     </div>
         </nav>
<p><br/></p>
<div class="container-fluid">
		     <div class="row">
			     <div class="col-md-1"></div>
				 <div class="col-md-10" id="unit_msg"></div>
				 <!--unit message -->
				 <div class="col-md-1"></div>
			 </div>
       </div>
       <div class='container-fluid'>
			 <div class="row">
              <div class="col-md-1">
              </div>
       		       	 <div class="col-md-10">
	                 <div class="card">
			             <div class="card-header" style="text-align:center;"><b><span >UNIT ASSIGNMENT</span></b>
                 		 </div>
			             <div class="card-body">
                   <div class='container-fluid'>
			             <div class="row">
                       <div class="col-md-3 card-header"><b>Unit code</b></div>
			                 <div class="col-md-3 card-header"><b>Unit name</b></div>
			                 <div class="col-md-3 card-header"><b>Group</b></div>
			                 <div class="col-md-3 card-header"><b>lecturer reg</b></div>
				         </div>
				         </div>
			             <div id="unit_assign">
                   <div class='container-fluid'>
			             <div class='row'>
				             <div class='col-md-3'><input type='text' class='form-control' id='u_code'></div>
				             <div class='col-md-3'><input type='text' class='form-control' id='u_name'></div>
				             <div class='col-md-3'>
                          <input type='text' class='form-control' id='group1'>                
                     </div> 
				             <div class='col-md-3'><input type='text' class='form-control' id='lec_reg'></div> 
					          </div>
                    </div>
                    <div class="row">
			                 <div class="col-md-2"></div>
				               <div class="col-md-8"></div>
				               <div class="col-md-2"><input type='submit' id='unit' class='btn btn-primary' value='submit'></div> 
                    </div>
                    </div>    
						   </div>
					    </div>
					 </div>
           <div class="col-md-1">
            </div>
					 </div>   
			</div>
      <p><br/></p>
      <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 text-center">
                <hr>
                <div><p class="text-monospace">View or Delete allocated units below<i class='float-right'></i></p></div>
                <hr/>
            </div>
        </div>
      </div>
      <p><br/></p>
      <div class="container-fluid">
		     <div class="row">
			     <div class="col-md-1"></div>
			   	 <div class="col-md-10" id="delete_msg"></div>
				   <!--delete message -->
				   <div class="col-md-1"></div>
			   </div>
      </div>
      <p><br/></p>
      <div class="container-fluid">
			 <div class="row">
				 <div class="col-md-1"></div>
          	 <div class="col-md-10">
	                 <div class="card">
			             <div class="card-header" style="text-align:center;"><b><span >ASSIGNED UNITS</span></b>
                 		 </div>
			             <div class="card-body">
                   <div class='container-fluid'>
			             <div class="row">
			                 <div class="col-md-3 card-header">Delete</div>
                       <div class="col-md-2 card-header"><b>Unit code</b></div>
			                 <div class="col-md-3 card-header"><b>Unit name</b></div>
			                 <div class="col-md-2 card-header"><b>Group</b></div>
			                 <div class="col-md-2 card-header"><b>lecturer reg</b></div>
				           </div>
				           </div>
                   <div id="unit_check">
				               <!--code for displaying units assigned in action.php -->
                   </div>
					         </div>
					         </div>   
			       </div>
				 <div class="col-md-1"></div>
       </div>
      </div>
      <p><br/></p>
      <p><br/></p>
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
<p class="rights b" style="color:Plum;"><span>©  </span><span class="copyright-year">2018</span><span> </span><span>Kenya</span><span>. </span><span>All Rights Reserved.</span></p>
  </div>
  <div class='col-md-1'></div>
</div>

 
</body>
</html>