<?php
include_once "../back_inf/header.php";
?>

<div class="container-fluid">
  <form action="../control/storeyummy.php" method="POST" enctype="multipart/form-data">

<div class="card">
    <div class="card-header">Yummy Section</div>
    <div class="card-body">
        <input name="titel" type="text" class="form-control my-2" placeholder="Titel">
        

        <div class="row">
          <textarea name="detail" class="form-control my-3" placeholder="Details"></textarea>
          <input type="text" class="form-control my-2 col-lg-2" style="background-color: yellow; color:aliceblue;" name="btn" placeholder="learn more">
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


