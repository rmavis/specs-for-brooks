<?php

$opts = [
         'title' => 'Home',

         'nav' => [
                   'url' => '/home',
                   'order' => 0,
                   ],

         'body_wrap' => [
                         'class' => 'carapace',
                         ],
];


$body = [ ];



$body['body'] = <<<HTML

<h1 class="page-head">Brooks Cashbaugh</h1>

<div class="text-block">
  <p>I've become a giant. I fill every street. I dwarf the rooftops, I hunchback the moon, stars dance at my feet.</p>
</div>

HTML;





$footer = Pagemaker::html_element(
                                  'div',
                                  ['id' => 'home-bar-bot'],
                                  Pagemaker::footer_section()
                                  );


$body['extra'] = <<<HTML

<div class="fullscreen-slide" style="background-image:url('/images/Apollo-1_Brooks-Cashbaugh.jpg')"></div>

{$footer}

HTML;
