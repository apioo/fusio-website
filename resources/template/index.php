<?php include(__DIR__ . '/inc/header.php'); ?>

<!--
Hey developer, like Fusio our complete website is also open source. If you find any errors or you want to improve
specific parts feel free to simply create a PR at this repository. If you want to see the Fusio repository s.
https://github.com/apioo/fusio
-->

<div class="fusio-headline">
  <div class="container">
    <div class="row">
      <div class="col p-lg-5 mx-auto my-5 text-center">
        <h1 class="display-4 fw-normal">Open Source API Management</h1>
        <p class="lead fw-normal">Fusio is an open source API management platform which helps to create innovative API solutions.</p>
        <a href="https://mailchi.mp/948c47451634/fusio" class="btn btn-dark">Subscribe</a>
        <a href="<?php echo $router->getAbsolutePath([\App\Controller\Demo::class, 'show']); ?>" class="btn btn-primary">Demo</a>
        <a href="<?php echo $router->getAbsolutePath([\App\Controller\Contact::class, 'show']); ?>" class="btn btn-primary">Contact</a>
      </div>
    </div>
  </div>
</div>

<div class="bg-dark text-center pt-3 pb-3">
  <div class="container">
    <div class="row">
      <div class="col">
        <a href="https://youtube.com/@FusioAPI" class="text-decoration-none text-light"><img src="<?php echo $base; ?>/img/youtube-64.png" width="32" height="32" alt="Youtube Logo"> <span class="d-none d-lg-inline">Youtube</span></a>
      </div>
      <div class="col">
        <a href="https://github.com/apioo/fusio" class="text-decoration-none text-light"><img src="<?php echo $base; ?>/img/github-64.png" width="32" height="32" alt="Github Logo"> <span class="d-none d-lg-inline">Github</span></a>
      </div>
      <div class="col">
        <a href="https://twitter.com/FusioAPI" class="text-decoration-none text-light"><img src="<?php echo $base; ?>/img/twitter-64.png" width="32" height="32" alt="Twitter Logo"> <span class="d-none d-lg-inline">Twitter</span></a>
      </div>
      <div class="col">
        <a href="https://bsky.app/profile/fusioapi.bsky.social" class="text-decoration-none text-light"><img src="<?php echo $base; ?>/img/bluesky-64.png" width="32" height="32" alt="Bluesky Logo"> <span class="d-none d-lg-inline">Bluesky</span></a>
      </div>
      <div class="col">
        <a href="https://fosstodon.org/@fusio" class="text-decoration-none text-light"><img src="<?php echo $base; ?>/img/mastodon-64.png" width="32" height="32" alt="Mastodon Logo"> <span class="d-none d-lg-inline">Mastodon</span></a>
      </div>
    </div>
  </div>
</div>

<div class="container mt-4 mb-4">
  <div class="row g-4 py-4 row-cols-1 row-cols-lg-3 text-center">
    <div class="feature col">
      <div class="d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3 rounded-5">
        <i class="bi bi-cloud-fill p-4"></i>
      </div>
      <h2 class="fs-2">API Management</h2>
      <p>Fusio provides a powerful <a href="<?php echo $router->getAbsolutePath([\App\Controller\Demo::class, 'show']); ?>">backend</a>
        app to control and monitor your API.</p>
    </div>
    <div class="feature col">
      <div class="d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3 rounded-5">
        <i class="bi bi-box-fill p-4"></i>
      </div>
      <h2 class="fs-2">Developer Portal</h2>
      <p>Fusio provides a <a href="https://demo.fusio-project.org/apps/developer/">developer portal</a>
        app where developer can register to use your API.</p>
    </div>
    <div class="feature col">
      <div class="d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3 rounded-5">
        <i class="bi bi-hammer p-4"></i>
      </div>
      <h2 class="fs-2">API Builder</h2>
      <p>Fusio provides multiple generators to build complete APIs without coding from different sources.</p>
    </div>
    <div class="feature col">
      <div class="d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3 rounded-5">
        <i class="bi bi-cash p-4"></i>
      </div>
      <h2 class="fs-2">Monetization</h2>
      <p>Fusio provides a simple payment system to charge for specific routes.</p>
    </div>
    <div class="feature col">
      <div class="d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3 rounded-5">
        <i class="bi bi-code p-4"></i>
      </div>
      <h2 class="fs-2">SDK Generation</h2>
      <p>Fusio can automatically generate a client SDK for your API based on the defined schema.</p>
    </div>
    <div class="feature col">
      <div class="d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3 rounded-5">
        <i class="bi bi-bar-chart-fill p-4"></i>
      </div>
      <h2 class="fs-2">Rate Limiting</h2>
      <p>Fusio provides a way to rate limit requests based on the user or app.</p>
    </div>
    <div class="feature col">
      <div class="d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3 rounded-5">
        <i class="bi bi-cpu-fill p-4"></i>
      </div>
      <h2 class="fs-2">Schema Generation</h2>
      <p>Fusio provides an endpoint to automatically generate <a href="https://www.openapis.org/">OAI</a> and
        <a href="https://typeapi.org/">TypeAPI</a> specifications.</p>
    </div>
    <div class="feature col">
      <div class="d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3 rounded-5">
        <i class="bi bi-cursor-fill p-4"></i>
      </div>
      <h2 class="fs-2">Webhook</h2>
      <p>Fusio contains a webhook system which helps to build a publish/subscribe pattern for your API.</p>
    </div>
    <div class="feature col">
      <div class="d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3 rounded-5">
        <i class="bi bi-calendar-event-fill p-4"></i>
      </div>
      <h2 class="fs-2">OAuth2 Authorization</h2>
      <p>App developer can obtain an access token to access non-public API endpoints.</p>
    </div>
  </div>
</div>

<div class="bg-light mt-4 pt-5 mb-4 pb-5">
  <div class="container">
    <div class="row">
      <div class="col text-center">
        <blockquote class="display-4">"With Fusio we innovate the API economy to make the digitalization happen"</blockquote>
        <cite>Christoph Kappestein, Developer of Fusio</cite>
      </div>
    </div>
  </div>
</div>

<div class="px-4 py-5 my-5 bg-dark">
  <div style="max-width:720px;margin:0 auto;">
    <lite-youtube videoid="HO-4AXs2Bpo"></lite-youtube>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col text-end">
      <a href="https://github.com/apioo/fusio-website/blob/main/resources/template/<?php echo pathinfo(__FILE__, PATHINFO_BASENAME); ?>"><i class="bi bi-pen-fill"></i> Edit this page</a>
    </div>
  </div>
</div>

<script type="application/ld+json">
  {
    "@context": "http://schema.org",
    "@type": "SoftwareApplication",
    "name": "Fusio",
    "description": "Fusio is an open source API management platform which helps to create innovative API solutions.",
    "url": "https://www.fusio-project.org/",
    "applicationCategory": "API Management",
    "downloadUrl": "https://www.fusio-project.org/download",
    "license": "https://github.com/apioo/fusio/blob/master/LICENSE",
    "operatingSystem": "Windows, Linux, OSX",
    "author": {
      "@type": "Person",
      "@id": "https://chrisk.app"
    }
  }
</script>

<?php include(__DIR__ . '/inc/footer.php'); ?>
