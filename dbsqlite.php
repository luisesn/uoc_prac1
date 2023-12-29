<?php
define("DATABASE_FILE", "database.db");

$db = new SQLite3(DATABASE_FILE);

function userCheck($email, $password) {
    global $db;
    $result = $db->query("SELECT * FROM users WHERE email='$email' AND password='$password'");
    return $result->fetchArray();
}