<?php include(__DIR__ . '/inc/header.php'); ?>

<!--
Hey developer, if you want to add an app to the marketplace you need to add your repository to the repositories.json
file at the root of this repository. Then your app repository needs also an app.yaml file where you provide some meta
information about your app see also https://github.com/apioo/fusio-apps-backend/blob/master/app.yaml
Then your app is easy installable via the Fusio backend app and can be used by all our users.
-->

<div class="fusio-block mdl-grid mdl-shadow--2dp">
  <div class="mdl-cell mdl-cell--12-col">
    <h4>Marketplace</h4>
    <p>Fusio contains a variety of apps for specific use cases. Every app can be
    directly installed from the backend app under System / Marketplace. The
    following list contains all available apps. If you want to add an app please open
    an issue at our <a href="https://github.com/apioo/fusio">repository</a>.
    </p>
  </div>
</div>

<div class="fusio-content mdl-grid">
  <?php foreach($apps as $name => $app): ?>
  <div class="mdl-cell mdl-cell--6-col">
    <div class="fusio-card-app mdl-shadow--2dp mdl-card">
      <div class="mdl-card__title" style="height:180px;background:linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),url('<?php echo $app->screenshot; ?>') center / cover;">
        <h2 class="mdl-card__title-text"><?php echo $name; ?></h2>
      </div>
      <div class="mdl-card__supporting-text">
        <?php echo $app->description; ?>
      </div>
      <div class="mdl-card__actions mdl-card--border">
        <a href="<?php echo $app->website; ?>" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">Website</a>
        <a href="<?php echo $app->downloadUrl; ?>" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">Download</a>
      </div>
    </div>
  </div>
  <?php endforeach; ?>
</div>

<div class="fusio-content fusio-edit mdl-grid">
  <div class="mdl-cell mdl-cell--12-col">
    <a href="https://github.com/apioo/fusio-website/blob/main/src/Website/resource/<?php echo pathinfo(__FILE__, PATHINFO_BASENAME); ?>"><i class="material-icons">edit</i> Edit this page</a>
  </div>
</div>

<?php include(__DIR__ . '/inc/footer.php'); ?>
