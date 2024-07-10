<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';
$msg = "";

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);


if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $message = $_POST['message'];


    try {
        //Server settings
        $mail->SMTPDebug = false;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'rifat9503@gmail.com';                     //SMTP username
        $mail->Password   = 'znjvtzjdknvyorpm';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('rifat9503@gmail.com');
        $mail->addAddress($email);     //Add a recipient



        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Message recived from contact:' . $name;
        // $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
        $mail->Body = "Name: $name <br> Subject: $subject <br> Email: $email <br> Mobile: $number <br> Message: $message";

        $mail->send();
        // echo 'Message has been sent';

    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
    echo "</div>";
    $msg = "<div class='alert alert-info'> Message has been sent.</div>";
} else {
    // $msg = "<div class='alert alert-danger'>Something wrong went.</div>";
}

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <title>Contact</title>
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

    <section class="my-5 py-5">

        <div>
            <div class="contact_form_container">
                <h3 class="heading">BD Ticket Zone</h3>

                <div class="main_content">

                    <div class="left">
                        <form action=" " method="post">

                            <div class="form_input_wraper">
                                <input type="text" id="name" name="name" required>
                                <label for="name">Your Name</label>
                            </div>
                            <!-- wraper er kaj input filed re responsive kore -->
                            <div class="form_input_wraper">
                                <input type="text" id="subject" name="subject" required>
                                <label for="subject">Subject</label>
                            </div>

                            <div class="form_input_wraper">
                                <input type="text" id="email" name="email" required>
                                <label for="email">Go To Helpline and Choose a Developers Email</label>
                            </div>

                            <div class="form_input_wraper">
                                <input type="text" id="number" name="number" required>
                                <label for="number">Mobile</label>
                            </div>

                            <div class="form_input_wraper">
                                <textarea id="message" name="message" required></textarea>
                                <label for="message">Message</label>
                            </div>

                            <button type="submit" name="submit" aria-label="Submit Button" class="submit_button">
                                <i class="fa fa-angle-right"></i>
                            </button>
                        </form>
                        <?php echo $msg; ?>
                    </div>
                </div>
            </div>
    </section>

    <section>
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

    </section>



    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>