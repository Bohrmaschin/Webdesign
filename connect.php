<!Hier wird eine Verbindung zur Datenbank auf phpMyAdmin aufgebaut>
<?php
    $database = array();
    $database['host'] = 'localhost';
    $database['port'] = '3306';
    $database['name'] = 'forum';
    $database['username'] = 'root';
    $database['password'] = 'root';
    $database['database'] = 'forum';

    $mysqli = new mysqli($database['host'], $database['username'], $database['password'], $database['database']);

    if ($mysqli-> connect_errno) {
        echo "Connection to the database: ".$database['name'] . ' failed';
        echo 'Error : '.mysql_error();
    } 
?>
