<?php
define('DB_NAME', 'blog');//À changer selon votre config.
define('USER_NAME', 'root');//À changer selon votre config.
define('PASSWORD', 'root');//À changer selon votre config.
define('HOST_NAME', 'localhost');//À changer selon votre config.
$db_options = [
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
];