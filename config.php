<?php

define('DBHOST', '45.130.231.115');
define('DBUSER', 'u1604216_teriz');
define('DBPASS', '!T3rsm2nz');
define('DBNAME', 'u1604216_teriz');

$conn = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);

if ($conn->connect_error) {
    die('Koneksi gagal. Error : ' . $conn->connect_error);
}
