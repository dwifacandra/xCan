<?php use Livewire\Component;new class extends Component{};?>

<!-- Explore Section -->
<section class="w-full bg-surface py-20 px-6">
	<div class="md:max-w-8/12 mx-auto">
		<div class="text-center mb-16 space-y-4">
			<h2 class="font-headline-lg text-headline-lg text-primary">Exploring
				the Digital Frontier</h2>
			<p class="text-on-surface-variant max-w-2xl mx-auto">Deep dives into the technical
				architecture, design philosophy, and ecosystem growth of the xCan platform.</p>
		</div>
		<div class="grid grid-cols-1 md:grid-cols-4 gap-6 auto-rows-[220px]">
			<div
				class="md:col-span-2 md:row-span-2 bg-zinc-950 text-white rounded-2xl p-8 flex flex-col justify-between border border-white/10 hover:shadow-2xl transition-all duration-300 group">
				<div>
					<div class="flex items-center gap-2 mb-6 opacity-60"> <i
							class="fa-solid fa-code text-primary-container text-xs"></i> <span
							class="font-label-sm text-[10px] tracking-widest uppercase">Development</span> </div>
					<h3 class="font-headline-lg text-2xl text-white mb-4 leading-tight">Mastering Laravel Performance with
						Eloquent Caching</h3>
					<p class="text-zinc-400 text-sm mb-6">Architectural strategies for scaling high-traffic API layers without
						compromising developer velocity.</p>
					<div class="bg-zinc-900 rounded-lg p-4 font-mono text-[10px] text-zinc-500 border border-white/5">
						<div class="flex gap-1.5 mb-2">
							<div class="w-2 h-2 rounded-full bg-red-500/40"></div>
							<div class="w-2 h-2 rounded-full bg-yellow-500/40"></div>
							<div class="w-2 h-2 rounded-full bg-green-500/40"></div>
						</div>
						<div class="text-primary-container">Cache::remember('users', $seconds, function () {</div>
						<div class="pl-4">return DB::table('users')-&gt;get();</div>
						<div class="text-primary-container">});</div>
					</div>
				</div>
				<div class="flex items-center gap-3 mt-8"> <img alt="Adrian" class="w-8 h-8 rounded-full border border-white/20"
						src="https://www.gstatic.com/labs-code/stitch/stitch-placeholder-300x300.svg">
					<div>
						<p class="font-bold text-xs">Adrian Verner</p>
						<p class="text-[10px] text-zinc-500">Principal Architect</p>
					</div>
				</div>
			</div>
			<div
				class="md:col-span-1 md:row-span-2 bg-white rounded-2xl p-6 border border-outline-variant/30 flex flex-col justify-between hover:shadow-xl transition-all">
				<div>
					<div class="flex items-center gap-2 mb-4 text-primary"> <span
							class="material-symbols-outlined text-[16px]">palette</span> <span
							class="font-label-sm text-[10px] tracking-widest uppercase">Design</span> </div>
					<h3 class="text-lg font-bold text-on-surface mb-3">The Psychology of Micro-interactions</h3>
					<p class="text-on-surface-variant text-xs mb-6 leading-relaxed">How subtle animations increase user
						retention by 24% through feedback loops.</p>
					<div class="relative flex items-center justify-center py-8">
						<div class="w-24 h-24 rounded-full border-4 border-primary/10 flex items-center justify-center">
							<div class="w-20 h-20 rounded-full border-4 border-primary border-t-transparent animate-spin"></div>
						</div> <span class="absolute text-[10px] font-bold text-primary">88%</span>
					</div>
				</div>
				<div class="flex items-center gap-2 mt-6">
					<div
						class="w-6 h-6 rounded-full bg-primary-fixed flex items-center justify-center text-primary font-bold text-[8px]">
						SC</div>
					<div class="text-[10px] font-bold">Sarah Chen</div>
				</div>
			</div>
			<div
				class="md:col-span-1 md:row-span-1 bg-surface-container-low rounded-2xl p-6 border border-outline-variant/30 flex flex-col justify-between hover:shadow-lg transition-all">
				<div class="flex items-center gap-2 mb-3 text-secondary"> <span
						class="material-symbols-outlined text-[18px]">security</span> <span
						class="font-label-sm text-[10px] tracking-widest uppercase">Security</span> </div>
				<h3 class="font-bold text-sm text-on-surface mb-2 leading-tight">Hardening Edge Identity Infrastructure</h3>
				<div class="flex items-center gap-2">
					<div
						class="w-6 h-6 rounded-full bg-secondary-fixed-dim flex items-center justify-center text-secondary font-bold text-[8px]">
						MK</div>
					<p class="text-[10px] text-on-surface-variant font-bold">Mark Kovacs</p>
				</div>
			</div>
			<div
				class="md:col-span-1 md:row-span-1 bg-surface-container-high rounded-2xl p-6 border border-outline-variant/30 flex flex-col justify-between hover:shadow-lg transition-all">
				<div> <span class="text-[9px] font-bold text-on-surface-variant/40 uppercase tracking-widest mb-2 block">Case
						Study</span>
					<h3 class="font-bold text-sm text-on-surface leading-tight">Zero-Config Global CDNs: The xCan Explainer</h3>
				</div>
				<div class="flex justify-end"> <span
						class="material-symbols-outlined text-outline-variant text-4xl opacity-30">public</span> </div>
			</div>
			<div
				class="md:col-span-2 md:row-span-1 bg-surface-container rounded-2xl p-8 flex items-center justify-between hover:shadow-xl transition-all border border-outline-variant/10">
				<div class="max-w-[60%]">
					<div class="flex items-center gap-2 mb-3 text-primary-container"> <span
							class="material-symbols-outlined text-[18px]">insights</span> <span
							class="font-label-sm text-[10px] tracking-widest uppercase">Analytics</span> </div>
					<h3 class="font-bold text-lg text-on-surface mb-2">The Future of Live Streaming</h3>
					<p class="text-xs text-on-surface-variant">Predictive analytics for modular stream overlays and engagement.
					</p>
				</div>
				<div class="w-1/3 flex flex-col gap-1.5">
					<div class="h-2.5 w-full bg-primary/10 rounded-full"></div>
					<div class="h-2.5 w-[80%] bg-primary/30 rounded-full"></div>
					<div class="h-2.5 w-[90%] bg-primary/60 rounded-full"></div>
				</div>
			</div>
			<div
				class="md:col-span-1 md:row-span-1 bg-white rounded-2xl p-6 border border-outline-variant/30 flex flex-col justify-between hover:shadow-lg transition-all">
				<div class="flex items-center gap-2 mb-3 text-primary"> <i class="fa-solid fa-layer-group text-xs"></i> <span
						class="font-label-sm text-[10px] tracking-widest uppercase">Tech Stack</span> </div>
				<h3 class="font-bold text-sm text-on-surface leading-tight">TALL Stack Best Practices: State Management</h3>
				<p class="text-[10px] text-on-surface-variant">Mastering Alpine.js x-data scopes.</p>
			</div>
			<div
				class="md:col-span-1 md:row-span-1 bg-surface-container-low rounded-2xl p-6 border border-outline-variant/30 flex flex-col justify-between hover:shadow-lg transition-all">
				<div>
					<div class="flex items-center gap-2 mb-3 text-secondary"> <span
							class="material-symbols-outlined text-[18px]">terminal</span> <span
							class="font-label-sm text-[10px] tracking-widest uppercase">Resource</span> </div>
					<h3 class="font-bold text-sm text-on-surface mb-2 leading-tight">Advanced CLI Automation for Streamers</h3>
				</div>
				<div class="flex items-center gap-2">
					<div
						class="w-6 h-6 rounded-full bg-secondary-container/10 flex items-center justify-center text-secondary font-bold text-[8px]">
						XP</div>
					<p class="text-[10px] font-bold">xCan Pro</p>
				</div>
			</div>
		</div>
	</div>
</section>
