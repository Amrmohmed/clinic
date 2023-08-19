<?php include("../core/database.php")  ?>

<?php

$sql = 'SELECT * FROM major';

$data = getAll($sql);







?>
<?php include("../inc/header.php")  ?>
<?php include("../inc/nav.php")  ?>




<div class="page-wrapper">
    <div class="container">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="fw-bold my-4 h4">
            <ol class="breadcrumb justify-content-center">
            </ol>
        </nav>
        <div class="container">
            <h2 class="h1 fw-bold text-center my-4">Majors</h2>
            <div class="d-flex flex-wrap gap-4 justify-content-center">
                <?php foreach ($data as  $val) { ?>
                    <div class="card p-2" style="width: 15rem;">
                        <img src="../../assets/images/<?php echo $val['image'] ?>" class="" alt="major">
                        <div class="card-body d-flex flex-column gap-1 justify-content-center">
                            <h4 class="card-title fw-bold text-center"><?php echo $val['title'] ?></h4>
                            <a href="./doctors.php?id=<?php echo $val['id'] ?>" class="btn btn-outline-primary card-button">Browse Doctors</a>
                        </div>
                    </div>
                <?php }; ?>


                <nav class="mt-5" aria-label="navigation">
                    <ul class="pagination justify-content-center">
                        <li class="page-item">
                            <a class="page-link page-prev" href="#" aria-label="Previous">
                                <span aria-hidden="true">
                                    < </span>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link page-next" href="#" aria-label="Next">
                                <span aria-hidden="true"> > </span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>





        <?php include("../inc/footer.php")  ?>