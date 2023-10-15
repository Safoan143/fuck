<?php
include_once "../back_inf/header.php";
include "../database/db.php";
$id = $_REQUEST['id'];
$query = "SELECT * FROM workss WHERE id = '$id'";
$result = mysqli_query($connected, $query);
$works = mysqli_fetch_assoc($result);
?>

<div class="container-fluid">
  <form action="../control/updatework.php" method="POST" enctype="multipart/form-data">
  <input type="hidden" name="id" value="<?= $works ['id'] ?>"> 
<div class="card">
    <div class="card-header">Works Section</div>
    <div class="card-body">
        
        <input value="<?=$works['clients']?>"  name="clients" type="text" class="form-control my-2 col-lg-2 " placeholder="clients">
        <input  value="<?=$works['projects']?>" name="projects" type="text" class="form-control my-2 col-lg-2" placeholder="projects">
        <input  value="<?=$works['supports']?>" name="supports" type="text" class="form-control my-2 col-lg-2" placeholder="supports">
        <input  value="<?=$works['workers']?>" name="workers" type="text" class="form-control my-2 col-lg-2" placeholder="workers">

       
   

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


