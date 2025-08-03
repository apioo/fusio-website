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
        <h1 class="display-4 fw-normal">Fusio</h1>
        <p class="lead fw-normal">Self-Hosted API Management for Builders.</p>
        <a href="https://mailchi.mp/948c47451634/fusio" class="btn btn-secondary">Subscribe</a>
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
        <a rel="me" href="https://fosstodon.org/@fusio" class="text-decoration-none text-light"><img src="<?php echo $base; ?>/img/mastodon-64.png" width="32" height="32" alt="Mastodon Logo"> <span class="d-none d-lg-inline">Mastodon</span></a>
      </div>
    </div>
  </div>
</div>

<div class="container mt-4 mb-4">
  <div class="row g-4 py-4 row-cols-1 row-cols-lg-3 text-center">
    <div class="feature col">
      <div class="d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-1 mb-3 rounded-5">
        <span class="m-3">🔄</span>
      </div>
      <h2 class="fs-4">Database API Gateway</h2>
      <p>Great for unlocking legacy data systems or enabling mobile app access.</p>
    </div>
    <div class="feature col">
      <div class="d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3 rounded-5">
        <span class="m-3">🧠</span>
      </div>
      <h2 class="fs-4">API Business Logic</h2>
      <p>Perfect for enterprise use cases requiring tailored backend logic.</p>
    </div>
    <div class="feature col">
      <div class="d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3 rounded-5">
        <span class="m-3">🕸️</span>
      </div>
      <h2 class="fs-4">Gateway for Microservices</h2>
      <p>Useful for modern service-oriented architectures or hybrid systems.</p>
    </div>
    <div class="feature col">
      <div class="d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3 rounded-5">
        <span class="m-3">🌐</span>
      </div>
      <h2 class="fs-4">API Developer Portal</h2>
      <p>Ideal for SaaS providers offering APIs to external developers.</p>
    </div>
    <div class="feature col">
      <div class="d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3 rounded-5">
        <span class="m-3">💸</span>
      </div>
      <h2 class="fs-4">API Monetization</h2>
      <p>Enable freemium or tiered access models with minimal effort.</p>
    </div>
    <div class="feature col">
      <div class="d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3 rounded-5">
        <span class="m-3">⚡</span>
      </div>
      <h2 class="fs-4">MCP Integration</h2>
      <p>Leverage the Model Context Protocol to enable AI-driven access and control of API endpoints.</p>
    </div>
    <div class="feature col">
      <div class="d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3 rounded-5">
        <span class="m-3">📊</span>
      </div>
      <h2 class="fs-4">API Usage Analytics</h2>
      <p>Essential for maintaining quality of service and detecting issues early.</p>
    </div>
    <div class="feature col">
      <div class="d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3 rounded-5">
        <span class="m-3">📰</span>
      </div>
      <h2 class="fs-4">Headless CMS Backend</h2>
      <p>Great for CMS-like applications where content is managed through APIs.</p>
    </div>
    <div class="feature col">
      <div class="d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3 rounded-5">
        <span class="m-3">📡</span>
      </div>
      <h2 class="fs-4">SDK Automation</h2>
      <p>Automatically generate SDKs (e.g., PHP, TypeScript, Python) based on your defined API schema.</p>
    </div>
  </div>
</div>

<div class="bg-light mt-4 pt-5 mb-4 pb-5">
  <div class="container">
    <div class="row">
      <div class="col text-center">
        <blockquote class="display-4">"With Fusio, we’re empowering the API economy to drive real digital transformation."</blockquote>
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
