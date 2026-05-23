@props([
'icon',
'label',
'isSub' => false,
'href' => '#',
'navigate' => true
])

<a {{ $attributes->merge([
	'class' => 'flex items-center gap-3 py-2.5 text-sm rounded-lg font-bold transition-all duration-300 overflow-hidden
	text-on-surface-variant hover:bg-surface-variant',
	'href' => $href
	]) }}
	{{-- Jika $navigate true, tambahkan atribut wire:navigate --}}
	@if($navigate) wire:navigate @endif

	wire:current="!bg-primary-container !text-inverse-primary hover:!bg-primary-container/90"
	:class="{
	'justify-center': $store.sidebar.collapsed && !{{ $isSub ? 'true' : 'false' }},
	'px-2': $store.sidebar.collapsed && {{ $isSub ? 'true' : 'false' }},
	'px-4': !$store.sidebar.collapsed && !{{ $isSub ? 'true' : 'false' }},
	'pl-4 pr-4': !$store.sidebar.collapsed && {{ $isSub ? 'true' : 'false' }}
	}">

	<span class="material-symbols-outlined shrink-0 text-[20px]">{{ $icon }}</span>

	<span class="whitespace-nowrap overflow-hidden transition-all duration-300"
		x-show="!($store.sidebar && $store.sidebar.collapsed) || {{ $isSub ? 'true' : 'false' }}" x-transition>
		{{ $label }}
	</span>
</a>
