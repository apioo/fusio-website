<?php include(__DIR__ . '/inc/header.php'); ?>

<?php include(__DIR__ . '/inc/sub_header.php'); ?>

<section class="py-20 border-b border-white/5 bg-slate-950/50">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="group p-8 rounded-[2.5rem] bg-slate-900/40 border border-white/5 hover:border-orange-500/30 transition-all duration-500">
                <div class="flex items-center gap-6 mb-8">
                    <div class="w-14 h-14 bg-slate-950 rounded-2xl flex items-center justify-center border border-white/10 group-hover:border-orange-500/50 transition-colors">
                        <span class="text-xl font-mono font-bold text-orange-500">Ph</span>
                    </div>
                    <div>
                        <h2 class="text-2xl font-bold text-white">PHP Worker</h2>
                        <p class="text-xs text-slate-500 uppercase tracking-widest font-mono">PHP Runtime</p>
                    </div>
                </div>
                <p class="text-slate-400 mb-10 leading-relaxed">
                    Worker implementation written in PHP.
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
                        <h2 class="text-2xl font-bold text-white">JavaScript Worker</h2>
                        <p class="text-xs text-slate-500 uppercase tracking-widest font-mono">Node.js Runtime</p>
                    </div>
                </div>
                <p class="text-slate-400 mb-10 leading-relaxed">
                    Worker implementation written in JavaScript running on NodeJS.
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
                        <h2 class="text-2xl font-bold text-white">Python Worker</h2>
                        <p class="text-xs text-slate-500 uppercase tracking-widest font-mono">Python Runtime</p>
                    </div>
                </div>
                <p class="text-slate-400 mb-10 leading-relaxed">
                    Worker implementation written in Python.
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
                        <h2 class="text-2xl font-bold text-white">Java Worker</h2>
                        <p class="text-xs text-slate-500 uppercase tracking-widest font-mono">JVM / Groovy Runtime</p>
                    </div>
                </div>
                <p class="text-slate-400 mb-10 leading-relaxed">
                    Worker implementation written in Java.
                </p>
                <div class="flex gap-4">
                    <a href="https://github.com/apioo/fusio-worker-java" target="_blank" class="flex-1 text-center py-3 bg-white/5 hover:bg-white/10 rounded-xl text-xs font-bold border border-white/5 transition">GitHub</a>
                    <a href="https://hub.docker.com/r/fusio/worker-java" target="_blank" class="flex-1 text-center py-3 bg-blue-600 hover:bg-blue-500 text-white rounded-xl text-xs font-bold transition shadow-lg shadow-blue-600/20">Docker</a>
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
