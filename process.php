<?php

    require "phpMailer.php";

    if (isset($_GET['contData'])) {
        $name = mysqli_real_escape_string($db, $_POST['name']);
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $message = mysqli_real_escape_string($db, $_POST['message']);

        if (isset($name, $email)) {
            $sql = "INSERT INTO health_message(full_name, email, message) VALUES('$name', '$email', '$message')";
            mysqli_query($db, $sql);
            echo json_encode("Message Sent");
        }
    }

    if (isset($_GET['regData'])) {
        $name = mysqli_real_escape_string($db, $_POST['full_name']);
        $email = mysqli_real_escape_string($db, $_POST['reg_email']);

        if (isset($name, $email)) {
            $sql = "INSERT INTO health_subscribe(full_name, email) VALUES('$name', '$email')";
            mysqli_query($db, $sql);
            echo json_encode("Subscribed");
            $emailVer->sendMailer($email,$name);
            $emailVer->sendMailer($email,$name);
        }
    }

?>