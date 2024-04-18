<?php include(__DIR__ . '/inc/header.php'); ?>

<div class="fusio-headline">
  <div class="container">
    <div class="row">
      <div class="col p-4 mx-auto text-center">
        <h1 class="display-4 fw-normal">Use-Cases</h1>
      </div>
    </div>
  </div>
</div>

<div class="container mt-4 pt-4 mb-4 pb-4">
  <div class="row">
    <div class="col-lg-2">
      <div class="text-center mt-4 mb-4">
        <div class="d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-1 p-1 rounded-5">
          <i class="bi bi-wrench-adjustable p-4"></i>
        </div>
      </div>
    </div>
    <div class="col-10">
      <h2 id="api-product" class="display-6 fw-normal">API Product</h2>
      <p>The initial use case of Fusio was to be able to quickly create a great API product beside an existing web app.
        We have many users which run a traditional/legacy web app and they use Fusio to create a state-of-the-art API beside
        there existing product. Fusio provides many ways to make your business logic available as API.</p>
      <p>Fusio provides a <a href="https://demo.fusio-project.org/apps/developer/">developer app</a> which helps to
        on board new users to use your API. It is also possible to completely integrate Fusio into your existing product
        since the app also only works with the internal Fusio API.</p>
      <div class="btn-group btn-group-lg">
        <a href="https://youtu.be/aq4pI0LIBFc" class="btn btn-primary">Video</a>
        <a href="https://docs.fusio-project.org/docs/use_cases/api_product" class="btn btn-secondary">Documentation</a>
      </div>
    </div>
  </div>
</div>

<div class="bg-light mt-4 pt-4 mb-4 pb-4">
  <div class="container">
    <div class="row">
      <div class="col-lg-2">
        <div class="text-center mt-4 mb-4">
          <div class="d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-1 p-1 rounded-5">
            <i class="bi bi-arrow-up-right-circle-fill p-4"></i>
          </div>
        </div>
      </div>
      <div class="col-10">
        <h2 id="api-gateway" class="display-6 fw-normal">API Gateway</h2>
        <p>You can use Fusio as API-Gateway. In this case Fusio acts as the single entrypoint for all your
          internal APIs / microservices. Through this you get a complete overview about your API landscape and
          you can cover topics like authorization, rate limiting and monetization.</p>
        <p>Fusio contains also a schema store which then contains all schema data for each request and response.
          Based on these schemas Fusio can automatically generate an OpenAPI specification or also client SDKs.</p>
        <div class="btn-group btn-group-lg">
          <a href="https://youtu.be/S-mneuDPNzg" class="btn btn-primary">Video</a>
          <a href="https://docs.fusio-project.org/docs/use_cases/api_gateway" class="btn btn-secondary">Documentation</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container mt-4 pt-4 mb-4 pb-4">
  <div class="row">
    <div class="col-lg-2">
      <div class="text-center mt-4 mb-4">
        <div class="d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-1 p-1 rounded-5">
          <i class="bi bi-bullseye p-4"></i>
        </div>
      </div>
    </div>
    <div class="col-10">
      <h2 id="spa-backend" class="display-6 fw-normal">SPA Backend</h2>
      <p>You can use Fusio as backend to build <abbr title="Single-Page-Application">SPAs</abbr> using popular
        Javascript-Frameworks like i.e. Angular, React or Vue. Fusio is really great as backend for those frontend
        frameworks since it is possible to automatically generate a complete type-safe javascript client SDK which can
        be directly used at those frontends.</p>
      <p>In this sense Fusio can be seen as a self-hosted alternative solution to services like Firebase or Supabase.</p>
      <div class="btn-group btn-group-lg">
        <a href="https://youtu.be/syRmovex3rE" class="btn btn-primary">Video</a>
        <a href="https://docs.fusio-project.org/docs/use_cases/spa_backend" class="btn btn-secondary">Documentation</a>
      </div>
    </div>
  </div>
</div>

<div class="bg-light mt-4 pt-4 mb-4 pb-4">
  <div class="container">
    <div class="row">
      <div class="col-lg-2">
        <div class="text-center mt-4 mb-4">
          <div class="d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-1 p-1 rounded-5">
            <i class="bi bi-hammer p-4"></i>
          </div>
        </div>
      </div>
      <div class="col-10">
        <h2 id="low-code-platform" class="display-6 fw-normal">API Builder</h2>
        <p>You can use Fusio as API Builder, this means you can automatically generate complete REST APIs based on
          different data sources i.e. relational databases (MySQL, Postgres), No-SQL (MongoDB, Elasticsearch) or also the
          file system to expose files.</p>
        <p>Through this you can rapidly build REST APIs and it is also possible to extend all endpoints with custom
          logic.</p>
        <div class="btn-group btn-group-lg">
          <a href="https://docs.fusio-project.org/docs/use_cases/api_builder" class="btn btn-secondary">Documentation</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container mt-4 pt-4 mb-4 pb-4">
  <div class="row">
    <div class="col-lg-2">
      <div class="text-center mt-4 mb-4">
        <div class="d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-1 p-1 rounded-5">
          <i class="bi bi-check-circle-fill p-4"></i>
        </div>
      </div>
    </div>
    <div class="col-10">
      <h2 id="low-code-platform" class="display-6 fw-normal">Low-Code Platform</h2>
      <p>You can use Fusio as a Low-Code Platform. This means that also beginners can use Fusio to build great
        APIs without coding. Fusio provides out of the box many actions to implement common API related features,
        i.e. request/transform data from a database or proxy an HTTP request</p>
      <p>Besides this Fusio has also a great API generator which allows you to build complete APIs by different
        sources. I.e. you can use the generator to create a complete API by an entity definition.</p>
      <div class="btn-group btn-group-lg">
        <a href="https://docs.fusio-project.org/docs/use_cases/low_code_platform" class="btn btn-secondary">Documentation</a>
      </div>
    </div>
  </div>
</div>

<div class="bg-light mt-4 pt-4 mb-4 pb-4">
  <div class="container">
    <div class="row">
      <div class="col-lg-2">
        <div class="text-center mt-4 mb-4">
          <div class="d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-1 p-1 rounded-5">
            <i class="bi bi-droplet-fill p-4"></i>
          </div>
        </div>
      </div>
      <div class="col-10">
        <h2 id="api-framework" class="display-6 fw-normal">API Framework</h2>
        <p>You can use Fusio also simply as framework to build an API from scratch. In this case you can develop custom
          actions and use the deploy mechanism. Please take a look at our <a href="https://github.com/apioo/fusio-sample-cms">sample headless CMS</a>
          which shows how to build and structure a complex app using Fusio.</p>
        <div class="btn-group btn-group-lg">
          <a href="https://youtu.be/2E9YnAaXq5s" class="btn btn-primary">Video</a>
          <a href="https://docs.fusio-project.org/docs/use_cases/api_framework" class="btn btn-secondary">Documentation</a>
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
