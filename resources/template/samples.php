<?php include(__DIR__ . '/inc/header.php'); ?>

<div class="fusio-headline">
  <div class="container">
    <div class="row">
      <div class="col p-4 mx-auto text-center">
        <h1 class="display-4 fw-normal">Samples</h1>
      </div>
    </div>
  </div>
</div>

<div class="container mt-4 pt-4 mb-4 pb-4">
  <div class="row">
    <div class="col">
      <p>The following list shows small example apps which integrate with the Fusio API. They act as a small reference
        and can help to bootstrap your app.</p>
    </div>
  </div>
</div>

<div class="bg-light mt-4 pt-4 mb-4 pb-4">
  <div class="container">
    <div class="row row-cols-1 row-cols-md-3 text-center">
      <div class="col">
        <div class="card mb-3">
          <div class="card-header py-3">
            <h2 class="my-0 fw-normal fs-5">Javascript Angular</h2>
          </div>
          <img src="<?php echo $base; ?>/img/angular.png" class="rounded mx-auto d-block mt-3" />
          <div class="card-body">
            <p>Angular app which uses the Fusio Angular SDK to quickly build a complete backend app.</p>
            <a href="https://github.com/apioo/fusio-sample-javascript-angular" class="btn btn-primary">GitHub</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-3">
          <div class="card-header py-3">
            <h2 class="my-0 fw-normal fs-5">PHP CLI</h2>
          </div>
          <img src="<?php echo $base; ?>/img/php.png" class="rounded mx-auto d-block mt-3" />
          <div class="card-body">
            <p>A sample PHP CLI app which outputs all routes of your Fusio instance.</p>
            <a href="https://github.com/apioo/fusio-sample-php-cli" class="btn btn-primary">GitHub</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-3">
          <div class="card-header py-3">
            <h2 class="my-0 fw-normal fs-5">Java CLI</h2>
          </div>
          <img src="<?php echo $base; ?>/img/java.png" class="rounded mx-auto d-block mt-3" />
          <div class="card-body">
            <p>A sample Java CLI app which outputs all routes of your Fusio instance.</p>
            <a href="https://github.com/apioo/fusio-sample-java-cli" class="btn btn-primary">GitHub</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-3">
          <div class="card-header py-3">
            <h2 class="my-0 fw-normal fs-5">Go CLI</h2>
          </div>
          <img src="<?php echo $base; ?>/img/go.png" class="rounded mx-auto d-block mt-3" />
          <div class="card-body">
            <p>A sample Go CLI app which outputs all routes of your Fusio instance.</p>
            <a href="https://github.com/apioo/fusio-sample-go-cli" class="btn btn-primary">GitHub</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-3">
          <div class="card-header py-3">
            <h2 class="my-0 fw-normal fs-5">Headless CMS</h2>
          </div>
          <img src="<?php echo $base; ?>/img/openapi.png" class="rounded mx-auto d-block mt-3" />
          <div class="card-body">
            <p>Fusio headless CMS sample app which shows how to structure and design a larger API.</p>
            <a href="https://github.com/apioo/fusio-sample-cms" class="btn btn-primary">GitHub</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-3">
          <div class="card-header py-3">
            <h2 class="my-0 fw-normal fs-5">Laravel</h2>
          </div>
          <img src="<?php echo $base; ?>/img/laravel.png" class="rounded mx-auto d-block mt-3" />
          <div class="card-body">
            <p>A sample Laravel app which shows how you can integrate Fusio.</p>
            <a href="https://github.com/apioo/fusio-sample-laravel" class="btn btn-primary">GitHub</a>
          </div>
        </div>
      </div>
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
