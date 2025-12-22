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
    <div class="col">
      <p class="lead">On this page, we provide a clear comparison between Fusio and other popular tools in the API ecosystem. We break down different categories of API solutions and explain where Fusio fits within each.
        Our goal is to help you quickly understand the strengths and focus of each tool, so you can determine whether Fusio is the right open-source API management solution for your project or business needs.
        Please note that every technology has its unique advantages and limitations. This comparison is designed to give you a balanced overview and guide you in choosing the best solution for your specific use case.</p>
    </div>
  </div>
</div>

<div class="container mt-4 pt-4 mb-4 pb-4">
  <div class="row">
    <div class="col">
      <h2 class="fusio-sub-headline h4 fw-normal">🔀 API Gateway</h2>
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
            <a href="<?php echo $router->getAbsolutePath([\App\Controller\Comparison::class, 'detail'], ['app' => 'wso2']); ?>" class="btn btn-primary">Compare</a>
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
      <h2 class="fusio-sub-headline h4 fw-normal">🧰 Backend as a Service</h2>
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
            <a href="<?php echo $router->getAbsolutePath([\App\Controller\Comparison::class, 'detail'], ['app' => 'appwrite']); ?>" class="btn btn-primary">Compare</a>
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
      <h2 class="fusio-sub-headline h4 fw-normal">🧱 API Builder</h2>
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
            <a href="<?php echo $router->getAbsolutePath([\App\Controller\Comparison::class, 'detail'], ['app' => 'postgrest']); ?>" class="btn btn-primary">Compare</a>
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
            <a href="<?php echo $router->getAbsolutePath([\App\Controller\Comparison::class, 'detail'], ['app' => 'dreamfactory']); ?>" class="btn btn-primary">Compare</a>
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
      <h2 class="fusio-sub-headline h4 fw-normal">🧠 Headless CMS</h2>
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
            <a href="<?php echo $router->getAbsolutePath([\App\Controller\Comparison::class, 'detail'], ['app' => 'strapi']); ?>" class="btn btn-primary">Compare</a>
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
            <a href="<?php echo $router->getAbsolutePath([\App\Controller\Comparison::class, 'detail'], ['app' => 'ghost']); ?>" class="btn btn-primary">Compare</a>
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
            <a href="<?php echo $router->getAbsolutePath([\App\Controller\Comparison::class, 'detail'], ['app' => 'directus']); ?>" class="btn btn-primary">Compare</a>
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
      <h2 class="fusio-sub-headline h4 fw-normal">☁️ API Framework</h2>
      <p>API frameworks provide code-level tools to build APIs, but leave lifecycle management, governance, and API product concerns to the developer.</p>
      <p>Fusio provides also the possibility to store the complete Fusio configuration as config files in a GIT repository
      so that there is no need to use the backend UI, take a look at our <a href="https://github.com/apioo/fusio-framework">example repository</a>
      to see how this works.</p>
    </div>
  </div>
</div>

<div class="bg-light mt-4 pt-4 mb-4 pb-4">
  <div class="container">
    <div class="row row-cols-1 row-cols-md-3 text-center">
      <div class="col">
        <div class="card mb-3">
          <div class="card-header py-3">
            <h3 class="my-0 fw-bold">Symfony</h3>
          </div>
          <img src="<?php echo $base; ?>/img/compare/symfony.png" class="rounded mx-auto d-block mt-3" />
          <div class="card-body">
            <a href="<?php echo $router->getAbsolutePath([\App\Controller\Comparison::class, 'detail'], ['app' => 'symfony']); ?>" class="btn btn-primary">Compare</a>
            <a href="https://symfony.com/" class="btn btn-secondary">Website</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-3">
          <div class="card-header py-3">
            <h3 class="my-0 fw-bold">Laravel</h3>
          </div>
          <img src="<?php echo $base; ?>/img/compare/laravel.png" class="rounded mx-auto d-block mt-3" />
          <div class="card-body">
            <a href="<?php echo $router->getAbsolutePath([\App\Controller\Comparison::class, 'detail'], ['app' => 'laravel']); ?>" class="btn btn-primary">Compare</a>
            <a href="https://laravel.com/" class="btn btn-secondary">Website</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-3">
          <div class="card-header py-3">
            <h3 class="my-0 fw-bold">API Platform</h3>
          </div>
          <img src="<?php echo $base; ?>/img/compare/api-platform.png" class="rounded mx-auto d-block mt-3" />
          <div class="card-body">
            <a href="<?php echo $router->getAbsolutePath([\App\Controller\Comparison::class, 'detail'], ['app' => 'api-platform']); ?>" class="btn btn-primary">Compare</a>
            <a href="https://api-platform.com/" class="btn btn-secondary">Website</a>
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
