<?php include('../dashboard/inc/header.php') ?>
<?php include('../dashboard/inc/nav.php') ?>

<?php
$conn = mysqli_connect("localhost", "root", "", "clinic");
$sql = "SELECT count(id)  FROM doctors";
$data = mysqli_query($conn, $sql);
$result = mysqli_fetch_assoc($data);
//////////////////////////////////////////
$sql = "SELECT count(id)  FROM users";
$data = mysqli_query($conn, $sql);
$result_u = mysqli_fetch_assoc($data);
/////////////////////////////////////////////
$sql = "SELECT count(id)  FROM booking";
$data = mysqli_query($conn, $sql);
$result_b = mysqli_fetch_assoc($data);
///////////////////////////////////////////////////
$sql = "SELECT count(id)  FROM major";
$data = mysqli_query($conn, $sql);
$result_m = mysqli_fetch_assoc($data);


?>
<link rel="stylesheet" href="assets/styles/pages/main.css">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/bootstrap-extended.min.css">
<link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/fonts/simple-line-icons/style.min.css">
<link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/colors.min.css">
<link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">


<div class="container d-flex justify-content-center pb-5 ">
    <div class="col-xl-3 col-sm-6 col-12">
        <div class="card">
            <div class="card-content">
                <div class="card-body">
                    <div class="media d-flex ">
                        <div class="media-body text-left">
                            <h3 class="primary"><?php echo $result_b['count(id)'] ?></h3>
                            <span>Booking</span>
                        </div>
                        <div class="align-self-center">
                            <i class="icon-pencil primary font-large-2 float-left"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 col-12">
        <div class="card">
            <div class="card-content">
                <div class="card-body">
                    <div class="media d-flex">
                        <div class="media-body text-left">
                            <h3 class="success"><?php echo $result_u['count(id)'] ?></h3>
                            <span>Users</span>
                        </div>
                        <div class="align-self-center">
                            <i class="icon-user success font-large-2 float-right"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 col-12">
        <div class="card">
            <div class="card-content">
                <div class="card-body">
                    <div class="media d-flex">
                        <div class="media-body text-left">
                            <h3 class="primary"><?php echo $result['count(id)'] ?></h3>
                            <span>Doctors</span>
                        </div>
                        <div class="align-self-center">
                            <i class="bi bi-calendar2-heart danger font-large-2 float-right "></i>
                            <svg xmlns="http://www.w3.org/2000/svg" color="#ad5049" width="50" height="50" fill="currentColor" class="bi bi-calendar2-heart" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v11a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5ZM1 3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v11a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V3Zm2 .5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h10a.5.5 0 0 0 .5-.5V4a.5.5 0 0 0-.5-.5H3Zm5 4.493c1.664-1.711 5.825 1.283 0 5.132-5.825-3.85-1.664-6.843 0-5.132Z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 col-12">
        <div class="card">
            <div class="card-content">
                <div class="card-body">
                    <div class="media d-flex">
                        <div class="media-body text-left">
                            <h3 class="success "><?php echo $result_m['count(id)'] ?></h3>
                            <span>Major</span>
                        </div>
                        <div class="align-self-center">
                            <i class="bi bi-intersect primary font-large-2 float-right "></i>
                            <svg xmlns="http://www.w3.org/2000/svg" color="#44824c" width="50" height="50" fill="currentColor" class="bi bi-intersect" viewBox="0 0 16 16">
                                <path d="M0 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v2h2a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-2H2a2 2 0 0 1-2-2V2zm5 10v2a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V6a1 1 0 0 0-1-1h-2v5a2 2 0 0 1-2 2H5zm6-8V2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h2V6a2 2 0 0 1 2-2h5z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>






<?php include('../dashboard/inc/footer.php') ?>


</html>