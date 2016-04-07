<?php

$opts = [
    'title' => 'Home',

    'nav' => [
        'url' => '/home',
        'order' => 0,
    ],

    'body_mods' => [
        'class' => 'bg-body-wash',
    ],

    'body_wrap' => [
        'class' => 'carapace',
    ],
];


$body = [ ];




$body['body'] = <<<HTML

              <h1 id="site-title" class="page-head">Brooks Cashbaugh</h1>

<div class="text-block home-block">
  <p>I've become a giant. I fill every street. I dwarf the rooftops, I hunchback the moon, stars dance at my feet.</p>
</div>

HTML;




$body['extra'] = Pagemaker::html_element(
    'div',
    ['id' => 'home-bar-bot'],
    Pagemaker::copyright_line()
);
