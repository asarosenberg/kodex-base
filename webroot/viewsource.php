<?php 
/**
 * This is a kodex pagecontroller.
 *
 */
 
// Include the essential config-file which also creates the $kodex variable with its defaults.
include(__DIR__.'/config.php'); 

$cmenu = new CNavigation();
$kodex['navigation'] = CNavigation::GenerateMenu($kodex['menu']);

// Add style for csource
$kodex['stylesheets'][] = 'css/source.css';
 
// Create the object to display sourcecode
$source = new CSource(array('secure_dir' => '..', 'base_dir' => '..'));
 
// Do it and store it all in variables in the Kodex container.
$kodex['title'] = "Visa källkod";
$kodex['main'] = "<h1><span class=\"icon-book\"></span>Visa källkod</h1>\n" . $source->View();

// Finally, leave it all to the rendering phase of kodex.
include(kodex_THEME_PATH);
