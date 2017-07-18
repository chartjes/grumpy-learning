<!DOCTYPE html>
<html lang="en">
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
      <p class="header__tagline">Learn to test like a grumpy programmer</p>
  </div>
  </header>
  <main role-"main">
  <div class="container container--normal">
      <h1>Woolly Mammoth Elephpant!</h1>
      <h3>
          <img src="./images/elephpant.png"/>
            <p>
                Get one of the last remaining woolly mammoth elephpants available for sale. Grumpy Learning is
                partnering with <a href="https://osmihelp.org">OSMI</a> to make these available to you.
            </p>
            <p>
                Just USD$100 (including shipping world-wide) and US$50 of each sale will be going to help OSMI continue raising awareness of mental
                health issues in the tech industry.
            </p>
            <p><b>(Update July 18: There are only 5 of them left! Don't miss out on your chance to own a unique piece of PHP memorabilia)</b></p>
            <p>
          <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
              <input type="hidden" name="cmd" value="_s-xclick">
              <input type="hidden" name="hosted_button_id" value="6QT8J6NXR7DFE">
              <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
              <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
          </form>

          </p>
      </h3>
  </div>>
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
</div>
</body>
</html>

