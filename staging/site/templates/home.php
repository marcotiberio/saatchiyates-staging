<?php snippet('header') ?>

<body class="home">

<?php
  $images = $page->BackgroundImageDesktop()->toFiles();
  foreach($images as $image): ?>
  <div class="page desktop" style="background-image: url(<?= $image->url() ?>)">  
  <?php endforeach ?>



    <?php snippet('nav') ?>

    <!-- Page content -->  
    <main> 
      <div class="align-bottom mobile">
        <span><?= $page->exhibitonSubHeadline()->html() ?></span>
        <span><?= $page->exhibitionDate()->html() ?></span>
        <h1 class="t-20"><?= $page->exhibitionName()->html() ?></h1>
      </div>
    </main>

  </div>

  <?php
  $images = $page->BackgroundImageMobile()->toFiles();
  foreach($images as $image): ?>
  <div class="page mobile" style="background-image: url(<?= $image->url() ?>)">  
  <?php endforeach ?>



    <?php snippet('nav') ?>

    <!-- Page content -->  
    <main> 
      <div class="align-bottom mobile">
        <span><?= $page->exhibitonSubHeadline()->html() ?></span>
        <span><?= $page->exhibitionDate()->html() ?></span>
        <h1 class="t-20"><?= $page->exhibitionName()->html() ?></h1>
      </div>
    </main>

  </div>
<?php snippet('footer') ?>
