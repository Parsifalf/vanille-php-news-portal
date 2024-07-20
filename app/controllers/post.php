<?php

use myfrm\Db;

if (!isset($_GET["slug"]) and !$_GET["slug"] != '') {
  header('Location: ' . PATH);
  abort();  
}

include_once CORE . '/classes/Db.php';

$db_config = require CONFIG . '/db.php';
$db = (Db::getInstance())->getConect($db_config);

$slug = $_GET["slug"];

$post = $db->query("SELECT * FROM posts WHERE `slug`= :slug LIMIT 1", ["slug" => $slug])->fetch();
$title = $post['title'];


include_once VIEWS . '/post.tpl.php';