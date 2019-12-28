<?php include 'shared/header.php'; ?>
<?php include 'shared/hiddenSidebar.php'; ?>

<div class="content">
  <div class="stripe"></div>
  <h2>Contact us today!</h2>
  <div class="contactForm">
    <div class="container">
      <div class="row">

        <div class="info offset-md-1 col-12 col-md-3 order-2 order-md-1">
          <p class="heading">Telephone</p>
          <p>Tel: +381 11 3016666</p>
          <p>Fax: +381 11 3016653</p>
          <p>&nbsp;</p>
          <p class="heading">Email</p>
          <p><a href="#">pokerznik@sezampro.rs</a></p>
          <p>&nbsp;</p>
          <p class="heading">Opening Hours</p>
          <p>Mon - Fri: 8am - 4pm</p>
        </div>

        <div class="fields offset-md-1 col-12 col-md-7 order-1 order-md-2">
          <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <div class="form-group">
              <label for="name">Enter your name <span class="required">*</span></label>
              <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Name" required>
            </div>
            <div class="form-group">
              <label for="email">Enter your email <span class="required">*</span></label>
              <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email" required>
            </div>
            <div class="form-group">
              <label for="subject">Enter your subject <span class="required">*</span></label>
              <input type="subject" class="form-control" id="subject" aria-describedby="emailHelp" placeholder="Subject" required>
            </div>
            <div class="form-group mb-2">
              <label for="message">Enter your message here <span class="required">*</label>
              <textarea class="form-control" id="message" rows="5" required placeholder="Message"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>

      </div>
    </div>
  </div>
</div>

<?php include 'shared/footer.php'; ?>