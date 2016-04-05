<?php

$html = <<<HTML

<a id="nav-toggle" class="off" href="#" onclick="return toggleNav();">
  <div id="nav-tog-button"></div>
</a>

<script>
var nav_pos_mon_top = new ScrollMonitor({
    pos: 'top',
    dist: 40,
    func: showNavButton
});

var nav_pos_mon_bot = new ScrollMonitor({
    pos: 'bot',
    dist: (document.body.offsetHeight - 40),
    func: hideNavButton
});

var nav_btn = document.getElementById('nav-toggle');

function showNavButton(pos) {
    var classes = nav_btn.getAttribute('class'),
        _old = classes.split(' '),
        _new = [ ];
    for (var o = 0, m < _old.length; o < m; o++) {
        if (_old[o] != 'hide') {
            _new.push(_old[o]);
        }
    }
    nav_btn.setAttribute('class', _new.join(' '));
}

function hideNavButton(pos) {
    var classes = nav_btn.getAttribute('classes');
    if (classes.split(' ').indexOf('hide') == -1) {
        nav_btn.setAttribute('class', classes+' hide');
    }
}
</script>

HTML;
