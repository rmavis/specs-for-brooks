<?php

$opts = [
         'title' => "Brooks Cashbaugh<br />Past Work",

         'nav' => [
                   'title' => 'Past Work',
                   'url' => '/past-work',
                   'order' => 3,
                   ],

         'body_wrap' => [
                         'class' => 'carapace',
                         ],
         ];





$images = [

           Pagemaker::image_block('/images/past_1.jpg',
                                  "Tecumseh",
                                  "2012, acrylic, spray paint and paint marker on canvas, 72 x 48 inches"),

           Pagemaker::image_block('/images/past_2.jpg',
                                  "Hostess",
                                  "2012, acrylic, and paint marker on canvas, 46 x 40 inches"),

           Pagemaker::image_block('/images/past_3.jpg',
                                  "Perennial Cornerstone",
                                  "2012, acrylic and paint marker on birch panel, 26 x 20 inches"),

           Pagemaker::image_block('/images/past_4.jpg',
                                  "Elizabeth Gurley Flynn",
                                  "2012, acrylic, spray paint and paint marker on canvas, 24 x 18 inches"),

           Pagemaker::image_block('/images/past_5.jpg',
                                  "Apollo 1",
                                  "2012, acrylic, spray paint and paint marker on birch panel, 12 x 12 inches"),

           Pagemaker::image_block('/images/past_6.jpg',
                                  "Departure Structure",
                                  "2012, acrylic, spray paint and paint marker on mylar with salvaged wood frame, 72 x 48 inches"),

           Pagemaker::image_block('/images/past_7.jpg',
                                  "PLSS",
                                  "2012, acrylic, spray paint and paint marker on canvas, 24 x 18 inches"),

           Pagemaker::image_block('/images/past_8.jpg',
                                  "Hobos",
                                  "2012, acrylic, spray paint and paint marker on canvas, 60 x 48 inches"),

           Pagemaker::image_block('/images/past_9.jpg',
                                  "Our Lady the Convert",
                                  "2012, acrylic, spray paint and paint marker on canvas, 84 x 60 inches"),

           Pagemaker::image_block('/images/past_10.jpg',
                                  "Diner Dinner",
                                  "2013, ink on paper, 5.5 x 8.5 inches"),

           Pagemaker::image_block('/images/past_11.jpg',
                                  "Mug",
                                  "2013, ink on paper, 5.5 x 8.5 inches"),

           Pagemaker::image_block('/images/past_12.jpg',
                                  "The View to the Kitchen",
                                  "2013, ink on paper, 5.5 x 8.5 inches"),

           ];

$img_html = implode("\n", $images);





$body = <<<HTML

<h1 class="page-head">{$opts['title']}</h1>

{$img_html}

<div class="text-block"></div>

HTML;
