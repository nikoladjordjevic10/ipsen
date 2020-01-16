<?php 
  require_once('staff/functions.php');
  require_once('staff/usedEquipmentData.php');

  $singleData = [];
  
  if(isGetRequest()){
    
    $id = $_GET['id'] ?? '';
   
    foreach ($allData as $data){
      if($data['id'] == $id){
        $singleData['id'] = $data['id'];
        $singleData['make'] = ucfirst($data['make']);
        $singleData['type'] = ucfirst($data['type']);
        $singleData['model'] = strtoupper($data['model']);
        $singleData['year'] = $data['year'];
        $singleData['heating'] = ucfirst($data['heating']);
        $singleData['description'] = formatSentence($data['description']);
        $singleData['condition'] = formatSentence($data['condition']);
        $singleData['delivery'] = ucfirst($data['delivery']);
        $singleData['price'] = $data['price'];
        $singleData['image'] = $data['image'];
        $singleData['images'] = $data['images'];
      }
    }

    // print_r($singleData['images']);
  }

?>

<?php include 'shared/header.php'; ?>
<?php include 'shared/hiddenSidebar.php'; ?>

<div class="content">
  <div class="stripe"></div>
  <div class="container">
    <div class="row justify-content-between details">
      <h3 class="order-2 order-md-1">Details for : <span class="details"><?= $singleData['make'] . " - " . $singleData['model']; ?></span></h3>
      <a href="usedEquipment.php" class="btn btn-default order-1 order-md-2 mb-4 mb-md-0">Back</a>
      </div>
  </div>
  
  <div class="container">
    <div class="row mb-5">
      <?php if(!empty($singleData)): ?>
      <div class="col-md-7 d-flex flex-wrap flex-xl-nowrap images">
        <ol class="imagesNav d-flex flex-xl-column flex-wrap order-xl-0 order-1">
          <?php foreach($singleData['images'] as $path => $alt): ?> 
            <li class="shadow"><img src="<?= $path; ?>" alt="<?= $alt; ?>" class="<?php if(array_key_first($singleData['images']) === $path){echo 'selected';} ?>">
          <?php endforeach; ?>
        </ol>
        <div class="imageBig d-flex justify-content-between shadow">
          <?php foreach($singleData['images'] as $path => $alt): ?> 
            <img src="<?= $path; ?>" alt="<?= $alt; ?>">
          <?php endforeach; ?>
        </div>
      </div>
      
      <div class="col-md-5 mt-5 mt-md-3 pl-md-5 singleDetails">
        <table class="table">
          <tr>
            <th>Make</th>
            <td><?= $singleData['make']; ?></td>
          </tr>
          <tr>
            <th>Type</th>
            <td><?= $singleData['type']; ?></td>
          </tr>
          <tr>
            <th>Model</th>
            <td><?= $singleData['model']; ?></td>
          </tr>
          <tr>
            <th>Year</th>
            <td><?= $singleData['year']; ?></td>
          </tr>
          <tr>
            <th>Heating</th>
            <td><?= $singleData['heating']; ?></td>
          </tr>
          <tr>
            <th>Description</th>
            <td><?= $singleData['description']; ?></td>
          </tr>
          <tr>
            <th>Condition</th>
            <td><?= $singleData['condition']; ?></td>
          </tr>
          <tr>
            <th>Delivery</th>
            <td><?= $singleData['delivery']; ?></td>
          </tr>
          <tr>
            <th>Price</th>
            <td><?= $singleData['price']; ?></td>
          </tr>
        </table>
      </div>  
      <?php else: ?>
      <?php redirectTo('usedEquipment.php'); ?>
      <?php endif; ?>
  </div>
</div>

<?php include 'shared/footer.php'; ?>