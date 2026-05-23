@props(['variant' => 'default', 'subtext' => null])

{{-- Gunakan x-data kosong atau biarkan Alpine membaca store secara opsional --}}
<a href="{{ route('welcome') }}" {{ $attributes->merge(['class' => 'flex items-center gap-2 hover:opacity-90
	transition-all duration-300']) }}>

	{{-- Logo (Selalu muncul) --}}
	<img src="{{ asset('logo.png') }}" alt="{{ config('app.name') }} Logo" class="w-8 h-8 object-contain shrink-0">

	{{-- Container Teks --}}
	<div class="flex flex-col overflow-hidden transition-all duration-300" {{-- Hanya sembunyikan jika store.sidebar ada
		dan collapsed bernilai true --}} x-show="!($store.sidebar && $store.sidebar.collapsed)"
		x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 -translate-x-2"
		x-transition:enter-end="opacity-100 translate-x-0" x-transition:leave="transition ease-in duration-200"
		x-transition:leave-start="opacity-100 translate-x-0" x-transition:leave-end="opacity-0 -translate-x-2">

		<span class="font-geist text-xl font-bold tracking-tight text-primary whitespace-nowrap">
			{{ config('app.name') }}
		</span>

		@if($subtext)
		<span class="text-[10px] text-secondary uppercase tracking-wider -mt-1 whitespace-nowrap">
			{{ $subtext }}
		</span>
		@endif
	</div>
</a>
