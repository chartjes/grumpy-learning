<?php include 'perch/runtime.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title>Learn To Test Like A Grumpy Programmer</title>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="stylesheet" href="./assets/css/app.css">
<link rel="stylesheet" href="./assets/css/main.css">
<link rel="stylesheet" href="./assets/css/front.css">
<link rel="apple-touch-icon" sizes="180x180" href="/images/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/images/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/images/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
<link rel="mask-icon" href="/images/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">
<script type="text/javascript">
    WebFontConfig = {
      google: { families: [ 'Asap:400italic,700italic:latin', 'Source+Sans+Pro:400,300,600,200,300italic,400italic,700:latin' ] }
    };
    (function() {
      var wf = document.createElement('script');
      wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
        '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
      wf.type = 'text/javascript';
      wf.async = 'true';
      var s = document.getElementsByTagName('script')[0];
      s.parentNode.insertBefore(wf, s);
    })();
  </script>
</head>
<body>
    <div class="container">
        <div class="item header">
            <h1 class="header__title">Grumpy Learning</h1>
            <img src="images/gl-logo-350.jpg" alt="Grumpy Learning Logo">
            <p class="header__tagline">Learn to test like a grumpy programmer</p>
        </div>
        <div class="item promo">
            <p>
            <ul class="checkbox-list">
            <?php perch_content('promo') ?>
            </ul>
            </p>
        </div>
            <?php perch_content('products') ?>
        <div class="item footer">
            <p>We have a mailing list that you can join that drops some grumpy knowledge in your inbox on an irregular basis. We hate spam as much as you do, so we pledge to never give your email address to any third parties.<br><br>
                <form action="http://grumpy-phpunit.us6.list-manage2.com/subscribe/post?u=161d0ed420649f1879e4985f1&amp;id=1a4c405c76" method="post" class="form-vertical" target="_blank">
                    <div class="form-vertical__row">
                        <label for="name" class="form-vertical__label">Email</label>
                        <input type="text" value="" name="EMAIL" class="form-input-text" id="mce-EMAIL">
                    </div>
                    <div class="form-vertical__row--submit">
                        <button type="submit" class="button">Add me to the Grumpy Learning Mailing List</button>
                    </div>
                </form>
            </p>
            <p>Got questions? <a href="mailto:chartjes@grumpy-learning.com">Email me</a> or find me on <a href="https://twitter.com/grmpyprogrammer">Twitter</a> as @grmpyprogrammer</p>
            <p>&copy; <?= date('Y') ?> Grumpy Learning Inc. All Right Reserved</p>
        </div>
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
  <script src="assets/js/app.js"></script>
        </div>
      </div>
  <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
  <script src="assets/js/app.js"></script>
  <script src="assets/js/app.js"></script>
</body>
</html>
