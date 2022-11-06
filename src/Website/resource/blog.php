<?php include(__DIR__ . '/inc/header.php'); ?>

<div style="background-image:url('<?php echo $base; ?>/img/intro.jpg');background-size:cover">
  <div class="container">
    <div class="row">
      <div class="col p-lg-4 mx-auto text-center">
        <h1 class="display-4 fw-normal">Blog</h1>
      </div>
    </div>
  </div>
</div>

<?php if(!empty($entry)): ?>
  <?php foreach($entry as $i => $row): ?>
  <?php if ($i % 2 === 0): ?>
      <div class="container mt-4 pt-4 mb-4 pb-4">
  <?php else: ?>
      <div class="bg-light mt-4 pt-4 mb-4 pb-4"><div class="container">
  <?php endif; ?>
    <div class="row">
      <div class="col">
        <h4><a href="<?php echo $router->getAbsolutePath(\App\Website\Blog\Detail::class, ['title' => $row->titleSlug]); ?>"><?php echo $row->title; ?></a></h4>
        <p><small class="text-secondary">posted by <a href="<?php echo $row->authorUri; ?>"><?php echo $row->authorName; ?></a> on <time datetime="<?php echo $row->updated; ?>"><?php echo $row->updated; ?></time></small></p>
        <p><?php echo $row->summary; ?></p>
      </div>
    </div>
  </div>
  <?php if ($i > 0 && $i % 2 === 0): ?>
    </div></div>
  <?php else: ?>
    </div>
  <?php endif; ?>
  <?php endforeach; ?>
  <br>
  <nav style="text-align:center">
    <a href="<?php echo $links[1]->href; ?>" class="btn btn-primary"><span aria-hidden="true">&larr;</span> Previous</a>
    <a href="<?php echo $links[2]->href; ?>" class="btn btn-secondary">Next <span aria-hidden="true">&rarr;</span></a>
  </nav>
  <br>
<?php else: ?>
  <p>No blog entry available</p>
<?php endif; ?>

<?php include(__DIR__ . '/inc/footer.php'); ?>
