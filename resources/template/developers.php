<?php include(__DIR__ . '/inc/header.php'); ?>

<?php include(__DIR__ . '/inc/sub_header.php'); ?>

<section class="py-20 border-b border-white/5 bg-slate-950/50">
    <div class="container mx-auto px-6">
        <h2 class="text-xs font-bold text-orange-500 uppercase tracking-[0.3em] mb-12">01. Get the Core</h2>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <div class="p-8 rounded-[2rem] glass-card flex flex-col justify-between">
                <div>
                    <h3 class="text-2xl font-bold text-white mb-2">Release</h3>
                    <p class="text-sm text-slate-400 mb-6">Standard archive installation for traditional hosting.</p>
                    <div class="space-y-2 mb-8 text-sm font-mono">
                        <div class="flex justify-between"><span class="text-slate-600">Version</span> <span class="text-orange-400"><?php echo $tagName; ?></span></div>
                        <div class="flex justify-between"><span class="text-slate-600">Size</span> <span class="text-slate-300"><?php echo round($assetSize / 1024 / 1024, 2); ?> MiB</span></div>
                        <div class="flex justify-between"><span class="text-slate-600">Date</span> <span class="text-slate-300"><?php echo $publishedAt; ?></span></div>
                    </div>
                </div>
                <a href="<?php echo $htmlUrl; ?>"
                   class="w-full py-4 bg-orange-500 text-slate-950 hover:bg-orange-300 hover:shadow-orange-500/40 rounded-2xl text-center font-bold transition-all shadow-lg shadow-orange-500/20 inline-block">
                    Download .zip
                </a>
            </div>
            <div class="p-8 rounded-[2rem] glass-card flex flex-col justify-between">
                <div>
                    <h3 class="text-2xl font-bold text-white mb-2">Composer</h3>
                    <p class="text-sm text-slate-400 mb-6">Install as a PHP project for full customization.</p>
                    <div class="bg-black/50 p-4 rounded-xl border border-white/5 font-mono text-xs text-orange-400 mb-8">
                        composer create-project fusio/fusio
                    </div>
                </div>
                <a href="https://packagist.org/packages/fusio/fusio" class="w-full py-4 bg-white/5 hover:bg-white/10 text-white border border-white/10 rounded-2xl text-center font-bold transition">View on Packagist</a>
            </div>
            <div class="p-8 rounded-[2rem] glass-card flex flex-col justify-between border-blue-500/20">
                <div>
                    <h3 class="text-2xl font-bold text-white mb-2 text-blue-400">Docker</h3>
                    <p class="text-sm text-slate-400 mb-6">The fastest way to spin up a production-ready instance.</p>
                    <p class="text-xs text-slate-400 leading-relaxed mb-8">Based on php:8.4-apache and essential PHP extensions.</p>
                </div>
                <a href="https://hub.docker.com/r/fusio/fusio" class="w-full py-4 bg-blue-600 hover:bg-blue-500 text-white rounded-2xl text-center font-bold transition shadow-lg shadow-blue-600/20">Docker Hub</a>
            </div>
        </div>
    </div>
</section>

<section class="py-20 bg-slate-950">
    <div class="container mx-auto px-6">
        <div class="flex flex-col lg:flex-row justify-between items-end gap-8 mb-12">
            <div class="max-w-2xl">
                <h2 class="text-xs font-bold text-emerald-400 uppercase tracking-[0.3em] mb-6">02. Software Development Kits</h2>
                <p class="text-slate-400">Connect with the Fusio API using our type-safe SDKs.</p>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <div class="group p-6 rounded-2xl bg-slate-900/40 border border-white/5 hover:border-orange-500/30 transition-all">
                <div class="flex items-center gap-4 mb-6">
                    <div class="h-12 w-10 bg-slate-950 rounded-lg border border-white/10 flex items-center justify-center p-1.5 group-hover:border-orange-500/30 transition-all overflow-hidden flex-shrink-0">
                        <img src="<?php echo $base; ?>/img/sdk/csharp.png" alt="PHP" class="w-full h-full object-contain filter grayscale group-hover:grayscale-0 transition-all duration-500">
                    </div>
                    <h3 class="font-bold text-white">C# SDK</h3>
                </div>
                <div class="grid grid-cols-2 gap-2">
                    <a href="https://github.com/apioo/fusio-sdk-csharp" class="py-2 bg-white/5 hover:bg-white/10 text-[10px] text-center rounded-lg font-bold uppercase tracking-widest transition">GitHub</a>
                    <a href="https://www.nuget.org/packages/Fusio.SDK" class="py-2 bg-white/5 hover:bg-white/10 text-[10px] text-center rounded-lg font-bold uppercase tracking-widest transition">NuGet</a>
                </div>
            </div>
            <div class="group p-6 rounded-2xl bg-slate-900/40 border border-white/5 hover:border-orange-500/30 transition-all">
                <div class="flex items-center gap-4 mb-6">
                    <div class="h-12 w-10 bg-slate-950 rounded-lg border border-white/10 flex items-center justify-center p-1.5 group-hover:border-orange-500/30 transition-all overflow-hidden flex-shrink-0">
                        <img src="<?php echo $base; ?>/img/sdk/go.png" alt="PHP" class="w-full h-full object-contain filter grayscale group-hover:grayscale-0 transition-all duration-500">
                    </div>
                    <h3 class="font-bold text-white">Go SDK</h3>
                </div>
                <div class="grid grid-cols-2 gap-2">
                    <a href="https://github.com/apioo/fusio-sdk-go" class="py-2 bg-white/5 hover:bg-white/10 text-[10px] text-center rounded-lg font-bold uppercase tracking-widest transition">GitHub</a>
                </div>
            </div>
            <div class="group p-6 rounded-2xl bg-slate-900/40 border border-white/5 hover:border-orange-500/30 transition-all">
                <div class="flex items-center gap-4 mb-6">
                    <div class="h-12 w-10 bg-slate-950 rounded-lg border border-white/10 flex items-center justify-center p-1.5 group-hover:border-orange-500/30 transition-all overflow-hidden flex-shrink-0">
                        <img src="<?php echo $base; ?>/img/sdk/java.png" alt="PHP" class="w-full h-full object-contain filter grayscale group-hover:grayscale-0 transition-all duration-500">
                    </div>
                    <h3 class="font-bold text-white">Java SDK</h3>
                </div>
                <div class="grid grid-cols-2 gap-2">
                    <a href="https://github.com/apioo/fusio-sdk-java" class="py-2 bg-white/5 hover:bg-white/10 text-[10px] text-center rounded-lg font-bold uppercase tracking-widest transition">GitHub</a>
                    <a href="https://central.sonatype.com/artifact/org.fusio-project/sdk" class="py-2 bg-white/5 hover:bg-white/10 text-[10px] text-center rounded-lg font-bold uppercase tracking-widest transition">Sonatype</a>
                </div>
            </div>
            <div class="group p-6 rounded-2xl bg-slate-900/40 border border-white/5 hover:border-yellow-500/30 transition-all">
                <div class="flex items-center gap-4 mb-6">
                    <div class="h-12 w-10 bg-slate-950 rounded-lg border border-white/10 flex items-center justify-center p-1.5 group-hover:border-yellow-500/30 transition-all overflow-hidden flex-shrink-0">
                        <img src="<?php echo $base; ?>/img/sdk/typescript.png" alt="JS" class="w-full h-full object-contain filter grayscale group-hover:grayscale-0 transition-all duration-500">
                    </div>
                    <h3 class="font-bold text-white">JavaScript</h3>
                </div>
                <div class="grid grid-cols-2 gap-2">
                    <a href="https://github.com/apioo/fusio-sdk-javascript" class="py-2 bg-white/5 hover:bg-white/10 text-[10px] text-center rounded-lg font-bold uppercase tracking-widest transition">GitHub</a>
                    <a href="https://www.npmjs.com/package/fusio-sdk" class="py-2 bg-white/5 hover:bg-white/10 text-[10px] text-center rounded-lg font-bold uppercase tracking-widest transition">NPM</a>
                </div>
            </div>
            <div class="group p-6 rounded-2xl bg-slate-900/40 border border-white/5 hover:border-orange-500/30 transition-all">
                <div class="flex items-center gap-4 mb-6">
                    <div class="h-12 w-10 bg-slate-950 rounded-lg border border-white/10 flex items-center justify-center p-1.5 group-hover:border-orange-500/30 transition-all overflow-hidden flex-shrink-0">
                        <img src="<?php echo $base; ?>/img/sdk/php.png" alt="PHP" class="w-full h-full object-contain filter grayscale group-hover:grayscale-0 transition-all duration-500">
                    </div>
                    <h3 class="font-bold text-white">PHP SDK</h3>
                </div>
                <div class="grid grid-cols-2 gap-2">
                    <a href="https://github.com/apioo/fusio-sdk-php" class="py-2 bg-white/5 hover:bg-white/10 text-[10px] text-center rounded-lg font-bold uppercase tracking-widest transition">GitHub</a>
                    <a href="https://packagist.org/packages/fusio/sdk" class="py-2 bg-white/5 hover:bg-white/10 text-[10px] text-center rounded-lg font-bold uppercase tracking-widest transition">Packagist</a>
                </div>
            </div>
            <div class="group p-6 rounded-2xl bg-slate-900/40 border border-white/5 hover:border-blue-400/30 transition-all">
                <div class="flex items-center gap-4 mb-6">
                    <div class="h-12 w-10 bg-slate-950 rounded-lg border border-white/10 flex items-center justify-center p-1.5 group-hover:border-blue-400/30 transition-all overflow-hidden flex-shrink-0">
                        <img src="<?php echo $base; ?>/img/sdk/python.png" alt="Python" class="w-full h-full object-contain filter grayscale group-hover:grayscale-0 transition-all duration-500">
                    </div>
                    <h3 class="font-bold text-white">Python SDK</h3>
                </div>
                <div class="grid grid-cols-2 gap-2">
                    <a href="https://github.com/apioo/fusio-sdk-python" class="py-2 bg-white/5 hover:bg-white/10 text-[10px] text-center rounded-lg font-bold uppercase tracking-widest transition">GitHub</a>
                    <a href="https://pypi.org/project/fusio-sdk/" class="py-2 bg-white/5 hover:bg-white/10 text-[10px] text-center rounded-lg font-bold uppercase tracking-widest transition">PyPi</a>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="py-20 bg-slate-950/80">
    <div class="container mx-auto px-6">
        <div class="flex items-center gap-4 mb-12">
            <h2 class="text-xs font-bold text-slate-400 uppercase tracking-[0.3em]">03. API Specifications</h2>
            <div class="h-px flex-grow bg-white/5"></div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="group p-8 rounded-[2.5rem] bg-slate-900/50 border border-white/5 hover:border-orange-500/30 transition-all duration-500">
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-2 h-2 rounded-full bg-orange-500 animate-pulse"></div>
                    <h3 class="text-xl font-bold text-white tracking-tight">Backend API</h3>
                </div>
                <p class="text-sm text-slate-400 mb-8 leading-relaxed">
                    The administrative interface. Use this to automate your Fusio configuration, manage actions, and handle user permissions.
                </p>
                <div class="space-y-3">
                    <a href="https://www.fusio-project.org/api/backend" target="_blank" class="flex justify-between items-center p-3 rounded-xl bg-white/5 hover:bg-orange-500/10 text-xs font-bold text-orange-400 transition-colors border border-white/5">
                        Interactive ReDoc <span>→</span>
                    </a>
                    <a href="https://demo.fusio-project.org/system/generator/spec-openapi?filter=backend" class="flex justify-between items-center p-3 rounded-xl bg-transparent hover:bg-white/5 text-[10px] text-slate-400 hover:text-white transition-colors uppercase tracking-widest font-bold">
                        OpenAPI Spec (JSON) <span>↓</span>
                    </a>
                </div>
            </div>
            <div class="group p-8 rounded-[2.5rem] bg-slate-900/50 border border-white/5 hover:border-blue-500/30 transition-all duration-500">
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-2 h-2 rounded-full bg-blue-500"></div>
                    <h3 class="text-xl font-bold text-white tracking-tight">Consumer API</h3>
                </div>
                <p class="text-sm text-slate-400 mb-8 leading-relaxed">
                    The public-facing portal API. Handles developer registration, app management, and the subscription lifecycle.
                </p>
                <div class="space-y-3">
                    <a href="https://www.fusio-project.org/api/consumer" target="_blank" class="flex justify-between items-center p-3 rounded-xl bg-white/5 hover:bg-blue-500/10 text-xs font-bold text-blue-400 transition-colors border border-white/5">
                        Interactive ReDoc <span>→</span>
                    </a>
                    <a href="https://demo.fusio-project.org/system/generator/spec-openapi?filter=consumer" class="flex justify-between items-center p-3 rounded-xl bg-transparent hover:bg-white/5 text-[10px] text-slate-400 hover:text-white transition-colors uppercase tracking-widest font-bold">
                        OpenAPI Spec (JSON) <span>↓</span>
                    </a>
                </div>
            </div>
            <div class="group p-8 rounded-[2.5rem] bg-slate-900/50 border border-white/5 hover:border-emerald-500/30 transition-all duration-500">
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-2 h-2 rounded-full bg-emerald-500"></div>
                    <h3 class="text-xl font-bold text-white tracking-tight">System API</h3>
                </div>
                <p class="text-sm text-slate-400 mb-8 leading-relaxed">
                    Low-level health checks and system generation. Access core metadata and versioning information for your instance.
                </p>
                <div class="space-y-3">
                    <a href="https://www.fusio-project.org/api/system" target="_blank" class="flex justify-between items-center p-3 rounded-xl bg-white/5 hover:bg-emerald-500/10 text-xs font-bold text-emerald-400 transition-colors border border-white/5">
                        Interactive ReDoc <span>→</span>
                    </a>
                    <a href="https://demo.fusio-project.org/system/generator/spec-openapi?filter=system" class="flex justify-between items-center p-3 rounded-xl bg-transparent hover:bg-white/5 text-[10px] text-slate-400 hover:text-white transition-colors uppercase tracking-widest font-bold">
                        OpenAPI Spec (JSON) <span>↓</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-20 bg-slate-950 pb-32">
    <div class="container mx-auto px-6">
        <div class="flex items-center gap-4 mb-12">
            <h2 class="text-xs font-bold text-slate-400 uppercase tracking-[0.3em]">04. Developer Tools</h2>
            <div class="h-px flex-grow bg-white/5"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-5xl">

            <div class="group p-8 rounded-[2.5rem] bg-gradient-to-b from-slate-900/50 to-slate-950 border border-white/5 hover:border-blue-500/30 transition-all duration-500">
                <div class="flex items-start justify-between mb-8">
                    <div class="w-16 h-16 bg-blue-500/10 rounded-2xl flex items-center justify-center text-blue-400 group-hover:scale-110 transition-transform">
                        <svg class="w-9 h-9" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6-1.6 1.6a1 1 0 0 0 1.4 1.4l2.3-2.3a1 1 0 0 0 0-1.4l-2.3-2.3a1 1 0 0 0-1.4 0zM9.3 17.7a1 1 0 0 0 0-1.4L7.7 14.7l1.6-1.6a1 1 0 0 0-1.4-1.4l-2.3 2.3a1 1 0 0 0 0 1.4l2.3 2.3a1 1 0 0 0 1.4 0zM10.3 4.1a1 1 0 0 0-1.2.7l-4 14a1 1 0 1 0 1.9.6l4-14a1 1 0 0 0-.7-1.3z" stroke-width="1.5" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <span class="text-[10px] font-bold text-slate-600 group-hover:text-blue-500 tracking-widest uppercase">IDE Extension</span>
                </div>
                <h3 class="text-2xl font-bold text-white mb-3">VS Code Plugin</h3>
                <p class="text-sm text-slate-400 mb-8 leading-relaxed">
                    Develop and debug Fusio actions directly within Visual Studio Code. Streamline your workflow with syntax highlighting and direct API synchronization.
                </p>
                <div class="flex gap-3">
                    <a href="https://marketplace.visualstudio.com/items?itemName=Fusio.fusio" target="_blank" class="flex-1 py-3 bg-blue-600 hover:bg-blue-500 text-white rounded-xl text-xs font-bold text-center transition shadow-lg shadow-blue-600/20">Marketplace</a>
                    <a href="https://github.com/apioo/fusio-tools-vscode" target="_blank" class="px-4 py-3 bg-white/5 hover:bg-white/10 text-slate-300 rounded-xl border border-white/5 transition">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0C5.37 0 0 5.37 0 12c0 5.31 3.435 9.795 8.205 11.385.6.105.825-.255.825-.57V20.7c-3.33.72-4.035-1.605-4.035-1.605-.54-1.38-1.32-1.74-1.32-1.74-1.08-.735.09-.72.09-.72 1.201.084 1.83 1.234 1.83 1.234 1.05 1.815 2.775 1.29 3.45.99.105-.765.42-1.29.765-1.59-2.67-.3-5.46-1.335-5.46-5.91 0-1.305.465-2.37 1.23-3.21-.12-.3-.54-1.53.12-3.18 0 0 1.005-.315 3.3 1.23.96-.27 1.98-.405 3-.405s2.04.135 3 .405c2.295-1.56 3.3-1.23 3.3-1.23.66 1.65.24 2.88.12 3.18.765.84 1.23 1.905 1.23 3.21 0 4.59-2.79 5.595-5.475 5.895.42.36.81 1.095.81 2.22v3.285c0 .315.21.69.825.57C20.565 21.795 24 17.31 24 12c0-6.63-5.37-12-12-12z"/></svg>
                    </a>
                </div>
            </div>

            <div class="group p-8 rounded-[2.5rem] bg-gradient-to-b from-slate-900/50 to-slate-950 border border-white/5 hover:border-emerald-500/30 transition-all duration-500">
                <div class="flex items-start justify-between mb-8">
                    <div class="w-16 h-16 bg-emerald-500/10 rounded-2xl flex items-center justify-center text-emerald-400 group-hover:scale-110 transition-transform">
                        <svg class="w-9 h-9" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <span class="text-[10px] font-bold text-slate-600 group-hover:text-emerald-500 tracking-widest uppercase">Desktop App</span>
                </div>
                <h3 class="text-2xl font-bold text-white mb-3">Electron App</h3>
                <p class="text-sm text-slate-400 mb-8 leading-relaxed">
                    A standalone desktop version of the Fusio backend. Ideal for managing local development instances or private network deployments with a native app experience.
                </p>
                <div class="flex gap-3">
                    <a href="https://github.com/apioo/fusio-tools-electron" target="_blank" class="flex-1 py-3 bg-emerald-700 hover:bg-emerald-500 text-white rounded-xl text-xs font-bold text-center transition shadow-lg shadow-emerald-500/20">View on GitHub</a>
                    <a href="https://github.com/apioo/fusio-tools-electron/releases" target="_blank" class="px-4 py-3 bg-white/5 hover:bg-white/10 text-slate-300 rounded-xl border border-white/5 transition">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </a>
                </div>
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
                   class="group/link flex items-center gap-2 text-[10px] font-black text-slate-400 hover:text-orange-500 transition-colors uppercase tracking-widest">
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
