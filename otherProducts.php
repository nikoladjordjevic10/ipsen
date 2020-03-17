<?php include 'shared/header.php'; ?>
<?php include 'shared/hiddenSidebar.php'; ?>

<div class="content">
  <div class="stripe"></div>
  <h2><?= $otherProducts['title']; ?></h2>
  <div class="row mb-3 p-3 p-sm-0">
    <div class="container otherProductsInfo">
      <p class="mb-4"><?= $otherProducts['body']; ?></p>
      <ul class="mb-5">
        <li><a href="#grids"><?= $otherProducts['nav1']; ?></a></li>
        <li><a href="#coatings"><?= $otherProducts['nav2']; ?></a></li>
        <li><?= $otherProducts['nav3']; ?></li>
        <li><?= $otherProducts['nav4']; ?></li>
      </ul>
      
      <div id="grids">
        <h4 class="mb-4"><?= $otherProducts['gridsBasketsTitle']; ?></h4>
        <p class="mb-4"><?= $otherProducts['gridsBasketsBody']; ?></p>
        <div class="container">
          <div class="row justify-content-around p-3 p-md-0">

            <div class="col-md-5 p-0 shadow gridsBaskets">
              <img src="images/grid.jpg" alt="grid.jpg">
              <figcaption><?= $otherProducts['gridsBasketsImg1']; ?></figcaption>
            </div>
            <div class="col-md-5 p-0 mt-5 mt-md-0 shadow gridsBaskets">
              <img src="images/basket.jpg" alt="basket.jpg">
              <figcaption><?= $otherProducts['gridsBasketsImg2']; ?></figcaption>
            </div>

          </div>
        </div>
      </div>
      
      <div id="coatings" class="mb-4">
        <h4 class="mb-4"><?= $otherProducts['coatingsTitle']; ?></h4>
        <p><?= $otherProducts['coatingsBody']; ?></p>
      </div>

    </div>
  </div>

  <div class="row p-3 p-sm-0">
    <nav class="navbar navbar-expand-xl navbar-dark w-100 otherProducts">
      <div class="container">
        <a class="navbar-brand" href="http://www.dam-gmbh.de/en/" target="_blank">LUISO</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav main-nav">

            <li class="nav-item dropdown multi-level-dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <?= $otherProducts['nitriding']; ?>
              </a>
              <ul class="dropdown-menu rounded-0 z-depth-1 animate slideIn">
                <li class="dropdown-item dropdown-submenu py-0 px-2">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <?= $otherProducts['ceramic']; ?>
                  </a>
                  <ul class="dropdown-menu rounded-0 z-depth-1 animate slideIn">
                    <li class="dropdown-item py-0 px-2">
                      <a class="nav-link dropdown-toggle" href="http://www.dam-gmbh.de/en/nitriding-nitrocarburising/luiso-w21.html" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false" target="_blank">
                        W21
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="dropdown-item dropdown-submenu py-0 px-2">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <?= $otherProducts['metal']; ?>
                  </a>
                  <ul class="dropdown-menu rounded-0 z-depth-1 animate slideIn">
                    <li class="dropdown-item py-0 px-2">
                      <a class="nav-link dropdown-toggle" href="http://www.dam-gmbh.de/en/nitriding-nitrocarburising/luiso-w25.html" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false" target="_blank">
                        W25
                      </a>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>

            <li class="nav-item dropdown multi-level-dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <?= $otherProducts['plasma']; ?>
              </a>
              <ul class="dropdown-menu rounded-0 z-depth-1 animate slideIn">
                <li class="dropdown-item dropdown-submenu py-0 px-2">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <?= $otherProducts['ceramic']; ?>
                  </a>
                  <ul class="dropdown-menu rounded-0 z-depth-1 animate slideIn">
                    <li class="dropdown-item py-0 px-2">
                      <a class="nav-link dropdown-toggle" href="http://www.dam-gmbh.de/en/plasmanitriding/luiso-w53.html" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false" target="_blank">
                        W53
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="dropdown-item dropdown-submenu py-0 px-2">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <?= $otherProducts['copper']; ?>
                  </a>
                  <ul class="dropdown-menu rounded-0 z-depth-1 animate slideIn">
                    <li class="dropdown-item py-0 px-2">
                      <a class="nav-link dropdown-toggle" href="http://www.dam-gmbh.de/en/plasmanitriding/luiso-w51.html" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false" target="_blank">
                        W51
                      </a>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>

            <li class="nav-item dropdown multi-level-dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <?= $otherProducts['gas']; ?>
              </a>
              <ul class="dropdown-menu rounded-0 z-depth-1 animate slideIn">
                <li class="dropdown-item dropdown-submenu py-0 px-2">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <?= $otherProducts['gasWashable']; ?>
                  </a>
                  <ul class="dropdown-menu rounded-0 z-depth-1 animate slideIn">
                    <li class="dropdown-item dropdown-submenu py-0 px-2">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <?= $otherProducts['washableOption1']; ?>
                      </a>
                      <ul class="dropdown-menu rounded-0 z-depth-1 animate slideIn">
                        <li class="dropdown-item dropdown-submenu py-0 px-2">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <?= $otherProducts['boron']; ?>
                          </a>
                          <ul class="dropdown-menu rounded-0 z-depth-1 animate slideIn">
                            <li class="dropdown-item dropdown-submenu py-0 px-2">
                              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <?= $otherProducts['boronSuboption1']; ?>
                              </a>
                              <ul class="dropdown-menu rounded-0 z-depth-1 animate slideIn">
                                <li class="dropdown-item dropdown-submenu py-0 px-2">
                                  <a class="nav-link dropdown-toggle" href="http://www.dam-gmbh.de/en/gas-carburising/luiso-w31.html" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false" target="_blank">
                                    W31
                                  </a>
                                </li>
                              </ul>
                            </li>
                            <li class="dropdown-item dropdown-submenu py-0 px-2">
                              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <?= $otherProducts['boronSuboption2']; ?>
                              </a>
                              <ul class="dropdown-menu rounded-0 z-depth-1 animate slideIn">
                                <li class="dropdown-item dropdown-submenu py-0 px-2">
                                  <a class="nav-link dropdown-toggle" href="http://www.dam-gmbh.de/en/gas-carburising/luiso-w30.html" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false" target="_blank">
                                    W30
                                  </a>
                                </li>
                              </ul>
                            </li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                    <li class="dropdown-item dropdown-submenu py-0 px-2">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <?= $otherProducts['washableOption2']; ?>
                      </a>
                      <ul class="dropdown-menu rounded-0 z-depth-1 animate slideIn">
                        <li class="dropdown-item dropdown-submenu py-0 px-2">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <?= $otherProducts['washableSuboption1']; ?>
                          </a>
                          <ul class="dropdown-menu rounded-0 z-depth-1 animate slideIn">
                            <li class="dropdown-item dropdown-submenu py-0 px-2">
                              <a class="nav-link dropdown-toggle" href="http://www.dam-gmbh.de/en/gas-carburising/luiso-w34.html" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false" target="_blank">
                                W34
                              </a>
                            </li>
                          </ul>
                        </li>
                        <li class="dropdown-item dropdown-submenu py-0 px-2">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <?= $otherProducts['washableSuboption2']; ?>
                          </a>
                          <ul class="dropdown-menu rounded-0 z-depth-1 animate slideIn">
                            <li class="dropdown-item dropdown-submenu py-0 px-2">
                              <a class="nav-link dropdown-toggle" href="http://www.dam-gmbh.de/en/gas-carburising/luiso-w36.html" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false" target="_blank">
                                W36
                              </a>
                            </li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>

              </ul>
            </li>

            <li class="nav-item dropdown multi-level-dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <?= $otherProducts['oxidation']; ?>
              </a>
              <ul class="dropdown-menu rounded-0 z-depth-1 animate slideIn">
                <li class="dropdown-item dropdown-submenu py-0 px-2">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <?= $otherProducts['spreadable']; ?>
                  </a>
                  <ul class="dropdown-menu rounded-0 z-depth-1 animate slideIn">
                    <li class="dropdown-item py-0 px-2">
                      <a class="nav-link dropdown-toggle" href="http://www.dam-gmbh.de/en/annealing-oxidation/luiso-w61.html" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false" target="_blank">
                        W61
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="dropdown-item dropdown-submenu py-0 px-2">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <?= $otherProducts['sealmass']; ?>
                  </a>
                  <ul class="dropdown-menu rounded-0 z-depth-1 animate slideIn">
                    <li class="dropdown-item py-0 px-2">
                      <a class="nav-link dropdown-toggle" href="http://www.dam-gmbh.de/en/annealing-oxidation/luiso-w63.html" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false" target="_blank">
                        W63
                      </a>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>

            <li class="nav-item dropdown multi-level-dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <?= $otherProducts['vacuum']; ?>
              </a>
              <ul class="dropdown-menu rounded-0 z-depth-1 animate slideIn">
                <li class="dropdown-item dropdown-submenu py-0 px-2">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <?= $otherProducts['vacuumWashable']; ?>
                  </a>
                  <ul class="dropdown-menu rounded-0 z-depth-1 animate slideIn">
                    <li class="dropdown-item dropdown-submenu py-0 px-2">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <?= $otherProducts['vacuumOption1']; ?>
                      </a>
                      <ul class="dropdown-menu rounded-0 z-depth-1 animate slideIn">
                        <li class="dropdown-item dropdown-submenu py-0 px-2">
                          <a class="nav-link dropdown-toggle" href="http://www.dam-gmbh.de/en/vacuum-carburising/luiso-w44.html" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false" target="_blank">
                            W44
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="dropdown-item dropdown-submenu py-0 px-2">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <?= $otherProducts['vacuumOption2']; ?>
                      </a>
                      <ul class="dropdown-menu rounded-0 z-depth-1 animate slideIn">
                        <li class="dropdown-item dropdown-submenu py-0 px-2">
                          <a class="nav-link dropdown-toggle" href="http://www.dam-gmbh.de/en/vacuum-carburising/luiso-w45.html" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false" target="_blank">
                            W45
                          </a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>

            <li class="nav-item dropdown multi-level-dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <?= $otherProducts['brazing']; ?>
              </a>
              <ul class="dropdown-menu rounded-0 z-depth-1 animate slideIn">
                <li class="dropdown-item dropdown-submenu py-0 px-2">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <?= $otherProducts['ceramic']; ?>
                  </a>
                  <ul class="dropdown-menu rounded-0 z-depth-1 animate slideIn">
                    <li class="dropdown-item dropdown-submenu py-0 px-2">
                      <a class="nav-link dropdown-toggle" href="http://www.dam-gmbh.de/en/brazing-induction-hardening/luiso-w71.html" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false" target="_blank">
                        W71
                      </a>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>

          </ul>
        </div>

      </div>

    </nav>
  </div>

  <div class="row">
    <div class="container otherProductsInfo">
      <p class="mb-5 p-3 p-sm-0"><?= $otherProducts['luisoBody']; ?></p>
    </div>
  </div>

</div>

<?php include 'shared/footer.php'; ?>

