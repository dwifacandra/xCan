<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<!-- Hero Section 2 (Analytics) -->
<section class="py-24" style="background: linear-gradient(135deg, rgb(18, 24, 166) 0%, rgb(123, 31, 162) 100%);">
	<div class="md:max-w-8/12 mx-auto px-6 grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">
		<div class="order-2 lg:order-1 relative">
			<div class="glass-card rounded-2xl overflow-hidden shadow-xl border border-white/50">
				<div class="p-6 md:p-8">
					<div class="grid grid-cols-1 md:grid-cols-4 gap-4">
						<div
							class="md:col-span-2 bg-white rounded-xl p-6 border border-outline-variant/20 flex flex-col justify-between min-h-[160px]">
							<div class="flex justify-between items-start">
								<div>
									<p class="text-on-surface-variant text-sm font-medium">Total Clicks</p>
									<h4 class="text-3xl font-bold text-primary mt-1">43,500</h4>
								</div>
								<span class="material-symbols-outlined text-primary-container opacity-20 text-4xl">touch_app</span>
							</div>
							<div class="flex items-end gap-1 h-12 mt-4">
								<div class="flex-1 bg-primary/10 h-[40%] rounded-t-sm"></div>
								<div class="flex-1 bg-primary/20 h-[60%] rounded-t-sm"></div>
								<div class="flex-1 bg-primary/10 h-[45%] rounded-t-sm"></div>
								<div class="flex-1 bg-primary/30 h-[80%] rounded-t-sm"></div>
								<div class="flex-1 bg-primary/20 h-[55%] rounded-t-sm"></div>
								<div class="flex-1 bg-primary/40 h-[90%] rounded-t-sm"></div>
								<div class="flex-1 bg-primary h-[100%] rounded-t-sm"></div>
							</div>
						</div>
						<div class="bg-white rounded-xl p-6 border border-outline-variant/20 flex flex-col justify-between">
							<div
								class="w-10 h-10 rounded-lg bg-secondary-container/10 flex items-center justify-center text-secondary-container mb-4">
								<span class="material-symbols-outlined">headphones</span>
							</div>
							<div>
								<p class="text-on-surface-variant text-xs font-medium uppercase tracking-wider">Track Plays</p>
								<h4 class="text-2xl font-bold text-on-surface">643</h4>
							</div>
						</div>
						<div class="bg-white rounded-xl p-6 border border-outline-variant/20 flex flex-col justify-between">
							<div class="w-10 h-10 rounded-lg bg-green-500/10 flex items-center justify-center text-green-600 mb-4">
								<span class="material-symbols-outlined">payments</span>
							</div>
							<div>
								<p class="text-on-surface-variant text-xs font-medium uppercase tracking-wider">Total Sales</p>
								<h4 class="text-2xl font-bold text-on-surface">$2,362</h4>
							</div>
						</div>
						<div
							class="md:col-span-2 bg-primary text-white rounded-xl p-6 flex items-center justify-between overflow-hidden relative">
							<div class="relative z-10">
								<div class="flex items-center gap-2 mb-1">
									<span class="relative flex h-2 w-2">
										<span
											class="animate-ping absolute inline-flex h-full w-full rounded-full bg-secondary opacity-75"></span>
										<span class="relative inline-flex rounded-full h-2 w-2 bg-secondary"></span>
									</span>
									<span class="text-xs font-medium opacity-80 uppercase tracking-widest">Real-time Visits</span>
								</div>
								<h4 class="text-4xl font-bold tracking-tight">960</h4>
								<p class="text-xs mt-2 opacity-70 flex items-center gap-1">
									<span class="material-symbols-outlined text-[14px]">location_on</span> New York, USA
								</p>
							</div>
							<div class="opacity-10 absolute -right-4 -bottom-4">
								<span class="material-symbols-outlined text-[120px]">public</span>
							</div>
						</div>
						<div
							class="md:col-span-2 bg-surface-container rounded-xl p-6 border border-outline-variant/20 flex items-center justify-center">
							<p class="text-on-surface-variant text-sm font-medium">Detailed analytics dashboard available in Pro</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="order-1 lg:order-2 space-y-6">
			<div
				class="inline-flex items-center gap-2 px-3 py-1 rounded-full font-label-sm text-label-sm bg-white/20 text-white">
				<span class="material-symbols-outlined text-[16px]">trending_up</span> REAL-TIME INSIGHTS
			</div>
			<h2 class="font-headline-lg text-headline-lg leading-tight text-white">
				Measure growth with institutional precision.
			</h2>
			<p class="text-lg text-white/90">
				Our analytics engine provides deep demographic insights and conversion tracking for your digital assets. No
				complex setup, just pure data.
			</p>
			<button
				class="flex items-center gap-3 px-8 py-4 bg-tertiary text-white rounded-lg font-button-text text-button-text hover:bg-black transition-all shadow-md">
				<span class="material-symbols-outlined">chart_data</span> Get Started with Analytics
			</button>
		</div>
	</div>
</section>
