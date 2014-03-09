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
$kodex['title'] = "404";
$kodex['slug'] = "p404";
$kodex['main'] = "This is a kodex 404. Document is not here.";
$kodex['footer'] = "";

// Send the 404 header 
header("HTTP/1.0 404 Not Found");

// Finally, leave it all to the rendering phase of kodex.
include(kodex_THEME_PATH);
