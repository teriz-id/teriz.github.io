<?php

/**
 * @package Teriz 
 * @author Teriz (http://teriz.id) @license http://teriz.id/license
 * @link http://teriz.id  
 * @since @2022
 */

class Pengaturan
{
    var string $data;

    function webs(string $data)
    {
        $url = mysqli_fetch_assoc(mysqli_query($GLOBALS['conn'], "SELECT * FROM web_settings"))[$data];
        return $url;
    }
}
