<?php

$html = <<<HTML

<a id="nav-toggle" class="off" href="#" onclick="return toggleNav();">
  <div id="nav-tog-button"></div>
</a>



<script>

Nav.init();

var nav_pos_mon = new ScrollMonitor({
    pos: 'top',
    dist: 40,
    func_in: Nav.show,
    func_out: Nav.hide,
});

</script>

HTML;
