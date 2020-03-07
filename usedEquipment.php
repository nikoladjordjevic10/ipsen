<?php include 'shared/header.php'; ?>
<?php include 'shared/hiddenSidebar.php'; ?>
<?php include 'staff/usedEquipmentData.php'; ?>

<div class="content">
  <div class="stripe"></div>
  <h2>Used equipment</h2>
  <div class="container">
    <div class="row mb-5">
      <div class="offset-md-1"></div>
      <?php foreach($allData as $data): ?>
        <div class="col-12 col-md-5 col-lg-5 text-center pt-3 pb-5 px-4 px-md-3">
          <div class="card shadow">
            <a href="singleEquipment.php?id=<?= $data['id']; ?>"><img src="<?= $data['image']; ?>" class="card-img-top" alt="Ipsen"></a>
            <div class="card-body my-3">
              <h4 class="card-title pb-3"><?= $data['make']; ?></h4>
              <p class="card-text text-left"><span>Type:</span> <?= ucfirst($data['type']); ?></p>
              <p class="card-text text-left"><span>Model:</span> <?= strtoupper($data['model']); ?></p>
              <p class="card-text pb-4 text-left"><span>Year:</span> <?= $data['year']; ?></p>
              <a href="singleEquipment.php?id=<?= $data['id']; ?>" class="btn btn-default">Details</a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
  
</div>

<?php include 'shared/footer.php'; ?>