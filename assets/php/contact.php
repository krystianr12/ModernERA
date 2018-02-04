<?php

  /*
    This file was created to send email forms from our website using PHPMailer.
    @author Krystian Rodriguez
  */

  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\SMTP;
  use PHPMailer\PHPMailer\Exception;

  require 'PHPMailer/Exception.php';
  require 'PHPMailer/PHPMailer.php';
  require 'PHPMailer/SMTP.php';

  // Attempt to instantiate a new instance of PHPMailer to send the mail.
  $mail = setupMail();

  // Check if PHPMailer was instantiated correctly, if not, stop the code
  if ($mail == null){
    echo 'Couldn\'t instantiate mail client';
    return;
  }

  // attempt to deliver the mail
  try {
    $mail->setFrom("admin@moderneradma.com", "ModernERA Contact Forms");
    $mail->addAddress('contact@moderneradma.com');       // Add a recipient
    $mail-> isHTML(true);
    $mail->Subject = "New Contact Form";
    $mail->Body = buildMessage();

    $mail->send();
    echo '

    <style>
      body {
        background: #ed1c24;
        font-family: "Verdana";
        overflow: hidden;
      }

      .container {
        background: #fff;
        border: 1px #ddd solid;
        padding: 20px;
        margin: 0 auto;
        position: relative;
        top: 33%;
        width: 80%; }
        .container p {
          font-size: 1.5em;
        }

      .header {
        display: inline-block; }
        .header h2 {
          display: inline-block;
          position: relative;
          top: 45%;
          left: 2%;
          overflow-wrap: normal;
         }

    </style>

    <div class="container">
      <div class="header">
        <img src="https://www.moderneradma.com/assets/images/logo/logo.png" align="left" width="340" height="60"/>
        <h2>Your message has been sent!</h2><br>
      </div>

      <hr>

      <p> Thank you for contacting ModernERA, you will be hearing back from us pretty soon! </p>

    </div>';

  } catch (Exception $e) {

    echo '
    <style>
      body {
        background: #ed1c24;
        font-family: "Verdana";
        overflow: hidden;
      }

      .container {
        background: #fff;
        border: 1px #ddd solid;
        padding: 20px;
        margin: 0 auto;
        position: relative;
        top: 33%;
        width: 80%; }
        .container p {
          font-size: 1.5em;
        }

      .header {
        display: inline-block; }
        .header h2 {
          display: inline-block;
          position: relative;
          top: 45%;
          left: 2%;
          overflow-wrap: normal;
         }

    </style>

    <div class="container">
      <div class="header">
        <img src="https://www.moderneradma.com/assets/images/logo/logo.png" align="left" width="340" height="60"/>
        <h2>Failed to send your message!</h2><br>
      </div>

      <hr>

      <p> Something went wrong while trying to send your message. Please try again. ('.$mail->ErrorInfo.')</p>

    </div>';
  }

  function setupMail(){
    // Server settings
    $mail = new PHPMailer();
    $mail->isSMTP();                                      // Enable verbose debug output
    // $mail->SMTPDebug = 2;                                 // Set mailer to use SMTP
    $mail->Host = '';                // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = '';         // SMTP username
    $mail->Password = '';                 // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;

    return $mail;
  }

  /*
    This function will build the HTML message that will be sent via email.
    Created to keep the code looking nice and clean.
  */
  function buildMessage(){
    $message = '<img src="https://www.moderneradma.com/assets/images/logo/logo.png" alt="" width="340" height="60"/><br>';
    $message .= '<h1>New contact form submittion from ModernERA</h1><hr>';
    $message .= '<table>';

    // Validate input data
    if (count($_POST)!=0) {
      foreach ($_POST as $key => $value) {
        // Check if $key is not empty, except for phone which is optional
        if (isset($key) || ($key == "phone" && isset($key))){
          $message .= "<tr><td><strong>".ucfirst($key)."</strong>: $value</th></tr>";
          continue;
        }

        // throw error if not optional data is missing
        else if (!isset($key)){
          echo 'Form data missing';
          return;
        }
      }
    } else { echo 'Form data missing';  return; }

    $message .= '</table>';
    return $message;
  }

?>
