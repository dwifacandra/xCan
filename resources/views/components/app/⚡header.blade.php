<?php use Livewire\Component;new class extends Component{};?>

<header :class="{
	'w-[calc(100%-16rem)]': !$store.sidebar.collapsed && !$store.sidebar.isMobile,
	'w-[calc(100%-5rem)]': $store.sidebar.collapsed && !$store.sidebar.isMobile,
	'w-full': $store.sidebar.isMobile
	}" class="fixed top-0 right-0 z-40
		bg-surface/40 dark:bg-tertiary-container
		backdrop-blur-xl
		border-b border-outline-variant/10 dark:border-teritary
		transition-all duration-300">

	<div class="flex justify-between items-center h-16 px-4">

		<!-- Bagian Kiri: Tombol Toggle + Search -->
		<div class="flex items-center flex-1 gap-2">
			<!-- Toggle Sidebar -->
			<button @click="$store.sidebar.collapsed = !$store.sidebar.collapsed" class="flex h-10 w-10 items-center justify-center rounded-full transition-colors duration-200
					hover:bg-surface-variant dark:hover:bg-tertiary
					text-on-surface-variant dark:text-on-tertiary-container" :class="$store.sidebar.collapsed ? 'rotate-180' : ''"
				aria-label="Toggle Sidebar">
				<span class="material-symbols-outlined">menu</span>
			</button>

			<!-- Search Bar -->
			<div class="relative flex-1 w-full mx-2">
				<span
					class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline dark:text-on-tertiary-container/50 text-[20px]">search</span>
				<input class="w-full pl-10 pr-4 py-2
						bg-surface-container-low dark:bg-white/10
						text-on-surface dark:text-on-tertiary-container
						placeholder:text-outline/50 dark:placeholder:text-white/30
						border-none rounded
						focus:ring-2 focus:ring-primary/20 dark:focus:ring-inverse-primary/20
						transition-all font-body-md text-body-md" placeholder="Search resources, links, or documentation..." type="text">
			</div>
		</div>

		<!-- Bagian Kanan: Actions -->
		<div class="flex items-center">
			<!-- Notifications -->
			<x-notifications />
			<!-- Theme Toggle -->
			<x-theme-switcher />
			<!-- Divider -->
			<div class="h-8 w-[1px] bg-outline-variant/30 dark:bg-on-tertiary-container/20 mx-2"></div>
			<!-- User Profile Dropdown -->
			<div class="relative" x-data="{ open: false }">
				<div @click="open = !open" class="flex items-center gap-3 pl-2 group cursor-pointer">
					<div class="text-right hidden sm:block">
						<p class="font-button-text text-on-surface dark:text-on-tertiary-container text-[14px]">Alex Rivera</p>
						<p class="font-label-sm text-outline dark:text-on-tertiary-container/60 text-[11px]">Developer Tier</p>
					</div>
					<span :class="open ? 'rotate-180' : ''"
						class="material-symbols-outlined text-outline dark:text-on-tertiary-container/60 text-[20px] transition-transform duration-200">keyboard_arrow_down</span>
					<img alt="User Profile"
						class="w-10 h-10 rounded-full border-2 border-primary-container dark:border-inverse-primary object-cover group-hover:scale-105 transition-transform"
						src="https://lh3.googleusercontent.com/aida-public/AB6AXuDx5gSsOwYUqnb19WtkOEvHJBZyFJhq98SP6T7CA5gxvrtCQvBBtwFr00jAXpJCsQ-ej8gN6747rddmYkf1ZoOA4Ez_bJ2-H-XVPbTzAJcjBbSTZCIEoWS2r-c-Vr2zwJUmnAsho5YqfsVPk073PbGY0gWT4ZIDlpAQYzDBttzCgoIxk39obTbLvVTYUkYPOOMp9cxg00fL_K9_OkUJHlMxGvBBZeZsX0VHZNKGRKxrbhQxxVZVJsv2Hw0FfBKgjHQvvNzVVTAuvg_H">
				</div>

				<!-- User Menu -->
				<div @click.away="open = false" class="absolute right-0 mt-2 w-48
						bg-surface-container-lowest dark:bg-tertiary-container
						border border-outline-variant/10 dark:border-outline-variant/20
						rounded shadow-xl z-50" style="display: none;" x-show="open" x-transition>
					<a href="" wire:navigate class="flex items-center gap-3 px-4 py-2.5 text-[14px]
							text-on-surface dark:text-on-tertiary-container
							hover:bg-surface-container-high dark:hover:bg-tertiary
							transition-colors rounded">
						<span class="material-symbols-outlined shrink-0 text-[20px]">person</span>
						<span>Profile</span>
					</a>
					<livewire:pages.auth.logout />
				</div>
			</div>
		</div>
	</div>
</header>
