<?php
session_start();
if(!isset($_SESSION['loggedin']))
{
	header("location:login.php");
}
else
{

include"connection.php";
if(isset($_POST['submit']))
 {
	// Pic update code start
	if($_FILES['mfile']['name']!="")
	{
	$ok=1;
	$filename=rand(100,999).$_FILES['mfile']['name'];
	$filesize =$_FILES['mfile']['size'];
	$filetype= $_FILES['mfile']['type'];
	echo " file size is = $filesize";
	$type =exif_imagetype($_FILES['mfile']['tmp_name']);
	if($type==IMAGETYPE_GIF ||$type==IMAGETYPE_JPEG|| $type== IMAGETYPE_PNG)
	{
	echo "valid format ";
	}
	else
	{
	echo "<br>please select jpg gif or png file <br> ";
	$ok=0;
	}
	if($filesize > 5120000)
	{
	echo "please select file less than 5MB ";
	$ok=0;
	}
	if(file_exists("images/".$_FILES['mfile']['name']))
	{
	echo "file with same name already exist";
	$ok=0;
	}
	if($ok==1)
	{
	if(move_uploaded_file($_FILES['mfile']['tmp_name'],"images/$filename"))
	echo"file uploaded successfully";
	else
	echo"There is some problem in uploading file";
	}
	}else{
	echo "please select file first:";
	}
	// Pic update code end
	$my_id = $_REQUEST['id'];
	$my_address   = $_REQUEST['address'];
	$my_owner_name  = $_REQUEST['owner_name'];
	$my_buyer_name   = $_REQUEST['buyer_name'];
	$my_rooms    = $_REQUEST['rooms'];
	$my_kitchen    = $_REQUEST['kitchen'];
	$my_washrooms    = $_REQUEST['washrooms'];
	$my_garage   = $_REQUEST['garage'];
	if($_FILES['mfile']['name']!="")
	{
$sql =  "UPDATE `house` SET `address`='$my_address',`owner_name`='$my_owner_name',`buyer_name`='$my_buyer_name',`rooms`='$my_rooms',`kitchen`='$my_kitchen',`washrooms`='$my_washrooms',`garage`='$my_garage',`filename`='$filename' WHERE `id`='$my_id'";
}
else{
	$sql =  "UPDATE `house` SET `address`='$my_address',`owner_name`='$my_owner_name',`buyer_name`='$my_buyer_name',`rooms`='$my_rooms',`kitchen`='$my_kitchen',`washrooms`='$my_washrooms',`garage`='$my_garage' WHERE `id`='$my_id'";
}
if(mysqli_query($conn,$sql)){
	// echo"Record updated  successfully";
	?>
	<!-- header("location:showall.php"); -->
	<script>window.location.href='showall.php';</script>
<?php
}
else{
	echo"some Problem" ;
}

}
}

?>