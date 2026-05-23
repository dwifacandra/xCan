<?php use Livewire\Component;new class extends Component{};?>

<header :class="{
    'w-[calc(100%-16rem)]': !$store.sidebar.collapsed && !$store.sidebar.isMobile,
    'w-[calc(100%-5rem)]': $store.sidebar.collapsed && !$store.sidebar.isMobile,
    'w-full': $store.sidebar.isMobile
}"
	class="fixed top-0 right-0 z-40 bg-surface/40 backdrop-blur-xl border-b border-outline-variant/10 transition-all duration-300">

	<div class="flex justify-between items-center h-16 px-4">

		<!-- Bagian Kiri: Tombol Toggle + Search -->
		<div class="flex items-center flex-1 gap-2">
			<!-- Toggle Sidebar -->
			<button @click="$store.sidebar.collapsed = !$store.sidebar.collapsed"
				class="flex h-10 w-10 items-center justify-center rounded-full transition-colors duration-200 hover:bg-surface-variant"
				:class="$store.sidebar.collapsed ? 'rotate-180' : ''" aria-label="Toggle Sidebar">
				<span class="material-symbols-outlined">menu</span>
			</button>

			<!-- Search Bar -->
			<div class="relative flex-1 w-full mx-2">
				<span
					class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline text-[20px]">search</span>
				<input
					class="w-full pl-10 pr-4 py-2 bg-surface-container-low border-none rounded text-body-md focus:ring-2 focus:ring-primary/20 transition-all font-body-md placeholder:text-outline/50"
					placeholder="Search resources, links, or documentation..." type="text">
			</div>
		</div>

		<!-- Bagian Kanan: Actions -->
		<div class="flex items-center">
			<!-- Notifications -->
			<x-notifications />
			<!-- Theme Toggle -->
			<x-theme-switcher />
			<!-- Divider -->
			<div class="h-8 w-[1px] bg-outline-variant/30 mx-2"></div>
			<!-- User Profile Dropdown -->
			<div class="relative" x-data="{ open: false }">
				<div @click="open = !open" class="flex items-center gap-3 pl-2 group cursor-pointer">
					<div class="text-right hidden sm:block">
						<p class="font-button-text text-on-surface text-[14px]">Alex Rivera</p>
						<p class="font-label-sm text-outline text-[11px]">Developer Tier</p>
					</div>
					<span :class="open ? 'rotate-180' : ''"
						class="material-symbols-outlined text-outline text-[20px] transition-transform duration-200">keyboard_arrow_down</span>
					<img alt="User Profile"
						class="w-10 h-10 rounded-full border-2 border-primary-container object-cover group-hover:scale-105 transition-transform"
						src="https://lh3.googleusercontent.com/aida-public/AB6AXuDx5gSsOwYUqnb19WtkOEvHJBZyFJhq98SP6T7CA5gxvrtCQvBBtwFr00jAXpJCsQ-ej8gN6747rddmYkf1ZoOA4Ez_bJ2-H-XVPbTzAJcjBbSTZCIEoWS2r-c-Vr2zwJUmnAsho5YqfsVPk073PbGY0gWT4ZIDlpAQYzDBttzCgoIxk39obTbLvVTYUkYPOOMp9cxg00fL_K9_OkUJHlMxGvBBZeZsX0VHZNKGRKxrbhQxxVZVJsv2Hw0FfBKgjHQvvNzVVTAuvg_H">
				</div>

				<!-- User Menu -->
				<div @click.away="open = false"
					class="absolute right-0 mt-2 w-48 bg-white dark:bg-tertiary-container rounded shadow-xl border border-outline-variant/10 z-50"
					style="display: none;" x-show="open" x-transition>
					<a href="" wire:navigate
						class="flex items-center gap-3 px-4 py-2.5 text-[14px] text-on-surface hover:bg-surface-container-high transition-colors rounded">
						<span class="material-symbols-outlined shrink-0 text-[20px]">person</span>
						<span>Profile</span>
					</a>
					<livewire:pages.auth.logout />
				</div>
			</div>
		</div>
	</div>
</header>
