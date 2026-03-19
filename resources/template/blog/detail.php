<?php include(__DIR__ . '/../inc/header.php'); ?>

<div class="bg-slate-900/40 backdrop-blur-md border border-white/5 overflow-hidden">
    <header class="p-8 md:p-12 lg:p-16 border-b border-white/5 bg-slate-950/20">
        <div class="flex items-center gap-4 mb-8">
            <time class="text-xs font-mono text-slate-500" datetime="<?php echo $entry->updated; ?>"><?php echo $entry->updated; ?></time>
        </div>
        <h1 class="text-4xl md:text-6xl font-black text-white mb-10 tracking-tighter leading-tight">
            <?php echo $entry->title; ?>
        </h1>
        <div class="flex items-center gap-4">
            <div class="w-12 h-12 bg-slate-950/60 rounded-lg border border-white/10 flex items-center justify-center text-slate-500 group-hover:text-orange-500 transition-colors">
                <span class="text-xs font-mono font-bold tracking-tighter uppercase"><?php echo strtoupper(substr($entry->author_name, 0, 2)); ?></span>
            </div>
            <div>
                <p class="text-sm font-bold text-white leading-none mb-1"><a href="<?php echo $entry->author_uri; ?>"><?php echo $entry->author_name; ?></a></p>
                <p class="text-[10px] font-bold text-slate-600 uppercase tracking-widest">Lead Engineer</p>
            </div>
        </div>
    </header>
    <div class="p-8 md:p-12 lg:p-16 bg-slate-950/60">
        <article class="prose prose-invert prose-orange prose-lg max-w-none prose-headings:tracking-tight prose-headings:font-bold prose-headings:text-white prose-p:text-slate-300 prose-p:leading-relaxed prose-a:text-orange-500 prose-a:no-underline hover:prose-a:underline prose-strong:text-white prose-blockquote:border-orange-500">
            <?php echo $entry->content; ?>
        </article>
    </div>
    <footer class="px-8 md:px-16 py-10 border-t border-white/5 bg-slate-950/40 flex flex-wrap justify-between items-center gap-6">
        <div class="flex gap-4">
            <?php if (!empty($entry->category)): ?>
                <?php foreach (explode(',', $entry->category) as $category): ?>
                    <span class="text-[10px] font-bold text-slate-500 uppercase"><?php echo $category; ?></span>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </footer>
</div>

<?php include(__DIR__ . '/../inc/footer.php'); ?>
