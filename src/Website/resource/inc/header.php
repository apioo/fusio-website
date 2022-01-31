<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Fusio is an open source API management platform which helps to build and manage RESTful APIs" />
    <meta name="keywords" content="API, API Gateway, API Management, API Platform, REST API, Serverless, PHP, OpenAPI, Swagger" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:url" content="https://www.fusio-project.org/" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Fusio - Open source API management platform" />
    <meta property="og:description" content="Fusio is an open source API management platform which helps to build and manage RESTful APIs" />
    <meta property="og:image" content="https://www.fusio-project.org/img/github_preview.png" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@FusioAPI" />
    <title>Fusio - Open source API management platform</title>
    <link rel="icon" href="<?php echo $base; ?>/img/fusio_32px.png" type="image/png" />
    <link rel="stylesheet" href="<?php echo $base; ?>/css/material.blue-red.min.css" />
    <link rel="stylesheet" href="<?php echo $base; ?>/css/default.css" />
    <link rel="stylesheet" href="<?php echo $base; ?>/css/dialog-polyfill.css" />
    <link rel="stylesheet" href="<?php echo $base; ?>/css/androidstudio.min.css" />
    <link rel="stylesheet" href="<?php echo $base; ?>/css/fonts.css" />
    <link rel="stylesheet" href="<?php echo $base; ?>/css/slick.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald" />
    <link rel="alternate" href="https://www.fusio-project.org/blog/feed" type="application/atom+xml" title="Fusio Blog" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
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
  <body class="fusio mdl-color--grey-100 mdl-color-text--grey-700 mdl-base">

<div class="mdl-layout mdl-js-layout">

<header class="mdl-layout__header mdl-layout__header--scroll mdl-color--primary-dark">
  <div class="mdl-layout__header-row fusio-header">
    <img src="<?php echo $base; ?>/img/fusio_64px.png" height="44" alt="Fusio">
    <span class="mdl-layout-title">
      <a href="<?php echo $router->getAbsolutePath(\App\Website\Index::class); ?>" class="mdl-typography--display-1">Fusio</a>
    </span>
    <div class="mdl-layout-spacer"></div>
    <nav class="mdl-navigation mdl-layout--large-screen-only" itemscope itemtype="http://schema.org/SiteNavigationElement">
      <a href="<?php echo $router->getAbsolutePath(\App\Website\UseCases::class); ?>" class="mdl-navigation__link">Use-Cases</a>
      <a href="<?php echo $router->getAbsolutePath(\App\Website\About::class); ?>" class="mdl-navigation__link">About</a>
      <a href="<?php echo $router->getAbsolutePath(\App\Website\License::class); ?>" class="mdl-navigation__link">License</a>
      <a href="<?php echo $router->getAbsolutePath(\App\Website\Documentation::class); ?>" class="mdl-navigation__link">Documentation</a>
      <a href="<?php echo $router->getAbsolutePath(\App\Website\Download::class); ?>" class="mdl-navigation__link">Download</a>
      <a href="<?php echo $router->getAbsolutePath(\App\Website\Marketplace::class); ?>" class="mdl-navigation__link">Marketplace</a>
      <a href="https://fusio.cloud/" class="mdl-navigation__link">Cloud</a>
      <a href="<?php echo $router->getAbsolutePath(\App\Website\Sdk::class); ?>" class="mdl-navigation__link">SDK</a>
      <a href="<?php echo $router->getAbsolutePath(\App\Website\Blog::class); ?>" class="mdl-navigation__link">Blog</a>
    </nav>

    <button id="demo-menu-lower-right" class="mdl-button mdl-js-button mdl-button--icon mdl-layout--large-screen-only">
      <i class="material-icons">more_vert</i>
    </button>
    <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="demo-menu-lower-right">
      <li class="mdl-menu__item">
        <a href="<?php echo $router->getAbsolutePath(\App\Website\Adapter::class); ?>">Adapter</a>
      </li>
      <li class="mdl-menu__item">
        <a href="<?php echo $router->getAbsolutePath(\App\Website\Tools::class); ?>">Tools</a>
      </li>
      <li class="mdl-menu__item">
        <a href="<?php echo $router->getAbsolutePath(\App\Website\Worker::class); ?>">Worker</a>
      </li>
      <li class="mdl-menu__item">
        <a href="<?php echo $router->getAbsolutePath(\App\Website\Samples::class); ?>">Samples</a>
      </li>
      <li class="mdl-menu__item">
        <a href="https://groups.google.com/g/fusio">Forum</a>
      </li>
    </ul>
  </div>
</header>

<div class="mdl-layout__drawer mdl-layout--small-screen-only">
  <span class="mdl-layout-title">Fusio</span>
  <nav class="mdl-navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
    <a href="<?php echo $router->getAbsolutePath(\App\Website\Index::class); ?>" class="mdl-navigation__link">Home</a>
    <a href="<?php echo $router->getAbsolutePath(\App\Website\About::class); ?>" class="mdl-navigation__link">About</a>
    <a href="<?php echo $router->getAbsolutePath(\App\Website\Documentation::class); ?>" class="mdl-navigation__link">Documentation</a>
    <a href="<?php echo $router->getAbsolutePath(\App\Website\Download::class); ?>" class="mdl-navigation__link">Download</a>
    <a href="<?php echo $router->getAbsolutePath(\App\Website\Marketplace::class); ?>" class="mdl-navigation__link">Marketplace</a>
    <a href="<?php echo $router->getAbsolutePath(\App\Website\Sdk::class); ?>" class="mdl-navigation__link">SDK</a>
    <a href="<?php echo $router->getAbsolutePath(\App\Website\Blog::class); ?>" class="mdl-navigation__link">Blog</a>
    <a href="<?php echo $router->getAbsolutePath(\App\Website\Adapter::class); ?>" class="mdl-navigation__link">Adapter</a>
    <a href="<?php echo $router->getAbsolutePath(\App\Website\Tools::class); ?>" class="mdl-navigation__link">Tools</a>
    <a href="<?php echo $router->getAbsolutePath(\App\Website\Worker::class); ?>" class="mdl-navigation__link">Worker</a>
    <a href="<?php echo $router->getAbsolutePath(\App\Website\Samples::class); ?>" class="mdl-navigation__link">Samples</a>
    <a href="https://groups.google.com/g/fusio" class="mdl-navigation__link">Forum</a>
  </nav>
</div>

<main class="mdl-layout__content">
  <div>
