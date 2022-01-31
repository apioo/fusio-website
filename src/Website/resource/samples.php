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
      <div class="mdl-card__title">PixAPI</div>
      <div class="mdl-card__supporting-text">
        <img src="<?php echo $base; ?>/img/jquery.png" class="fusio-avatar" />
        A fun demo JQuery app which uses Fusio as API backend. It shows how you
        can build a simple game using Fusio as backend.
      </div>
      <div class="mdl-card__actions mdl-card--border">
        <a href="https://pixapi.apioo.de/" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">Website</a>
      </div>
    </div>
  </div>
  
  <div class="mdl-cell mdl-cell--6-col">
    <div class="fusio-card-app mdl-shadow--2dp mdl-card">
      <div class="mdl-card__title">Todo-App</div>
      <div class="mdl-card__supporting-text">
        <img src="<?php echo $base; ?>/img/angularjs.png" class="fusio-avatar" />
        Sample AngularJS app which can read, create and delete todo entries. It
        uses the demo todo API of Fusio.
      </div>
      <div class="mdl-card__actions mdl-card--border">
        <a href="https://github.com/apioo/fusio-sample-angularjs" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">GitHub</a>
      </div>
    </div>
  </div>
  
  <div class="mdl-cell mdl-cell--6-col">
    <div class="fusio-card-app mdl-shadow--2dp mdl-card">
      <div class="mdl-card__title">Todo-CLI</div>
      <div class="mdl-card__supporting-text">
        <img src="<?php echo $base; ?>/img/java.png" class="fusio-avatar" />
        Sample CLI app which reads all todo entries and provides a way to post
        new ones. It uses the default todo API of Fusio.
      </div>
      <div class="mdl-card__actions mdl-card--border">
        <a href="https://github.com/apioo/fusio-sample-javacli" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">GitHub</a>
      </div>
    </div>
  </div>
  
  <div class="mdl-cell mdl-cell--6-col">
    <div class="fusio-card-app mdl-shadow--2dp mdl-card">
      <div class="mdl-card__title">Authentication</div>
      <div class="mdl-card__supporting-text">
        <img src="<?php echo $base; ?>/img/jquery.png" class="fusio-avatar" />
        Simple JQuery app which shows how to authenticate and access a Fusio
        based API.
      </div>
      <div class="mdl-card__actions mdl-card--border">
        <a href="https://github.com/apioo/fusio-sample-jquery" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">GitHub</a>
      </div>
    </div>
  </div>
</div>

<?php include(__DIR__ . '/inc/footer.php'); ?>
