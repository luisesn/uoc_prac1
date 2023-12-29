<?php
// MUY VULNERABLE
echo file_get_contents('views/web1.html');

include_once "db.php";
include_once "datos.php";

$database = new Database($host, $username, $password, $database);

$sql = "SELECT * FROM `news` WHERE `id`=".$_GET['id'];

$st = $database->direct($sql);

foreach ($st as $n) {
?>
<div class="starter-template">
    <h1><?=$n['title']?></h1>
    <p class="lead"><?=$n['body']?></p>
  </div>
<?php
}
echo file_get_contents('views/web2.html');