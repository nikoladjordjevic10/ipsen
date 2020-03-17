<?php include 'shared/header.php'; ?>
<?php include 'shared/hiddenSidebar.php'; ?>

<section class="heroImage content">
  <div class="heroText">
    <p class="heading mb-3"><?= $home['heroTitle']; ?></p>
    <p><?= $home['heroBody']; ?></p>
  </div>
</section>

<div class="linkBoxes">
  <div class="container">
    <div class="row">
      
      <div class="col-12 col-md-4">
        <a href="ipsen.php">
          <div class="box shadow">
            <div class="boxHeader p-3">
              <p><?= $home['newTitle']; ?></p>
            </div>
            <div class="boxBody py-5 px-3">
              <p><?= $home['newBody']; ?></p>
            </div>
          </div>
        </a>
      </div>

      <div class="col-12 col-md-4">
        <a href="usedEquipment.php">
          <div class="box shadow">
            <div class="boxHeader p-3">
              <p><?= $home['usedTitle']; ?></p>
            </div>
            <div class="boxBody py-5 px-3">
              <p><?= $home['usedBody']; ?></p>
            </div>
          </div>
        </a>
      </div>
      
      <div class="col-12 col-md-4">
        <a href="otherProducts.php">
          <div class="box shadow mb-5">
            <div class="boxHeader p-3">
              <p><?= $home['otherTitle']; ?></p>
            </div>
            <div class="boxBody py-5 px-3">
              <p><?= $home['otherBody']; ?></p>
            </div>
          </div>
        </a>
      </div>

    </div>
</div>
</div>

<?php include 'shared/footer.php'; ?>