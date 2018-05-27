<?php
use App\Components\Dict as L;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tema)</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="/assets/css/style.css" />
  <script type="text/javascript">
    window.App = {
      Settings: {
        root: '/'
      }
    };
  </script>
</head>
<body>
<header>
  <nav class="navbar navbar-default">

      <div class="container">
        <div class="col-md-2 logo">
          <img src="/assets/img/logo.png" class="img-responsive" alt="" />
        </div>
        <div class="col-md-6 lang-switcher">
          <a href="/" class="<?=($_SESSION['lang'] === 'ru') ? 'active' : ''?>">
            <img src="/assets/img/ru.png" alt="Русский" />
          </a>
          <a href="/en/" class="<?=($_SESSION['lang'] === 'en') ? 'active' : ''?>">
            <img src="/assets/img/en.png" alt="English" />
          </a>
        </div>
        <div class="col-md-4 contacts">
          <p>
            <a href="tel:+1267-603-8948">
              <i class="fa fa-phone"></i>
              +1267-603-8948
            </a>
          </p>
          <p>
            <a href="mailto:windrosefreight@gmail.com">
              <i class="fa fa-envelope-o"></i>
              windrosefreight@gmail.com
            </a>
          </p>
          <p>
            <i class="fa fa-clock-o"></i>
            <span><?=L::_('wHours')?></span>
          </p>
        </div>
      </div>
  </nav>
</header>
<main>
  <article class="main-banner">
    <div class="container">
      <h1 class="text-center">
        <?=L::_('mainHeader')?>
      </h1>
    </div>
  </article>
  <article class="trucks">
    <div class="container">
      <h2 class="box-heading text-center">
        <?=L::_('trucksServe')?>
      </h2>
      <div class="row">
        <div class="col-md-3 truck box-with-pic">
          <div class="image">
            <img src="/assets/img/Flatbed.png" alt="" class="img-responsive">
          </div>
          <p class="text-center">Flatbed</p>
        </div>
        <div class="col-md-3 truck box-with-pic">
          <div class="image">
            <img src="/assets/img/Stepdeck.png" alt="" class="img-responsive">
          </div>
          <p class="text-center">Step Deck</p>
        </div>
        <div class="col-md-3 truck box-with-pic">
          <div class="image">
            <img src="/assets/img/DryVan.png" alt="" class="img-responsive">
          </div>
          <p class="text-center ">Dry Van</p>
        </div>
        <div class="col-md-3 truck box-with-pic">
          <div class="image">
            <img src="/assets/img/reefer-truck.png" alt="" class="img-responsive">
          </div>
          <p class="text-center">Reefer</p>
        </div>
      </div>
    </div>
  </article>
  <article class="services">
    <div class="container">
      <div class="row">
        <div class="col-md-4 box-with-pic">
          <div class="img">
            <img src="/assets/img/garanty.png" alt="">
          </div>
          <h4 class="text-center">
              <?=L::_('guarantee')?>
          </h4>
          <p class="text">
              <?=L::_('guaranteeText')?>
          </p>
        </div>
        <div class="col-md-4 box-with-pic">
          <div class="img">
            <img src="/assets/img/menedzher.png" alt="">
          </div>
          <h4 class="text-center">
              <?=L::_('personalApproach')?>
          </h4>
          <p class="text">
              <?=L::_('personalApproachText')?>
          </p>
        </div>
        <div class="col-md-4 box-with-pic">
          <div class="img">
            <img src="/assets/img/Service.png" alt="">
          </div>
          <h4 class="text-center">
              <?=L::_('service')?>
          </h4>
          <p class="text">
              <?=L::_('serviceText')?>
          </p>
        </div>
      </div>
    </div>
  </article>
  <article class="feedback">
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
  </article>
  <article class="about">
    <div class="container">
      <h3>
          <?=L::_('about')?>
      </h3>
    </div>    
  </article>  
</main>
<footer>
  <div class="container">
    <div class="pull-left">
      <p>WindroseFreight</p>
      <p>2016-<?=date('Y')?></p>
    </div>
    <div class="pull-right">
      <a href="tel:+1267-603-8948">
        <i class="fa fa-phone"></i>
        +1267-603-8948
      </a>
      <br />
      <a href="mailto:windrosefreight@gmail.com">
        <i class="fa fa-envelope-o"></i>
        windrosefreight@gmail.com
      </a>
    </div>
  </div>
</footer>
<div class="results"></div>
<script type="text/javascript" src="/assets/js/common.js"></script>
<script type="text/javascript" src="/assets/js/validate.js"></script>
<script type="text/javascript" src="/assets/js/main.js"></script>
<script type="text/javascript">
  $(function() {
    App.Page.Main({
      url: 'email-us',
      required: "<?=L::_('requiredField')?>",
      notValidEmail: "<?=L::_('notValidEmail')?>"
    });
  });
</script>
</body>
</html>






