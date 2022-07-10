<?php include(__DIR__ . '/inc/header.php'); ?>

<div class="fusio-block mdl-grid mdl-shadow--2dp">
  <div class="mdl-cell mdl-cell--12-col">
    <h4>SDK</h4>
    <p>To build and integrate apps with Fusio we provide several SDKs which help
    you to easily work with the REST API of Fusio. These SDKs are also automatically
    generated based on the schema of the API, you can use the same technique
    to build a SDK for your API.</p>
  </div>
</div>

<div class="fusio-content mdl-grid">
  <div class="mdl-cell mdl-cell--6-col">
    <div class="fusio-card-app mdl-shadow--2dp mdl-card">
      <div class="mdl-card__title">Javascript</div>
      <div class="mdl-card__supporting-text">
        <img src="<?php echo $base; ?>/img/typescript.png" class="fusio-avatar" />
        The official javascript SDK to talk to the Fusio API.
      </div>
      <div class="mdl-card__actions mdl-card--border">
        <a href="https://github.com/apioo/fusio-sdk-javascript" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">GitHub</a>
        <a href="https://www.npmjs.com/package/fusio-sdk" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">NPM</a>
      </div>
    </div>
  </div>
  <div class="mdl-cell mdl-cell--6-col">
    <div class="fusio-card-app mdl-shadow--2dp mdl-card">
      <div class="mdl-card__title">PHP</div>
      <div class="mdl-card__supporting-text">
        <img src="<?php echo $base; ?>/img/php.png" class="fusio-avatar" />
        The official PHP SDK to talk to the Fusio API.
      </div>
      <div class="mdl-card__actions mdl-card--border">
        <a href="https://github.com/apioo/fusio-sdk-php" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">GitHub</a>
        <a href="https://packagist.org/packages/fusio/sdk" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">Packagist</a>
      </div>
    </div>
  </div>
  <div class="mdl-cell mdl-cell--6-col">
    <div class="fusio-card-app mdl-shadow--2dp mdl-card">
      <div class="mdl-card__title">Laravel</div>
      <div class="mdl-card__supporting-text">
        <img src="<?php echo $base; ?>/img/laravel.png" class="fusio-avatar" />
        Integration of the PHP SDK into Laravel.
      </div>
      <div class="mdl-card__actions mdl-card--border">
        <a href="https://github.com/apioo/fusio-sdk-php-laravel" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">GitHub</a>
      </div>
    </div>
  </div>
  <div class="mdl-cell mdl-cell--6-col">
    <div class="fusio-card-app mdl-shadow--2dp mdl-card">
      <div class="mdl-card__title">REST</div>
      <div class="mdl-card__supporting-text">
        <img src="<?php echo $base; ?>/img/openapi.png" class="fusio-avatar" />
        Documentation of the REST API in case you want directly talk to the endpoints.
      </div>
      <div class="mdl-card__actions mdl-card--border">
        <a href="https://demo.fusio-project.org/apps/documentation/#!/api/" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">Reference</a>
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
