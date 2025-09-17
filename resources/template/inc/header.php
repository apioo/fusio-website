<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="description" content="<?php echo $description ?? 'Fusio is an open source API management platform designed for API builders and developers.'; ?>" />
  <meta name="keywords" content="<?php echo $keywords ?? 'API, API Gateway, API Management, API Platform, REST API, Serverless, PHP, JavaScript, OpenAPI, Swagger, MCP'; ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta property="og:url" content="https://www.fusio-project.org/" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="<?php echo $title; ?>" />
  <meta property="og:description" content="Fusio is an open source API management platform designed for API builders and developers." />
  <meta property="og:image" content="https://www.fusio-project.org/img/github_preview.png" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:site" content="@FusioAPI" />
  <meta name="fediverse:creator" content="@fusio@fosstodon.org">
  <title><?php echo $title ?? 'Fusio - Open source API management platform'; ?></title>
  <link rel="preload" href="<?php echo $base; ?>/dist/app.min.css" as="style" />
  <link rel="preload" href="<?php echo $base; ?>/dist/app.min.js" as="script" />
  <link rel="preload" href="https://www.googletagmanager.com/gtag/js?id=G-K58XVFTP9N" as="script">
  <link rel="dns-prefetch" href="https://www.googletagmanager.com/">
  <link rel="icon" href="<?php echo $base; ?>/img/fusio_32px.png" type="image/png" />
  <link rel="stylesheet" href="<?php echo $base; ?>/dist/app.min.css" />
  <link rel="alternate" href="<?php echo $router->getAbsolutePath([\Chriskapp\Blog\Controller\Feed::class, 'show']); ?>" type="application/atom+xml" title="Fusio Blog" />
  <?php if(isset($canonical)): ?><link rel="canonical" href="<?php echo $canonical; ?>" />
<?php endif; ?>
  <?php if(isset($bootstrap_icons)): ?><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<?php endif; ?>
  <script async src="<?php echo $base; ?>/dist/app.min.js"></script>
  <?php if (!str_contains($url, '127.0.0.1')): ?><script async src="https://www.googletagmanager.com/gtag/js?id=G-K58XVFTP9N"></script>
<?php endif; ?>
  <?php if(isset($recaptcha_key)): ?><script src="https://www.google.com/recaptcha/api.js"></script>
<?php endif; ?>
  <script>
    var _paq = window._paq = window._paq || [];
    _paq.push(['trackPageView']);
    _paq.push(['enableLinkTracking']);
    (function() {
        var u="//matomo.apioo.de/";
        _paq.push(['setTrackerUrl', u+'matomo.php']);
        _paq.push(['setSiteId', '1']);
        var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
        g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
    })();
  </script>
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
          <a href="<?php echo $router->getAbsolutePath([\Chriskapp\Blog\Controller\Index::class, 'show']); ?>" class="nav-link">Blog</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
