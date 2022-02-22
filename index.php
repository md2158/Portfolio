<?php
    define('SITE_KEY', '6Lc-H8kUAAAAAHv676hqeo8O_wbQXf0ZyTJd9HvO');
    define('SECRET_KEY', '6Lc-H8kUAAAAABfpFEq6JZI5MGOcKLHW5PWV9f66');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>MPro-Professional Solutions</title>
  <link rel="icon" href="img/mpro_favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/mdb.min.css">
  <link rel="stylesheet" href="css/style.css?v=1.01">
  <!-- Yandex.Metrika counter -->
  <script type="text/javascript" >
    (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
    m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(61891017, "init", {
          clickmap:true,
          trackLinks:true,
          accurateTrackBounce:true,
          webvisor:true
    });
  </script>
  <noscript><div><img src="https://mc.yandex.ru/watch/61891017" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
  <!-- /Yandex.Metrika counter -->
</head>
<body>

  <header>
    <nav class="navbar">
      <div class="container">
        <a class="navbar-brand mr-auto" href="#">
          <img src="img/logo-mpro_white.svg" alt="">
        </a>
        <ul class="list-unstyled">
          <li>
            <a href="https://github.com/merick2158" target="_blank">
              <i class="fab fa-github"></i>
            </a>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <div class="main-header">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6 col-12">
          <img class="w-100" src="img/programming2.gif" alt="">
        </div>
        <div class="col-12 px-4 pb-4 pt-1">
          <h1 class="lead text-center">We are very busy creating awesome staff for <b>You</b> <br/>and don't have time for our website :(</h1>
          <div class="animated fadeInDown slow infinite text-center mt-5 mb-n5">
            <i class="fas fa-angle-double-down"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="works">
    <div class="container">
      <div class="our-works">
        <p class="lead text-center"><b>Our Works:</b></p>
        <div class="row">
          <div class="col-12 order-1 order-md-2">
              <?php
                $works = array(
                    array("title" => "Denet.Pass", "imgUrl" => "img/works/denet_pass.jpg", "url" => "https://chrome.google.com/webstore/detail/denet-pass/hdpllppbfbcdiiggheokhenpikpjebcg", "urlText" => "deNet.Pass", "icons" => array("fab fa-vuejs", "fab fa-chrome")),
                    array("title" => "Denet Storage", "imgUrl" => "img/works/storage.denet.jpg", "url" => "https://github.com/DeNetPRO/StorageProvider", "urlText" => "storage.denet.pro", "icons" => array("fab fa-vuejs")),
                    array("title" => "Denet Sandbox", "imgUrl" => "img/works/sandbox.jpg", "url" => "https://mainnet.dfile.tech/", "urlText" => "mainnet.dfile.tech", "icons" => array("image" => array("img/metamask.png", "metamask-icon"), "fab fa-vuejs")),
                    array("title" => "DFile", "imgUrl" => "img/works/dfile.jpg", "url" => "https://dfile.tech/", "urlText" => "dFile.tech", "icons" => array("fab fa-gulp")),
                    array("title" => "Denet", "imgUrl" => "img/works/denet.jpg", "url" => "https://denet.pro/", "urlText" => "denet.pro", "icons" => array("fab fa-wordpress")),
                    array("title" => "Plisson", "imgUrl" => "img/works/plisson.jpg", "url" => "https://www.plisson1808.com/", "urlText" => "plisson1808.com", "icons" => array("image" => array("img/prestashop.png", "prestashop-icon"), "fas fa-shopping-basket")),
                    array("title" => "Unicday", "imgUrl" => "img/works/unicday.jpg", "url" => "https://unicday.com/", "urlText" => "unicday.com", "icons" => array("fab fa-wordpress", "fas fa-shopping-basket")),
                    array("title" => "Elba Concept", "imgUrl" => "img/works/elba.jpg", "url" => "https://elbaconcept.com/", "urlText" => "elbaconcept.com", "icons" => array("fab fa-wordpress", "fas fa-shopping-basket")),
                    array("title" => "JUS Parfums", "imgUrl" => "img/works/jus.jpg", "url" => "https://jusparfums.com/en/", "urlText" => "jusparfums.com", "icons" => array("image" => array("img/prestashop.png", "prestashop-icon"), "fas fa-shopping-basket")),
                    array("title" => "Fatih BBS", "imgUrl" => "img/works/fbbs.jpg", "url" => "https://fatih.sch.id/", "urlText" => "fatih.sch.id", "icons" => array("fab fa-wordpress")),
                    array("title" => "Panalpa", "imgUrl" => "img/works/panalpa.jpg", "url" => "https://panalpa.net/", "urlText" => "panalpa.net", "icons" => array("fas fa-globe")),
                    array("title" => "Pack Plus", "imgUrl" => "img/works/packPlus.jpg", "url" => "http://packp.ru/pererabotka.html", "urlText" => "packp.ru", "icons" => array("fas fa-globe")),
                    array("title" => "Sany", "imgUrl" => "img/works/sany.jpg", "url" => "https://sany.ru/", "urlText" => "sany.ru", "icons" => array("fab fa-wordpress")),
                    array("title" => "Sabon Holding", "imgUrl" => "img/works/sabon.jpg", "url" => "https://sabonholding.com/", "urlText" => "sabonholding.com", "icons" => array("fas fa-globe")),
                    array("title" => "Trinitario", "imgUrl" => "img/works/trinitario.jpg", "url" => "https://trinitario.ru/", "urlText" => "trinitario.ru", "icons" => array("fas fa-globe")),
                    array("title" => "Sparta", "imgUrl" => "img/works/sparta.jpg", "url" => "https://sparta-term.com/", "urlText" => "sparta-term.com", "icons" => array("fas fa-globe")),
                    array("title" => "Chugun Pro", "imgUrl" => "img/works/chugun-pro.jpg", "url" => "https://chugunpro.ru/", "urlText" => "chugunpro.ru", "icons" => array("fas fa-globe")),
                    array("title" => "Inkotech Catalog", "imgUrl" => "img/works/inkotech.jpg", "url" => "http://inkotech.ru/catalog/", "urlText" => "inkotech.ru/catalog", "icons" => array("fas fa-globe")),
                    array("title" => "InAshgabat News", "imgUrl" => "img/works/inashgabat.jpg", "url" => "https://ashgabat.in/en/", "urlText" => "ashgabat.in", "icons" => array("fab fa-wordpress")),
                    array("title" => "Poidem Bank HR", "imgUrl" => "img/works/poidem.jpg", "url" => "https://rabota.poidem.ru/", "urlText" => "rabota.poidem.ru", "icons" => array("fas fa-globe")),
                    array("title" => "Tac Hil", "imgUrl" => "img/works/tachil.jpg", "url" => "https://tachil.com/", "urlText" => "tachil.com", "icons" => array("fab fa-wordpress")),
                    array("title" => "BlicM", "imgUrl" => "img/works/blicm.jpg", "url" => "https://blicm.ru/", "urlText" => "blicm.ru", "icons" => array("fab fa-wordpress")),
                    array("title" => "CarStoris", "imgUrl" => "img/works/carstoris.jpg", "url" => "https://carstoris.ru/", "urlText" => "carstoris.ru", "icons" => array("fab fa-symfony")),
                    array("title" => "Sabbia Coffee", "imgUrl" => "img/works/sabbia.jpg", "url" => "https://sabbia-coffee.ru/", "urlText" => "Sabbia Coffee", "icons" => array("fas fa-globe")),
                    array("title" => "Interio-home", "imgUrl" => "img/works/interio-home.jpg", "url" => "https://interiohome.ee/", "urlText" => "interiohome.ee", "icons" => array("fas fa-globe")),
                    array("title" => "Lovince", "imgUrl" => "img/works/lovince.jpg", "url" => "https://lovince.ru/", "urlText" => "lovince.ru", "icons" => array("fas fa-globe")),
                    array("title" => "Otellie", "imgUrl" => "img/works/otellie.jpg", "url" => "https://otellie.ru/", "urlText" => "Otellie", "icons" => array("fas fa-globe")),
                    array("title" => "FMeter", "imgUrl" => "img/works/group-escort.jpg", "url" => "https://www.fmeter.ru/esp/promo/fn/", "urlText" => "fmeter.ru", "icons" => array("fas fa-globe")),
                    array("title" => "Gard", "imgUrl" => "img/works/gard.jpg", "url" => "https://gardtd.ru/", "urlText" => "Gard", "icons" => array("fas fa-globe")),
                    array("title" => "LMS", "imgUrl" => "img/works/lms.jpg", "url" => "https://lms-mode.com/", "urlText" => "lms-mode.com", "icons" => array("fab fa-wordpress")),
                    array("title" => "Giras shop", "imgUrl" => "img/works/giras-sp.jpg", "url" => "https://giras-sp.ru/", "urlText" => "giras-sp.ru", "icons" => array("fab fa-opencart", "fas fa-shopping-basket")),
                    array("title" => "Nail House Shop", "imgUrl" => "img/works/nailh.jpg", "url" => "https://nailh.ru/", "urlText" => "nailh.ru", "icons" => array("fab fa-opencart","fas fa-shopping-basket")),
                    array("title" => "Kharisma Bangsa", "imgUrl" => "img/works/kharisma.jpg", "url" => "http://www.kharismabangsa.sch.id/", "urlText" => "kharismabangsa.sch.id", "icons" => array( "fab fa-joomla")),
                    array("title" => "Vizitka CRM", "imgUrl" => "img/works/vizitka.jpg", "url" => "http://vizitka.test-onpromo.ru/", "urlText" => "vizitka.onpromo.ru", "icons" => array("fab fa-symfony")),
                    array("title" => "Context - Online Promo", "imgUrl" => "img/works/context.jpg", "url" => "http://context.test-onpromo.ru/", "urlText" => "context-onpromo.ru", "icons" => array("fab fa-wordpress")),
                    array("title" => "Avtador", "imgUrl" => "img/works/rosavtador.jpg", "url" => "http://vv-fad.ru/new_web/", "urlText" => "vv-fad.ru", "icons" => array("fab fa-wordpress")),
                    array("title" => "Quartet", "imgUrl" => "img/works/quartet.jpg", "url" => "https://quartet.demorosait.ru/", "urlText" => "Quartet", "icons" => array("fas fa-globe")),
                    array("title" => "Voyager", "imgUrl" => "img/works/voyager.jpg", "url" => "https://voyager.demorosait.ru/", "urlText" => "Voyager", "icons" => array("fas fa-globe")),
                    array("title" => "Beauty Shkaf Shop", "imgUrl" => "img/works/beauty-shkaf.jpg", "url" => "https://meret.pro/works/shkaf/", "urlText" => "beautyshkaf.shop", "icons" => array("fab fa-wordpress", "fas fa-shopping-basket")),
                    array("title" => "Beejier", "imgUrl" => "img/works/beejier.jpg", "url" => "https://meret.pro/works/beejier/", "urlText" => "Beejier", "icons" => array("fas fa-globe")),
                    array("title" => "Ideal Pro", "imgUrl" => "img/works/ideal-pro.jpg", "url" => "https://meret.pro/works/remont/", "urlText" => "Ремонт Безхлопот", "icons" => array("fas fa-globe")),
                    array("title" => "Uniteller", "imgUrl" => "img/works/uniteller.jpg", "url" => "https://meret.pro/works/uniteller/", "urlText" => "uniteller", "icons" => array("fas fa-globe")),
                    array("title" => "Dashoguz Tourism", "imgUrl" => "img/works/dtourism.jpg", "url" => "https://meret.pro/works/dashoguz-tourism", "urlText" => "turkmen.tours", "icons" => array("fab fa-wordpress")),
                    array("title" => "Balakan Store", "imgUrl" => "img/works/balakan.jpg", "url" => "https://meret.pro/works/balakan/", "urlText" => "balakan.store", "icons" => array("fab fa-wordpress")),
                    array("title" => "Korpeler Store", "imgUrl" => "img/works/korpeler.jpg", "url" => "https://meret.pro/works/korpelerStore/", "urlText" => "korpeler.store", "icons" => array("fas fa-globe")),
                    array("title" => "Porfolio", "imgUrl" => "img/works/atajan.jpg", "url" => "https://meret.pro/works/ataweb/", "urlText" => "Portfolio", "icons" => array("fas fa-globe")),
                    array("title" => "АО КБХИММАШ", "imgUrl" => "img/works/kbh.jpg", "url" => "https://meret.pro/works/kbh/", "urlText" => "АО КБХИММАШ", "icons" => array("fas fa-globe")),
                );
                $stack = array()
              ?>
            <div class="row">
            <?php foreach ($works as $value) { ?>
                <!-- <?php echo $value['title']; ?> -->
              <div class="col-md-4 col-sm-6 col-12 mb-4">
                <a href="<?php echo $value['url']; ?>" class="ow-item" target="_blank">
                  <img class="ow-img" src="<?php echo $value['imgUrl']; ?>" alt="<?php echo $value['title']; ?>">
                  <span class="ow-link">
                      <?php foreach ($value['icons'] as $icon) { ?>
                          <?php if(gettype($icon) == 'array') { ?>
                              <img src="<?php echo $icon[0]; ?>" alt="<?php echo $icon[1]; ?>">
                          <?php } ?>
                          <i class="<?php echo $icon; ?>"></i>
                      <?php } ?>
                    <span><?php echo $value['urlText']; ?></span>
                  </span>
                </a>
              </div>
            <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/popper.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <script type="text/javascript"></script>
  <script src="https://www.google.com/recaptcha/api.js?render=<?php echo SITE_KEY; ?>"></script>
  <script>
    grecaptcha.ready(function() {
      grecaptcha.execute('<?php echo SITE_KEY; ?>', {action: 'homepage'}).then(function(token) {
        $('#g-recaptcha-response').val(token);
        // console.log(token);
      });
    });
  </script>
</body>
</html>
