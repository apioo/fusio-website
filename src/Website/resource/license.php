<?php include(__DIR__ . '/inc/header.php'); ?>

<div style="background-image:url('<?php echo $base; ?>/img/intro.jpg');background-size:cover">
  <div class="container">
    <div class="row">
      <div class="col p-lg-4 mx-auto text-center">
        <h1 class="display-4 fw-normal">License</h1>
      </div>
    </div>
  </div>
</div>

<div class="container mt-4 pt-4 mb-4 pb-4">
  <div class="row">
    <div class="col">
      <p>Fusio is an open source project which you can use freely also for commercial projects under the terms of the
      <a href="https://github.com/apioo/fusio/blob/master/LICENSE">AGPLv3</a>. We want to build a sustainable open source
      project with a long term relationship to our users.</p>
    </div>
  </div>
</div>

<div class="bg-light mt-4 pt-4 mb-4 pb-4">
  <div class="container">
    <div class="row">
      <div class="col-lg">
      </div>
      <div class="col">
        <div class="card">
          <h5 class="card-header">AGPLv3</h5>
          <div class="card-body">
            <p class="card-text">If you are a blogger or magazine we would be happy if you like to cover
              Fusio. You can <a href="<?php echo $base; ?>/media/fusio_icon.zip">download</a>
              the official icon set to represent Fusio.</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <h5 class="card-header">Business</h5>
          <div class="card-body">
            <p class="card-text">If you are a blogger or magazine we would be happy if you like to cover
              Fusio. You can <a href="<?php echo $base; ?>/media/fusio_icon.zip">download</a>
              the official icon set to represent Fusio.</p>
          </div>
        </div>
      </div>
      <div class="col-lg">
      </div>
    </div>
  </div>
</div>

<div class="container mt-4 pt-4 mb-4 pb-4">
  <div class="row">
    <div class="col">
      <h4>AGPLv3</h4>
      <p>If you are not familiar with the <a href="https://tldrlegal.com/license/gnu-affero-general-public-license-v3-(agpl-3.0)">AGPLv3</a>
        license we got you covered. Basically it means that you can do everything with the project but if you make modifications
        to the source code you need to publish those changes also as open source under the AGPLv3 license. In the case of Fusio,
        configuring an action at the backend is _not_ a modification to the source code, it is only a configuration, so you don`t
        need to publish such actions. A modification is if you actually create a PHP source file.</p>
      <p>With this license choice we are following the footsteps of great projects like Wordpress or Nextcloud. Like Wordpress
        enables every human to be able to publish content on the web, we want to enable everybody to build high quality
        APIs, which makes the digitalization of the world possible. If you have any further questions please use our
        <a href="<?php echo $router->getAbsolutePath(\App\Website\Contact::class); ?>">contact</a> page.</p>
    </div>
  </div>
</div>


<div class="fusio-block mdl-grid mdl-shadow--2dp">
  <div class="mdl-cell mdl-cell--12-col">

  </div>
</div>

<div class="fusio-content mdl-grid">
  <div class="mdl-cell mdl-cell--4-col mdl-card mdl-shadow--2dp fusio-license fusio-license-opensource">
    <div class="mdl-card__title">
      <h2 class="mdl-card__title-text">Support</h2>
    </div>
    <div class="mdl-card__supporting-text">
      <div style="height:220px;">
        <ul>
          <li>Support our ongoing effort to improve Fusio</li>
          <li>Get a Sponsor badge on your profile</li>
        </ul>
      </div>
      <span class="mdl-chip">
        <span class="mdl-chip__text"><b>$10 a month</b></span>
      </span>
    </div>
    <div class="mdl-card__actions mdl-card--border">
      <a href="https://github.com/sponsors/chriskapp" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">Donate</a>
    </div>
  </div>
  <div class="mdl-cell mdl-cell--4-col mdl-card mdl-shadow--2dp fusio-license fusio-license-starter">
    <div class="mdl-card__title">
      <h2 class="mdl-card__title-text">Generation</h2>
    </div>
    <div class="mdl-card__supporting-text">
      <div style="height:220px;">
        <ul>
          <li>Access to our <a href="https://apigen.app/">apigen.app</a> code generator</li>
          <li>Generate complete APIs based on Entity or OpenAPI definitions</li>
          <li>Create simple CRUD APIs in minutes</li>
          <li>Deploy the generated code directly to a remote Fusio instance</li>
        </ul>
      </div>
      <span class="mdl-chip">
        <span class="mdl-chip__text"><b>$20 a month</b></span>
      </span>
    </div>
    <div class="mdl-card__actions mdl-card--border">
      <a href="https://github.com/sponsors/chriskapp" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">Donate</a>
    </div>
  </div>
  <div class="mdl-cell mdl-cell--4-col mdl-card mdl-shadow--2dp fusio-license fusio-license-enterprise">
    <div class="mdl-card__title">
      <h2 class="mdl-card__title-text">Cloud</h2>
    </div>
    <div class="mdl-card__supporting-text">
      <div style="height:220px;">
        <ul>
          <li>Access to our <a href="https://fusio.cloud/">fusio.cloud</a> platform</li>
          <li>Allows you to easily create a Fusio instance in the cloud</li>
          <li>Great for testing and evaluation of Fusio</li>
        </ul>
      </div>
      <span class="mdl-chip">
          <span class="mdl-chip__text"><b>$50 a month</b></span>
      </span>
    </div>
    <div class="mdl-card__actions mdl-card--border">
      <a href="https://github.com/sponsors/chriskapp" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">Donate</a>
    </div>
  </div>
</div>

<div class="fusio-block mdl-grid mdl-shadow--2dp">
  <div class="mdl-cell mdl-cell--12-col">

  </div>
</div>

<div class="fusio-content fusio-edit mdl-grid">
  <div class="mdl-cell mdl-cell--12-col">
    <a href="https://github.com/apioo/fusio-website/blob/main/src/Website/resource/<?php echo pathinfo(__FILE__, PATHINFO_BASENAME); ?>"><i class="material-icons">edit</i> Edit this page</a>
  </div>
</div>

<?php include(__DIR__ . '/inc/footer.php'); ?>
