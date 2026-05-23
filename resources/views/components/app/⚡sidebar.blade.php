<?php use Livewire\Component;new class extends Component{};?>

<!-- Sidebar Component -->
<aside x-show="!$store.sidebar.collapsed || !$store.sidebar.isMobile"
	x-transition:enter="transition ease-out duration-300" x-transition:enter-start="-translate-x-full"
	x-transition:enter-end="translate-x-0" x-transition:leave="transition ease-in duration-300"
	x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full" :class="{
			'w-64': !$store.sidebar.collapsed && !$store.sidebar.isMobile,
			'w-16 z-60': $store.sidebar.collapsed && !$store.sidebar.isMobile,
			'fixed inset-0 w-64 z-60': $store.sidebar.isMobile
	}"
	class="sticky top-0 h-screen dark:bg-tertiary-container bg-surface-container-low transition-all duration-300 border-r border-outline-variant/30 ">
	<div class="flex flex-col h-full px-2 py-4">
		<div class="mb-4 px-2 relative h-12 flex items-center">
			{{-- Brand --}}
			<x-brand subtext="Ecosystem" />
		</div>

		<!-- Navigation Links -->
		<livewire:pages.dashboard.navigation />

		<!-- Bottom CTA -->
		<footer class="mt-auto pt-4">
			<a href="{{ route('links.manage') }}?modal=create-link" wire:navigate
				class="w-full brand-gradient text-white py-3 px-4 rounded-xl flex items-center justify-center gap-2 font-button-text hover:shadow-lg transition-all active:scale-95">
				<span class="material-symbols-outlined text-[18px] shrink-0">add_circle</span>
				<span class="whitespace-nowrap overflow-hidden" x-show="!($store.sidebar && $store.sidebar.collapsed)"
					x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 -translate-x-2"
					x-transition:enter-end="opacity-100 translate-x-0" x-transition:leave="transition ease-in duration-200"
					x-transition:leave-start="opacity-100 translate-x-0" x-transition:leave-end="opacity-0 -translate-x-2">
					Create New Link
				</span>
			</a>
		</footer>
	</div>
</aside>
