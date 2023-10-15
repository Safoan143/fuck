<?php
include_once "../back_inf/header.php";
?>

<div class="container-fluid">
  <form action="../control/storeAbout.php" method="POST" enctype="multipart/form-data">

<div class="card">
    <div class="card-header">About Section</div>
    <div class="card-body">
        <input name="titel" type="text" class="form-control my-2" placeholder="Titel">
        <input type="file" name="image" id="" class="form-control my-2">

        <div class="row">
          <textarea name="details" id="summernote" class="form-control my-3" placeholder="Details"></textarea>
            <input name="Video_link" placeholder="Video link" type="text" class="form-control my-2 col-lg-12">
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


