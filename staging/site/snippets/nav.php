<?php
  // get user url
  $e = explode("?",basename($_SERVER['REQUEST_URI']));
  $filename = $e[0];
?>

<!-- Navbar -->
<header class="desktop">
  <nav>

    <div class="logo">
      <a class="logotype" href="<?= $site->url() ?>">
      <!-- <?php if($filename=="saatchi-yates-cms" || $filename=='saatchi-yates'){ ?>
        <img class="logo" src="<?= url('assets/img/SY-Full-logo-w.svg')?>">
      <?php } else { ?> 
        <img class="logo" src="<?= url('assets/img/SY-Full-logo.svg')?>">
      <?php } ?> -->
      <?= $site->title() ?>
      </a>
    </div>

    <div class="menu">
      <?php
      // main menu items
      $items = $pages->find('artists','exhibitions','private-sales','news','contact');
      if($items and $items->isNotEmpty()):
      ?>
        <?php foreach($items as $item): ?>
          <a<?php e($item->isOpen(), ' class="selected"') ?> href="<?= $item->url() ?>"><?= $item->title()->html() ?></a>
        <?php endforeach ?>
      <?php endif ?>

    
      <!-- <a <?php if($filename=="artists") echo "class='selected'" ?>href="artists.php">Artists</a>
      <a <?php if($filename=="exhibitions") echo "class='selected'" ?>href="exhibitions.php">Exhibitions</a>
      <a <?php if($filename=="private-sales") echo "class='selected'" ?>href="private-sales/">Private Sales</a>
      <a <?php if($filename=="news") echo "class='selected'" ?>href="news.php">News</a>
      <a <?php if($filename=="contact") echo "class='selected'" ?>href="saatchi-yates-cms/contact/">Contact</a> -->
    </div>
    
    <span class="notice">
        <span class="dot"></span>
        <?php if(date("l")=="Sunday"){ ?>
          <span>Open today: 12pm - 6pm</span>
        <?php } else { ?>
          <span>Open today: 10am - 6pm</span>
        <?php } ?>
      </span>
  </nav>
</header>

<header class="mobile">

  <a class="logo-mobile" href="<?= $site->url() ?>">
    <!-- <?php if($filename=="saatchi-yates-cms" || $filename=='saatchi-yates'){ ?>
      <img class="logo" src="<?= url('assets/img/SY-Full-logo-w.svg')?>">
    <?php } else { ?> 
      <img class="logo" src="<?= url('assets/img/SY-Full-logo.svg')?>">
    <?php } ?> -->
    <span class="logotype"><?= $site->title() ?></span>
  </a>

  <div class="menu-btn">Menu 
    <?php if($filename=="saatchi-yates-cms" || $filename=='saatchi-yates'){ ?>
      <img src="<?= url('assets/img/Menu-w.svg')?>">
    <?php } else { ?>
      <img src="<?= url('assets/img/Menu.svg')?>">
    <?php } ?>
    </a>
  </div>

  <nav>
    <a href="index.php"><span class="logotype"><?= $site->title() ?></span></a>
    <?php
    // main menu items
    $items = $pages->find('artists','exhibitions','private-sales','news','contact');
    if($items and $items->isNotEmpty()):
    ?>
      <?php foreach($items as $item): ?>
        <a href="<?= $item->url() ?>"><?= $item->title()->html() ?></a>
      <?php endforeach ?>
    <?php endif ?>

    <div class="notice-mobile">
      <div class="marquee">
        <div> 
          <span class="dot"></span>
          <?php if(date("l")=="Sunday"){ ?>
            <span>Open today: 12pm - 6pm</span>
          <?php } else { ?>
            <span>Open today: 10am - 6pm</span>
          <?php } ?>
          <span class="dot"></span>
          <span>Currently Showing: <?= $site->mobileExhibition()->text() ?></span>
        </div>
      </div>
    </div>
    <div class="extra">
      <div><?= $site->mobileAddress()->text() ?></div>
      <div><?= $site->mobileOpeningHours()->kirbytextinline() ?></div>
    </div>
    <div class="close-btn">Close <img src="<?= url('assets/img/Close.svg')?>"></div>
  </nav>
  
</header>
