<?php include(__DIR__ . '/../inc/header.php'); ?>

<div class="fusio-headline">
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
      <h4><?php echo $entry->title; ?></h4>
      <p><small class="text-secondary">posted by <a href="<?php echo $entry->author_uri; ?>"><?php echo $entry->author_name; ?></a> on <time datetime="<?php echo $entry->updated; ?>"><?php echo $entry->updated; ?></time></small></p>
      <?php echo $entry->content; ?>
    </div>
  </div>
</div>

<?php include(__DIR__ . '/../inc/footer.php'); ?>
