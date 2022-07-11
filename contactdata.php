<?php
include"connection.php";
if(isset($_POST['submit']))
 {
    $my_cname = $_REQUEST['cname'];
    $my_email = $_REQUEST['email'];
    // $my_msg = $_REQUEST['msg'];
    $my_msg =  trim($_POST['msg']);
    $sql = "INSERT INTO `contact`(`name`, `email`, `msg`) VALUES ('$my_cname','$my_email','$my_msg')";
    // $sql = "INSERT INTO `contact`(`id`, `name`, `email`, `msg`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]')";

    if(mysqli_query($conn,$sql)){
        // echo"Record inserted  successfully";
        header("location:contact.php");
    }
    else{
        echo"some Problem" ;
    }
 } 
?>
