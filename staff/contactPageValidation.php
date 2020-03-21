<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once 'functions.php';
require 'vendor/autoload.php';

$errors = [];
$name = $email = $subject = $message = '';
 
if (isPostRequest()) {

  if (isBlank($_POST['name'])) {
    if($lang === 'en'){
      $errors['name'] = 'Name cannot be empty';
    } else {
      $errors['name'] = 'Ime ne može biti prazno';
    }
  } elseif (!hasMinLength($_POST['name'], 3) || !hasMaxLength($_POST['name'], 20)) {
    if($lang === 'en'){
      $errors['name'] = 'Name must be between 3 and 20 characters long';
    } else {
      $errors['name'] = 'Ime mora biti između 3 i 20 karaktera';
    }
  } else {
    $name = sanitize($_POST['name']);
  }
  
  if (isBlank($_POST['email'])){
    if($lang === 'en'){
      $errors['email'] = 'Email cannot be empty';
    } else {
      $errors['email'] = 'Email adresa ne može biti prazna';
    }
  } elseif (!hasValidEmail($_POST['email'])){
    if($lang === 'en'){
      $errors['email'] = 'Email must be valid format';
    } else {
      $errors['email'] = 'Email adresa mora biti validnog formata';
    }
  } else {
    $email = sanitize($_POST['email']);
  }

  if (isBlank($_POST['subject'])) {
    if($lang === 'en'){
      $errors['subject'] = 'Subject cannot be empty';
    } else {
      $errors['subject'] = 'Naslov ne može biti prazan';
    }
  } elseif (!hasMinLength($_POST['subject'], 5) || !hasMaxLength($_POST['subject'], 50)) {
    if($lang === 'en'){
      $errors['subject'] = 'Subject must be between 5 and 50 characters long';
    } else {
      $errors['subject'] = 'Naslov mora biti između 5 i 50 karaktera';
    }
  } else {
    $subject = sanitize($_POST['subject']);
  }

  if (isBlank($_POST['message'])) {
    if($lang === 'en'){
      $errors['message'] = 'Message cannot be empty';
    } else {
      $errors['message'] = 'Poruka ne može biti prazna';
    }
  } elseif (!hasMinLength($_POST['message'], 5)){
    if($lang === 'en'){
      $errors['message'] = 'Message must be at least 5 characters long';
    } else {
      $errors['message'] = 'Poruka mora imati najmanje 5 karaktera';
    }
  } else {
    $message = sanitize($_POST['message']);
  }

  if(empty($errors)){
    
    $mail = new PHPMailer(true);

    try {
      $mail->isSMTP();                                            
      $mail->Host       = 'smtp.mailtrap.io';                    
      $mail->SMTPAuth   = true;                                  
      $mail->Username   = 'a9bfcb7850e376';                    
      $mail->Password   = 'a60115fa80865b';                             
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         
      $mail->Port       = 587;  
      
      $mail->setFrom($email, $name);
      $mail->addAddress('105f12a5b5-66432b@inbox.mailtrap.io');     

      
      $mail->isHTML(true);                                  
      $mail->Subject = $subject;
      $mail->Body    = $message;
      
      if($mail->send()) {
        if($lang === 'en'){
          $success = "Your message has been sent. Thanks for contacting us";
        } else {
          $success = "Poruka uspešno poslata. Hvala što ste nas kontaktirali";
        }
      }

    } catch (Exception $e) {
      if($lang === 'en'){
        $failure = "Message not sent. Please try again.";
      } else {
        $failure = "Poruka nije poslata. Molimo vas pokušajte ponovo.";
      }
    }

    $name = $email = $subject = $message = '';

  }
  
}

function sanitize($data) {
  $data = strip_tags($data);
  $data = htmlspecialchars($data);
  return $data;
}
