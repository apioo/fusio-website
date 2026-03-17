<?php include(__DIR__ . '/inc/header.php'); ?>

<?php include(__DIR__ . '/inc/sub_header.php'); ?>

<!--
Hey developer, if you want to add an adapter you only need to set the keyword "fusio-adapter" in your composer.json file
see also https://github.com/apioo/fusio-adapter-sql/blob/master/composer.json as example. Our fetcher will then
automatically find your repository and add it to this list.
-->

<section class="py-12 bg-slate-950/40">
    <div class="container mx-auto px-6">
        <div class="mb-8">
            <h2 class="text-sm font-bold text-orange-500 uppercase tracking-widest">Installation</h2>
        </div>
        <div class="glass-card rounded-3xl overflow-hidden max-w-4xl border border-white/10">
            <div class="bg-white/5 px-6 py-3 border-b border-white/5 flex items-center gap-2">
                <div class="w-3 h-3 rounded-full bg-red-500/50"></div>
                <div class="w-3 h-3 rounded-full bg-yellow-500/50"></div>
                <div class="w-3 h-3 rounded-full bg-green-500/50"></div>
                <span class="ml-4 text-[10px] font-mono text-slate-500">Terminal</span>
            </div>
            <div class="p-8 font-mono text-sm leading-loose">
                <div class="flex gap-4">
                    <span class="text-slate-600 select-none">$</span>
                    <span class="text-slate-300">composer require <span class="text-orange-400">fusio/adapter-mongodb</span></span>
                </div>
                <div class="flex gap-4">
                    <span class="text-slate-600 select-none">$</span>
                    <span class="text-slate-300">php bin/fusio system:register <span class="text-blue-400">"Fusio\Adapter\Mongodb\Adapter"</span></span>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-12 bg-slate-950">
    <div class="container mx-auto px-6">
        <div class="flex items-center gap-4 mb-10">
            <h2 class="text-xs font-bold text-orange-500 uppercase tracking-[0.3em]">Official Extensions</h2>
            <div class="h-px flex-grow bg-white/5"></div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php foreach($fusio as $row): ?>
            <div class="group p-6 rounded-2xl bg-slate-900/30 border border-white/5 hover:bg-slate-900/60 hover:border-white/10 transition-all duration-300">
                <div class="flex items-start gap-5">
                    <div class="w-12 h-12 flex-shrink-0 bg-slate-950 rounded-lg border border-white/10 flex items-center justify-center text-slate-500 group-hover:text-blue-400 group-hover:border-blue-500/30 transition-all duration-500">
                        <span class="text-sm font-mono font-bold tracking-tighter"><?php echo $row->icon; ?></span>
                    </div>
                    <div class="flex-grow">
                        <div class="flex justify-between items-start">
                            <h4 class="text-sm font-bold text-slate-200 mb-1 group-hover:text-white"><?php echo $row->name; ?></h4>
                            <a href="<?php echo $row->url; ?>" class="text-slate-600 hover:text-white transition-colors">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </a>
                        </div>
                        <p class="text-[11px] text-slate-500 leading-relaxed"><?php echo $row->description; ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="py-12 bg-slate-950">
    <div class="container mx-auto px-6">
        <div class="flex items-center gap-4 mb-10">
            <h2 class="text-xs font-bold text-orange-500 uppercase tracking-[0.3em]">Community</h2>
            <div class="h-px flex-grow bg-white/5"></div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php foreach($community as $row): ?>
                <div class="group p-6 rounded-2xl bg-slate-900/30 border border-white/5 hover:bg-slate-900/60 hover:border-white/10 transition-all duration-300">
                    <div class="flex items-start gap-5">
                        <div class="w-12 h-12 flex-shrink-0 bg-slate-950 rounded-lg border border-white/10 flex items-center justify-center text-slate-500 group-hover:text-blue-400 group-hover:border-blue-500/30 transition-all duration-500">
                            <span class="text-sm font-mono font-bold tracking-tighter"><?php echo $row->icon; ?></span>
                        </div>
                        <div class="flex-grow">
                            <div class="flex justify-between items-start">
                                <h4 class="text-sm font-bold text-slate-200 mb-1 group-hover:text-white"><?php echo $row->name; ?></h4>
                                <a href="<?php echo $row->url; ?>" class="text-slate-600 hover:text-white transition-colors">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                </a>
                            </div>
                            <p class="text-[11px] text-slate-500 leading-relaxed"><?php echo $row->description; ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="pt-32 pb-32">
    <div class="container mx-auto px-6 text-center">
        <div class="max-w-xl mx-auto p-1 bg-gradient-to-r from-orange-500 to-red-600 rounded-3xl">
            <div class="bg-slate-950 rounded-[1.4rem] p-8">
                <h2 class="text-2xl font-bold text-white mb-4">Want to build your own?</h2>
                <p class="text-slate-400 text-sm mb-6">Add "fusio-adapter" to your composer.json to automatically get listed in the community section.</p>
                <a href="https://docs.fusio-project.org/docs/concepts/adapter" class="text-orange-500 font-bold hover:underline">Read the Documentation →</a>
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
