<?php
include_once CORE . '/classes/Db.php';
$db_config = require CONFIG . '/db.php';

$db = (Db::getInstance())->getConect($db_config);

$posts = $db->query('SELECT * FROM posts')->fetchAll();

$title = 'Blog :: home';

include_once VIEWS . '/index.tpl.php';