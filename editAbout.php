<?php
include_once "../back_inf/header.php";
include "../database/db.php";
$id = $_REQUEST['id'];
$query = "SELECT * FROM about WHERE id = '$id'";
$result = mysqli_query($connected, $query);
$abouts = mysqli_fetch_assoc($result);
?>

<div class="container-fluid">
  <form action="../control/UpdateAbout.php" method="POST" enctype="multipart/form-data">
  <input type="hidden" name="id" value="<?= $abouts['id'] ?>"> 
<div class="card">
    <div class="card-header">Edit About</div>
    <div class="card-body">
        <input value="<?= $abouts['titel']?>" name="titel" type="text" class="form-control my-2" placeholder="Titel">
        <input  type="file" name="image" id="" class="form-control my-2">

        <div class="row">
          <textarea name="details" id="summernote" class="form-control my-3" placeholder="Details"><?= $abouts['titel']?></textarea>
            <input value="<?= $abouts['Video_link']?>" name="Video_link" placeholder="Video link" type="text" class="form-control my-2 col-lg-12">
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

