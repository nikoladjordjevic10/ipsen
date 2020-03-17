<?php 
  require_once('staff/functions.php');
  require_once('staff/usedEquipmentData.php');

  $singleData = [];
  
  if(isGetRequest()){
    
    $id = $_GET['id'] ?? '';
    
    if($_GET['lang'] === 'en'){
      foreach ($allDataEN as $data){
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
    } else {
      foreach ($allDataSR as $data){
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
    }

  }

?>

<?php include 'shared/header.php'; ?>
<?php include 'shared/hiddenSidebar.php'; ?>

<div class="content">
  <div class="stripe"></div>
  <div class="container">
    <div class="row justify-content-between details">
      <h3 class="order-2 order-md-1"><?= $singleEquipment['title']; ?><span class="details"><?= $singleData['make'] . " - " . $singleData['model']; ?></span></h3>
      <a href="usedEquipment.php?lang=<?= $lang; ?>" class="btn btn-default order-1 order-md-2 mb-4 mb-md-0"><?= $singleEquipment['back']; ?></a>
      </div>
  </div>
  
  <div class="container">
    <div class="row mb-5">
      <?php if(!empty($singleData)): ?>
      <div class="col-md-7 d-flex flex-wrap flex-xl-nowrap images">
        <ol class="imagesNav d-flex flex-xl-column flex-wrap order-xl-0 order-1">
          <?php foreach($singleData['images'] as $path => $alt): ?> 
            <li class="shadow"><img src="<?= $path; ?>" alt="<?= $alt; ?>" class="<?php if(array_key_first($singleData['images']) == $path){echo 'selected';} ?>">
          <?php endforeach; ?>
        </ol>
        <div class="imageBig d-flex justify-content-between shadow">
          <?php foreach($singleData['images'] as $path => $alt): ?> 
            <img src="<?= $path; ?>" alt="<?= $alt; ?>">
          <?php endforeach; ?>
        </div>
      </div>
      
      <div class="col-md-5 mt-5 mt-md-3 pl-3 pl-lg-5 singleDetails">
        <table class="table">
          <tr>
            <th><?= $singleEquipment['make']; ?></th>
            <td><?= $singleData['make']; ?></td>
          </tr>
          <tr>
            <th><?= $singleEquipment['type']; ?></th>
            <td><?= $singleData['type']; ?></td>
          </tr>
          <tr>
            <th><?= $singleEquipment['model']; ?></th>
            <td><?= $singleData['model']; ?></td>
          </tr>
          <tr>
            <th><?= $singleEquipment['year']; ?></th>
            <td><?= $singleData['year']; ?></td>
          </tr>
          <tr>
            <th><?= $singleEquipment['heating']; ?></th>
            <td><?= $singleData['heating']; ?></td>
          </tr>
          <tr>
            <th><?= $singleEquipment['description']; ?></th>
            <td><?= $singleData['description']; ?></td>
          </tr>
          <tr>
            <th><?= $singleEquipment['condition']; ?></th>
            <td><?= $singleData['condition']; ?></td>
          </tr>
          <tr>
            <th><?= $singleEquipment['delivery']; ?></th>
            <td><?= $singleData['delivery']; ?></td>
          </tr>
          <tr>
            <th><?= $singleEquipment['price']; ?></th>
            <td><?= $singleData['price']; ?></td>
          </tr>
        </table>
      </div>  
      <?php else: ?>
      <?php redirectTo('usedEquipment.php?lang=' . $lang); ?>
      <?php endif; ?>
  </div>
</div>

<?php include 'shared/footer.php'; ?>