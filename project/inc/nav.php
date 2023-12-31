<nav class="navbar navbar-expand-lg navbar-expand-md bg-blue sticky-top">
    <div class="container">
        <div class="navbar-brand">
            <a class="fw-bold text-white m-0 text-decoration-none h3" href="./index.php">VCare</a>
        </div>
        <button class="navbar-toggler btn-outline-light border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <div class="d-flex gap-3 flex-wrap justify-content-center" role="group">
                <a type="button" class="btn btn-outline-light navigation--button" href="./index.php">Home</a>
                <a type="button" class="btn btn-outline-light navigation--button" href="./majors.php">Majors</a>
                <a type="button" class="btn btn-outline-light navigation--button" href="./doctors.php">Doctors</a>
                <a type="button" class="btn btn-outline-light navigation--button" href="../views/dashboard/index.php">Dashboard</a>
                <?php if (!isset($_SESSION['auth'])) { ?>
                    <a type="button" class="btn btn-outline-light navigation--button" href="./login.php">login</a>
                <?php } ?>
                <?php if (isset($_SESSION['auth'])) { ?>
                    <a type="button" class="btn btn-outline-light navigation--button" href="./logout.php">logout</a>
                <?php } ?>
            </div>
        </div>
    </div>
</nav>