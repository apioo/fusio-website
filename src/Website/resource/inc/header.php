<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="description" content="Fusio is an open source API management platform which helps to create innovative API solutions" />
  <meta name="keywords" content="API, API Gateway, API Management, API Platform, REST API, Serverless, PHP, OpenAPI, Swagger" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta property="og:url" content="https://www.fusio-project.org/" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="Fusio - Open source API management platform" />
  <meta property="og:description" content="Fusio is an open source API management platform which helps to create innovative API solutions" />
  <meta property="og:image" content="https://www.fusio-project.org/img/github_preview.png" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:site" content="@FusioAPI" />
  <title>Fusio - Open source API management platform</title>
  <link rel="icon" href="<?php echo $base; ?>/img/fusio_32px.png" type="image/png" />
  <link rel="stylesheet" href="<?php echo $base; ?>/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="<?php echo $base; ?>/css/default.css" />
  <link rel="alternate" href="https://www.fusio-project.org/blog/feed" type="application/atom+xml" title="Fusio Blog" />
  <?php if(isset($canonical)): ?><link rel="canonical" href="<?php echo $canonical; ?>" />
<?php endif; ?>
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-K58XVFTP9N"></script>
  <?php if (isset($analytics) && $analytics === true): ?>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-K58XVFTP9N', {anonymize_ip: true});
  </script>
  <?php endif; ?>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-light">
  <div class="container">
    <a class="navbar-brand" href="<?php echo $router->getAbsolutePath(\App\Website\Index::class); ?>">
      <img src="<?php echo $base; ?>/img/fusio_64px.png" alt="Logo" width="32" height="32" class="d-inline-block align-text-top">
      Fusio
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a href="<?php echo $router->getAbsolutePath(\App\Website\UseCases::class); ?>" class="nav-link">Use-Cases</a>
        </li>
        <li class="nav-item">
          <a href="<?php echo $router->getAbsolutePath(\App\Website\About::class); ?>" class="nav-link">About</a>
        </li>
        <li class="nav-item">
          <a href="<?php echo $router->getAbsolutePath(\App\Website\License::class); ?>" class="nav-link">License</a>
        </li>
        <li class="nav-item">
          <a href="<?php echo $router->getAbsolutePath(\App\Website\Download::class); ?>" class="nav-link">Download</a>
        </li>
        <li class="nav-item">
          <a href="https://docs.fusio-project.org" class="nav-link">Documentation</a>
        </li>
        <li class="nav-item">
          <a href="<?php echo $router->getAbsolutePath(\App\Website\Marketplace::class); ?>" class="nav-link">Marketplace</a>
        </li>
        <li class="nav-item">
          <a href="<?php echo $router->getAbsolutePath(\App\Website\Sdk::class); ?>" class="nav-link">SDK</a>
        </li>
        <li class="nav-item">
          <a href="<?php echo $router->getAbsolutePath(\App\Website\Blog::class); ?>" class="nav-link">Blog</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
