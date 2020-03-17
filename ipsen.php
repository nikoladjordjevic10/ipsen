<?php include 'shared/header.php'; ?>
<?php include 'shared/hiddenSidebar.php'; ?>

<div class="content">
  <div class="stripe"></div>
  <h2><?= $ipsen['title']; ?></h2>
  <div class="container">
    <div class="row">
    <div class="ipsenInfo mb-3 mb-md-5 p-4 p-md-3">
        <p><?= $ipsen['body']; ?></p>
      </div>
    </div>
    <div class="ipsenProducts p-2 p-md-0">
      <div class="ipsenAtmosphere mb-3 mb-md-5">
        <h4 class="mb-5"><?= $ipsen['atmosphere']; ?></h4>
        <div class="row">

          <div class="col-12 col-md-6 col-xl-3">
            <ul class="list-group mb-5 mb-md-0">
              <li class="list-group-item active text-center text-capitalize"><?= $ipsen['sealedQuench']; ?></li>
              <li class="list-group-item">
                <a href="https://www.ipsen.de/home/products/atmosphere-technology/sealed-quench-furnaces/atlas" target="_blank"><img src="images/atlas.jpg" alt="atlas" class="img-thumbnail mr-3">
                <?= $ipsen['sealedQuench1']; ?></a>
              </li>
              <li class="list-group-item">
                <a href="https://www.ipsen.de/home/products/atmosphere-technology/sealed-quench-furnaces/rtq/tq" target="_blank"><img src="images/rtqtq.jpg" alt="rtqtq" class="img-thumbnail mr-3">
                <?= $ipsen['sealedQuench2']; ?></a>
              </li>
            </ul>
          </div>

          <div class="col-12 col-md-6 col-xl-5">
            <ul class="list-group mb-5 mb-md-0">
              <li class="list-group-item active text-center text-capitalize"><?= $ipsen['instalation']; ?></li>
              <li class="list-group-item">
                <a href="https://www.ipsen.de/home/products/atmosphere-technology/installation-technology/pusher-carburizing-facility" target="_blank"><img src="images/carburizing.jpg" alt="carburizing" class="img-thumbnail mr-3">
                <?= $ipsen['instalation1']; ?></a>
              </li>
              <li class="list-group-item">
                <a href="https://www.ipsen.de/home/products/atmosphere-technology/installation-technology/pusher-nitrocarburizing-facility" target="_blank"><img src="images/nitrocarburizing.jpg" alt="nitrocarburizing" class="img-thumbnail mr-3">
                <?= $ipsen['instalation2']; ?></a>
              </li>
              <li class="list-group-item">
                <a href="https://www.ipsen.de/home/products/atmosphere-technology/installation-technology/rotary-hearth-furnace" target="_blank"><img src="images/rotary.jpg" alt="rotary" class="img-thumbnail mr-3">
                <?= $ipsen['instalation3']; ?></a>
              </li>
            </ul>
          </div>

          <div class="col-12 col-md-6 col-xl-4">
            <ul class="list-group mb-5">
              <li class="list-group-item active text-center text-capitalize"><?= $ipsen['peripherie']; ?></li>
              <li class="list-group-item">
                <a href="https://www.ipsen.de/home/products/atmosphere-technology/ancillary-equipment/tempering-08216" target="_blank"><img src="images/tempering.jpg" alt="tempering" class="img-thumbnail mr-3">
                <?= $ipsen['peripherie1']; ?></a>
              </li>
              <li class="list-group-item">
                <a href="https://www.ipsen.de/home/products/atmosphere-technology/ancillary-equipment/washer-082016" target="_blank"><img src="images/washer.jpg" alt="washer" class="img-thumbnail mr-3">
                <?= $ipsen['peripherie2']; ?></a>
              </li>
              <li class="list-group-item">
                <a href="https://www.ipsen.de/home/products/atmosphere-technology/ancillary-equipment/loader-082016" target="_blank"><img src="images/loader.jpg" alt="loader" class="img-thumbnail mr-3">
                <?= $ipsen['peripherie3']; ?></a>
              </li>
              <li class="list-group-item">
                <a href="https://www.ipsen.de/home/products/software/carb-o-prof" target="_blank"><img src="images/carb-o-prof.jpg" alt="carb-o-prof" class="img-thumbnail mr-3">
                <?= $ipsen['peripherie4']; ?></a>
              </li>
              <li class="list-group-item">
                <a href="https://www.ipsen.de/home/products/software/automag" target="_blank"><img src="images/automag.jpg" alt="automag" class="img-thumbnail mr-3">
                <?= $ipsen['peripherie5']; ?></a>
              </li>
            </ul>
          </div>

        </div>
      </div>

      <div class="ipsenVacuum">
        <h4 class="mb-5"><?= $ipsen['vacuum']; ?></h4>
        <div class="row">

          <div class="col-12 col-md-5">
              <ul class="list-group mb-5 mb-md-0">
                <li class="list-group-item active text-center text-capitalize"><?= $ipsen['horizontal']; ?></li>
                <li class="list-group-item">
                  <a href="https://www.ipsen.de/home/products/vacuum-technology/horizontal-furnaces/turbo%C2%B2treater" target="_blank"><img src="images/turbotreater.jpg" alt="turbotreater" class="img-thumbnail mr-3">
                  <?= $ipsen['horizontal1']; ?></a>
                </li>
                <li class="list-group-item">
                  <a href="https://www.ipsen.de/home/products/vacuum-technology/horizontal-furnaces/vdr" target="_blank"><img src="images/vdr.jpg" alt="vdr" class="img-thumbnail mr-3">
                  <?= $ipsen['horizontal2']; ?></a>
                </li>
                <li class="list-group-item">
                  <a href="https://www.ipsen.de/home/products/vacuum-technology/horizontal-furnaces/titan-e6" target="_blank"><img src="images/titane6.jpg" alt="titane6" class="img-thumbnail mr-3">
                  <?= $ipsen['horizontal3']; ?></a>
                </li>
                <li class="list-group-item">
                  <a href="https://www.ipsen.de/home/products/vacuum-technology/horizontal-furnaces/vdfc-type" target="_blank"><img src="images/vdfctype.jpg" alt="titane6" class="img-thumbnail mr-3">
                  <?= $ipsen['horizontal4']; ?></a>
                </li>
                <li class="list-group-item">
                  <a href="https://www.ipsen.de/home/products/vacuum-technology/horizontal-furnaces/gl" target="_blank"><img src="images/gltype.jpg" alt="gltype" class="img-thumbnail mr-3">
                  <?= $ipsen['horizontal5']; ?></a>
                </li>
              </ul>
            </div>

            <div class="col-12 col-md-5">
            <ul class="list-group mb-5 mb-md-0">
              <li class="list-group-item active text-center text-capitalize"><?= $ipsen['vertical']; ?></li>
              <li class="list-group-item">
                <a href="https://www.ipsen.de/home/products/vacuum-technology/vertical-furnaces/vr/vrk-type" target="_blank"><img src="images/vrvrktype.jpg" alt="vrvrktype" class="img-thumbnail mr-3">
                <?= $ipsen['vertical1']; ?></a>
              </li>
              <li class="list-group-item">
                <a href="https://www.ipsen.de/home/products/vacuum-technology/vertical-furnaces/vvfc/vvtc-type" target="_blank"><img src="images/vvfcvvtctype.jpg" alt="vvfcvvtctype" class="img-thumbnail mr-3">
                <?= $ipsen['vertical2']; ?></a>
              </li>
            </ul>
          </div>

        </div>
      </div>

    </div>
  </div>

</div>

<?php include 'shared/footer.php'; ?>