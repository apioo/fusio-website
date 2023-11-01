
<footer class="fusio-footer bd-footer py-4 py-md-5 mt-5 bg-light">
  <div class="container mt-4">
    <div class="row">
      <div class="col-lg-3 mb-3">
        <a class="d-inline-flex align-items-center mb-2 link-dark text-decoration-none" href="/">
          <img src="<?php echo $base; ?>/img/fusio_64px.png" alt="Logo" width="32" height="32" class="d-inline-block align-text-top me-2">
          <span class="fs-5">Fusio</span>
        </a>
        <ul class="list-unstyled small">
          <li class="mb-2">Fusio is an open source API management platform which helps to create innovative API solutions.</li>
          <li class="mb-2">Code licensed <a href="https://github.com/apioo/fusio/blob/master/LICENSE" target="_blank" rel="license noopener">Apache 2.0</a>.</li>
          <li class="mb-2">Fusio is made in Düsseldorf / Germany.</li>
        </ul>
      </div>
      <div class="col-6 col-lg-2 offset-lg-1 mb-3">
        <p class="fs-5 fw-normal">Links</p>
        <ul class="list-unstyled">
          <li class="mb-2"><a href="https://docs.fusio-project.org/">Documentation</a></li>
          <li class="mb-2"><a href="https://typehub.cloud/">TypeHub</a></li>
          <li class="mb-2"><a href="https://typeapi.org/">TypeAPI</a></li>
          <li class="mb-2"><a href="https://typeschema.org/">TypeSchema</a></li>
          <li class="mb-2"><a href="https://phpsx.org/">PSX</a></li>
        </ul>
      </div>
      <div class="col-6 col-lg-2 mb-3">
        <p class="fs-5 fw-normal">Resources</p>
        <ul class="list-unstyled">
          <li class="mb-2"><a href="<?php echo $router->getAbsolutePath([\App\Controller\Adapter::class, 'show']); ?>">Adapter</a></li>
          <li class="mb-2"><a href="<?php echo $router->getAbsolutePath([\App\Controller\Tools::class, 'show']); ?>">Tools</a></li>
          <li class="mb-2"><a href="<?php echo $router->getAbsolutePath([\App\Controller\Worker::class, 'show']); ?>">Worker</a></li>
          <li class="mb-2"><a href="<?php echo $router->getAbsolutePath([\App\Controller\Samples::class, 'show']); ?>">Samples</a></li>
          <li class="mb-2"><a href="<?php echo $router->getAbsolutePath([\App\Controller\Demo::class, 'show']); ?>">Demo</a></li>
          <li class="mb-2"><a href="<?php echo $router->getAbsolutePath([\App\Controller\Contact::class, 'show']); ?>">Contact</a></li>
          <li class="mb-2"><a href="<?php echo $router->getAbsolutePath([\App\Controller\Imprint::class, 'show']); ?>">Imprint</a></li>
        </ul>
      </div>
      <div class="col-6 col-lg-2 mb-3">
        <p class="fs-5 fw-normal">Community</p>
        <ul class="list-unstyled">
          <li class="mb-2"><a href="https://github.com/apioo/fusio">GitHub</a></li>
          <li class="mb-2"><a href="https://twitter.com/FusioAPI">Twitter</a></li>
          <li class="mb-2"><a href="https://www.youtube.com/c/FusioAPI">Youtube</a></li>
          <li class="mb-2"><a href="https://groups.google.com/g/fusio">Forum</a></li>
          <li class="mb-2"><a href="https://discord.gg/eMrMgwsc6e">Discord</a></li>
        </ul>
      </div>
      <div class="col-6 col-lg-2 mb-3">
        <p class="fs-5 fw-normal">Comparison</p>
        <ul class="list-unstyled">
          <li class="mb-2"><a href="<?php echo $router->getAbsolutePath([\App\Controller\Comparison::class, 'detail'], ['app' => 'kong']); ?>">Kong</a></li>
          <li class="mb-2"><a href="<?php echo $router->getAbsolutePath([\App\Controller\Comparison::class, 'detail'], ['app' => 'tyk']); ?>">Tyk</a></li>
          <li class="mb-2"><a href="<?php echo $router->getAbsolutePath([\App\Controller\Comparison::class, 'detail'], ['app' => 'firebase']); ?>">Firebase</a></li>
          <li class="mb-2"><a href="<?php echo $router->getAbsolutePath([\App\Controller\Comparison::class, 'detail'], ['app' => 'supabase']); ?>">Supabase</a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>

<div class="fusio-outro"></div>

</body>
</html>
