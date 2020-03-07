<?php include 'shared/header.php'; ?>
<?php include 'shared/hiddenSidebar.php'; ?>
<?php include 'staff/contactPageValidation.php'; ?>

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
          <p><a href="contact.php">ivan.pokerznik@ibptermotehnika.com</a></p>
          <p>&nbsp;</p>
          <p class="heading">Opening Hours</p>
          <p>Mon - Fri: 8am - 4pm</p>
        </div>

        <div class="fields offset-md-1 col-12 col-md-7 order-1 order-md-2">
          <form action="<?= $_SERVER['PHP_SELF']; ?>" method="POST">
          <?php if(isset($success)): ?>
            <div class="alert alert-success" role="alert"><?= $success; ?></div>
          <?php endif; ?>
            <div class="form-group">
              <label for="name">Enter your name <span class="required">*</span></label>
              <input type="text" class="form-control <?php if(array_key_exists('name', $errors)){echo " is-invalid";} ?>" id="name" name="name" aria-describedby="emailHelp" placeholder="Name" value="<?= $name; ?>">
              <div class="invalid-feedback">
                <?php if(!empty($errors)){ echo $errors['name']; }?>
              </div>
            </div>
            <div class="form-group">
              <label for="email">Enter your email <span class="required">*</span></label>
              <input type="text" class="form-control <?php if(array_key_exists('email', $errors)){echo " is-invalid";} ?>" id="email" name="email" aria-describedby="emailHelp" placeholder="Email" value="<?= $email; ?>">
              <div class="invalid-feedback">
                <?php if(!empty($errors)){ echo $errors['email']; }?>
              </div>
            </div>
            <div class="form-group">
              <label for="subject">Enter your subject <span class="required">*</span></label>
              <input type="subject" class="form-control <?php if(array_key_exists('subject', $errors)){echo " is-invalid";} ?>" id="subject" name="subject" aria-describedby="emailHelp" placeholder="Subject" value="<?= $subject; ?>">
              <div class="invalid-feedback">
                <?php if(!empty($errors)){ echo $errors['subject']; }?>
              </div>
            </div>
            <div class="form-group mb-2">
              <label for="message">Enter your message here <span class="required">*</label>
              <textarea class="form-control <?php if(array_key_exists('message', $errors)){echo " is-invalid";} ?>" id="message" name="message" rows="5" placeholder="Message"><?= $message; ?></textarea>
              <div class="invalid-feedback">
                <?php if(!empty($errors)){ echo $errors['message']; }?>
              </div>
            </div>
            <button type="submit" name="submit" class="btn btn-default">Send</button>
          </form>
        </div>

      </div>
    </div>
  </div>
</div>

<?php include 'shared/footer.php'; ?>