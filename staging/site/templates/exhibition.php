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
          <div class="swiper exhibitionSwiper">
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
            <div class="swiper-pagination" id="progress"></div>
          </div>
          <!-- Swiper -->

          <div class="flex-column t-40">
            <?php
            $imageGallery =  $page->gallery()->toFiles();
            foreach($imageGallery as $imageGallery): ?>
              <?php if ($imageGallery->isEmpty()): ?>
                <div class="item c3 w1">
              <?php else: ?>
                <div class="item <?= $imageGallery->Column() ?> w1">
              <?php endif ?>
              <img src="<?= $imageGallery->resize(null, null, 90)->url() ?>">
              <div class="caption">
                <div><?= $imageGallery->caption() ?></div>
                <div><?= $imageGallery->description() ?></div>
              </div>
              </div>
            <?php endforeach ?>
          </div>

          <div class="cat-buy" id='product-component-<?= $page->shopifyButtonId1()->html() ?>'></div>
          <script type="text/javascript">
          /*<![CDATA[*/
          (function () {
            var scriptURL = 'https://sdks.shopifycdn.com/buy-button/latest/buy-button-storefront.min.js';
            if (window.ShopifyBuy) {
              if (window.ShopifyBuy.UI) {
                ShopifyBuyInit();
              } else {
                loadScript();
              }
            } else {
              loadScript();
            }
            function loadScript() {
              var script = document.createElement('script');
              script.async = true;
              script.src = scriptURL;
              (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(script);
              script.onload = ShopifyBuyInit;
            }
            function ShopifyBuyInit() {
              var client = ShopifyBuy.buildClient({
                domain: 'saatchi-yates-shop.myshopify.com',
                storefrontAccessToken: '74b93b7e6803a291651c7597551ca0fa',
              });
              ShopifyBuy.UI.onReady(client).then(function (ui) {
                ui.createComponent('product', {
                  id: '<?= $page->shopifyButtonId2()->html() ?>',
                  node: document.getElementById('product-component-<?= $page->shopifyButtonId1()->html() ?>'),
                  moneyFormat: '%C2%A3%7B%7Bamount%7D%7D',
                  options: {
            "product": {
              "styles": {
                "product": {
                  "@media (min-width: 601px)": {
                    "max-width": "100%",
                    "margin-left": "0",
                    "margin-bottom": "50px"
                  },
                  "text-align": "left"
                },
                "title": {
                  "font-family": "Arial, sans-serif",
                  "font-weight": "normal",
                  "font-size": "26px",
                  "color": "#000000"
                },
                "button": {
                  "font-family": "Arial, sans-serif",
                  ":hover": {
                    "background-color": "#050e00"
                  },
                  "background-color": "#030800",
                  ":focus": {
                    "background-color": "#050e00"
                  },
                  "padding-left": "34px",
                  "padding-right": "34px"
                },
                "price": {
                  "font-family": "Big Caslon, serif",
                  "font-size": "18px",
                  "color": "#000000"
                },
                "compareAt": {
                  "font-family": "Big Caslon, serif",
                  "font-size": "15.299999999999999px",
                  "color": "#000000"
                },
                "unitPrice": {
                  "font-family": "Big Caslon, serif",
                  "font-size": "15.299999999999999px",
                  "color": "#000000"
                },
                "description": {
                  "font-family": "Arial, sans-serif"
                }
              },
              "layout": "horizontal",
              "contents": {
                "img": false,
                "imgWithCarousel": true,
                "description": true
              },
              "width": "100%",
              "text": {
                "button": "Add to cart"
              }
            },
            "productSet": {
              "styles": {
                "products": {
                  "@media (min-width: 601px)": {
                    "margin-left": "-20px"
                  }
                }
              }
            },
            "modalProduct": {
              "contents": {
                "img": false,
                "imgWithCarousel": true,
                "button": false,
                "buttonWithQuantity": true
              },
              "styles": {
                "product": {
                  "@media (min-width: 601px)": {
                    "max-width": "100%",
                    "margin-left": "0px",
                    "margin-bottom": "0px"
                  }
                },
                "button": {
                  "font-family": "Arial, sans-serif",
                  ":hover": {
                    "background-color": "#050e00"
                  },
                  "background-color": "#030800",
                  ":focus": {
                    "background-color": "#050e00"
                  },
                  "padding-left": "34px",
                  "padding-right": "34px"
                },
                "title": {
                  "font-family": "Helvetica Neue, sans-serif",
                  "font-weight": "bold",
                  "font-size": "26px",
                  "color": "#4c4c4c"
                },
                "price": {
                  "font-family": "Helvetica Neue, sans-serif",
                  "font-weight": "normal",
                  "font-size": "18px",
                  "color": "#4c4c4c"
                },
                "compareAt": {
                  "font-family": "Helvetica Neue, sans-serif",
                  "font-weight": "normal",
                  "font-size": "15.299999999999999px",
                  "color": "#4c4c4c"
                },
                "unitPrice": {
                  "font-family": "Helvetica Neue, sans-serif",
                  "font-weight": "normal",
                  "font-size": "15.299999999999999px",
                  "color": "#4c4c4c"
                },
                "description": {
                  "font-family": "Helvetica Neue, sans-serif",
                  "font-weight": "normal",
                  "font-size": "14px",
                  "color": "#4c4c4c"
                }
              },
              "text": {
                "button": "Add to cart"
              }
            },
            "option": {},
            "cart": {
              "styles": {
                "button": {
                  "font-family": "Arial, sans-serif",
                  ":hover": {
                    "background-color": "#050e00"
                  },
                  "background-color": "#030800",
                  ":focus": {
                    "background-color": "#050e00"
                  }
                }
              },
              "text": {
                "total": "Subtotal",
                "button": "Checkout"
              }
            },
            "toggle": {
              "styles": {
                "toggle": {
                  "font-family": "Arial, sans-serif",
                  "background-color": "#030800",
                  ":hover": {
                    "background-color": "#050e00"
                  },
                  ":focus": {
                    "background-color": "#050e00"
                  }
                }
              }
            }
          },
                });
              });
            }
          })();
          /*]]>*/
          </script>
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

  