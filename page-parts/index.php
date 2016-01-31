<?php

$opts = [
         'title' => 'Home',

         'nav' => [
                   'url' => '/home',
                   'order' => 0,
                   ],

         'body_mods' => [
                         'id' => 'home-body',
                         ],

         'body_wrap' => [
                         'class' => 'carapace',
                         ],
];


$body = [ ];



$body['body'] = <<<HTML

<h1 id="site-title" class="page-head">Brooks Cashbaugh</h1>

<div class="text-block"></div>

HTML;





$footer = Pagemaker::html_element(
                                  'div',
                                  ['id' => 'home-bar-bot'],
                                  Pagemaker::footer_section()
                                  );


$body['extra'] = <<<HTML

<div class="fullscreen-slide slide-low" style="background-image:url('/images/wash-pink-orange.png')"></div>

{$footer}

HTML;
