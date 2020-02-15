<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title>The Grumpy Programmer's Guide To Testing PHP Applications</title>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
<link rel="stylesheet" href="./css/main.css">
<link rel="apple-touch-icon" sizes="180x180" href="/images/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/images/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/images/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
<link rel="mask-icon" href="/images/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#da532c">
</head>
<body>
    <div class="container">
        <div class="main">
            <img src="images/grumpy-guide.jpg" alt="Cover for 'The Grumpy Programmer's Guide To Testing PHP Applications"/>
           <h1>The Grumpy Programmer's Guide To Testing PHP Applications</h1>
            <h3>16+ years of testing advice to help you learn to test your PHP code no matter what framework you use</h3>
            <p>
                I’ve been trying to help people test their PHP code for a very long time, probably before some of you reading this even got started in programming. PHPUnit didn’t exist, the most commonly-used version of PHP was 5.0, and social media wasn’t a thing. GMail had just started being used. My first search engine was Altavista. Yes, I learned to test uphill, both ways, in the snow.
            </p>
            <p>
                I feel that testing, as a concept, is hard to explain to beginning programmers: “we are going to write code that is going to make sure your other code works as expected”. The assumption that underlies all this is that you already understand how to write computer programs in your chosen language! This makes it very difficult to teach to beginner or inexperienced programmers. When you combine this with how PHP does not force any particular structure on you, you have an environment where only the folks who are really motivated end up learning about testing.
            </p>
            <p>
                <b>The Grumpy Programmer's Guide To Testing PHP Applications</b> is my way to provide some help for developers who are looking to become more test-centric and reap the benefits of automated testing and related tooling like static analysis and automation. I believe that by learning the skills (both technical and core) surrounding testing you will be able to write tests using almost any testing framework and almost any PHP application.
            </p>
            <p>
                The book combines all the material from my previous books, adds new material, and revisits some old topics where my experiences have changed my thoughts. I break the vast topic of testing into smaller chunks, along with providing lots of examples and explanations of how I approach testing applications. Some of the things I cover are:

                <ul>
                <li>Test-Driven development</li>
                <li>Strategies for Test-After practices</li>
                <li>Test refactoring strategies</li>
                <li>How PHPUnit itself works</li>
                <li>Complementary tools and approaches like static analysis and mutation testing</li>
                <li>Learning the core skills you need to get other people testing their code</li>
            </ul>
            </p>
            <p>
                <b>The Grumpy Programmer's Guide To Testing PHP Applications</b> is designed to be the book you refer to over and over again to not only learn how to test your PHP applications but to also remind yourself about techniques and tools that lead to successful outcomes. All I've ever wanted to do is get more people testing their code so we can concentrate on solving problems instead of constantly fixing bugs that we might've caught earlier.
            </p>
            <p>
                <a href="https://leanpub.com/grumpy-guide">Buy the book for US$29 until March 1st, 2020 and get all the videos from my online course for free on March 1st!</a>
                <iframe width='160' height='400' src='https://leanpub.com/grumpy-guide/embed' frameborder='0' allowtransparency='true'></iframe>
            </p>
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
            <p>&copy; <?= date('Y') ?> Grumpy Learning Inc. All Rights Reserved</p>
        </div>
    </div>
</body>
<!--
  <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
  <script src="assets/js/app.js"></script>
  -->
</body>
</html>
