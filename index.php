<!DOCTYPE html>
<html>
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
        <p class="header__tagline">Learn to test like a grumpy programmer</p>
    </div>
</header>

<?php require './testimonials.php' ?>
<main role="main">
    <div class="container container--normal">
        <div class="package" id="test-driven-basic">
            <h2 align="center">
                <a href="/grumpyconf.php">
                    Do you trust me? Blind bird tickets on sale right now<br>for GrumpyConf 2018 starting at CDN$699
                </a>
            </h2>
        </div>
    </div>
    <div class="container container--normal">
        <div class="package" id="test-driven-basic">
            <a href="https://leanpub.com/test-driven"><img src="images/test-driven.jpg" class="u-image-pull-left" alt="Cover for Building Test-Driven Developers"/></a>
            <h2 class="section-heading" id="#testdriven">Building Test-Driven Developers</h2>
	<p>Long-time PHP testing advocate Chris Hartjes takes a look at one of the least-understood parts of testing computer software -- managing the expectations of people. In this book Chris draws on his experience of over a decade of helping developers build the skills needed to become good at testing and talks about how tests are written by people, not machines. His views on what to do when there are no tests but you want some, or what to do with a test suite nobody likes will challenge your thoughts on what testing is really about.</p>
            <p>"Building Test-Driven Developers" covers: 
<ul class="checkbox-list">
                    <li class="checkbox-list__item">What is a "testing culture"</li>
                    <li class="checkbox-list__item">Handling things when there are no tests</li>
                    <li class="checkbox-list__item">Why testing should be "just part of the job"</li>
                    <li class="checkbox-list__item">Dealing with tests nobody runs</li>
                    <li class="checkbox-list__item">Does "Chicago vs. London" really matter?</li>
                    <li class="checkbox-list__item">Dealing with difficult people</li>
                </ul>
            </p>
<p>You need people skills to go along with all those great testing skills you've been building. Chris is here to help with those too!</p>
            <a href="https://leanpub.com/test-driven" class="button package__button">
                <span class="package__button-price">$9</span>
                <span class="package__button-text">Buy Now Via LeanPub</span>
            </a>
        </div>
    <div class="container container--normal">
        <div class="package" id="mvt-basic">
            <a href="https://leanpub.com/minimumviabletests"><img src="images/mvt-title-page-web.jpg" class="u-image-pull-left" alt="Cover for Minimum Viable Tests"/></a>
            <h2 class="section-heading" id="#mvt">Minimum Viable Tests</h2>
            <p>You've been doing PHP development for a while but you find yourself constantly battling bugs, finding it hard to integrate bits of code together, and staying late to do deployments. You know there is a better way through test-driven development but you have no idea where to start.</p>
            <p>You imagine yourself sitting down with an experienced developer -- just you and them, steadily working through problems and learning how to use test-driven development to design the API's and interfaces for your code while making sure nothing leaves development until you're 100% sure it's working.</p>
            <p>In "Minimum Viable Tests" long-time PHP testing evangelist Chris Hartjes goes over what his experiences lead him to believe are the basic concepts surrounding test-driven development. You'll learn about:
                <ul class="checkbox-list">
                    <li class="checkbox-list__item">Chris' concept of "metatesting"</li>
                    <li class="checkbox-list__item">The basics of what PHPUnit is and how it works</li>
                    <li class="checkbox-list__item">The role of tests in the development process</li>
                    <li class="checkbox-list__item">Effective use of test doubles</li>
                    <li class="checkbox-list__item">Understanding how to mimic your application's environment via bootstrapping</li>
                    <li class="checkbox-list__item">Writing wrappers around web API calls to make testing easier</li>
                    <li class="checkbox-list__item">How fixtures and data providers help simplify your tests both today and tomorrow</li>
                    <li class="checkbox-list__item">When you should use (and not abuse) monkey-patching tools</li>
                    <li class="checkbox-list__item">The Arrange-Act-Assert test-writing strategy</li>
                    <li class="checkbox-list__item">How to refactor existing tests</li>
                </ul>
            </p>
            <p>Chris has been watching and listening to people as they start their journey towards become test-driven developers. "Minimum Viable Tests" is designed to be your guide on the path to having well-tested, confidently-deployed PHP applications.</p>
            <a href="https://leanpub.com/minimumviabletests" class="button package__button">
                <span class="package__button-price">$19</span>
                <span class="package__button-text">Buy Now Via LeanPub</span>
            </a>
        </div>
        <div class="package" id="phpunit-cookbook-basic">
            <a href="https://leanpub.com/grumpy-phpunit"><img src="images/grumpy-phpunit-title.png" class="u-image-pull-left" alt="Cover for Minimum Viable Tests"/></a>
            <h2 class="section-heading" id="#phpunitcookbook">The Grumpy Programmer's PHPUnit Cookbook</h2>
            <h3>Learning how to use PHPUnit doesn't have to suck</h3>
            <p>PHPUnit is the most commonly-used unit testing framework for PHP developers.
                While it's very powerful it also has a big learning curve. You know now is
                the <b>time to master it</b> but you have no where to start. There's lots
                of examples but you <b>need some guidance</b> on how to use it's features.
            </p>
            <p>
                I'm a long-time PHP developer who has been promoting testing practices for almost a decade. For almost a decade I have spoken at conferences about best practices for writing tests and been recognized as an expert on unit testing. Now, I want to help you learn to use PHPUnit to create tests that give you confidence that your code is on the right track.
            </p>
            <p>You'll know exactly how to tackle your existing code. You'll learn how to drive new features with your tests. You'll write tests that run fast and keep you moving quickly. Here's what I cover:
                <ul class="checkbox-list">
                    <li class="checkbox-list__item">How PHPUnit actually works</li>
                    <li class="checkbox-list__item">Creating test doubles</li>
                    <li class="checkbox-list__item">Creating data providers</li>
                    <li class="checkbox-list__item">Data fixtures that grow along with your application</li>
                    <li class="checkbox-list__item">How PHPUnit can be used to test API's</li>
                    <li class="checkbox-list__item">Using DBUnit</li>
                    <li class="checkbox-list__item">How to test exceptions</li>
                </ul>
            </p>
            <p>
                My new ebook "The Grumpy Programmer's PHPUnit Cookbook" is a collection of tips and tricks for making PHPUnit do what you need it do in order to write tests for your code. With the information contained in this book you will get a jump start to make writing tests something you do effortlessly.
            </p>
            <a href="https://leanpub.com/grumpy-phpunit" class="button package__button">
                <span class="package__button-price">$19</span>
                <span class="package__button-text">Buy Now Via LeanPub</span>
            </a>
        </div>
        <div class="callout-box callout-box--spaced">
            <div class="callout-box__content-center">
                <p>We have a mailing list that you can join that drops some grumpy knowledge in your inbox roughly once every two weeks. We hate spam as much as you do, so we pledge to never give your email address to any third parties.<br><br>
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
              <p>I live in Milton, Ontario, Canada along with my long-suffering wife and two very patient daughters.</p>
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
