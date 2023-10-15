<?php
include_once "../back_inf/header.php";
?>

<div class="container-fluid">
  <form action="../control/storework.php" method="POST" enctype="multipart/form-data">

<div class="card">
    <div class="card-header">Works Section</div>
    <div class="card-body">
        
        <input  name="clients" type="text" class="form-control my-2 col-lg-2 " placeholder="clients">
        <input  name="projects" type="text" class="form-control my-2 col-lg-2" placeholder="projects">
        <input  name="supports" type="text" class="form-control my-2 col-lg-2" placeholder="supports">
        <input  name="workers" type="text" class="form-control my-2 col-lg-2" placeholder="workers">

       
   

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


