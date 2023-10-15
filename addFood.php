<?php
include_once "../back_inf/header.php";
?>

<div class="container-fluid">
  <form action="../control/storeFood.php" method="POST" enctype="multipart/form-data">

<div class="card">
    <div class="card-header">Food Section</div>
    <div class="card-body">
    
        <input name="titel" type="text" class="form-control my-2" placeholder="Titel">
   
        <button class="btn btn-primary mt-4">Submit</button>

    </div>
</div>

  </form>  

</div>

<?php
include_once "../back_inf/footer.php";
?>

