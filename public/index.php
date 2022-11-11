<?php

if (version_compare(phpversion(), '8.0', '<')) die('PHP 8.0 dibutuhkan untuk membuka aplikasi ini. silakan upgrade PHP anda.');

include(dirname(dirname(__FILE__)) . "/app/core.php");
 