<?php

  require_once "db.php";

  global $db;

  if (isset($_POST['subscribe'])) {
    $error='';
    $name = $db->escape($_POST['name']);
    $email = $db->escape($_POST['email']);
    $time = CURRENT_TIME;
    $date = CURRENT_DATE;
    $error = Database::ValidationForRegistration($error);

    if (empty($error)) {
      // $row = $db->findUserByEmail($email);
      // if($email = $row){
      //   $error = "Email already exist";
      // } else {
        $db->saveData(TBL_USER, "full_name = '$name', email = '$email', message = '', status = '0', time = '$time', date = '$date'");
        $error = "<p class='text-success;padding:10px;font-weight:bold;font-size:18px;'>You have successfully subscribe. You will see us live soon.</p>";
        // header("Location: index.php");
      //}
        
    }
  }

  if (isset($_POST['send'])) {
    $error='';
    // $message = '';
    $name = $db->escape($_POST['name']);
    $email = $db->escape($_POST['email']);
    $message = $db->escape($_POST['message']);
    $time = CURRENT_TIME;
    $date = CURRENT_DATE;
    $error = Database::ValidationForMessage($error);

    if (empty($error)) {
      // $row = $db->findUserByEmail($email);
      // if($email = $row){
      //   $error = "Email already exist";
      // } else {
        $db->saveData(TBL_USER, "full_name = '$name', email = '$email', message = '$message', status = '1', time = '$time', date = '$date'");
        $error = "<p class='text-success;padding:10px;font-weight:bold;font-size:18px;'>You have successfully subscribe. You will see us live soon.</p>";
        // header("Location: index.php");
      //}
        
    }
  }

?>