<?php include(__DIR__ . '/inc/header.php'); ?>

<!--
Hey developer, if you want to add an adapter you only need to set the keyword "fusio-adapter" in your composer.json file
see also https://github.com/apioo/fusio-adapter-sql/blob/master/composer.json as example. Our fetcher will then
automatically find your repository and add it to this list.
-->

<div style="background-image:url('<?php echo $base; ?>/img/intro.jpg');background-size:cover">
  <div class="container">
    <div class="row">
      <div class="col p-lg-4 mx-auto text-center">
        <h1 class="display-4 fw-normal">Adapter</h1>
      </div>
    </div>
  </div>
</div>

<div class="container mt-4 pt-4 mb-4 pb-4">
  <div class="row">
    <div class="col">
      <p>An Adapter provides a way to extend the functionality of Fusio. It is i.e. possible to connect to different
      data sources or extend specific capabilities of the system. The following page lists available adapters. You can
      install an adapter through composer and then register the adapter class at the system:</p>
      <pre><code class="bash">composer require fusio/adapter-mongodb
php bin/fusio system:register "Fusio\Adapter\Mongodb\Adapter"</code></pre>
      <p>This page lists all adapters which have the keyword <code>fusio-adapter</code>
        in their composer json file.</p>
    </div>
  </div>
</div>

<div class="bg-light mt-4 pt-4 mb-4 pb-4">
  <div class="container">
    <div class="row row-cols-1 row-cols-md-4 text-center">
      <?php foreach($fusio as $row): ?>
      <div class="col">
        <div class="card mb-3">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal"><?php echo $row->name; ?></h4>
          </div>
          <div class="card-body">
            <p><?php echo $row->description; ?></p>
            <a href="<?php echo $row->url; ?>" class="btn btn-secondary">Packagist</a>
            <a href="<?php echo $row->repository; ?>" class="btn btn-primary">GitHub</a>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>

<div class="container mt-4 pt-4 mb-4 pb-4">
  <div class="row">
    <div class="col">
      <h4>Community</h4>
      <p>The following adapter are provided by the community.</p>
    </div>
  </div>
</div>

<div class="bg-light mt-4 pt-4 mb-4 pb-4">
  <div class="container">
    <div class="row row-cols-1 row-cols-md-4 text-center">
        <?php foreach($community as $row): ?>
          <div class="col">
            <div class="card mb-3">
              <div class="card-header py-3">
                <h4 class="my-0 fw-normal"><?php echo $row->name; ?></h4>
              </div>
              <div class="card-body">
                <p><?php echo $row->description; ?></p>
                <a href="<?php echo $row->url; ?>" class="btn btn-secondary">Packagist</a>
                <a href="<?php echo $row->repository; ?>" class="btn btn-primary">GitHub</a>
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
      <a href="https://github.com/apioo/fusio-website/blob/main/src/Website/resource/<?php echo pathinfo(__FILE__, PATHINFO_BASENAME); ?>"><i class="bi bi-pen-fill"></i> Edit this page</a>
    </div>
  </div>
</div>

<?php include(__DIR__ . '/inc/footer.php'); ?>
