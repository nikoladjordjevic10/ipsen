<?php 
// General Functions

function redirectTo($location){
  header("Location: " . $location);
  exit;
}

function hs($value){
  return htmlspecialchars($value);
}

function he($value){
  return htmlentities($value);
}

function u($value){
  return urlencode($value);
}

function isPostRequest(){
  return $_SERVER['REQUEST_METHOD'] == 'POST';
}

function isGetRequest(){
  return $_SERVER['REQUEST_METHOD'] == 'GET';
}

function formatSentence($str){
  $sentences = preg_split('/([.?!]+)/', $str, -1, PREG_SPLIT_NO_EMPTY|PREG_SPLIT_DELIM_CAPTURE);
  $new_string = '';
  foreach ($sentences as $key => $sentence) {
      $new_string .= ($key & 1) == 0?
          ucfirst(strtolower(trim($sentence))) :
          $sentence.' ';
  }
  return trim($new_string);
}

// Validation Functions

function isBlank($value){
  return !isset($value) || trim($value) === '';
}

function hasMinLength($value, $min){
  $length = strlen($value);
  return $length >= $min;
}

function hasMaxLength($value, $max){
  $length = strlen($value);
  return $length < $max;
}

function hasValidEmail($value){
  $email_regex = '/\A[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,}\Z/i';
  return preg_match($email_regex, $value) === 1;
}

?>