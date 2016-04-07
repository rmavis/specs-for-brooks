var Nav = (function () {


		var $btn = null,
        $menu = null;



    function init() {
        $btn = document.getElementById('nav-toggle');
        $menu = document.getElementById('nav-screen');
    }



    function toggle(force) {
        force = (typeof force == 'undefined') ? false : true;

		    var arr = $btn.getAttribute('class').split(' '),
            hidden = arr.indexOf('hide'),
            menu_up = arr.indexOf('off');

        if ((force) || (hidden != -1) || (-1 < menu_up)) {
            if (-1 < menu_up) {
                return hideMenu();
            }
            else {
                return showMenu();
            }
        }
        else {
            return false;
        }
    }



    function show(pos) {
        Clattr.remove($btn, 'hide');
        return false;
    }

    function hide(pos) {
        Clattr.add($btn, 'hide');
        return false;
    }

    function showMenu() {
        // Clattr.add($menu, 'y', 'active');
        $menu.setAttribute('active', 'y');
        Clattr.replace($btn, 'off', 'on');
		    return false;
    }

    function hideMenu() {
        Clattr.replace($menu, 'y', 'n', 'active');
        Clattr.replace($btn, 'on', 'off');
		    return false;
    }





    /*
     * Public.
     */
    return {
        init: init,
        toggle: toggle,
        show: show,
        hide: hide
    }

})();
