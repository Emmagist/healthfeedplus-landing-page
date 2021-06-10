<?php
    require_once "db.php";

    require_once 'vendor/autoload.php';

    // Create the Transport
    $transport = (new Swift_SmtpTransport('smtp.gmail.com', 465, 'ssl'))
    ->setUsername(EMAIL)
    ->setPassword(EMAIL_PASSWORD);
    ;

    // Create the Mailer using your created Transport
    $mailer = new Swift_Mailer($transport);

    

    class emailVerification{
        public function sendMailer($email,$name){
            global $mailer;
            $body = '<!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
                <title>Verify Email</title>
            </head>
            <body>
                <div class="email_wrap">
                    <h3 style="color:#fff; background:#60d66a; width:100%;text-align:center;margin-bottom:30px;padding:10px 2px;font-size:24px;"> We Value Your Data</h3>
                   <p>Hi <strong>'.$name.'</strong>, We are so excited to inform you that you are in the right place to grow your knowledge faster.</p>
                   <p>Quality, Affordable & Accessible For All. Quality Education Made Available Everywhere you are We bring together from all over Africa educational gurus who deliver knowledge using instructional videos, practice quizzes, and personalized notes in various subject areas</p>
                    <h6 style="margin-top: 10px;">The Managemnet.</h6>                   
                </div> 
               <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
            </body>
            </html>';
            // Create a message
            $message = (new Swift_Message('Thanks for joining our online learning session.'))
            ->setFrom(EMAIL)
            ->setTo($email)
            ->setBody($body, 'text/html');
            // Send the message
            $result = $mailer->send($message);
        }
    }
    $emailVer = new emailVerification;

?>