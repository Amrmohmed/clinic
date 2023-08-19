<?php include("../inc/header.php")  ?>
<?php include("../inc/nav.php")  ?>
<?php include("../core/database.php")  ?>

<?php

$success = '';
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    $sql = " INSERT INTO booking (name , phone , email) VALUES ('$name','$phone','$email')";
    $data = insert($sql);
    if ($data == true) {
        $success = "Your completed booking";
    }

    header("location: ../views/booking.php");
}

?>


<div class="container">
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="fw-bold my-4 h4">
        <ol class="breadcrumb justify-content-center">
            <li class="breadcrumb-item"><a class="text-decoration-none" href="../index.html">Home</a></li>
            <li class="breadcrumb-item"><a class="text-decoration-none" href="./index.html">doctors</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">doctor name</li>
        </ol>
    </nav>
    <div class="d-flex flex-column gap-3 details-card doctor-details">
        <div class="details d-flex gap-2 align-items-center">
            <img src="../../assets/images/major.jpg" alt="doctor" class="img-fluid rounded-circle" height="150" width="150">
            <div class="details-info d-flex flex-column gap-3 ">
                <h4 class="card-title fw-bold">Doctor name</h4>
                <div class="d-flex gap-3 align-bottom">
                    <ul class="rating">
                        <li class="star"></li>
                        <li class="star"></li>
                        <li class="star"></li>
                        <li class="star"></li>
                        <li class="star"></li>
                    </ul>
                    <a href="#" class="align-baseline">submit rating</a>
                </div>
                <h6 class="card-title fw-bold">doctor major and more info about the doctor in summary</h6>
            </div>
        </div>
        <hr />
        <?php if ($success != '') { ?>
            <h4 class="alert alert-success col text-center"><?php echo $success;  ?></h4>
        <?php } ?>
        <form class="form" method="POST" action="booking.php">
            <div class="form-items">
                <div class="mb-3">
                    <label class="form-label required-label" for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label class="form-label required-label" for="phone">Phone</label>
                    <input type="tel" class="form-control" id="phone" name="phone" required>
                </div>
                <div class="mb-3">
                    <label class="form-label required-label" for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Confirm Booking</button>
            <?php unset($success) ?>
        </form>

    </div>
</div>




<?php include("../inc/footer.php")  ?>