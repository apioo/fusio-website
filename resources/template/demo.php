<?php include(__DIR__ . '/inc/header.php'); ?>

<div style="background-image:url('<?php echo $base; ?>/img/intro.jpg');background-size:cover">
  <div class="container">
    <div class="row">
      <div class="col p-lg-4 mx-auto text-center">
        <h1 class="display-4 fw-normal">Demo</h1>
      </div>
    </div>
  </div>
</div>

<div class="container mt-4 pt-4 mb-4 pb-4">
  <div class="row">
    <div class="col">
      <p>We provide a hosted demo of Fusio where you can explore the API and all available apps.</p>

      <dl>
        <dt>API</dt>
        <dd><a href="https://demo.fusio-project.org">https://demo.fusio-project.org</a></dd>
        <dt>Fusio Backend</dt>
        <dd><a href="https://demo.fusio-project.org/apps/fusio/">https://demo.fusio-project.org/apps/fusio</a></dd>
        <dt>Developer Portal</dt>
        <dd><a href="https://demo.fusio-project.org/apps/developer/">https://demo.fusio-project.org/apps/developer</a></dd>
        <dt>Documentation</dt>
        <dd><a href="https://demo.fusio-project.org/apps/documentation/">https://demo.fusio-project.org/apps/documentation</a></dd>
        <dt>Swagger-UI</dt>
        <dd><a href="https://demo.fusio-project.org/apps/swagger-ui/">https://demo.fusio-project.org/apps/swagger-ui</a></dd>
      </dl>

      <p>The backend can be accessed with the following user credentials:</p>

      <dl>
        <dt>Username</dt>
        <dd><code>test</code></dd>
        <dt>Password</dt>
        <dd><code>FRsNh1zKCXlB</code></dd>
      </dl>
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
