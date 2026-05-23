@props(['icon', 'label'])

<div class="w-full relative" x-data="{ open: false }" @click.away="open = false">
	{{-- Tombol Utama --}}
	<button @click="open = !open"
		class="flex items-center w-full py-2.5 rounded-lg text-on-surface-variant hover:bg-surface-variant transition-all duration-300"
		:class="$store.sidebar.collapsed ? 'justify-center' : 'justify-between px-4'">

		<div class="flex items-center gap-3">
			<span class="material-symbols-outlined shrink-0 text-[20px]">{{ $icon }}</span>
			<span class="whitespace-nowrap font-bold text-sm" x-show="!$store.sidebar.collapsed" x-transition>
				{{ $label }}
			</span>
		</div>

		<span x-show="!$store.sidebar.collapsed"
			class="material-symbols-outlined text-[18px] transition-transform duration-300"
			:class="open ? 'rotate-180' : ''">expand_more</span>
	</button>

	{{-- 1. Dropdown Mode Expanded (Tetap di bawah) --}}
	<div x-show="open && !$store.sidebar.collapsed" x-transition class="mt-0.5 space-y-0.5 overflow-hidden pl-9">
		{{ $slot }}
	</div>

	{{-- 2. Dropdown Mode Collapsed (Absolute di kanan) --}}
	<div x-show="open && $store.sidebar.collapsed" x-transition:enter="transition ease-out duration-200"
		x-transition:enter-start="opacity-0 translate-x-2" x-transition:enter-end="opacity-100 translate-x-0"
		class="absolute left-full top-0 ml-4 w-48 bg-surface-container rounded-xl shadow-lg border border-outline-variant/30 p-2 z-[100]">
		{{ $slot }}
	</div>
</div>
