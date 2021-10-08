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
            $currentExhibitions =  $page->currentExhibitions()->toPages();
            foreach($currentExhibitions as $currentExhibitions): ?>
              <div>
                  <h2><?= $currentExhibitions->name()->text() ?></h2>
                  <span><?= $currentExhibitions->dates()->text() ?></span>
                  <a class="link selected" href="<?= $currentExhibitions->url() ?>">View exhibition</a>
              </div>
            <?php endforeach ?>
          </div>
        </div>
        <!-- Current Exhibition -->

        <!-- Swiper -->
        <div class="item c-special-7">
          <div class="swiper exhibitionSwiper">
            <div class="swiper-wrapper">
            <?php foreach($page->children()->listed()->sortBy('name', 'asc',) as $image): ?>
              <?php foreach($page->slideshow()->yaml() as $imageslideshow): ?>
                <div class="swiper-slide">
                    <?php if($imageslideshow = $page->image($imageslideshow)): ?>
                      <?= $imageslideshow->crop(1200,500)->html(); ?>  		    
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
          $pastExhibitions =  $page->pastExhibitions()->toPages();
          foreach($pastExhibitions as $pastExhibitions): ?>
            <h2><a class="link" href="<?= $pastExhibitions->url() ?>"><?= $pastExhibitions->name()->text() ?></a></h2>
            <span><?= $pastExhibitions->dates()->text() ?></span>
            <span><?= $pastExhibitions->exhibitionType()->text() ?></span>
          <?php endforeach ?>
        </div>
      </div>
      <!-- Past Exhibitions -->
    </main>

  </div>
<?php snippet('footer') ?>
