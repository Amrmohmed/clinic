<?php include('../dashboard/inc/header.php') ?>

<?php include('../dashboard/inc/nav.php') ?>
<?php
$conn = mysqli_connect("localhost", "root", "", "clinic");
$sql = "SELECT * FROM major";
$data = mysqli_query($conn, $sql);
$result_u = mysqli_fetch_assoc($data);

?>

<div class="container p-3">
    <a href="create_major.php" type="button" class="btn btn-success col-4 p-2 ">Add New Major</a>
</div>
<div class="container ">
    <div class="d-flex flex-wrap gap-4 justify-content-center">
        <?php foreach ($data as  $val) { ?>
            <div class="card p-2" style="width: 15rem; ">

                <img src="../dashboard/assets/images/<?php echo $val['image'] ?>" class="" alt="major">
                <div class="card-body d-flex flex-column gap-1 justify-content-center">
                    <h4 class="card-title fw-bold text-center"><?php echo $val['title'] ?></h4>
                    <a href="./doctors.php?id=<?php echo $val['id'] ?>" class="btn btn-outline-primary card-button">Browse Doctors</a>
                    <a href="update_major.php?id=<?php echo $row['id'] ?>" type="button" class="btn btn-warning">Edit</a>
                    <a href="" type="button" class="btn btn-danger">Delete</a>
                </div>

            </div>
        <?php }; ?>



        <?php include('../dashboard/inc/footer.php') ?>