<?php

/* DATABASE CONNECTION */

$db['db_host'] = 'localhost';
$db['db_user'] = 'root';
$db['db_pass'] = '';
$db['db_name'] = 'Company';

foreach ($db as $key => $value) {
    define(strtoupper($key), $value);
}

global $connection;
$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if (!$connection) {
    die("Cannot Establish A Secure Connection To The Host Server At The Moment!");
}

try {
    $db = new PDO('mysql:host=localhost;dbname=Company;charset=utf8', 'root', '');
} catch (PDOException $e) {
    die('Cannot Establish A Secure Connection To The Host Server At The Moment! Error: ' . $e->getMessage());
}

/* DATABASE CONNECTION */
