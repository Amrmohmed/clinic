<?php include("../core/database.php")  ?>
<?php include("../inc/header.php")  ?>

<?php


// if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {

//     $name = $_POST['name'];
//     $phone = $_POST['phone'];
//     $email = $_POST['email'];
//     $password = $_POST['password'];

//     $sql = "INSERT INTO users(name, phone, email , password) VALUES('$name', '$phone', '$email' ,'$password')";
//     $data = insert($sql);
//     header("Location: ../views/index.php");
// }

// var_dump($_SESSION['errors']);


?>



<?php include("../core/validation.php")  ?>
<?php include("../inc/nav.php")  ?>




<div class="page-wrapper">

    <div class="container">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="fw-bold my-4 h4">
            <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a class="text-decoration-none" href="./index.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">login</li>
            </ol>
        </nav>
        <div class="d-flex flex-column gap-3 account-form mx-auto mt-5">

            <?php
            if (isset($_SESSION['errors'])) :
                foreach ($_SESSION['errors'] as $error) :  ?>
                    <div class=" alert alert-danger text-center">
                        <?php echo $error; ?>
                    </div>

            <?php endforeach;
                unset($_SESSION['errors']);
            endif;
            ?>
            <form class="form" action="register.php" method="POST">
                <div class="form-items">
                    <div class="mb-3">
                        <label class="form-label required-label" for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label required-label" for="phone">Phone</label>
                        <input type="tel" class="form-control" id="phone" name="phone">
                    </div>
                    <div class="mb-3">
                        <label class="form-label required-label" for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="mb-3">
                        <label class="form-label required-label" for="password">password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Create account</button>
            </form>
            <div class="d-flex justify-content-center gap-2">
                <span>already have an account?</span><a class="link" href="./login.php"> login</a>
            </div>
        </div>
        <?php unset($_SESSION['error']) ?>
    </div>



    <?php include("../inc/footer.php")  ?>