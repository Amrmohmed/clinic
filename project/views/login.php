<?php include("../core/database.php")  ?>

<?php include("../core/loginAuth.php")  ?>

<?php include("../inc/header.php")  ?>
<?php include("../inc/nav.php")  ?>




<div class="page-wrapper">
    <div class="container">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="fw-bold my-4 h4">
            <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a class="text-decoration-none" href="./index.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">login</li>
            </ol>
        </nav>
        <div class="d-flex flex-column gap-3 account-form  mx-auto mt-5">

            <?php
            if (isset($_SESSION['errors'])) :  ?>
                <div class=" alert alert-danger text-center">
                    <?php echo $_SESSION["errors"] ?>
                </div>
                <?php unset($_SESSION['errors']); ?>
            <?php endif; ?>

            <form class="form" action="../core/validat_login.php" method="POST">

                <div class="mb-3">
                    <label class="form-label required-label" for="email">Email</label>
                    <input type="email" class="form-control" id="email" required name="email">
                </div>
                <div class="mb-3">
                    <label class="form-label required-label" for="password">password</label>
                    <input type="password" class="form-control" id="password" required name="password">
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Login</button>
            </form>
            <div class="d-flex justify-content-center gap-2 flex-column flex-lg-row flex-md-row flex-sm-column">
                <span>don't have an account?</span><a class="link" href="./register.php">create account</a>
            </div>
        </div>

    </div>













    <?php include("../inc/footer.php")  ?>