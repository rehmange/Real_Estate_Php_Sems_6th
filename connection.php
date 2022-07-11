<?php
$conn =mysqli_connect("localhost","root","","real_estate");
// $conn =mysqli_connect("fdb34.awardspace.net","4123443_realestate","AwardSpace@12","4123443_realestate");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>