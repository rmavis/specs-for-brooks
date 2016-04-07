<?php

$html = <<<HTML

<a id="nav-toggle" class="off" href="#" onclick="return Nav.toggle();">
  <div id="nav-tog-button"></div>
</a>



<script>

// Initialize the Nav: make the button available.
Nav.init();

// Initialize the Scroll Monitor.
var nav_pos_mon = new ScrollMonitor({
    pos: 'top',
    dist: 40,
    func_in: Nav.show,
    func_out: Nav.hide,
});

</script>

HTML;
