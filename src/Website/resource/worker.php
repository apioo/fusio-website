<?php include(__DIR__ . '/inc/header.php'); ?>

<div style="background-image:url('<?php echo $base; ?>/img/intro.jpg');background-size:cover">
  <div class="container">
    <div class="row">
      <div class="col p-lg-4 mx-auto text-center">
        <h1 class="display-4 fw-normal">Worker</h1>
      </div>
    </div>
  </div>
</div>

<div class="fusio-block mdl-grid mdl-shadow--2dp">
  <div class="mdl-cell mdl-cell--12-col">
    <h4>Worker</h4>
    <p>The following list shows worker which allow you to implement actions in a
    different programming languages. Please contact us if you want to add support
    for a different programming language.</p>
  </div>
</div>

<div class="fusio-content mdl-grid">
  <div class="mdl-cell mdl-cell--6-col">
    <div class="fusio-card-app mdl-shadow--2dp mdl-card">
      <div class="mdl-card__title">Java</div>
      <div class="mdl-card__supporting-text">
        <img src="<?php echo $base; ?>/img/java.png" class="fusio-avatar" />
        Worker implementation written in Java
      </div>
      <div class="mdl-card__actions mdl-card--border">
        <a href="https://github.com/apioo/fusio-worker-java" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">GitHub</a>
      </div>
    </div>
  </div>

  <div class="mdl-cell mdl-cell--6-col">
    <div class="fusio-card-app mdl-shadow--2dp mdl-card">
      <div class="mdl-card__title">Javascript</div>
      <div class="mdl-card__supporting-text">
        <img src="<?php echo $base; ?>/img/es6.png" class="fusio-avatar" />
        Worker implementation written in Javascript running on Nodejs
      </div>
      <div class="mdl-card__actions mdl-card--border">
        <a href="https://github.com/apioo/fusio-worker-javascript" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">GitHub</a>
      </div>
    </div>
  </div>

  <div class="mdl-cell mdl-cell--6-col">
    <div class="fusio-card-app mdl-shadow--2dp mdl-card">
      <div class="mdl-card__title">PHP</div>
      <div class="mdl-card__supporting-text">
        <img src="<?php echo $base; ?>/img/php.png" class="fusio-avatar" />
        Worker implementation written in PHP
      </div>
      <div class="mdl-card__actions mdl-card--border">
        <a href="https://github.com/apioo/fusio-worker-php" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">GitHub</a>
      </div>
    </div>
  </div>

  <div class="mdl-cell mdl-cell--6-col">
    <div class="fusio-card-app mdl-shadow--2dp mdl-card">
      <div class="mdl-card__title">Python</div>
      <div class="mdl-card__supporting-text">
        <img src="<?php echo $base; ?>/img/python.png" class="fusio-avatar" />
        Worker implementation written in Python
      </div>
      <div class="mdl-card__actions mdl-card--border">
        <a href="https://github.com/apioo/fusio-worker-python" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">GitHub</a>
      </div>
    </div>
  </div>
</div>

<div class="fusio-content fusio-edit mdl-grid">
  <div class="mdl-cell mdl-cell--12-col">
    <a href="https://github.com/apioo/fusio-website/blob/main/src/Website/resource/<?php echo pathinfo(__FILE__, PATHINFO_BASENAME); ?>"><i class="material-icons">edit</i> Edit this page</a>
  </div>
</div>

<?php include(__DIR__ . '/inc/footer.php'); ?>
