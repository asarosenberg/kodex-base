<?php
/**
* Bootstrapping functions, essential and needed for kodex to work together with some common helpers. 
*
*/

/**
* Default exception handler.
*
*/
function myExceptionHandler($exception) {
	echo "kodex: Uncaught exception: <p>" . $exception->getMessage() . "</p><pre>" . $exception->getTraceAsString(), "</pre>";
}
// http://www.php.net/manual/en/function.set-exception-handler.php
set_exception_handler('myExceptionHandler');


/**
* Autoloader for classes.
*
*/
function myAutoloader($class) {
	$path = kodex_INSTALL_PATH . "/src/{$class}/{$class}.php";
	if(is_file($path)) {
		include($path);
	}
	else {
		throw new Exception("Classfile '{$class}' does not exists.");
	}
}
// http://se1.php.net/spl_autoload_register
spl_autoload_register('myAutoloader');

/**
* My own variable dump 
*
*/
function vdump($input) {
	echo '<div style="font-family: monospace; white-space:pre;">';
	echo htmlspecialchars(var_export($input));
	echo '</div>';
}

/**
 * Mos's variable dump 
 *
 */
function dump($array) {
  echo "<pre>" . htmlentities(print_r($array, 1)) . "</pre>";
}
