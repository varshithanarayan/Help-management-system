		<?php
  error_reporting(0);
require('db.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['username'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($con,$username); 
	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($con,$email);
	$fname = stripslashes($_REQUEST['fname']);
	$fname = mysqli_real_escape_string($con,$fname);
	
	$address = stripslashes($_REQUEST['address']);
	$address = mysqli_real_escape_string($con,$address);
	$cname = stripslashes($_REQUEST['cname']);
	$cname = mysqli_real_escape_string($con,$cname);
	$status = stripslashes($_REQUEST['status']);
	$status = mysqli_real_escape_string($con,$status);
	
	$trn_date = date("Y-m-d H:i:s");
	
	$query ="UPDATE dusers SET fullname='$fname',email='$email',address='$address',status='$status' WHERE dusername='$username'";

        
        $result = mysqli_query($con,$query);
        if($result){
           echo"Record inserted";?>
		<script type="text/javascript">
            window.alert("successfully Registred");
            window.location="ddashboard.php";
            </script>
			<?php 
        }
    }
?>