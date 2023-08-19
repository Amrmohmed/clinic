<?php include('../dashboard/inc/header.php') ?>

<?php include('../dashboard/inc/nav.php') ?>

<?php
$conn = mysqli_connect("localhost", "root", "", "clinic");


$sql = "SELECT *  FROM booking";
$data = mysqli_query($conn, $sql);



?>
<div class="container p-3">
    <a href="create_booking.php" type="button" class="btn btn-success col-4 p-2 ">Add New Booking</a>
</div>
<div class="container ">

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            <?php while ($row = mysqli_fetch_assoc($data)) { ?>
                <tr>
                    <th scope="row"><?php echo $row['id'] ?></th>
                    <td><?php echo $row['name'] ?></td>
                    <td><?php echo $row['email'] ?></td>
                    <td><?php echo $row['phone'] ?></td>
                    <td>
                        <a href="" type="button" class="btn btn-warning">Edit</a>
                        <a href="" type="button" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>


<?php include('../dashboard/inc/footer.php') ?>