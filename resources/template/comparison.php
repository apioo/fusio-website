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
      <p>On this page we try to compare Fusio with different products to help you choose the fitting tool for your
      case. Please keep in mind that no technology is perfect and every product has its pros and cons. If some
      information are incorrect please feel free to make a pull request.
      </p>
    </div>
  </div>
</div>

<div class="container mt-4 pt-4 mb-4 pb-4">
  <div class="row">
    <div class="col">
      <h1 class="display-4 fw-normal">API Gateway</h1>
      <p>API Gateways act as a single entrypoint for all your APIs and microservices, they provide often features like
      proxy, authentication, developer portal, analytics and rate-limiting. Fusio can be used as alternative to such
      API gateway providers since it also implements common API gateway features. In addition, Fusio also covers topics
      like client SDK generation or API monetization.</p>
    </div>
  </div>
</div>

<div class="bg-light mt-4 pt-4 mb-4 pb-4">
  <div class="container">
    <div class="row row-cols-1 row-cols-md-3 text-center">
      <div class="col">
        <div class="card mb-3">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Kong</h4>
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
            <h4 class="my-0 fw-normal">Tyk</h4>
          </div>
          <img src="<?php echo $base; ?>/img/compare/tyk.png" class="rounded mx-auto d-block mt-3" />
          <div class="card-body">
            <a href="<?php echo $router->getAbsolutePath([\App\Controller\Comparison::class, 'detail'], ['app' => 'tyk']); ?>" class="btn btn-primary">Compare</a>
            <a href="https://tyk.io/" class="btn btn-secondary">Website</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container mt-4 pt-4 mb-4 pb-4">
  <div class="row">
    <div class="col">
      <h1 class="display-4 fw-normal">BaaS</h1>
      <p>Backend-as-a-Service provider help developers to build apps without building a backend and by simply using an
      API. BaaS providers offer features like database, storage and functions. Fusio can be used as alternative to such
      BaaS providers, but it only simplifies backend development. It is open-source, self-hosted and targets developers
      who like to build and host its own backend. This has some advantages like data sovereignty and vendor independence
      but it comes with a little bit more complexity.</p>
    </div>
  </div>
</div>

<div class="bg-light mt-4 pt-4 mb-4 pb-4">
  <div class="container">
    <div class="row row-cols-1 row-cols-md-3 text-center">
      <div class="col">
        <div class="card mb-3">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Firebase</h4>
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
            <h4 class="my-0 fw-normal">Supabase</h4>
          </div>
          <img src="<?php echo $base; ?>/img/compare/supabase.png" class="rounded mx-auto d-block mt-3" />
          <div class="card-body">
            <a href="<?php echo $router->getAbsolutePath([\App\Controller\Comparison::class, 'detail'], ['app' => 'supabase']); ?>" class="btn btn-primary">Compare</a>
            <a href="https://supabase.com/" class="btn btn-secondary">Website</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!--
<div class="container mt-4 pt-4 mb-4 pb-4">
  <div class="row">
    <div class="col">
      <h1 class="display-4 fw-normal">API Frameworks</h1>
      <p>API Frameworks are dedicated frameworks which help you to build REST APIs. Today you can build a REST API with
      almost any general purpose Framework like Spring, Symfony or Express, but we try to focus our comparison on frameworks
      which are dedicated to building APIs. Fusio can be used as alternative to such frameworks since it helps you also
      to easily build complex applications.</p>
    </div>
  </div>
</div>

<div class="bg-light mt-4 pt-4 mb-4 pb-4">
  <div class="container">
    <div class="row row-cols-1 row-cols-md-3 text-center">
      <div class="col">
        <div class="card mb-3">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">API Platform</h4>
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
-->

<div class="container">
  <div class="row">
    <div class="col text-end">
      <a href="https://github.com/apioo/fusio-website/blob/main/resources/template/<?php echo pathinfo(__FILE__, PATHINFO_BASENAME); ?>"><i class="bi bi-pen-fill"></i> Edit this page</a>
    </div>
  </div>
</div>

<?php include(__DIR__ . '/inc/footer.php'); ?>
