<?php
include_once CORE . '/classes/Db.php';
$db_config = require CONFIG . '/db.php';


// $db = new Db($defaultConfig);

// $db = Db::getInstance();

$db = (Db::getInstance())->getConect($db_config);


// $posts = $conn->fetchAll('SELECT * FROM posts');

$postsGroup = $db->query('SELECT * FROM post_group', [])->fetchAll();

?>

<header class="header">
  <nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark border-bottom border-body" data-bs-theme="dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Главная</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about">О нас</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Категории
            </a>
            <ul class="dropdown-menu">
              <? foreach ($postsGroup as $item): ?>
                <li><a class="dropdown-item" href="<?= PATH ?>/group?id=<?= $item['id'] ?>"><?= $item['name'] ?></a></li>
              <? endforeach; ?>

              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="/">Все записи</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>