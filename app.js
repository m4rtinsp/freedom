/*
* Wcompilr - Watches and compiles coffescript, sass and less
* author: Paulo Martins <@m4rtinsp>
* version: 0.0.5
*/

// App settings
var settings = {
	'directories': {
		'coffee': 'public/coffee',
		'sass': 'public/sass',
		'js': 'public/js',
		'css': 'public/css'
	},
	'compile': {
		'coffee': ['main.coffee'],
		'sass': ['main.scss']
	},
	'build': {
		'main.min.js': ['main1.js', 'main2.js'],
		'main.min.css': ['main1.css', 'main2.css'],
		'main2.min.css': ['main11.css', 'main22.css']
	}
};

// Call Wcompilr
var wcompilr = require('wcompilr');

// Init
wcompilr.init(settings);