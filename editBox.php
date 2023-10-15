<?php
include_once "../back_inf/header.php";
include "../database/db.php";
$id = $_REQUEST['id'];
$query = "SELECT * FROM boxes WHERE id = '$id'";
$result = mysqli_query($connected, $query);
$boxes = mysqli_fetch_assoc($result);

?>

<div class="container-fluid">
  <form action="../control/updateBox.php" method="POST" enctype="multipart/form-data">
  <input type="hidden" name="id" value="<?= $boxes ['id'] ?>"> 
<div class="card">
    <div class="card-header">Edit Section</div>
    <div class="card-body">
    
        <input value="<?=$boxes['titel_one']?>" name="titel_one" type="text" class="form-control my-2" placeholder="Titel">
          <textarea name="detail_one"  class="form-control my-3" placeholder="Details"><?=$boxes['detail_one']?></textarea>
      
        <input value="<?=$boxes['titel_two']?>" name="titel_two" type="text" class="form-control my-2" placeholder="Titel">
          <textarea name="detail_two"  class="form-control my-3" placeholder="Details"><?=$boxes['detail_two']?></textarea>
      
        <input value="<?=$boxes['titel_three']?>" name="titel_three" type="text" class="form-control my-2" placeholder="Titel">
          <textarea name="detail_three"  class="form-control my-3" placeholder="Details"><?=$boxes['detail_three']?></textarea>

        
    <button class="btn btn-primary mt-4">Submit</button>

    </div>
</div>

  </form>  

</div>
