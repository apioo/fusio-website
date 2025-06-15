<?php include(__DIR__ . '/inc/header.php'); ?>

<div class="fusio-headline">
  <div class="container">
    <div class="row">
      <div class="col p-4 mx-auto text-center">
        <h1 class="display-4 fw-normal">Community</h1>
      </div>
    </div>
  </div>
</div>

<div class="mt-4 pt-4 mb-4 pb-4">
  <div class="container">
    <div class="row row-cols-1 row-cols-md-3 text-center">
      <div class="col">
        <div class="card mb-3">
          <div class="card-body bg-dark">
            <a href="https://youtube.com/@FusioAPI">
              <img src="<?php echo $base; ?>/img/youtube-64.png" class="rounded mx-auto d-block m-3" />
            </a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-3">
          <div class="card-body bg-dark">
            <a href="https://github.com/apioo/fusio">
              <img src="<?php echo $base; ?>/img/github-64.png" class="rounded mx-auto d-block m-3" />
            </a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-3">
          <div class="card-body bg-dark">
            <a href="https://twitter.com/FusioAPI">
              <img src="<?php echo $base; ?>/img/twitter-64.png" class="rounded mx-auto d-block m-3" />
            </a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-3">
          <div class="card-body bg-dark">
            <a href="https://bsky.app/profile/fusioapi.bsky.social">
              <img src="<?php echo $base; ?>/img/bluesky-64.png" class="rounded mx-auto d-block m-3" />
            </a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-3">
          <div class="card-body bg-dark">
            <a href="https://fosstodon.org/@fusio">
              <img src="<?php echo $base; ?>/img/mastodon-64.png" class="rounded mx-auto d-block m-3" />
            </a>
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
