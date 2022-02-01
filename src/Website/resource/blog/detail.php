<?php include(__DIR__ . '/../inc/header.php'); ?>

<div class="fusio-block mdl-grid mdl-shadow--2dp">
  <div class="mdl-cell mdl-cell--12-col">
    <h4><?php echo $title; ?></h4>
    <p><small>posted by <a href="<?php echo $authorUri; ?>"><?php echo $authorName; ?></a> on <time datetime="<?php echo $updated; ?>"><?php echo $updated; ?></time></small></p>
    <?php echo $content; ?>
  </div>
</div>

<?php include(__DIR__ . '/../inc/footer.php'); ?>
