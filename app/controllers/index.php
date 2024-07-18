<?php
include_once CORE . '/classes/Db.php';
$db_config = require CONFIG . '/db.php';


// $db = new Db($defaultConfig);

// $db = Db::getInstance();

$db = (Db::getInstance())->getConect($db_config);


$posts = $db->query('SELECT * FROM posts')->fetchAll();

// $postsGroup = $conn->fetchAll('SELECT * FROM post_group');


$title = 'Blog :: home';


include_once VIEWS . '/index.tpl.php';