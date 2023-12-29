<?php
echo file_get_contents('views/web1.html');

include_once "db.php";
include_once "datos.php";

$database = new Database($host, $username, $password, $database);
$id_noticia = addslashes($_GET['id']);
$sql = "SELECT COUNT(*) as c FROM `news` WHERE `id`=".$id_noticia." LIMIT 1";
$st = $database->direct($sql);
foreach ($st as $r) {
  if ($r['c']>0) {
    $sql = "SELECT * FROM `news` WHERE `id`=".$id_noticia." LIMIT 1";
    $st = $database->direct($sql);

    foreach ($st as $n) {
    ?>
    <div class="starter-template">
        <h1><?=$n['title']?></h1>
        <p class="lead"><?=$n['body']?></p>
      </div>
    <?php
    }
  }
}
echo file_get_contents('views/web2.html');
