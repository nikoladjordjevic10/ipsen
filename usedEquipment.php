<?php include 'shared/header.php'; ?>
<?php include 'shared/hiddenSidebar.php'; ?>
<?php include 'staff/usedEquipmentData.php'; ?>

<div class="content">
  <div class="stripe"></div>
  <h2>Used equipment</h2>
  <div class="container">
    <div class="row mb-5">
      <?php foreach($allData as $data): ?>
        <div class="col-12 col-md-6 col-lg-6 text-center p-4">
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