<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<header class="sticky top-0 w-full bg-surface/40 backdrop-blur-xl border-b border-outline-variant/10 z-50 shadow-sm"
	x-data="{ mobileMenu: false }">
	{{-- Desktop Menu --}}
	<div class="md:max-w-8/12 mx-auto flex justify-between items-center px-4 py-2">
		<a href="/" class="flex items-center gap-1 hover:opacity-90 transition-opacity">
			<img alt="xCan Logo" class="w-8 h-8 object-contain" src="{{ asset('logo.png') }}">
			<span class="font-geist text-xl font-bold tracking-tight text-primary">{{ config('app.name') }}</span>
		</a>

		<nav class="hidden md:flex items-center gap-8">
			<a class="font-sans text-[14px] font-medium text-on-surface-variant hover:text-primary transition-colors"
				href="#">Blog</a>
			<a class="font-sans text-[14px] font-bold text-primary border-b-2 border-primary pb-0.5" href="#">Product</a>
			<a class="font-sans text-[14px] font-medium text-on-surface-variant hover:text-primary transition-colors"
				href="#">Services</a>
			<a class="font-sans text-[14px] font-medium text-on-surface-variant hover:text-primary transition-colors"
				href="#">Pricing</a>
		</nav>

		<div class="hidden md:flex items-center gap-2">
			<button
				class="h-9 flex items-center justify-center px-5 rounded-lg w-9 border border-primary text-primary hover:bg-primary hover:text-white/90 transition-all duration-200"
				title="Login">
				<i class="fa-solid fa-right-to-bracket text-sm"></i>
			</button>

			<button
				class="h-9 flex items-center justify-center px-5 rounded-lg primary-gradient-btn text-white hover:scale-[1.03] transition-transform duration-200 font-button-text active:scale-95 capitalize">
				Get Started
			</button>
		</div>

		<button @click="mobileMenu = !mobileMenu" class="md:hidden text-primary flex items-center">
			<span class="material-symbols-outlined text-[24px]" x-text="mobileMenu ? 'close' : 'menu'">menu</span>
		</button>
	</div>

	{{-- Mobile Menu --}}
	<div
		class="md:hidden fixed top-full left-0 w-full bg-surface border-b border-outline-variant p-6 flex flex-col gap-6 shadow-xl"
		style="display: none;" x-show="mobileMenu" x-transition:enter="transition ease-out duration-200"
		x-transition:enter-end="opacity-100 translate-y-0" x-transition:enter-start="opacity-0 -translate-y-4"
		@click.outside="mobileMenu = false" @scroll.window="mobileMenu = false">
		<nav class="flex flex-col gap-4">
			<a class="text-[18px] font-medium text-on-surface-variant hover:text-primary transition-colors" href="#">Blog</a>
			<a class="text-[18px] font-bold text-primary" href="#">Product</a> <a
				class="text-[18px] font-medium text-on-surface-variant hover:text-primary transition-colors"
				href="#">Services</a>
			<a class="text-[18px] font-medium text-on-surface-variant hover:text-primary transition-colors"
				href="#">Pricing</a>
		</nav>
		<div class="flex flex-row gap-2">
			<button
				class="flex-1 flex justify-center items-center gap-2 px-4 py-3 border border-primary text-primary rounded-lg font-sans text-[14px] font-semibold">
				<span class="material-symbols-outlined text-xl">login</span> Login
			</button>

			<button class="flex-[2] primary-gradient-btn text-white px-6 py-3 rounded-lg font-sans text-[14px] font-semibold">
				Get Started
			</button>
		</div>
	</div>
</header>
