<?php include(__DIR__ . '/inc/header.php'); ?>

<?php include(__DIR__ . '/inc/sub_header.php'); ?>

<section class="py-20 border-b border-white/5 bg-slate-950/50">
    <div class="container mx-auto px-6">
        <div>
            <div class="flex items-center gap-4 mb-8">
                <h2 class="text-xs font-bold text-emerald-400 uppercase tracking-[0.3em]">CLI & Backend Samples</h2>
                <div class="h-px flex-grow bg-white/5"></div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="group p-6 rounded-2xl bg-slate-900/30 border border-white/5 hover:bg-slate-900/60 transition-all">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="h-12 w-10 bg-slate-950 rounded-lg border border-white/10 flex items-center justify-center p-1.5 group-hover:border-orange-500/30 transition-all overflow-hidden flex-shrink-0">
                            <img src="<?php echo $base; ?>/img/sdk/php.png" alt="PHP Logo" class="w-full h-full object-contain filter grayscale group-hover:grayscale-0 transition-all duration-500">
                        </div>
                        <h4 class="font-bold text-slate-200 group-hover:text-white">PHP CLI</h4>
                    </div>
                    <a href="https://github.com/apioo/fusio-sample-php-cli" target="_blank" class="block text-center py-2 bg-white/5 hover:bg-white/10 rounded-lg text-[10px] font-bold tracking-widest uppercase transition border border-white/5">GitHub Repository</a>
                </div>
                <div class="group p-6 rounded-2xl bg-slate-900/30 border border-white/5 hover:bg-slate-900/60 transition-all">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="h-12 w-10 bg-slate-950 rounded-lg border border-white/10 flex items-center justify-center p-1.5 group-hover:border-orange-500/30 transition-all overflow-hidden flex-shrink-0">
                            <img src="<?php echo $base; ?>/img/sdk/python.png" alt="Python Logo" class="w-full h-full object-contain filter grayscale group-hover:grayscale-0 transition-all duration-500">
                        </div>
                        <h4 class="font-bold text-slate-200 group-hover:text-white">Python CLI</h4>
                    </div>
                    <a href="https://github.com/apioo/fusio-sample-python-cli" target="_blank" class="block text-center py-2 bg-white/5 hover:bg-white/10 rounded-lg text-[10px] font-bold tracking-widest uppercase transition border border-white/5">GitHub Repository</a>
                </div>
                <div class="group p-6 rounded-2xl bg-slate-900/30 border border-white/5 hover:bg-slate-900/60 transition-all">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="h-12 w-10 bg-slate-950 rounded-lg border border-white/10 flex items-center justify-center p-1.5 group-hover:border-orange-500/30 transition-all overflow-hidden flex-shrink-0">
                            <img src="<?php echo $base; ?>/img/sdk/go.png" alt="Go Logo" class="w-full h-full object-contain filter grayscale group-hover:grayscale-0 transition-all duration-500">
                        </div>
                        <h4 class="font-bold text-slate-200 group-hover:text-white">Go CLI</h4>
                    </div>
                    <a href="https://github.com/apioo/fusio-sample-go-cli" target="_blank" class="block text-center py-2 bg-white/5 hover:bg-white/10 rounded-lg text-[10px] font-bold tracking-widest uppercase transition border border-white/5">GitHub Repository</a>
                </div>
                <div class="group p-6 rounded-2xl bg-slate-900/30 border border-white/5 hover:bg-slate-900/60 transition-all">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="h-12 w-10 bg-slate-950 rounded-lg border border-white/10 flex items-center justify-center p-1.5 group-hover:border-orange-500/30 transition-all overflow-hidden flex-shrink-0">
                            <img src="<?php echo $base; ?>/img/sdk/csharp.png" alt="C# Logo" class="w-full h-full object-contain filter grayscale group-hover:grayscale-0 transition-all duration-500">
                        </div>
                        <h4 class="font-bold text-slate-200 group-hover:text-white">C# .NET</h4>
                    </div>
                    <a href="https://github.com/apioo/fusio-sample-csharp-cli" target="_blank" class="block text-center py-2 bg-white/5 hover:bg-white/10 rounded-lg text-[10px] font-bold tracking-widest uppercase transition border border-white/5">GitHub Repository</a>
                </div>
                <div class="group p-6 rounded-2xl bg-slate-900/30 border border-white/5 hover:bg-slate-900/60 transition-all">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="h-12 w-10 bg-slate-950 rounded-lg border border-white/10 flex items-center justify-center p-1.5 group-hover:border-orange-500/30 transition-all overflow-hidden flex-shrink-0">
                            <img src="<?php echo $base; ?>/img/sdk/java.png" alt="Java Logo" class="w-full h-full object-contain filter grayscale group-hover:grayscale-0 transition-all duration-500">
                        </div>
                        <h4 class="font-bold text-slate-200 group-hover:text-white">Java CLI</h4>
                    </div>
                    <a href="https://github.com/apioo/fusio-sample-java-cli" target="_blank" class="block text-center py-2 bg-white/5 hover:bg-white/10 rounded-lg text-[10px] font-bold tracking-widest uppercase transition border border-white/5">GitHub Repository</a>
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
