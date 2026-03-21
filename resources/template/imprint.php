<?php include(__DIR__ . '/inc/header.php'); ?>

<?php include(__DIR__ . '/inc/sub_header.php'); ?>

<section class="relative z-10 py-8 bg-slate-950/50">
    <div class="container mx-auto px-6">
        <div class="bg-slate-900/40 backdrop-blur-md border border-white/5 rounded-[3rem] overflow-hidden">
            <div class="p-8 md:p-16 lg:p-8 bg-slate-950/60">
                <article class="prose prose-invert prose-orange prose-lg max-w-none prose-headings:text-white prose-headings:tracking-tight prose-headings:font-bold prose-p:text-slate-300 prose-a:text-orange-500 no-underline hover:prose-a:underline">
                    <?php echo $imprint; ?>
                </article>
            </div>
        </div>
    </div>
</section>

<?php include(__DIR__ . '/inc/footer.php'); ?>
