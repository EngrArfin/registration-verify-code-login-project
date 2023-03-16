<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require 'vendor/autoload.php';

    if (isset($_POST["register"]))
    {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = $_POST["password"];
       
        $mail = new PHPMailer(true);

        try {
           
            $mail->SMTPDebug = 0;//SMTP::DEBUG_SERVER;

            $mail->isSMTP();
         
            $mail->Host = 'smtp.gmail.com';
         
            $mail->SMTPAuth = true;
           
            $mail->Username = 'your_email@gmail.com';
       
            $mail->Password = 'your_password';
           
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
   
            $mail->Port = 587;
           
            $mail->setFrom('your_email@gmail.com', 'your_website_name');

            $mail->addAddress($email, $name);

            $mail->isHTML(true);

            $verification_code = substr(number_format(time() * rand(), 0, '', ''), 0, 6);

            $mail->Subject = 'Email verification';
            $mail->Body    = '<p>Your verification code is: <b style="font-size: 30px;">' . $verification_code . '</b></p>';

            $mail->send();

            $encrypted_password = password_hash($password, PASSWORD_DEFAULT);

            $conn = mysqli_connect("localhost:8889", "root", "root", "test");

            $sql = "INSERT INTO users(name, email, password, verification_code, email_verified_at) VALUES ('" . $name . "', '" . $email . "', '" . $encrypted_password . "', '" . $verification_code . "', NULL)";
            mysqli_query($conn, $sql);

            header("Location: email-verification.php?email=" . $email);
            exit();
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
?>