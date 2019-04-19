<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Minimum Viable Tests</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="apple-touch-icon" sizes="180x180" href="/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/images/safari-pinned-tab.svg" color="#5bbad5">
</head>
<body>
<div class="container">
    <div class="header">
        <h1 class="header__title">Minimum Viable Tests</h1>
    </div>
    <div class="main">
        <img src="images/mvt-title-page-web.jpg" alt="Cover for Minimum Viable Tests"/>
        <h1>You realize there is more to testing than just PHPUnit</h1>
        <p>
            You've been doing PHP development for a while but you find yourself
            <b>constantly battling bugs</b>, working with bits of code that are <b>hard to integrate</b>
            together, and <b>staying late to do deployments</b>. You know there is a
            better way through but <b>you have no idea where to start</b>.
        </p>
        <p>
            You imagine yourself sitting down with an <b>experienced developer</b>
            -- just you and them, steadily <b>working through problems</b> and
            learning how to <b>use test-driven development to design</b> the API's
            and interfaces for your code while making sure nothing leaves
            development until you're 100% sure it's working.
        </p>
        <p>
            I designed <b>Minimum Viable Tests</b> to show you how a long-time
            grumpy programmer <b>writes applications with testing always in the
                front of their mind</b>. Along the way you'll learn about:
        <ul>
            <li>The concept of "metatesting"</li>
            <li>The basics of what PHPUnit is and how it works</li>
            <li>The role of tests in the development process</li>
            <li>Effective use of test doubles</li>
            <li>Understanding how to mimic your application's environment via bootstrapping</li>
            <li>Writing wrappers around web API calls to make testing easier</li>
            <li>How fixtures and data providers help simplify your tests both today and tomorrow</li>
            <li>When you should use (and not abuse) monkey-patching tools</li>
            <li>The Arrange-Act-Assert test-writing strategy</li>
            <li>How to refactor existing tests</li>
        </ul>
        </p>
        <p>
            I've been <b>watching and listening</b> to people as they
            start their journey towards <b>learning testing skills</b>.
            "Minimum Viable Tests" is designed to be your guide
            to learning what <b>new things you need to learn</b> and
            what <b>old habits you will have to change</b>.
        </p>
        <p>
            Buy the book for US$19 at <a href="https://leanpub.com/minimumviabletests?utm_campaign=minimumviabletests&utm_medium=embed&utm_source=localhost">Leanpub</a>
        </p>
        <iframe width='160' height='400' src='https://leanpub.com/minimumviabletests/embed' frameborder='0' allowtransparency='true'></iframe>
    </div>
    <div class="footer">
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
        <?php require 'navigation.php'; ?>
        <p>&copy; <?= date('Y') ?> Grumpy Learning Inc. All Rights Reserved</p>
    </div>
</div>
</body>
</body>
</html>
