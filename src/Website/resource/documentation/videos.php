<?php include(__DIR__ . '/../inc/header.php'); ?>

<div class="fusio-block mdl-grid mdl-shadow--2dp fusio-api">
  <div class="mdl-cell mdl-cell--3-col mdl-color--grey-100">
    <ul class="fusio-api-nav">
      <li>
        <a>Videos</a>
        <ul>
          <?php foreach ($videos as $key => $row): ?>
          <li><a href="<?php echo $url . 'documentation/videos/' . $key; ?>"><?php echo $row->title; ?></a></li>
          <?php endforeach; ?>
        </ul>
      </li>
    </ul>
  </div>
  <div class="mdl-cell mdl-cell--9-col">
    <?php if (!empty($video)): ?>
      <h4><?php echo $video->title; ?></h4>
      <iframe width="560" height="500" src="<?php echo $video->href; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    <?php else: ?>
      <h4>Videos</h4>
      <p>Please select a video from the left navigation. Each video tries to
        explain a specific topic. If you like our videos you can also 
        <a href="https://www.youtube.com/channel/UC64ltsPc27t_UjLjLI6y-Cg">follow</a> 
        us on youtube.</p>
    <?php endif; ?>
  </div>
</div>

<?php include(__DIR__ . '/../inc/footer.php'); ?>
