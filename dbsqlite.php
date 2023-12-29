<?php
define("DATABASE_FILE", "database.db");

$db = new SQLite3(DATABASE_FILE);

function userCheck($email, $password) {
    global $db;
    $stmt    = $db->prepare("SELECT * FROM users WHERE email=:email AND password=:password");
    $stmt->bindValue(':email', $email, SQLITE3_TEXT);
    $stmt->bindValue(':password', $password, SQLITE3_TEXT);
    $result = $stmt->execute(); 
    return $result->fetchArray();
}