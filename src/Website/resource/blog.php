<?php include(__DIR__ . '/inc/header.php'); ?>

<?php if(!empty($entry)): ?>
  <?php foreach($entry as $row): ?>
  <div class="fusio-block mdl-grid mdl-shadow--2dp">
    <div class="mdl-cell mdl-cell--12-col">
      <h4><a href="<?php echo $router->getAbsolutePath(\App\Website\Blog\Detail::class, ['title' => $row->titleSlug]); ?>"><?php echo $row->title; ?></a></h4>
      <p><small>posted by <a href="<?php echo $row->authorUri; ?>"><?php echo $row->authorName; ?></a> on <time datetime="<?php echo $row->updated; ?>"><?php echo $row->updated; ?></time></small></p>
      <p><?php echo $row->summary; ?></p>
    </div>
  </div>
  <?php endforeach; ?>

  <br>
  <nav style="text-align:center">
    <a href="<?php echo $links[1]->href; ?>" class="mdl-button mdl-js-button"><span aria-hidden="true">&larr;</span> Previous</a>
    <a href="<?php echo $links[2]->href; ?>" class="mdl-button mdl-js-button">Next <span aria-hidden="true">&rarr;</span></a>
  </nav>
  <br>
<?php else: ?>
  <p>No blog entry available</p>
<?php endif; ?>

<?php include(__DIR__ . '/inc/footer.php'); ?>
