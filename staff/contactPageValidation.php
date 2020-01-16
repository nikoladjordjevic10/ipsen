<?php
require_once('functions.php');

$errors = [];
$name = $email = $subject = $message = '';
 
if (isPostRequest()) {

  if (isBlank($_POST['name'])) {
    $errors['name'] = 'Name cannot be empty';
  } elseif (!hasMinLength($_POST['name'], 3) || !hasMaxLength($_POST['name'], 20)) {
    $errors['name'] = 'Name must be between 3 and 20 characters long';
  } else {
    $name = sanitize($_POST['name']);
  }
  
  if (isBlank($_POST['email'])){
    $errors['email'] = 'Email cannot be empty';
  } elseif (!hasValidEmail($_POST['email'])){
    $errors['email'] = 'Email must be valid format';
  } else {
    $email = sanitize($_POST['email']);
  }

  if (isBlank($_POST['subject'])) {
    $errors['subject'] = 'Subject cannot be empty';
  } elseif (!hasMinLength($_POST['subject'], 5) || !hasMaxLength($_POST['subject'], 50)) {
    $errors['subject'] = 'Subject must be between 5 and 50 characters long';
  } else {
    $subject = sanitize($_POST['subject']);
  }

  if (isBlank($_POST['message'])) {
    $errors['message'] = 'Message cannot be empty';
  } elseif (!hasMinLength($_POST['message'], 5)){
    $errors['message'] = 'Message must be at least 5 characters long';
  } else {
    $message = sanitize($_POST['message']);
  }

  if(empty($errors)){
    $success = "Your message has been sent. Thanks for contacting us";
    $name = $email = $subject = $message = '';
  }
  
}

function sanitize($data) {
  $data = strip_tags($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>
