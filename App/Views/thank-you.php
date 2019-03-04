<?php
use App\Components\Dict as L;
use App\Components\Url;
?>
<!DOCTYPE html>
<html lang="<?=Url::getLang()?>">
<head>
    <title><?=L::_('messageSuccess')?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8">
    <meta name="description" content="<?=L::_('pageDescription')?>">
    <meta name="keywords" content="<?=L::_('pageKeywords')?>">

    <meta property="og:locale" content="<?=L::_('locale')?>" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?=L::_('pageTitle')?>" />
    <meta property="og:description" content="<?=L::_('pageDescription')?>" />
    <meta property="og:url" content="<?=Url::getCurrentUrl()?>" />
    <meta property="og:image" content="http://w5i4n9j2.inxycdn.host/assets/img/windrose.png" />

    <!--Assets-->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Fira+Sans|Roboto:300,400|Questrial|Satisfy">
    <link rel="stylesheet" type="text/css" href="/assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="http://w5i4n9j2.inxycdn.host/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="http://w5i4n9j2.inxycdn.host/assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="http://w5i4n9j2.inxycdn.host/assets/css/hover-effects.css">
    <link rel="stylesheet" type="text/css" href="http://w5i4n9j2.inxycdn.host/assets/css/style.css">

    <script type="text/javascript">
      window.App = {
        Settings: {
          root: '/'
        }
      };
    </script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-133452101-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-133452101-1');
    </script>

    <!-- Facebook Pixel Code -->
    <script>
      !function(f,b,e,v,n,t,s)
      {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
          n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
          'https://connect.facebook.net/en_US/fbevents.js');
      fbq('init', '1869702299818725');
      fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=1869702299818725&ev=PageView&noscript=1"/></noscript>
    <!-- End Facebook Pixel Code -->
    <style>
        html, body {
            margin: 0;
            padding: 0;
        }
        body {
            background: url('http://w5i4n9j2.inxycdn.host/assets/img/truck.jpg') center center no-repeat fixed;
            background-size: cover;
            position: relative;
            height: 100vh;
        }
        .overlay {
            min-width: 100vh;
            min-height: 100vh;
            background: rgba(0,0,0,0.7);
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .thanks {
            color: #fff;
        }
        h1 {
            margin-top: 0;
        }
    </style>
</head>
<body>
<div class="overlay">
    <div class="thanks text-center">
        <h1 class="display-3"><?=L::_('thank')?></h1>
        <hr>
        <p class="lead"><?=L::_('disclaimer')?></p>
        <p><?=L::_('timerText')?> <span id="timer">5</span></p>
    </div>
</div>
<script src="http://w5i4n9j2.inxycdn.host/assets/js/jquery.min.js"></script>
<script src="http://w5i4n9j2.inxycdn.host/assets/js/bootstrap.min.js"></script>
<script src="http://w5i4n9j2.inxycdn.host/assets/js/modernizr.custom.js"></script>
<script type="text/javascript" src="http://w5i4n9j2.inxycdn.host/assets/js/common.js"></script>
<script type="text/javascript" src="/assets/js/thank-you.js"></script>
<script type="text/javascript">
  App.Page.Thank({
    url: '<?=(Url::getLang() === 'en') ? '/en' : '/'?>'
  });
</script>
</body>
</html>
