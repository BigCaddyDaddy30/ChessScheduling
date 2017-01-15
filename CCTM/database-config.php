<?php

// define database related variables
$database = 'ChessClub';
$host = 'localhost';
$user = 'root';
$pass = 'root';

// try to connect to database
$dbh = new PDO("mysql:dbname={$database};host={$host};port={3306}", $user, $pass);
if(!$dbh) {
    echo "unable to connect to database";
}

?>