<?php


include("auth.php"); //include auth.php file on all secure pages ?>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Helper Spot </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
	  <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500">
    
  </head>

  <body class="nav-md">
  <?php
require('db.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['username'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($con,$username); 
	$uname = stripslashes($_REQUEST['uname']);
	$uname = mysqli_real_escape_string($con,$uname);
	
	$pname = stripslashes($_REQUEST['pname']);
	$pname = mysqli_real_escape_string($con,$pname);
	$pno = stripslashes($_REQUEST['pno']);
	$pno = mysqli_real_escape_string($con,$pno);
	$ptype = stripslashes($_REQUEST['ptype']);
	$ptype = mysqli_real_escape_string($con,$ptype);
	$pdate = stripslashes($_REQUEST['pdate']);
	$pdate = mysqli_real_escape_string($con,$pdate);
	$item = stripslashes($_REQUEST['item']);
	$item  = mysqli_real_escape_string($con,$item );
	$daddress = stripslashes($_REQUEST['daddress']);
	$daddress = mysqli_real_escape_string($con,$daddress);
	$paddress = stripslashes($_REQUEST['paddress']);
	$paddress = mysqli_real_escape_string($con,$paddress);
	$phone = stripslashes($_REQUEST['phone']);
	$phone = mysqli_real_escape_string($con,$phone);
  $mail="Fashion";
        $query = "INSERT into `deliver_request` (username,dname,dphone,daddress,pname,pphone,paddress,item,pdate,ptype,category)
VALUES ('$username','$uname','$pno', '$daddress','$pname','$phone','$paddress','$item','$pdate','$ptype','$mail')";
        $result = mysqli_query($con,$query);
        if($result){
           ?>
		<script type="text/javascript">
            window.alert("successfully Updated");
            window.location="dashboard.php";
            </script>
			<?php 
        }
    }
?>

    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="" class="site_title"><i class="fa fa-paw"></i> <span>Helper Spot </span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              
              <div class="profile_info">
                <span>Welcome,</span>
				
                <h2> <?php echo $_SESSION['username']; ?></h2>
              </div>
              <div class="clearfix"></div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Helper Spot</h3>
                <ul class="nav side-menu">
                  <li><a href="dashboard.php"><i class="fa fa-home"></i> Home </a>
				  <li><a><i class="fa fa-bar-chart-o"></i>Track Help </span></a>
                    <ul class="nav child_menu">
                      <li><a href="cancel.php">Cancel Help Request</a></li>
					
                      <li><a href="viewtrack.php">Track Help Request</a></li>
                    </ul>
                  </li>
                  <li><a href="costnoti.php"><i class="fa fa-desktop"></i> View Bill </a>
                   
                  </li> 
                  </li>

				   <li><a href="feedback.php"><i class="fa fa-table"></i> Report / Feedback </a>
                   
                  </li>
                 
                
                 
                  
                </ul>
              </div>
            

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
             
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                     <?php echo $_SESSION['username']; ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    
                    <li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

               
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Helper Spot</h3>
              </div>

             
            </div>

            <div class="clearfix"></div>

          <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  
                  <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">User ID <span class="required">*</span>
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
    <input type="text" id="first-name" name="username" readonly value="<?php echo $_SESSION['username']; ?>"required="required" class="form-control col-md-7 col-xs-12">
  </div>
</div>
<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12"  for="last-name">Your Name <span class="required">*</span>
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
    <input type="text" id="last-name" name="uname" required="required" class="form-control col-md-7 col-xs-12">
  </div>
</div>
<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12"  for="last-name">Phone Number <span class="required">*</span>
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
    <input type="tel" id="last-name" name="phone" required="required" class="form-control col-md-7 col-xs-12">
  </div>
</div>
<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">From Address  <span class="required">*</span>
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12" id="locationField">
  <textarea name="daddress" id="toAddress" placeholder="Enter your address" oninput="calculateDistance()" type="text" required="required" class="form-control col-md-7 col-xs-12"></textarea>
</div>
</div>
<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Reciever UserName <span class="required">*</span>
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
    <input type="text" id="last-name" name="pname"required="required" class="form-control col-md-7 col-xs-12">
  </div>
</div>
<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12"  for="last-name"> Reciever Phone Number<span class="required">*</span>
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
    <input type="tel" id="last-name" name="pno" required="required" class="form-control col-md-7 col-xs-12">
  </div>
</div>
<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12"  for="last-name">Delivery Address<span class="required">*</span>
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12" id="locationField">
  <textarea name="paddress" id="fromAddress" placeholder="Enter your address" oninput="calculateDistance()" type="text" required="required" class="form-control col-md-7 col-xs-12"></textarea>
</div>
</div>
<div>
<input type="hidden" id="distance" readonly>
</div>
<div class="form-group">
<label for="amount" class="control-label col-md-3 col-sm-3 col-xs-12">Amount ( ₹ )*</label>
<div class="col-md-6 col-sm-6 col-xs-12">
<input id="amount" name="item" class="form-control col-md-7 col-xs-12" type="text" readonly>
</div>
</div>



<div class="form-group">
  <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Date</label>
  <div class="col-md-6 col-sm-6 col-xs-12">
    <input  class="form-control col-md-7 col-xs-12" type="date" name="pdate">
  </div>
</div>
<div class="form-group">
<label class="control-label col-md-3 col-sm-3 col-xs-12">Select Deliver Method</label>
  <div class="col-md-6 col-sm-6 col-xs-12">
    <select name="ptype" class="form-control col-md-7 col-xs-12"  >
      <option value="Helper Mode">Helper Mode</option>
      <option value="Normal">Online<option>
      <option value="Packed">Offline</option>
   
    </select>
  </div>
</div>

<div class="ln_solid"></div>
<div class="form-group">
  <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
    <button class="btn btn-primary" type="button">Cancel</button>
<button class="btn btn-primary" type="reset">Reset</button>
<input class="btn btn-success" name="submit" type="submit"  value="Submit" />
  
  </div>
</div>

</form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
	      
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">

          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
    <script>
    const apiKey = '412c3901661f409594ea77a2eeb37049';

    function calculateDistance() {
      var fromAddress = document.getElementById('fromAddress').value;
      var toAddress = document.getElementById('toAddress').value;

      fetch(`https://api.opencagedata.com/geocode/v1/json?q=${encodeURIComponent(fromAddress)}&key=${apiKey}`)
        .then(response => response.json())
        .then(data => {
          if (data.results && data.results.length > 0) {
            var fromCoords = `${data.results[0].geometry.lat},${data.results[0].geometry.lng}`;

            fetch(`https://api.opencagedata.com/geocode/v1/json?q=${encodeURIComponent(toAddress)}&key=${apiKey}`)
              .then(response => response.json())
              .then(data => {
                if (data.results && data.results.length > 0) {
                  var toCoords = `${data.results[0].geometry.lat},${data.results[0].geometry.lng}`;

                  // Calculate distance using Haversine formula
                  var distanceInKms = haversineDistance(fromCoords, toCoords);
                  document.getElementById('distance').value = distanceInKms.toFixed(2);

                  // Calculate amount (distance multiplied by 3)
                  var amount = distanceInKms * 7;
                  document.getElementById('amount').value = amount.toFixed(2);
                } else {
                  console.error('Error fetching coordinates (to): No results found');
                }
              })
              .catch(error => console.error('Error fetching coordinates (to):', error));
          } else {
            console.error('Error fetching coordinates (from): No results found');
          }
        })
        .catch(error => console.error('Error fetching coordinates (from):', error));
    }

    // Haversine formula to calculate distance between two points on the Earth
    function haversineDistance(coord1, coord2) {
      function toRadians(degrees) {
        return degrees * Math.PI / 180;
      }

      var [lat1, lon1] = coord1.split(',').map(parseFloat);
      var [lat2, lon2] = coord2.split(',').map(parseFloat);

      var R = 6371; // Radius of the Earth in kilometers
      var dLat = toRadians(lat2 - lat1);
      var dLon = toRadians(lon2 - lon1);

      var a = Math.sin(dLat / 2) * Math.sin(dLat / 2) +
              Math.cos(toRadians(lat1)) * Math.cos(toRadians(lat2)) *
              Math.sin(dLon / 2) * Math.sin(dLon / 2);
      var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));

      return R * c; // Distance in kilometers
    }
  </script>
  </body>
</html>
