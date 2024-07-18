<? include VIEWS . '/inc/head.php' ?>

<body>
  <div class="wrapper">
    <? include VIEWS . '/inc/navbar.php'; ?>
    <main class="main py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <h1><?= $post['title'] ?></h1>
            <h2 class="text-secondary"><?= $post['short_desc'] ?></h2>
            <p><?= $post['full_desc'] ?></p>
          </div>
          <? include VIEWS . '/inc/sidebar.php'; ?>
        </div>
      </div>
    </main>
    <? include VIEWS . '/inc/footer.php'; ?>