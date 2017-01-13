<?php
// Randomly selects a testimonial
$info = [
    [
        'text' => "Chris' books helped me to get over that horrible early bump in the road that you find when you're learning to test. He helped everything click and made me understand not just how to test, but why you should do it. I liked them so much I've bought copies for other people! Thank you, Chris",
        'byline' => "<a href='https://twitter.com/Geeh'>Gary Hockin, Developer Relations at JetBrains</a>"
    ]
];
shuffle($info);
$testimonial = array_pop($info);
