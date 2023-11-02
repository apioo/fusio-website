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
  <meta property="og:title" content="<?php echo $title; ?>" />
  <meta property="og:description" content="Fusio is an open source API management platform which helps to create innovative API solutions" />
  <meta property="og:image" content="https://www.fusio-project.org/img/github_preview.png" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:site" content="@FusioAPI" />
  <title><?php echo $title ?? 'Fusio - Open source API management platform'; ?></title>
  <link rel="preload" href="<?php echo $base; ?>/dist/app.min.css" as="style" />
  <link rel="preload" href="<?php echo $base; ?>/dist/app.min.js" as="script" />
  <link rel="preload" href="<?php echo $base; ?>/img/intro.webp" as="image" />
  <link rel="preload" href="https://www.googletagmanager.com/gtag/js?id=G-K58XVFTP9N" as="script">
  <link rel="dns-prefetch" href="https://www.googletagmanager.com/">
  <link rel="icon" href="<?php echo $base; ?>/img/fusio_32px.png" type="image/png" />
  <link rel="stylesheet" href="<?php echo $base; ?>/dist/app.min.css" />
  <link rel="alternate" href="https://www.fusio-project.org/blog/feed" type="application/atom+xml" title="Fusio Blog" />
  <?php if(isset($canonical)): ?><link rel="canonical" href="<?php echo $canonical; ?>" />
<?php endif; ?>
  <script async src="<?php echo $base; ?>/dist/app.min.js"></script>
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
    <a class="navbar-brand" href="<?php echo $router->getAbsolutePath([\App\Controller\Index::class, 'show']); ?>">
      <img src="<?php echo $base; ?>/img/fusio_64px.png" alt="Logo" width="32" height="32" class="d-inline-block align-text-top">
      Fusio
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a href="<?php echo $router->getAbsolutePath([\App\Controller\UseCases::class, 'show']); ?>" class="nav-link">Use-Cases</a>
        </li>
        <li class="nav-item">
          <a href="<?php echo $router->getAbsolutePath([\App\Controller\About::class, 'show']); ?>" class="nav-link">About</a>
        </li>
        <li class="nav-item">
          <a href="<?php echo $router->getAbsolutePath([\App\Controller\Ecosystem::class, 'show']); ?>" class="nav-link">Ecosystem</a>
        </li>
        <li class="nav-item">
          <a href="<?php echo $router->getAbsolutePath([\App\Controller\Download::class, 'show']); ?>" class="nav-link">Download</a>
        </li>
        <li class="nav-item">
          <a href="https://docs.fusio-project.org" class="nav-link">Documentation</a>
        </li>
        <li class="nav-item">
          <a href="<?php echo $router->getAbsolutePath([\App\Controller\Marketplace::class, 'show']); ?>" class="nav-link">Marketplace</a>
        </li>
        <li class="nav-item">
          <a href="<?php echo $router->getAbsolutePath([\App\Controller\Sdk::class, 'show']); ?>" class="nav-link">SDK</a>
        </li>
        <li class="nav-item">
          <a href="<?php echo $router->getAbsolutePath([\App\Controller\Comparison::class, 'show']); ?>" class="nav-link">Comparison</a>
        </li>
        <li class="nav-item">
          <a href="<?php echo $router->getAbsolutePath([\App\Controller\Partner::class, 'show']); ?>" class="nav-link">Partner</a>
        </li>
        <li class="nav-item">
          <a href="<?php echo $router->getAbsolutePath([\App\Controller\Blog::class, 'show']); ?>" class="nav-link">Blog</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
