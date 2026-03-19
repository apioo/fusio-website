<?php include(__DIR__ . '/inc/header.php'); ?>

<?php include(__DIR__ . '/inc/sub_header.php'); ?>

<section class="py-20 border-b border-white/5 bg-slate-950/50">
    <div class="container mx-auto px-6">
        <div class="max-w-2xl mx-auto p-8 py-16 rounded-[2rem] bg-orange-500/10 border border-orange-500/20 text-center relative overflow-hidden group">
            <div class="absolute -right-4 -top-4 w-24 h-24 bg-orange-500/10 blur-3xl rounded-full"></div>

            <h2 class="text-xs font-bold text-orange-500 uppercase tracking-widest mb-6">Backend Credentials</h2>
            <div class="flex flex-col md:flex-row justify-center items-center gap-8">
                <div>
                    <span class="block text-[10px] text-slate-500 uppercase mb-1">Username</span>
                    <code class="text-xl font-mono text-white">test</code>
                </div>
                <div class="hidden md:block w-px h-8 bg-white/10"></div>
                <div>
                    <span class="block text-[10px] text-slate-500 uppercase mb-1">Password</span>
                    <code class="text-xl font-mono text-white">FRsNh1zKCXlB</code>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-20 border-b border-white/5 bg-slate-950/50">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-5xl mx-auto">
            <a href="https://demo.fusio-project.org/apps/fusio" target="_blank" class="group p-8 glass-card rounded-[2.5rem] hover:bg-white/10 hover:border-orange-500/50 transition-all duration-500">
                <div class="flex justify-between items-start mb-12">
                    <div class="w-12 h-12 bg-orange-500/20 rounded-2xl flex items-center justify-center text-orange-500 group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </div>
                    <span class="text-[10px] font-bold text-slate-500 group-hover:text-orange-500 transition">LAUNCH PORTAL →</span>
                </div>
                <h3 class="text-2xl font-bold text-white mb-2">Fusio Backend</h3>
                <p class="text-sm text-slate-400">The primary administrative dashboard to manage operations, schemas, and users.</p>
            </a>
            <a href="https://demo.fusio-project.org/apps/developer" target="_blank" class="group p-8 glass-card rounded-[2.5rem] hover:bg-white/10 hover:border-blue-500/50 transition-all duration-500">
                <div class="flex justify-between items-start mb-12">
                    <div class="w-12 h-12 bg-blue-500/20 rounded-2xl flex items-center justify-center text-blue-400 group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </div>
                    <span class="text-[10px] font-bold text-slate-500 group-hover:text-blue-400 transition">LAUNCH PORTAL →</span>
                </div>
                <h3 class="text-2xl font-bold text-white mb-2">Developer Portal</h3>
                <p class="text-sm text-slate-400">The storefront for your API where developers register, manage keys, and read guides.</p>
            </a>
            <a href="https://demo.fusio-project.org" target="_blank" class="group p-8 glass-card rounded-[2.5rem] hover:bg-white/10 hover:border-emerald-500/50 transition-all duration-500">
                <div class="flex justify-between items-start mb-12">
                    <div class="w-12 h-12 bg-emerald-500/20 rounded-2xl flex items-center justify-center text-emerald-400 group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </div>
                    <span class="text-[10px] font-bold text-slate-500 group-hover:text-emerald-400 transition">EXPLORE ENDPOINTS →</span>
                </div>
                <h3 class="text-2xl font-bold text-white mb-2">API Engine</h3>
                <p class="text-sm text-slate-400">The live API root where you can test JSON responses and request routing.</p>
            </a>
            <a href="https://demo.fusio-project.org/apps/redoc" target="_blank" class="group p-8 glass-card rounded-[2.5rem] hover:bg-white/10 hover:border-purple-500/50 transition-all duration-500">
                <div class="flex justify-between items-start mb-12">
                    <div class="w-12 h-12 bg-purple-500/20 rounded-2xl flex items-center justify-center text-purple-400 group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </div>
                    <span class="text-[10px] font-bold text-slate-500 group-hover:text-purple-400 transition">VIEW DOCS →</span>
                </div>
                <h3 class="text-2xl font-bold text-white mb-2">Documentation</h3>
                <p class="text-sm text-slate-400">Auto-generated ReDoc interface showing the complete OpenAPI specification.</p>
            </a>
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
