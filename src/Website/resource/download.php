<?php include(__DIR__ . '/inc/header.php'); ?>

<div style="background-image:url('<?php echo $base; ?>/img/intro.jpg');background-size:cover">
  <div class="container">
    <div class="row">
      <div class="col p-lg-4 mx-auto text-center">
        <h1 class="display-4 fw-normal">Download</h1>
      </div>
    </div>
  </div>
</div>

<div class="container mt-4 pt-4 mb-4 pb-4">
  <div class="row">
    <div class="col">
      <p>Here we provide the offical releases of Fusio. You can also checkout the
        GitHub <a href="https://github.com/apioo/fusio">repository</a>.</p>

      <h5>Releases</h5>

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

      <h5>Composer</h5>
      <p>It is also possible to quickly setup a Fusio project through composer:</p>
      <pre><code class="bash">composer create-project fusio/fusio</code></pre>

      <h5>Docker</h5>
      <p>We provide also a docker container for Fusio. To setup the container you
        have to checkout the <a href="https://github.com/apioo/fusio-docker">repository</a>
        and run the following command:</p>
      <pre><code class="bash">docker-compose up -d</code></pre>
      <p>You can also checkout the plain <a href="https://hub.docker.com/r/fusio/fusio/">fusio/fusio</a>
        image.</p>

      <h5>Electron</h5>
      <p>We provide the backend app as <a href="https://github.com/apioo/fusio-electron">electron app</a>
        so you dont have to host the javascript files on a server. Instead you can
        connect from you local computer to the Fusio instance. Please checkout the
        repository for installation instructions.</p>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col text-end">
      <a href="https://github.com/apioo/fusio-website/blob/main/src/Website/resource/<?php echo pathinfo(__FILE__, PATHINFO_BASENAME); ?>"><i class="bi bi-pen-fill"></i> Edit this page</a>
    </div>
  </div>
</div>

<?php include(__DIR__ . '/inc/footer.php'); ?>
