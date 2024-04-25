<?php include(__DIR__ . '/inc/header.php'); ?>

<div class="fusio-headline">
  <div class="container">
    <div class="row">
      <div class="col p-4 mx-auto text-center">
        <h1 class="display-4 fw-normal">Comparison</h1>
      </div>
    </div>
  </div>
</div>

<div class="container mt-4 pt-4 mb-4 pb-4">
  <div class="row">
    <p class="col">
      <p>On this page we try to compare Fusio with different products in the API ecosystem. We explain our understanding
      of each tool category and how Fusio fits into this category. It should give you a better overview of available
      solutions and whether Fusio can be useful to solve your business case. Please keep in mind that no technology is
      perfect and every product has its pros and cons.</p>
    </div>
  </div>
</div>

<div class="container mt-4 pt-4 mb-4 pb-4">
  <div class="row">
    <div class="col">
      <h2 class="display-4 fw-normal">API Gateway</h2>
      <p>An API gateway acts as a single entry point for clients to access various backend services or APIs in a unified
      manner, common features of an API gateway are: Request Routing, Load Balancing, Authentication, Rate Limiting,
      Monitoring and Transformation and Aggregation.</p>
      <p>Fusio provides out-of-the-box these common API gateway features, in addition it has also a focus to simplify
        onboarding new users by providing a ready to use developer portal and an advanced SDK generator, which can help
        integrating your API in different environments.</p>
    </div>
  </div>
</div>

<div class="bg-light mt-4 pt-4 mb-4 pb-4">
  <div class="container">
    <div class="row row-cols-1 row-cols-md-3 text-center">
      <div class="col">
        <div class="card mb-3">
          <div class="card-header py-3">
            <h3 class="my-0 fw-bold">Kong</h3>
          </div>
          <img src="<?php echo $base; ?>/img/compare/kong.png" class="rounded mx-auto d-block mt-3" />
          <div class="card-body">
            <a href="<?php echo $router->getAbsolutePath([\App\Controller\Comparison::class, 'detail'], ['app' => 'kong']); ?>" class="btn btn-primary">Compare</a>
            <a href="https://konghq.com/" class="btn btn-secondary">Website</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-3">
          <div class="card-header py-3">
            <h3 class="my-0 fw-bold">Tyk</h3>
          </div>
          <img src="<?php echo $base; ?>/img/compare/tyk.png" class="rounded mx-auto d-block mt-3" />
          <div class="card-body">
            <a href="<?php echo $router->getAbsolutePath([\App\Controller\Comparison::class, 'detail'], ['app' => 'tyk']); ?>" class="btn btn-primary">Compare</a>
            <a href="https://tyk.io/" class="btn btn-secondary">Website</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-3">
          <div class="card-header py-3">
            <h3 class="my-0 fw-bold">WSO2</h3>
          </div>
          <img src="<?php echo $base; ?>/img/compare/wso2.png" class="rounded mx-auto d-block mt-3" />
          <div class="card-body">
            <a href="https://wso2.com/" class="btn btn-secondary">Website</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container mt-4 pt-4 mb-4 pb-4">
  <div class="row">
    <div class="col">
      <h2 class="display-4 fw-normal">Backend as a Service</h2>
      <p>Backend as a Service (BaaS) is a cloud computing model that provides developers with a way to outsource backend
      infrastructure and services, allowing them to focus more on building the frontend and application logic. In a
      BaaS model, the cloud service provider manages and hosts the backend infrastructure, databases, server-side logic,
      user authentication, and other common backend functionalities, while developers interact with these services
      through APIs or SDKs.</p>
      <p>Fusio can be used as alternative to such BaaS providers, but it only simplifies backend development. It is
      open-source, self-hosted and targets developers who like to build and host its own backend. This has some
      advantages like data sovereignty and vendor independence but it comes with a little bit more complexity.</p>
    </div>
  </div>
</div>

<div class="bg-light mt-4 pt-4 mb-4 pb-4">
  <div class="container">
    <div class="row row-cols-1 row-cols-md-3 text-center">
      <div class="col">
        <div class="card mb-3">
          <div class="card-header py-3">
            <h3 class="my-0 fw-bold">Firebase</h3>
          </div>
          <img src="<?php echo $base; ?>/img/compare/firebase.png" class="rounded mx-auto d-block mt-3" />
          <div class="card-body">
            <a href="<?php echo $router->getAbsolutePath([\App\Controller\Comparison::class, 'detail'], ['app' => 'firebase']); ?>" class="btn btn-primary">Compare</a>
            <a href="https://firebase.google.com/" class="btn btn-secondary">Website</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-3">
          <div class="card-header py-3">
            <h3 class="my-0 fw-bold">Supabase</h3>
          </div>
          <img src="<?php echo $base; ?>/img/compare/supabase.png" class="rounded mx-auto d-block mt-3" />
          <div class="card-body">
            <a href="<?php echo $router->getAbsolutePath([\App\Controller\Comparison::class, 'detail'], ['app' => 'supabase']); ?>" class="btn btn-primary">Compare</a>
            <a href="https://supabase.com/" class="btn btn-secondary">Website</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-3">
          <div class="card-header py-3">
            <h3 class="my-0 fw-bold">Appwrite</h3>
          </div>
          <img src="<?php echo $base; ?>/img/compare/appwrite.png" class="rounded mx-auto d-block mt-3" />
          <div class="card-body">
            <a href="https://appwrite.io/" class="btn btn-secondary">Website</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container mt-4 pt-4 mb-4 pb-4">
  <div class="row">
    <div class="col">
      <h2 class="display-4 fw-normal">API Builder</h2>
      <p>An API builder is a tool which can automatically generate ready to use REST APIs based on various data sources.
      Most times an API builder simply offers a REST API on top of a database, so that your frontend application can
      directly work with the exposed tables.</p>
      <p>Fusio provides a generator to automatically generate a complete API based on various databases. Besides this
      it has the advantage that you can easily customize each endpoint and operation and add additional logic which is
      often not possible with simple API builder tools.</p>
    </div>
  </div>
</div>

<div class="bg-light mt-4 pt-4 mb-4 pb-4">
  <div class="container">
    <div class="row row-cols-1 row-cols-md-3 text-center">
      <div class="col">
        <div class="card mb-3">
          <div class="card-header py-3">
            <h3 class="my-0 fw-bold">PostgREST</h3>
          </div>
          <img src="<?php echo $base; ?>/img/compare/postgrest.png" class="rounded mx-auto d-block mt-3" />
          <div class="card-body">
            <a href="https://postgrest.org/" class="btn btn-secondary">Website</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-3">
          <div class="card-header py-3">
            <h3 class="my-0 fw-bold">DreamFactory</h3>
          </div>
          <img src="<?php echo $base; ?>/img/compare/dreamfactory.png" class="rounded mx-auto d-block mt-3" />
          <div class="card-body">
            <a href="https://www.dreamfactory.com/" class="btn btn-secondary">Website</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container mt-4 pt-4 mb-4 pb-4">
  <div class="row">
    <div class="col">
      <h2 class="display-4 fw-normal">Headless CMS</h2>
      <p>A Headless CMS is a content management system that provides an interface for creating, managing, and organizing
      digital content, but it differs from traditional CMSs in that it does not dictate how content is presented or
      delivered to users. Instead of generating HTML pages for display, a headless CMS stores content in a structured
      format (typically JSON) and exposes it via an API for retrieval by client-side applications or presentation layers.</p>
      <p>Fusio can be used as a light weight headless CMS, most notable it has an entity generator which allows to
      create complete CRUD APIs for an entity definition. Note Fusio does not provide a backend like most headless CMS
      products where a user can manage the content, it only helps to implement custom domain APIs.</p>
    </div>
  </div>
</div>

<div class="bg-light mt-4 pt-4 mb-4 pb-4">
  <div class="container">
    <div class="row row-cols-1 row-cols-md-3 text-center">
      <div class="col">
        <div class="card mb-3">
          <div class="card-header py-3">
            <h3 class="my-0 fw-bold">Strapi</h3>
          </div>
          <img src="<?php echo $base; ?>/img/compare/strapi.png" class="rounded mx-auto d-block mt-3" />
          <div class="card-body">
            <a href="https://strapi.io/" class="btn btn-secondary">Website</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-3">
          <div class="card-header py-3">
            <h3 class="my-0 fw-bold">Ghost</h3>
          </div>
          <img src="<?php echo $base; ?>/img/compare/ghost.png" class="rounded mx-auto d-block mt-3" />
          <div class="card-body">
            <a href="https://ghost.org/" class="btn btn-secondary">Website</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-3">
          <div class="card-header py-3">
            <h3 class="my-0 fw-bold">Directus</h3>
          </div>
          <img src="<?php echo $base; ?>/img/compare/directus.png" class="rounded mx-auto d-block mt-3" />
          <div class="card-body">
            <a href="https://directus.io/" class="btn btn-secondary">Website</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container mt-4 pt-4 mb-4 pb-4">
  <div class="row">
    <div class="col">
      <h2 class="display-4 fw-normal">Cloud Provider</h2>
      <p>The major cloud providers offer API Gateway products as part of their suite of cloud services. These API Gateway
      products provide a managed solution for building, deploying, and managing APIs in the cloud.</p>
      <p>Fusio should be not seen as an alternative to these cloud providers but since they also provide an API Gateway
        offering we list them here for completion. Those API Gateways are more infrastructure gateways and you would
        run Fusio behind such a gateway.</p>
    </div>
  </div>
</div>

<div class="bg-light mt-4 pt-4 mb-4 pb-4">
  <div class="container">
    <div class="row row-cols-1 row-cols-md-3 text-center">
      <div class="col">
        <div class="card mb-3">
          <div class="card-header py-3">
            <h3 class="my-0 fw-bold">AWS</h3>
          </div>
          <img src="<?php echo $base; ?>/img/compare/aws.png" class="rounded mx-auto d-block mt-3" />
          <div class="card-body">
            <a href="https://aws.amazon.com/" class="btn btn-secondary">Website</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-3">
          <div class="card-header py-3">
            <h3 class="my-0 fw-bold">GCP</h3>
          </div>
          <img src="<?php echo $base; ?>/img/compare/gcp.png" class="rounded mx-auto d-block mt-3" />
          <div class="card-body">
            <a href="https://cloud.google.com/" class="btn btn-secondary">Website</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-3">
          <div class="card-header py-3">
            <h3 class="my-0 fw-bold">Azure</h3>
          </div>
          <img src="<?php echo $base; ?>/img/compare/azure.png" class="rounded mx-auto d-block mt-3" />
          <div class="card-body">
            <a href="https://azure.microsoft.com/" class="btn btn-secondary">Website</a>
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
