		
<?php 
require('db.php');

$a=$_POST['p1'];
$b=$_POST['p2'];




if($con){
	echo"connection successful";
	$sql="INSERT INTO confirm VALUES('','$a','$b')";
$query="UPDATE deliver_request SET status='booked' where did='$a'";
	if (mysqli_query($con, $sql)) {
		if (mysqli_query($con, $query)) {
               echo "New record created successfully";?>
			   		<script type="text/javascript">
            window.alert("Confirmation sent successfully  ");
            window.location="viewdeliver.php";
            </script>
			<?php 
            }
		}
	else{
		echo"Record not inserted";?>
		<script type="text/javascript">
            window.alert("Confirmation sent failed ");
            window.location="viewdeliver.php";
            </script>
			<?php 
	}
}
else{
	echo"connection error";

}
?>
		
		
		