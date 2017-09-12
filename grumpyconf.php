
<!DOCTYPE html>
<html lang="en">
<title>Learn Like A Grumpy Programmer</title>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="stylesheet" href="./assets/css/app.css">
<link rel="stylesheet" type="text/css" href='https://css.tito.io/v1.1' />
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
<!-- place this in your head tag -->
<script src='https://js.tito.io/v1' async></script>
</head>
  <body>
  <header class="header header--centered">
  <div class="container container--normal">
      <h1 class="header__title">GrumpyConf 2018 </h1>
      <p class="header__tagline">March 22-24, 2018 -- learn like a grumpy programmer</p>
  </div>
  </header>
  <main role-"main">
  <div class="container container--normal">
        <h2>Do you trust me?</h2>
    <p>
    50 attendees<br>
    6 high-impact speakers from the PHP world<br>
    1 birthday party<br>
    </p>
    <p>
    GrumpyConf 2018 is your chance to hear from some of the PHP community's most impactful speakers in the morning,
    and then interact with them and your fellow attendees in an <a href="http://www.mindviewinc.com/Conferences/OpenSpaces.html">open spaces</a>
    environment in the afternoon. Finally, we'll be having a birthday party at the end for Chris (Black Forest cake will be provided!)
    </p> 
    <p>
    Your ticket is for 3 days of the conference, running March 22-24, 2018. It includes a room at the venue, the beautiful
    <a href="http://www.elmhurstinn.com/">Elm Hurst Inn</a> in Ingersoll, Ontario (about 90 minutes west of Toronto).
    Breakfast is provided for guests staying overnight at the Inn, lunch and snacks will be provided to attendees.
    </p>
    <h2>Speakers</h2>
    <p>Chris has selected 6 speakers who he feels will push both your PHP skills and your professional skills. So who is coming?</p>
    <h3>Ed Finkler</h3>
    <p>You might know him through his work with <a href="https://osmihelp.org">Open Sourcing Mental Illness</a> or recording
    a <a href="https://devhell.info">podcast</a> with Chris. He's also a good developer and an even better communicator.
    </p>
    <h3>More speakers to be revealed...</h3> 
    <p>Please carefully read the conference's <a href="http://confcodeofconduct.com/">Code of Conduct</a> before purchasing a ticket. 
    Chris strongly believes in a safe and supportive environment for all attendees.</p>
    <tito-widget event="grumpyconf/2018"></tito-widget>
    <p>Grumpy Learning will be in touch with you once you've purchased a ticket to go over the room options. Price goes up once the speakers are announced!</p>
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
</div>
</body>
</html>

