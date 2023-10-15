<?php
include "../back_inf/header.php";
include '../database/db.php';
 $query = "SELECT * FROM workss";
 $succes = mysqli_query($connected,$query);
 $works = mysqli_fetch_all($succes,1);
 ?>
    <div class="card">
        <div class="card-header">
            <h3>All Works</h3>
        </div>
        <div class="card-body">
            <table class="table">
                <tr>
                    <th>#</th>
                    <th>clients</th>
                    <th>projects</th>
                    <th>supports</th>
                    <th>workers</th>
                    <th>Status</th>
                    <th>workers</th>
                </tr>
                <?php
                    foreach ($works as $key=>$work){
                        ?>
                        <tr>
                            <td><?=++$key?></td>
                            <td><?=$work['clients']?></td>
                            <td><?=$work['projects']?></td>
                            <td><?=$work['supports']?></td>
                            <td><?=$work['workers']?></td>
                            
                            <td>
                                <a href="../control/workStatus.php?id=<?=$work['id']?>">
                                    <span class="text-warning">
                                        <i class="<?= $work['status']==1 ? "fas" : "far" ?> fa-star"></i>
                                    </span>
                                </a>
                            </td>
                           
                            <td>
                                <a href="./editwork.php?id=<?=$work['id']?>" class="btn btn-sm btn-primary">Edit</a>
                                <a href="../control/deletework.php?id=<?=$work['id']?>" class="btn btn-sm btn-danger deleteBtn">Delete</a>
                            </td>
                        </tr>
                        <?php
                    }
                ?>
            </table>
        </div>
    </div>

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $('.deleteBtn').click(function(event){
        event.preventDefault()
            Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = $(this).attr('href');
            }
            })
    })
</script>
<?php
if(isset($_SESSION['mgs'])){?>
 <script>
    Swal.fire({
  position: 'top-end',
  icon: 'success',
  title: 'Successfully update',
  showConfirmButton: false,
  timer: 1500
})
 </script>

<?php
}

?>

<?php
include "../back_inf/footer.php";
unset($_SESSION['mgs']);
?>
