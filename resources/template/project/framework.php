<?php include(__DIR__ . '/../inc/header.php'); ?>

<?php include(__DIR__ . '/../inc/sub_header.php'); ?>

<section class="py-20 border-b border-white/5 bg-slate-950/40">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <span class="text-[10px] font-bold text-slate-400 uppercase tracking-widest px-2 py-1 rounded-md bg-white/5 border border-white/10">Scaffold</span>
                <h2 class="text-3xl md:text-4xl font-black text-white tracking-tighter mt-6 mb-6">Your API configuration as code</h2>
                <p class="text-slate-400 leading-relaxed mb-6">
                    Usually you configure operations, actions, schemas and scopes through the Fusio backend. The Framework starter
                    repository turns this around: all configuration lives in files under version control, and your business logic
                    lives in plain PHP classes. This means you can always rebuild a fully configured Fusio instance from your repository.
                </p>
                <p class="text-slate-400 leading-relaxed mb-10">
                    The <code class="text-orange-400">deploy</code> command reads the configuration files from <code class="text-orange-400">resources/</code>
                    and submits them to the internal REST API, just like the backend would. The project ships with a complete
                    <code class="text-orange-400">todo</code> resource including CRUD endpoints, events and a cronjob, which you can use as reference
                    implementation for your own resources.
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="https://github.com/apioo/fusio-framework" target="_blank" class="px-6 py-3 bg-orange-600 hover:bg-orange-500 text-white rounded-xl text-sm font-bold transition shadow-lg shadow-orange-600/20">View on GitHub</a>
                    <a href="https://docs.fusio-project.org/" target="_blank" class="px-6 py-3 bg-white/5 hover:bg-white/10 rounded-xl text-sm font-bold border border-white/5 text-white transition">Documentation</a>
                </div>
            </div>
            <div class="rounded-[2rem] bg-slate-900/60 border border-white/10 overflow-hidden">
                <div class="flex items-center gap-2 px-6 py-4 border-b border-white/5 bg-white/[0.02]">
                    <span class="w-3 h-3 rounded-full bg-red-500/60"></span>
                    <span class="w-3 h-3 rounded-full bg-yellow-500/60"></span>
                    <span class="w-3 h-3 rounded-full bg-emerald-500/60"></span>
                    <span class="ml-4 text-[10px] font-mono text-slate-500 uppercase tracking-widest">Quick start</span>
                </div>
                <pre class="p-6 text-xs md:text-sm font-mono text-slate-300 leading-relaxed overflow-x-auto"><span class="text-slate-500"># install the dependencies</span>
composer install

<span class="text-slate-500"># set FUSIO_CONNECTION in .env, then install the tables</span>
php bin/fusio migrations:migrate

<span class="text-slate-500"># create an administrator and login</span>
php bin/fusio adduser --role=1
php bin/fusio login

<span class="text-slate-500"># apply resources/* to the instance</span>
php bin/fusio deploy

<span class="text-slate-500"># try the API without a web server</span>
php bin/fusio serve GET /todo</pre>
            </div>
        </div>
    </div>
</section>

<section class="py-20 border-b border-white/5 bg-slate-950/50">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl md:text-4xl font-black text-white tracking-tighter mb-4">Why use Fusio as a framework?</h2>
        <p class="text-slate-400 max-w-2xl mb-12">Get the full power of an API management platform while keeping the developer workflow you already know from classic PHP frameworks.</p>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="p-8 rounded-3xl bg-white/5 border border-white/10 hover:border-orange-500/50 transition-all">
                <h3 class="text-lg font-bold text-white mb-3">Version controlled</h3>
                <p class="text-slate-400 text-sm leading-relaxed">Operations, scopes, roles, events and cronjobs are plain YAML and PHP files, so every change is reviewable and reproducible.</p>
            </div>
            <div class="p-8 rounded-3xl bg-white/5 border border-white/10 hover:border-orange-500/50 transition-all">
                <h3 class="text-lg font-bold text-white mb-3">Type-safe models</h3>
                <p class="text-slate-400 text-sm leading-relaxed">Describe your request and response models with <a href="https://typeschema.org/" class="text-orange-500 hover:underline">TypeSchema</a> and generate the DTOs and table classes automatically.</p>
            </div>
            <div class="p-8 rounded-3xl bg-white/5 border border-white/10 hover:border-orange-500/50 transition-all">
                <h3 class="text-lg font-bold text-white mb-3">Clean architecture</h3>
                <p class="text-slate-400 text-sm leading-relaxed">A clear separation between thin actions, views for read requests and services for your business logic.</p>
            </div>
            <div class="p-8 rounded-3xl bg-white/5 border border-white/10 hover:border-orange-500/50 transition-all">
                <h3 class="text-lg font-bold text-white mb-3">Database migrations</h3>
                <p class="text-slate-400 text-sm leading-relaxed">Manage your schema with Doctrine migrations on MySQL/MariaDB, PostgreSQL or SQLite.</p>
            </div>
            <div class="p-8 rounded-3xl bg-white/5 border border-white/10 hover:border-orange-500/50 transition-all">
                <h3 class="text-lg font-bold text-white mb-3">SDK generation</h3>
                <p class="text-slate-400 text-sm leading-relaxed">Generate type-safe client SDKs for TypeScript, PHP, Python, Java, Go and C# directly from your API.</p>
            </div>
            <div class="p-8 rounded-3xl bg-white/5 border border-white/10 hover:border-orange-500/50 transition-all">
                <h3 class="text-lg font-bold text-white mb-3">Docker ready</h3>
                <p class="text-slate-400 text-sm leading-relaxed">Includes a Dockerfile and a GitHub action which builds an image on every push, ready to run on <a href="<?php echo $router->getAbsolutePath([\App\Controller\Project\Plant::class, 'show']); ?>" class="text-orange-500 hover:underline">Plant</a> or any Docker platform.</p>
            </div>
        </div>
    </div>
</section>

<section class="py-20 border-b border-white/5 bg-slate-950/40">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <div>
                <h2 class="text-3xl font-black text-white tracking-tighter mb-4">How a resource is built</h2>
                <p class="text-slate-400 mb-8">Every endpoint is made of a few small parts. The included <code class="text-orange-400">todo</code> resource shows each of them.</p>
                <ol class="space-y-4">
                    <li class="flex gap-4"><span class="text-xs font-mono font-bold text-orange-500 mt-1">01</span><div><span class="font-bold text-white">Schema</span><p class="text-sm text-slate-400">The TypeSchema definition of your request and response models in <code>resources/typeschema.json</code>.</p></div></li>
                    <li class="flex gap-4"><span class="text-xs font-mono font-bold text-orange-500 mt-1">02</span><div><span class="font-bold text-white">Migration</span><p class="text-sm text-slate-400">A Doctrine migration in <code>src/Migrations</code> which creates the database table.</p></div></li>
                    <li class="flex gap-4"><span class="text-xs font-mono font-bold text-orange-500 mt-1">03</span><div><span class="font-bold text-white">Table</span><p class="text-sm text-slate-400">Generated type-safe table classes in <code>src/Table</code>.</p></div></li>
                    <li class="flex gap-4"><span class="text-xs font-mono font-bold text-orange-500 mt-1">04</span><div><span class="font-bold text-white">View &amp; Service</span><p class="text-sm text-slate-400">Views build the JSON responses, services contain the business logic and dispatch events.</p></div></li>
                    <li class="flex gap-4"><span class="text-xs font-mono font-bold text-orange-500 mt-1">05</span><div><span class="font-bold text-white">Action</span><p class="text-sm text-slate-400">The thin entry point of an operation which calls the view or the service.</p></div></li>
                    <li class="flex gap-4"><span class="text-xs font-mono font-bold text-orange-500 mt-1">06</span><div><span class="font-bold text-white">Operation, Scopes &amp; Roles</span><p class="text-sm text-slate-400">The route, HTTP method, models and action, and which users are allowed to call it.</p></div></li>
                    <li class="flex gap-4"><span class="text-xs font-mono font-bold text-orange-500 mt-1">07</span><div><span class="font-bold text-white">Deploy</span><p class="text-sm text-slate-400"><code>php bin/fusio deploy</code> applies everything to your instance.</p></div></li>
                </ol>
            </div>
            <div>
                <h2 class="text-3xl font-black text-white tracking-tighter mb-4">Built for AI-assisted development</h2>
                <p class="text-slate-400 mb-8">
                    The repository ships with <a href="https://claude.com/claude-code" class="text-orange-500 hover:underline">Claude Code</a> skills and a
                    <code>CLAUDE.md</code> file which describes the project conventions. Run one of the skills or simply describe what you want,
                    i.e. "add a product resource".
                </p>
                <div class="rounded-[2rem] bg-slate-900/40 border border-white/5 overflow-hidden">
                    <table class="w-full text-left text-sm">
                        <tbody class="text-slate-400">
                        <tr class="border-b border-white/5"><td class="p-5 font-mono text-orange-400 whitespace-nowrap">/fusio-setup</td><td class="p-5">First-time setup of the database, API metadata, admin user and the first deploy</td></tr>
                        <tr class="border-b border-white/5"><td class="p-5 font-mono text-orange-400 whitespace-nowrap">/fusio-resource</td><td class="p-5">Adds a complete REST resource end to end, from schema to deploy</td></tr>
                        <tr class="border-b border-white/5"><td class="p-5 font-mono text-orange-400 whitespace-nowrap">/fusio-migration</td><td class="p-5">Creates or changes tables and regenerates the table classes</td></tr>
                        <tr class="border-b border-white/5"><td class="p-5 font-mono text-orange-400 whitespace-nowrap">/fusio-cronjob</td><td class="p-5">Adds a periodic background job</td></tr>
                        <tr class="border-b border-white/5"><td class="p-5 font-mono text-orange-400 whitespace-nowrap">/fusio-deploy</td><td class="p-5">Applies <code>resources/*</code> to the Fusio instance</td></tr>
                        <tr><td class="p-5 font-mono text-orange-400 whitespace-nowrap">/fusio-sdk</td><td class="p-5">Generates a type-safe client SDK</td></tr>
                        </tbody>
                    </table>
                </div>
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
                <a href="https://github.com/apioo/fusio-framework/issues"
                   class="text-[10px] font-black text-slate-600 hover:text-white transition-colors uppercase tracking-widest">
                    Report Issue
                </a>
            </div>
        </div>
    </div>
</section>

<?php include(__DIR__ . '/../inc/footer.php'); ?>
