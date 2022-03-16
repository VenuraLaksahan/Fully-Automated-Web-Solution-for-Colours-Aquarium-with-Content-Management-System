<?php

$active='Contact';
include("includes/header.php");

?>

<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_POST) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

// Load Composer's autoloader
require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'xxxxxxxxxxxxx@gmail.com';                     // SMTP username
    $mail->Password   = 'xxxxxxxxxxxxx';                               // SMTP password
    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('xxxxxxxxxxx@gmail.com', 'User Reviews');
    $mail->addAddress('xxxxxxxxxxxxxx@gmail.com', 'FOS');     // Add a recipient
    //$mail->addAddress('ellen@example.com');               // Name is optional
   // $mail->addReplyTo('info@example.com', 'Information');
   // $mail->addCC('cc@example.com');
   // $mail->addBCC('bcc@example.com');

    // Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
   // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'User Feedback';
    $mail->Body    = " Name = $name  <br><br> Email = $email <br><br> Subject = $subject <br><br>  Feedback = $message ";
    $mail->AltBody = 'Hello World</b>';

    $mail->send();
    echo "<script>alert('Message has been sent successfully')</script>";
} catch (Exception $e) {
    echo "<script>alert('Message could not be sent. Mailer Error: {$mail->ErrorInfo}')</script>";
}
}
?>

<!DOCTYPE html>
<html>
<body>

   <div id="content">

    <div class="container">
      
      <div class="col-md-12">

        <ul class="breadcrumb">

          <li>

            <a href="index.php">Home</a>
            
          </li>

          <li>

            Contact Us
            
          </li>
          
        </ul>
        
      </div>

      <div class="col-md-3">  

         <?php


   ?>
        
      </div>

      <div class="col-md-9" style="margin-left: 150px;">

        <div class="box">

          <div class="box-header">

            <center>

              <h2> Feel free to Contact Us</h2>

              <p class="text-muted">

                Feel free to contact us.
                
              </p>
              
            </center>

            <form action="contact.php" method="post">

              <div class="form-group">

                <label>Name</label>

                <input type="text" class="form-control" name="name" required>
                
              </div>

              <div class="form-group">

                <label>Email</label>

                <input type="text" class="form-control" name="email" required>
                
              </div>

              <div class="form-group">

                <label>Subject</label>

                <input type="text" class="form-control" name="subject" required>
                
              </div>

              <div class="form-group">

                <label>Message</label>

                <textarea name="message" class="form-control"></textarea>
                
              </div>

              <div class="text-center">

                <button type="submit" name="submit" class="btn btn-primary">
                  
                  <i class="fa fa-user-md"></i> Send Message

                </button>
                
              </div>
              
            </form>
            
          </div>
          
        </div>
        
      </div>

      </div>
     
   </div>

      <?php

   include("includes/footer.php");

   ?>

  <script src="js/jquery-331.min.js"></script>
  <script src="js/bootstrap-337.min.js"></script>
</body>
</html>  