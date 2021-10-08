<?php snippet('header') ?>
<body class="exhibition-archive">
  <div class="page"> 

    <?php snippet('nav') ?>

    <!-- Page content -->
    <main class="exhibitions container">
    
      <div class="flex-column reverse-order">

        <!-- Current Exhibition -->
        <div class="item c-special-5 current">
          <div class="sub-title">Current</div>
          <div>

            <?php
            $current =  $page->currentExhibitions()->toPages();
            foreach($current as $current): ?>
              <div>
                <h2><?= $current->name()->text() ?></h2>
                <span><?= $current->dates()->text() ?></span>
                <a class="link selected" href="<?= $current->url() ?>">View exhibition</a>
              </div>
            <?php endforeach ?>

            
          </div>
        </div>
        <!-- Current Exhibition -->

        <!-- Swiper -->
        <div class="item c-special-7">
          <div class="swiper exhibitionSwiper">
            <div class="swiper-wrapper">
            <?php 
            $current = $page->currentExhibitions()->toPages();
            foreach($current as $slideslide): ?>
              <?php foreach($slideslide->slideshow()->yaml() as $image): ?>
                <div class="swiper-slide">
                    <?php if($image = $slideslide->image($image)): ?>
                      <?= $image->crop(1200,500)->html(); ?>          
                    <?php endif ?>
                </div>
              <?php endforeach; ?>
            <?php endforeach ?>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
        <!-- Swiper -->

      </div>

      <!-- Past Exhibitions -->
      <div class="flex-column past-exhibitions">
        <div class="item c1 past-title">Past</div>
        <div class="item">
          <?php
          $past =  $page->pastExhibitions()->toPages();
          foreach($past as $past): ?>
            <h2><a class="link" href="<?= $past->url() ?>"><?= $past->name()->text() ?></a></h2>
            <span><?= $past->dates()->text() ?></span>
            <span><?= $past->exhibitionType()->text() ?></span>
          <?php endforeach ?>
        </div>
      </div>
      <!-- Past Exhibitions -->
    </main>

  </div>
<?php snippet('footer') ?>
