(function Nav() {

		var $btn = document.getElementById('nav-toggle');


    function show(pos) {
        // console.log("showing nav button");
        // console.log(pos);
        var arr = $btn.getAttribute('class'),
            _old = arr.split(' '),
            _new = [ ];

        for (var o = 0, m = _old.length; o < m; o++) {
            if (_old[o] != 'hide') {
                _new.push(_old[o]);
            }
        }

        $btn.setAttribute('class', _new.join(' '));
    }

    function hide(pos) {
        // console.log("hiding nav button");
        // console.log(pos);
        var arr = $btn.getAttribute('class');

        if (arr.split(' ').indexOf('hide') == -1) {
            $btn.setAttribute('class', arr+' hide');
        }
    }


    function toggle(force) {
        force = (typeof force == 'undefined') ? false : true;

		    var arr = $btn.getAttribute('class').split(' ');

        if ((force) || (arr.indexOf('hide') == -1)) {
            var cls = (arr.indexOf('off') == -1) ? 'off' : 'on';
		        var bar = document.getElementById('nav-screen');
		        var act = (bar.getAttribute('active') == 'y') ? 'n' : 'y';
		        bar.setAttribute('active', act);
		        $btn.className = cls;
        }

		    return false;
    }





    /*
     * Public.
     */
    return {
        toggle: toggle,
        show: show,
        hide: hide
    }

})();
