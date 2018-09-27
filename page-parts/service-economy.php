<?php

$opts = [
    'title' => "Brooks Cashbaugh<br />Service Economy",
    'nav' => [
        'title' => 'Service Economy',
        'url' => '/service-economy',
        'order' => 1,
    ],
    'body_wrap' => [
        'class' => 'carapace',
    ],
];


$images = [
    Pagemaker::image_block(
        "/images/service_econ_1.jpg",
        "Precarious Server",
        "2018, acrylic, watercolor and acrylic transfer on wood panel, 12 x 9 inches."
    ),
    Pagemaker::image_block(
        "/images/service_econ_2.jpg",
        "Reliable Exhaustion",
        "2017, acrylic and acrylic transfer on aluminum panel, 30 x 22 inches."
    ),
    Pagemaker::image_block(
        "/images/service_econ_3.jpg",
        "Flexible Hours",
        "2017, acrylicand acrylic transfer on aluminum panel, 46 x 40inche"
    ),
    Pagemaker::image_block(
        "/images/service_econ_4.jpg",
        "Amortize",
        "2017, acrylic and watercolor on birch panel, 24x20 inches."
    ),
    Pagemaker::image_block(
        "/images/service_econ_5.jpg",
        "Pro Forma Patience",
        "2017, acrylic and acrylic transfer on aluminum panel, 30 x 22 inches."
    ),
    Pagemaker::image_block(
        "/images/service_econ_6.jpg",
        "Dignity through Distance",
        "2017, acrylic and acrylic transfer on aluminum panel, 40 x 46 inches."
    ),
    Pagemaker::image_block(
        "/images/service_econ_7.jpg",
        "Muscle Memory",
        "2016, acrylic and acrylic transfer on aluminum panel, 30 x yy inches."
    ),
    Pagemaker::image_block(
        "/images/service_econ_8.jpg",
        "Practiced Precision",
        "2017, acrylic and acrylic transfer on aluminum panel, 30 x 26 inches."
    ),
    Pagemaker::image_block(
        "/images/service_econ_9.jpg",
        "Downward Pressure",
        "2016, acrylic and acrylic transfer on aluminum panel, 30 x 22 inches."
    ),
];
$img_html = implode("\n", $images);


$body = <<<HTML
<h1 class="page-head">{$opts['title']}</h1>
{$img_html}
HTML;
