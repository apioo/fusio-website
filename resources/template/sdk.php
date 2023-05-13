<?php include(__DIR__ . '/inc/header.php'); ?>

<div style="background-image:url('<?php echo $base; ?>/img/intro.jpg');background-size:cover">
  <div class="container">
    <div class="row">
      <div class="col p-lg-4 mx-auto text-center">
        <h1 class="display-4 fw-normal">SDK</h1>
      </div>
    </div>
  </div>
</div>

<div class="container mt-4 pt-4 mb-4 pb-4">
  <div class="row">
    <div class="col">
      <p>To build and integrate apps with Fusio we provide several SDKs which help
      you to easily work with the REST API of Fusio.</p>
    </div>
  </div>
</div>

<div class="bg-light mt-4 pt-4 mb-4 pb-4">
  <div class="container">
    <div class="row row-cols-1 row-cols-md-3 text-center">
      <div class="col">
        <div class="card mb-3">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Javascript</h4>
          </div>
          <img src="<?php echo $base; ?>/img/typescript.png" class="rounded mx-auto d-block mt-3" />
          <div class="card-body">
            <p>The official javascript SDK to talk to the Fusio API.</p>
            <a href="https://github.com/apioo/fusio-sdk-javascript" class="btn btn-secondary">GitHub</a>
            <a href="https://www.npmjs.com/package/fusio-sdk" class="btn btn-primary">NPM</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-3">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">PHP</h4>
          </div>
          <img src="<?php echo $base; ?>/img/php.png" class="rounded mx-auto d-block mt-3" />
          <div class="card-body">
            <p>The official PHP SDK to talk to the Fusio API.</p>
            <a href="https://github.com/apioo/fusio-sdk-php" class="btn btn-secondary">GitHub</a>
            <a href="https://packagist.org/packages/fusio/sdk" class="btn btn-primary">Packagist</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-3">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Java</h4>
          </div>
          <img src="<?php echo $base; ?>/img/java.png" class="rounded mx-auto d-block mt-3" />
          <div class="card-body">
            <p>The official Java SDK to talk to the Fusio API.</p>
            <a href="https://github.com/apioo/fusio-sdk-java" class="btn btn-secondary">GitHub</a>
            <a href="https://mvnrepository.com/artifact/org.fusio-project/sdk" class="btn btn-primary">Package</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-3">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Go</h4>
          </div>
          <img src="<?php echo $base; ?>/img/go.png" class="rounded mx-auto d-block mt-3" />
          <div class="card-body">
            <p>The official Go SDK to talk to the Fusio API.</p>
            <a href="https://github.com/apioo/fusio-sdk-go" class="btn btn-primary">GitHub</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-3">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Angular</h4>
          </div>
          <img src="<?php echo $base; ?>/img/angular.png" class="rounded mx-auto d-block mt-3" />
          <div class="card-body">
            <p>Provides services and components to integrate Fusio into an Angular app.</p>
            <a href="https://github.com/apioo/fusio-sdk-javascript-angular" class="btn btn-primary">GitHub</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-3">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Laravel</h4>
          </div>
          <img src="<?php echo $base; ?>/img/laravel.png" class="rounded mx-auto d-block mt-3" />
          <div class="card-body">
            <p>Integration of the PHP SDK into Laravel.</p>
            <a href="https://github.com/apioo/fusio-sdk-php-laravel" class="btn btn-primary">GitHub</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-3">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Wordpress</h4>
          </div>
          <img src="<?php echo $base; ?>/img/wordpress.png" class="rounded mx-auto d-block mt-3" />
          <div class="card-body">
            <p>Integrates Fusio into Wordpress. It helps to use your Wordpress-Site as Developer-Portal and Fusio as API management tool.</p>
            <a href="https://github.com/apioo/fusio-sdk-php-wordpress" class="btn btn-primary">GitHub</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-3">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">REST</h4>
          </div>
          <img src="<?php echo $base; ?>/img/openapi.png" class="rounded mx-auto d-block mt-3" />
          <div class="card-body">
            <p>Documentation of the REST API in case you want directly talk to the endpoints.</p>
            <a href="https://demo.fusio-project.org/apps/documentation/#!/api/" class="btn btn-primary">Reference</a>
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
