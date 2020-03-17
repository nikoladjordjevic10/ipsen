<?php include 'shared/header.php'; ?>
<?php include 'shared/hiddenSidebar.php'; ?>
<?php include 'staff/usedEquipmentData.php'; ?>

<div class="content">
  <div class="stripe"></div>
  <h2><?= $usedEquipment['title']; ?></h2>
  <div class="container">
    <div class="row mb-5">
      <div class="offset-md-1"></div>
      <?php if($lang === 'en'): ?>
        <?php foreach($allDataEN as $data): ?>
          <div class="col-12 col-md-5 col-lg-5 text-center pt-3 pb-5 px-4 px-md-3">
            <div class="card shadow">
              <a href="singleEquipment.php?id=<?= $data['id']; ?>&lang=<?= $lang; ?>"><img src="<?= $data['image']; ?>" class="card-img-top" alt="Ipsen"></a>
              <div class="card-body my-3">
                <h4 class="card-title pb-3"><?= $data['make']; ?></h4>
                <p class="card-text text-left"><span><?= $usedEquipment['type']; ?>:</span> <?= ucfirst($data['type']); ?></p>
                <p class="card-text text-left"><span><?= $usedEquipment['model']; ?>:</span> <?= strtoupper($data['model']); ?></p>
                <p class="card-text pb-4 text-left"><span><?= $usedEquipment['year']; ?>:</span> <?= $data['year']; ?></p>
                <a href="singleEquipment.php?id=<?= $data['id']; ?>&lang=<?= $lang; ?>" class="btn btn-default"><?= $usedEquipment['details']; ?></a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      <?php else: ?>
        <?php foreach($allDataSR as $data): ?>
          <div class="col-12 col-md-5 col-lg-5 text-center pt-3 pb-5 px-4 px-md-3">
            <div class="card shadow">
              <a href="singleEquipment.php?id=<?= $data['id']; ?>&lang=<?= $lang; ?>"><img src="<?= $data['image']; ?>" class="card-img-top" alt="Ipsen"></a>
              <div class="card-body my-3">
                <h4 class="card-title pb-3"><?= $data['make']; ?></h4>
                <p class="card-text text-left"><span><?= $usedEquipment['type']; ?>:</span> <?= ucfirst($data['type']); ?></p>
                <p class="card-text text-left"><span><?= $usedEquipment['model']; ?>:</span> <?= strtoupper($data['model']); ?></p>
                <p class="card-text pb-4 text-left"><span><?= $usedEquipment['year']; ?>:</span> <?= $data['year']; ?></p>
                <a href="singleEquipment.php?id=<?= $data['id']; ?>&lang=<?= $lang; ?>" class="btn btn-default"><?= $usedEquipment['details']; ?></a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
        <?php endif; ?>
    </div>
  </div>
  
</div>

<?php include 'shared/footer.php'; ?>