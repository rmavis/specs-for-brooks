function toggleNav(force) {
    force = (typeof force == 'undefined') ? false : true;

		var btn = document.getElementById('nav-toggle');
		var arr = btn.getAttribute('class').split(' ');

    if ((force) || (arr.indexOf('hide') == -1)) {
        var cls = (arr.indexOf('off') == -1) ? 'off' : 'on';
		    var bar = document.getElementById('nav-screen');
		    var act = (bar.getAttribute('active') == 'y') ? 'n' : 'y';
		    bar.setAttribute('active', act);
		    btn.className = cls;
    }

		return false;
}



function showNav() {

}
