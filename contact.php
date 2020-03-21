<?php include 'shared/header.php'; ?>
<?php include 'shared/hiddenSidebar.php'; ?>
<?php include 'staff/contactPageValidation.php'; ?>

<div class="content">
  <div class="stripe"></div>
  <h2><?= $contact['title']; ?></h2>
  <div class="contactForm">
    <div class="container">
      <div class="row">
        
        <div class="info offset-md-1 col-12 col-md-3 order-2 order-md-1">
          <p class="heading"><?= $contact['telephone']; ?></p>
          <p>Tel: +381 11 3016666</p>
          <p>Fax: +381 11 3016653</p>
          <p>&nbsp;</p>
          <p class="heading">Email</p>
          <p><a href="contact.php">ivan.pokerznik@ibptermotehnika.com</a></p>
          <p>&nbsp;</p>
          <p class="heading"><?= $contact['openingHours']; ?></p>
          <p><?= $contact['time']; ?></p>
        </div>

        <div class="fields offset-md-1 col-12 col-md-7 order-1 order-md-2">
          <form action="<?= $_SERVER['PHP_SELF'] . '?lang=' . $lang; ?>" method="POST">
          <?php if(isset($success)): ?>
            <div class="alert alert-success" role="alert"><?= $success; ?></div>
          <?php elseif(isset($failure)): ?>
            <div class="alert alert-danger" role="alert"><?= $failure; ?></div>
          <?php endif; ?>
            <div class="form-group">
              <label for="name"><?= $contact['name']; ?> <span class="required">*</span></label>
              <input type="text" class="form-control <?php if(array_key_exists('name', $errors)){echo " is-invalid";} ?>" id="name" name="name" aria-describedby="emailHelp" placeholder="<?= $contact['nameInput']; ?>" value="<?= $name; ?>">
              <div class="invalid-feedback">
                <?php if(!empty($errors)){ echo $errors['name']; }?>
              </div>
            </div>
            <div class="form-group">
              <label for="email"><?= $contact['email']; ?> <span class="required">*</span></label>
              <input type="text" class="form-control <?php if(array_key_exists('email', $errors)){echo " is-invalid";} ?>" id="email" name="email" aria-describedby="emailHelp" placeholder="<?= $contact['emailInput']; ?>" value="<?= $email; ?>">
              <div class="invalid-feedback">
                <?php if(!empty($errors)){ echo $errors['email']; }?>
              </div>
            </div>
            <div class="form-group">
              <label for="subject"><?= $contact['subject']; ?> <span class="required">*</span></label>
              <input type="subject" class="form-control <?php if(array_key_exists('subject', $errors)){echo " is-invalid";} ?>" id="subject" name="subject" aria-describedby="emailHelp" placeholder="<?= $contact['subjectInput']; ?>" value="<?= $subject; ?>">
              <div class="invalid-feedback">
                <?php if(!empty($errors)){ echo $errors['subject']; }?>
              </div>
            </div>
            <div class="form-group mb-2">
              <label for="message"><?= $contact['message']; ?> <span class="required">*</label>
              <textarea class="form-control <?php if(array_key_exists('message', $errors)){echo " is-invalid";} ?>" id="message" name="message" rows="5" placeholder="<?= $contact['messageInput']; ?>"><?= $message; ?></textarea>
              <div class="invalid-feedback">
                <?php if(!empty($errors)){ echo $errors['message']; }?>
              </div>
            </div>
            <button type="submit" name="submit" class="btn btn-default"><?= $contact['send']; ?></button>
          </form>
        </div>

      </div>
    </div>
  </div>
</div>

<?php include 'shared/footer.php'; ?>