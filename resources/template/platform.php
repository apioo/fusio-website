<?php include(__DIR__ . '/inc/header.php'); ?>

<?php include(__DIR__ . '/inc/sub_header.php'); ?>

<section class="py-32 bg-slate-950/40">
    <div class="container mx-auto px-6 space-y-40">
        <div class="reveal flex flex-col lg:flex-row items-center gap-16">
            <div class="lg:w-1/2">
                <span class="text-orange-500 font-mono text-xs tracking-[0.3em] mb-4 block">ENTITY_01</span>
                <h2 class="text-4xl font-bold text-white mb-6">Operation</h2>
                <p class="text-slate-400 text-lg leading-relaxed mb-8">
                    The entry point of your API. It maps an HTTP method and path to an Action while enforcing data integrity via Schemas.
                </p>
            </div>
            <div class="lg:w-1/2 group">
                <div class="relative p-2 bg-slate-900/80 border border-white/10 rounded-3xl shadow-2xl transition-transform duration-500 group-hover:scale-[1.02]">
                    <div class="absolute -inset-2 bg-orange-500/20 blur-2xl opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <img src="<?php echo $base; ?>/img/screens/backend_operation_small.png" alt="Operation UI" class="relative rounded-2xl w-full">
                </div>
            </div>
        </div>
        <div class="reveal flex flex-col lg:flex-row-reverse items-center gap-16">
            <div class="lg:w-1/2">
                <span class="text-orange-500 font-mono text-xs tracking-[0.3em] mb-4 block">ENTITY_02</span>
                <h2 class="text-4xl font-bold text-white mb-6">Action</h2>
                <p class="text-slate-400 text-lg leading-relaxed mb-8">
                    The execution layer for your business logic. Connect to databases, external APIs, or run custom scripts in PHP, JavaScript, or Python.
                </p>
            </div>
            <div class="lg:w-1/2 group">
                <div class="relative p-2 bg-slate-900/80 border border-white/10 rounded-3xl shadow-2xl transition-transform duration-500 group-hover:scale-[1.02]">
                    <div class="absolute -inset-2 bg-blue-500/20 blur-2xl opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <img src="<?php echo $base; ?>/img/screens/backend_action_small.png" alt="Action UI" class="relative rounded-2xl w-full">
                </div>
            </div>
        </div>
        <div class="reveal flex flex-col lg:flex-row items-center gap-16">
            <div class="lg:w-1/2">
                <span class="text-orange-500 font-mono text-xs tracking-[0.3em] mb-4 block">ENTITY_03</span>
                <h2 class="text-4xl font-bold text-white mb-6">Schema</h2>
                <p class="text-slate-400 text-lg leading-relaxed mb-8">
                    Defining the shape of your data. Based on <a href="https://typeschema.org/" class="text-orange-500">TypeSchema</a>, these models ensure that every request and response is perfectly structured.
                </p>
            </div>
            <div class="lg:w-1/2 group">
                <div class="relative p-2 bg-slate-900/80 border border-white/10 rounded-3xl shadow-2xl transition-transform duration-500 group-hover:scale-[1.02]">
                    <div class="absolute -inset-2 bg-purple-500/20 blur-2xl opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <img src="<?php echo $base; ?>/img/screens/backend_schema_small.png" alt="Schema UI" class="relative rounded-2xl w-full">
                </div>
            </div>
        </div>
        <div class="reveal flex flex-col lg:flex-row-reverse items-center gap-16">
            <div class="lg:w-1/2">
                <span class="text-orange-500 font-mono text-xs tracking-[0.3em] mb-4 block">ENTITY_04</span>
                <h2 class="text-4xl font-bold text-white mb-6">Connection</h2>
                <p class="text-slate-400 text-lg leading-relaxed mb-8">
                    The bridge to your infrastructure. Define how to reach external services like SQL databases, remote HTTP APIs or AI agents. Connections are resolved into fully configured clients for your actions.
                </p>
                <div class="flex flex-wrap gap-2">
                    <span class="px-3 py-1 rounded-md bg-white/5 border border-white/10 text-xs text-slate-400">MySQL</span>
                    <span class="px-3 py-1 rounded-md bg-white/5 border border-white/10 text-xs text-slate-400">PostgreSQL</span>
                    <span class="px-3 py-1 rounded-md bg-white/5 border border-white/10 text-xs text-slate-400">HTTP/REST</span>
                    <span class="px-3 py-1 rounded-md bg-white/5 border border-white/10 text-xs text-slate-400">MongoDB</span>
                </div>
            </div>
            <div class="lg:w-1/2 group">
                <div class="relative p-2 bg-slate-900/80 border border-white/10 rounded-3xl shadow-2xl transition-transform duration-500 group-hover:scale-[1.02]">
                    <div class="absolute -inset-2 bg-emerald-500/20 blur-2xl opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <img src="<?php echo $base; ?>/img/screens/backend_connection_small.png" alt="Connection UI" class="relative rounded-2xl w-full">
                </div>
            </div>
        </div>
        <div class="reveal flex flex-col lg:flex-row items-center gap-16">
            <div class="lg:w-1/2">
                <span class="text-orange-500 font-mono text-xs tracking-[0.3em] mb-4 block">ENTITY_05</span>
                <h2 class="text-4xl font-bold text-white mb-6">Event</h2>
                <p class="text-slate-400 text-lg leading-relaxed mb-8">
                    The heartbeat of asynchronous workflows. Actions emit named occurrences (e.g., <code>order_placed</code>) that allow external systems to subscribe via webhooks.
                </p>
            </div>
            <div class="lg:w-1/2 group">
                <div class="relative p-2 bg-slate-900/80 border border-white/10 rounded-3xl shadow-2xl transition-transform duration-500 group-hover:scale-[1.02]">
                    <div class="absolute -inset-2 bg-pink-500/20 blur-2xl opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <img src="<?php echo $base; ?>/img/screens/backend_event_small.png" alt="Event UI" class="relative rounded-2xl w-full">
                </div>
            </div>
        </div>
        <div class="reveal flex flex-col lg:flex-row-reverse items-center gap-16">
            <div class="lg:w-1/2">
                <span class="text-orange-500 font-mono text-xs tracking-[0.3em] mb-4 block">ENTITY_06</span>
                <h2 class="text-4xl font-bold text-white mb-6">Cronjob</h2>
                <p class="text-slate-400 text-lg leading-relaxed mb-8">
                    Automated maintenance and batch processing. Schedule any Action to run at regular intervals, be it every minute, hour, or specific day of the week.
                </p>
            </div>
            <div class="lg:w-1/2 group">
                <div class="relative p-2 bg-slate-900/80 border border-white/10 rounded-3xl shadow-2xl transition-transform duration-500 group-hover:scale-[1.02]">
                    <div class="absolute -inset-2 bg-yellow-500/20 blur-2xl opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <img src="<?php echo $base; ?>/img/screens/backend_cronjob_small.png" alt="Cronjob UI" class="relative rounded-2xl w-full">
                </div>
            </div>
        </div>
        <div class="reveal flex flex-col lg:flex-row items-center gap-16">
            <div class="lg:w-1/2">
                <span class="text-orange-500 font-mono text-xs tracking-[0.3em] mb-4 block">ENTITY_07</span>
                <h2 class="text-4xl font-bold text-white mb-6">Trigger</h2>
                <p class="text-slate-400 text-lg leading-relaxed mb-8">
                    The glue of event-driven architecture. Triggers listen for specific Events and immediately execute a configured Action, like sending an email when a user registers.
                </p>
            </div>
            <div class="lg:w-1/2 group">
                <div class="relative p-2 bg-slate-900/80 border border-white/10 rounded-3xl shadow-2xl transition-transform duration-500 group-hover:scale-[1.02]">
                    <div class="absolute -inset-2 bg-cyan-500/20 blur-2xl opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <img src="<?php echo $base; ?>/img/screens/backend_trigger_small.png" alt="Trigger UI" class="relative rounded-2xl w-full">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-20 bg-slate-900/50 border-y border-white/5 relative overflow-hidden">
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-64 h-64 bg-orange-500/10 blur-[80px] rounded-full pointer-events-none"></div>
    <div class="container mx-auto px-6 text-center relative z-10">
        <h2 class="text-2xl font-bold text-white mb-2">Conceptual Architecture</h2>
        <p class="text-slate-500 text-sm mb-10 italic">A visual blueprint of the Fusio core.</p>
        <div class="max-w-[400px] mx-auto p-6 bg-slate-50 rounded-2xl shadow-2xl border border-white/10 group">
            <div class="relative overflow-hidden rounded-lg">
                <img src="<?php echo $base; ?>/img/architecture.png" alt="Fusio Architecture Diagram" class="w-full h-auto mx-auto brightness-100 contrast-105 group-hover:scale-105 transition-transform duration-500"/>
            </div>
        </div>
    </div>
</section>

<section class="py-32 bg-slate-950 relative overflow-hidden">
    <div class="container mx-auto px-6 relative z-10">
        <div class="grid lg:grid-cols-2 gap-12 items-center p-8 md:p-12 rounded-[3rem] bg-slate-900/50 border border-white/10 mb-6 overflow-hidden relative group">
            <div class="absolute -right-20 -top-20 w-96 h-96 bg-orange-500/5 blur-[120px] rounded-full pointer-events-none"></div>
            <div class="relative z-10">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-orange-500/10 border border-orange-500/20 text-[10px] font-bold text-orange-500 mb-6 uppercase tracking-widest">
                    AI-Native Architecture
                </div>
                <h4 class="text-3xl md:text-4xl font-black text-white mb-6 tracking-tighter">AI Agents: <br><span class="text-slate-500">Internal & External</span></h4>
                <div class="space-y-6 text-slate-400 leading-relaxed">
                    <p>
                        Fusio bridges the gap between raw LLM power and secure execution. It acts as a <strong>controlled environment</strong> where AI can interact with your business logic without bypassing security layers.
                    </p>
                    <div class="grid grid-cols-1 gap-4">
                        <div class="flex gap-4 p-4 rounded-2xl bg-white/5 border border-white/5 hover:bg-white/[0.08] transition">
                            <div class="text-orange-500 mt-1">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" stroke-width="2"/></svg>
                            </div>
                            <div>
                                <b class="text-white block text-sm">Internal Agents</b>
                                <p class="text-xs">Assist developers in generating actions, schemas, and configurations within the Fusio backend.</p>
                            </div>
                        </div>
                        <div class="flex gap-4 p-4 rounded-2xl bg-white/5 border border-white/5 hover:bg-white/[0.08] transition">
                            <div class="text-blue-400 mt-1">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M13 10V3L4 14h7v7l9-11h-7z" stroke-width="2"/></svg>
                            </div>
                            <div>
                                <b class="text-white block text-sm">External Agents</b>
                                <p class="text-xs">Empower your users to build custom tools using your API operations as LLM-ready functions.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="relative lg:h-full min-h-[400px] flex items-center justify-center">
                <div class="relative w-full max-w-[350px] aspect-square">
                    <div class="absolute inset-0 m-auto w-24 h-24 bg-orange-500 rounded-3xl flex items-center justify-center shadow-[0_0_50px_rgba(249,115,22,0.3)] z-20 border-1 border-slate-900">
                        <img src="<?php echo $base; ?>/img/fusio_64px.png" alt="Logo" width="64" height="64" class="d-inline-block align-text-top">
                    </div>
                    <div class="absolute inset-0 animate-[spin_20s_linear_infinite] pointer-events-none">
                        <div class="absolute top-0 left-1/2 -translate-x-1/2 p-3 bg-slate-800 border border-white/10 rounded-xl text-[10px] text-white font-mono shadow-xl">
                            LLM Prompt
                        </div>
                        <div class="absolute bottom-0 left-1/2 -translate-x-1/2 p-3 bg-emerald-900/50 border border-emerald-500/30 rounded-xl text-[10px] text-emerald-400 font-mono shadow-xl">
                            Validation
                        </div>
                        <div class="absolute left-0 top-1/2 -translate-y-1/2 p-3 bg-blue-900/50 border border-blue-500/30 rounded-xl text-[10px] text-blue-300 font-mono shadow-xl">
                            Action Exec
                        </div>
                        <div class="absolute right-0 top-1/2 -translate-y-1/2 p-3 bg-red-900/50 border border-red-500/30 rounded-xl text-[10px] text-red-300 font-mono shadow-xl">
                            Auth Layer
                        </div>
                    </div>
                    <div class="absolute inset-0 m-auto w-24 h-24 bg-orange-500/20 rounded-full animate-ping"></div>
                    <div class="absolute inset-0 m-auto w-48 h-48 border border-white/5 rounded-full"></div>
                    <div class="absolute inset-0 m-auto w-72 h-72 border border-white/5 rounded-full"></div>
                </div>
            </div>
        </div>
        <div class="grid md:grid-cols-12 gap-6">
            <div class="md:col-span-12 p-8 bg-slate-900/50 border border-white/5 rounded-[2.5rem] flex flex-col lg:flex-row gap-8 hover:border-white/20 transition-all group reveal">
                <div>
                    <h4 class="text-2xl font-bold text-white mb-4">Polyglot Development</h4>
                    <p class="text-slate-400 mb-8">Build logic in your language of choice. Fusio's worker system handles the execution while providing seamless access to all your connections.</p>
                </div>
                <div class="lg:w-2/3 flex flex-col bg-slate-950 rounded-2xl overflow-hidden border border-white/10 font-mono text-xs shadow-2xl min-h-[350px]">
                    <div class="flex bg-white/5 border-b border-white/5 px-4 pt-2 gap-2 h-12 flex-shrink-0">
                        <button onclick="switchTab('php')" id="tab-php" class="tab-btn px-4 py-2 rounded-t-lg transition-all text-orange-500 border-b-2 border-orange-500 bg-white/5">PHP</button>
                        <button onclick="switchTab('js')" id="tab-js" class="tab-btn px-4 py-2 rounded-t-lg transition-all text-slate-500 hover:text-slate-300">JavaScript</button>
                        <button onclick="switchTab('python')" id="tab-python" class="tab-btn px-4 py-2 rounded-t-lg transition-all text-slate-500 hover:text-slate-300">Python</button>
                        <button onclick="switchTab('java')" id="tab-java" class="tab-btn px-4 py-2 rounded-t-lg transition-all text-slate-500 hover:text-slate-300">Java/Groovy</button>
                    </div>
                    <div class="p-6 overflow-auto custom-scrollbar flex-grow bg-slate-950/50" style="height: 300px;">
            <pre id="content-php" class="tab-content text-slate-400"><code><span class="text-purple-400">use</span> Fusio\Worker;
<span class="text-purple-400">use</span> Fusio\Engine;

<span class="text-purple-400">return function</span>(Worker\ExecuteRequest $request, Worker\ExecuteContext $context, Engine\ConnectorInterface $connector, Engine\Response\FactoryInterface $response, Engine\DispatcherInterface $dispatcher, LoggerInterface $logger) {
    <span class="text-blue-400">$connection</span> = <span class="text-blue-400">$connector</span>->getConnection(<span class="text-green-400">'my_database'</span>);

    <span class="text-slate-600">// @TODO implement my API endpoint logic</span>

    <span class="text-purple-400">return</span> <span class="text-blue-400">$response</span>->build(<span class="text-orange-400">200</span>, [], [
        <span class="text-green-400">'hello'</span> => <span class="text-green-400">'world'</span>,
    ]);
};</code></pre>
                        <pre id="content-js" class="tab-content hidden text-slate-400"><code><span class="text-purple-400">module.exports</span> = <span class="text-purple-400">async function</span>(request, context, connector, response, dispatcher, logger) {
    <span class="text-purple-400">const</span> connection = <span class="text-purple-400">await</span> connector.getConnection(<span class="text-green-400">'my_database'</span>);

    <span class="text-slate-600">// @TODO implement my API endpoint logic</span>

    <span class="text-purple-400">return</span> response.build(<span class="text-orange-400">200</span>, {}, {
        hello: <span class="text-green-400">'world'</span>
    });
};</code></pre>
                        <pre id="content-python" class="tab-content hidden text-slate-400"><code><span class="text-purple-400">def</span> <span class="text-blue-400">handle</span>(request, context, connector, response, dispatcher, logger):
    connection = connector.get_connection(<span class="text-green-400">'my_database'</span>)

    <span class="text-slate-600"># @TODO implement my API endpoint logic</span>

    <span class="text-purple-400">return</span> response.build(<span class="text-orange-400">200</span>, <span class="text-purple-400">None</span>, {
        <span class="text-green-400">'hello'</span>: <span class="text-green-400">'world'</span>
    })</code></pre>
                        <pre id="content-java" class="tab-content hidden text-slate-400"><code><span class="text-purple-400">import</span> org.fusioproject.worker.runtime.*;

<span class="text-purple-400">def</span> <span class="text-blue-400">handle</span>(ExecuteRequest request, ExecuteContext context, Connector connector, ResponseBuilder response, Dispatcher dispatcher, Logger logger) {
    <span class="text-purple-400">def</span> connection = connector.getConnection(<span class="text-green-400">"my_database"</span>);

    <span class="text-slate-600">// @TODO implement my API endpoint logic</span>

    <span class="text-purple-400">return</span> res.build(<span class="text-orange-400">200</span>, [:], [
        hello: <span class="text-green-400">"world"</span>
    ]);
}</code></pre>
                    </div>
                </div>
            </div>
            <div class="md:col-span-4 p-8 bg-slate-900/50 border border-white/5 rounded-[2.5rem] flex flex-col justify-between hover:border-orange-500/20 transition-all reveal">
                <div>
                    <div class="w-10 h-10 bg-orange-500/10 rounded-xl flex items-center justify-center mb-6 text-orange-500">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </div>
                    <h4 class="text-xl font-bold text-white mb-2">Marketplace</h4>
                    <p class="text-sm text-slate-400 leading-relaxed mb-6">Share and install entities directly from the community. A thriving hub for actions, schemas, and bundles.</p>
                </div>
                <a href="<?php echo $router->getAbsolutePath([\App\Controller\Marketplace::class, 'show']); ?>" class="text-xs font-bold text-orange-500 uppercase tracking-widest hover:underline">Explore Hub →</a>
            </div>
            <div class="md:col-span-4 p-8 bg-slate-900/50 border border-white/5 rounded-[2.5rem] hover:border-white/20 transition-all reveal">
                <div class="w-10 h-10 bg-blue-500/10 rounded-xl flex items-center justify-center mb-6 text-blue-400">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M13 10V3L4 14h7v7l9-11h-7z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </div>
                <h4 class="text-xl font-bold text-white mb-4">Unified Protocols</h4>
                <div class="space-y-2">
                    <div class="flex items-center justify-between px-3 py-2 bg-white/5 rounded-lg border border-white/5">
                        <span class="text-[10px] font-bold text-slate-300">MCP Tool</span>
                        <span class="w-1.5 h-1.5 rounded-full bg-orange-500 animate-pulse"></span>
                    </div>
                    <div class="flex items-center justify-between px-3 py-2 bg-white/5 rounded-lg border border-white/5">
                        <span class="text-[10px] font-bold text-slate-500">GraphQL</span>
                    </div>
                    <div class="flex items-center justify-between px-3 py-2 bg-white/5 rounded-lg border border-white/5">
                        <span class="text-[10px] font-bold text-slate-500">JsonRPC / REST</span>
                    </div>
                </div>
            </div>
            <div class="md:col-span-4 p-8 bg-slate-900/50 border border-white/5 rounded-[2.5rem] hover:border-white/20 transition-all group reveal">
                <div class="w-10 h-10 bg-purple-500/10 rounded-xl flex items-center justify-center mb-6 text-purple-400">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </div>
                <h4 class="text-xl font-bold text-white mb-4">Type-Safe SDKs</h4>
                <p class="text-sm text-slate-400 mb-6">Automated code generation for client/server harmony.</p>
                <div class="flex gap-3 opacity-40 grayscale group-hover:grayscale-0 group-hover:opacity-100 transition duration-500">
                    <div class="text-[10px] font-mono font-bold bg-white/5 px-2 py-1 rounded border border-white/10">C#</div>
                    <div class="text-[10px] font-mono font-bold bg-white/5 px-2 py-1 rounded border border-white/10">Go</div>
                    <div class="text-[10px] font-mono font-bold bg-white/5 px-2 py-1 rounded border border-white/10">Java</div>
                    <div class="text-[10px] font-mono font-bold bg-white/5 px-2 py-1 rounded border border-white/10">JavaScript</div>
                    <div class="text-[10px] font-mono font-bold bg-white/5 px-2 py-1 rounded border border-white/10">PHP</div>
                    <div class="text-[10px] font-mono font-bold bg-white/5 px-2 py-1 rounded border border-white/10">Python</div>
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
