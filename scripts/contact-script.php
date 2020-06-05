<?php
    if(isset($_POST['submit'])){
        //get message data:
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        //send me an email:
        require_once("../lib/PHPMailer/PHPMailerAutoload.php");

        $mail = new PHPMailer;

        //Enable SMTP debugging. 
        $mail->SMTPDebug = 1;
        //Set PHPMailer to use SMTP.
        $mail->isSMTP();
        $mail->Mailer = "smtp";
        //Set SMTP host name    
        $mail->Host = 'smtp.gmail.com';
        //Set this to true if SMTP host requires authentication to send email(Gmail requires an authentication)
        $mail->SMTPAuth = true;
        //username and password for the authentication
        $mail->Username = "";
        $mail->Password = "";
        //If SMTP requires TLS encryption then set it(gmail requires it!)
        $mail->SMTPSecure = 'tls';
        //Set TCP port to connect to 
        $mail->Port = 587; 

        //who is sending the email
        $mail->SetFrom($email, $name);

        //who will receive the email.
        $mail->AddAddress("vitor.gs.ruffo@gmail.com");

        //who will receive the reply-email
        $mail->addReplyTo($email);

        $mail->isHTML();
        $mail->Subject = $subject;
        $mail->Body = $message."\n<p>This e-mail was sent by ".$name." : ".$email.".</p>";

        if(!$mail->Send()){
            header("Location: ../pages/contact.php?error=emailnotsent&info=".$mail->ErrorInfo);
            exit();
        }else{
            header("Location: ../pages/contact.php?success=emailsent");
            exit();
        }
            
    }else{
        header("Location: ../index.php");
    }
?>
