<?php include(__DIR__ . '/../inc/header.php'); ?>

<?php include(__DIR__ . '/../inc/sub_header.php'); ?>

<section class="py-20 border-b border-white/5 bg-slate-950/40">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <span class="text-[10px] font-bold text-slate-400 uppercase tracking-widest px-2 py-1 rounded-md bg-white/5 border border-white/10">Notifications</span>
                <h2 class="text-3xl md:text-4xl font-black text-white tracking-tighter mt-6 mb-6">One API to notify them all</h2>
                <p class="text-slate-400 leading-relaxed mb-6">
                    Fusio Pulse is an open-source, self-hosted notification gateway. It wraps the Symfony Notifier component behind
                    a simple REST API, so any application, regardless of its language, can send chat, email, push and SMS messages
                    through a single HTTP call.
                </p>
                <p class="text-slate-400 leading-relaxed mb-10">
                    You configure your provider, i.e. Twilio, Slack or SendGrid, through a DSN and your apps only talk to Pulse.
                    Switching a provider is a single configuration change, your client code stays the same. Since Pulse is built
                    on Fusio you get authentication, scopes, rate limiting and logging out of the box.
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="https://github.com/apioo/fusio-pulse" target="_blank" class="px-6 py-3 bg-orange-600 hover:bg-orange-500 text-white rounded-xl text-sm font-bold transition shadow-lg shadow-orange-600/20">View on GitHub</a>
                </div>
            </div>
            <div class="rounded-[2rem] bg-slate-900/60 border border-white/10 overflow-hidden">
                <div class="flex items-center gap-2 px-6 py-4 border-b border-white/5 bg-white/[0.02]">
                    <span class="w-3 h-3 rounded-full bg-red-500/60"></span>
                    <span class="w-3 h-3 rounded-full bg-yellow-500/60"></span>
                    <span class="w-3 h-3 rounded-full bg-emerald-500/60"></span>
                    <span class="ml-4 text-[10px] font-mono text-slate-500 uppercase tracking-widest">Send an SMS</span>
                </div>
                <pre class="p-6 text-xs md:text-sm font-mono text-slate-300 leading-relaxed overflow-hidden">curl -X POST https://pulse.example.com/sms \
  -H "Authorization: Bearer [TOKEN]" \
  -H "Content-Type: application/json" \
  -d '{
    "phone": "+4917612345678",
    "subject": "Your verification code is 123456"
  }'</pre>
                <p class="px-6 pb-6 text-xs text-slate-500 leading-relaxed">
                    The SMS is delivered through the provider configured in the <code>SMS_DSN</code> environment variable,
                    i.e. <code>twilio://SID:TOKEN@default?from=FROM</code>.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="py-20 border-b border-white/5 bg-slate-950/50">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl md:text-4xl font-black text-white tracking-tighter mb-4">Features</h2>
        <p class="text-slate-400 max-w-2xl mb-12">Pulse focuses on being a small and simple gateway which you fully control. If you need complex workflows or an in-app inbox, take a look at a full notification platform.</p>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="p-8 rounded-3xl bg-white/5 border border-white/10 hover:border-orange-500/50 transition-all">
                <h3 class="text-lg font-bold text-white mb-3">One API, four channels</h3>
                <p class="text-slate-400 text-sm leading-relaxed">Send chat, email, push and SMS messages through a consistent JSON API.</p>
            </div>
            <div class="p-8 rounded-3xl bg-white/5 border border-white/10 hover:border-orange-500/50 transition-all">
                <h3 class="text-lg font-bold text-white mb-3">No vendor lock-in</h3>
                <p class="text-slate-400 text-sm leading-relaxed">Switch from Twilio to Vonage or from SendGrid to Postmark by changing a single DSN.</p>
            </div>
            <div class="p-8 rounded-3xl bg-white/5 border border-white/10 hover:border-orange-500/50 transition-all">
                <h3 class="text-lg font-bold text-white mb-3">Self-hosted</h3>
                <p class="text-slate-400 text-sm leading-relaxed">Your messages never pass through a third party platform and there are no per-message fees.</p>
            </div>
            <div class="p-8 rounded-3xl bg-white/5 border border-white/10 hover:border-orange-500/50 transition-all">
                <h3 class="text-lg font-bold text-white mb-3">Access control</h3>
                <p class="text-slate-400 text-sm leading-relaxed">Every channel has its own scope, so you decide which app is allowed to use which channel.</p>
            </div>
            <div class="p-8 rounded-3xl bg-white/5 border border-white/10 hover:border-orange-500/50 transition-all">
                <h3 class="text-lg font-bold text-white mb-3">Events</h3>
                <p class="text-slate-400 text-sm leading-relaxed">Every sent message triggers a CloudEvent, which you can subscribe to through a webhook.</p>
            </div>
            <div class="p-8 rounded-3xl bg-white/5 border border-white/10 hover:border-orange-500/50 transition-all">
                <h3 class="text-lg font-bold text-white mb-3">Docker ready</h3>
                <p class="text-slate-400 text-sm leading-relaxed">Run Pulse through the <code class="text-orange-400">fusio/pulse</code> image, i.e. on your own server with Plant.</p>
            </div>
        </div>
    </div>
</section>

<section class="py-20 border-b border-white/5 bg-slate-950/40">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <div>
                <h2 class="text-3xl font-black text-white tracking-tighter mb-4">Swap providers, not code</h2>
                <p class="text-slate-400 leading-relaxed mb-6">
                    Pulse uses the battle-tested Symfony Notifier bridges to deliver your messages. Each channel is configured through
                    an environment variable which contains the DSN of your provider. A channel without a DSN is simply disabled.
                </p>
                <p class="text-slate-400 leading-relaxed">
                    Provider specific settings, i.e. Slack blocks or the Expo push token, can be passed through the
                    <code class="text-orange-400">options</code> field of the request. Additional providers can be added by requiring
                    the fitting Symfony bridge. Pulse can also be self-hosted with
                    <a href="<?php echo $router->getAbsolutePath([\App\Controller\Project\Plant::class, 'show']); ?>" class="text-orange-500 hover:underline">Plant</a>.
                </p>
            </div>
            <div class="rounded-[2rem] bg-slate-900/40 border border-white/5 overflow-hidden">
                <table class="w-full text-left text-sm">
                    <thead>
                    <tr class="bg-white/5 border-b border-white/10">
                        <th class="p-5 text-[10px] font-black text-slate-500 uppercase tracking-widest">Endpoint</th>
                        <th class="p-5 text-[10px] font-black text-slate-500 uppercase tracking-widest">Providers</th>
                    </tr>
                    </thead>
                    <tbody class="text-slate-400">
                    <tr class="border-b border-white/5"><td class="p-5 font-mono text-orange-400">POST /chat</td><td class="p-5">Slack, Discord, Microsoft Teams, Telegram, Google Chat</td></tr>
                    <tr class="border-b border-white/5"><td class="p-5 font-mono text-orange-400">POST /email</td><td class="p-5">SendGrid, Mailgun, Amazon SES, Postmark, Resend</td></tr>
                    <tr class="border-b border-white/5"><td class="p-5 font-mono text-orange-400">POST /push</td><td class="p-5">Expo, OneSignal, Novu</td></tr>
                    <tr><td class="p-5 font-mono text-orange-400">POST /sms</td><td class="p-5">Twilio, Vonage, Sinch, Infobip, Telnyx</td></tr>
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
                <a href="https://github.com/apioo/fusio-pulse/issues"
                   class="text-[10px] font-black text-slate-600 hover:text-white transition-colors uppercase tracking-widest">
                    Report Issue
                </a>
            </div>
        </div>
    </div>
</section>

<?php include(__DIR__ . '/../inc/footer.php'); ?>
