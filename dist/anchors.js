function toogleMenu() {
	var nav = document.getElementById('nav');
	var icon = document.getElementById('menu-icon');
    
	if (icon.classList.contains('icon-menu')) {

		nav.classList.add('show');
		nav.classList.remove('hide');

		icon.classList.add('icon-close');
		icon.classList.remove('icon-menu');

		document.getElementsByTagName('body')[0].style.overflow = 'hidden';

	} else {

		nav.classList.add('hide');
		nav.classList.remove('show');

		icon.classList.add('icon-menu');
		icon.classList.remove('icon-close');

		document.getElementsByTagName('body')[0].style.overflow = 'scroll';
	}
}
