<?php

/* DATABASE CONNECTION*/

$db['db_host'] = 'localhost:3306';
$db['db_user'] = 'root';
$db['db_pass'] = '';
$db['db_name'] = 'flewny_admin';

define('DB_HOST', 'localhost:3306');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'flewny_admin');

global $connection;
$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if (!$connection) {
    die("Cannot Establish A Secure Connection To The Host Server At The Moment!" . mysqli_connect_error());
}

try {
    $db = new PDO("mysql:dbhost=" . $db['db_host'] . ";dbname=" . $db['db_name'] . ";charset=utf8", $db['db_user'], $db['db_pass']);
} catch (Exception $e) {
    die('Cannot Establish A Secure Connection To The Host Server At The Moment!' . $e);
}

/*DATABASE CONNECTION */


?>