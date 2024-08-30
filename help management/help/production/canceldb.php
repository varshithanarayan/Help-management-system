		
<?php 
require('db.php');

$a=$_POST['p1'];






if($con){
	echo"connection successful";
	$sql="delete from deliver_request where did='$a'";

	if (mysqli_query($con, $sql)) {
             ?>
			   		<script type="text/javascript">
            window.alert("Order Cancel successfully  ");
            window.location="cancel.php";
            </script>
			<?php 
            }
	else{
		echo"Record not inserted";?>
		<script type="text/javascript">
            window.alert("Order Cancel failed ");
            window.location="cancel.php";
            </script>
			<?php 
	}
}
else{
	echo"connection error";

}
?>
		
		
		