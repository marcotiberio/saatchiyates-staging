<?php snippet('header') ?>

<body class="home">

<?php if($file = $page->image('Ben-Spiers-Homepage.jpeg')): ?>
  <div class="page" style="background-image: url(<?= $file->url() ?>)">  
<?php endif ?>  

    <?php snippet('nav') ?>

    <!-- Page content -->  
    <main> 
      <div class="align-bottom desktop">
        <span><?= $page->exhibitonSubHeadline()->html() ?></span>
        <span><?= $page->exhibitionDate()->html() ?></span>
        <h1 class="t-20"><?= $page->exhibitionName()->html() ?></h1>
      </div>
    </main>

  </div>
<?php snippet('footer') ?>
