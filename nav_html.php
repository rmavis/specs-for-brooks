<?php

$html = <<<HTML

<a id="nav-toggle" class="off" href="#" onclick="return toggleNav();">
  <div id="nav-tog-button"></div>
</a>

<script>
var nav_btn = document.getElementById('nav-toggle');

function checkNavVisibility(m) {
    // Headed down.
    if ((0 < m.y.vect) && (100 < m.y.pos)) {
        makeNavInvisible();
    }
    // Headed up.
    else if (m.y.vect < 0) {
        makeNavVisible();
    }
}

function makeNavVisible() {
    var classes = nav_btn.getAttribute('class').split(' ');
    if (classes.indexOf('hide') != -1) {
        var new_classes = [ ];
        for (var o = 0, m = classes.length; o < m; o++) {
            if (classes[o] != 'hide') {
                new_classes.push(classes[o]);
            }
        }
        nav_btn.setAttribute('class', new_classes.join(' '));
    }
}

function makeNavInvisible() {
    var classes = nav_btn.getAttribute('class'),
        _arr = classes.split(' ');
    if ((_arr.indexOf('off') != -1) && (_arr.indexOf('hide') == -1)) {
        nav_btn.setAttribute('class', classes+' hide');
    }
}

var nav_mon = new ScrollMonitor({
  dir: 'y',
  dist: 50,
  func: checkNavVisibility
});

</script>

HTML;
