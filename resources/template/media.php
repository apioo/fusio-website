<?php include(__DIR__ . '/inc/header.php'); ?>

<div class="fusio-headline">
  <div class="container">
    <div class="row">
      <div class="col p-4 mx-auto text-center">
        <h1 class="display-4 fw-normal">Media</h1>
      </div>
    </div>
  </div>
</div>

<div class="container mt-4 pt-4 mb-4 pb-4">
  <div class="row">
    <div class="col">
      <h2 class="display-6 fw-normal">Using the Fusio Logo</h2>
      <p>Below you’ll find <a href="<?php echo $base; ?>/media/fusio_icon.zip">downloadable</a> versions of the logo:</p>
      <h3>32px</h3>
      <a href="<?php echo $base; ?>/media/fusio_32.png"><img src="<?php echo $base; ?>/media/fusio_32.png" alt="Fusio Logo 32px"></a>
      <hr>
      <h3>64px</h3>
      <a href="<?php echo $base; ?>/media/fusio_64.png""><img src="<?php echo $base; ?>/media/fusio_64.png" alt="Fusio Logo 64px"></a>
      <hr>
      <h3>128px</h3>
      <a href="<?php echo $base; ?>/media/fusio_128.png"><img src="<?php echo $base; ?>/media/fusio_128.png" alt="Fusio Logo 128px"></a>
      <hr>
      <h3>256px</h3>
      <a href="<?php echo $base; ?>/media/fusio_256.png"><img src="<?php echo $base; ?>/media/fusio_256.png" alt="Fusio Logo 256px"></a>
      <hr>
      <h3>SVG</h3>
      <a href="<?php echo $base; ?>/media/logo.svg"><img src="<?php echo $base; ?>/media/logo.svg" width="256" height="256" alt="Fusio Logo SVG"></a>
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
