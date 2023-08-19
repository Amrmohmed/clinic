<?php include('inc/header.php') ?>
<?php include('inc/nav.php') ?>

<?php

$conn = mysqli_connect('localhost', 'root', '', 'clinic');
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $city = $_POST['city'];
    $image = $_POST['image'];
    $major_id = $_POST['major_id'];

    $sql = " INSERT INTO doctors(name , city , image ,major_id ) VALUES ('$name','$city','$image' , '$major_id' )";
    $data = mysqli_query($conn, $sql);
}

$sql = 'SELECT * FROM major';

$data = mysqli_query($conn, $sql);

?>

<div class="container p-3">
    <h2>New Doctor</h2>
    <hr>
    <form class="" method="POST" action="create_doctor.php">
        <div class="form-row">
            <div class="form-group col-md-6 p-2">
                <label for="inputEmail4 ">Name</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="form-group col-md-6 p-2">
                <label for="inputPassword4 ">City</label>
                <input type="text" class="form-control" id="inputPassword4" name="city">
            </div>
        </div>
        <div class="form-group col-md-6 p-2">
            <label for="inputPassword4 ">image</label>
            <input type="file" class="form-control" id="inputPassword4" placeholder="Password" name="image">
        </div>
        <div class="form-group col-md-6 p-2  ">
            <label for="inputState4">The Major</label>
            <select id="inputState" class="form-control" name="major_id">
                <option selected>Choose...</option>
                <?php while ($row = mysqli_fetch_assoc($data)) : ?>
                    <option value="<?php echo $row['id'] ?>"> <?php echo $row['title'] ?></option>
                <?php endwhile ?>
            </select>
        </div>
        <button type="submit" class="btn btn-success col-4 p-2" name="submit">Add Doctor</button>
</div>
</div>


<?php include('inc/footer.php') ?>