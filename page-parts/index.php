<?php

$opts = [
         'title' => 'Home',

         'nav' => [
                   'url' => '/',
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
  <p>Richard David James (born 18 August 1971), best known by his alias Aphex Twin, is an Irish-born British electronic musician and composer. He is also the co-founder of Rephlex Records with Grant Wilson-Claridge.[1] James has also released a number of EPs as AFX since 1991 including the Analogue Bubblebath and Analord series of EPs. James has also used and continues to use several other aliases, such as Polygon Window, Caustic Window, and the Tuss.</p>
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
