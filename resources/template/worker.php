<?php include(__DIR__ . '/inc/header.php'); ?>

<?php include(__DIR__ . '/inc/sub_header.php'); ?>

<section class="py-20 pb-32">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

            <div class="group p-8 rounded-[2.5rem] bg-slate-900/40 border border-white/5 hover:border-orange-500/30 transition-all duration-500">
                <div class="flex items-center gap-6 mb-8">
                    <div class="w-14 h-14 bg-slate-950 rounded-2xl flex items-center justify-center border border-white/10 group-hover:border-orange-500/50 transition-colors">
                        <span class="text-xl font-mono font-bold text-orange-500">Ph</span>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold text-white">PHP Worker</h3>
                        <p class="text-xs text-slate-500 uppercase tracking-widest font-mono">Native Runtime</p>
                    </div>
                </div>
                <p class="text-slate-400 mb-10 leading-relaxed">
                    The reference implementation written in PHP. Provides the highest level of integration with the Fusio core engine.
                </p>
                <div class="flex gap-4">
                    <a href="https://github.com/apioo/fusio-worker-php" target="_blank" class="flex-1 text-center py-3 bg-white/5 hover:bg-white/10 rounded-xl text-xs font-bold border border-white/5 transition">GitHub</a>
                    <a href="https://hub.docker.com/r/fusio/worker-php" target="_blank" class="flex-1 text-center py-3 bg-blue-600 hover:bg-blue-500 text-white rounded-xl text-xs font-bold transition shadow-lg shadow-blue-600/20">Docker</a>
                </div>
            </div>

            <div class="group p-8 rounded-[2.5rem] bg-slate-900/40 border border-white/5 hover:border-yellow-500/30 transition-all duration-500">
                <div class="flex items-center gap-6 mb-8">
                    <div class="w-14 h-14 bg-slate-950 rounded-2xl flex items-center justify-center border border-white/10 group-hover:border-yellow-500/50 transition-colors">
                        <span class="text-xl font-mono font-bold text-yellow-500">Js</span>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold text-white">JavaScript Worker</h3>
                        <p class="text-xs text-slate-500 uppercase tracking-widest font-mono">Node.js Runtime</p>
                    </div>
                </div>
                <p class="text-slate-400 mb-10 leading-relaxed">
                    Enables high-performance asynchronous action logic using the Node.js ecosystem and NPM packages.
                </p>
                <div class="flex gap-4">
                    <a href="https://github.com/apioo/fusio-worker-javascript" target="_blank" class="flex-1 text-center py-3 bg-white/5 hover:bg-white/10 rounded-xl text-xs font-bold border border-white/5 transition">GitHub</a>
                    <a href="https://hub.docker.com/r/fusio/worker-javascript" target="_blank" class="flex-1 text-center py-3 bg-blue-600 hover:bg-blue-500 text-white rounded-xl text-xs font-bold transition shadow-lg shadow-blue-600/20">Docker</a>
                </div>
            </div>

            <div class="group p-8 rounded-[2.5rem] bg-slate-900/40 border border-white/5 hover:border-blue-400/30 transition-all duration-500">
                <div class="flex items-center gap-6 mb-8">
                    <div class="w-14 h-14 bg-slate-950 rounded-2xl flex items-center justify-center border border-white/10 group-hover:border-blue-400/50 transition-colors">
                        <span class="text-xl font-mono font-bold text-blue-400">Py</span>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold text-white">Python Worker</h3>
                        <p class="text-xs text-slate-500 uppercase tracking-widest font-mono">CPython Runtime</p>
                    </div>
                </div>
                <p class="text-slate-400 mb-10 leading-relaxed">
                    Perfect for AI integration and data science tasks. Allows you to use Python libraries directly within your API actions.
                </p>
                <div class="flex gap-4">
                    <a href="https://github.com/apioo/fusio-worker-python" target="_blank" class="flex-1 text-center py-3 bg-white/5 hover:bg-white/10 rounded-xl text-xs font-bold border border-white/5 transition">GitHub</a>
                    <a href="https://hub.docker.com/r/fusio/worker-python" target="_blank" class="flex-1 text-center py-3 bg-blue-600 hover:bg-blue-500 text-white rounded-xl text-xs font-bold transition shadow-lg shadow-blue-600/20">Docker</a>
                </div>
            </div>

            <div class="group p-8 rounded-[2.5rem] bg-slate-900/40 border border-white/5 hover:border-red-500/30 transition-all duration-500">
                <div class="flex items-center gap-6 mb-8">
                    <div class="w-14 h-14 bg-slate-950 rounded-2xl flex items-center justify-center border border-white/10 group-hover:border-red-500/50 transition-colors">
                        <span class="text-xl font-mono font-bold text-red-500">Jv</span>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold text-white">Java Worker</h3>
                        <p class="text-xs text-slate-500 uppercase tracking-widest font-mono">JVM / Groovy Runtime</p>
                    </div>
                </div>
                <p class="text-slate-400 mb-10 leading-relaxed">
                    Enterprise-grade runtime for heavy lifting. Supports Java and Groovy for complex business logic and legacy integrations.
                </p>
                <div class="flex gap-4">
                    <a href="https://github.com/apioo/fusio-worker-java" target="_blank" class="flex-1 text-center py-3 bg-white/5 hover:bg-white/10 rounded-xl text-xs font-bold border border-white/5 transition">GitHub</a>
                    <a href="https://hub.docker.com/r/fusio/worker-java" target="_blank" class="flex-1 text-center py-3 bg-blue-600 hover:bg-blue-500 text-white rounded-xl text-xs font-bold transition shadow-lg shadow-blue-600/20">Docker</a>
                </div>
            </div>

        </div>
    </div>
</section>

<div class="container">
  <div class="row">
    <div class="col text-end">
      <a href="https://github.com/apioo/fusio-website/blob/main/resources/template/<?php echo pathinfo(__FILE__, PATHINFO_BASENAME); ?>"><i class="bi bi-pen-fill"></i> Edit this page</a>
    </div>
  </div>
</div>

<?php include(__DIR__ . '/inc/footer.php'); ?>
