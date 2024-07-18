<?php

require_once CORE . '/func.php';
  $uri = trim(parse_url($_SERVER['REQUEST_URI'])['path'], '/');

  if(array_key_exists($uri, $routes)){
    require_once CONTROLLERS . '/' . $routes[$uri];
  }else {
    // dd($_SERVER);
    abort();
  }
