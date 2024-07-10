<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css"
        integrity="sha512-doJrC/ocU8VGVRx3O9981+2aYUn3fuWVWvqLi1U+tA2MWVzsw+NVKq1PrENF03M+TYBP92PnYUlXFH1ZW0FpLw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@500&display=swap" rel="stylesheet">

    <title>Home</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="home.php"><Span>BD TICKET ZONE</Span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="home.php">Home <span class="sr-only"></span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="about.php">Helpline</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Book Ticket</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="registration.php">SignUp</a>
                    </li>


                </ul>
            </div>
        </div>
    </nav>
    <!-- --------------Carousel--------------- -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/ca-1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <h5 class="animated bounceInRight" style="animation-delay: 1s;">BD TICKET ZONE</h5>
                    <p class="animated bounceInLeft d-none d-md-block" style="animation-delay: 2s;"> Seamless
                        Journys,Effortless Bookings.</p>
                    <p class="animated bounceInRight" style="animation-delay: 3s;"><a href="index.php">Book Tickets
                            Here</a></p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/ca-2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <h5 class="animated bounceInRight" style="animation-delay: 1s;">BD TICKET ZONE</h5>
                    <p class="animated bounceInLeft d-none d-md-block" style="animation-delay: 2s;">Seamless
                        Journys,Effortless Bookings. </p>
                    <p class="animated bounceInRight" style="animation-delay: 3s;"><a href="index.php">Book Tickets
                            Here</a></p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/ca-3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <h5 class="animated bounceInRight" style="animation-delay: 1s;">BD TICKET ZONE</h5>
                    <p class="animated bounceInLeft d-none d-md-block" style="animation-delay: 2s;">Seamless
                        Journys,Effortless Bookings.</p>
                    <p class="animated bounceInRight" style="animation-delay: 3s;"><a href="index.php">Book Tickets
                            Here</a></p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!------------------About us------------------------------>
    <section class="my-5">
        <div class="py-5">
            <h2 class="text-center">About Us</h2>
        </div>
        <div class="container-fluid ">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <img src="images/about1.jpeg" class="img-fluid aboutimg" alt="">
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <h2 class="display-5 text-center">About BD Ticket Zone </h2>
                    <p class="py-3 fs-5">Our Online Bus Ticket Booking System is a user-friendly web-based platform
                        designed to streamline and simplify the process of reserving bus tickets. With this innovative
                        solution, travelers can effortlessly plan their journeys, select preferred routes, and secure
                        tickets from the comfort of their homes.<br>
                    </p>
                    <a href="about.php" class="btn btn-success">Check About</a>
                </div>
            </div>
        </div>
    </section>
    <!-- -----------------------------Services-------------------------- -->
    <section class="my-5 ">
        <div class="py-5">
            <h2 class="text-center">Our Services</h2>
        </div>
        <div class="container-fluid">
            <div class="container cardbox">
                <div class="d-lg-flex">
                    <div class="card border-0 me-lg-4 mb-lg-2 mb-4">
                        <div class="backgroundEffect"></div>
                        <div class="pic"> <img class=""
                                src="https://images.pexels.com/photos/6307071/pexels-photo-6307071.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                alt="">

                        </div>
                        <div class="content">
                            <p class="h-1 mt-4">Book Your Bus Ticket</p>
                            <p class="text-muted mt-3">Click here for book your bus ticket and enjoy your trip.</p>
                            <div class="d-flex align-items-center justify-content-between mt-3 pb-3">
                                <a href="index.php" style="text-decoration: none;">
                                    <div class="btn btn-primary">Click Here<span class="fas fa-arrow-right"></span>
                                    </div>
                                </a>

                            </div>
                        </div>
                    </div>
                    <div class="card border-0 me-lg-4 mb-lg-2 mb-4">
                        <div class="backgroundEffect"></div>
                        <div class="pic"> <img class=""
                                src="https://images.pexels.com/photos/2266406/pexels-photo-2266406.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                alt="">

                        </div>
                        <div class="content">
                            <p class="h-1 mt-4">Contact With Admin for add Yous Bus on Website.</p>
                            <p class="text-muted mt-3">Click Here for Add your bus our team will response you very soon
                            </p>
                            <div class="d-flex align-items-center justify-content-between mt-3 pb-3">
                                <a href="contact.php" style="text-decoration: none;">
                                    <div class="btn btn-primary">Click Here<span class="fas fa-arrow-right"></span>
                                    </div>
                                </a>

                            </div>
                        </div>
                    </div>
                    <div class="card border-0 me-lg-4 mb-lg-0 mb-4">
                        <div class="backgroundEffect"></div>
                        <div class="pic"> <img class=""
                                src="https://images.pexels.com/photos/163037/london-street-phone-cabin-163037.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                alt="">

                        </div>
                        <div class="content">
                            <p class="h-1 mt-4">Need Any Help?</p>
                            <p class="text-muted mt-3">Click Here for any kind of help.Our Developer will help you as
                                soon as possible.</p>
                            <div class="d-flex align-items-center justify-content-between mt-3 pb-3">
                                <a href="about.php" style="text-decoration: none;">
                                    <div class="btn btn-primary">Click Here<span class="fas fa-arrow-right"></span>
                                    </div>
                                </a>

                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>
    <!---------------Gallery-------------------->
    <section class="my-5">
        <div class="py-5">
            <h2 class="text-center">Gallery</h2>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-12">
                    <img src="images/gal3.jpg" alt="" class="img-fluid pb-3">
                </div>
                <div class="col-lg-3 col-md-4 col-12">
                    <img src="images/gal4.jpg" alt="" class="img-fluid pb-3">
                </div>
                <div class="col-lg-3 col-md-4 col-12">
                    <img src="images/gal5.jpg" alt="" class="img-fluid pb-3">
                </div>
                <div class="col-lg-3 col-md-4 col-12">
                    <img src="images/gal2.jpg" alt="" class="img-fluid pb-3">
                </div>
                <div class="col-lg-3 col-md-4 col-12">
                    <img src="images/gal1.2.jpg" alt="" class="img-fluid pb-3">
                </div>
                <div class="col-lg-3 col-md-4 col-12">
                    <img src="images/gal6.jpg" alt="" class="img-fluid pb-3">
                </div>
                <div class="col-lg-3 col-md-4 col-12">
                    <img src="images/gal1.jpg" alt="" class="img-fluid pb-3">
                </div>
                <div class="col-lg-3 col-md-4 col-12">
                    <img src="images/gal1.2.jpg" alt="" class="img-fluid pb-3">
                </div>
            </div>
        </div>
    </section>

    <!-----------------Footer--------------------->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h2>Download Our App</h2>
                    <p>Download Our App for Android and Ios mobile phone</p>
                    <div class="app-logo">
                        <img src="images/play-store.png">
                        <img src="images/app-store.png">
                    </div>
                </div>
                <div class="footer-col-2">
                    <h2>About us</h2>
                    <ul>
                        <li><a class="decoration" href="#">Company Information</a></li>
                        <li><a class="decoration" href="#">Contact us</a></li>
                        <li><a class="decoration" href="#">Reviews</a></li>
                    </ul>
                </div>
                <div class="footer-col-3">
                    <h2>Useful Links</h2>
                    <ul>
                        <li><a class="decoration" href="#">Coupons</a></li>
                        <li> <a class="decoration" href="#">Blog Post</a></li>
                        <li> <a class="decoration" href="#">Return Policy</a></li>
                        <li> <a class="decoration" href="#">Join Affiliate</a></li>
                    </ul>
                </div>
                <div class="footer-col-4">
                    <h2>Follow Us</h2>
                    <ul>
                        <li> <a class="decoration" href="#">Facebook</a></li>
                        <li> <a class="decoration" href="#">Twitter</a></li>
                        <li> <a class="decoration" href="#">Instagram</a></li>
                        <li> <a class="decoration" href="#">YouTube</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <hr>


        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
            integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
</body>

</html>