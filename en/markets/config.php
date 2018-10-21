<?php


require_once 'messages.php';

//site specific configuration declartion
define( 'BASE_PATH', 'https://matchora.com/account/');
define( 'DB_HOST', 'localhost' );
define( 'DB_USERNAME', 'dindinda_match');
define( 'DB_PASSWORD', 'BoxopusAquafeed!1');
define( 'DB_NAME', 'dindinda_matchora');

function __autoload($class)
{
	$parts = explode('_', $class);
	$path = implode(DIRECTORY_SEPARATOR,$parts);
	require_once $path . '.php';
}
