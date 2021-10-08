<?php snippet('header') ?>
<body class="artist-archive">
  <div class="page"> 

    <?php snippet('nav') ?>

    <!-- Page content -->
    <main class="artists">
      <div class="flex-column">

        <div class="item c2 no-padding">
          <div class="sub-title desktop">Artists</div>
          <div class="artists-list">
            <?php foreach($page->children()->listed()->sortBy('lastName', 'asc',) as $artist): ?>
              <div class="link" >
                <h2>
                  <a href="<?= $artist->url() ?>">
                    <?= $artist->firstName()->text() ?> <?= $artist->lastName()->text() ?>
                  </a>
                </h2>
                <span><?= $artist->bios()->text() ?></span>
              </div>
            <?php endforeach ?>
          </div> 
        </div>

        <div class="flex-artists item c2 no-padding item-relative">
          <?php $images = $page->images() ?>
          <?php if ($images->isNotEmpty()) : ?>
            <?php foreach($images as $image): ?>
              <?php if($image->orientation()==="portrait"): ?>
                <img class="artists-list-img portrait-img" src="<?= $image->resize(null, null, 90)->url() ?>">
              <?php else: ?>
                <img class="artists-list-img" src="<?= $image->resize(null, null, 90)->url() ?>">
              <?php endif ?>
            <?php endforeach ?>
          <?php endif ?>
        </div>
      </div>
    </main>

  </div>
<?php snippet('footer') ?>
