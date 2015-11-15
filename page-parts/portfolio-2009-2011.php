<?php

$opts = [
         'title' => "2009-2011",

         'nav' => [
                   'order' => 4,
                   ],

         'body_wrap' => [
                         'class' => 'carapace bordered',
                         ],
         ];




$
images = [
           Pagemaker::image_block('/images/tecumseh.jpg',
                                  'Tecumseh',
                                  "12' x 12', color on a plane, 2015"),

           Pagemaker::image_block('/images/Apollo-1_Brooks-Cashbaugh.jpg',
                                  'Apollo 1',
                                  "12' x 12', color on a plane, 2015"),

           Pagemaker::image_block('/images/Constructing-Keystones_Brooks-Cashbaugh.jpg',
                                  'Constructing Keystones',
                                  "12' x 12', color on a plane, 2015"),

           Pagemaker::image_block('/images/Our-Lady-The-Convert_Brooks_Cashbaugh.jpg',
                                  'Our Lady The Convert',
                                  "12' x 12', color on a plane, 2015"),

           Pagemaker::image_block('/images/brooks-macklemore.jpg',
                                  'Brooks is Macklemore',
                                  "12' x 12', color on a plane, 2015"),

           ];

$img_html = implode("\n", $images);





$body = <<<HTML

<h1 class="page-head">2009&mdash;2011</h1>

{$img_html}

<div class="text-block">
  <p>The most influential Unix shells have been the Bourne shell and the C shell, These shells have both been used as the coding base and model for many derivative and work-alike shells with extended feature sets.</p>
  <p>The Bourne shell, sh, was written by Stephen Bourne at AT&amp;T as the original Unix command line interpreter; it introduced the basic features common to all the Unix shells, including piping, here documents, command substitution, variables, control structures for condition-testing and looping and filename wildcarding. The language, including the use of a reversed keyword to mark the end of a block, was influenced by ALGOL 68.</p>
</div>

HTML;
