<?php
include_once "../back_inf/header.php";
include "../database/db.php";
$id = $_REQUEST['id'];
$query = "SELECT * FROM banner WHERE id = '$id'";
$result = mysqli_query($connected, $query);
$banners = mysqli_fetch_assoc($result);
// print_r($banners);
?>

<div class="container-fluid">
  <form action="../control/updateBanner.php" method="POST" enctype="multipart/form-data">
  <input type="hidden" name="id" value="<?= $banners['id'] ?>"> 
<div class="card">
    <div class="card-header">Update banner</div>
    <div class="card-body">
        <input value="<?= $banners['titel']?>" name="titel" type="text" class="form-control my-2" placeholder="Titel">
        <textarea name="details" class="form-control my-3" placeholder="Details"><?= $banners['details']?></textarea>

        <div class="row">
            <input value="<?= $banners['cta_titel']?>" name="cta_titel" placeholder="Cta titel" type="text" class="form-control my-2 col-lg-4">
            <input value="<?= $banners['cta_link']?>" name="cta_link" placeholder="cta link " type="text" class="form-control my-2 col-lg-4">
            <input value="<?= $banners['Video_link']?>" name="Video_link" placeholder="Video link" type="text" class="form-control my-2 col-lg-4">
        </div>
    <input type="file" name="image" id="" class="form-control my-2">

    <button class="btn btn-primary mt-4">Update</button>

    </div>
</div>

  </form>  

</div>




<?php
include_once "../back_inf/footer.php";
?>