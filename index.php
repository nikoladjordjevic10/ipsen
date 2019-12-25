<?php include 'shared/hiddenSidebar.php';?>
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
   <header class="shadow"> <!-- Start of Invisible Header -->
    <div class="container">
      <div class="row flex-column justify-content-xl-between justify-content-center align-items-center flex-lg-row">
        <div class="logo p-3">
          <a href="#"><img src="images/logo.png" alt="logo"></a>
        </div>
        <nav class="nav align-items-center d-flex flex-column flex-lg-row py-3">
          <a class="nav-link" href="#">Home</a>
          <a class="nav-link" href="#">About Us</a>
          <a class="nav-link" href="#">Ipsen</a>
          <a class="nav-link" href="#">Used Equipment</a>
          <a class="nav-link" href="#">Other Products</a>
          <a class="nav-link" href="#">Contact</a>
        </nav>
      </div>
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

  <footer> <!-- Start of Footer -->
    <div class="footerUpper">
      <div class="container">
        <div class="row justify-content-between flex-column flex-lg-row align-items-center">
          <div class="contact py-4 pl-3 pt-3 pb-2">
            <p><i class="fas fa-phone-alt pb-2 pr-3"></i>Call Us</p>
            <p>Tel: +381 11 3016666 &nbsp;|&nbsp; Fax: +381 11 3016653</p>
          </div>
          <div class="contact pt-3 pb-2">
            <p><i class="far fa-envelope pb-2 pr-3"></i>Email Us</p>
            <p>pokerznik@sezampro.rs</p>
          </div>
          <div class="contact py-4 pr-3 pt-3 pb-2">
            <p><i class="far fa-clock pb-2 pr-3"></i>Opening Hours</p>
            <p>Mon - Fri: 8am - 4pm</p>
          </div>
        </div>  
      </div>
    </div>  
    <div class="footerLower">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-12 info pl-0 py-md-4 pl-md-3 pt-3 pb-2">
            <p>Over 30 years experience</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quam cum totam repellat aspernatur sapiente at fugiat tempora placeat vel corporis officiis magnam dolorum voluptatibus eligendi, odit dolores ipsam, tempore dolore.</p>
          </div>
          <div class="col-lg-4 col-md-12 info py-md-4 pl-3 pt-3 pb-2">
            <p>Our Services</p>
            <ul>
              <li>Home</li>
              <li>About Us</li>
              <li>Ipsen</li>
              <li>Used Equipment</li>
              <li>Other Products</li>
              <li>Contact</li>
            </ul>
          </div>
          <div class="col-lg-4 col-md-12 info py-md-4 pl-3 pt-3 pb-2">
            <p>Visit Us</p>
            <p>Nehruova 56/15, 11073 Novi Beograd, Srbija</p>
          </div>
        </div>
      </div>
    </div>
    <div class="footerCredits">
      <p><a href="#">IBP Termotehnika</a> <?php echo date('Y') ?>. All Rights Reserved</p>
    </div>
  </footer> <!-- End of Footer -->

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="js/script.js"></script>
</body>

</html>