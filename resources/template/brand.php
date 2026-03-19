<?php include(__DIR__ . '/inc/header.php'); ?>

<?php include(__DIR__ . '/inc/sub_header.php'); ?>

<section class="py-12 bg-slate-950/40">
    <div class="container mx-auto px-6">
        <div class="mb-20">
            <div class="flex items-center gap-4 mb-10">
                <span class="text-[10px] font-black text-orange-500 uppercase tracking-widest">Main Identity</span>
                <div class="h-px w-12 bg-orange-500/30"></div>
            </div>
            <div class="bg-slate-900/40 backdrop-blur-md border border-white/5 rounded-[2.5rem] overflow-hidden">
                <div class="grid grid-cols-1 lg:grid-cols-2">
                    <div class="p-12 flex items-center justify-center bg-slate-950/40 border-b lg:border-b-0 lg:border-r border-white/5">
                        <img src="https://www.fusio-project.org/media/logo.svg" alt="Fusio Logo" class="w-32 h-32 object-contain drop-shadow-2xl">
                    </div>
                    <div class="p-8 md:p-12 bg-slate-950/20">
                        <h3 class="text-xl font-bold text-white mb-6">Logos</h3>
                        <div class="space-y-2">
                            <div class="flex items-center justify-between p-4 rounded-xl hover:bg-white/5 border border-transparent hover:border-white/5 transition-all group">
                                <div class="flex items-center gap-4">
                                    <span class="text-[10px] font-mono font-bold text-slate-500 group-hover:text-orange-500 transition-colors">32PX</span>
                                    <span class="text-xs font-bold text-slate-300 uppercase">Portable Network Graphic</span>
                                </div>
                                <a href="<?php echo $base; ?>/media/fusio_32.png" class="text-[10px] font-black text-slate-600 hover:text-white uppercase tracking-widest">Download .png</a>
                            </div>
                            <div class="flex items-center justify-between p-4 rounded-xl hover:bg-white/5 border border-transparent hover:border-white/5 transition-all group">
                                <div class="flex items-center gap-4">
                                    <span class="text-[10px] font-mono font-bold text-slate-500 group-hover:text-orange-500 transition-colors">64PX</span>
                                    <span class="text-xs font-bold text-slate-300 uppercase">Portable Network Graphic</span>
                                </div>
                                <a href="<?php echo $base; ?>/media/fusio_64.png" class="text-[10px] font-black text-slate-600 hover:text-white uppercase tracking-widest">Download .png</a>
                            </div>
                            <div class="flex items-center justify-between p-4 rounded-xl hover:bg-white/5 border border-transparent hover:border-white/5 transition-all group">
                                <div class="flex items-center gap-4">
                                    <span class="text-[10px] font-mono font-bold text-slate-500 group-hover:text-orange-500 transition-colors">128PX</span>
                                    <span class="text-xs font-bold text-slate-300 uppercase">Portable Network Graphic</span>
                                </div>
                                <a href="<?php echo $base; ?>/media/fusio_128.png" class="text-[10px] font-black text-slate-600 hover:text-white uppercase tracking-widest">Download .png</a>
                            </div>
                            <div class="flex items-center justify-between p-4 rounded-xl hover:bg-white/5 border border-transparent hover:border-white/5 transition-all group">
                                <div class="flex items-center gap-4">
                                    <span class="text-[10px] font-mono font-bold text-slate-500 group-hover:text-orange-500 transition-colors">256PX</span>
                                    <span class="text-xs font-bold text-slate-300 uppercase">Portable Network Graphic</span>
                                </div>
                                <a href="<?php echo $base; ?>/media/fusio_256.png" class="text-[10px] font-black text-slate-600 hover:text-white uppercase tracking-widest">Download .png</a>
                            </div>
                            <div class="flex items-center justify-between p-4 rounded-xl bg-orange-500/5 border border-orange-500/10 transition-all group">
                                <div class="flex items-center gap-4">
                                    <span class="text-[10px] font-mono font-bold text-orange-500">SVG</span>
                                    <span class="text-xs font-bold text-slate-200 uppercase">Scalable Vector Graphic</span>
                                </div>
                                <a href="<?php echo $base; ?>/media/logo.svg" class="text-[10px] font-black text-orange-500 hover:text-orange-400 uppercase tracking-widest">Source File →</a>
                            </div>
                        </div>
                    </div>
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
