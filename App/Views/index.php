<?php
use App\Components\Dict as L;
use App\Components\Url;
?>
<!DOCTYPE html>
<html lang="<?=Url::getLang()?>">
<head>
  <title><?=L::_('pageTitle')?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="content-type" content="text/html;charset=UTF-8">
  <meta name="description" content="<?=L::_('pageDescription')?>">

  <meta property="og:locale" content="<?=L::_('locale')?>" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="<?=L::_('pageTitle')?>" />
  <meta property="og:description" content="<?=L::_('pageDescription')?>" />
  <meta property="og:url" content="<?=Url::getCurrentUrl()?>" />
  <meta property="og:image" content="/assets/img/logo.png" />

  <!--Assets-->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Fira+Sans|Roboto:300,400|Questrial|Satisfy">
  <link rel="stylesheet" type="text/css" href="/assets/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="/assets/css/animate.css">
  <link rel="stylesheet" type="text/css" href="/assets/css/hover-effects.css">
  <link rel="stylesheet" type="text/css" href="/assets/css/style.css">

  <script type="text/javascript">
    window.App = {
      Settings: {
        root: '/'
      }
    };
  </script>
</head>
<body data-spy="scroll" data-target=".topline" data-offset="60">

  <div class="topline" id="topline">
    <div class="container">
      <div class="row">
        <div class="col-md-2 lang-switcher">
          <div class="wrap">
            <a href="/" class="<?=($_SESSION['lang'] === 'ru') ? 'active' : ''?>">
              Рус
            </a>
            <a href="/en/" class="<?=($_SESSION['lang'] === 'en') ? 'active' : ''?>">
              Eng
            </a>
          </div>
        </div>
        <div class="col-md-10 links">
          <a href="tel:+1267-603-8948">
            <i class="fa fa-phone"></i>
            +1267-603-8948
          </a>
          <a href="callto:windrosefreight">
            <i class="fa fa-skype"></i>
            windrosefreight
          </a>
          <a href="mailto:windrosefreight@gmail.com">
            <i class="fa fa-envelope-o"></i>
            windrosefreight@gmail.com
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="header">
    <div class="bg-color">
      <header id="main-header">
        <nav class="navbar navbar-default navbar-fixed-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainMenu">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="<?=Url::getCurrentUrl()?>">
                <img src="/assets/img/logo.png" class="img-responsive" alt="WindroseFreight" />
              </a>
            </div>
            <div class="collapse navbar-collapse" id="mainMenu">
              <ul class="nav navbar-nav navbar-right navbar-border">
                <li class="active"><a href="#topline"><?=L::_("Home")?></a></li>
                <li><a href="#services" data-offset="68px"><?=L::_("Services")?></a></li>
                <li><a href="#portfolio" data-offset="68px"><?=L::_("Advantages")?></a></li>
                <li><a href="#about" data-offset="68px"><?=L::_("About Us")?></a></li>
                <li><a href="#contact" data-offset="68px"><?=L::_("Contact Us")?></a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
      <div class="wrapper">
        <div class="container">
          <div class="row">
            <div class="col-md-12 main-page wow fadeIn delay-05s">
              <div class="logo">
                <img src="/assets/img/logo.png" class="img-responsive" alt="" />
              </div>
              <div class="banner-text">
                <h2><?=L::_('mainHeader')?></h2>
              </div>
              <div class="overlay-detail text-center">
                <a href="#services"><i class="fa fa-angle-down"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <section id="services" class="section-padding wow fadeInUp delay-05s" data-offset="68">
    <div class="container">
      <h2 class="text-center">
          <?=L::_('Services')?>
      </h2>
      <div class="row hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5c">
        <div class="col-md-4">
          <i class="hi-icon fa fa fa-search"></i>
          <div class="service-name">Поиск грузов</div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="icon"><i class="fa hi-icon fa fa-book"></i></div>
          <div class="service-name">Заполнение сетапов</div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="icon"><i class="hi-icon fa fa-line-chart"></i></div>
          <div class="service-name">Торги с брокерами</div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="icon"><i class="hi-icon fa fa-check-square-o"></i></div>
          <div class="service-name">Проверка брокеров</div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="icon"><i class="hi-icon fa fa-file-text-o"></i></div>
          <div class="service-name">Поиск паршалов</div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="icon"><i class="hi-icon fa fa-ambulance"></i></div>
          <div class="service-name">Помощь водителям в дороге</div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="icon"><i class="hi-icon fa fa-money"></i></div>
          <div class="service-name">Взыскание ТОНУ и простоя</div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="icon"><i class="hi-icon fa fa-briefcase"></i></div>
          <div class="service-name">Заказ сертификатов страхования</div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="icon"><i class="hi-icon fa fa-plus"></i></div>
          <div class="service-name">И многое другое</div>
        </div>
      </div>
    </div>
  </section>
  <section id="portfolio" class="section-padding wow fadeInUp delay-05s">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>here is motherfucking block</h1>
        </div>
      </div>
    </div>
  </section>
  <section id="about" class="section-padding wow fadeInUp">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h3 class="text-center">
              <?=L::_("about")?>
          </h3>
        </div>
        </div>
      </div>
    </div>
  </section>
  <section id="contact" class="section-padding wow fadeIn delay-05s">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="text-center"><?=L::_('feedback')?></h2>
          <p class="text-center"><?=L::_('feedbackText')?></p>
          <div class="form">
            <form id="contact-form" class="form form-horizontal">
              <div class="form-group">
                <input type="text" name="name" id="name" class="form-control" required placeholder="<?=L::_('name')?>">
                <span id="name"></span>
              </div>
              <div class="form-group">
                <input type="email" name="email" id="email" class="form-control" required placeholder="<?=L::_('email')?>">
                <span id="email"></span>
              </div>
              <div class="form-group">
                <input type="text" name="phone" id="phone" class="form-control" required placeholder="<?=L::_('phone')?>">
                <span id="phone"></span>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="text" id="text" placeholder="<?=L::_('text')?>"></textarea>
              </div>
              <button type="submit" class="btn btn-primary send-email">
                <i class="fa fa-check"></i>
                  <?=L::_('submit')?>
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer class="footer-2 text-center-xs bg--white">
    <div class="container">
      <!--end row-->
      <div class="row">
        <div class="col-md-6">
          <div class="footer">
            © Copyright Windrose Freight. All Rights Reserved
            <div class="credits">
              <?=date("Y")?>
            </div>
          </div>
        </div>
        <div class="col-md-6 socials">
          <ul class="social-list">
            <li>
              <a href="tel:+1267-603-8948">
                <i class="fa fa-phone"></i>
              </a>
            </li>
            <li>
              <a href="callto:windrosefreight">
                <i class="fa fa-skype"></i>
              </a>
            </li>
            <li>
              <a href="mailto:windrosefreight@gmail.com">
                <i class="fa fa-envelope-o"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <!--end row-->
    </div>
  </footer>
<div class="results"></div>
<script src="/assets/js/jquery.min.js"></script>
<script src="/assets/js/jquery.easing.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<script src="/assets/js/wow.js"></script>
<script src="/assets/js/modernizr.custom.js"></script>
<script type="text/javascript" src="/assets/js/common.js"></script>
<script type="text/javascript" src="/assets/js/validate.js"></script>
<script type="text/javascript" src="/assets/js/main.js"></script>
<script type="text/javascript">
  App.Page.Main({
    url: 'email-us',
    required: "<?=L::_('requiredField')?>",
    notValidEmail: "<?=L::_('notValidEmail')?>"
  });
</script>
</body>
</html>