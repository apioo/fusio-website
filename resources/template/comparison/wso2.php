<?php include(__DIR__ . '/../inc/header.php'); ?>

<?php include(__DIR__ . '/../inc/sub_header.php'); ?>

<section class="py-12 bg-slate-950/40">
    <div class="container mx-auto px-6">

        <div class="rounded-[2.5rem] bg-slate-900/40 border border-white/5 overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                    <tr class="bg-white/5 border-b border-white/10">
                        <th class="p-8 text-[10px] font-black text-slate-500 uppercase tracking-widest">Enterprise Capability</th>
                        <th class="p-8 text-[10px] font-black text-blue-400 uppercase tracking-widest text-center">Fusio (Developer-Centric)</th>
                        <th class="p-8 text-[10px] font-black text-slate-300 uppercase tracking-widest text-center">WSO2 (Enterprise-Grade)</th>
                    </tr>
                    </thead>
                    <tbody class="text-sm text-slate-300">
                    <tr class="border-b border-white/5 group hover:bg-white/[0.02] transition-colors">
                        <td class="p-8">
                            <span class="block font-bold text-white uppercase text-xs tracking-tight">Scope of Tool</span>
                            <span class="text-[11px] text-slate-500 italic">Core focus of the software</span>
                        </td>
                        <td class="p-8 text-center font-mono text-xs">API Construction & Lifecycle</td>
                        <td class="p-8 text-center font-mono text-xs text-slate-500">Full Integration Platform (iPaaS)</td>
                    </tr>
                    <tr class="border-b border-white/5 group hover:bg-white/[0.02] transition-colors">
                        <td class="p-8">
                            <span class="block font-bold text-white uppercase text-xs tracking-tight">Logic Execution</span>
                            <span class="text-[11px] text-slate-500 italic">Where the code runs</span>
                        </td>
                        <td class="p-8 text-center">
                            <span class="px-3 py-1 bg-emerald-500/20 text-emerald-400 rounded-full text-[10px] font-bold">Native Implementation (PHP)</span>
                        </td>
                        <td class="p-8 text-center font-mono text-xs">Proxying External Services</td>
                    </tr>
                    <tr class="border-b border-white/5 group hover:bg-white/[0.02] transition-colors">
                        <td class="p-8">
                            <span class="block font-bold text-white uppercase text-xs tracking-tight">Setup & Maintenance</span>
                            <span class="text-[11px] text-slate-500 italic">Operational overhead</span>
                        </td>
                        <td class="p-8 text-center">
                            <span class="text-emerald-500 text-lg">●</span>
                            <span class="block text-[10px] text-slate-500 mt-1 uppercase italic italic">Lightweight / Single-app</span>
                        </td>
                        <td class="p-8 text-center">
                            <span class="text-red-500 text-lg">●</span>
                            <span class="block text-[10px] text-slate-500 mt-1 uppercase italic">High / Multi-component</span>
                        </td>
                    </tr>
                    <tr class="border-b border-white/5 group hover:bg-white/[0.02] transition-colors">
                        <td class="p-8">
                            <span class="block font-bold text-white uppercase text-xs tracking-tight">Advanced Governance</span>
                            <span class="text-[11px] text-slate-500 italic">Monetization & B2B flows</span>
                        </td>
                        <td class="p-8 text-center text-slate-600 italic">Basic / Extensions required</td>
                        <td class="p-8 text-center">
                            <span class="text-blue-500 text-lg">●</span>
                            <span class="block text-[10px] text-slate-500 mt-1 uppercase italic">Native Enterprise Features</span>
                        </td>
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
                        <span class="text-blue-500 mt-1">→</span>
                        "You need to build new API endpoints quickly and don't want to manage a separate gateway, publisher, and identity server."
                    </li>
                    <li class="flex items-start gap-3 italic">
                        <span class="text-blue-500 mt-1">→</span>
                        "You prefer a system that integrates implementation logic (actions) directly with management features."
                    </li>
                </ul>
            </div>
            <div class="p-10 rounded-[2rem] bg-slate-900/20 border border-white/5">
                <h3 class="text-white font-bold mb-4 uppercase tracking-widest text-sm">Choose WSO2 if...</h3>
                <ul class="space-y-4 text-sm text-slate-400">
                    <li class="flex items-start gap-3 italic">
                        <span class="text-slate-600 mt-1">→</span>
                        "You are a large organization needing a 'one-stop' platform for API governance, multi-tenancy, and complex B2B monetization."
                    </li>
                    <li class="flex items-start gap-3 italic">
                        <span class="text-slate-600 mt-1">→</span>
                        "You have extensive legacy systems (SOAP, etc.) that need to be federated through a central enterprise bus."
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
