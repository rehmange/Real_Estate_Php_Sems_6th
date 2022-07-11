<?php
session_start();
if(!isset($_SESSION['loggedin']))
{
  header("location:login.php");
}
else
{

?>
<?php
  include_once('navadmin.php')
?>
  <div class="container" style="margin-top: 3.5rem;">
    <div class="title mb-4 fs-1 " >Hosues Details</div>
    <div class="content" align="center">
        <table class="table table-dark table-striped" >
         <thead>
          <tr>
           <th>Id</th><th>Address</th><th>Owner Name</th><th>Last Name</th><th>Rooms</th><th>Kitchen</th><th>Washrooms</th><th>Price</th><th>Picture</th>
          </tr>
         </thead>
         <tbody>
         <?php 
         include"connection.php";
         $sql ="SELECT * FROM house";
         $result= mysqli_query($conn,$sql);
             while($rows= mysqli_fetch_assoc($result) )
            {
    				echo"<tr>";
    				echo"<td>".$rows['id']."</td>";
    				echo"<td class='address'>".$rows['address']."</td>";
    				echo"<td>".$rows['owner_name']."</td>";
    				echo"<td>".$rows['buyer_name']."</td>";
    				echo"<td>".$rows['rooms']."</td>";
    				echo"<td>".$rows['kitchen']."</td>";
    				echo"<td>".$rows['washrooms']."</td>";
    				echo"<td>".$rows['garage']."</td>";
            echo"<td><img src='images/$rows[filename]' style='height:50px;width:50px;' alt='No pic' /></td>";
    				echo"<td><a class='btn btncrud' href=updateform.php?id=".$rows['id'].">Update </a></td>";
    				echo"<td><a class='btn btncrud' href=deletedata.php?id=".$rows['id'].">Delete </a></td>";
    				// echo"<td><a class='btn btncrud' href=insertform.php>Add </a></td>";
    				echo"</tr>";
	         }
		   ?>    
          
         </tbody> 
       </table>
      </div>
  </div>      
<?php
  include_once('footeradmin.php')
?>
<?php
}
?>
