<?php include(__DIR__ . '/inc/header.php'); ?>

<div class="fusio-headline">
  <div class="container">
    <div class="row">
      <div class="col p-4 mx-auto text-center">
        <h1 class="display-4 fw-normal">Integration</h1>
      </div>
    </div>
  </div>
</div>

<div class="container mt-4 pt-4 mb-4 pb-4">
  <div class="row">
    <div class="col">
      <p>The following list shows small apps which integrate with the Fusio API. They act as a small reference
        and can help you to integrate Fusio into your project.</p>
    </div>
  </div>
</div>

<div class="bg-light mt-4 pt-4 mb-4 pb-4">
  <div class="container">
    <div class="row row-cols-1 row-cols-md-3 text-center">
      <div class="col">
        <div class="card mb-3">
          <div class="card-header py-3">
            <h2 class="my-0 fw-normal fs-5">C#</h2>
          </div>
          <img src="<?php echo $base; ?>/img/sdk/csharp.png" class="rounded mx-auto d-block mt-3" />
          <div class="card-body">
            <a href="https://github.com/apioo/fusio-sample-csharp-cli" class="btn btn-primary">GitHub</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-3">
          <div class="card-header py-3">
            <h2 class="my-0 fw-normal fs-5">Go CLI</h2>
          </div>
          <img src="<?php echo $base; ?>/img/sdk/go.png" class="rounded mx-auto d-block mt-3" />
          <div class="card-body">
            <a href="https://github.com/apioo/fusio-sample-go-cli" class="btn btn-primary">GitHub</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-3">
          <div class="card-header py-3">
            <h2 class="my-0 fw-normal fs-5">Java CLI</h2>
          </div>
          <img src="<?php echo $base; ?>/img/sdk/java.png" class="rounded mx-auto d-block mt-3" />
          <div class="card-body">
            <a href="https://github.com/apioo/fusio-sample-java-cli" class="btn btn-primary">GitHub</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-3">
          <div class="card-header py-3">
            <h2 class="my-0 fw-normal fs-5">Javascript Angular</h2>
          </div>
          <img src="<?php echo $base; ?>/img/sdk/angular.png" class="rounded mx-auto d-block mt-3" />
          <div class="card-body">
            <a href="https://github.com/apioo/fusio-sample-javascript-angular" class="btn btn-primary">GitHub</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-3">
          <div class="card-header py-3">
            <h2 class="my-0 fw-normal fs-5">PHP CLI</h2>
          </div>
          <img src="<?php echo $base; ?>/img/sdk/php.png" class="rounded mx-auto d-block mt-3" />
          <div class="card-body">
            <a href="https://github.com/apioo/fusio-sample-php-cli" class="btn btn-primary">GitHub</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-3">
          <div class="card-header py-3">
            <h2 class="my-0 fw-normal fs-5">PHP Fusio</h2>
          </div>
          <img src="<?php echo $base; ?>/img/sdk/openapi.png" class="rounded mx-auto d-block mt-3" />
          <div class="card-body">
            <a href="https://github.com/apioo/fusio-sample-cms" class="btn btn-primary">GitHub</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-3">
          <div class="card-header py-3">
            <h2 class="my-0 fw-normal fs-5">Python CLI</h2>
          </div>
          <img src="<?php echo $base; ?>/img/sdk/python.png" class="rounded mx-auto d-block mt-3" />
          <div class="card-body">
            <a href="https://github.com/apioo/fusio-sample-python-cli" class="btn btn-primary">GitHub</a>
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
