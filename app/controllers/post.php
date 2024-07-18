<?php



// include CORE . '/func.php';

// dd($_SERVER);

// require_once CORE . '/classes/Db.php';


if (!isset($_GET["slug"]) and !$_GET["slug"] != '') {
  header('Location: ' . PATH);
  abort();  
}



include_once CORE . '/classes/Db.php';
$db_config = require CONFIG . '/db.php';


// $db = new Db($defaultConfig);

$db = (Db::getInstance())->getConect($db_config);

// {$_GET["slug"]}
$slug = $_GET["slug"];

// $post = $conn->fetchAll("SELECT * FROM posts WHERE `slug`= '" . $_GET["slug"] . "' LIMIT 1")[0];
$post = $db->query("SELECT * FROM posts WHERE `slug`= :slug LIMIT 1", ["slug" => $slug])->fetch();

// dd($post);  

// $post ?? header('Location: ' . PATH);



$title = $post['title'];


include_once VIEWS . '/post.tpl.php';