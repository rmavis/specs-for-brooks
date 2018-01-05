<?php

$opts = [
         'title' => "Brooks Cashbaugh<br />C.V.",

         'nav' => [
                   'title' => 'C.V.',
                   'order' => 5,
                   'url' => '/cv',
                   ],

         'body_wrap' => [
                         'class' => 'carapace',
                         ],
         ];


$body = [ ];



$body = <<<HTML

<h1 class="page-head">{$opts['title']}</h1>

<div class="text-block">
  <h2 class="head-group">Exhibitions</h2>


  <h3 class="head-section">2016</h3>
<ul>
  <li>Archetypes Redux. Judy Ferrara Gallery. Three Oaks, MI</li>
</ul>


  <h3 class="head-section">2014</h3>
<ul>
  <li>Over the Edge. Williamsburg Art and Historical Center. New York, NY</li>
</ul>


<h3 class="head-section">2013</h3>
<ul>
  <li>Carte de Visite Part Deux. Gigantic Gallery. Portland, OR</li>
  <li>From the Well. Gigantic Gallery. Portland, OR</li>
</ul>


<h3 class="head-section">2012</h3>
<ul>
  <li>Bait-and-Switch. Chashama. New York, NY</li>
  <li>Demotic Emolument. Peter Miller Gallery. Chicago, IL</li>
  <li>Figures. Peter Miller Gallery. Chicago, IL</li>
  <li>Carte de Visite. Gigantic Gallery. Portland, OR</li>
  <li>Winter Show. Peter Miller Gallery. Chicago, IL</li>
</ul>


<h3 class="head-section">2011</h3>
<ul>
  <li>We Are The Champions. Gigantic Gallery. Portland, OR</li>
  <li>Carnival. Paper Crane Gallery. Bloomington, IN</li>
  <li>Archetypes. Peter Miller Gallery. Chicago, IL</li>
  <li>Reinvented America. Peter Miller Gallery. Chicago, IL</li>
  <li>An America Where This Makes Sense. Gigantic Gallery. Portland, OR</li>
  <li>Red Barn Reclamation. The Fuller Projects. Bloomington, IN</li>
  <li>New Frontiers and Public Dreams. Paper Crane Gallery. Bloomington, IN</li>
  <li>Gender Matters/ Matters of Gender. Freedman Gallery. Reading, PA</li>
</ul>


<h3 class="head-section">2010</h3>
<ul>
  <li>Monster Art Show. Paper Crane Gallery. Bloomington, IN</li>
  <li>32nd Elkhart Juried Regional Show. Midwest Museum of American Art. Elkhart, IN</li>
  <li>Shaping the Spectrum. Gallery Group. Bloomington, IN</li>
  <li>Bash, Cashbaugh, English. Colfax Campus Gallery. South Bend, IN</li>
  <li>Ruthrauff, Kuntz, Hard, Cashbaugh. New Galleries. South Bend, IN</li>
</ul>



<h2 class="head-group">Education</h2>

<p>2010 BFA, Indiana University, Bloomington, IN</p>

</div>

HTML;
