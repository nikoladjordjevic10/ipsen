<?php 
session_start();

$allowedLang = ['en', 'sr'];

if (isset($_GET['lang']) && in_array($_GET['lang'], $allowedLang)){
  $_SESSION['lang'] = $lang = $_GET['lang'];
} else {
  $_SESSION['lang'] = $lang = 'en';
}

include 'languages/' . $_SESSION['lang'] . '.php';

?>