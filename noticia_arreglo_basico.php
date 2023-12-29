<?php
echo file_get_contents('views/web1.html');

include_once "db.php";
include_once "datos.php";

$database = new Database($host, $username, $password, $database);
$id_noticia = intval($_GET['id']);

$sql = "SELECT title,body FROM news WHERE id=:id LIMIT 1";
$r = $database->fetchAll($sql, ['id' => $id_noticia]);
?>
<div class="starter-template">
    <h1><?=$r[0]['title']?></h1>
    <p class="lead"><?=$r[0]['body']?></p>
  </div>
<?php
echo file_get_contents('views/web2.html');