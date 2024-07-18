<? include VIEWS . '/inc/head.php' ?>

<body>
  <div class="wrapper">
    <? include VIEWS . '/inc/navbar.php'; ?>
    <main class="main py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <? foreach ($posts as $post): ?>
              <div class="card mb-3">
                <div class="card-body">
                  <h5 class="card-title"><?= $post['title'] ?></h5>
                  <p class="card-text"><?= $post['short_desc'] ?></p>
                  <a href="/post?slug=<?= $post['slug'] ?>" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            <? endforeach; ?>
          </div>
          <? include VIEWS . '/inc/sidebar.php'; ?>
        </div>
      </div>
    </main>
    <? include VIEWS . '/inc/footer.php'; ?>