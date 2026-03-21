<?php include(__DIR__ . '/inc/header.php'); ?>

<?php include(__DIR__ . '/inc/sub_header.php'); ?>

<section class="relative z-10 py-24 bg-slate-950/50">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="p-8 rounded-3xl bg-white/5 border border-white/10 backdrop-blur-md hover:border-orange-500/50 transition-all group">
                <div class="w-12 h-12 bg-orange-500/20 rounded-xl flex items-center justify-center mb-6 text-orange-500 group-hover:scale-110 transition">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/></svg>
                </div>
                <h2 class="text-2xl font-bold text-white mb-4"><a href="<?php echo $router->getAbsolutePath([\App\Controller\Marketplace::class, 'show']); ?>">Marketplace</a></h2>
                <p class="text-slate-400 text-sm leading-relaxed mb-6">
                    The place to share apps and actions. Register your credentials under <code>System / Config</code> to install apps directly from your local dashboard.
                </p>
                <a href="<?php echo $router->getAbsolutePath([\App\Controller\Marketplace::class, 'show']); ?>" class="text-orange-500 text-sm font-bold hover:underline">Explore Marketplace →</a>
            </div>
            <div class="p-8 rounded-3xl bg-white/5 border border-white/10 backdrop-blur-md hover:border-orange-500/50 transition-all group">
                <div class="w-12 h-12 bg-orange-500/20 rounded-xl flex items-center justify-center mb-6 text-orange-500 group-hover:scale-110 transition">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg>
                </div>
                <h2 class="text-2xl font-bold text-white mb-4"><a href="https://sdkgen.app/">SDKgen</a></h2>
                <p class="text-slate-400 text-sm leading-relaxed mb-6">
                    Generate client SDKs for C#, Go, Java, and Python. Seamlessly interact with your API by providing your SDKgen credentials in Fusio.
                </p>
                <a href="https://sdkgen.app/" class="text-orange-500 text-sm font-bold hover:underline">Learn more →</a>
            </div>
            <div class="p-8 rounded-3xl bg-white/5 border border-white/10 backdrop-blur-md hover:border-orange-500/50 transition-all group">
                <div class="w-12 h-12 bg-orange-500/20 rounded-xl flex items-center justify-center mb-6 text-orange-500 group-hover:scale-110 transition">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>
                </div>
                <h2 class="text-2xl font-bold text-white mb-4"><a href="https://typehub.cloud/">TypeHub</a></h2>
                <p class="text-slate-400 text-sm leading-relaxed mb-6">
                    API and data design platform. Discovery and tracking for your API specification, ensuring a clean history of how your API evolves.
                </p>
                <a href="https://app.typehub.cloud/" class="text-orange-500 text-sm font-bold hover:underline">Discover APIs →</a>
            </div>
            <div class="p-8 rounded-3xl bg-white/5 border border-white/10 backdrop-blur-md hover:border-orange-500/50 transition-all group">
                <div class="w-12 h-12 bg-orange-500/20 rounded-xl flex items-center justify-center mb-6 text-orange-500 group-hover:scale-110 transition">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                </div>
                <h2 class="text-2xl font-bold text-white mb-4"><a href="https://apigen.app/">APIgen</a></h2>
                <p class="text-slate-400 text-sm leading-relaxed mb-6">
                    Low-code generator that creates fully working Fusio APIs and Angular CRUD apps based on your data models.
                </p>
            </div>
            <div class="p-8 rounded-3xl bg-white/5 border border-white/10 backdrop-blur-md hover:border-orange-500/50 transition-all group">
                <div class="w-12 h-12 bg-orange-500/20 rounded-xl flex items-center justify-center mb-6 text-orange-500 group-hover:scale-110 transition">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
                </div>
                <h2 class="text-2xl font-bold text-white mb-4"><a href="https://apimon.app/">APImon</a></h2>
                <p class="text-slate-400 text-sm leading-relaxed mb-6">
                    Specialized API monitoring and uptime pages for Fusio installations. Get notified instantly about changes or downtime.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="py-32 bg-slate-950/80 relative overflow-hidden">
    <div class="absolute inset-0 opacity-[0.03] pointer-events-none" style="background-image: radial-gradient(#fff 1px, transparent 1px); background-size: 40px 40px;"></div>
    <div class="container mx-auto px-6 relative z-10">
        <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-6">
            <div>
                <h2 class="text-4xl md:text-5xl font-black text-white tracking-tighter mb-4">The Open-Source Core</h2>
                <p class="text-slate-400 max-w-xl">
                    Fusio is built on a foundation of specialized, innovative tools. These projects are developed in the open and power thousands of APIs worldwide.
                </p>
            </div>
            <a href="https://github.com/apioo" target="_blank" class="flex items-center gap-2 text-sm font-bold text-orange-500 hover:text-orange-400 transition group">
                VIEW GITHUB ORGANIZATION
                <svg class="w-4 h-4 transform group-hover:translate-x-1 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M17 8l4 4m0 0l-4 4m4-4H3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </a>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">
            <div class="group p-6 bg-white/5 border border-white/10 rounded-2xl hover:bg-white/[0.07] hover:border-orange-500/30 transition-all duration-300">
                <div class="flex justify-between items-start mb-8">
                    <span class="text-[10px] font-bold text-orange-500/80 uppercase tracking-widest px-2 py-1 rounded-md bg-orange-500/10 border border-orange-500/20">Main Engine</span>
                    <span class="text-xs font-mono text-slate-600">ID: 0x01</span>
                </div>
                <h3 class="text-xl font-bold text-white mb-2 group-hover:text-orange-500 transition">
                    <a href="https://github.com/apioo/fusio">Fusio</a>
                </h3>
                <p class="text-sm text-slate-400 leading-relaxed mb-6">Self-Hosted API Management for Builders. The central orchestrator for your logic and security.</p>
            </div>
            <div class="group p-6 bg-white/5 border border-white/10 rounded-2xl hover:bg-white/[0.07] hover:border-orange-500/30 transition-all duration-300">
                <div class="flex justify-between items-start mb-8">
                    <span class="text-[10px] font-bold text-slate-400 uppercase tracking-widest px-2 py-1 rounded-md bg-white/5 border border-white/10">Scaffold</span>
                    <span class="text-xs font-mono text-slate-600">ID: 0x02</span>
                </div>
                <h3 class="text-xl font-bold text-white mb-2 group-hover:text-orange-500 transition">
                    <a href="https://github.com/apioo/fusio-framework">Framework</a>
                </h3>
                <p class="text-sm text-slate-400 leading-relaxed mb-6">Starter repository designed to help you leverage Fusio as a professional PHP framework foundation.</p>
            </div>
            <div class="group p-6 bg-white/5 border border-white/10 rounded-2xl hover:bg-white/[0.07] hover:border-orange-500/30 transition-all duration-300">
                <div class="flex justify-between items-start mb-8">
                    <span class="text-[10px] font-bold text-slate-400 uppercase tracking-widest px-2 py-1 rounded-md bg-white/5 border border-white/10">Deployment</span>
                    <span class="text-xs font-mono text-slate-600">ID: 0x03</span>
                </div>
                <h3 class="text-xl font-bold text-white mb-2 group-hover:text-orange-500 transition">
                    <a href="https://github.com/apioo/fusio-plant">Plant</a>
                </h3>
                <p class="text-sm text-slate-400 leading-relaxed mb-6">Server panel to easily self-host Fusio and other apps on your own infrastructure with one click.</p>
            </div>
            <div class="group p-6 bg-white/5 border border-white/10 rounded-2xl hover:bg-white/[0.07] hover:border-orange-500/30 transition-all duration-300">
                <div class="flex justify-between items-start mb-8">
                    <span class="text-[10px] font-bold text-blue-400 uppercase tracking-widest px-2 py-1 rounded-md bg-blue-500/10 border border-blue-500/20">Core Logic</span>
                    <span class="text-xs font-mono text-slate-600">ID: 0x04</span>
                </div>
                <h3 class="text-xl font-bold text-white mb-2 group-hover:text-orange-500 transition">
                    <a href="https://phpsx.org/">PSX</a>
                </h3>
                <p class="text-sm text-slate-400 leading-relaxed mb-6">An innovative PHP framework dedicated to building fully typed and high-performance REST APIs.</p>
            </div>
            <div class="group p-6 bg-white/5 border border-white/10 rounded-2xl hover:bg-white/[0.07] hover:border-orange-500/30 transition-all duration-300">
                <div class="flex justify-between items-start mb-8">
                    <span class="text-[10px] font-bold text-blue-400 uppercase tracking-widest px-2 py-1 rounded-md bg-blue-500/10 border border-blue-500/20">Modeling</span>
                    <span class="text-xs font-mono text-slate-600">ID: 0x05</span>
                </div>
                <h3 class="text-xl font-bold text-white mb-2 group-hover:text-orange-500 transition">
                    <a href="https://typeschema.org/">TypeSchema</a>
                </h3>
                <p class="text-sm text-slate-400 leading-relaxed mb-6">JSON format to describe data models in a language neutral format for better interoperability.</p>
            </div>
            <div class="group p-6 bg-white/5 border border-white/10 rounded-2xl hover:bg-white/[0.07] hover:border-orange-500/30 transition-all duration-300">
                <div class="flex justify-between items-start mb-8">
                    <span class="text-[10px] font-bold text-blue-400 uppercase tracking-widest px-2 py-1 rounded-md bg-blue-500/10 border border-blue-500/20">Standard</span>
                    <span class="text-xs font-mono text-slate-600">ID: 0x06</span>
                </div>
                <h3 class="text-xl font-bold text-white mb-2 group-hover:text-orange-500 transition">
                    <a href="https://typeapi.org/">TypeAPI</a>
                </h3>
                <p class="text-sm text-slate-400 leading-relaxed mb-6">An OpenAPI alternative to describe REST APIs for type-safe code generation across languages.</p>
            </div>
        </div>
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
