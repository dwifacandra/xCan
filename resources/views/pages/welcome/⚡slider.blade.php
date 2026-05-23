<?php use Livewire\Component;new class extends Component{};?>

<div x-data="{ isPaused: false }" class="w-full bg-white border-t border-b border-zinc-200 overflow-hidden">
	<div class="grid grid-cols-12 items-stretch">
		<div
			class="col-span-12 md:col-span-3 p-6 hidden md:flex flex-col items-end justify-center border-b md:border-b-0 md:border-r border-zinc-200 bg-zinc-50/50">
			<p class="font-mono text-xs uppercase tracking-widest text-zinc-400 mb-1">Ecosystem Catalog</p>
			<h3 class="font-sans font-bold text-sm tracking-tight text-zinc-800 uppercase leading-snug">POWERING ASSETS</h3>
		</div>
		<div class="col-span-12 md:col-span-9 flex flex-row items-center overflow-hidden">
			<div class="flex flex-row animate-slide" :class="{ 'paused': isPaused }" @mouseenter="isPaused = true"
				@mouseleave="isPaused = false" style="transition: all 0.5s ease-out;">
				<div class="flex flex-row">
					<div class="flex-shrink-0 w-64 h-32 p-6 border-r border-zinc-200">#01 CARD</div>
					<div class="flex-shrink-0 w-64 h-32 p-6 border-r border-zinc-200">#02 CARD</div>
					<div class="flex-shrink-0 w-64 h-32 p-6 border-r border-zinc-200">#03 CARD</div>
					<div class="flex-shrink-0 w-64 h-32 p-6 border-r border-zinc-200">#04 CARD</div>
					<div class="flex-shrink-0 w-64 h-32 p-6 border-r border-zinc-200">#05 CARD</div>
					<div class="flex-shrink-0 w-64 h-32 p-6 border-r border-zinc-200">#06 CARD</div>
				</div>
				<div class="flex flex-row">
					<div class="flex-shrink-0 w-64 h-32 p-6 border-r border-zinc-200">#01 CARD</div>
					<div class="flex-shrink-0 w-64 h-32 p-6 border-r border-zinc-200">#02 CARD</div>
					<div class="flex-shrink-0 w-64 h-32 p-6 border-r border-zinc-200">#03 CARD</div>
					<div class="flex-shrink-0 w-64 h-32 p-6 border-r border-zinc-200">#04 CARD</div>
					<div class="flex-shrink-0 w-64 h-32 p-6 border-r border-zinc-200">#05 CARD</div>
					<div class="flex-shrink-0 w-64 h-32 p-6 border-r border-zinc-200">#06 CARD</div>
				</div>
			</div>
		</div>
	</div>
</div>
