
function switchTab(lang) {
    // Hide all content
    document.querySelectorAll('.tab-content').forEach(c => c.classList.add('hidden'));
    // Deactivate all buttons
    document.querySelectorAll('.tab-btn').forEach(b => {
        b.classList.remove('text-orange-500', 'border-b-2', 'border-orange-500', 'bg-white/5');
        b.classList.add('text-slate-500');
    });

    // Show selected content
    document.getElementById('content-' + lang).classList.remove('hidden');
    // Activate selected button
    const activeBtn = document.getElementById('tab-' + lang);
    activeBtn.classList.add('text-orange-500', 'border-b-2', 'border-orange-500', 'bg-white/5');
    activeBtn.classList.remove('text-slate-500');
}
