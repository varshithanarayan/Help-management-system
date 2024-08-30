


<!DOCTYPE html>
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
                <span>Admin</span>
                <h2>Helper Spot</h2>
              </div>
              <div class="clearfix"></div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
               <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Admin</h3>
                <ul class="nav side-menu">
                  <li><a href="admindashboard.php"><i class="fa fa-home"></i> Home </a>
				  <li><a><i class="fa fa-bar-chart-o"></i> Order Details </span></a>
                    <ul class="nav child_menu">
                      <li><a href="drequest.php"> Help Request</a></li>
                     
                    </ul>
                  </li>
                  <li><a href="viewdmember.php"><i class="fa fa-desktop"></i> View Helper</a>
                   
                			  
                  </li>

				   <li><a href="viewfeedback.php"><i class="fa fa-table"></i> View Feedback </a>
                   
                  </li>
                 
                
                 
                  
                </ul>
              </div>
            

            </div>
            <!-- /sidebar menu -->

           
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
                    Admin
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
				<div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  
                  <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"  action="" method="post"">

                      <div class="form-group">
                        
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          					  <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Select Helper Location</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                           <div class="col-md-6 col-sm-6 col-xs-12">
						<select  class="form-control col-md-7 col-xs-12" name="ppp">
<option value="Mysuru"> Mysuru</option>
<option value="Mandya"> Mandya</option>
<option value="Maddur"> Maddur</option>
<option value="Hassan"> Hassan</option>	
<option value="Banglore"> Banglore</option>
<option value="Thumkur"> Thumkur</option>
<option value="Manglore"> Manglore</option>
<option value="Chikmagaluru"> Chikmagaluru</option>	</select>	
                        </div>
						
						     </div>
                        </div>
                      </div>
					   <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                          
						   <input class="btn btn-success" name="submit" type="submit"  value="Search" />
                        </div>
                      </div>
					  </div>
                    
					 

                       </div>
                    
                      

                    </form>
                  </div>
                </div>
				</div>
				</div>
                   <?php
	 error_reporting(0);
	  $a=$_POST['ppp'];
	 $query="SELECT * from dusers where address='$a' and status='Active'";
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
				  <h1> ID : <?php echo $data['dusername']; ?> </h1>
                    <h3>Full Name: <?php echo $data['fullname']; ?><br>
					<small> Phone : <?php echo $data['phone']; ?></small></h3>
					<h2><?php echo $data['pdate']; ?></h2><br>

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
                    <br />
					
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Location <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="p1" value="<?php echo $data['address']; ?>"required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Status <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="last-name" value="<?php echo $data['status']; ?>" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

					 
			
                 
                    
                      <div class="ln_solid"></div>


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
