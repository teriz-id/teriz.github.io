<?php

/**
 * @package Teriz 
 * @author Teriz (http://teriz.id) @license http://teriz.id/license
 * @link http://teriz.id  
 * @since @2022
 */

// Framework Version
define("_VERSION", "1.1");

// Path Constants
define("ROOT", dirname(dirname(__FILE__)));
define("APP", ROOT . '/app');
define("PUB", ROOT . "/public");

include(ROOT . "/config.php");
include(APP . "/class.php");
include(APP . "/function.php");
include(APP . "/routes.php");
