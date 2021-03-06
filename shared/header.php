<?php require 'staff/langInit.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css?family=Varela+Round&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.min.css">
  <script src="https://kit.fontawesome.com/96ed7d3134.js" crossorigin="anonymous"></script>
  <title>IBP Termotehnika</title>
</head>

<body>
   <header class="shadow"> <!-- Start of Header -->
    <div class="container">
      <div class="row flex-column justify-content-xl-between justify-content-center align-items-center flex-lg-row">
        <div class="logo p-3">
          <a href="index.php"><img src="images/logo.png" alt="logo"></a>
        </div>
        <nav class="nav align-items-center d-flex flex-column flex-lg-row py-3">
          <a class="main-link nav-link" href="index.php?lang=<?= $lang; ?>"><?= $header['home']; ?></a>
          <a class="main-link nav-link" href="about.php?lang=<?= $lang; ?>"><?= $header['about']; ?></a>
          <a class="main-link nav-link" href="ipsen.php?lang=<?= $lang; ?>"><?= $header['ipsen']; ?></a>
          <a class="main-link nav-link" href="usedEquipment.php?lang=<?= $lang; ?>"><?= $header['usedEquipment']; ?></a>
          <a class="main-link nav-link" href="otherProducts.php?lang=<?= $lang; ?>"><?= $header['otherProducts']; ?></a>
          <a class="main-link nav-link" href="contact.php?lang=<?= $lang; ?>"><?= $header['contact']; ?></a>
        </nav>
      </div>
    </div>
    <div class="btn-group" role="group" aria-label="Basic example">
      <a href="?lang=en" type="button" class="btn btn-language en"></a> &nbsp;&nbsp;
      <a href="?lang=sr" type="button" class="btn btn-language sr"></a>
    </div>
  </header> <!-- End of Header -->

  <header class="headerInvisible"> <!-- Start of Invisible Header -->
    <div class="container">
      <div class="row justify-content-around justify-content-sm-between">
        <div class="logo p-3">
          <a href="#"><img src="images/logo.png" alt="logo"></a>
        </div>
        <div class="menu d-flex align-items-center">
          <div id="nav-icon">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
      </div>
    </div>
  </header> <!-- End of Invisible Header -->