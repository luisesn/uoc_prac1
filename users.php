<?php 
include_once "db.php";

$host = "localhost";
$username = "practicauoc";
$password = "MRyi7dHCtq";
$database = "practica_uoc";

$database = new Database($host, $username, $password, $database);

// Example query:
$sql = "SELECT * FROM users";
$results = $database->fetchAll($sql);

foreach ($results as $row) {
    
foreach ($row as $k=>$v) {
    echo $k.".".$v . "<br>";
}
}