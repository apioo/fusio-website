<?php include(__DIR__ . '/inc/header.php'); ?>

<?php include(__DIR__ . '/inc/sub_header.php'); ?>

<section class="py-32 bg-slate-950/40">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="group relative p-8 rounded-[2.5rem] bg-slate-900/40 border border-white/5 hover:border-orange-500/30 transition-all duration-500 overflow-hidden">
                <div class="flex items-center justify-between mb-8">
                    <div class="flex items-center gap-2">
                        <div class="w-1.5 h-1.5 rounded-full bg-orange-500 shadow-[0_0_8px_rgba(249,115,22,0.4)]"></div>
                        <span class="text-[10px] font-black text-slate-500 uppercase tracking-widest">Partner</span>
                    </div>
                    <span class="text-[10px] font-mono text-slate-700">ID: P-001</span>
                </div>
                <div class="w-20 h-20 mb-6 rounded-2xl bg-slate-950/60 border border-white/5 p-4 flex items-center justify-center group-hover:scale-105 transition-transform duration-300">
                    <img src="<?php echo $base; ?>/img/partner/phpstorm.svg" alt="Partner Name" class="w-full h-full object-contain filter grayscale group-hover:grayscale-0 transition-all">
                </div>
                <h3 class="text-xl font-bold text-white mb-3">JetBrains</h3>
                <a href="https://jb.gg/OpenSourceSupport" target="_blank" class="inline-flex items-center gap-2 text-[10px] font-black text-slate-500 group-hover:text-orange-500 uppercase tracking-widest transition-colors">
                    Visit Website <span>→</span>
                </a>
                <div class="absolute -right-2 -bottom-2 w-16 h-16 bg-orange-500/5 blur-3xl rounded-full opacity-0 group-hover:opacity-100 transition-opacity"></div>
            </div>
            <div class="group p-8 rounded-[2.5rem] border border-dashed border-white/10 flex flex-col items-center justify-center text-center hover:bg-white/[0.02] transition-all">
                <div class="w-16 h-16 rounded-full bg-white/5 border border-white/5 flex items-center justify-center mb-6">
                    <svg class="w-6 h-6 text-slate-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path d="M12 6v6m0 0v6m0-6h6m-6 0H6" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-slate-400 mb-2">Join the Ecosystem</h3>
                <p class="text-xs text-slate-500 max-w-[200px] mb-6">Support the open source future of API management.</p>
                <a href="https://github.com/sponsors/chriskapp" class="text-[10px] font-black text-slate-600 hover:text-white uppercase tracking-widest transition-colors">Get in Touch →</a>
            </div>
        </div>
    </div>
</section>

<?php include(__DIR__ . '/inc/footer.php'); ?>
