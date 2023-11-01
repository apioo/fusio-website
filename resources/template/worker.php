<?php include(__DIR__ . '/inc/header.php'); ?>

<div class="fusio-headline">
  <div class="container">
    <div class="row">
      <div class="col p-4 mx-auto text-center">
        <h1 class="display-4 fw-normal">Worker</h1>
      </div>
    </div>
  </div>
</div>

<div class="container mt-4 pt-4 mb-4 pb-4">
  <div class="row">
    <div class="col">
      <p>The following list shows worker which allow you to implement actions in a different programming languages. More
        information about the <a href="https://docs.fusio-project.org/docs/concepts/worker_api/">worker system</a> at
        our documentation.</p>
    </div>
  </div>
</div>

<div class="bg-light mt-4 pt-4 mb-4 pb-4">
  <div class="container">
    <div class="row row-cols-1 row-cols-md-3 text-center">
      <div class="col">
        <div class="card mb-3">
          <div class="card-header py-3">
            <h2 class="my-0 fw-normal fs-5">Java</h2>
          </div>
          <img src="<?php echo $base; ?>/img/java.png" class="rounded mx-auto d-block mt-3" />
          <div class="card-body">
            <p>Worker implementation written in Java.</p>
            <a href="https://github.com/apioo/fusio-worker-java" class="btn btn-primary">GitHub</a>
            <a href="https://hub.docker.com/r/fusio/worker-java" class="btn btn-secondary">Docker</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-3">
          <div class="card-header py-3">
            <h2 class="my-0 fw-normal fs-5">Javascript</h2>
          </div>
          <img src="<?php echo $base; ?>/img/es6.png" class="rounded mx-auto d-block mt-3" />
          <div class="card-body">
            <p>Worker implementation written in Javascript running on Nodejs.</p>
            <a href="https://github.com/apioo/fusio-worker-javascript" class="btn btn-primary">GitHub</a>
            <a href="https://hub.docker.com/r/fusio/worker-javascript" class="btn btn-secondary">Docker</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-3">
          <div class="card-header py-3">
            <h2 class="my-0 fw-normal fs-5">PHP</h2>
          </div>
          <img src="<?php echo $base; ?>/img/php.png" class="rounded mx-auto d-block mt-3" />
          <div class="card-body">
            <p>Worker implementation written in PHP.</p>
            <a href="https://github.com/apioo/fusio-worker-php" class="btn btn-primary">GitHub</a>
            <a href="https://hub.docker.com/r/fusio/worker-php" class="btn btn-secondary">Docker</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-3">
          <div class="card-header py-3">
            <h2 class="my-0 fw-normal fs-5">Python</h2>
          </div>
          <img src="<?php echo $base; ?>/img/python.png" class="rounded mx-auto d-block mt-3" />
          <div class="card-body">
            <p>Worker implementation written in Python.</p>
            <a href="https://github.com/apioo/fusio-worker-python" class="btn btn-primary">GitHub</a>
            <a href="https://hub.docker.com/r/fusio/worker-javascript" class="btn btn-secondary">Docker</a>
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
