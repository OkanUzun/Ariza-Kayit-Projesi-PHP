<?php
      require_once 'class.phpmailer.php';
      $mail = new phpmailer();
      error_reporting(0);
      $mail -> IsSMTP();
      $mail -> SMTPDebug = 1;
      $mail -> SMTPAuth = true;
      $mail -> SMTPSecure = 'ssl';
      $mail -> Host = 'smtp server of your email';
      $mail -> Port = smtp port;
      $mail -> IsHTML(true);
      $mail -> CharSet = 'utf-8';
      $mail -> Username = "email address";
      $mail -> Password = "password";
      $mail -> SetFrom("email address");
?>
