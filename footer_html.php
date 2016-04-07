<?php

$year = date('Y');

$html = <<<HTML

<div class="carapace footer-menu-bar">
    <a class="footer-menu-link" href="#" onclick="return Nav.toggle(true);">Return to Menu</a>
</div>

<div class="carapace footer-bar">
  <p class="copyright-line">&copy; 2012&ndash;{$year} Brooks Cashbaugh. All rights reserved.</p>
</div>

HTML;
