<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<!-- Feature Section -->
<div @mouseenter="stopScroll()" @mouseleave="startScroll()" class="w-full bg-white border-t border-b border-zinc-200"
	x-data="{ scrollContainer: null, scrollInterval: null, cardWidth: 256, initAutoScroll() { this.scrollContainer = this.$refs.sliderContainer; this.startScroll(); }, startScroll() { this.scrollInterval = setInterval(() =&gt; { if (this.scrollContainer) { if (this.scrollContainer.scrollLeft + this.scrollContainer.clientWidth &gt;= this.scrollContainer.scrollWidth - 5) { this.scrollContainer.scrollTo({ left: 0, behavior: 'smooth' }); } else { this.scrollContainer.scrollBy({ left: this.cardWidth, behavior: 'smooth' }); } } }, 3000); }, stopScroll() { clearInterval(this.scrollInterval); } }"
	x-init="initAutoScroll()">
	<div class="md:max-w-8/12 mx-auto grid grid-cols-12 items-stretch">
		<div
			class="col-span-12 md:col-span-3 p-6 flex flex-col justify-center border-b md:border-b-0 md:border-r border-zinc-200 bg-zinc-50/50 z-10">
			<p class="font-mono text-xs uppercase tracking-widest text-zinc-400 mb-1">Ecosystem Catalog</p>
			<h3 class="font-sans font-bold text-sm tracking-tight text-zinc-800 uppercase leading-snug">POWERING ASSETS FOR
				THE BEST &amp; BRIGHTEST</h3>
		</div>
		<div
			class="col-span-12 md:col-span-9 flex flex-row overflow-x-auto snap-x snap-mandatory scroll-smooth p-0 items-center no-scrollbar"
			x-ref="sliderContainer">
			<div
				class="flex-shrink-0 w-64 h-32 flex flex-col justify-center p-6 border-r border-zinc-200 snap-start hover:bg-zinc-50/80 transition-colors cursor-pointer group">
				<span class="text-xs font-mono text-zinc-400 mb-2">#01 BLOCK BUILDER</span>
				<h4 class="font-sans font-bold text-zinc-900 group-hover:text-blue-600 transition-colors">xCan Custom Canvas
				</h4>
				<p class="text-xs text-zinc-500 mt-1 truncate">Drag &amp; drop profile customizer.</p>
			</div>
			<div
				class="flex-shrink-0 w-64 h-32 flex flex-col justify-center p-6 border-r border-zinc-200 snap-start hover:bg-zinc-50/80 transition-colors cursor-pointer group">
				<span class="text-xs font-mono text-zinc-400 mb-2">#02 COMMERCE</span>
				<h4 class="font-sans font-bold text-zinc-900 group-hover:text-blue-600 transition-colors">Digital Storefront
				</h4>
				<p class="text-xs text-zinc-500 mt-1 truncate">Sell e-books and software licenses.</p>
			</div>
			<div
				class="flex-shrink-0 w-64 h-32 flex flex-col justify-center p-6 border-r border-zinc-200 snap-start hover:bg-zinc-50/80 transition-colors cursor-pointer group">
				<span class="text-xs font-mono text-zinc-400 mb-2">#03 OVERLAY</span>
				<h4 class="font-sans font-bold text-zinc-900 group-hover:text-blue-600 transition-colors">Stream Widgets</h4>
				<p class="text-xs text-zinc-500 mt-1 truncate">Real-time alerts for live streaming.</p>
			</div>
			<div
				class="flex-shrink-0 w-64 h-32 flex flex-col justify-center p-6 border-r border-zinc-200 snap-start hover:bg-zinc-50/80 transition-colors cursor-pointer group">
				<span class="text-xs font-mono text-zinc-400 mb-2">#04 NETWORK</span>
				<h4 class="font-sans font-bold text-zinc-900 group-hover:text-blue-600 transition-colors">Event Invitation
				</h4>
				<p class="text-xs text-zinc-500 mt-1 truncate">Corporate event management pages.</p>
			</div>
			<div
				class="flex-shrink-0 w-64 h-32 flex flex-col justify-center p-6 border-r border-zinc-200 snap-start hover:bg-zinc-50/80 transition-colors cursor-pointer group">
				<span class="text-xs font-mono text-zinc-400 mb-2">#05 ANALYTICS</span>
				<h4 class="font-sans font-bold text-zinc-900 group-hover:text-blue-600 transition-colors">Metrics Ledger</h4>
				<p class="text-xs text-zinc-500 mt-1 truncate">Real-time tracking infrastructure.</p>
			</div>
			<div
				class="flex-shrink-0 w-64 h-32 flex flex-col justify-center p-6 border-r border-zinc-200 snap-start hover:bg-zinc-50/80 transition-colors cursor-pointer group">
				<span class="text-xs font-mono text-zinc-400 mb-2">#06 PORTFOLIO</span>
				<h4 class="font-sans font-bold text-zinc-900 group-hover:text-blue-600 transition-colors">Case Showcase</h4>
				<p class="text-xs text-zinc-500 mt-1 truncate">Minimalist project galleries.</p>
			</div>
		</div>
	</div>
</div>
