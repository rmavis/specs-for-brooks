<?php

$year = date('Y');


$link = <<<HTML

<div class="carapace footer-menu-bar">
    <a class="footer-menu-link" href="#" onclick="return Nav.toggle(true);">Return to Menu</a>
</div>

HTML;


$copyright = <<<HTML

<div class="carapace footer-bar">
  <p class="copyright-line">&copy; 2012&ndash;{$year}&nbsp;Brooks&nbsp;Cashbaugh. All&nbsp;rights&nbsp;reserved.</p>
</div>

HTML;


$html = $link.$copyright;
