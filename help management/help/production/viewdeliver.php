
<?php


include("dauth.php");  ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Helper Spot</title>

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
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Helper Spot</span></a>
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
                   <?php
	 error_reporting(0);
	  $a=$_SESSION['username'];
	$query=("SELECT * from deliver_request where did in (select did from deliver where dusername='$a' AND status='pending')");
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
                 <div class="clearfix"></div>

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
				  
                    <h3>Requested Help : <?php echo $data['category']; ?><br>
                    <small>Amount: <b>&#8377 <?php echo $data['item']; ?></b></small><br>
					<small> Help Type : <b><?php echo $data['ptype']; ?></b></small></h3>
					<h2>Expected Date: <b><?php echo $data['pdate']; ?></b></h2><br>
					<br>

                                       <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">

                  

                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            

                            <th>From Direction </th>
                            <th class="column-title">From Name </th>
							 <th class="column-title">Phone </th>
                       
                            <th class="column-title">To name</th>
							 <th class="column-title">Receiver Phone</th>
							 <th class="column-title">Help ID</th>
							 <th class="column-title">Helper Username</th>
                            
                          </tr>
                        </thead>

                        <tbody>
                          <tr class="even pointer">
                           
          <td><a href="https://www.google.com/maps/dir/<?php echo $data['daddress']; ?>/<?php echo $data['paddress']; ?>" target="_blank">DIRECTION</a></td>             
                         
                            <td class=" "><?php echo $data['dname']; ?></td>
							<td class=" "><?php echo $data['dphone']; ?></td>
                           
                            <td class=" "><?php echo $data['pname']; ?></td>
							<td class=" "><?php echo $data['pphone']; ?></td>
                            <form class="row"  action="Confirm.php" method="post"> 
                          <td class=" "><input type="text" readonly value="<?php echo $data['did']; ?>" name="p1"></td>
					<td class=" "><input type="text" readonly value="<?php echo $_SESSION['username']; ?>" name="p2"></td>
							
                          </tr>
                       
                        </tbody>
                      </table>
					 <button type="submit" class="btn btn-success">Confirm</button>
					  
                    </div>
							
						</form>
                  </div>

				  
                </div>
              </div>
			  
    

         
             
               

       
			   <?php } ?>
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
  </body>
</html>
