<?php include('../dashboard/inc/header.php') ?>
<?php include('../dashboard/inc/nav.php') ?>

<div class="container p-3">
    <h2>New Major</h2>
    <hr>
    <form class="" method="POST" action="create_doctor.php">
        <div class="form-row">
            <div class="form-group col-md-6 p-2">
                <label for="inputEmail4 ">Name</label>
                <input type="text" class="form-control" name="name">
                <div class="form-group col-md-6 p-2">
                    <label for="inputPassword4 ">image</label>
                    <input type="file" class="form-control" id="inputPassword4" placeholder="Password" name="image">
                </div>
                <button type="submit" class="btn btn-success col-4 p-2" name="submit">Add Major</button>
            </div>
        </div>



        <?php include('../dashboard/inc/footer.php') ?>