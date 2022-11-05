<?php include(__DIR__ . '/../inc/header.php'); ?>

<div style="background-image:url('<?php echo $base; ?>/img/intro.jpg');background-size:cover">
  <div class="container">
    <div class="row">
      <div class="col p-lg-4 mx-auto text-center">
        <h1 class="display-4 fw-normal">Blog</h1>
      </div>
    </div>
  </div>
</div>

<div class="container mt-4 pt-4 mb-4 pb-4">
  <div class="row">
    <div class="col">
      <h4><?php echo $title; ?></h4>
      <p><small>posted by <a href="<?php echo $authorUri; ?>"><?php echo $authorName; ?></a> on <time datetime="<?php echo $updated; ?>"><?php echo $updated; ?></time></small></p>
      <?php echo $content; ?>
    </div>
  </div>
</div>

<?php include(__DIR__ . '/../inc/footer.php'); ?>
