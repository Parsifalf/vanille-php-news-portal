
<? include VIEWS . '/inc/head.php' ?>

<body>
  <div class="wrapper">
    <? include VIEWS . '/inc/navbar.php'; ?>
    <main class="main py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            
            <? if (isset($_COOKIE['send']) && $_COOKIE['send'] === 'true'): ?>
              <h1>Вы успешно отправили данные</h1>
              
            <? else: ?>
              
              <form class="row g-3" method="post">
                <div class="col-md-12">
                  <label for="inputEmail4" class="form-label">Название статьи</label>
                  <input type="text" class="form-control" id="inputEmail4" name="title" value="<?=old('title')?>" required>
                </div>
                <? if (isset($errors['title'])): ?>
                  <div class="invalid-feedback d-block">
                    Введите Заголовок
                  </div>
                <? endif; ?>


                <div class="col-md-12">
                  <label for="inputSD">Коротнкое описание стататьи</label>
                  <textarea class="form-control" placeholder="Напишите короткое описание статьи" id="inputSD" name="shortDesc"><?=old('shortDesc')?></textarea>
                </div>
                <? if (isset($errors['shortDesc'])): ?>
                  <div class="invalid-feedback d-block">
                    Введите Короткое описание
                  </div>
                <? endif; ?>

                <div class="col-md-12">
                  <label for="inputFD">Коротнкое описание стататьи</label>
                  <textarea required class="form-control" placeholder="Напишите текс статьи" id="inputFD" name="fullDesc"><?=old('fullDesc')?></textarea>
                </div>

                <? if (isset($errors['fullDesc'])): ?>
                  <div class="invalid-feedback d-block">
                    Введите текст статьи
                  </div>
                <? endif; ?>

                <div class="col-12">
                  <button type="submit" class="btn btn-primary">Sign in</button>
                </div>
              </form>

            <? endif; ?>

          </div>
          <? include VIEWS . '/inc/sidebar.php'; ?>
        </div>
      </div>
    </main>
    <? include VIEWS . '/inc/footer.php'; ?>