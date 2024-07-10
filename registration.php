<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


include "includes/db.php";
include "includes/header.php";
include "includes/navigation.php";

require 'vendor/autoload.php';
$msg = "";
if (isset($_POST['register'])) {
  //echo "registered";
  $username = $_POST['username'];
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];
  $phone_no = $_POST['phone_no'];
  $password = $_POST['password'];
  $confirm_password = $_POST['con_password'];
  $image = $_FILES['image']['name'];
  $tmp_image = $_FILES['image']['tmp_name'];
  $code = bin2hex(random_bytes(16));

  move_uploaded_file($tmp_image, "images/$image");
  if ($image == "") {
    $image = "user_default.jpg";
  }

  // Regex for validation
  $_email_pattern1 = "/^[a-z0-9](\.?[a-z0-9]){5,}@g(oogle)?mail\.com$/";
  $_password_pattern = "/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/";

  if ($username == "" || $firstname == "" || $lastname == "" || $email == "" || $phone_no == "" || $image == "" || $password == "" || $confirm_password == "") {
    # code...
    echo "**ALL FIELDS MANDATORY";
  } else if (mysqli_num_rows(mysqli_query($connection, "SELECT * FROM users WHERE user_email='{$email}'")) > 0) {
    $msg = "<div class='alert alert-danger'>{$email} - This email address has been already exists.</div>";
  } else if (!preg_match($_email_pattern1, $email)) {
    $msg = "<div class='alert alert-danger'>{$email} - Invalid Email.</div>";
  } else if (!preg_match($_password_pattern, $password)) {
    $msg = "<div class='alert alert-danger'>Invalid Password.</div>";
  } elseif (strlen($phone_no) != 11) {
    # code...
    echo "**PhoneNo Must Contain Of 10 bits";
  } else {

    $query = "INSERT INTO users (username, user_password, user_firstname, user_lastname, user_email, user_phoneno, user_role, user_image, code) VALUES('$username', '$password', '$firstname', '$lastname', '$email', '$phone_no', 'subscriber', '$image', '$code') ";

    $register_user = mysqli_query($connection, $query);

    if ($register_user) {
      echo "<div style='display: none;'>";
      $mail = new PHPMailer(true);

      try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   =  'rifat9503@gmail.com';                     //SMTP username
        $mail->Password   = 'znjvtzjdknvyorpm';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('rifat9503@gmail.com');
        $mail->addAddress($email);

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'BD TICKET ZONE';
        $mail->Body    = 'Here is the verification link <b><a href="http://localhost/bdticketzone/index.php?verification=' . $code . '">http://localhost/bdticketzone/index.php?verification=' . $code . '</a></b>';

        $mail->send();
        echo 'Message has been sent';
      } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
      }
      echo "</div>";
      $msg = "<div class='alert alert-info'>We've send a verification link on your email address.</div>";
    }
  }
}


?>

<!-- Page Content -->
<!-- <div class="container jumbotron" style="width: 45%; border-radius: 15px"> -->

<div class="container">
  <div class="row">
    <div class="col-lg-6">
      <img src="images/bus_regis.png" style="margin-top: 30%;">
    </div>
    <div class="col-lg-6">


      <h2 style="margin-left: 40%;">Registration</h2>
      <?php echo $msg; ?>
      <form action="" method="post" enctype="multipart/form-data">

        <div class="form-group">
          <label for="email">Username:</label>
          <input type="text" class="form-control" id="email" placeholder="Enter Username" name="username">
        </div>

        <div class="form-group">
          <label for="email">Firstname:</label>
          <input type="text" class="form-control" id="email" placeholder="Enter Firstname" name="firstname">
        </div>

        <div class="form-group">
          <label for="email">Lastname:</label>
          <input type="text" class="form-control" id="email" placeholder="Enter Lastname" name="lastname">
        </div>

        <div class="form-group">
          <label for="bus-image">UserImage</label>
          <input type="file" name="image">
        </div>

        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
        </div>

        <div class="form-group">
          <label for="pwd">Phone No:</label>
          <input type="text" class="form-control" id="pwd" placeholder="Enter password" name="phone_no">
        </div>

        <div class="form-group">
          <label for="pwd">Password:</label>
          <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
        </div>
        <div class="form-group">
          <label for="pwd">Confirm Password:</label>
          <input type="password" class="form-control" id="pwd" placeholder="Enter Confirm password" name="con_password">
        </div>

        <button type="submit" class="btn btn-primary" name="register" style="margin-left: 45%; margin-top: 20px;">Register</button>
      </form>


    </div>
  </div>

</div>
<hr>

<?php include "includes/footer.php"; ?>