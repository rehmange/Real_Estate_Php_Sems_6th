<?php
session_start();
if(!isset($_SESSION['loggedin']))
{
	header("location:login.php");
}
?>
<?php
  include_once('navadmin.php')
?>
<?php
include "connection.php";
$my_rollno= $_REQUEST['id'];
$sql ="SELECT * FROM house where id=$my_rollno";
 $result= mysqli_query($conn,$sql);
  if($result)
  {
    $row= mysqli_fetch_assoc($result);
  }
?>

  <div class="container" style="margin-top: 3.5rem; margin-bottom:1rem;">
    <div class="title">House Details</div>
    <div class="content">
      <form method="post" action="updatedata.php" enctype="multipart/form-data">
        <div class="user-details">
          
          <div class="input-box">
             <span class="details"> </span>
          <input type="text" name="id" placeholder="id" value = "<?php echo $row['id']; ?> " required readonly>
          </div>
          
          <div class="input-box">
             <span class="details"> </span>
          <input type="text" name="address"placeholder="Address" value = "<?php echo $row['address']; ?> " >
          </div>

          <div class="input-box">
             <span class="details"> </span>
          <input type="text" name="owner_name"placeholder="Enter Owner Name" value = "<?php echo $row['owner_name']; ?> " >
          </div>

          <div class="input-box">
             <span class="details"> </span>
          <input type="text" name="buyer_name"placeholder="Enter Owner Last Name" value = "<?php echo $row['address']; ?> " >
          </div>

          <div class="input-box">
             <span class="details"> </span>
          <input type="text" name="rooms"placeholder="Total Rooms" value = "<?php echo $row['rooms']; ?> ">
          </div>

          <div class="input-box">
             <span class="details"> </span>
          <input type="text" name="kitchen"placeholder="Total kitchen" value = "<?php echo $row['kitchen']; ?> ">
          </div>

          <div class="input-box">
             <span class="details"> </span>
          <input type="text" name="washrooms"placeholder="Total Washrooms" value = "<?php echo $row['washrooms']; ?> ">
          </div>

          <div class="input-box">
             <span class="details"> </span>
          <input type="text" name="garage"placeholder="Price" value = "<?php echo $row['garage']; ?> ">
          </div>
          <div class="input-box">
             <span class="details"> </span>
          <input type="file" name="mfile"  >
          </div>
         
        </div>
        <div class="button">
          <input type="submit" name="submit" value="Update Record">
        </div>
      </form>
    </div>
  </div>

  <?php
  include_once('footeradmin.php')
?>
