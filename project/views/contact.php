<?php include("../inc/header.php")  ?>
<?php include("../inc/nav.php")  ?>
<?php

$conn = mysqli_connect('localhost', 'root', '', 'clinic');
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $sql = " INSERT INTO contact_us(name , email , phone ,subject ,message) VALUES ('$name','$email','$phone' , '$subject' ,'$message')";
    $data = mysqli_query($conn, $sql);
}



?>

<div class="page-wrapper">
    <div class="container">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="fw-bold my-4 h4">
            <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a class="text-decoration-none" href="./index.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">contact</li>
            </ol>
        </nav>
        <div class="d-flex flex-column gap-3 account-form mx-auto mt-5">
            <form class="form" action="contact.php" method="POST">
                <div class="form-items">
                    <div class="mb-3">
                        <label class="form-label required-label" for="name">Name</label>
                        <input type="text" class="form-control" id="name" required name="name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label required-label" for="phone">Phone</label>
                        <input type="tel" class="form-control" id="phone" required name="phone">
                    </div>
                    <div class="mb-3">
                        <label class="form-label required-label" for="email">Email</label>
                        <input type="email" class="form-control" id="email" required name="email">
                    </div>
                    <div class="mb-3">
                        <label class="form-label required-label" for="subject">subject</label>
                        <input type="text" class="form-control" id="subject" required name="subject">
                    </div>
                    <div class="mb-3">
                        <label class="form-label required-label" for="message">message</label>
                        <textarea class="form-control" required name="message"></textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Send Message</button>
            </form>
        </div>

    </div>


    <?php include("../inc/footer.php")  ?>