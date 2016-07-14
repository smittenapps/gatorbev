<?php

$root = '/var/www/';
set_include_path(get_include_path() . PATH_SEPARATOR . "{$root}classes/" . PATH_SEPARATOR . "{$root}");
spl_autoload_register();

// Include site constants
#require "inc/constants.inc.php";
#require 'common/db.php';

?>

