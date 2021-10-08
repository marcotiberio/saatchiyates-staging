<?php snippet('header') ?>
<body class="exhibition-single">
  <div class="page"> 

    <?php snippet('nav') ?>

    <!-- Page content -->
    <main class="artist-detail container">
      <div class="flex-column">
        <div class="item c-special-2 side-divider">
          <div class="sub-title">
            <a class="index-btn" href="<?= url('exhibitions') ?>"><img src="<?= url('assets/img/Previous.svg')?>">Exhibitions</a>
            <div class="side-info">
              <h2><?= $page->name()->text() ?></h2>
              <div class="info">
                <div><?= $page->dates()->text() ?></div>
                <div class="info-bottom">
                  <a id="bio-btnSide" class="bio-btn selected" href="#">About the exhibition</a>
                  <?php foreach ($page->files()->filterBy('template', 'cv') as $cv): ?>
                  <a class="selected l-40" target="_blank" href="<?= $cv->url() ?>">
                    Buy Catalogue
                  </a>
                  <?php endforeach ?>
                </div>
              </div>
              <div class="bio-container-side">
                <p><?= $page->exhibitionDetail()->kirbytextinline() ?></p>
              </div>
            </div>
          </div>
        </div>

        <div class="item c-special-8 column-centre">
          <div class="gallery-container">
            <div class="artist-profile">
              <h1><?= $page->name()->text() ?></h1>
              <div class="info">
                <div class="t-20"><?= $page->dates()->text() ?></div>
                <div class="t-80">
                  <a id="bio-btnCenter" class="selected" href="#">About the exhibition</a>
                  <a id="cat-btn" class="selected l-40" target="#">Buy catalogues</a>
                </div>
              </div>
              <div class="bio-container-center exhibition-details">
                <p><?= $page->exhibitionDetail()->kirbytextinline() ?></p>
              </div>
              <div class="qr-container">
                <p><?= $page->additionalDropdown()->kirbytextinline() ?></p>
              </div>
            </div>
          </div>

          <!-- Swiper -->
          <div class="swiper exhibiotionSwiper">
            <div class="swiper-wrapper">
              <?php foreach($page->slideshow()->yaml() as $imageslideshow): ?>
                <div class="swiper-slide">
                    <?php if($imageslideshow = $page->image($imageslideshow)): ?>
                      <?= $imageslideshow->crop(1200,500)->html(); ?>  		    
                    <?php endif ?>
                </div>
              <?php endforeach; ?>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
          </div>
          <!-- Swiper -->



          <div class="flex-column t-40">
            <?php foreach ($page->images()->filterBy('template', '!=', 'profile') as $image): ?>
              <?php if ($image->isEmpty()): ?>
                <div class="item c3 w1">
              <?php else: ?>
                <div class="item <?= $image->Column() ?> w1">
              <?php endif ?>
                <img src="<?= $image->resize(null, null, 90)->url() ?>">
                <div class="caption">
                  <div><?= $image->caption() ?></div>
                  <div><?= $image->description() ?></div>
                </div>
              </div>
            <?php endforeach ?>

          </div>

          <div class="cat-buy">
            <?= $page->shopifyButtonDiv()->kirbytextinline() ?>
            <?= $page->shopifyButton()->kirbytextinline() ?>
          </div>
        </div>

        <div class="item c-special-1 desktop column-right">
          <div>View as</div>
          <div class="t-10">
            <span class="view-stack-btn"><img class="active" src="<?= url('assets/img/View-Stack.svg')?>"></span>
            <span class="view-index-btn l-10"><img src="<?= url('assets/img/View-Index.svg')?>"></span>       
          </div> 
        </div>
      </div>
    </main>

  </div>
<?php snippet('footer') ?>

  