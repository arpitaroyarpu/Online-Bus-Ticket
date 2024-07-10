<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" integrity="sha512-doJrC/ocU8VGVRx3O9981+2aYUn3fuWVWvqLi1U+tA2MWVzsw+NVKq1PrENF03M+TYBP92PnYUlXFH1ZW0FpLw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@500&display=swap" rel="stylesheet">
    <title>About</title>
    <style>
        html {
            box-sizing: border-box;
        }

        *,
        *:before,
        *:after {
            box-sizing: inherit;
        }

        .column {
            float: left;
            width: 33.3%;
            margin-bottom: 16px;
            padding: 0 8px;
        }

        .about_card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            margin: 8px;
        }

        .about-section {
            padding: 70px;
            text-align: center;
            background-color: #474e5d;
            color: white;
            background-image: url(images/ca-1.jpg);
        }

        .container {
            padding: 0 16px;
        }

        .container::after,
        .row::after {
            content: "";
            clear: both;
            display: table;
        }

        .title {
            color: grey;
        }

        .button {
            border: none;
            outline: 0;
            display: inline-block;
            padding: 8px;
            color: white;
            background-color: #000;
            text-align: center;
            cursor: pointer;
            width: 100%;
        }

        .button:hover {
            background-color: blueviolet;
        }

        @media screen and (max-width: 650px) {
            .column {
                width: 100%;
                display: block;
            }
        }
    </style>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="home.php"><Span>BD TICKET ZONE</Span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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


    <section class="my-5 py-5">
        <div class="about-section">
            <h1>Helpline</h1>
            <p>Welcome to BD Ticket Zone.</p>
            <p>Are you facing any problem? Need any help? Wanna add your bus to our website? Please contact with our
                Admin and Developer,they will fix it as soon as possible.</p>
        </div>

        <h2 style="text-align:center " class="my-5 py-5">Our Team</h2>
        <div class="row">
            <div class="column">
                <div class="about_card">
                    <img src="images/dev-1.jpg" alt="Jane" style="width:100%">
                    <div class="container">
                        <h2 class="mt-3">Moksudul Islam Rifat</h2>
                        <p class="title">Admin and Developer</p>
                        <p>For add your bus contact with Admin and developr of our website Moksudul Islam Rifat </p>
                        <p>Rifat9503@gmail.com</p>

                    </div>
                </div>
            </div>

            <div class="column">
                <div class="about_card">
                    <img src="images/dev-2.jpg" alt="Mike" style="width:100%">
                    <div class="container">
                        <h2>Shahria Abedin Jahin</h2>
                        <p class="title">Developer</p>
                        <p>If you face any booking related problem contact with our Developer Shahria Abedin Jahin.</p>
                        <p>sajahin05@gmail.com</p>

                    </div>
                </div>
            </div>

            <div class="column">
                <div class="about_card">
                    <img src="images/dev-3.jpg" alt="John" style="width:100%">
                    <div class="container">
                        <h2>Shamiha Asrafi Laskar</h2>
                        <p class="title">Developer</p>
                        <p>For payment related any Problem contact with our Developer Shamiha Asrafi Laskar.</p>
                        <p>shamiha221@gmail.com</p>

                    </div>
                </div>
            </div>
        </div>
    </section>


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

</body>

</html>