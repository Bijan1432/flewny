<?php


$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$message = $_POST['message'];


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

if (
    isset($_POST['name']) &&
    isset($_POST['email']) &&
    isset($_POST['mobile'])
) {



    $mailBody = " <div><h2>Flewny: Enquiry Details</h2><table border='1'>
    <tbody>
    <tr><th>Name</th><td>" . $name . "</td></tr>
    <tr><th>Email</th><td><a href='mailto:" . $email . " ' target='_blank'> " . $email . " </a></td></tr>
    <tr><th>Phone</th><td>" . $mobile . "</td></tr>
    <tr><th>Message</th><td>" . $message . "</td></tr>
    </tbody></table></div>";
    //Import PHPMailer classes into the global namespace
    //These must be at the top of your script, not inside a function



    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = 0;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'bijanmondal1432@gmail.com';                     //SMTP username
        $mail->Password   = 'fmbdzasmdihfssyp';                               //SMTP password
        $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
        $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('bijanmondal1432@gmail.com', 'bijan');
        $mail->addAddress('bijanmondal1432@gmail.com', 'bijan');     //Add a recipient
        // $mail->addAddress('ellen@example.com');               //Name is optional
        // $mail->addReplyTo('info@example.com', 'Information');
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');

        //Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Enquiry Form : Flewny';
        $mail->Body    = $mailBody;
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();

        echo '<script> window.location.href="thank-you";</script>';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    echo '<script>alert("Please fill all the details!"); window.location.href="index.php";</script>';
}
