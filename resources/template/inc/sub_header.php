
<header class="relative pt-16 pb-16 overflow-hidden border-b border-white/5">
    <div class="absolute inset-0 z-0 opacity-30">
        <img src="<?php echo $base; ?>/img/intro_new_medium.webp" alt="" class="w-full h-full object-cover" />
        <div class="absolute inset-0 bg-gradient-to-b from-slate-950/50 via-slate-950/80 to-slate-950"></div>
    </div>
    <div class="container mx-auto px-6 relative z-10">
        <div class="max-w-4xl">
            <h1 class="text-4xl md:text-6xl font-black text-white mb-6 tracking-tighter">
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-orange-400 to-red-500">
                    <?php echo $headline; ?>
                </span>
            </h1>
            <p class="text-lg md:text-xl text-slate-400 max-w-2xl leading-relaxed">
                <?php echo $tagline; ?>
            </p>
        </div>
    </div>
</header>
