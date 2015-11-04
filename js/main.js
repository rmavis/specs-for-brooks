function toggleNav() {
		var btn = document.getElementById('nav-toggle');
		var cls = (btn.className == 'off') ? 'on' : 'off';
		var bar = document.getElementById('nav-screen');
		var act = (bar.getAttribute('active') == 'y') ? 'n' : 'y';
		bar.setAttribute('active', act);
		btn.className = cls;
		return false;
}
