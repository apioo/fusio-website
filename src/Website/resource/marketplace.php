<?php include(__DIR__ . '/inc/header.php'); ?>

<!--
Hey developer, if you want to add an app to the marketplace you need to add your repository to the repositories.json
file at the root of this repository. Then your app repository needs also an app.yaml file where you provide some meta
information about your app see also https://github.com/apioo/fusio-apps-backend/blob/master/app.yaml
Then your app is easy installable via the Fusio backend app and can be used by all our users.
-->

<div style="background-image:url('<?php echo $base; ?>/img/intro.jpg');background-size:cover">
  <div class="container">
    <div class="row">
      <div class="col p-lg-4 mx-auto text-center">
        <h1 class="display-4 fw-normal">Marketplace</h1>
      </div>
    </div>
  </div>
</div>

<div class="container mt-4 pt-4 mb-4 pb-4">
  <div class="row">
    <div class="col">
      <p>Fusio contains a variety of apps for specific use cases. Every app can be
        directly installed from the backend app under System / Marketplace. The
        following list contains all available apps. If you want to add an app please open
        an issue at our <a href="https://github.com/apioo/fusio">repository</a>.
      </p>
    </div>
  </div>
</div>

<div class="container mt-4 pt-4 mb-4 pb-4">
  <div class="row row-cols-3">
      <?php foreach($apps as $name => $app): ?>
        <div class="col">
          <div class="card mb-4">
            <img src="<?php echo $app->screenshot; ?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><?php echo $name; ?></h5>
              <p class="card-text"><?php echo $app->description; ?></p>
              <a href="<?php echo $app->website; ?>" class="btn btn-secondary">Website</a>
              <a href="<?php echo $app->downloadUrl; ?>" class="btn btn-primary">Download</a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col text-end">
      <a href="https://github.com/apioo/fusio-website/blob/main/src/Website/resource/<?php echo pathinfo(__FILE__, PATHINFO_BASENAME); ?>"><i class="bi bi-pen-fill"></i> Edit this page</a>
    </div>
  </div>
</div>

<?php include(__DIR__ . '/inc/footer.php'); ?>
