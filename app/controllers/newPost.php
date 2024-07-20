<?php

use myfrm\Validator;
use myfrm\Db;

$db_config = require CONFIG . '/db.php';

if ($_SERVER["REQUEST_METHOD"] === 'POST') {

  // указываем только те инпуты, которые нам необходимы

  $fillable = load(['title', "shortDesc", "fullDesc"]);

  $validator = new Validator();
  $validator->validate($fillable, [
    "title" => [
      "required" => true,
      "min" => 5,
      "max" => 255
    ],

    "shortDesc" => [
      "required" => true,
      "min" => 5,
      "max" => 255
    ],

    "fullDesc" => [
      "required" => true,
      "min" => 10
    ],
  ]);

  $errors = [];

  // проверяем, заполнены ли все инпуты, если нет - то добавляем запись в массив $errors

  foreach ($fillable as $key => $value) {
    if (empty(trim($value))) {
      $errors[$key] = ucfirst($key) . " обязателен!";
    }
  }

die;
  // если ошибок нет, про отправляем запрос к БД

  if (empty($errors)) {
    $db = (Db::getInstance())->getConect($db_config);
    $res = "INSERT INTO `posts` (`title`, `short_desc`, `full_desc`, `slug`, `dt_create`) VALUES (:title, :shortDesc, :fullDesc, :slug, CURRENT_TIMESTAMP);";

    $params = [
      "title" => validator($_POST['title']),
      "shortDesc" => validator($_POST['shortDesc']),
      "fullDesc" => $_POST['fullDesc'],
      "slug" => slugify($_POST['title'])
    ];

    $db->query($res, $params);

    setcookie("send", "true", time() + 1);

    redirect('/new-post');
  }


}

include_once VIEWS . '/newPost.tpl.php';