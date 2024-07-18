<?include VIEWS . '/inc/head.php'?>
<body>
  <div class="wrapper">
    <?include VIEWS . '/inc/navbar.php';?> 

    <main class="main py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-8">

            <?foreach($contant as $item):?>
              <p><?=$item?></p>
            <? endforeach; ?>
           
          </div>
          <?include VIEWS . '/inc/sidebar.php';?> 

        </div>

      </div>
    </main>

    <?include VIEWS . '/inc/footer.php';?> 
 