<?php include(__DIR__ . '/inc/header.php'); ?>

<?php include(__DIR__ . '/inc/sub_header.php'); ?>

<section class="py-12 bg-slate-950/40">
    <div class="container mx-auto px-6">
        <?php if(isset($error)): ?>
            <div class="bg-slate-900/40 backdrop-blur-md border border-red-500/30 rounded-[2.5rem] p-12 text-center relative overflow-hidden">
                <div class="absolute -top-24 -left-24 w-48 h-48 bg-red-500/10 blur-3xl rounded-full"></div>
                <div class="relative z-10 py-8">
                    <div class="inline-flex items-center justify-center w-20 h-20 rounded-3xl bg-red-500/10 border border-red-500/20 mb-8">
                        <svg class="w-10 h-10 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <h2 class="text-3xl font-black text-white mb-4 tracking-tighter"><span class="text-red-500"><?php echo $error; ?></span></h2>
                    <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                        <button onclick="window.history.back()" class="w-full sm:w-auto px-8 py-3 bg-white/5 hover:bg-white/10 border border-white/10 rounded-xl text-xs font-black text-white uppercase tracking-widest transition-all">
                            Back
                        </button>
                        <a href="https://discord.gg/eMrMgwsc6e" target="_blank" class="text-xs font-black text-slate-500 hover:text-white transition-colors uppercase tracking-widest">
                            Contact via Discord instead
                        </a>
                    </div>
                </div>
            </div>
        <?php elseif(isset($success)): ?>
            <div class="bg-slate-900/40 backdrop-blur-md border border-orange-500/30 rounded-[2.5rem] p-12 text-center relative overflow-hidden">
                <div class="absolute -top-24 -left-24 w-48 h-48 bg-orange-500/10 blur-3xl rounded-full"></div>
                <div class="relative z-10 py-8">
                    <div class="inline-flex items-center justify-center w-20 h-20 rounded-3xl bg-orange-500/10 border border-orange-500/20 mb-8">
                        <svg class="w-10 h-10 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path d="M5 13l4 4L19 7" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <h2 class="text-3xl font-black text-white mb-4 tracking-tighter">Message <span class="text-orange-500">Dispatched</span></h2>
                    <p class="text-slate-400 max-w-sm mx-auto mb-10 leading-relaxed">
                        Your inquiry has been successfully routed to the Fusio team.
                    </p>
                    <div class="inline-flex items-center gap-4 px-4 py-2 rounded-xl bg-slate-950/50 border border-white/5 mb-10">
                        <div class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></div>
                        <span class="text-[10px] font-mono font-bold text-slate-500 uppercase tracking-widest">Status: Transmission Verified</span>
                    </div>
                </div>
            </div>
        <?php else: ?>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
                <div class="p-8 rounded-[2rem] bg-slate-900/40 border border-white/5 hover:border-orange-500/30 transition-all group">
                    <div class="flex items-center justify-between mb-6">
                        <div class="w-12 h-12 rounded-xl bg-indigo-500/10 flex items-center justify-center text-indigo-400">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M20.317 4.37a19.791 19.791 0 0 0-4.885-1.515a.074.074 0 0 0-.079.037c-.21.375-.444.864-.608 1.25a18.27 18.27 0 0 0-5.487 0a12.64 12.64 0 0 0-.617-1.25a.077.077 0 0 0-.079-.037A19.736 19.736 0 0 0 3.677 4.37a.07.07 0 0 0-.032.027C.533 9.046-.32 13.58.099 18.057a.082.082 0 0 0 .031.057a19.9 19.9 0 0 0 5.993 3.03a.078.078 0 0 0 .084-.028a14.09 14.09 0 0 0 1.226-1.994a.076.076 0 0 0-.041-.106a13.107 13.107 0 0 1-1.872-.892a.077.077 0 0 1-.008-.128a10.2 10.2 0 0 0 .372-.292a.074.074 0 0 1 .077-.01c3.928 1.793 8.18 1.793 12.062 0a.074.074 0 0 1 .078.01c.12.098.246.198.373.292a.077.077 0 0 1-.006.127a12.299 12.299 0 0 1-1.873.892a.077.077 0 0 0-.041.107c.36.698.772 1.362 1.225 1.993a.076.076 0 0 0 .084.028a19.839 19.839 0 0 0 6.002-3.03a.077.077 0 0 0 .032-.054c.5-5.177-.838-9.674-3.549-13.66a.061.061 0 0 0-.031-.03z"/></svg>
                        </div>
                        <span class="text-[10px] font-mono text-emerald-500">Live</span>
                    </div>
                    <h3 class="text-white font-bold mb-2">Discord Chat</h3>
                    <p class="text-xs text-slate-500 leading-relaxed mb-6">Real-time support and architectural discussions with the core team.</p>
                    <a href="https://discord.gg/eMrMgwsc6e" target="_blank" class="text-[10px] font-black text-slate-400 group-hover:text-orange-500 uppercase tracking-widest transition-colors">Join Server →</a>
                </div>

                <div class="p-8 rounded-[2rem] bg-slate-900/40 border border-white/5 hover:border-orange-500/30 transition-all group">
                    <div class="flex items-center justify-between mb-6">
                        <div class="w-12 h-12 rounded-xl bg-white/5 flex items-center justify-center text-white">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.292 24 17.817 24 12.5c0-6.627-5.373-12-12-12"/></svg>
                        </div>
                        <span class="text-[10px] font-mono text-slate-500 uppercase">OS</span>
                    </div>
                    <h3 class="text-white font-bold mb-2">Issue Tracker</h3>
                    <p class="text-xs text-slate-500 leading-relaxed mb-6">Report technical bugs, suggest features, and track the development roadmap.</p>
                    <a href="https://github.com/apioo/fusio/issues" target="_blank" class="text-[10px] font-black text-slate-400 group-hover:text-orange-500 uppercase tracking-widest transition-colors">Open Issues →</a>
                </div>

                <div class="p-8 rounded-[2rem] bg-slate-900/40 border border-white/5 hover:border-orange-500/30 transition-all group">
                    <div class="flex items-center justify-between mb-6">
                        <div class="w-12 h-12 rounded-xl bg-red-500/10 flex items-center justify-center text-red-500">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.872.505 9.377.505 9.377.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                        </div>
                        <span class="text-[10px] font-mono text-slate-500 uppercase">Video</span>
                    </div>
                    <h3 class="text-white font-bold mb-2">Tutorials</h3>
                    <p class="text-xs text-slate-500 leading-relaxed mb-6">Deep-dives into specific use cases and visual setup guides for Fusio.</p>
                    <a href="https://www.youtube.com/c/FusioAPI" target="_blank" class="text-[10px] font-black text-slate-400 group-hover:text-orange-500 uppercase tracking-widest transition-colors">Watch Now →</a>
                </div>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
                <div class="lg:col-span-7">
                    <div class="bg-slate-900/40 backdrop-blur-md border border-white/5 rounded-[2.5rem] p-8 md:p-12">
                        <form method="POST" id="contactForm" class="space-y-8">
                            <input type="hidden" id="captcha" name="captcha" value="">
                            <div>
                                <label for="email" class="block text-[10px] font-black text-slate-500 uppercase tracking-[0.2em] mb-4">01. Sender Address</label>
                                <input type="email" id="email" name="email" placeholder="engineer@company.com" class="w-full bg-slate-950/50 border border-white/10 rounded-xl px-5 py-4 text-white placeholder:text-slate-600 focus:outline-none focus:border-orange-500/50 focus:ring-1 focus:ring-orange-500/20 transition-all">
                            </div>
                            <div>
                                <label for="message" class="block text-[10px] font-black text-slate-500 uppercase tracking-[0.2em] mb-4">02. Message Body</label>
                                <textarea id="message" name="message" rows="6" placeholder="How can we assist your project?" class="w-full bg-slate-950/50 border border-white/10 rounded-xl px-5 py-4 text-white placeholder:text-slate-600 focus:outline-none focus:border-orange-500/50 focus:ring-1 focus:ring-orange-500/20 transition-all resize-none"></textarea>
                            </div>
                            <button type="submit" id="contactButton" name="contactButton" class="w-full md:w-auto px-10 py-4 bg-orange-500 hover:bg-orange-600 text-white font-black text-xs uppercase tracking-[0.2em] rounded-xl transition-all shadow-lg shadow-orange-500/20 active:scale-[0.98]">
                                Dispatch Message →
                            </button>
                        </form>
                    </div>
                </div>
                <div class="lg:col-span-5">
                    <div class="h-full p-8 md:p-12 rounded-[2.5rem] bg-gradient-to-br from-orange-500/10 to-transparent border border-orange-500/20 flex flex-col justify-between">
                        <div>
                            <h3 class="text-sm font-black text-orange-500 uppercase tracking-widest mb-4">Consulting Services</h3>
                            <p class="text-lg text-slate-300 mb-6 leading-relaxed">
                                Need professional architectural guidance? Our GitHub sponsor consulting tier provides direct access to the core developers for your enterprise deployment.
                            </p>
                        </div>
                        <a href="https://github.com/sponsors/chriskapp" target="_blank" class="inline-flex items-center gap-2 text-xs font-black text-white hover:text-orange-400 transition-colors uppercase tracking-[0.2em]">
                            View Sponsor Tiers <span class="text-lg">↗</span>
                        </a>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>

<script>
    document.getElementById('contactButton').addEventListener('click', function(e) {
        e.preventDefault();
        grecaptcha.enterprise.ready(async () => {
            const token = await grecaptcha.enterprise.execute('<?php echo $recaptcha_key; ?>', {action: 'SUBMIT'});
            document.getElementById('captcha').setAttribute('value', token);
            document.getElementById("contactForm").submit();
        });
    }, false);
</script>

<?php include(__DIR__ . '/inc/footer.php'); ?>
