<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="description" content="<?php echo $description ?? 'Fusio is an open source API management platform designed for API builders and developers.'; ?>"/>
    <meta name="keywords" content="<?php echo $keywords ?? 'API, API Gateway, API Management, API Platform, REST API, Serverless, PHP, JavaScript, OpenAPI, Swagger, MCP'; ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta property="og:url" content="<?php echo $canonical; ?>"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="<?php echo $title !== null ? $title . ' | Fusio' : 'Fusio | Open Source API Management & AI Agents'; ?>"/>
    <meta property="og:description" content="<?php echo $description ?? 'Fusio is an open source API management platform designed for API builders and developers.'; ?>"/>
    <meta property="og:image" content="https://www.fusio-project.org/img/github_preview.png"/>
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:site" content="@FusioAPI"/>
    <meta name="fediverse:creator" content="@fusio@fosstodon.org">
    <title><?php echo $title ?? 'Fusio - Open source API management platform'; ?></title>
    <link rel="preload" href="<?php echo $base; ?>/dist/app.min.css" as="style"/>
    <link rel="preload" href="<?php echo $base; ?>/dist/app.min.js" as="script"/>
    <link rel="icon" href="<?php echo $base; ?>/img/fusio_32px.png" type="image/png"/>
    <link rel="stylesheet" href="<?php echo $base; ?>/dist/app.min.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&family=JetBrains+Mono&display=swap">
    <link rel="alternate" href="<?php echo $router->getAbsolutePath([\Chriskapp\Blog\Controller\Feed::class, 'show']); ?>" type="application/atom+xml" title="Fusio Blog"/>
    <?php if (isset($canonical)): ?>
    <link rel="canonical" href="<?php echo $canonical; ?>"/>
    <?php endif; ?>
    <?php if (isset($bootstrap_icons)): ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <?php endif; ?>
    <script async src="<?php echo $base; ?>/dist/app.min.js"></script>
    <?php if (isset($recaptcha_key)): ?>
    <script src="https://www.google.com/recaptcha/enterprise.js?render=<?php echo $recaptcha_key; ?>"></script>
    <?php endif; ?>
    <script>
        /*
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
        */
    </script>
</head>
<body class="bg-slate-950 bg-space-fixed text-slate-300 antialiased">

<div class="content-mask min-h-screen">
    <nav class="fixed top-0 w-full z-50 border-b border-white/5 backdrop-blur-xl bg-slate-950/80">
        <div class="container mx-auto px-6 h-20 flex items-center justify-between">
            <div class="flex items-center gap-2">
                <div class="w-8 h-8 flex items-center justify-center">
                    <img src="<?php echo $base; ?>/img/fusio_64px.png" alt="Logo" width="32" height="32" class="d-inline-block align-text-top">
                </div>
                <span class="text-xl font-extrabold text-white tracking-tighter">
                    <a href="<?php echo $base; ?>">Fusio</a>
                </span>
            </div>
            <div class="hidden lg:flex items-center gap-8 text-sm font-semibold">
                <div class="group relative py-4">
                    <a href="<?php echo $router->getAbsolutePath([\App\Controller\Platform::class, 'show']); ?>" class="flex items-center gap-1 text-slate-300 group-hover:text-white transition">
                        Platform
                    </a>
                </div>
                <div class="group relative py-4">
                    <a href="<?php echo $router->getAbsolutePath([\App\Controller\Ecosystem::class, 'show']); ?>" class="flex items-center gap-1 text-slate-300 group-hover:text-white transition">
                        Ecosystem
                    </a>
                </div>
                <div class="group relative py-4">
                    <a href="<?php echo $router->getAbsolutePath([\App\Controller\Developers::class, 'show']); ?>" class="flex items-center gap-1 text-slate-300 group-hover:text-white transition">
                        Developers
                    </a>
                </div>
                <div class="group relative py-4">
                    <a href="<?php echo $router->getAbsolutePath([\App\Controller\Marketplace::class, 'show']); ?>" class="flex items-center gap-1 text-slate-300 group-hover:text-white transition">
                        Marketplace
                    </a>
                </div>
                <a href="<?php echo $router->getAbsolutePath([\Chriskapp\Blog\Controller\Index::class, 'show']); ?>" class="text-slate-300 hover:text-white transition">Blog</a>
                <a href="https://docs.fusio-project.org/" class="text-slate-300 hover:text-white transition">Docs</a>
            </div>
            <div class="flex items-center gap-3 sm:gap-6">
                <a href="https://github.com/apioo/fusio" target="_blank"
                   class="flex items-center gap-2 px-3 py-1.5 rounded-full bg-white/5 border border-white/10 hover:bg-white/10 hover:border-orange-500/50 transition-all group">
                    <svg class="w-5 h-5 text-slate-400 group-hover:text-white transition" fill="currentColor"
                         viewBox="0 0 24 24">
                        <path d="M12 0C5.374 0 0 5.373 0 12c0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.042-1.416-4.042-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576C20.566 21.797 24 17.3 24 12c0-6.627-5.373-12-12-12z"/>
                    </svg>
                    <div class="flex items-center gap-1">
                        <svg class="w-3.5 h-3.5 text-orange-500" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <span id="github-stars" class="text-xs font-bold text-slate-200">2.1k</span>
                    </div>
                </a>
                <a href="<?php echo $router->getAbsolutePath([\App\Controller\Demo::class, 'show']); ?>" class="bg-orange-500 text-white px-5 py-2.5 rounded-full text-sm font-bold hover:bg-orange-600 transition shadow-lg shadow-orange-500/20">
                    Demo
                </a>
            </div>
        </div>
    </nav>
    <div class="fixed top-0 left-1/2 -translate-x-1/2 w-full h-[600px] bg-orange-600/5 blur-[120px] -z-10 pointer-events-none"></div>
    <main class="pt-32 pb-20">
        <div class="container mx-auto px-6">
