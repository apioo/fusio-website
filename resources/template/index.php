<?php include(__DIR__ . '/inc/header.php'); ?>

<!--
Hey developer, like Fusio our complete website is also open source. If you find any errors or you want to improve
specific parts feel free to simply create a PR at this repository. If you want to see the Fusio repository s.
https://github.com/apioo/fusio
-->

<section class="container mx-auto px-6 pt-32 pb-20 relative z-10">
    <div class="flex flex-col lg:flex-row items-center gap-16">
        <div class="lg:w-1/2">
            <!--
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-orange-500/10 border border-orange-500/20 mb-8">
                <span class="relative flex h-2 w-2">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-orange-400 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-orange-500"></span>
                </span>
                <span class="text-xs font-bold text-orange-500 uppercase tracking-widest">Major Release 7.0</span>
            </div>
            -->
            <h1 class="text-5xl md:text-7xl font-black text-white mb-6 leading-[0.9] tracking-tighter">
                API Management <br/>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-orange-400 to-red-500">for the AI Era.</span>
            </h1>
            <p class="text-xl text-slate-200 mb-10 max-w-xl leading-relaxed">
                The open-source API engine that connects your logic to the world, built for developers, optimized for AI agents.
            </p>
            <div class="flex flex-wrap gap-5 items-center text-center sm:text-left">
                <a href="https://mailchi.mp/948c47451634/fusio"
                   class="w-full sm:w-auto bg-orange-500 text-slate-950 px-8 py-4 rounded-full font-bold hover:bg-orange-400 shadow-2xl transition-all inline-block text-center">
                    Get Updates
                </a>
                <a href="<?php echo $router->getAbsolutePath([\App\Controller\Demo::class, 'show']); ?>" class="w-full sm:w-auto bg-white/5 backdrop-blur-md border border-white/10 text-white px-8 py-4 rounded-full font-bold hover:bg-white/10 transition-all">
                    Try Live Demo
                </a>
            </div>
        </div>
        <div class="lg:w-1/2 relative">
            <div class="absolute -inset-10 bg-orange-600/20 blur-[120px] rounded-full opacity-40 animate-pulse"></div>
            <div class="relative z-10 animate-float bg-slate-900 border border-white/10 p-1.5 rounded-2xl shadow-[0_30px_60px_rgba(0,0,0,0.6)]">
                <div class="flex gap-1.5 mb-2 px-3 pt-2">
                    <div class="w-2.5 h-2.5 rounded-full bg-red-500/50"></div>
                    <div class="w-2.5 h-2.5 rounded-full bg-yellow-500/50"></div>
                    <div class="w-2.5 h-2.5 rounded-full bg-green-500/50"></div>
                </div>
                <img src="https://www.fusio-project.org/img/screens/backend_dashboard_small.png" alt="Fusio Backend Dashboard" class="w-full h-auto rounded-lg" />
            </div>
        </div>
    </div>
</section>

<section class="bg-slate-950 py-24 px-6 overflow-hidden">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-20">
            <h2 class="text-4xl md:text-5xl font-black text-white mb-6 tracking-tighter">
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-orange-400 to-rose-500">Features</span>
            </h2>
            <p class="text-slate-400 max-w-2xl mx-auto text-lg">
                Fusio is a complete API management platform designed to turn your technical logic into scalable digital value.
            </p>
        </div>
        <div class="relative grid grid-cols-1 lg:grid-cols-3 gap-12 items-center">
            <div class="space-y-6 z-10">
                <div class="group p-6 rounded-2xl bg-slate-900/50 border border-white/5 hover:border-orange-500/50 transition-all">
                    <h3 class="text-orange-400 font-bold uppercase text-[10px] tracking-widest mb-2">Data Layer</h3>
                    <p class="text-white font-semibold mb-1">Database API Gateway</p>
                    <p class="text-slate-400 text-sm">Instantly expose legacy SQL/NoSQL as REST.</p>
                </div>
                <div class="group p-6 rounded-2xl bg-slate-900/50 border border-white/5 hover:border-orange-500/50 transition-all">
                    <h3 class="text-orange-400 font-bold uppercase text-[10px] tracking-widest mb-2">Infrastructure</h3>
                    <p class="text-white font-semibold mb-1">Microservice Gateway</p>
                    <p class="text-slate-400 text-sm">Secure, route, and orchestrate service traffic.</p>
                </div>
                <div class="group p-6 rounded-2xl bg-slate-900/50 border border-white/5 hover:border-orange-500/50 transition-all">
                    <h3 class="text-orange-500 font-bold uppercase text-[10px] tracking-widest mb-2">Intelligence</h3>
                    <p class="text-white font-semibold mb-1">Analytics & Monitoring</p>
                    <p class="text-slate-400 text-sm">Track API usage, performance, and errors in real-time.</p>
                </div>
            </div>
            <div class="relative flex flex-col items-center">
                <div class="absolute inset-0 bg-orange-500/20 blur-[100px] rounded-full animate-pulse"></div>
                <div class="relative w-64 h-64 flex items-center justify-center rounded-full border-2 border-orange-500/30 bg-slate-900 shadow-2xl shadow-orange-500/20">
                    <div class="text-center p-8 flex flex-col items-center">
                        <img src="<?php echo $base; ?>/media/logo.svg" alt="Fusio Logo" class="h-24 w-auto mb-4 drop-shadow-[0_0_15px_rgba(249,115,22,0.5)]" />
                    </div>
                </div>
                <div class="mt-12 space-y-4 w-full px-4">
                    <div class="p-4 rounded-xl bg-white/5 border border-white/10 text-center backdrop-blur-md group hover:bg-white/10 transition-colors">
                        <p class="text-white text-sm font-medium">✨ AI-Assisted Development</p>
                    </div>
                    <div class="p-4 rounded-xl bg-white/5 border border-white/10 text-center backdrop-blur-md group hover:bg-white/10 transition-colors">
                        <p class="text-white text-sm font-medium">🤖 AI / MCP Integration</p>
                    </div>
                    <div class="p-4 rounded-xl bg-white/5 border border-white/10 text-center backdrop-blur-md group hover:bg-white/10 transition-colors">
                        <p class="text-white text-sm font-medium">⚡ Custom API Logic</p>
                    </div>
                </div>
            </div>
            <div class="space-y-6 z-10 lg:text-right">
                <div class="group p-6 rounded-2xl bg-slate-900/50 border border-white/5 hover:border-blue-500/50 transition-all">
                    <h3 class="text-blue-400 font-bold uppercase text-[10px] tracking-widest mb-2">Consumption</h3>
                    <p class="text-white font-semibold mb-1">API Developer Portal</p>
                    <p class="text-slate-400 text-sm">Self-service docs, testing tools, and keys.</p>
                </div>
                <div class="group p-6 rounded-2xl bg-slate-900/50 border border-white/5 hover:border-blue-500/50 transition-all">
                    <h3 class="text-blue-400 font-bold uppercase text-[10px] tracking-widest mb-2">Economy</h3>
                    <p class="text-white font-semibold mb-1">API Monetization</p>
                    <p class="text-slate-400 text-sm">Manage plans, quotas, and subscription billing.</p>
                </div>
                <div class="group p-6 rounded-2xl bg-slate-900/50 border border-white/5 hover:border-blue-500/50 transition-all">
                    <h3 class="text-blue-400 font-bold uppercase text-[10px] tracking-widest mb-2">Automation</h3>
                    <p class="text-white font-semibold mb-1">SDK Automation</p>
                    <p class="text-slate-400 text-sm">Zero-effort multi-language client generation.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="relative py-32 overflow-hidden">
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-orange-500/10 blur-[120px] -z-10"></div>
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto text-center">
            <div class="flex justify-center mb-8">
                <svg class="w-12 h-12 text-orange-500/40" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M14.017 21L14.017 18C14.017 16.8954 14.9124 16 16.017 16H19.017C19.5693 16 20.017 15.5523 20.017 15V9C20.017 8.44772 19.5693 8 19.017 8H15.017C14.4647 8 14.017 8.44772 14.017 9V12C14.017 12.5523 13.5693 13 13.017 13H11.017C10.4647 13 10.017 12.5523 10.017 12V9C10.017 6.23858 12.2556 4 15.017 4H19.017C21.7784 4 24.017 6.23858 24.017 9V15C24.017 18.3137 21.3307 21 18.017 21H14.017ZM0.0170898 21L0.0170898 18C0.0170898 16.8954 0.91252 16 2.01709 16H5.01709C5.56937 16 6.01709 15.5523 6.01709 15V9C6.01709 8.44772 5.56937 8 5.01709 8H1.01709C0.464804 8 0.0170898 8.44772 0.0170898 9V12C0.0170898 12.5523 -0.430626 13 -0.98291 13H-2.98291C-3.5352 13 -3.98291 12.5523 -3.98291 12V9C-3.98291 6.23858 -1.74433 4 1.01709 4H5.01709C7.77851 4 10.0171 6.23858 10.0171 9V15C10.0171 18.3137 7.3308 21 4.01709 21H0.0170898Z" />
                </svg>
            </div>
            <blockquote class="text-3xl md:text-5xl font-bold text-white leading-tight mb-10 tracking-tight italic">
                "Fusio turns business logic into <span class="text-orange-500">universal capabilities</span> for the web, mobile, and AI agents."
            </blockquote>
            <div class="flex items-center justify-center gap-4">
                <div class="text-left">
                    <div class="text-lg font-bold text-white">Christoph Kappestein</div>
                    <div class="text-sm text-slate-500 uppercase tracking-widest font-medium">Developer of Fusio</div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-slate-950 py-24 relative overflow-hidden">
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-full h-full bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] from-orange-500/5 via-transparent to-transparent blur-3xl pointer-events-none"></div>
    <div class="container mx-auto px-6 relative z-10">
        <div class="max-w-3xl mx-auto text-center mb-16">
            <h2 class="text-3xl md:text-5xl font-bold text-white mb-6">See Fusio in <span class="text-orange-500">Action.</span></h2>
            <p class="text-slate-400 text-lg">
                Watch how to build a production-ready API from scratch, generate SDKs, and integrate with AI agents using the Model Context Protocol.
            </p>
        </div>
        <div class="max-w-5xl mx-auto relative group">
            <div class="absolute -inset-4 bg-orange-500/20 rounded-[2.5rem] blur-2xl opacity-0 group-hover:opacity-100 transition duration-700 pointer-events-none"></div>
            <div class="relative bg-slate-900 border border-white/10 p-2 rounded-[2rem] shadow-2xl overflow-hidden">
                <div class="aspect-video rounded-[1.5rem] overflow-hidden bg-black">
                    <iframe
                            class="w-full h-full"
                            src="https://www.youtube.com/embed/Iz-VmMYviaY?si=uV6p533W89u-rM-X"
                            title="Fusio Introduction Video"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin"
                            allowfullscreen>
                    </iframe>
                </div>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-8">
                <div class="text-center">
                    <span class="block text-white font-bold">13 Min</span>
                    <span class="text-xs text-slate-400 uppercase tracking-widest">Full Walkthrough</span>
                </div>
                <div class="text-center">
                    <span class="block text-white font-bold">SDK Gen</span>
                    <span class="text-xs text-slate-400 uppercase tracking-widest">Live Demo</span>
                </div>
                <div class="text-center">
                    <span class="block text-white font-bold">MCP Server</span>
                    <span class="text-xs text-slate-400 uppercase tracking-widest">AI Integration</span>
                </div>
                <div class="text-center">
                    <span class="block text-white font-bold">PHP/JS/Python</span>
                    <span class="text-xs text-slate-400 uppercase tracking-widest">Language Support</span>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-24 border-t border-white/5 bg-slate-950/20">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4">
            <a href="https://youtube.com/@FusioAPI" target="_blank" class="group relative p-8 rounded-3xl bg-slate-900/40 border border-white/5 hover:border-red-500/30 transition-all duration-500 overflow-hidden">
                <div class="relative z-10">
                    <div class="w-16 h-16 mb-6 rounded-2xl bg-slate-950/50 border border-white/5 p-3 flex items-center justify-center group-hover:scale-110 group-hover:-translate-y-1 transition-all duration-300">
                        <img src="<?php echo $base; ?>/img/youtube-64.png" alt="YouTube" class="w-full h-full object-contain filter grayscale group-hover:grayscale-0 transition-all">
                    </div>
                    <span class="block text-[10px] font-black text-slate-500 uppercase tracking-widest group-hover:text-white transition-colors">YouTube</span>
                    <span class="block text-[9px] font-mono text-slate-700 mt-1 uppercase">@FusioAPI</span>
                </div>
            </a>
            <a href="https://github.com/apioo/fusio" target="_blank" class="group relative p-8 rounded-3xl bg-slate-900/40 border border-white/5 hover:border-white/20 transition-all duration-500 overflow-hidden">
                <div class="relative z-10">
                    <div class="w-16 h-16 mb-6 rounded-2xl bg-slate-950/50 border border-white/5 p-3 flex items-center justify-center group-hover:scale-110 group-hover:-translate-y-1 transition-all duration-300">
                        <img src="<?php echo $base; ?>/img/github-64.png" alt="GitHub" class="w-full h-full object-contain filter grayscale group-hover:grayscale-0 transition-all">
                    </div>
                    <span class="block text-[10px] font-black text-slate-500 uppercase tracking-widest group-hover:text-white transition-colors">GitHub</span>
                    <span class="block text-[9px] font-mono text-slate-700 mt-1 uppercase">apioo/fusio</span>
                </div>
            </a>
            <a href="https://twitter.com/FusioAPI" target="_blank" class="group relative p-8 rounded-3xl bg-slate-900/40 border border-white/5 hover:border-sky-400/30 transition-all duration-500 overflow-hidden">
                <div class="relative z-10">
                    <div class="w-16 h-16 mb-6 rounded-2xl bg-slate-950/50 border border-white/5 p-3 flex items-center justify-center group-hover:scale-110 group-hover:-translate-y-1 transition-all duration-300">
                        <img src="<?php echo $base; ?>/img/twitter-64.png" alt="Twitter" class="w-full h-full object-contain filter grayscale group-hover:grayscale-0 transition-all">
                    </div>
                    <span class="block text-[10px] font-black text-slate-500 uppercase tracking-widest group-hover:text-white transition-colors">Twitter</span>
                    <span class="block text-[9px] font-mono text-slate-700 mt-1 uppercase">@FusioAPI</span>
                </div>
            </a>
            <a href="https://bsky.app/profile/fusioapi.bsky.social" target="_blank" class="group relative p-8 rounded-3xl bg-slate-900/40 border border-white/5 hover:border-blue-500/30 transition-all duration-500 overflow-hidden">
                <div class="relative z-10">
                    <div class="w-16 h-16 mb-6 rounded-2xl bg-slate-950/50 border border-white/5 p-3 flex items-center justify-center group-hover:scale-110 group-hover:-translate-y-1 transition-all duration-300">
                        <img src="<?php echo $base; ?>/img/bluesky-64.png" alt="BlueSky" class="w-full h-full object-contain filter grayscale group-hover:grayscale-0 transition-all">
                    </div>
                    <span class="block text-[10px] font-black text-slate-500 uppercase tracking-widest group-hover:text-white transition-colors">BlueSky</span>
                    <span class="block text-[9px] font-mono text-slate-700 mt-1 uppercase">fusioapi.bsky</span>
                </div>
            </a>
            <a href="https://fosstodon.org/@fusio" target="_blank" class="group relative p-8 rounded-3xl bg-slate-900/40 border border-white/5 hover:border-indigo-400/30 transition-all duration-500 overflow-hidden">
                <div class="relative z-10">
                    <div class="w-16 h-16 mb-6 rounded-2xl bg-slate-950/50 border border-white/5 p-3 flex items-center justify-center group-hover:scale-110 group-hover:-translate-y-1 transition-all duration-300">
                        <img src="<?php echo $base; ?>/img/mastodon-64.png" alt="Fosstodon" class="w-full h-full object-contain filter grayscale group-hover:grayscale-0 transition-all">
                    </div>
                    <span class="block text-[10px] font-black text-slate-500 uppercase tracking-widest group-hover:text-white transition-colors">Fosstodon</span>
                    <span class="block text-[9px] font-mono text-slate-700 mt-1 uppercase">@fusio</span>
                </div>
            </a>
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
