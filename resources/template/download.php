<?php include(__DIR__ . '/inc/header.php'); ?>

<div class="fusio-headline">
  <div class="container">
    <div class="row">
      <div class="col p-4 mx-auto text-center">
        <h1 class="display-4 fw-normal">Download</h1>
      </div>
    </div>
  </div>
</div>

<div class="container mt-4 pt-4 mb-4 pb-4">
  <div class="row">
    <div class="col">
      <h2 class="fusio-sub-headline h4 fw-normal">🚀 Release</h2>
      <table class="table">
        <colgroup>
          <col width="120" />
          <col width="200" />
          <col width="*" />
          <col width="120" />
        </colgroup>
        <thead>
        <tr>
          <th>Version</th>
          <th>Download</th>
          <th class="hidden-xs">Size</th>
          <th>Date</th>
        </tr>
        </thead>
        <tbody>
        <tr>
          <td><?php echo $tagName; ?></td>
          <td><a href="<?php echo $htmlUrl; ?>"><?php echo $assetName; ?></a></td>
          <td class="hidden-xs"><?php echo round($assetSize / 1024 / 1024, 2); ?> MiB</td>
          <td><?php echo $publishedAt; ?></td>
        </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

<div class="bg-light mt-4 pt-4 mb-4 pb-4">
  <div class="container">
    <div class="row">
      <div class="col">
        <h2 class="fusio-sub-headline h4 fw-normal">📦 Composer</h2>
        <p>Install Fusio through Composer:</p>
        <pre><code class="bash">composer create-project fusio/fusio</code></pre>
      </div>
    </div>
  </div>
</div>

<div class="container mt-4 pt-4 mb-4 pb-4">
  <div class="row">
    <div class="col">
      <h2 class="fusio-sub-headline h4 fw-normal">🐳 Docker</h2>
      <p>Use our <a href="https://hub.docker.com/r/fusio/fusio">Docker-Image</a> to quickly set up a Fusio instance. Take a look at the example <a href="https://github.com/apioo/fusio-docker/blob/main/docker-compose.yml">Docker-Compose</a> YAML file to start Fusio with a Database.</p>
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
