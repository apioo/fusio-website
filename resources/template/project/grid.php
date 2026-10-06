<?php include(__DIR__ . '/../inc/header.php'); ?>

<?php include(__DIR__ . '/../inc/sub_header.php'); ?>

<section class="py-20 border-b border-white/5 bg-slate-950/40">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <span class="text-[10px] font-bold text-slate-400 uppercase tracking-widest px-2 py-1 rounded-md bg-white/5 border border-white/10">Database API</span>
                <h2 class="text-3xl md:text-4xl font-black text-white tracking-tighter mt-6 mb-6">From database to REST API with a single command</h2>
                <p class="text-slate-400 leading-relaxed mb-6">
                    Fusio Grid turns an existing MySQL/MariaDB, PostgreSQL or SQLite database into a secure REST API, similar to tools
                    like PostgREST. It reads your database schema and creates schemas, actions and CRUD operations for every table.
                </p>
                <p class="text-slate-400 leading-relaxed mb-10">
                    Because everything is generated as regular Fusio entities, you can edit the result in the Fusio backend and get
                    all gateway features like authentication, rate limiting, OpenAPI and SDK generation on top. Once your requirements
                    grow beyond plain CRUD, you can extend every operation with custom logic, there is no lock-in.
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="https://github.com/apioo/fusio-grid" target="_blank" class="px-6 py-3 bg-orange-600 hover:bg-orange-500 text-white rounded-xl text-sm font-bold transition shadow-lg shadow-orange-600/20">View on GitHub</a>
                    <a href="https://docs.fusio-project.org/" target="_blank" class="px-6 py-3 bg-white/5 hover:bg-white/10 rounded-xl text-sm font-bold border border-white/5 text-white transition">Documentation</a>
                </div>
            </div>
            <div class="rounded-[2rem] bg-slate-900/60 border border-white/10 overflow-hidden">
                <div class="flex items-center gap-2 px-6 py-4 border-b border-white/5 bg-white/[0.02]">
                    <span class="w-3 h-3 rounded-full bg-red-500/60"></span>
                    <span class="w-3 h-3 rounded-full bg-yellow-500/60"></span>
                    <span class="w-3 h-3 rounded-full bg-emerald-500/60"></span>
                    <span class="ml-4 text-[10px] font-mono text-slate-500 uppercase tracking-widest">Headless setup</span>
                </div>
                <pre class="p-6 text-xs md:text-sm font-mono text-slate-300 leading-relaxed overflow-x-auto"><span class="text-slate-500"># expose the ecommerce database under /ecommerce</span>
php bin/fusio grid:setup ecommerce \
  --driver=pdo_mysql \
  --host=127.0.0.1 \
  --dbname=ecommerce_prod \
  --user=db_user \
  --password=secret_pass \
  --prefix=app_ \
  --no-interaction

<span class="text-slate-500"># or let the command guide you interactively</span>
php bin/fusio grid:setup</pre>
            </div>
        </div>
    </div>
</section>

<section class="py-20 border-b border-white/5 bg-slate-950/50">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl md:text-4xl font-black text-white tracking-tighter mb-4">Key features</h2>
        <p class="text-slate-400 max-w-2xl mb-12">Skip the boilerplate and get a production-ready API for your existing data in minutes.</p>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="p-8 rounded-3xl bg-white/5 border border-white/10 hover:border-orange-500/50 transition-all">
                <h3 class="text-lg font-bold text-white mb-3">Instant REST endpoints</h3>
                <p class="text-slate-400 text-sm leading-relaxed">Full CRUD endpoints (<code>GET</code>, <code>POST</code>, <code>PUT</code>, <code>DELETE</code>) for every table under <code>/{connection}/{table}</code>.</p>
            </div>
            <div class="p-8 rounded-3xl bg-white/5 border border-white/10 hover:border-orange-500/50 transition-all">
                <h3 class="text-lg font-bold text-white mb-3">Type-safe schemas</h3>
                <p class="text-slate-400 text-sm leading-relaxed">Columns, types and nullability are reflected into <a href="https://typeschema.org/" class="text-orange-500 hover:underline">TypeSchema</a> definitions which validate all incoming requests.</p>
            </div>
            <div class="p-8 rounded-3xl bg-white/5 border border-white/10 hover:border-orange-500/50 transition-all">
                <h3 class="text-lg font-bold text-white mb-3">Pagination, filtering &amp; sorting</h3>
                <p class="text-slate-400 text-sm leading-relaxed">Collection endpoints support paging, sorting and filtering through query parameters out of the box.</p>
            </div>
            <div class="p-8 rounded-3xl bg-white/5 border border-white/10 hover:border-orange-500/50 transition-all">
                <h3 class="text-lg font-bold text-white mb-3">Secure by default</h3>
                <p class="text-slate-400 text-sm leading-relaxed">All generated operations are private. Access is controlled through API keys, OAuth2 scopes, rate limits and logging.</p>
            </div>
            <div class="p-8 rounded-3xl bg-white/5 border border-white/10 hover:border-orange-500/50 transition-all">
                <h3 class="text-lg font-bold text-white mb-3">OpenAPI &amp; SDKs</h3>
                <p class="text-slate-400 text-sm leading-relaxed">Generate an OpenAPI specification or client SDKs for TypeScript, PHP, Python, Java, Go, C# and more.</p>
            </div>
            <div class="p-8 rounded-3xl bg-white/5 border border-white/10 hover:border-orange-500/50 transition-all">
                <h3 class="text-lg font-bold text-white mb-3">CI/CD friendly</h3>
                <p class="text-slate-400 text-sm leading-relaxed">Configure everything through terminal prompts or headless via CLI options, i.e. inside a Docker entrypoint. Re-runs pick up new tables and keep your changes.</p>
            </div>
        </div>
    </div>
</section>

<section class="py-20 border-b border-white/5 bg-slate-950/40">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl font-black text-white tracking-tighter mb-4">The generated API</h2>
        <p class="text-slate-400 max-w-2xl mb-12">For a connection named <code class="text-orange-400">inventory</code> with an <code class="text-orange-400">items</code> table, Grid creates the following operations:</p>
        <div class="rounded-[2.5rem] bg-slate-900/40 border border-white/5 overflow-hidden mb-12">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                    <tr class="bg-white/5 border-b border-white/10">
                        <th class="p-6 text-[10px] font-black text-slate-500 uppercase tracking-widest">Method</th>
                        <th class="p-6 text-[10px] font-black text-slate-500 uppercase tracking-widest">Path</th>
                        <th class="p-6 text-[10px] font-black text-slate-500 uppercase tracking-widest">Operation</th>
                        <th class="p-6 text-[10px] font-black text-slate-500 uppercase tracking-widest">Description</th>
                    </tr>
                    </thead>
                    <tbody class="text-sm text-slate-300">
                    <tr class="border-b border-white/5 hover:bg-white/[0.02]"><td class="p-6 font-mono text-emerald-400">GET</td><td class="p-6 font-mono">/inventory/items</td><td class="p-6 font-mono text-slate-400">inventory.items.getAll</td><td class="p-6 text-slate-400">List rows (paginated)</td></tr>
                    <tr class="border-b border-white/5 hover:bg-white/[0.02]"><td class="p-6 font-mono text-emerald-400">GET</td><td class="p-6 font-mono">/inventory/items/:id</td><td class="p-6 font-mono text-slate-400">inventory.items.get</td><td class="p-6 text-slate-400">Fetch a row by primary key</td></tr>
                    <tr class="border-b border-white/5 hover:bg-white/[0.02]"><td class="p-6 font-mono text-blue-400">POST</td><td class="p-6 font-mono">/inventory/items</td><td class="p-6 font-mono text-slate-400">inventory.items.create</td><td class="p-6 text-slate-400">Create a row</td></tr>
                    <tr class="border-b border-white/5 hover:bg-white/[0.02]"><td class="p-6 font-mono text-yellow-400">PUT</td><td class="p-6 font-mono">/inventory/items/:id</td><td class="p-6 font-mono text-slate-400">inventory.items.update</td><td class="p-6 text-slate-400">Update a row by primary key</td></tr>
                    <tr class="hover:bg-white/[0.02]"><td class="p-6 font-mono text-red-400">DELETE</td><td class="p-6 font-mono">/inventory/items/:id</td><td class="p-6 font-mono text-slate-400">inventory.items.delete</td><td class="p-6 text-slate-400">Delete a row by primary key</td></tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <div>
                <h3 class="text-white font-bold mb-4 uppercase tracking-widest text-sm">Collection query parameters</h3>
                <ul class="space-y-3 text-sm text-slate-400">
                    <li><code class="text-orange-400">startIndex</code> / <code class="text-orange-400">count</code> &ndash; offset and number of rows to return</li>
                    <li><code class="text-orange-400">sortBy</code> / <code class="text-orange-400">sortOrder</code> &ndash; column and direction (<code>ASC</code> or <code>DESC</code>)</li>
                    <li><code class="text-orange-400">filterBy</code> / <code class="text-orange-400">filterValue</code> &ndash; column and value to filter on</li>
                    <li><code class="text-orange-400">filterOp</code> &ndash; <code>contains</code>, <code>equals</code>, <code>startsWith</code> or <code>present</code></li>
                </ul>
            </div>
            <div class="rounded-[2rem] bg-slate-900/60 border border-white/10 overflow-hidden">
                <pre class="p-6 text-xs font-mono text-slate-300 leading-relaxed overflow-x-auto"><span class="text-emerald-400">GET</span> /inventory/items?count=2&amp;sortBy=name&amp;filterBy=name&amp;filterOp=contains&amp;filterValue=chair

{
  "totalResults": 12,
  "itemsPerPage": 2,
  "startIndex": 0,
  "entry": [
    {"id": 3, "name": "Arm chair", "price": 199.9},
    {"id": 7, "name": "Office chair", "price": 249}
  ]
}</pre>
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
                <a href="https://github.com/apioo/fusio-grid/issues"
                   class="text-[10px] font-black text-slate-600 hover:text-white transition-colors uppercase tracking-widest">
                    Report Issue
                </a>
            </div>
        </div>
    </div>
</section>

<?php include(__DIR__ . '/../inc/footer.php'); ?>
