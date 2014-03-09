<?php
/**
* Config-file for kodex. Change settings here to affect installation.
*
*/

/**
* Set the error reporting.
*
*/
error_reporting(-1);              // Report all type of errors
ini_set('display_errors', 1);     // Display all errors 
ini_set('output_buffering', 0);   // Do not buffer outputs, write directly

/**
* Define kodex paths.
*
*/
define('kodex_INSTALL_PATH', __DIR__ . '/..');
define('kodex_THEME_PATH', kodex_INSTALL_PATH . '/theme/render.php');

/**
* Include bootstrapping functions.
*
*/
include(kodex_INSTALL_PATH . '/src/bootstrap.php');

/**
* Start the session.
*
*/
session_name(preg_replace('/[^a-z\d]/i', '', __DIR__));
session_start();

/**
* Create the kodex variable.
*
*/
$kodex = array();

/**
* Site wide settings.
*
*/
$kodex['lang']         = 'sv';
$kodex['title_append'] = ' | kodex en webbtemplate';

$kodex['menu'] = array(
	'home'		=> array('text'=>'Home',  'url'=>'index.php'),
	'dice'		=> array('text'=>'Tärning',  'url'=>'dice.php'),
	'report'	=> array('text'=>'Redovisning', 'url'=>'report.php'),
	'source' 	=> array('text'=>'Källa', 'url'=>'viewsource.php'),
);


$kodex['slug']         = '';

$kodex['header'] = <<<EOD
<a href="index.php"><img class='sitelogo' src='img/kodex.png' alt='kodex Logo'/></a>
<span class='sitetitle'>webbtemplate</span>
<span class='siteslogan'>Återanvändbara moduler för webbutveckling med PHP</span>
EOD;

$file = basename($_SERVER['PHP_SELF']);
$kodex['footer'] = <<<EOD
<footer>
	<span class="authorinfo">
		Åsa Rosenberg är webbutvecklare och jobbar med internet. Just nu håller hon på att fräscha upp sina kunskaper i html, css, javascript och php.
	</span>
	<ul>
		<li>Copyright (c) Åsa Rosenberg (asa@dotnordic.se)</li>
		<li><a href='https://github.com/dotnordic/kodex-base'>kodex på GitHub</a></li>
		<li><a href='http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance'>Unicorn</a></li>
	</ul>
	<figure class="footerface">
		<img src="img/me.jpg" alt="Bild på Åsa Rosenberg" />
		<figcaption>Åsa Rosenberg</figcaption>
	</figure>
</footer>
EOD;

/**
* Theme related settings.
*
*/
$kodex['stylesheets'] = array(
	'css/style.css',
	'css/icons.css'
);
$kodex['favicon']    = 'favicon.ico';

/**
* Settings for google fonts.
*
*/
$gfonts = array (
	"Source+Sans+Pro",
	"Montserrat",
	"Anaheim",
	"Montserrat+Alternates",
	"Varela+Round",
);

/**
* Settings for JavaScript.
*
*/
$kodex['javascript_include'] = array(
	'modernizr' => array('js/modernizr.js', 'top'),
	'jquery' 	=> array('//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js', 'bottom')
);
//$kodex['javascript_include'] = array('js/main.js'); // To add extra javascript files

/**
* Google analytics.
*
*/
$kodex['google_analytics'] = null; // Set to null to disable google analytics
