<?php use Livewire\Component;new class extends Component{};?>

<!-- Hero Section 1 -->
<section class="bg-surface-container-lowest/60">
	<div class="md:max-w-8/12 mx-auto md:h-dvh px-6 py-8 md:py-24 grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
		<div class="space-y-8">
			<h1 class="font-headline-xl text-headline-xl text-primary leading-tight">
				Your Entire Digital Presence, Built with xCan.
			</h1>
			<p class="text-on-surface-variant text-lg max-w-2xl">
				Centralize your portfolio, stream overlays, and professional identity in a single high-performance ecosystem.
				Built for the modern developer.
			</p>
			<div class="flex flex-col gap-2">
				<label for="claim-url" class="font-label-sm text-label-sm text-on-surface-variant ml-1">Claim your personal
					URL</label>
				<div
					class="flex items-center justify-between max-w-max bg-white rounded-xl border border-outline-variant/30 focus-within:ring-2 ring-primary/20 transition-all p-1">
					<span class="pl-3 font-body-md text-body-md text-on-surface-variant/60 whitespace-nowrap">{{
						config('app.domain') }}/</span>
					<input
						class="flex-1 border-none bg-transparent focus:ring-0 font-body-md text-body-md py-2 placeholder:text-outline-variant outline-none"
						placeholder="username" type="text" id="claim-url">

					<button
						class="primary-gradient text-white px-4 py-2 rounded-lg font-button-text text-button-text flex items-center gap-2 transition-transform active:scale-95 whitespace-nowrap">
						Claim Page <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
					</button>
				</div>
			</div>
		</div>
		<div x-data="{
        activeSlide: 'laptop',
        slides: ['laptop', 'phone'],
        next() {
            let index = this.slides.indexOf(this.activeSlide);
            this.activeSlide = this.slides[(index + 1) % this.slides.length];
        }
    }" x-init="setInterval(() => next(), 4000)" class="md:flex flex-col items-center w-full relative hidden">
			<div class="relative w-full flex justify-center items-center">
				<div x-show="activeSlide === 'laptop'" x-transition:enter="transition ease-out duration-700"
					x-transition:enter-start="opacity-0 translate-x-10" x-transition:enter-end="opacity-100 translate-x-0"
					x-transition:leave="transition ease-in duration-500 absolute"
					x-transition:leave-start="opacity-100 translate-x-0" x-transition:leave-end="opacity-0 -translate-x-10"
					class="w-full">
					<x-mockup.laptop>
						<x-slot name="content">
							<div
								class="relative flex flex-col items-center w-full h-full text-white bg-zinc-950 overflow-hidden font-sans select-none text-left">
								<div class="absolute inset-0 z-0">
									<img
										src="https://images.unsplash.com/photo-1590602847861-f357a9332bbc?q=80&w=800&auto=format&fit=crop"
										class="w-full h-full object-cover opacity-35 mix-blend-luminosity" alt="Background">
									<div class="absolute inset-0 bg-gradient-to-b from-zinc-950/80 via-zinc-900/40 to-zinc-950"></div>
								</div>
								<div
									class="relative z-10 flex flex-col items-center w-full max-w-[280px] h-full justify-center px-4 py-3">
									<div
										class="h-14 w-14 rounded-full border-2 border-white/30 p-0.5 mb-2 shadow-xl ring-4 ring-purple-500/10">
										<img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?q=80&w=200&auto=format&fit=crop"
											class="h-full w-full object-cover rounded-full" alt="Avatar">
									</div>
									<div class="text-center space-y-0.5 mb-4">
										<h2 class="text-[11px] font-extrabold tracking-tight text-white">Marjan van Aubel</h2>
										<p class="text-[8px] text-zinc-400 font-medium">@marjanvanaubel</p>
									</div>
									<div class="w-full space-y-1.5">
										<a href="#"
											class="block w-full py-2 px-3 text-center bg-white/10 backdrop-blur-md border border-white/10 rounded-lg text-[9px] font-bold text-white tracking-wide shadow-xs hover:bg-white/20 transition-all">
											Subscribe to our Podcast
										</a>
										<a href="#"
											class="block w-full py-2 px-3 text-center bg-white/10 backdrop-blur-md border border-white/10 rounded-lg text-[9px] font-bold text-white tracking-wide shadow-xs hover:bg-white/20 transition-all">
											Latest Episode
										</a>
										<a href="#"
											class="block w-full py-2 px-3 text-center bg-white/10 backdrop-blur-md border border-white/10 rounded-lg text-[9px] font-bold text-white tracking-wide shadow-xs hover:bg-white/20 transition-all">
											Our Website
										</a>
									</div>
									<div class="flex items-center gap-6 mt-10">
										<a href="#" class="text-white hover:text-zinc-300 transition-colors">
											<i class="fa-brands fa-tiktok text-lg"></i>
										</a>
										<a href="#" class="text-white hover:text-zinc-300 transition-colors">
											<i class="fa-brands fa-youtube text-lg"></i>
										</a>
										<a href="#" class="text-white hover:text-zinc-300 transition-colors">
											<i class="fa-brands fa-x-twitter text-lg"></i>
										</a>
										<a href="#" class="text-white hover:text-zinc-300 transition-colors">
											<i class="fa-brands fa-instagram text-lg"></i>
										</a>
									</div>
								</div>
							</div>
						</x-slot>
					</x-mockup.laptop>
				</div>
				<div x-show="activeSlide === 'phone'" x-transition:enter="transition ease-out duration-700"
					x-transition:enter-start="opacity-0 translate-x-10" x-transition:enter-end="opacity-100 translate-x-0"
					x-transition:leave="transition ease-in duration-500 absolute"
					x-transition:leave-start="opacity-100 translate-x-0" x-transition:leave-end="opacity-0 -translate-x-10"
					class="w-full">
					<x-mockup.iphone>
						<x-slot name="screen">
							<div
								class="relative flex flex-col items-center w-full h-full text-white bg-black overflow-hidden font-sans">
								<div class="absolute inset-0 z-0">
									<img
										src="https://images.unsplash.com/photo-1590602847861-f357a9332bbc?q=80&w=400&auto=format&fit=crop"
										class="w-full h-full object-cover opacity-50" alt="Background">
									<div class="absolute inset-0 bg-gradient-to-b from-black/60 via-black/40 to-black/90"></div>
								</div>
								<div class="relative z-10 flex flex-col items-center w-full pt-12 px-6">
									<div class="h-20 w-20 rounded-full border-2 border-white/20 p-1 mb-4 shadow-xl">
										<img
											src="https://images.unsplash.com/photo-1539571696357-5a69c17a67c6?q=80&w=200&auto=format&fit=crop"
											class="h-full w-full object-cover rounded-full" alt="Avatar">
									</div>
									<div class="text-center space-y-1 mb-8">
										<h2 class="text-base font-bold tracking-tight">Marjan van Aubel</h2>
										<p class="text-[10px] text-zinc-300 font-medium">Hit Record.</p>
									</div>
									<div class="w-full space-y-3">
										<a href="#"
											class="block w-full py-3 px-4 bg-zinc-400/30 backdrop-blur-md border border-white/10 rounded-xl text-[11px] font-bold text-white transition-all hover:bg-zinc-400/40 active:scale-95 shadow-lg">
											Subscribe to our Podcast
										</a>
										<a href="#"
											class="block w-full py-3 px-4 bg-zinc-400/30 backdrop-blur-md border border-white/10 rounded-xl text-[11px] font-bold text-white transition-all hover:bg-zinc-400/40 active:scale-95 shadow-lg">
											Latest Episode
										</a>
										<a href="#"
											class="block w-full py-3 px-4 bg-zinc-400/30 backdrop-blur-md border border-white/10 rounded-xl text-[11px] font-bold text-white transition-all hover:bg-zinc-400/40 active:scale-95 shadow-lg">
											Tour Dates
										</a>
										<a href="#"
											class="block w-full py-3 px-4 bg-zinc-400/30 backdrop-blur-md border border-white/10 rounded-xl text-[11px] font-bold text-white transition-all hover:bg-zinc-400/40 active:scale-95 shadow-lg">
											Our Website
										</a>
									</div>
									<div class="flex items-center gap-6 mt-10">
										<a href="#" class="text-white hover:text-zinc-300 transition-colors">
											<i class="fa-brands fa-tiktok text-lg"></i>
										</a>
										<a href="#" class="text-white hover:text-zinc-300 transition-colors">
											<i class="fa-brands fa-youtube text-lg"></i>
										</a>
										<a href="#" class="text-white hover:text-zinc-300 transition-colors">
											<i class="fa-brands fa-x-twitter text-lg"></i>
										</a>
										<a href="#" class="text-white hover:text-zinc-300 transition-colors">
											<i class="fa-brands fa-instagram text-lg"></i>
										</a>
									</div>
								</div>
							</div>
						</x-slot>
					</x-mockup.iphone>
				</div>
			</div>
		</div>
	</div>
</section>
