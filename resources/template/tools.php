<?php include(__DIR__ . '/inc/header.php'); ?>

<div style="background-image:url('<?php echo $base; ?>/img/intro.jpg');background-size:cover">
  <div class="container">
    <div class="row">
      <div class="col p-lg-4 mx-auto text-center">
        <h1 class="display-4 fw-normal">Tools</h1>
      </div>
    </div>
  </div>
</div>

<div class="container mt-4 pt-4 mb-4 pb-4">
  <div class="row">
    <div class="col">
      <p>The following list shows tools which work with the Fusio API. They help
        you to build new apps or can also be used to learn how you can integrate
        Fusio with your app.</p>
    </div>
  </div>
</div>

<div class="bg-light mt-4 pt-4 mb-4 pb-4">
  <div class="container">
    <div class="row row-cols-1 row-cols-md-3 text-center">
      <div class="col">
        <div class="card mb-3">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">VSCode</h4>
          </div>
          <img src="<?php echo $base; ?>/img/vscode.png" class="rounded mx-auto d-block mt-3" />
          <div class="card-body">
            <p>Fusio VSCode extension which provides a more advanced development environment for action developers.</p>
            <a href="https://marketplace.visualstudio.com/items?itemName=Fusio.fusio" class="btn btn-secondary">Marketplace</a>
            <a href="https://github.com/apioo/fusio-tools-vscode" class="btn btn-primary">GitHub</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-3">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Electron</h4>
          </div>
          <img src="<?php echo $base; ?>/img/electron.png" class="rounded mx-auto d-block mt-3" />
          <div class="card-body">
            <p>Electron app of the backend whereby it is possible to control and
              access a Fusio instance by running the app locally.</p>
            <a href="https://github.com/apioo/fusio-tools-electron" class="btn btn-primary">GitHub</a>
          </div>
        </div>
      </div>
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
