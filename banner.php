<?php
include_once "../back_inf/header.php";
?>

<div class="container-fluid">
  <form action="../control/storeBanner.php" method="POST" enctype="multipart/form-data">

<div class="card">
    <div class="card-header">Add banner</div>
    <div class="card-body">
        <input name="titel" type="text" class="form-control my-2" placeholder="Titel">
        <textarea name="details" class="form-control my-3" placeholder="Details"></textarea>

        <div class="row">
            <input name="cta_titel" placeholder="Cta titel" type="text" class="form-control my-2 col-lg-4">
            <input name="cta_link" placeholder="cta link " type="text" class="form-control my-2 col-lg-4">
            <input name="Video_link" placeholder="Video link" type="text" class="form-control my-2 col-lg-4">
        </div>
    <input type="file" name="image" id="" class="form-control my-2">

    <button class="btn btn-primary mt-4">Submit Banner</button>

    </div>
</div>

  </form>  

</div>




<?php
include_once "../back_inf/footer.php";
?>