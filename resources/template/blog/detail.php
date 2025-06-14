<?php include(__DIR__ . '/../inc/header.php'); ?>

<div class="fusio-headline">
  <div class="container">
    <div class="row">
      <div class="col p-4 mx-auto text-center">
        <h1 class="display-4 fw-normal">Blog</h1>
      </div>
    </div>
  </div>
</div>

<div class="container mt-4 pt-4 mb-4 pb-4">
  <div class="row">
    <div class="col">
      <h2 class="fusio-sub-headline h4 fw-normal"><?php echo $entry->title; ?></h2>
      <p><small>posted by <a href="<?php echo $entry->author_uri; ?>"><?php echo $entry->author_name; ?></a> on <time datetime="<?php echo $entry->updated; ?>"><?php echo $entry->updated; ?></time></small></p>
      <?php echo $entry->content; ?>
    </div>
  </div>
</div>

<?php include(__DIR__ . '/../inc/footer.php'); ?>
