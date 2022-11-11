<?php

/**
 * @package Teriz 
 * @author Teriz (http://teriz.id) @license http://teriz.id/license
 * @link http://teriz.id  
 * @since @2022
 */

// $umum = new Pengaturan();

// $index = $umum->webs('link');
$index = webs('link');

switch ($index) {
    case $index . '':
        require PUB . "/content/index.php";
        break;
    case $index . 'home/beranda':
        require PUB . "/content/index.php";
        break;
    case $index . 'about':
        require PUB . "/content/about.php";
        break;
    case $index . 'contact':
        require "views/contact.php";
        break;
    default:
        http_response_code(404);
        echo "404";
        break;
}
