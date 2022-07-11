
<!-- Cards -->
<?php
include"connection.php";
include_once"navenduser.php";
include_once"slider.php";
$sql ="SELECT * FROM house";
$result= mysqli_query($conn,$sql);
?>
<div class="container">
<div class="row">
<?php 
while($rows=mysqli_fetch_assoc($result))
{?>
<div class="card col-sm-12 col-md-4 col-lg-4 my-4 mx-2 " style="width: 18rem;">
  <img class="card-img-top" src="images/<?php echo $rows['filename'];?>" alt="Card image cap">
  <div class="card-body">
    <div class="btn btn-primary" >Rs. <?php echo $rows["garage"];?></div>
    <a href="details.php?id=<?php echo $rows['id']; ?>" class="btn btn-primary" >More Details</a>
  </div>
</div>
<?php
}?>




</div>
</div>
<?php
include_once"footerenduser.php"
?>
