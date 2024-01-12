<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Home | Registration and Login System </title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.php">MGM's Hostel</a>
        <!-- Sidebar Toggle-->

        <!-- Navbar Search-->

    </nav>
    <div id="layoutSidenav">

        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <center>
                        <h1 class="mt-4"> Book Hostel</h1>
                    </center>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>

                    </ol>
                    <div class="row">
                        <div class="col-xl-4 col-md-6">
                            <div class="card bg-primary text-white mb-4">
                                <center><div class="card-body">Not Registers Yet</div></center>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                   <a class="small text-white stretched-link ml-8 p-2" href="signup.php">Signup Here</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="card bg-warning text-white mb-4">
                           <center> <div class="card-body">Already Registered</div></center>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                              <a class="small text-white stretched-link ml-8 p-2"  href="login.php">Login Here</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-md-6">
                            <div class="card bg-danger text-white mb-4">
                                <center><div class="card-body">Admin Panel</div></center>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                   <a class="small text-white stretched-link ml-8 p-2"  href="admin">Login Here</a>

                                </div>
                            </div>
                        </div>

                    </div>
                    <div style="height: 80vh"></div>

                </div>
            </main>
            <?php include_once('includes/footer.php'); ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</body>

</html>