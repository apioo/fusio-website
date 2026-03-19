<?php include(__DIR__ . '/inc/header.php'); ?>

<header class="relative pt-16 pb-16 overflow-hidden border-b border-white/5">
    <div class="absolute inset-0 z-0 opacity-30">
        <img src="<?php echo $base; ?>/img/intro_new_medium.webp" alt="" class="w-full h-full object-cover" />
        <div class="absolute inset-0 bg-gradient-to-b from-slate-950/50 via-slate-950/80 to-slate-950"></div>
    </div>
    <div class="container mx-auto px-6 relative z-10">
        <div class="max-w-4xl">
            <h1 class="text-4xl md:text-6xl font-black text-white mb-6 tracking-tighter">
                Engineering <span class="text-transparent bg-clip-text bg-gradient-to-r from-orange-400 to-red-500">Blog</span>
            </h1>
            <p class="text-lg md:text-xl text-slate-400 max-w-2xl leading-relaxed">
                Technical updates and architectural deep-dives from the Fusio team.
            </p>
        </div>
    </div>
</header>

<?php if(!empty($entry)): ?>
    <?php foreach($entry as $i => $row): ?>
    <article class="py-32 bg-slate-950/40 group relative p-8 md:p-12 border border-white/5 hover:border-orange-500/30 transition-all duration-500 overflow-hidden">
        <div class="absolute -right-10 -top-10 w-64 h-64 bg-orange-500/5 blur-3xl rounded-full group-hover:bg-orange-500/10 transition-colors"></div>
        <div class="relative z-10">
            <div class="flex items-center gap-4 mb-8">
                <time class="text-xs text-slate-500 font-mono" datetime="<?php echo $row->updated; ?>"><?php echo date('Y-m-d', strtotime($row->updated)); ?></time>
            </div>
            <h2 class="text-3xl md:text-5xl font-bold text-white mb-6 tracking-tight group-hover:text-orange-400 transition cursor-pointer">
                <a href="<?php echo $router->getAbsolutePath([\App\Controller\Blog\Detail::class, 'show'], ['title' => $row->title_slug]); ?>"><?php echo $row->title; ?></a>
            </h2>
            <p class="text-lg text-slate-400 mb-10 leading-relaxed max-w-3xl">
                <?php echo $row->summary; ?>
            </p>
            <div class="flex items-center justify-between pt-8 border-t border-white/5">
                <div class="flex items-center gap-4">
                    <div class="w-10 h-10 bg-slate-950 rounded-lg border border-white/10 flex items-center justify-center text-slate-500 group-hover:text-orange-500 group-hover:border-orange-500/30 transition-all">
                        <span class="text-xs font-mono font-bold tracking-tighter"><?php echo strtoupper(substr($row->author_name, 0, 2)); ?></span>
                    </div>
                    <span class="text-sm font-bold text-slate-300"><a href="<?php echo $row->author_uri; ?>"><?php echo $row->author_name; ?></a></span>
                </div>
                <a href="<?php echo $router->getAbsolutePath([\App\Controller\Blog\Detail::class, 'show'], ['title' => $row->title_slug]); ?>" class="px-6 py-2.5 bg-white/5 hover:bg-orange-500 hover:text-white rounded-xl text-xs font-bold transition-all border border-white/10">Read Article</a>
            </div>
        </div>
    </article>
    <?php endforeach; ?>
    <div class="mt-24 flex justify-center items-center gap-4">
        <a href="<?php echo $links[1]->href; ?>" class="px-6 py-2 bg-white/5 hover:bg-white/10 rounded-full text-xs font-bold border border-white/5 transition">Previous</a>
        <a href="<?php echo $links[2]->href; ?>" class="px-6 py-2 bg-white/5 hover:bg-white/10 rounded-full text-xs font-bold border border-white/5 transition">Next</a>
    </div>
<?php else: ?>
  <p>No blog entry available</p>
<?php endif; ?>

<?php include(__DIR__ . '/inc/footer.php'); ?>
