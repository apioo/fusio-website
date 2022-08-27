<?php include(__DIR__ . '/inc/header.php'); ?>

<div class="fusio-block mdl-grid mdl-shadow--2dp">
  <div class="mdl-cell mdl-cell--12-col">
    <h4>Samples</h4>
    <p>The following list shows small example apps which integrate with the Fusio API. They act as a small reference
    and can help to bootstrap your app.</p>
  </div>
</div>

<div class="fusio-content mdl-grid">

  <div class="mdl-cell mdl-cell--6-col">
    <div class="fusio-card-app mdl-shadow--2dp mdl-card">
      <div class="mdl-card__title">Headless CMS</div>
      <div class="mdl-card__supporting-text">
        <img src="<?php echo $base; ?>/img/openapi.png" class="fusio-avatar" />
        Fusio headless CMS sample app which shows how to structure and design a
        larger API.
      </div>
      <div class="mdl-card__actions mdl-card--border">
        <a href="https://github.com/apioo/fusio-sample-cms" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">GitHub</a>
      </div>
    </div>
  </div>

  <div class="mdl-cell mdl-cell--6-col">
    <div class="fusio-card-app mdl-shadow--2dp mdl-card">
      <div class="mdl-card__title">Laravel</div>
      <div class="mdl-card__supporting-text">
        <img src="<?php echo $base; ?>/img/laravel.png" class="fusio-avatar" />
        A sample Laravel app which shows how you can integrate Fusio.
      </div>
      <div class="mdl-card__actions mdl-card--border">
        <a href="https://github.com/apioo/fusio-sample-laravel" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">GitHub</a>
      </div>
    </div>
  </div>

  <div class="mdl-cell mdl-cell--6-col">
    <div class="fusio-card-app mdl-shadow--2dp mdl-card">
      <div class="mdl-card__title">Java CLI</div>
      <div class="mdl-card__supporting-text">
        <img src="<?php echo $base; ?>/img/java.png" class="fusio-avatar" />
        A sample Java CLI app which outputs all routes of your Fusio instance.
      </div>
      <div class="mdl-card__actions mdl-card--border">
        <a href="https://github.com/apioo/fusio-sample-javacli" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">GitHub</a>
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
