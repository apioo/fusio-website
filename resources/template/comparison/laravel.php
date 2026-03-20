<?php include(__DIR__ . '/../inc/header.php'); ?>

<?php include(__DIR__ . '/../inc/sub_header.php'); ?>

<section class="py-12 bg-slate-950/40">
    <div class="container mx-auto px-6">
        <div class="rounded-[2.5rem] bg-slate-900/40 border border-white/5 overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                    <tr class="bg-white/5 border-b border-white/10">
                        <th class="p-8 text-[10px] font-black text-slate-500 uppercase tracking-widest">Development Focus</th>
                        <th class="p-8 text-[10px] font-black text-red-500 uppercase tracking-widest text-center">Fusio (Platform)</th>
                        <th class="p-8 text-[10px] font-black text-slate-300 uppercase tracking-widest text-center">Laravel (Framework)</th>
                    </tr>
                    </thead>
                    <tbody class="text-sm text-slate-300">
                    <tr class="border-b border-white/5 group hover:bg-white/[0.02] transition-colors">
                        <td class="p-8">
                            <span class="block font-bold text-white uppercase text-xs tracking-tight">API Infrastructure</span>
                            <span class="text-[11px] text-slate-500 italic">Auth, SDKs, Documentation</span>
                        </td>
                        <td class="p-8 text-center">
                            <span class="px-3 py-1 bg-emerald-500/20 text-emerald-400 rounded-full text-[10px] font-bold">Automated / Built-in</span>
                        </td>
                        <td class="p-8 text-center">
                            <span class="px-3 py-1 bg-white/5 text-slate-500 rounded-full text-[10px] font-bold">Manual / Library-based</span>
                        </td>
                    </tr>
                    <tr class="border-b border-white/5 group hover:bg-white/[0.02] transition-colors">
                        <td class="p-8">
                            <span class="block font-bold text-white uppercase text-xs tracking-tight">Application Type</span>
                            <span class="text-[11px] text-slate-500 italic">What can you build?</span>
                        </td>
                        <td class="p-8 text-center">
                            <span class="text-red-500 font-mono text-xs uppercase">Pure API / Headless</span>
                        </td>
                        <td class="p-8 text-center">
                            <span class="text-slate-400 font-mono text-xs uppercase">Full-stack / Web / API</span>
                        </td>
                    </tr>
                    <tr class="border-b border-white/5 group hover:bg-white/[0.02] transition-colors">
                        <td class="p-8">
                            <span class="block font-bold text-white uppercase text-xs tracking-tight">Configuration</span>
                            <span class="text-[11px] text-slate-500 italic">How logic is defined</span>
                        </td>
                        <td class="p-8 text-center font-mono text-xs">Repository-driven / JSON / UI</td>
                        <td class="p-8 text-center font-mono text-xs text-slate-500 italic">Pure Code (PHP)</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 mt-24">
            <div class="p-10 rounded-[2rem] bg-slate-900/20 border border-white/5">
                <h3 class="text-white font-bold mb-4 uppercase tracking-widest text-sm">Choose Fusio if...</h3>
                <ul class="space-y-4 text-sm text-slate-400">
                    <li class="flex items-start gap-3 italic">
                        <span class="text-red-500 mt-1">→</span>
                        "You want to avoid rebuilding Auth, Rate Limiting, and SDK generators for every project."
                    </li>
                    <li class="flex items-start gap-3 italic">
                        <span class="text-red-500 mt-1">→</span>
                        "You need to provide a professional API product for external developers with a self-service portal."
                    </li>
                </ul>
            </div>
            <div class="p-10 rounded-[2rem] bg-slate-900/20 border border-white/5">
                <h3 class="text-white font-bold mb-4 uppercase tracking-widest text-sm">Choose Laravel if...</h3>
                <ul class="space-y-4 text-sm text-slate-400">
                    <li class="flex items-start gap-3 italic">
                        <span class="text-slate-600 mt-1">→</span>
                        "You are building a custom web application with a frontend (Blade/Livewire) and specific non-API needs."
                    </li>
                    <li class="flex items-start gap-3 italic">
                        <span class="text-slate-600 mt-1">→</span>
                        "You prefer total control over the entire codebase and want to use the massive ecosystem of Laravel packages."
                    </li>
                </ul>
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
                <a href="https://github.com/apioo/fusio-website/blob/main/resources/template/comparison/<?php echo pathinfo(__FILE__, PATHINFO_BASENAME); ?>"
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

<?php include(__DIR__ . '/../inc/footer.php'); ?>
