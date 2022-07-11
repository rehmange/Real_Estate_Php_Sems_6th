<?php
include"connection.php";
include_once"navenduser.php";
$sql ="SELECT * FROM house";
$result= mysqli_query($conn,$sql);
?>


<!-- Cards -->
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

<section  class="section about bg-gray" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-sm-12 wow fadeInLeft">

<table class="table table-dark my-4 py-2">
  <tbody>
    <tr >
      <th scope="row"></th>
      <td>Id</td>
      <td><?php echo $row['id']; ?></td>
    </tr>

    <tr >
      <th scope="row"></th>
      <td>Address</td>
      <td><?php echo $row['address']; ?></td>
    </tr>

    <tr>
      <th scope="row"></th>
      <td>Owner</td>
      <td><?php echo $row['owner_name']; ?></td>
    </tr>

    <tr>
      <th scope="row"></th>
      <td>Buyer </td>
      <td><?php echo $row['buyer_name']; ?></td>
    </tr>

    <tr>
      <th scope="row"></th>
      <td>Rooms</td>
      <td><?php echo $row['rooms']; ?></td>
    </tr>

    <tr>
      <th scope="row"></th>
      <td>kitchen</td>
      <td><?php echo $row['kitchen']; ?></td>
    </tr>

    <tr>
      <th scope="row"></th>
      <td>Washrooms</td>
      <td><?php echo $row['washrooms']; ?></td>
    </tr>

    <tr>
      <th scope="row"></th>
      <td>Price</td>
      <td>Rs. <?php echo $row['garage']; ?></td>
    </tr>

  </tbody>
</table>
    </div>
                    <div class="col-md-5 col-sm-12 wow fadeInLeft" data-wow-delay="0.3s">
                        <div class="about-slider">
                        <img src="images/<?php echo $row['filename']; ?>" class="my-4" style="width: 38rem;height: 24rem;" alt="No Image to Show"/>
                        </div>
                    </div>
                </div>
            </div>
        </section>




        <?php
include_once"footerenduser.php"
?>
