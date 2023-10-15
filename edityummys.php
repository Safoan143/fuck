<?php
include_once "../back_inf/header.php";
include "../database/db.php";
$id = $_REQUEST['id'];
$query = "SELECT * FROM yummys WHERE id = '$id'";
$result = mysqli_query($connected, $query);
$yummys = mysqli_fetch_assoc($result);


?>




<div class="container-fluid">
  <form action="../control/updateyummy.php" method="POST" enctype="multipart/form-data">
  <input type="hidden" name="id" value="<?= $yummys['id'] ?>"> 
<div class="card">
    <div class="card-header">Edit Yummys</div>
    <div class="card-body">
        <input  value="<?= $yummys['titel']?>" name="titel" type="text" class="form-control my-2" placeholder="Titel">
        

        <div class="row">
          <textarea name="detail" class="form-control my-3" placeholder="Details"><?= $yummys['detail']?></textarea>
          <input  value="<?= $yummys['button']?>" type="text" class="form-control my-2 col-lg-2" style="background-color: yellow; color:aliceblue;" name="btn" placeholder="learn more">
        </div>
   

    <button class="btn btn-primary mt-4">Submit About</button>

    </div>
</div>

  </form>  

</div>




<?php
include_once "../back_inf/footer.php";
?>



<?php
include_once "../back_inf/footer.php";
?>


