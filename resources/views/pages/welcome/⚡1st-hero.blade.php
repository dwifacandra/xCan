<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<!-- Hero Section 1 -->
<section class="bg-surface-container-lowest/60">
	<div class="md:max-w-8/12 mx-auto px-6 py-8 md:py-24 grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
		<div class="space-y-8">
			<h1 class="font-headline-xl text-headline-xl text-primary leading-tight">
				Your Entire Digital Presence, Built with xCan.
			</h1>
			<p class="text-on-surface-variant text-lg max-w-[500px]">
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
						class="primary-gradient-btn text-white px-4 py-2 rounded-lg font-button-text text-button-text flex items-center gap-2 transition-transform active:scale-95 whitespace-nowrap">
						Claim Page <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
					</button>
				</div>
			</div>
		</div>
		<div
			class="flex flex-row w-full mx-auto max-w-10/12 md:max-w-12/12 items-center relative justify-center md:justify-end">
			<div class="w-full select-none flex flex-col items-center justify-center">
				<div
					class="relative w-full max-w-[640px] aspect-[16/10] bg-zinc-950 p-[12px] rounded-t-[24px] shadow-[0_25px_50px_-12px_rgba(0,0,0,0.4)] ring-1 ring-white/10">
					<div
						class="absolute top-1.5 left-1/2 -translate-x-1/2 w-2 h-2 bg-zinc-900 rounded-full border border-zinc-800/60 z-30 flex items-center justify-center">
						<div class="w-0.5 h-0.5 bg-blue-900/40 rounded-full"></div>
					</div>
					<div class="absolute inset-[11px] rounded-t-[12px] border border-zinc-800 pointer-events-none z-20"></div>
					<div
						class="relative w-full h-full bg-zinc-900 rounded-t-[12px] overflow-hidden flex flex-col justify-between">
						<div
							class="relative flex flex-col items-center w-full h-full text-white bg-zinc-950 overflow-hidden font-sans select-none text-left">
							<div class="absolute inset-0 z-0">
								<img alt="Background" class="w-full h-full object-cover opacity-35 mix-blend-luminosity"
									src="https://lh3.googleusercontent.com/aida-public/AB6AXuDn5tYCpLdFUw7JV49WsEkzBxRkG8noHHKKzR1osFoj7OfvVXTJ0Btx5U0RG3DkV5ESGZpDRz9v2tdRzSvsqK5yniuOyBWknRMfYo1onzXaLh5mOoFaEFEeSVmmc8jXvnlv_e_z0U72bjtFTGFCIB8_1JI1aVTIexO_vf7ALL0i55miQYEcG7WhVzSzYfA8zkLNOvmt0U5RRsQcZKSDS44tB2VPSLSeX7J6rAaJ6L1ca8BIxH8GqSdmjSDjCyxTcj488JleCawshi3r">
								<div class="absolute inset-0 bg-gradient-to-b from-zinc-950/80 via-zinc-900/40 to-zinc-950"></div>
							</div>
							<div
								class="relative z-10 flex flex-col items-center w-full max-w-[280px] h-full justify-center px-4 py-3">
								<div
									class="h-14 w-14 rounded-full border-2 border-white/30 p-0.5 mb-2 shadow-xl ring-4 ring-purple-500/10">
									<img alt="Avatar" class="h-full w-full object-cover rounded-full"
										src="https://lh3.googleusercontent.com/aida-public/AB6AXuAnQfXWIBtGBgjoL8kN6Sz7x5MGzeOD_0aYCjrT54lX40v1CBs-iXhF1np625dtCFoCLEEe6O9cXdTSd29R1du1wkZR51sv64KEw11tceUSUj5vyVRrO2dXVuYqGAxWSvsEMs1qyqfRRGHtO7-Tusd1C2QsCW9ejEK2h3uWpz24MgLxb2qPvVOJassZlH8oW53UaYzH-6PWko2wutVAHB6QRgUVzEOXJbsQ794YFCXLftopllWO99RJt2FfN6uY-6PxS6airkY04vWo">
								</div>
								<div class="text-center space-y-0.5 mb-4">
									<h2 class="text-[11px] font-extrabold tracking-tight text-white">Marjan van Aubel</h2>
									<p class="text-[8px] text-zinc-400 font-medium">@marjanvanaubel</p>
								</div>
								<div class="w-full space-y-1.5">
									<a class="block w-full py-2 px-3 text-center bg-white/10 backdrop-blur-md border border-white/10 rounded-lg text-[9px] font-bold text-white tracking-wide shadow-xs hover:bg-white/20 transition-all"
										href="#">Subscribe to our Podcast</a>
									<a class="block w-full py-2 px-3 text-center bg-white/10 backdrop-blur-md border border-white/10 rounded-lg text-[9px] font-bold text-white tracking-wide shadow-xs hover:bg-white/20 transition-all"
										href="#">Latest Episode</a>
									<a class="block w-full py-2 px-3 text-center bg-white/10 backdrop-blur-md border border-white/10 rounded-lg text-[9px] font-bold text-white tracking-wide shadow-xs hover:bg-white/20 transition-all"
										href="#">Our Website</a>
								</div>
								<div class="flex items-center justify-center gap-3.5 mt-5 opacity-75">
									<span class="text-[10px] cursor-pointer hover:scale-110 transition-transform">🎵</span>
									<span class="text-[10px] cursor-pointer hover:scale-110 transition-transform">📺</span>
									<span class="text-[10px] cursor-pointer hover:scale-110 transition-transform">📸</span>
								</div>
							</div>
							<div
								class="absolute bottom-2 left-3 z-20 flex items-center gap-1.5 opacity-40 text-[7px] font-semibold tracking-wider text-zinc-400">
								<div class="w-1.5 h-1.5 rounded-xs bg-blue-500"></div>
								<span class="">XCAN.ECOSYSTEM</span>
							</div>
						</div>
					</div>
				</div>
				<div
					class="relative w-[116%] max-w-[740px] h-4 bg-gradient-to-b from-zinc-200 to-zinc-400 rounded-b-[12px] shadow-[0_12px_20px_-4px_rgba(0,0,0,0.3)] border-t border-white/40 z-10 flex justify-center">
					<div class="w-24 h-2 bg-zinc-400/60 rounded-b-md border-t border-zinc-500/30"></div>
				</div>
			</div>
		</div>
	</div>
</section>
