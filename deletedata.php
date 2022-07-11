<?php
 session_start();
if(!isset($_SESSION['loggedin']))
{
	header("location:login.php");
}
else
{
 
include"connection.php";

	 $my_id = $_REQUEST['id'];
	
$sql =  "DELETE FROM `house` WHERE id=$my_id";
if(mysqli_query($conn,$sql)){
	// echo"Record deleted  successfully";
	?>
	<!-- header("location:showall.php"); -->
	<script>window.location.href='showall.php';</script>
<?php
}
else{
	echo"some Problem" ;
}
}
?>