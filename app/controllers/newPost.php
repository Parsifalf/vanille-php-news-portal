<?php

include_once CORE . '/classes/Db.php';

include_once CORE . '/func.php';

$db_config = require CONFIG . '/db.php';

if ($_SERVER["REQUEST_METHOD"] === 'POST') {

  // abort(500);

  // $fillable = ['title', "short_desc", "full_desc"];

  // $params = [
  //   "title" => $_POST['title'],
  //   "shortDesc" => $_POST['shortDesc'],
  //   "fullDesc" => $_POST['fullDesc'],
  //   "slug" => slugify($_POST['title'])
  // ];


  $fillable = load(['title', "shortDesc", "fullDesc"]);

  $errors = [];

  foreach ($fillable as $key => $value) {
    if (empty(trim($value))) {
      $errors[$key] = ucfirst($key) . " обязателен!";
    }
  }

  // dd($errors);

  if (empty($errors)) {
    $db = (Db::getInstance())->getConect($db_config);
    $res = "INSERT INTO `posts` (`title`, `short_desc`, `full_desc`, `slug`, `dt_create`) VALUES (:title, :shortDesc, :fullDesc, :slug, CURRENT_TIMESTAMP);";

    // $params = [
    //   "title" => $_POST['title'],
    //   "shortDesc" => $_POST['shortDesc'],
    //   "fullDesc" => $_POST['fullDesc'],
    //   "slug" => slugify($_POST['title'])
    // ];

    $db->query($res, $params);

    setcookie("send", "true", time() + 1);

    header('Location: ' . PATH . '/new-post');

  }

  include_once VIEWS . '/newPost.tpl.php';
} else {
  include_once VIEWS . '/newPost.tpl.php';
}

