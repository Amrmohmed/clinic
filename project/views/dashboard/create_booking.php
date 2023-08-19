<?php include('../dashboard/inc/header.php') ?>
<?php include('../dashboard/inc/nav.php') ?>
<?php
$conn = mysqli_connect('localhost', 'root', '', 'clinic');

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $doctor_id = $_POST['doctor_id'];

    $sql = " INSERT INTO booking(name , email , phone , doctor_id ) VALUES ('$name','$email','$phone' , '$doctor_id' )";
    $data = mysqli_query($conn, $sql);
}
$sql = 'SELECT * FROM booking';
$data = mysqli_query($conn, $sql);
?>

<div class="container p-3">
    <h2>New Booking</h2>
    <hr>
    <form class="" method="POST" action="create_booking.php">
        <div class="form-row">
            <div class="form-group col-md-6 p-2">
                <label for="inputEmail4 ">Name</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="form-group col-md-6 p-2">
                <label for="inputPassword4 ">Email</label>
                <input type="text" class="form-control" id="inputPassword4" name="email">
            </div>
        </div>
        <div class="form-group col-md-6 p-2">
            <label for="inputPassword4 ">Phone</label>
            <input type="phone" class="form-control" id="inputPassword4" name="phone">
        </div>
        <div class="form-group col-md-6 p-2  ">
            <label for="inputState4">The Doctor</label>
            <select id="inputState" class="form-control" name="doctor_id">
                <option selected>Choose...</option>
                <?php while ($row = mysqli_fetch_assoc($data)) : ?>
                    <option value="<?php echo $row['id'] ?>"> <?php echo $row['name'] ?></option>
                <?php endwhile ?>
            </select>
        </div>
        <button type="submit" class="btn btn-success col-4 p-2" name="submit">Add Booking</button>
</div>
</div>


<?php include('inc/footer.php') ?>