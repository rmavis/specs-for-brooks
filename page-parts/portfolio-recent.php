<?php

$opts = [
    'title' => "Brooks Cashbaugh<br />Recent Work",

    'nav' => [
        'title' => 'Recent Work',
        'url' => '/recent-work',
        'order' => 2,
    ],

    'body_wrap' => [
        'class' => 'carapace',
    ],
];





$images = [

    Pagemaker::image_block(
        "/images/A-Different-Track.jpg",
        "A Different Track",
        "2015, acrylic, paint marker, ink, acrylic transfer, and spray paint on aluminum, 22 x 30 inches."
    ),

    Pagemaker::image_block(
        '/images/recent_1.jpg',
        "21st Century Already",
        "2015, acrylic, paint marker, acrylic transfer, and spray paint on aluminum, 12 x 12 inches"
    ),

    Pagemaker::image_block(
        "/images/recent_2.jpg",
        "Quiet Contemplation",
        "2015, acrylic, paint marker, acrylic transfer, and spray paint on paper, 18 x 24 inches"
    ),

    Pagemaker::image_block(
        "/images/recent_3.jpg",
        "The Light Inside on a Rainy Day",
        "2014, acrylic, paint marker, acrylic transfer, and spray paint on aluminum, 6 x 4 inches"
    ),

    Pagemaker::image_block(
        "/images/recent_4.jpg",
        "Blue Phantom",
        "2014, acrylic, paint marker, acrylic transfer, and spray paint on aluminum, 6 x 5 inches"
    ),

    Pagemaker::image_block(
        "/images/recent_5.jpg",
        "Direct Memory",
        "2014, acrylic, acrylic transfer, and spray paint on aluminum, 12 x 12 inches"
    ),

    Pagemaker::image_block(
        "/images/recent_6.jpg",
        "Goshen Farm",
        "2014, acrylic, paint marker, acrylic transfer, and spray paint on aluminum, 6 x 5 inches"
    ),

    Pagemaker::image_block(
        "/images/recent_7.jpg",
        "Impatience",
        "2014, acrylic, paint marker, acrylic transfer, and spray paint on aluminum, 18 x 24 inches"
    ),

    Pagemaker::image_block(
        "/images/recent_8.jpg",
        "Patience",
        "2014, acrylic, paint marker, acrylic transfer, and spray paint on aluminum, 24 x 24 inches"
    ),

    Pagemaker::image_block(
        "/images/recent_9.jpg",
        "Questioning",
        "2014, acrylic, paint marker, acrylic transfer, and spray paint on paper, 20 x 14 inches"
    ),

];

$img_html = implode("\n", $images);





$body = <<<HTML

<h1 class="page-head">{$opts['title']}</h1>

{$img_html}

HTML;
