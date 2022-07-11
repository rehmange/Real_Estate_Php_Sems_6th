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


  <div class="container" style="margin-top: 3.5rem; margin-bottom:1rem;">
    <div class="title">House Details</div>
    <div class="content">
      <form method="post" action="insertdata.php" enctype="multipart/form-data">
        <div class="user-details">
          
          <div class="input-box">
             <span class="details"> </span>
          <input type="text" name="id" placeholder="id" required>
          </div>
          
          <div class="input-box">
             <span class="details"> </span>
          <input type="text" name="address"placeholder="Address" >
          </div>

          <div class="input-box">
             <span class="details"> </span>
          <input type="text" name="owner_name"placeholder="Enter Owner Name" >
          </div>

          <div class="input-box">
             <span class="details"> </span>
          <input type="text" name="buyer_name"placeholder="Enter Owner Last Name" >
          </div>

          <div class="input-box">
             <span class="details"> </span>
          <input type="text" name="rooms"placeholder="Total Rooms" >
          </div>

          <div class="input-box">
             <span class="details"> </span>
          <input type="text" name="kitchen"placeholder="Total kitchen" >
          </div>

          <div class="input-box">
             <span class="details"> </span>
          <input type="text" name="washrooms"placeholder="Total Washrooms" >
          </div>

          <div class="input-box">
             <span class="details"> </span>
          <input type="text" name="garage"placeholder="Price" >
          </div>
          <div class="input-box">
             <span class="details"> </span>
          <input type="file" name="mfile"  >
          </div>
         
        </div>
        <div class="button">
          <input type="submit" name="submit" value="Add Record">
          <!-- <a class='btn btn-danger' href="showall.php">Retrive Record </a> -->
          <!-- <input type="submit" name="submit" value="Retrive Record"> -->
        </div>
      </form>
    </div>
  </div>

  <?php
  include_once('footeradmin.php')
?>