
<footer class="bd-footer py-4 py-md-5 mt-5 bg-light">
  <div class="container mt-4">
    <div class="row">
      <div class="col-lg-3 mb-3">
        <a class="d-inline-flex align-items-center mb-2 link-dark text-decoration-none" href="/" aria-label="Fusio">
          <img src="<?php echo $base; ?>/img/fusio_64px.png" alt="Logo" width="32" height="32" class="d-inline-block align-text-top me-2">
          <span class="fs-5">Fusio</span>
        </a>
        <ul class="list-unstyled small text-muted">
          <li class="mb-2">Fusio is an open source API management platform which helps to create innovative API solutions.</li>
          <li class="mb-2">Code licensed <a href="https://github.com/apioo/fusio/blob/master/LICENSE" target="_blank" rel="license noopener">AGPLv3</a>.</li>
          <li class="mb-2">Fusio is made in Düsseldorf / Germany.</li>
        </ul>
      </div>
      <div class="col-6 col-lg-2 offset-lg-1 mb-3">
        <h5>Links</h5>
        <ul class="list-unstyled text-small">
          <li class="mb-2"><a href="https://docs.fusio-project.org/">Documentation</a></li>
          <li class="mb-2"><a href="https://fusio.cloud/">Cloud</a></li>
          <li class="mb-2"><a href="https://typeschema.org/">TypeSchema</a></li>
          <li class="mb-2"><a href="https://typehub.cloud/">TypeHub</a></li>
          <li class="mb-2"><a href="https://phpsx.org/">PSX</a></li>
        </ul>
      </div>
      <div class="col-6 col-lg-2 mb-3">
        <h5>Resources</h5>
        <ul class="list-unstyled">
          <li class="mb-2"><a href="<?php echo $router->getAbsolutePath(\App\Website\Adapter::class); ?>">Adapter</a></li>
          <li class="mb-2"><a href="<?php echo $router->getAbsolutePath(\App\Website\Tools::class); ?>">Tools</a></li>
          <li class="mb-2"><a href="<?php echo $router->getAbsolutePath(\App\Website\Worker::class); ?>">Worker</a></li>
          <li class="mb-2"><a href="<?php echo $router->getAbsolutePath(\App\Website\Samples::class); ?>">Samples</a></li>
          <li class="mb-2"><a href="<?php echo $router->getAbsolutePath(\App\Website\Demo::class); ?>">Demo</a></li>
        </ul>
      </div>
      <div class="col-6 col-lg-2 mb-3">
        <h5>Community</h5>
        <ul class="list-unstyled">
          <li class="mb-2"><a href="https://github.com/apioo/fusio">GitHub</a></li>
          <li class="mb-2"><a href="https://twitter.com/FusioAPI">Twitter</a></li>
          <li class="mb-2"><a href="https://www.youtube.com/c/FusioAPI">Youtube</a></li>
          <li class="mb-2"><a href="https://groups.google.com/g/fusio">Forum</a></li>
          <li class="mb-2"><a href="https://discord.gg/eMrMgwsc6e">Discord</a></li>
        </ul>
      </div>
      <div class="col-6 col-lg-2 mb-3">
        <h5>About</h5>
        <ul class="list-unstyled">
          <li class="mb-2"><a href="<?php echo $router->getAbsolutePath(\App\Website\Imprint::class); ?>">Imprint</a></li>
          <li class="mb-2"><a href="<?php echo $router->getAbsolutePath(\App\Website\Contact::class); ?>">Contact</a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>

<div class="fusio-outro"></div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="<?php echo $base; ?>/js/bootstrap.min.js"></script>
<script src="<?php echo $base; ?>/js/highlight.min.js"></script>
<script src="<?php echo $base; ?>/js/yaml.min.js"></script>
<script>hljs.initHighlightingOnLoad();</script>

</body>
</html>
