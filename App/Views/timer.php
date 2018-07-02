<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link type="text/css" rel="stylesheet" href="/assets/css/greeting.css"/>
  <title>Будь ласка, будь терплячою</title>
  <script type="text/javascript">
    window.App = {
      Settings: {
        root: '/'
      }
    };
  </script>
</head>
<body>
<h3>Лишилось:</h3>
<h1 id="timer"></h1>
</body>
<script src="http://w5i4n9j2.inxycdn.host/assets/js/jquery.min.js"></script>
<script type="text/javascript" src="http://w5i4n9j2.inxycdn.host/assets/js/common.js"></script>
<script type="text/javascript" src="/assets/js/timer.js"></script>
<script type="text/javascript">
  App.Page.Greeting({
    target: "<?=$target_date->format('Y-M-d H:i:s');?>"
  });
</script>
</html>