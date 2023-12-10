<?php include(__DIR__ . '/inc/header.php'); ?>

<div class="fusio-headline">
  <div class="container">
    <div class="row">
      <div class="col p-4 mx-auto text-center">
        <h1 class="display-4 fw-normal">Partner</h1>
      </div>
    </div>
  </div>
</div>

<div class="container mt-4 pt-4 mb-4 pb-4">
  <div class="row">
    <div class="col">
      <p>The following list shows all partners of the Fusio project. We like to thank every partner supporting us in our
        vision to move API development to the next level. If you are interested in getting listed here feel free to
        <a href="https://github.com/sponsors/chriskapp">sponsor</a> our project.</p>
    </div>
  </div>
</div>

<div class="bg-light mt-4 pt-4 mb-4 pb-4">
  <div class="container">
    <div class="row row-cols-1 row-cols-md-3 text-center">
      <div class="col">
        <div class="card mb-3">
          <div class="card-header py-3">
            <h2 class="my-0 fw-normal fs-5">JetBrains</h2>
          </div>
          <img src="<?php echo $base; ?>/img/partner/phpstorm.svg" class="rounded mx-auto d-block mt-3" />
          <div class="card-body">
            <a href="https://jb.gg/OpenSourceSupport" class="btn btn-primary">Website</a>
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
