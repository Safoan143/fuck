<?php
include_once "../back_inf/header.php";
?>

<div class="container-fluid">
  <form action="../control/storeBox.php" method="POST" enctype="multipart/form-data">

<div class="card">
    <div class="card-header">Box Section</div>
    <div class="card-body">
    
        <input name="titel_one" type="text" class="form-control my-2" placeholder="Titel">
          <textarea name="detail_one"  class="form-control my-3" placeholder="Details"></textarea>
      
        <input name="titel_two" type="text" class="form-control my-2" placeholder="Titel">
          <textarea name="detail_two"  class="form-control my-3" placeholder="Details"></textarea>
      
        <input name="titel_three" type="text" class="form-control my-2" placeholder="Titel">
          <textarea name="detail_three"  class="form-control my-3" placeholder="Details"></textarea>

        
    <button class="btn btn-primary mt-4">Submit</button>

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


