		
<?php 
require('db.php');

$a=$_POST['p1'];
$b=$_POST['p2'];
$c=$_POST['p3'];
$d=$_POST['p4'];




if($con){
	echo"connection successful";
	$sql="INSERT INTO feedback VALUES('$a','$b','$c','$d')";

	if (mysqli_query($con, $sql)) {
               echo "New record created successfully";?>
			   		<script type="text/javascript">
            window.alert("Feedback sent successfully  ");
            window.location="feedback.php";
            </script>
			<?php 
            }
	else{
		echo"Record not inserted";?>
		<script type="text/javascript">
            window.alert("feedback sent failed ");
            window.location="feedback.php";
            </script>
			<?php 
	}
}
else{
	echo"connection error";

}
?>
		
		
		