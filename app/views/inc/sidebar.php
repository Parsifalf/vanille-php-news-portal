<?php
include_once CORE . '/classes/Db.php';
$defaultConfig = require CONFIG . '/db.php';


// $db = new Db($defaultConfig);

// $db = Db::getInstance();

$db = (Db::getInstance())->getConect($db_config);


// $posts = $conn->fetchAll('SELECT * FROM posts');

$posts = $db->query('SELECT * FROM posts ORDER BY id DESC LIMIT 3')->fetchAll();

?>

<aside class="col-md-4">
  <h3>Недавние записи</h3>
  <ul class="list-group">
    <? foreach ($posts as $post): ?>
      <li class="list-group-item">
        <a href="/post?slug=<?= $post['slug'] ?>" class="link-underline link-underline-opacity-0 $gray-900"><?= $post['title'] ?></a>
      </li>
    <? endforeach; ?>
  </ul>

</aside>