
<header class="relative pt-16 pb-16 overflow-hidden border-b border-white/5">
    <div class="absolute inset-0 z-0 opacity-30">
        <img src="<?php echo $base; ?>/img/intro_new_medium.webp" alt="" class="w-full h-full object-cover" />
        <div class="absolute inset-0 bg-gradient-to-b from-slate-950/50 via-slate-950/80 to-slate-950"></div>
    </div>
    <div class="container mx-auto px-6 relative z-10">
        <div class="max-w-4xl">
            <!--
            <?php if(isset($breadcrump)): ?>
                <nav class="flex items-center gap-2 text-xs font-bold uppercase tracking-widest text-slate-500 mb-6">
                    <a href="<?php echo $base; ?>" class="hover:text-orange-500 transition">Home</a>
                    <?php foreach($breadcrump as $title => $link): ?>
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M9 5l7 7-7 7" /></svg>
                        <a href="<?php echo $link; ?>" class="text-slate-300"><?php echo $title; ?></a>
                    <?php endforeach; ?>
                </nav>
            <?php endif; ?>
            -->
            <h1 class="text-4xl md:text-6xl font-black text-white mb-6 tracking-tighter">
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-orange-400 to-red-500">
                    <?php echo $title; ?>
                </span>
            </h1>
            <p class="text-lg md:text-xl text-slate-400 max-w-2xl leading-relaxed">
                <?php echo $description; ?>
            </p>
        </div>
    </div>
</header>
