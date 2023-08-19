<?php include('inc/header.php') ?>
<?php include('inc/nav.php') ?>

<?php
$conn = mysqli_connect('localhost', 'root', '', 'clinic');
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $type = $_POST['type'];

    $sql = " INSERT INTO users(name , email , phone , password , type ) VALUES ('$name','$email','$phone' , '$password' , '$type')";
    $data = mysqli_query($conn, $sql);
}

$sql = 'SELECT * FROM users';
$data = mysqli_query($conn, $sql);

?>

<div class="container p-3">
    <h2>New User</h2>
    <hr>
    <form class="form" method="POST" action="create_user.php">
        <div class="form-row">
            <div class="form-group col-md-6 p-2">
                <label for="inputEmail4 ">Name</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="form-group col-md-6 p-2">
                <label for="inputPassword4 ">Email</label>
                <input type="text" class="form-control" name="email">
            </div>
        </div>
        <div class="form-group col-md-6 p-2">
            <label for="inputPassword4 ">Phone</label>
            <input type="text" class="form-control" name="phone">
        </div>
        <div class="form-group col-md-6 p-2">
            <label for="inputPassword4 ">Password</label>
            <input type="Password" class="form-control" name="password">
        </div>
        <div class="form-group col-md-6 p-2  ">
            <label for="inputState4">The Type</label>
            <select id="inputState" class="form-control" name="type">
                <option selected>Choose...</option>
                <?php while ($row = mysqli_fetch_assoc($data)) : ?>
                    <option value="<?php echo $row['type'] ?>"> <?php echo $row['type'] ?></option>
                <?php endwhile ?>
            </select>
        </div>
        <button type="submit" class="btn btn-success col-4 p-2" name="submit">Create User</button>
</div>
</div>



</div>
</div>


<?php include('inc/footer.php') ?>