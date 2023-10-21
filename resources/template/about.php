<?php include(__DIR__ . '/inc/header.php'); ?>

<div class="fusio-headline">
  <div class="container">
    <div class="row">
      <div class="col p-4 mx-auto text-center">
        <h1 class="display-4 fw-normal">About</h1>
      </div>
    </div>
  </div>
</div>

<div class="container mt-4 pt-4 mb-4 pb-4">
  <div class="row">
    <div class="col">
      <p>Fusio is an open source API management platform which helps to create innovative API solutions. We think that there
        is a huge potential in the API economy, whether you need an API to expose your business functionality, develop
        one-page web applications, mobile-apps or microservices.</p>
      <p>We truly believe in open source software. Fusio is a solution which is open source and self-hosted to protect
        you from vendor lock-in. Today there are many cloud solutions available which lock you in to a specific
        platform. With Fusio you have the freedom to choose the fitting hosting environment which can be either a simple
        virtual server or an autoscaling environment in the cloud.</p>
      <p>If you like the project and want to see it grow please check out the <a href="https://github.com/apioo/fusio">repository</a>.</p>
    </div>
  </div>
</div>

<div class="bg-light mt-4 pt-4 mb-4 pb-4">
  <div class="container">
    <div class="row">
      <div class="col">
        <h4>Architecture</h4>

        <p>If you are researching API solutions you probably hear often the term
          <b>API-Gateway/Proxy</b> and <b>API-Management</b>. Fusio is an API-Management
          system in the sense that it helps to develop actual API endpoints (which i.e.
          request and transform data from a database). It is not limited to proxy
          requests to another API. The following diagram should give you a better
          overview.</p>

        <div class="mt-4 mb-4 text-center">
          <img src="<?php echo $base; ?>/img/arch.png" alt="Fusio Architecture" class="img-fluid">
        </div>

        <p>Fusio uses the backend services to produce an API response or to handle
          the request data. A backend service can be i.e. a database, message queue or
          another API. It is also very easy to implement a custom
          <a href="<?php echo $router->getAbsolutePath([\App\Controller\Adapter::class, 'show']); ?>">connection</a>
          to support any 3rd party service.</p>

        <p>The API can then be used by apps which are developed by yourself or by
          3rd party developers. The apps can be i.e. javascript apps (like Angular,
          React, Vue etc.), mobile apps or actual desktop apps which need to communicate
          with your API. The Fusio backend app uses also the internal API to configure
          the system. Because of that it is also very easy to integrate Fusio into an
          existing system, since you actually can configure the complete system
          through the API.</p>
      </div>
    </div>
  </div>
</div>

<div class="container mt-4 pt-4 mb-4 pb-4">
  <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4">
    <div class="col">
      <div class="card mb-4">
        <h5 class="card-header">Media</h5>
        <div class="card-body">
          <p class="card-text">If you are a blogger or magazine we would be happy if you like to cover
            Fusio. You can <a href="<?php echo $base; ?>/media/fusio_icon.zip">download</a>
            the official icon set to represent Fusio.</p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card mb-4">
        <h5 class="card-header">Donations</h5>
        <div class="card-body">
          <p class="card-text">If you like to sponsor our project please take a look at our
          <a href="https://github.com/apioo/fusio">repository</a> to see all available donation options. We like to
            thank every user who has donated to the project.
          </p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card mb-4">
        <h5 class="card-header">Consulting</h5>
        <div class="card-body">
          <p class="card-text">If you are a company or freelancer and want to get detailed information
            how you can use Fusio you can <a href="<?php echo $router->getAbsolutePath([\App\Controller\Contact::class, 'show']); ?>">contact us</a>
            for consulting.
          </p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card mb-4">
        <h5 class="card-header">Community</h5>
        <div class="card-body">
          <p class="card-text">If you like to contribute to the project please visit our <a href="https://github.com/apioo/fusio">repository</a>.
            To improve the documentation you can also take a look at our <a href="https://docs.fusio-project.org/">documentation</a> website.
          </p>
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
