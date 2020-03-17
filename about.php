<?php include 'shared/header.php'; ?>
<?php include 'shared/hiddenSidebar.php'; ?>

<div class="content">
  <div class="stripe"></div>
  <h2><?= $about['title']; ?></h2>
  <div class="container">
    <div class="row about p-4">
      <div class="col-lg-5 mb-5 mb-lg-0">
        <p><?= $about['body']; ?></p>
      </div>
      <div class="offset-lg-1"></div>
      <div class="col-lg-6 mt-3 mt-lg-0 aboutImage">
        <img src="images/about.jpg" alt="about" class="w-100">
        <div class="contactFrame"><a href="contact.php"><?= $about['contact']; ?></a></div>
      </div>
    </div>
  </div>
  
</div>

<?php include 'shared/footer.php'; ?>