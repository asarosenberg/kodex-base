<?php 
/**
 * This is a kodex pagecontroller.
 *
 */
 
// Include the essential config-file which also creates the $kodex variable with its defaults.
include(__DIR__.'/config.php'); 

$cmenu = new CNavigation();
$kodex['navigation'] = CNavigation::GenerateMenu($kodex['menu']);

// Do it and store it all in variables in the kodex container.
$kodex['title'] = "Hello World";

$kodex['main'] = <<<EOD
<h1>Hej Världen</h1>
<p>Detta är en exempelsida som visar hur kodex ser ut och fungerar.</p>
EOD;

// Finally, leave it all to the rendering phase of kodex.
include(kodex_THEME_PATH);
