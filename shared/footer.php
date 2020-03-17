<footer> <!-- Start of Footer -->
    <div class="footerUpper">
      <div class="container">
        <div class="row justify-content-between flex-column flex-lg-row align-items-center">
          <div class="contact p-4">
            <p><i class="fas fa-phone-alt pb-2 pr-3"></i><?= $footer['callUs']; ?></p>
            <p>Tel: +381 11 3016666 &nbsp;|&nbsp; Fax: +381 11 3016653</p>
          </div>
          <div class="contact p-4">
            <p><i class="far fa-envelope pb-2 pr-3"></i><?= $footer['emailUs']; ?></p>
            <p><a href="contact.php">ivan.pokerznik@ibptermotehnika.com</a></p>
          </div>
          <div class="contact p-4">
            <p><i class="far fa-clock pb-2 pr-3"></i><?= $footer['openingHoursTitle']; ?></p>
            <p><?= $footer['openingHoursBody']; ?></p>
          </div>
        </div>  
      </div>
    </div>  
    <div class="footerLower">
      <div class="container">
        <div class="row justify-content-between">
          
          <div class="col-lg-4 col-md-12 info py-md-4 p-4">
            <p><?= $footer['experienceTitle']; ?></p>
            <p><?= $footer['experienceBody']; ?></p>
          </div>
          <div class="col-lg-3 col-md-12 info py-md-4 p-4">
            <p><?= $footer['ourServices']; ?></p>
            <ul>
              <li><?= $footer['equipment']; ?></li>
              <li><?= $footer['services']; ?></li>
              <li><?= $footer['spareParts']; ?></li>
              <li><?= $footer['baskets']; ?></li>
              <li><?= $footer['grids']; ?></li>
              <li><?= $footer['coatings']; ?></li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-12 info py-md-4 p-4">
            <p><?= $footer['visitUsTitle']; ?></p>
            <p><?= $footer['visitUsBody']; ?></p>
          </div>
        </div>
      </div>
    </div>
    <div class="footerCredits">
      <p><a href="index.php">IBP Termotehnika</a> <?php echo date('Y') ?>. <?= $footer['rights']; ?></p>
    </div>
  </footer> <!-- End of Footer -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="js/script.js"></script>
</body>

</html>