<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'library');

$connection = null;

try {
    $connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
} catch(mysqli_sql_exception $exception) {
    die($exception->getMessage());
}

?>
