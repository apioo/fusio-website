<?php include(__DIR__ . '/inc/header.php'); ?>

<div class="fusio-block mdl-grid mdl-shadow--2dp">
  <div class="mdl-cell mdl-cell--12-col">
    <h4>Tools</h4>
    <p>The following list shows tools which work with the Fusio API. They help
    you to build new apps or can also be used to learn how you can integrate
    Fusio with your app. Please contact us if you want to add a new tool or app
    to this list.</p>
  </div>
</div>

<div class="fusio-content mdl-grid">
  <div class="mdl-cell mdl-cell--6-col">
    <div class="fusio-card-app mdl-shadow--2dp mdl-card">
      <div class="mdl-card__title">VSCode</div>
      <div class="mdl-card__supporting-text">
        <img src="<?php echo $base; ?>/img/vscode.png" class="fusio-avatar" />
        Fusio VSCode extension which provides a more advanced development environment for action developers.
      </div>
      <div class="mdl-card__actions mdl-card--border">
        <a href="https://marketplace.visualstudio.com/items?itemName=Fusio.fusio" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">Marketplace</a>
        <a href="https://github.com/apioo/fusio-tools-vscode" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">GitHub</a>
      </div>
    </div>
  </div>

  <div class="mdl-cell mdl-cell--6-col">
    <div class="fusio-card-app mdl-shadow--2dp mdl-card">
      <div class="mdl-card__title">Electron</div>
      <div class="mdl-card__supporting-text">
        <img src="<?php echo $base; ?>/img/electron.png" class="fusio-avatar" />
        Electron app of the backend whereby it is possible to control and
        access a Fusio instance by running the app locally.
      </div>
      <div class="mdl-card__actions mdl-card--border">
        <a href="https://github.com/apioo/fusio-tools-electron" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">GitHub</a>
      </div>
    </div>
  </div>

  <div class="mdl-cell mdl-cell--6-col">
    <div class="fusio-card-app mdl-shadow--2dp mdl-card">
      <div class="mdl-card__title">Code-Generator</div>
      <div class="mdl-card__supporting-text">
        <img src="<?php echo $base; ?>/img/es6.png" class="fusio-avatar" />
        A service which helps to generate source files to build a CRUD API based
        on a relational database.
      </div>
      <div class="mdl-card__actions mdl-card--border">
        <a href="https://generate.apioo.de/" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">Website</a>
      </div>
    </div>
  </div>

  <div class="mdl-cell mdl-cell--6-col">
    <div class="fusio-card-app mdl-shadow--2dp mdl-card">
      <div class="mdl-card__title">Table Plugin</div>
      <div class="mdl-card__supporting-text">
        <img src="<?php echo $base; ?>/img/jquery.png" class="fusio-avatar" />
        JQuery Plugin which can be used to render paginated tables based on the
        response of the SQL-Table Adapter.
      </div>
      <div class="mdl-card__actions mdl-card--border">
        <a href="https://github.com/kidino/fusioTable" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">GitHub</a>
      </div>
    </div>
  </div>
</div>

<?php include(__DIR__ . '/inc/footer.php'); ?>
