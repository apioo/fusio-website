        </div>
    </main>
    <footer class="relative z-20 bg-slate-950/80 backdrop-blur-lg border-t border-white/5 pt-24 pb-12">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-6 gap-12 mb-16">
                <div class="lg:col-span-2">
                    <div class="flex items-center gap-2 mb-6">
                        <div class="w-8 h-8 flex items-center justify-center">
                            <img src="<?php echo $base; ?>/img/fusio_64px.png" alt="Logo" width="32" height="32" class="d-inline-block align-text-top">
                        </div>
                        <span class="text-2xl font-black text-white tracking-tighter">Fusio</span>
                    </div>
                    <p class="text-slate-300 mb-4 max-w-xs">
                        The open source API management platform.
                    </p>
                    <div class="text-sm text-slate-500 space-y-1">
                        <p>Code licensed <span class="text-slate-400">Apache 2.0</span>.</p>
                        <p>Made by <a href="https://chrisk.app" class="text-orange-500/80 hover:text-orange-500 transition">chrisk.app</a> in Germany.</p>
                    </div>
                </div>
                <div>
                    <h4 class="text-white font-bold mb-6 text-sm uppercase tracking-widest">Links</h4>
                    <ul class="space-y-4 text-sm text-slate-400">
                        <li><a href="https://docs.fusio-project.org/" class="hover:text-orange-500 transition">Documentation</a></li>
                        <li><a href="https://typehub.cloud/" class="hover:text-orange-500 transition">TypeHub</a></li>
                        <li><a href="https://typeapi.org/" class="hover:text-orange-500 transition">TypeAPI</a></li>
                        <li><a href="https://typeschema.org/" class="hover:text-orange-500 transition">TypeSchema</a></li>
                        <li><a href="https://phpsx.org/" class="hover:text-orange-500 transition">PSX</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-white font-bold mb-6 text-sm uppercase tracking-widest">Resources</h4>
                    <ul class="space-y-4 text-sm text-slate-400">
                        <li><a href="<?php echo $router->getAbsolutePath([\App\Controller\Adapter::class, 'show']); ?>" class="hover:text-orange-500 transition">Adapter</a></li>
                        <li><a href="<?php echo $router->getAbsolutePath([\App\Controller\Worker::class, 'show']); ?>" class="hover:text-orange-500 transition">Worker</a></li>
                        <li><a href="<?php echo $router->getAbsolutePath([\App\Controller\Integration::class, 'show']); ?>" class="hover:text-orange-500 transition">Integration</a></li>
                        <li><a href="<?php echo $router->getAbsolutePath([\App\Controller\Partner::class, 'show']); ?>" class="hover:text-orange-500 transition">Partner</a></li>
                        <li><a href="<?php echo $router->getAbsolutePath([\App\Controller\Brand::class, 'show']); ?>" class="hover:text-orange-500 transition">Brand</a></li>
                        <li><a href="<?php echo $router->getAbsolutePath([\App\Controller\Contact::class, 'show']); ?>" class="hover:text-orange-500 transition">Contact</a></li>
                        <li><a href="<?php echo $router->getAbsolutePath([\App\Controller\Imprint::class, 'show']); ?>" class="hover:text-orange-500 transition">Imprint</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-white font-bold mb-6 text-sm uppercase tracking-widest">Community</h4>
                    <ul class="space-y-4 text-sm text-slate-400">
                        <li><a href="https://github.com/apioo/fusio" class="hover:text-orange-500 transition">GitHub</a>
                        </li>
                        <li><a href="https://twitter.com/FusioAPI" class="hover:text-orange-500 transition">Twitter</a>
                        </li>
                        <li><a href="https://www.youtube.com/c/FusioAPI" class="hover:text-orange-500 transition">Youtube</a>
                        </li>
                        <li><a href="https://discord.gg/eMrMgwsc6e" class="hover:text-orange-500 transition">Discord</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-white font-bold mb-6 text-sm uppercase tracking-widest">Comparison</h4>
                    <ul class="space-y-4 text-sm text-slate-400">
                        <li><a href="https://www.fusio-project.org/comparison/kong" class="hover:text-orange-500 transition">vs Kong</a></li>
                        <li><a href="https://www.fusio-project.org/comparison/tyk" class="hover:text-orange-500 transition">vs Tyk</a></li>
                        <li><a href="https://www.fusio-project.org/comparison/wso2" class="hover:text-orange-500 transition">vs WSO2</a></li>
                        <li><a href="https://www.fusio-project.org/comparison/firebase" class="hover:text-orange-500 transition">vs Firebase</a></li>
                        <li><a href="https://www.fusio-project.org/comparison/supabase" class="hover:text-orange-500 transition">vs Supabase</a></li>
                        <li><a href="https://www.fusio-project.org/comparison/appwrite" class="hover:text-orange-500 transition">vs Appwrite</a></li>
                    </ul>
                </div>
            </div>
            <div class="pt-8 border-t border-white/5 flex flex-col md:flex-row justify-between items-center gap-4">
                <p class="text-xs text-slate-600">
                    © 2026 Fusio Project. All rights reserved.
                </p>
                <div class="flex gap-6">
                    <a href="https://github.com/apioo/fusio" class="text-slate-600 hover:text-white transition"><span class="sr-only">GitHub</span>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 0C5.374 0 0 5.373 0 12c0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.042-1.416-4.042-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576C20.566 21.797 24 17.3 24 12c0-6.627-5.373-12-12-12z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </footer>
</div>

</body>
</html>

