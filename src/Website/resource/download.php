<?php include(__DIR__ . '/inc/header.php'); ?>

<div class="fusio-block mdl-grid mdl-shadow--2dp">
  <div class="mdl-cell mdl-cell--12-col">
    <h4>Download</h4>
    <p>Here we provide the offical releases of Fusio. You can also checkout the
    GitHub <a href="https://github.com/apioo/fusio">repository</a>.</p>

    <h5>Releases</h5>

    <table class="mdl-data-table mdl-js-data-table" style="width:100%">
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

<div class="fusio-content fusio-edit mdl-grid">
  <div class="mdl-cell mdl-cell--12-col">
    <a href="https://github.com/apioo/fusio-website/blob/main/src/Website/resource/<?php echo pathinfo(__FILE__, PATHINFO_BASENAME); ?>"><i class="material-icons">edit</i> Edit this page</a>
  </div>
</div>

<?php include(__DIR__ . '/inc/footer.php'); ?>
