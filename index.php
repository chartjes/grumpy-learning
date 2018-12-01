<?php include 'perch/runtime.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title>Learn To Test Like A Grumpy Programmer</title>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="stylesheet" href="./assets/css/app.css">
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
<header class="header header--centered">
    <div class="container container--normal">
        <h1 class="header__title">Grumpy Learning</h1>
        <img src="images/gl-logo-350.jpg" alt="Grumpy Learning Logo">
        <p class="header__tagline">Learn to test like a grumpy programmer</p>
    </div>
</header>
<main role="main">
    <div class="container container--normal">
        <?php perch_content('promo')  ?>
    </div>
    <div class="container container--normal">
        <?php perch_content('products') ?>
    </div>
    <div class="container container--normal">
        <div class="callout-box callout-box--spaced">
            <div class="callout-box__content-center">
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
            </div>
        </div>
    </div>
    <div class="author__container">
        <div class="container container--grid">
            <div class="author__left">
                <img src="images/author-akrabat.jpg" alt="Chris Hartjes" class="author__small"/>
            </div>
            <div class="author__right">
              <p>Hi, I’m Chris Hartjes.</p>
              <p>
                  I've been building web applications using all kinds of tools (mostly PHP) and all kinds of techniques since 1998
              </p>
              <p>
                  In 2003 I was part of a application launch so horrible I became determined to find a way to avoid that. Along the way
                  I discovered testing techniques and haven't shut up about them since.
              </p>
              <p>I live in the snowy wilds of Southwestern Ontario, Canada, along with my long-suffering wife and the one child who didn't flee to university the first chance she got</p>
          </div>
      </div>
  </main>
  <footer class="footer">
      <div class="container container--grid">
        <div class="footer__col footer__col--normal">
            <p>Got questions? <a href="mailto:chartjes@grumpy-learning.com">Email me</a> or find me on <a href="https://twitter.com/grmpyprogrammer">Twitter</a> as @grmpyprogrammer</p>
        </div>
        <div class="footer__bottom">
          <p>&copy; <?= date('Y') ?> Grumpy Learning Inc. All Right Reserved</p>
        </div>
      </div>
    </footer>
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
  <script src="assets/js/app.js"></script>
</body>
</html>
