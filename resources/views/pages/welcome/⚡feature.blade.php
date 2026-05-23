<?php use Livewire\Component;new class extends Component{};?>

<!-- Feature Section -->
<section class="md:max-w-8/12 mx-auto px-6 py-24">
	<div class="text-center mb-16 space-y-4">
		<h2 class="font-headline-lg text-headline-lg text-primary">Powerful Modular Components</h2>
		<p class="text-on-surface-variant max-w-2xl mx-auto">Build exactly what you need with our suite of executive-grade
			tools designed for speed and clarity.</p>
	</div>
	<div class="grid grid-cols-1 md:grid-cols-4 lg:grid-cols-4 gap-6 auto-rows-[220px]">
		<div
			class="md:col-span-2 md:row-span-2 rounded-2xl border border-outline-variant/30 overflow-hidden group shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col bg-surface-container">
			<div class="p-6">
				<span
					class="font-label-sm text-label-sm text-primary-container font-bold uppercase tracking-widest">Builder</span>
				<h3 class="font-headline-lg-mobile text-headline-lg-mobile mt-2">Manage Multi-page</h3>
			</div>
			<div
				class="flex-1 bg-surface-container-low mx-6 mb-6 rounded-t-xl border-x border-t border-outline-variant/20 p-4 shadow-inner">
				<div
					class="bg-white rounded-lg h-full w-full shadow-lg border border-outline-variant/10 overflow-hidden flex flex-col">
					<div
						class="flex items-center justify-between px-3 py-2 border-b border-outline-variant/10 bg-surface-container-lowest">
						<div class="flex items-center gap-2">
							<div class="flex gap-1">
								<div class="w-2 h-2 rounded-full bg-error/20"></div>
								<div class="w-2 h-2 rounded-full bg-secondary/20"></div>
								<div class="w-2 h-2 rounded-full bg-green-500/20"></div>
							</div>
							<span class="text-[10px] font-bold text-on-surface-variant/60">CMS Dashboard / Pages</span>
						</div>
						<button class="px-2 py-0.5 bg-primary text-white text-[10px] rounded font-bold">+ Add Page</button>
					</div>
					<div class="flex-1 flex overflow-hidden">
						<div
							class="w-1/3 border-r border-outline-variant/10 bg-surface-container-low p-2 space-y-2 overflow-y-auto">
							<div class="bg-white p-1.5 rounded border border-primary/20 shadow-sm">
								<div class="flex items-center justify-between">
									<span class="text-[10px] font-bold text-primary">Home</span>
									<span class="w-1.5 h-1.5 rounded-full bg-green-500"></span>
								</div>
								<div class="flex gap-1 mt-1">
									<span class="material-symbols-outlined text-[10px] text-outline">edit</span>
									<span class="material-symbols-outlined text-[10px] text-outline">visibility</span>
								</div>
							</div>
							<div class="p-1.5 rounded border border-transparent hover:bg-white/50 transition-colors">
								<div class="flex items-center justify-between">
									<span class="text-[10px] font-medium text-on-surface-variant">Portfolio</span>
									<span class="w-1.5 h-1.5 rounded-full bg-green-500"></span>
								</div>
								<div class="flex gap-1 mt-1 opacity-40">
									<span class="material-symbols-outlined text-[10px]">edit</span>
									<span class="material-symbols-outlined text-[10px]">visibility</span>
								</div>
							</div>
							<div class="p-1.5 rounded border border-transparent">
								<div class="flex items-center justify-between">
									<span class="text-[10px] font-medium text-on-surface-variant">Blog</span>
									<span class="w-1.5 h-1.5 rounded-full bg-outline-variant"></span>
								</div>
								<div class="flex gap-1 mt-1 opacity-40">
									<span class="material-symbols-outlined text-[10px]">edit</span>
									<span class="material-symbols-outlined text-[10px]">visibility_off</span>
								</div>
							</div>
						</div>
						<div class="flex-1 p-3 bg-surface-container-lowest overflow-y-auto">
							<div class="grid grid-cols-2 gap-3">
								<div class="space-y-1.5">
									<div
										class="aspect-[4/3] bg-surface-container rounded border border-outline-variant/10 flex items-center justify-center">
										<span class="material-symbols-outlined text-outline-variant">web_asset</span>
									</div>
									<div class="h-1.5 w-1/2 bg-outline-variant/20 rounded"></div>
								</div>
								<div class="space-y-1.5">
									<div
										class="aspect-[4/3] bg-surface-container rounded border border-outline-variant/10 flex items-center justify-center">
										<span class="material-symbols-outlined text-outline-variant">grid_view</span>
									</div>
									<div class="h-1.5 w-2/3 bg-outline-variant/20 rounded"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div
			class="md:col-span-1 md:row-span-1 bg-surface-container-high rounded-2xl p-6 flex flex-col justify-between border border-outline-variant/30"
			x-data="{ amount: 5000 }">
			<div class="flex justify-between items-start">
				<span class="material-symbols-outlined text-secondary text-3xl">payments</span>
				<span class="font-label-sm text-label-sm text-on-surface-variant">Monetization</span>
			</div>
			<div class="space-y-4">
				<div class="flex items-center gap-2 bg-white/50 rounded-lg px-3 py-2 border border-black/5">
					<span class="text-on-surface-variant font-bold">Rp</span>
					<input class="w-full bg-transparent border-none p-0 focus:ring-0 font-bold text-lg" type="number"
						x-model="amount">
				</div>
				<button
					class="w-full bg-secondary text-white py-2 rounded-lg font-button-text text-button-text active:scale-95 transition-all">Support
					Now</button>
			</div>
		</div>
		<div
			class="md:col-span-1 md:row-span-1 bg-tertiary text-white rounded-2xl p-6 flex flex-col justify-between border border-outline-variant/10">
			<div class="flex justify-between items-center">
				<span class="material-symbols-outlined">work</span>
				<span class="font-label-sm text-label-sm opacity-60">Portfolio</span>
			</div>
			<div class="grid grid-cols-3 gap-2">
				<div class="aspect-square bg-white/10 rounded-lg"></div>
				<div class="aspect-square bg-white/10 rounded-lg"></div>
				<div class="aspect-square bg-white/20 rounded-lg flex items-center justify-center">
					<span class="material-symbols-outlined text-[14px]">add</span>
				</div>
			</div>
			<p class="font-bold text-sm">Executive Project Grid</p>
		</div>
		<div
			class="md:col-span-1 md:row-span-1 bg-surface-container-low rounded-2xl p-6 flex flex-col justify-between border border-outline-variant/30">
			<span class="font-label-sm text-label-sm text-on-surface-variant">Blog &amp; Newsletter</span>
			<div class="space-y-2">
				<div class="h-1.5 w-full bg-outline-variant/30 rounded-full"></div>
				<div class="h-1.5 w-3/4 bg-outline-variant/30 rounded-full"></div>
				<div class="h-1.5 w-1/2 bg-primary/20 rounded-full"></div>
			</div>
			<h4 class="font-bold text-lg leading-tight">Structured Meta-Data for Publication</h4>
		</div>
		<div
			class="md:col-span-1 md:row-span-2 rounded-2xl p-6 flex flex-col border border-outline-variant/30 overflow-hidden bg-surface-container-low">
			<div class="flex items-center gap-3 mb-6">
				<div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center text-primary">
					<span class="material-symbols-outlined">description</span>
				</div>
				<span class="font-label-sm text-label-sm font-bold">Executive CV</span>
			</div>
			<div class="flex-1 border-l-2 border-outline-variant/20 ml-2 pl-4 space-y-6">
				<div class="relative">
					<div class="absolute -left-[21px] top-1 w-2 h-2 rounded-full bg-primary"></div>
					<p class="font-bold text-sm">Principal Architect</p>
					<p class="text-xs text-on-surface-variant">2021 — Present</p>
				</div>
				<div class="relative">
					<div class="absolute -left-[21px] top-1 w-2 h-2 rounded-full bg-outline-variant"></div>
					<p class="font-bold text-sm">Lead Developer</p>
					<p class="text-xs text-on-surface-variant">2018 — 2021</p>
				</div>
			</div>
			<div class="flex flex-wrap gap-2 mt-4">
				<span class="bg-surface-container-low px-2 py-1 rounded text-[10px] font-bold">AWS</span>
				<span class="bg-surface-container-low px-2 py-1 rounded text-[10px] font-bold">TALL STACK</span>
			</div>
		</div>
		<div class="md:col-span-1 md:row-span-1 bg-primary text-white rounded-2xl p-6 flex flex-col justify-between"
			x-data="{ countdown: '24:00:00' }">
			<div class="flex items-center gap-2">
				<span class="material-symbols-outlined text-[18px]">event</span>
				<span class="font-label-sm text-label-sm">Event Invitation</span>
			</div>
			<div class="text-center font-label-sm text-2xl tracking-tighter" x-text="countdown">24:00:00</div>
			<button
				class="bg-white text-primary py-2 rounded-lg font-button-text text-button-text hover:bg-primary-fixed transition-colors">RSVP
				Now</button>
		</div>
		<div
			class="md:col-span-1 md:row-span-1 bg-surface-container-highest rounded-2xl p-6 flex flex-col justify-between border border-outline-variant/30">
			<div class="flex justify-between items-center">
				<span class="material-symbols-outlined">shopping_cart</span>
				<span class="font-label-sm text-label-sm">Digital Shop</span>
			</div>
			<div>
				<p class="text-xs opacity-60">Icon Pack Pro</p>
				<p class="font-bold text-xl">$19.00</p>
			</div>
			<button class="bg-on-surface text-surface py-2 rounded-lg font-button-text text-button-text">Checkout</button>
		</div>
		<div
			class="md:col-span-1 md:row-span-1 bg-black text-white rounded-2xl p-6 relative overflow-hidden flex flex-col justify-end">
			<div class="absolute top-0 right-0 p-3">
				<div class="w-2 h-2 rounded-full bg-error animate-pulse"></div>
			</div>
			<div class="space-y-2 animate-bounce">
				<div
					class="bg-primary/40 backdrop-blur-md px-3 py-1.5 rounded-lg border border-white/10 text-[10px] flex items-center gap-2">
					<span class="material-symbols-outlined text-[12px]">favorite</span> New Follower: dev_user
				</div>
			</div>
			<p class="font-label-sm text-label-sm mt-4 opacity-70">Broadcast Overlay Engine</p>
		</div>
	</div>
</section>
