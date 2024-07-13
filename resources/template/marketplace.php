<?php include(__DIR__ . '/inc/header.php'); ?>

<!--
Hey developer, if you want to add an app to the marketplace you need to add your repository to the repositories.json
file at the root of this repository. Then your app repository needs also an app.yaml file where you provide some meta
information about your app see also https://github.com/apioo/fusio-apps-backend/blob/master/app.yaml
Then your app is easy installable via the Fusio backend app and can be used by all our users.
-->

<div class="fusio-headline">
  <div class="container">
    <div class="row">
      <div class="col p-4 mx-auto text-center">
        <h1 class="display-4 fw-normal">Marketplace</h1>
      </div>
    </div>
  </div>
</div>

<div class="container mt-4 pt-4 mb-4 pb-4">
  <div class="row">
    <div class="col">
      <p>Fusio provides a <a href="https://marketplace.fusio-project.org/">Marketplace</a> where every user can provide
        actions and apps which can be installed at every local Fusio instance. Every action or app can be directly
        installed from the backend app under Development / Marketplace or also via CLI i.e. <code>php bin/fusio marketplace:install fusio</code>.
        The following list contains some apps from the live marketplace.</p>
    </div>
  </div>
</div>

<div class="bg-light mt-4 pt-4 mb-4 pb-4">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="display-6 fw-normal mb-4">Apps</h2>
      </div>
    </div>
    <div class="row row-cols-1 row-cols-lg-3">
        <?php foreach($apps->entry as $app): ?>
          <div class="col">
            <div class="card mb-4">
              <div class="card-body">
                <div class="card-title"><h2 class="fs-2"><i class="bi bi-<?php echo $app->icon; ?>"></i> <?php echo $app->name; ?></h2></div>
                <p class="card-text"><?php echo $app->summary; ?></p>
                <a href="https://marketplace.fusio-project.org/marketplace/directory/app/<?php echo $app->author->name; ?>/<?php echo $app->name; ?>" class="btn btn-primary">Details</a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
    </div>
  </div>
</div>

<div class="bg-light mt-4 pt-4 mb-4 pb-4">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="display-6 fw-normal mb-4">Actions</h2>
      </div>
    </div>
    <div class="row row-cols-1 row-cols-lg-3">
        <?php foreach($actions->entry as $action): ?>
          <div class="col">
            <div class="card mb-4">
              <div class="card-body">
                <div class="card-title"><h2 class="fs-2"><i class="bi bi-<?php echo $action->icon; ?>"></i> <?php echo $action->name; ?></h2></div>
                <p class="card-text"><?php echo $action->summary; ?></p>
                <a href="https://marketplace.fusio-project.org/marketplace/directory/action/<?php echo $action->author->name; ?>/<?php echo $action->name; ?>" class="btn btn-primary">Details</a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col text-end">
      <a href="https://github.com/apioo/fusio-website/blob/main/resources/template/<?php echo pathinfo(__FILE__, PATHINFO_BASENAME); ?>"><i class="bi bi-pen-fill"></i> Edit this page</a>
    </div>
  </div>
</div>

<?php include(__DIR__ . '/inc/footer.php'); ?>
