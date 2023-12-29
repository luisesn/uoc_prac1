<?php
echo file_get_contents('views/web1.html');

include_once "db.php";
include_once "datos.php";

$database = new Database($host, $username, $password, $database);

$options = [
    'options'=> [ 
      'min_range'=>1,
      'max_range'=>3
    ]
  ];

$id_noticia=filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT, $options);
if ($id_noticia===false || $id_noticia===null ) {
  http_response_code(400);
  echo "Bad request";
  die();
} else {
  $sql = "SELECT title,body FROM news WHERE id=:id LIMIT 1";
  $r = $database->fetchAll($sql, ['id' => $id_noticia]);
  ?>
  <div class="starter-template">
      <h1><?=$r[0]['title']?></h1>
      <p class="lead"><?=$r[0]['body']?></p>
    </div>
  <?php
}
echo file_get_contents('views/web2.html');