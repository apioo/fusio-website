<?php include(__DIR__ . '/inc/header.php'); ?>

<?php include(__DIR__ . '/inc/sub_header.php'); ?>

<section class="py-12 bg-slate-950/40">
    <div class="container mx-auto px-6 space-y-24">
        <section>
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
                <div class="lg:col-span-4 sticky top-32">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="px-2 py-1 rounded bg-orange-500/10 text-orange-500 text-[10px] font-black uppercase tracking-widest">Network Tier</span>
                    </div>
                    <h2 class="text-3xl font-black text-white mb-4">API Gateway</h2>
                    <p class="text-sm text-slate-400 leading-relaxed">
                        An API gateway acts as a single entry point for clients to access backend services. Fusio provides all common gateway features: Routing, Auth, and Rate Limiting, but adds an advanced developer portal and SDK generator to simplify user onboarding.
                    </p>
                </div>
                <div class="lg:col-span-8 grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div class="group p-6 rounded-3xl bg-slate-900/40 border border-white/5 hover:border-orange-500/30 transition-all">
                        <div class="w-12 h-12 mb-6 rounded-xl bg-slate-950/60 p-2 flex items-center justify-center border border-white/5 group-hover:scale-105 transition-transform">
                            <img src="<?php echo $base; ?>/img/compare/kong.png" alt="Kong" class="w-full h-full object-contain grayscale group-hover:grayscale-0 transition-all">
                        </div>
                        <div class="mb-6">
                            <h3 class="text-white font-bold text-lg tracking-tight">Kong</h3>
                        </div>
                        <div class="flex flex-col gap-3">
                            <a href="<?php echo $router->getAbsolutePath([\App\Controller\Comparison::class, 'detail'], ['app' => 'kong']); ?>" class="w-full py-3 px-4 text-orange-500 text-[11px] font-black uppercase tracking-widest text-center rounded-xl transition-all shadow-lg shadow-orange-500/10">
                                Fusio vs Kong
                            </a>
                            <a href="https://konghq.com/" target="_blank" rel="noopener" class="w-full py-3 px-4 bg-white/5 hover:bg-white/10 text-slate-300 hover:text-white text-[11px] font-black uppercase tracking-widest text-center rounded-xl border border-white/10 transition-all">
                                Official Site
                            </a>
                        </div>
                    </div>
                    <div class="group p-6 rounded-3xl bg-slate-900/40 border border-white/5 hover:border-orange-500/30 transition-all">
                        <div class="w-12 h-12 mb-6 rounded-xl bg-slate-950/60 p-2 flex items-center justify-center border border-white/5 group-hover:scale-105 transition-transform">
                            <img src="<?php echo $base; ?>/img/compare/tyk.png" alt="Tyk" class="w-full h-full object-contain grayscale group-hover:grayscale-0 transition-all">
                        </div>
                        <div class="mb-6">
                            <h3 class="text-white font-bold text-lg tracking-tight">Tyk</h3>
                        </div>
                        <div class="flex flex-col gap-3">
                            <a href="<?php echo $router->getAbsolutePath([\App\Controller\Comparison::class, 'detail'], ['app' => 'tyk']); ?>" class="w-full py-3 px-4 text-orange-500 text-[11px] font-black uppercase tracking-widest text-center rounded-xl transition-all shadow-lg shadow-orange-500/10">
                                Fusio vs Tyk
                            </a>
                            <a href="https://tyk.io/" target="_blank" rel="noopener" class="w-full py-3 px-4 bg-white/5 hover:bg-white/10 text-slate-300 hover:text-white text-[11px] font-black uppercase tracking-widest text-center rounded-xl border border-white/10 transition-all">
                                Official Site
                            </a>
                        </div>
                    </div>
                    <div class="group p-6 rounded-3xl bg-slate-900/40 border border-white/5 hover:border-orange-500/30 transition-all">
                        <div class="w-12 h-12 mb-6 rounded-xl bg-slate-950/60 p-2 flex items-center justify-center border border-white/5 group-hover:scale-105 transition-transform">
                            <img src="<?php echo $base; ?>/img/compare/wso2.png" alt="WSO2" class="w-full h-full object-contain grayscale group-hover:grayscale-0 transition-all">
                        </div>
                        <div class="mb-6">
                            <h3 class="text-white font-bold text-lg tracking-tight">WSO2</h3>
                        </div>
                        <div class="flex flex-col gap-3">
                            <a href="<?php echo $router->getAbsolutePath([\App\Controller\Comparison::class, 'detail'], ['app' => 'wso2']); ?>" class="w-full py-3 px-4 text-orange-500 text-[11px] font-black uppercase tracking-widest text-center rounded-xl transition-all shadow-lg shadow-orange-500/10">
                                Fusio vs WSO2
                            </a>
                            <a href="https://wso2.com/" target="_blank" rel="noopener" class="w-full py-3 px-4 bg-white/5 hover:bg-white/10 text-slate-300 hover:text-white text-[11px] font-black uppercase tracking-widest text-center rounded-xl border border-white/10 transition-all">
                                Official Site
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="pt-24 border-t border-white/5">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
                <div class="lg:col-span-4 sticky top-32">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="px-2 py-1 rounded bg-emerald-500/10 text-emerald-500 text-[10px] font-black uppercase tracking-widest">Infrastructure Tier</span>
                    </div>
                    <h2 class="text-3xl font-black text-white mb-4">Backend as a Service</h2>
                    <p class="text-sm text-slate-400 leading-relaxed">
                        Fusio is an open-source, self-hosted alternative to BaaS providers. It targets developers who prioritize data sovereignty and vendor independence, offering a simplified backend development experience without the constraints of a proprietary cloud.
                    </p>
                </div>
                <div class="lg:col-span-8 grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div class="group p-6 rounded-3xl bg-slate-900/40 border border-white/5 hover:border-emerald-500/30 transition-all">
                        <div class="w-12 h-12 mb-6 rounded-xl bg-slate-950/60 p-2 flex items-center justify-center border border-white/5 group-hover:scale-105 transition-transform">
                            <img src="<?php echo $base; ?>/img/compare/firebase.png" alt="Firebase" class="w-full h-full object-contain grayscale group-hover:grayscale-0 transition-all">
                        </div>
                        <div class="mb-6">
                            <h3 class="text-white font-bold text-lg tracking-tight">Firebase</h3>
                        </div>
                        <div class="flex flex-col gap-3">
                            <a href="<?php echo $router->getAbsolutePath([\App\Controller\Comparison::class, 'detail'], ['app' => 'firebase']); ?>" class="w-full py-3 px-4 text-emerald-500 text-[11px] font-black uppercase tracking-widest text-center rounded-xl transition-all shadow-lg shadow-emerald-500/10">
                                Fusio vs Firebase
                            </a>
                            <a href="https://firebase.google.com/" target="_blank" rel="noopener" class="w-full py-3 px-4 bg-white/5 hover:bg-white/10 text-slate-300 hover:text-white text-[11px] font-black uppercase tracking-widest text-center rounded-xl border border-white/10 transition-all">
                                Official Site
                            </a>
                        </div>
                    </div>
                    <div class="group p-6 rounded-3xl bg-slate-900/40 border border-white/5 hover:border-emerald-500/30 transition-all">
                        <div class="w-12 h-12 mb-6 rounded-xl bg-slate-950/60 p-2 flex items-center justify-center border border-white/5 group-hover:scale-105 transition-transform">
                            <img src="<?php echo $base; ?>/img/compare/supabase.png" alt="Supabase" class="w-full h-full object-contain grayscale group-hover:grayscale-0 transition-all">
                        </div>
                        <div class="mb-6">
                            <h3 class="text-white font-bold text-lg tracking-tight">Supabase</h3>
                        </div>
                        <div class="flex flex-col gap-3">
                            <a href="<?php echo $router->getAbsolutePath([\App\Controller\Comparison::class, 'detail'], ['app' => 'supabase']); ?>" class="w-full py-3 px-4 text-emerald-500 text-[11px] font-black uppercase tracking-widest text-center rounded-xl transition-all shadow-lg shadow-emerald-500/10">
                                Fusio vs Supabase
                            </a>
                            <a href="https://supabase.com/" target="_blank" rel="noopener" class="w-full py-3 px-4 bg-white/5 hover:bg-white/10 text-slate-300 hover:text-white text-[11px] font-black uppercase tracking-widest text-center rounded-xl border border-white/10 transition-all">
                                Official Site
                            </a>
                        </div>
                    </div>
                    <div class="group p-6 rounded-3xl bg-slate-900/40 border border-white/5 hover:border-emerald-500/30 transition-all">
                        <div class="w-12 h-12 mb-6 rounded-xl bg-slate-950/60 p-2 flex items-center justify-center border border-white/5 group-hover:scale-105 transition-transform">
                            <img src="<?php echo $base; ?>/img/compare/appwrite.png" alt="Appwrite" class="w-full h-full object-contain grayscale group-hover:grayscale-0 transition-all">
                        </div>
                        <div class="mb-6">
                            <h3 class="text-white font-bold text-lg tracking-tight">Appwrite</h3>
                        </div>
                        <div class="flex flex-col gap-3">
                            <a href="<?php echo $router->getAbsolutePath([\App\Controller\Comparison::class, 'detail'], ['app' => 'appwrite']); ?>" class="w-full py-3 px-4 text-emerald-500 text-[11px] font-black uppercase tracking-widest text-center rounded-xl transition-all shadow-lg shadow-emerald-500/10">
                                Fusio vs Appwrite
                            </a>
                            <a href="https://appwrite.io/" target="_blank" rel="noopener" class="w-full py-3 px-4 bg-white/5 hover:bg-white/10 text-slate-300 hover:text-white text-[11px] font-black uppercase tracking-widest text-center rounded-xl border border-white/10 transition-all">
                                Official Site
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="pt-24 border-t border-white/5">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
                <div class="lg:col-span-4 sticky top-32">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="px-2 py-1 rounded bg-blue-500/10 text-blue-500 text-[10px] font-black uppercase tracking-widest">Development Tier</span>
                    </div>
                    <h2 class="text-3xl font-black text-white mb-4">API Builder</h2>
                    <p class="text-sm text-slate-400 leading-relaxed">
                        Fusio provides a generator to automatically create a complete API based on various databases. Unlike simple builders that only offer REST or GraphQL mirroring, Fusio allows you to customize each endpoint and inject additional business logic.
                    </p>
                </div>
                <div class="lg:col-span-8 grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div class="group p-6 rounded-3xl bg-slate-900/40 border border-white/5 hover:border-blue-500/30 transition-all">
                        <div class="w-12 h-12 mb-6 rounded-xl bg-slate-950/60 p-2 flex items-center justify-center border border-white/5 group-hover:scale-105 transition-transform">
                            <img src="<?php echo $base; ?>/img/compare/postgrest.png" alt="PostgREST" class="w-full h-full object-contain grayscale group-hover:grayscale-0 transition-all">
                        </div>
                        <div class="mb-6">
                            <h3 class="text-white font-bold text-lg tracking-tight">PostgREST</h3>
                        </div>
                        <div class="flex flex-col gap-3">
                            <a href="<?php echo $router->getAbsolutePath([\App\Controller\Comparison::class, 'detail'], ['app' => 'postgrest']); ?>" class="w-full py-3 px-4 text-blue-500 text-[11px] font-black uppercase tracking-widest text-center rounded-xl transition-all shadow-lg shadow-blue-500/10">
                                Fusio vs PostgREST
                            </a>
                            <a href="https://postgrest.org/" target="_blank" rel="noopener" class="w-full py-3 px-4 bg-white/5 hover:bg-white/10 text-slate-300 hover:text-white text-[11px] font-black uppercase tracking-widest text-center rounded-xl border border-white/10 transition-all">
                                Official Site
                            </a>
                        </div>
                    </div>
                    <div class="group p-6 rounded-3xl bg-slate-900/40 border border-white/5 hover:border-blue-500/30 transition-all">
                        <div class="w-12 h-12 mb-6 rounded-xl bg-slate-950/60 p-2 flex items-center justify-center border border-white/5 group-hover:scale-105 transition-transform">
                            <img src="<?php echo $base; ?>/img/compare/hasura.png" alt="Hasura" class="w-full h-full object-contain grayscale group-hover:grayscale-0 transition-all">
                        </div>
                        <div class="mb-6">
                            <h3 class="text-white font-bold text-lg tracking-tight">Hasura</h3>
                        </div>
                        <div class="flex flex-col gap-3">
                            <a href="<?php echo $router->getAbsolutePath([\App\Controller\Comparison::class, 'detail'], ['app' => 'hasura']); ?>" class="w-full py-3 px-4 text-blue-500 text-[11px] font-black uppercase tracking-widest text-center rounded-xl transition-all shadow-lg shadow-blue-500/10">
                                Fusio vs Hasura
                            </a>
                            <a href="https://hasura.io/" target="_blank" rel="noopener" class="w-full py-3 px-4 bg-white/5 hover:bg-white/10 text-slate-300 hover:text-white text-[11px] font-black uppercase tracking-widest text-center rounded-xl border border-white/10 transition-all">
                                Official Site
                            </a>
                        </div>
                    </div>
                    <div class="group p-6 rounded-3xl bg-slate-900/40 border border-white/5 hover:border-blue-500/30 transition-all">
                        <div class="w-12 h-12 mb-6 rounded-xl bg-slate-950/60 p-2 flex items-center justify-center border border-white/5 group-hover:scale-105 transition-transform">
                            <img src="<?php echo $base; ?>/img/compare/dreamfactory.png" alt="DreamFactory" class="w-full h-full object-contain grayscale group-hover:grayscale-0 transition-all">
                        </div>
                        <div class="mb-6">
                            <h3 class="text-white font-bold text-lg tracking-tight">DreamFactory</h3>
                        </div>
                        <div class="flex flex-col gap-3">
                            <a href="<?php echo $router->getAbsolutePath([\App\Controller\Comparison::class, 'detail'], ['app' => 'dreamfactory']); ?>" class="w-full py-3 px-4 text-blue-500 text-[11px] font-black uppercase tracking-widest text-center rounded-xl transition-all shadow-lg shadow-blue-500/10">
                                Fusio vs DreamFactory
                            </a>
                            <a href="https://www.dreamfactory.com/" target="_blank" rel="noopener" class="w-full py-3 px-4 bg-white/5 hover:bg-white/10 text-slate-300 hover:text-white text-[11px] font-black uppercase tracking-widest text-center rounded-xl border border-white/10 transition-all">
                                Official Site
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="pt-24 border-t border-white/5">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
                <div class="lg:col-span-4 sticky top-32">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="px-2 py-1 rounded bg-purple-500/10 text-purple-500 text-[10px] font-black uppercase tracking-widest">Content Tier</span>
                    </div>
                    <h2 class="text-3xl font-black text-white mb-4">Headless CMS</h2>
                    <p class="text-sm text-slate-400 leading-relaxed">
                        While a CMS manages display content, Fusio acts as a lightweight alternative for "Entity-First" development. It focuses on structured data and CRUD APIs rather than presentation management.
                    </p>
                </div>
                <div class="lg:col-span-8 grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div class="group p-6 rounded-3xl bg-slate-900/40 border border-white/5 hover:border-purple-500/30 transition-all">
                        <div class="w-12 h-12 mb-6 rounded-xl bg-slate-950/60 p-2 flex items-center justify-center border border-white/5 group-hover:scale-105 transition-transform">
                            <img src="<?php echo $base; ?>/img/compare/strapi.png" alt="Strapi" class="w-full h-full object-contain grayscale group-hover:grayscale-0 transition-all">
                        </div>
                        <div class="mb-6">
                            <h3 class="text-white font-bold text-lg tracking-tight">Strapi</h3>
                        </div>
                        <div class="flex flex-col gap-3">
                            <a href="<?php echo $router->getAbsolutePath([\App\Controller\Comparison::class, 'detail'], ['app' => 'strapi']); ?>" class="w-full py-3 px-4 text-purple-500 text-[11px] font-black uppercase tracking-widest text-center rounded-xl transition-all shadow-lg shadow-purple-500/10">
                                Fusio vs Strapi
                            </a>
                            <a href="https://strapi.io/" target="_blank" rel="noopener" class="w-full py-3 px-4 bg-white/5 hover:bg-white/10 text-slate-300 hover:text-white text-[11px] font-black uppercase tracking-widest text-center rounded-xl border border-white/10 transition-all">
                                Official Site
                            </a>
                        </div>
                    </div>
                    <div class="group p-6 rounded-3xl bg-slate-900/40 border border-white/5 hover:border-purple-500/30 transition-all">
                        <div class="w-12 h-12 mb-6 rounded-xl bg-slate-950/60 p-2 flex items-center justify-center border border-white/5 group-hover:scale-105 transition-transform">
                            <img src="<?php echo $base; ?>/img/compare/ghost.png" alt="Ghost" class="w-full h-full object-contain grayscale group-hover:grayscale-0 transition-all">
                        </div>
                        <div class="mb-6">
                            <h3 class="text-white font-bold text-lg tracking-tight">Ghost</h3>
                        </div>
                        <div class="flex flex-col gap-3">
                            <a href="<?php echo $router->getAbsolutePath([\App\Controller\Comparison::class, 'detail'], ['app' => 'ghost']); ?>" class="w-full py-3 px-4 text-purple-500 text-[11px] font-black uppercase tracking-widest text-center rounded-xl transition-all shadow-lg shadow-purple-500/10">
                                Fusio vs Ghost
                            </a>
                            <a href="https://ghost.org/" target="_blank" rel="noopener" class="w-full py-3 px-4 bg-white/5 hover:bg-white/10 text-slate-300 hover:text-white text-[11px] font-black uppercase tracking-widest text-center rounded-xl border border-white/10 transition-all">
                                Official Site
                            </a>
                        </div>
                    </div>
                    <div class="group p-6 rounded-3xl bg-slate-900/40 border border-white/5 hover:border-purple-500/30 transition-all">
                        <div class="w-12 h-12 mb-6 rounded-xl bg-slate-950/60 p-2 flex items-center justify-center border border-white/5 group-hover:scale-105 transition-transform">
                            <img src="<?php echo $base; ?>/img/compare/directus.png" alt="Directus" class="w-full h-full object-contain grayscale group-hover:grayscale-0 transition-all">
                        </div>
                        <div class="mb-6">
                            <h3 class="text-white font-bold text-lg tracking-tight">Directus</h3>
                        </div>
                        <div class="flex flex-col gap-3">
                            <a href="<?php echo $router->getAbsolutePath([\App\Controller\Comparison::class, 'detail'], ['app' => 'directus']); ?>" class="w-full py-3 px-4 text-purple-500 text-[11px] font-black uppercase tracking-widest text-center rounded-xl transition-all shadow-lg shadow-purple-500/10">
                                Fusio vs Directus
                            </a>
                            <a href="https://directus.io/" target="_blank" rel="noopener" class="w-full py-3 px-4 bg-white/5 hover:bg-white/10 text-slate-300 hover:text-white text-[11px] font-black uppercase tracking-widest text-center rounded-xl border border-white/10 transition-all">
                                Official Site
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="pt-24 border-t border-white/5">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
                <div class="lg:col-span-4 sticky top-32">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="px-2 py-1 rounded bg-red-500/10 text-red-500 text-[10px] font-black uppercase tracking-widest">Application Tier</span>
                    </div>
                    <h2 class="text-3xl font-black text-white mb-4">API Framework</h2>
                    <p class="text-sm text-slate-400 leading-relaxed">
                        Code-level frameworks leave governance and lifecycle management to you. Fusio bridges this gap by providing a repository-driven config that works with GIT, automating the repetitive "API Product" features like documentation and SDKs.
                    </p>
                </div>
                <div class="lg:col-span-8 grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div class="group p-6 rounded-3xl bg-slate-900/40 border border-white/5 hover:border-red-500/30 transition-all">
                        <div class="w-12 h-12 mb-6 rounded-xl bg-slate-950/60 p-2 flex items-center justify-center border border-white/5 group-hover:scale-105 transition-transform">
                            <img src="<?php echo $base; ?>/img/compare/symfony.png" alt="Symfony" class="w-full h-full object-contain grayscale group-hover:grayscale-0 transition-all">
                        </div>
                        <div class="mb-6">
                            <h3 class="text-white font-bold text-lg tracking-tight">Symfony</h3>
                        </div>
                        <div class="flex flex-col gap-3">
                            <a href="<?php echo $router->getAbsolutePath([\App\Controller\Comparison::class, 'detail'], ['app' => 'symfony']); ?>" class="w-full py-3 px-4 text-red-500 text-[11px] font-black uppercase tracking-widest text-center rounded-xl transition-all shadow-lg shadow-purple-500/10">
                                Fusio vs Symfony
                            </a>
                            <a href="https://symfony.com/" target="_blank" rel="noopener" class="w-full py-3 px-4 bg-white/5 hover:bg-white/10 text-slate-300 hover:text-white text-[11px] font-black uppercase tracking-widest text-center rounded-xl border border-white/10 transition-all">
                                Official Site
                            </a>
                        </div>
                    </div>
                    <div class="group p-6 rounded-3xl bg-slate-900/40 border border-white/5 hover:border-red-500/30 transition-all">
                        <div class="w-12 h-12 mb-6 rounded-xl bg-slate-950/60 p-2 flex items-center justify-center border border-white/5 group-hover:scale-105 transition-transform">
                            <img src="<?php echo $base; ?>/img/compare/laravel.png" alt="Laravel" class="w-full h-full object-contain grayscale group-hover:grayscale-0 transition-all">
                        </div>
                        <div class="mb-6">
                            <h3 class="text-white font-bold text-lg tracking-tight">Laravel</h3>
                        </div>
                        <div class="flex flex-col gap-3">
                            <a href="<?php echo $router->getAbsolutePath([\App\Controller\Comparison::class, 'detail'], ['app' => 'laravel']); ?>" class="w-full py-3 px-4 text-red-500 text-[11px] font-black uppercase tracking-widest text-center rounded-xl transition-all shadow-lg shadow-purple-500/10">
                                Fusio vs Laravel
                            </a>
                            <a href="https://laravel.com/" target="_blank" rel="noopener" class="w-full py-3 px-4 bg-white/5 hover:bg-white/10 text-slate-300 hover:text-white text-[11px] font-black uppercase tracking-widest text-center rounded-xl border border-white/10 transition-all">
                                Official Site
                            </a>
                        </div>
                    </div>
                    <div class="group p-6 rounded-3xl bg-slate-900/40 border border-white/5 hover:border-red-500/30 transition-all">
                        <div class="w-12 h-12 mb-6 rounded-xl bg-slate-950/60 p-2 flex items-center justify-center border border-white/5 group-hover:scale-105 transition-transform">
                            <img src="<?php echo $base; ?>/img/compare/api-platform.png" alt="API Platform" class="w-full h-full object-contain grayscale group-hover:grayscale-0 transition-all">
                        </div>
                        <div class="mb-6">
                            <h3 class="text-white font-bold text-lg tracking-tight">API Platform</h3>
                        </div>
                        <div class="flex flex-col gap-3">
                            <a href="<?php echo $router->getAbsolutePath([\App\Controller\Comparison::class, 'detail'], ['app' => 'api-platform']); ?>" class="w-full py-3 px-4 text-red-500 text-[11px] font-black uppercase tracking-widest text-center rounded-xl transition-all shadow-lg shadow-purple-500/10">
                                Fusio vs API Platform
                            </a>
                            <a href="https://api-platform.com/" target="_blank" rel="noopener" class="w-full py-3 px-4 bg-white/5 hover:bg-white/10 text-slate-300 hover:text-white text-[11px] font-black uppercase tracking-widest text-center rounded-xl border border-white/10 transition-all">
                                Official Site
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>

<section class="border-t border-white/5 bg-slate-950/40 py-6 group">
    <div class="container mx-auto px-6">
        <div class="flex flex-col sm:flex-row items-center justify-between gap-6">
            <div class="flex items-center gap-6">
                <div class="flex items-center gap-3 px-3 py-1.5 rounded-md bg-white/[0.03] border border-white/5">
                    <span class="text-[10px] font-black text-slate-600 uppercase tracking-widest">SHA1</span>
                    <code class="text-[11px] font-mono font-bold text-slate-400">
                        <?php echo sha1_file(__FILE__); ?>
                    </code>
                </div>
            </div>
            <div class="flex items-center gap-6">
                <a href="https://github.com/apioo/fusio-website/blob/main/resources/template/<?php echo pathinfo(__FILE__, PATHINFO_BASENAME); ?>"
                   class="group/link flex items-center gap-2 text-[10px] font-black text-slate-500 hover:text-orange-500 transition-colors uppercase tracking-widest">
                    <svg class="w-3.5 h-3.5 opacity-50 group-hover/link:opacity-100 transition-opacity" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    Improve this page
                </a>
                <div class="hidden sm:block w-1 h-1 rounded-full bg-white/10"></div>
                <a href="https://github.com/apioo/fusio/issues"
                   class="text-[10px] font-black text-slate-600 hover:text-white transition-colors uppercase tracking-widest">
                    Report Issue
                </a>
            </div>
        </div>
    </div>
</section>

<?php include(__DIR__ . '/inc/footer.php'); ?>
