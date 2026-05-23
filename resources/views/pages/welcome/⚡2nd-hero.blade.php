<?php use Livewire\Component;new class extends Component{};?>

<!-- Hero Section 2 (Analytics) -->
<section class="py-24 quaternary-gradient">
	<div class="md:max-w-8/12 mx-auto md:h-dvh px-6 grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">
		<div class="order-2 lg:order-1 relative">
			<x-visual.metric-cards />
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
