<?php include(__DIR__ . '/inc/header.php'); ?>

<!--
Hey developer, like Fusio our complete website is also open source. If you find any errors or you want to improve
specific parts feel free to simply create a PR at this repository. If you want to see the Fusio repository s.
https://github.com/apioo/fusio
-->

<div style="background-image:url('<?php echo $base; ?>/img/intro.jpg');background-size:cover">
  <div class="container">
    <div class="row">
      <div class="col p-lg-5 mx-auto my-5 text-center">
        <h1 class="display-4 fw-normal">Open Source API Management</h1>
        <p class="lead fw-normal">Fusio is an open source API management platform which helps to create innovative API solutions.</p>
        <a href="#" id="subscribe" class="btn btn-dark">Subscribe</a>
        <a href="<?php echo $router->getAbsolutePath(\App\Website\Demo::class); ?>" class="btn btn-primary">Demo</a>
      </div>
    </div>
  </div>
</div>

<div class="bg-dark text-center pt-3 pb-3">
  <div class="container">
    <div class="row">
      <div class="col-4">
        <img src="<?php echo $base; ?>/img/youtube-32.png" alt="Youtube">
        <a href="https://youtube.com/@FusioAPI" class="text-decoration-none text-light">Fusio on Youtube</a>
      </div>
      <div class="col-4">
        <img src="<?php echo $base; ?>/img/github-32.png" alt="Github">
        <a href="https://github.com/apioo/fusio" class="text-decoration-none text-light">Fusio on Github</a>
      </div>
      <div class="col-4">
        <img src="<?php echo $base; ?>/img/twitter-32.png" alt="Twitter">
        <a href="https://twitter.com/FusioAPI" class="text-decoration-none text-light">@FusioAPI on Twitter</a>
      </div>
    </div>
  </div>
</div>

<div class="container mt-4 mb-4">
  <div class="row g-4 py-5 row-cols-1 row-cols-lg-3 text-center">
    <div class="feature col">
      <div class="d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3 rounded-5">
        <i class="bi bi-cloud-fill p-4"></i>
      </div>
      <h3 class="fs-2">API management</h3>
      <p>Fusio provides a powerful <a href="<?php echo $router->getAbsolutePath(\App\Website\Demo::class); ?>">backend</a>
        app to control and monitor your API.</p>
    </div>
    <div class="feature col">
      <div class="d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3 rounded-5">
        <i class="bi bi-box-fill p-4"></i>
      </div>
      <h3 class="fs-2">Developer portal</h3>
      <p>Fusio provides a <a href="https://demo.fusio-project.org/apps/developer/">developer portal</a>
        app where developer can register to use your API.</p>
    </div>
    <div class="feature col">
      <div class="d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3 rounded-5">
        <i class="bi bi-card-image p-4"></i>
      </div>
      <h3 class="fs-2">API Generator</h3>
      <p>Fusio provides multiple generators to build complete APIs without coding from different sources.</p>
    </div>
    <div class="feature col">
      <div class="d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3 rounded-5">
        <i class="bi bi-cash p-4"></i>
      </div>
      <h3 class="fs-2">Monetization</h3>
      <p>Fusio provides a simple payment system to charge for specific routes.</p>
    </div>
    <div class="feature col">
      <div class="d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3 rounded-5">
        <i class="bi bi-code p-4"></i>
      </div>
      <h3 class="fs-2">SDK generation</h3>
      <p>Fusio can automatically generate a client SDK for your API based on the defined schema.</p>
    </div>
    <div class="feature col">
      <div class="d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3 rounded-5">
        <i class="bi bi-bar-chart-fill p-4"></i>
      </div>
      <h3 class="fs-2">Rate limiting</h3>
      <p>Fusio provides a way to rate limit requests based on the user or app.</p>
    </div>
    <div class="feature col">
      <div class="d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3 rounded-5">
        <i class="bi bi-cpu-fill p-4"></i>
      </div>
      <h3 class="fs-2">Schema generation</h3>
      <p>Fusio provides an endpoint to automatically generate <a href="https://www.openapis.org/">OAI</a> and
        <a href="https://raml.org/">RAML</a> specifications.</p>
    </div>
    <div class="feature col">
      <div class="d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3 rounded-5">
        <i class="bi bi-cursor-fill p-4"></i>
      </div>
      <h3 class="fs-2">Event support</h3>
      <p>Fusio contains a subscription layer which helps to build pub/sub for your API.</p>
    </div>
    <div class="feature col">
      <div class="d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3 rounded-5">
        <i class="bi bi-calendar-event-fill p-4"></i>
      </div>
      <h3 class="fs-2">OAuth2 authorization</h3>
      <p>App developer can obtain an access token to access non-public API endpoints.</p>
    </div>
  </div>
</div>

<div class="bg-light mt-4 pt-5 mb-4 pb-5">
  <div class="container">
    <div class="row">
      <div class="col text-center">
        <blockquote class="display-4">"With Fusio we innovate the API economy to make the digitalization happen"</blockquote>
        <cite class="text-secondary">Christoph Kappestein, Developer of Fusio</cite>
      </div>
    </div>
  </div>
</div>

<div class="px-4 py-5 my-5 text-center bg-dark">
  <iframe width="560" height="315" src="https://www.youtube.com/embed/MeJu6F4OWQE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>

<div class="container">
  <div class="row">
    <div class="col text-end">
      <a href="https://github.com/apioo/fusio-website/blob/main/src/Website/resource/<?php echo pathinfo(__FILE__, PATHINFO_BASENAME); ?>"><i class="bi bi-pen-fill"></i> Edit this page</a>
    </div>
  </div>
</div>

<script type="application/ld+json">
  {
    "@context": "http://schema.org",
    "@type": "SoftwareApplication",
    "name": "Fusio",
    "description": "Fusio is an open source API management platform which helps to build and manage REST APIs. Through Fusio you can quickly build a state of the art API, set up a developer portal and monetize your API.",
    "url": "https://www.fusio-project.org/",
    "applicationCategory": "API Management",
    "downloadUrl": "https://www.fusio-project.org/download",
    "license": "https://github.com/apioo/fusio/blob/master/LICENSE",
    "operatingSystem": "Windows, Linux, OSX"
  }
</script>

<script type="text/javascript" src="//downloads.mailchimp.com/js/signup-forms/popup/unique-methods/embed.js" data-dojo-config="usePlainJson: true, isDebug: false"></script>
<script type="text/javascript">
function showDialog() {
  window.dojoRequire(["mojo/signup-forms/Loader"], function(L) {
    L.start({"baseUrl":"mc.us20.list-manage.com","uuid":"13a030c73b877188ebe28f86f","lid":"8706c1f9e7","uniqueMethods":true});
    document.cookie = "MCPopupClosed=;expires=Thu, 01 Jan 1970 00:00:00 UTC;path=/";
  });
}
document.getElementById("subscribe").onclick = showDialog;
</script>

<?php include(__DIR__ . '/inc/footer.php'); ?>
