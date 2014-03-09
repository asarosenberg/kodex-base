<?php 
/**
 * This is a kodex pagecontroller.
 *
 */
// Include the essential config-file which also creates the $kodex variable with its defaults.
include(__DIR__.'/config.php'); 

// Define what to include to make the plugin to work
$kodex['stylesheets'][]        = 'css/slideshow.css';
$kodex['javascript_include'][] = array('js/slideshow.js', 'bottom');

// Do it and store it all in variables in the kodex container.
$kodex['title'] = "Slideshow för att testa JavaScript i kodex";

$kodex['main'] = <<<EOD
<div id="slideshow" class='slideshow' data-host="" data-path="img/me/" data-images='["me-1.jpg", "me-2.jpg", "me-4.jpg", "me-6.jpg"]'>
<img src='img/me/me-6.jpg' width='950px' height='180px' alt='Me'/>
</div>

<h1>En slideshow med JavaScript</h1>
<p>Detta är en exempelsida som visar hur kodex fungerar tillsammans med JavaScript.</p>
EOD;

// Finally, leave it all to the rendering phase of kodex.
include(kodex_THEME_PATH);
