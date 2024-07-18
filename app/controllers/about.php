<?php

$contant = [
  1 => 
    '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi adipisci id sit, illo accusantium esse, veritatis facilis sint tenetur exercitationem aspernatur debitis cumque doloremque et iure aut laborum, quos perspiciatis!</p>',
  2 =>
    '<p>Numquam, consectetur voluptates harum qui dolores et odio vel iure fuga ipsa. Facere laboriosam vel vero doloremque in ex quibusdam dolorum quia a quaerat ullam obcaecati quis et, dolor minus.</p>',
  3 =>
    '<p>Eos voluptates harum optio veniam animi, reprehenderit quam quas hic. Iure, adipisci! Deserunt eaque dolor consequatur quia inventore quod ad vero illo nemo! Aspernatur architecto, hic accusamus itaque debitis non.</p>'

];

$postsGroup = [
  1 => [
    'title' => 'An item',
    'slug' => lcfirst(str_replace(' ', '-', 'An item'))
  ],
  2 => [
    'title' => 'A second item',
    'slug' => lcfirst(str_replace(' ', '-', 'A second item'))
  ],
  3 => [
    'title' => 'A third item',
    'slug' => lcfirst(str_replace(' ', '-', 'A third item'))
  ],
  4 => [
    'title' => 'A fourth item',
    'slug' => lcfirst(str_replace(' ', '-', 'A fourth item'))
  ],
];

$title = 'Blog :: about';

require_once VIEWS . '/about.tpl.php';