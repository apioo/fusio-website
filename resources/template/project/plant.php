<?php include(__DIR__ . '/../inc/header.php'); ?>

<?php include(__DIR__ . '/../inc/sub_header.php'); ?>

<section class="py-20 border-b border-white/5 bg-slate-950/40">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <span class="text-[10px] font-bold text-slate-400 uppercase tracking-widest px-2 py-1 rounded-md bg-white/5 border border-white/10">Deployment</span>
                <h2 class="text-3xl md:text-4xl font-black text-white tracking-tighter mt-6 mb-6">Self-host your apps on your own server</h2>
                <p class="text-slate-400 leading-relaxed mb-6">
                    Fusio Plant is an open-source server panel to easily self-host Fusio and other apps on your own infrastructure.
                    It can be seen as a modern, lightweight alternative to cPanel or Plesk with a simple, performant and clean tech stack.
                </p>
                <p class="text-slate-400 leading-relaxed mb-10">
                    Plant installs only Nginx, Docker and a small executor on your server. Everything else, including Plant itself,
                    runs as a Docker container. You manage and monitor all apps through a web-based admin panel or control your
                    server programmatically through a REST API.
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="https://github.com/apioo/fusio-plant" target="_blank" class="px-6 py-3 bg-orange-600 hover:bg-orange-500 text-white rounded-xl text-sm font-bold transition shadow-lg shadow-orange-600/20">View on GitHub</a>
                </div>
            </div>
            <div class="rounded-[2rem] bg-slate-900/60 border border-white/10 overflow-hidden">
                <div class="flex items-center gap-2 px-6 py-4 border-b border-white/5 bg-white/[0.02]">
                    <span class="w-3 h-3 rounded-full bg-red-500/60"></span>
                    <span class="w-3 h-3 rounded-full bg-yellow-500/60"></span>
                    <span class="w-3 h-3 rounded-full bg-emerald-500/60"></span>
                    <span class="ml-4 text-[10px] font-mono text-slate-500 uppercase tracking-widest">Installation (as root on Ubuntu)</span>
                </div>
                <pre class="p-6 text-xs md:text-sm font-mono text-slate-300 leading-relaxed overflow-x-auto">curl -s https://raw.githubusercontent.com/apioo/fusio-plant/refs/heads/main/install.sh -o ./install.sh
chmod +x ./install.sh
./install.sh</pre>
                <p class="px-6 pb-6 text-xs text-slate-500 leading-relaxed">
                    The script asks for the domain of your server, make sure the DNS A/AAAA record already points to it.
                    Afterwards the panel is available at <code>/apps/plant</code> with the generated credentials.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="py-20 border-b border-white/5 bg-slate-950/50">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl md:text-4xl font-black text-white tracking-tighter mb-4">Goals</h2>
        <p class="text-slate-400 max-w-2xl mb-12">Plant focuses on running multiple apps on a single host. If you need to run apps across multiple hosts, take a look at Kubernetes.</p>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="p-8 rounded-3xl bg-white/5 border border-white/10 hover:border-orange-500/50 transition-all">
                <h3 class="text-lg font-bold text-white mb-3">Cost efficient</h3>
                <p class="text-slate-400 text-sm leading-relaxed">Run multiple apps on a single server instead of paying for a managed service per app.</p>
            </div>
            <div class="p-8 rounded-3xl bg-white/5 border border-white/10 hover:border-orange-500/50 transition-all">
                <h3 class="text-lg font-bold text-white mb-3">Admin panel</h3>
                <p class="text-slate-400 text-sm leading-relaxed">A web-based panel to create, manage and monitor all projects on your server.</p>
            </div>
            <div class="p-8 rounded-3xl bg-white/5 border border-white/10 hover:border-orange-500/50 transition-all">
                <h3 class="text-lg font-bold text-white mb-3">REST API</h3>
                <p class="text-slate-400 text-sm leading-relaxed">Every action of the panel is available through a REST API, so you can automate your server.</p>
            </div>
            <div class="p-8 rounded-3xl bg-white/5 border border-white/10 hover:border-orange-500/50 transition-all">
                <h3 class="text-lg font-bold text-white mb-3">Automatic SSL</h3>
                <p class="text-slate-400 text-sm leading-relaxed">SSL certificates are obtained automatically through certbot for every domain.</p>
            </div>
            <div class="p-8 rounded-3xl bg-white/5 border border-white/10 hover:border-orange-500/50 transition-all">
                <h3 class="text-lg font-bold text-white mb-3">One-click presets</h3>
                <p class="text-slate-400 text-sm leading-relaxed">Select a preset, i.e. for WordPress, to launch a fully configured app. New presets are a single PHP class.</p>
            </div>
            <div class="p-8 rounded-3xl bg-white/5 border border-white/10 hover:border-orange-500/50 transition-all">
                <h3 class="text-lg font-bold text-white mb-3">Daily backups</h3>
                <p class="text-slate-400 text-sm leading-relaxed">Plant automatically creates daily backups of every MySQL database used by your projects.</p>
            </div>
        </div>
    </div>
</section>

<section class="py-20 border-b border-white/5 bg-slate-950/40">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <div>
                <h2 class="text-3xl font-black text-white tracking-tighter mb-4">Deploy images, not builds</h2>
                <p class="text-slate-400 leading-relaxed mb-6">
                    One important concept of Plant is that your server only runs existing Docker images, it does not contain any tools
                    to build them. This keeps your host clean from build tools and the build process.
                </p>
                <p class="text-slate-400 leading-relaxed">
                    To run your own app, build an image i.e. with a GitHub action and push it to the GitHub container registry. Then
                    simply use the image <code class="text-orange-400">ghcr.io/[user]/[repository]:main</code> in your project. The
                    <a href="<?php echo $router->getAbsolutePath([\App\Controller\Project\Framework::class, 'show']); ?>" class="text-orange-500 hover:underline">Framework</a>
                    starter repository already includes such an action.
                </p>
            </div>
            <div class="rounded-[2rem] bg-slate-900/40 border border-white/5 overflow-hidden">
                <table class="w-full text-left text-sm">
                    <thead>
                    <tr class="bg-white/5 border-b border-white/10">
                        <th class="p-5 text-[10px] font-black text-slate-500 uppercase tracking-widest">Folder</th>
                        <th class="p-5 text-[10px] font-black text-slate-500 uppercase tracking-widest">Purpose</th>
                    </tr>
                    </thead>
                    <tbody class="text-slate-400">
                    <tr class="border-b border-white/5"><td class="p-5 font-mono text-orange-400">/docker</td><td class="p-5">All projects, each with a <code>docker-compose.yml</code> file</td></tr>
                    <tr class="border-b border-white/5"><td class="p-5 font-mono text-orange-400">/opt/plant</td><td class="p-5">The executor which receives commands from the Plant container through a pipe and runs them on the host</td></tr>
                    <tr class="border-b border-white/5"><td class="p-5 font-mono text-orange-400">/cache</td><td class="p-5">Used in case Nginx content caching is activated</td></tr>
                    <tr><td class="p-5 font-mono text-orange-400">/backup</td><td class="p-5">Daily database backups for each project</td></tr>
                    </tbody>
                </table>
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
                <a href="https://github.com/apioo/fusio-website/blob/main/resources/template/project/<?php echo pathinfo(__FILE__, PATHINFO_BASENAME); ?>"
                   class="group/link flex items-center gap-2 text-[10px] font-black text-slate-500 hover:text-orange-500 transition-colors uppercase tracking-widest">
                    <svg class="w-3.5 h-3.5 opacity-50 group-hover/link:opacity-100 transition-opacity" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    Improve this page
                </a>
                <div class="hidden sm:block w-1 h-1 rounded-full bg-white/10"></div>
                <a href="https://github.com/apioo/fusio-plant/issues"
                   class="text-[10px] font-black text-slate-600 hover:text-white transition-colors uppercase tracking-widest">
                    Report Issue
                </a>
            </div>
        </div>
    </div>
</section>

<?php include(__DIR__ . '/../inc/footer.php'); ?>
