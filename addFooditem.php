<?php
include_once "../back_inf/header.php";
include "../database/db.php";
$query = "SELECT * FROM items";
$res = mysqli_query($connected,$query);

$items = mysqli_fetch_all($res, 1);
// print_r($items);
// exit;
?>

<div class="container-fluid">
  <form action="../control/storeItems.php" method="POST" enctype="multipart/form-data">

<div class="card">
    <div class="card-header">Food Items</div>
    <div class="card-body">
    
        <input name="titel" type="text" class="form-control my-2" placeholder="Titel">
          <textarea name="details"  class="form-control my-3" placeholder="Details"></textarea>

          <div class="row mx-0 align-items-center">
          <input name="price" type="text" class="form-control my-2 col" placeholder="prices">
          <select name="item" id=""class="form-control col">
            <option value=""></option>
            <?php
              foreach($items as $item){ ?>
               
              <option value="<?=$item['id']?>"><?=$item['titel']?></option>
              <?php
              }
            ?>
          </select>

          </div>

            <input name="food_imgs" type="file" class="form-control my-2" >
     <button class="btn btn-primary mt-4">Submit Foods</button>

    </div>
</div>

  </form>  

</div>


<?php
include_once "../back_inf/footer.php";
?>
