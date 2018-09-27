<?php

$opts = [
    'title' => 'Home',
    'nav' => [
        'url' => '/home',
        'order' => 0,
    ],
    'body_mods' => [
        'class' => 'bg-body-splash',
    ],
    'body_wrap' => [
        'class' => 'carapace',
    ],
];


$body = [ ];

$body['body'] = <<<HTML
<h1 id="site-title" class="page-head">Brooks Cashbaugh</h1>
<div class="text-block home-block"></div>
HTML;

$body['extra'] = Pagemaker::html_element(
    'div',
    ['id' => 'home-bar-bot'],
    Pagemaker::copyright_line()
);
