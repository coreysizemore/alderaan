/* To avoid CSS expressions while still supporting IE 7 and IE 6, use this script */
/* The script tag referencing this file must be placed before the ending body tag. */

/* Use conditional comments in order to target IE 7 and older:
	<!--[if lt IE 8]><!-->
	<script src="ie7/ie7.js"></script>
	<!--<![endif]-->
*/

(function() {
	function addIcon(el, entity) {
		var html = el.innerHTML;
		el.innerHTML = '<span style="font-family: \'icons17\'">' + entity + '</span>' + html;
	}
	var icons = {
		'icon-tools': '&#xe921;',
		'icon-mouse': '&#xe91d;',
		'icon-search-light': '&#xe91c;',
		'icon-sunglasses': '&#xe900;',
		'icon-calendar': '&#xe901;',
		'icon-keyboard_arrow_up': '&#xe918;',
		'icon-keyboard_arrow_right': '&#xe919;',
		'icon-keyboard_arrow_left': '&#xe91a;',
		'icon-keyboard_arrow_down': '&#xe91b;',
		'icon-expand': '&#xe91f;',
		'icon-search': '&#xe91e;',
		'icon-eye': '&#xe917;',
		'icon-camera': '&#xe902;',
		'icon-location': '&#xe903;',
		'icon-quotes-left': '&#xe904;',
		'icon-quotes-right': '&#xe905;',
		'icon-numbered-list': '&#xe906;',
		'icon-square-list': '&#xe907;',
		'icon-circle-list': '&#xe908;',
		'icon-menu': '&#xe909;',
		'icon-eye3': '&#xe90a;',
		'icon-share': '&#xe90b;',
		'icon-googleplus': '&#xe90c;',
		'icon-facebook': '&#xe90d;',
		'icon-instagram': '&#xe90e;',
		'icon-twitter': '&#xe90f;',
		'icon-rss': '&#xe910;',
		'icon-youtube': '&#xe911;',
		'icon-vimeo': '&#xe912;',
		'icon-tumblr': '&#xe913;',
		'icon-linkedin': '&#xe914;',
		'icon-pinterest': '&#xe915;',
		'icon-yelp': '&#xe916;',
		'icon-spoon-knife': '&#xe9a3;',
		'icon-github': '&#xeab0;',
		'icon-codepen': '&#xeae8;',
		'icon-flickr': '&#xeaa4;',
		'icon-snapchat': '&#xe920;',
		'icon-user': '&#xf007;',
		'icon-check': '&#xf00c;',
		'icon-close': '&#xf00d;',
		'icon-blog': '&#xf040;',
		'icon-arrow-left': '&#xf053;',
		'icon-arrow-right': '&#xf054;',
		'icon-plus': '&#xf067;',
		'icon-asterisk': '&#xf069;',
		'icon-eye2': '&#xf06e;',
		'icon-arrow-up': '&#xf077;',
		'icon-arrow-down': '&#xf078;',
		'icon-cart': '&#xf07a;',
		'icon-settings': '&#xf085;',
		'icon-phone': '&#xf095;',
		'icon-users': '&#xf0c0;',
		'icon-mail': '&#xf0e0;',
		'icon-blurb': '&#xf0e6;',
		'icon-download': '&#xf0ed;',
		'icon-upload': '&#xf0ee;',
		'icon-doctor': '&#xf0f0;',
		'icon-stethoscope': '&#xf0f1;',
		'icon-desktop': '&#xf108;',
		'icon-laptop': '&#xf109;',
		'icon-tablet': '&#xf10a;',
		'icon-mobile': '&#xf10b;',
		'icon-file': '&#xf15c;',
		'icon-pdf': '&#xf1c1;',
		'icon-visa': '&#xf1f0;',
		'icon-mastercard': '&#xf1f1;',
		'icon-discover': '&#xf1f2;',
		'icon-americanexpress': '&#xf1f3;',
		'icon-creditcard': '&#xf283;',
		'icon-home': '&#xe922;',
		'0': 0
		},
		els = document.getElementsByTagName('*'),
		i, c, el;
	for (i = 0; ; i += 1) {
		el = els[i];
		if(!el) {
			break;
		}
		c = el.className;
		c = c.match(/icon-[^\s'"]+/);
		if (c && icons[c[0]]) {
			addIcon(el, icons[c[0]]);
		}
	}
}());
