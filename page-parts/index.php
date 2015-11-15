<?php

$opts = [
         'title' => 'Home',

         'nav' => [
                   'url' => '/',
                   'order' => 0,
                   ],

         'body_wrap' => [
                         'class' => 'body-bar slim',
                         ],
];


$body = [ ];



$body['body'] = <<<HTML

	<h1>This is the business</h1>

	<div class="text-block">
		<p>Richard David James (born 18 August 1971), best known by his alias Aphex Twin, is an Irish-born British electronic musician and composer. He is also the co-founder of Rephlex Records with Grant Wilson-Claridge.[1] James has also released a number of EPs as AFX since 1991 including the Analogue Bubblebath and Analord series of EPs. James has also used and continues to use several other aliases, such as Polygon Window, Caustic Window, and the Tuss.</p>
	</div>

HTML;




$body['extra'] = <<<HTML

<div class="fullscreen-slide" style="background-image:url('/images/Apollo-1_Brooks-Cashbaugh.jpg')"></div>

<div id="home-bar-bot">
  <div class="body-bar footer-bar">
    <p>The Flammarion engraving is a wood engraving by an unknown artist</p>
    <p>Links to Instagram, etc</p>
  </div>
</div>

HTML;
