<?php


include("dauth.php"); //include auth.php file on all secure pages ?>
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
    	<script type="text/javascript">
     function initGeolocation()
     {
        if( navigator.geolocation )
        {
           // Call getCurrentPosition with success and failure callbacks
           navigator.geolocation.getCurrentPosition( success, fail );
        }
        else
        {
           alert("Sorry, your browser does not support geolocation services.");
        }
     }

     function success(position)
     {

         document.getElementById('long').value = position.coords.longitude;
         document.getElementById('lat').value = position.coords.latitude
     }

     function fail()
     {
        // Could not obtain location
     }

   </script> 
  </head>

  <body class="nav-md" onLoad="initGeolocation();">
  <?php
 error_reporting(0);
	 $a=$_SESSION['username'];
	 $query="SELECT * from dusers where dusername = '$a'";
$mysql_hostname = "localhost";
$mysql_user     = "root";
$mysql_password = "";
$mysql_database = "pickup";
$con = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password,$mysql_database);
if(mysqli_connect_errno())
{
	echo"failed to connect to MysQl: ". mysqli_connect_error();
}
$result = mysqli_query($con,$query); // selecting data through mysql_query()
while($data = mysqli_fetch_array($result))
{

           
?>

    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="in.html" class="site_title"><i class="fa fa-paw"></i> <span>Helper Spot</span></a>
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
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="ddashboard.php"><i class="fa fa-home"></i> Home </a>
				  <li><a><i class="fa fa-bar-chart-o"></i> View Help Request </span></a>
                    <ul class="nav child_menu">
                      
                      <li><a href="viewdeliver.php">View Request</a></li>
					   <li><a href="updatetrack.php">Update Status</a></li>
                    </ul>
                  </li>
               
                   
                  </li> 
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
             
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="dlogout.php">
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
                  
                    <li><a href="dlogout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

               
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation 


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
                            <div class="col-md-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>UPDATE HELP INFORMATION <small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form class="form-horizontal form-label-left input_mask"  action="trackdb.php" method="post"">

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
					  
                        <input type="text" class="form-control has-feedback-left" name="p1" id="inputSuccess2" placeholder="DELIVER ID">
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control" name="p2" id="inputSuccess3" placeholder="USER ID">
                        <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" name="p3"  id="inputSuccess4" placeholder="Email">
                        <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control" name="p4"  id="inputSuccess5" placeholder="Phone">
                        <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">HELP MEMBER USERNAME</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" name="p5"  placeholder="HELP MEMBER USERNAME">
						  
                        </div>
                      </div>
					  <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Select Status</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select name="p6" class="form-control col-md-7 col-xs-12"  >
                            <option value="null">Enter Status</option>
                            <option value="Successfully Pick-Up">Successfully Completed</option>
                            <option value="Dispatched">Dispatched</option>
							<option value="On the way">On the way</option>
                            <option value="Order Successfully Delivered to User"> Order Delivered to User</option>
                            
                            
                          </select>
                        </div>
						     </div>
                      
					   <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">TIME</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="TIME" name="p7"  class="form-control" >
                        </div>
                      </div>
					                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">EXPECTED  DATE </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="date" class="form-control" name="p8"  value="Active" placeholder="Disabled Input">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">LONGITUDE </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control"  name="p9" readonly="readonly" ID="long" placeholder="Read-Only Input">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">LATITUDE <span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input class="date-picker form-control col-md-7 col-xs-12" ID="lat" name="p10"  readonly="readonly" required="required" type="text">
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                          <button class="btn btn-primary" type="button">Cancel</button>
						  <button class="btn btn-primary" type="reset">Reset</button>
						   <input class="btn btn-success" name="submit" type="submit"  value="Search" />
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
		  <?php } ?>
	      
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
  </body>
</html>
