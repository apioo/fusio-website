<?php include(__DIR__ . '/inc/header.php'); ?>

<?php include(__DIR__ . '/inc/sub_header.php'); ?>

<section class="py-20 border-b border-white/5 bg-slate-950/50">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-20">
            <a href="https://marketplace.fusio-project.org/login" class="group p-8 rounded-[2rem] bg-slate-900/40 border border-white/5 hover:bg-white/[0.02] hover:border-white/10 transition-all flex items-center justify-between">
                <div>
                    <div class="text-lg font-bold text-white mb-1 group-hover:text-orange-500 transition-colors">Sign In</div>
                    <p class="text-xs text-slate-500">Access your developer dashboard and managed assets.</p>
                </div>
                <div class="w-12 h-12 rounded-xl bg-white/5 flex items-center justify-center text-slate-400 group-hover:text-white transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </div>
            </a>
            <a href="https://marketplace.fusio-project.org/register" class="group p-8 rounded-[2rem] bg-orange-500/5 border border-orange-500/20 hover:bg-orange-500/10 hover:border-orange-500/40 transition-all flex items-center justify-between">
                <div>
                    <div class="text-lg font-bold text-white mb-1 group-hover:text-orange-400 transition-colors">Register</div>
                    <p class="text-xs text-slate-500">Create a new developer account to publish extensions.</p>
                </div>
                <div class="w-12 h-12 rounded-xl bg-orange-500/20 flex items-center justify-center text-orange-500 group-hover:scale-110 transition-transform">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M12 4v16m8-8H4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </div>
            </a>
        </div>
        <section class="mb-24">
            <div class="flex items-center gap-4 mb-8">
                <h2 class="text-[10px] font-black text-orange-500 uppercase tracking-widest">01. Apps</h2>
                <div class="h-px w-12 bg-orange-500/20"></div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <?php foreach($apps->entry as $app): ?>
                    <div class="group p-6 rounded-[2rem] bg-slate-900/40 border border-white/5 hover:border-white/10 transition-all flex flex-col justify-between">
                        <div>
                            <div class="flex items-center justify-between mb-4">
                                <span class="text-[10px] font-mono text-slate-500 uppercase"><?php echo $app->author->name . '/' . $app->name; ?></span>
                                <div class="w-2 h-2 rounded-full bg-emerald-500 shadow-[0_0_8px_rgba(16,185,129,0.4)]"></div>
                            </div>
                            <h3 class="text-lg font-bold text-white mb-2"><?php echo $app->name; ?></h3>
                            <p class="text-xs text-slate-400 leading-relaxed mb-6"><?php echo $app->summary; ?></p>
                        </div>
                        <a href="https://marketplace.fusio-project.org/marketplace/directory/app/<?php echo $app->author->name; ?>/<?php echo $app->name; ?>" class="text-[10px] font-black text-slate-500 group-hover:text-orange-500 uppercase tracking-widest transition-colors">View Details →</a>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
        <section class="mt-8">
            <div class="flex items-center gap-4 mb-8">
                <h2 class="text-[10px] font-black text-blue-500 uppercase tracking-widest">02. Bundles</h2>
                <div class="h-px w-12 bg-blue-500/20"></div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <?php foreach($bundles->entry as $bundle): ?>
                    <div class="group p-6 rounded-[2rem] bg-slate-900/40 border border-white/5 hover:border-white/10 transition-all flex flex-col justify-between">
                        <div>
                            <div class="flex items-center justify-between mb-4">
                                <span class="text-[10px] font-mono text-slate-500 uppercase"><?php echo $bundle->author->name . '/' . $bundle->name; ?></span>
                                <div class="w-2 h-2 rounded-full bg-emerald-500 shadow-[0_0_8px_rgba(16,185,129,0.4)]"></div>
                            </div>
                            <h3 class="text-lg font-bold text-white mb-2"><?php echo $bundle->name; ?></h3>
                            <p class="text-xs text-slate-400 leading-relaxed mb-6"><?php echo $bundle->summary; ?></p>
                        </div>
                        <a href="https://marketplace.fusio-project.org/marketplace/directory/bundle/<?php echo $bundle->author->name; ?>/<?php echo $bundle->name; ?>" class="text-[10px] font-black text-slate-500 group-hover:text-orange-500 uppercase tracking-widest transition-colors">View Details →</a>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
    </div>
</section>

<?php include(__DIR__ . '/inc/footer.php'); ?>
