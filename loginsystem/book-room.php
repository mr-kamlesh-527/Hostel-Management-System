<?php
    session_start();
    if(!isset($_SESSION["username"])) {
        header("Location: login.php");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOSTEL</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <!-- JQ -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script> -->

    <!-- FONT -->
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
</head>

<body>
    <!-- *****************  Header start   ******************** -->
    <header class="text-gray-400 bg-gray-900 body-font">
        <div class="container w-100   mx-auto flex flex-wrap p-0 flex-col md:flex-row items-center">
            <nav class="flex lg:w-10/2 mb-1 flex-wrap items-center text-base md:ml-auto">
                <a class="mr-4 hover:text-white" href="index.php">Home</a>
                <a class="mr-4 hover:text-white" href="about.php">About-us</a>
                <!-- <a class="mr-4 hover:text-white" href="#contact">Contact-us</a> -->
                <!-- <a class="mr-4 hover:text-white" href="registration.php">Register</a>
                <a class="mr-4 hover:text-white" href="login.php">Login</a>
                <a class="mr-4 hover:text-white" href="admin.php">Admin</a> -->
            </nav>
            <a class="flex order-first lg:order-none lg:w-10/5 title-font font-medium items-center text-white lg:items-center lg:justify-center mb-2 md:mb-0">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 mt-2 bg-blue-500 rounded-full" viewBox="0 0 24 24">
                    <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
                </svg>
                <span class="ml-3 text-xl xl:block lg:hidden mt-2 ">MGM's Hostel</span>
            </a>
            </svg>
            </button>
        </div>
        </div>
    </header>
    <!-- *****************     Header end    ******************** -->

    <section class="h-100 bg-dark">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col">
                    <div class="card card-registration my-4">
                        <div class="row g-0">
                            <div class="col-xl-6 d-none d-xl-block">
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/img4.webp" alt="Sample photo" class="img-fluid" style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
                            </div>
                            <div class="col-xl-6">
                                <div class="card-body p-md-5 text-black">
                                    <h3 class="mb-5 text-uppercase">Student registration form</h3>

                                    <div class="row">
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline">
                                                <input type="text" id="form3Example1m" class="form-control form-control-lg" />
                                                <label class="form-label" for="form3Example1m">First name</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline">
                                                <input type="text" id="form3Example1n" class="form-control form-control-lg" />
                                                <label class="form-label" for="form3Example1n">Last name</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline">
                                                <input type="text" id="form3Example1m1" class="form-control form-control-lg" />
                                                <label class="form-label" for="form3Example1m1">Mother's name</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline">
                                                <input type="text" id="form3Example1n1" class="form-control form-control-lg" />
                                                <label class="form-label" for="form3Example1n1">Father's name</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="text" id="form3Example8" class="form-control form-control-lg" />
                                        <label class="form-label" for="form3Example8">Address</label>
                                    </div>

                                    <!-- <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">

                                        <h6 class="mb-0 me-4">Gender: </h6>

                                        <div class="form-check form-check-inline mb-0 me-4">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="femaleGender" value="option1" />
                                            <label class="form-check-label" for="femaleGender">Female</label>
                                        </div>

                                        <div class="form-check form-check-inline mb-0 me-4">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="maleGender" value="option2" />
                                            <label class="form-check-label" for="maleGender">Male</label>
                                        </div>

                                        <div class="form-check form-check-inline mb-0">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="otherGender" value="option3" />
                                            <label class="form-check-label" for="otherGender">Other</label>
                                        </div> -->

                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mb-4">

                                            <select class="select">
                            <option value="1">State</option>
                            <option value="2">Option 1</option>
                            <option value="3">Option 2</option>
                            <option value="4">Option 3</option>
                          </select>

                                        </div>
                                        <div class="col-md-6 mb-4">

                                            <select class="select">
                            <option value="1">City</option>
                            <option value="2">Option 1</option>
                            <option value="3">Option 2</option>
                            <option value="4">Option 3</option>
                          </select>

                                        </div>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="text" id="form3Example9" class="form-control form-control-lg" />
                                        <label class="form-label" for="form3Example9">DOB</label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="text" id="form3Example90" class="form-control form-control-lg" />
                                        <label class="form-label" for="form3Example90">Pincode</label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="text" id="form3Example99" class="form-control form-control-lg" />
                                        <label class="form-label" for="form3Example99">Course</label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="text" id="form3Example97" class="form-control form-control-lg" />
                                        <label class="form-label" for="form3Example97">Email ID</label>
                                    </div>

                                    <div class="d-flex justify-content-end pt-3">
                                        <button type="button" class="btn btn-light btn-lg">Reset all</button>
                                        <button type="button" class="btn btn-warning btn-lg ms-2" style="background-color: aqua; ">Submit form</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- footer section -->
    <footer class="bg-dark text-center text-white">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
            <!-- Section: Social media -->
            <!-- <section class="mb-4"> -->
                <!-- Facebook -->
                <!-- <a class="btn btn-outline-light btn-floating -->
                                    <!-- m-1" href="#!" role="button"><i class="fab fa-facebook-f"></i></a> -->
                <!-- Twitter -->
                <!-- <a class="btn btn-outline-light btn-floating -->
                                    <!-- m-1" href="#!" role="button"><i class="fab fa-twitter"></i></a> -->
                <!-- Google -->
                <!-- <a class="btn btn-outline-light btn-floating -->
                                    <!-- m-1" href="#!" role="button"><i class="fab fa-google"></i></a> -->
                <!-- Instagram -->
                <!-- <a class="btn btn-outline-light btn-floating -->
                                    <!-- m-1" href="#!" role="button"><i class="fab fa-instagram"></i></a> -->
                <!-- Linkedin -->
                <!-- <a class="btn btn-outline-light btn-floating -->
                                    <!-- m-1" href="#!" role="button"><i class="fab fa-linkedin-in"></i></a> -->
            <!-- </section> -->
            <!-- Section: Social media -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color:
                            rgba(0, 0, 0,
                            0.2);">
            © 2023 Copyright :
            <a class="text-white" href="#" style="text-decoration: none;">Chavan Kamlesh</a>
        </div>
        <!-- Copyright -->
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
<!-- Tailwind cdn links  -->
<script src="https://cdn.tailwindcss.com"></script>
<script src="https://use.fontawesome.com/03f8a0ebd4.js"></script>

</html>