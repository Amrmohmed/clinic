<?php include('../dashboard/inc/header.php') ?>

<?php include('../dashboard/inc/nav.php') ?>

<?php
$conn = mysqli_connect("localhost", "root", "", "clinic");
if (isset($_GET['id'])) {
    $sql = "SELECT * FROM doctors WHERE major_id = " . $_GET['id'];
} else {
    $sql = "SELECT * FROM doctors";
}
$data = mysqli_query($conn, $sql);
$result = mysqli_fetch_assoc($data);

?>
<div class="container p-3">
    <a href="create_doctor.php" type="button" class="btn btn-success col-4 p-2 ">Add New Doctor</a>
</div>
<div class="doctors-grid">
    <div class="d-flex flex-wrap gap-4 justify-content-center">

        <?php foreach ($data as $val) { ?>
            <div class="card p-2 " style="width: 18rem;">
                <img src="../dashboard/assets/images/<?php echo $val['image'] ?>" class="" alt="major">
                <div class="card-body d-flex flex-column gap-1 ">
                    <h4 class="card-title fw-bold text-center"><?php echo $val['name'] ?></h4>
                    <h6 class="card-title fw-bold text-center"><?php echo $val['major_id'] ?></h6>
                    <a href="" type="button" class="btn btn-warning">Edit</a>
                    <a href="" type="button" class="btn btn-danger">Delete</a>
                </div>
            </div>
        <?php } ?>


    </div>
</div>
</div>

<?php include('../dashboard/inc/footer.php') ?>