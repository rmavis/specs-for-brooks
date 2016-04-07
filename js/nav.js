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
            menu_up = arr.indexOf('on');

        if ((force) || (hidden != -1) || (-1 < menu_up)) {
            if (menu_up) {
console.log("menu is up, hiding");
                return hideMenu();
            }
            else {
console.log("menu is down, showing");
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
console.log($btn);
        $menu.setAttribute('active', 'y');
        Clattr.replace($btn, 'off', 'on');
		    return false;
    }

    function hideMenu() {
console.log($menu);
console.log($btn);
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
