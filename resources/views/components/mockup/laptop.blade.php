<figure {{ $attributes->merge(['class' => 'w-full select-none flex flex-col items-center justify-center']) }}>
	<div
		class="relative w-full max-w-[640px] aspect-[16/10] bg-zinc-950 p-[12px] rounded-t-[24px] shadow-[0_25px_50px_-12px_rgba(0,0,0,0.4)] ring-1 ring-white/10">
		<div
			class="absolute top-1.5 left-1/2 -translate-x-1/2 w-2 h-2 bg-zinc-900 rounded-full border border-zinc-800/60 z-30 flex items-center justify-center">
			<div class="w-0.5 h-0.5 bg-blue-900/40 rounded-full"></div>
		</div>
		<div class="absolute inset-[11px] rounded-t-[12px] border border-zinc-800 pointer-events-none z-20"></div>
		<div class="relative w-full h-full bg-zinc-900 rounded-t-[12px] overflow-hidden flex flex-col justify-between">
			<div class="w-full h-full bg-white">
				{!! $content ?? 'Your laptop content / dashboard preview' !!}
			</div>
		</div>
	</div>
	<div
		class="relative w-[116%] max-w-[740px] h-4 bg-gradient-to-b from-zinc-200 to-zinc-400 rounded-b-[12px] shadow-[0_12px_20px_-4px_rgba(0,0,0,0.3)] border-t border-white/40 z-10 flex justify-center">
		<div class="w-24 h-2 bg-zinc-400/60 rounded-b-md border-t border-zinc-500/30"></div>
	</div>
</figure>
