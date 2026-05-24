@props([
'trigger',
'title' => 'Are you sure?',
'description' => 'This action cannot be undone.',
'actionText' => 'Delete',
'actionMethod' => '',
'icon' => 'delete_forever',
'variant' => 'error'
])

<div x-data="{ open: false }" class="contents">
	{{-- Trigger --}}
	<div @click="open = true" class="contents">
		{{ $trigger }}
	</div>

	{{-- Backdrop --}}
	<div class="fixed inset-0 z-50 flex items-center justify-center bg-on-background/40 backdrop-blur-sm p-4" x-cloak
		x-show="open" x-transition.opacity>

		{{-- Modal Content --}}
		<div @click.away="open = false"
			class="bg-surface-container-lowest rounded-xl shadow-lg w-full max-w-sm border border-outline-variant overflow-hidden flex flex-col transform transition-all text-center"
			x-show="open" x-transition:enter="transition ease-out duration-300"
			x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
			x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
			x-transition:leave="transition ease-in duration-200"
			x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
			x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">

			<div class="p-6">
				{{-- Dynamic Icon Background based on Variant --}}
				<div
					class="w-12 h-12 rounded-full mx-auto flex items-center justify-center mb-4 {{ $variant === 'error' ? 'bg-error-container text-error' : 'bg-primary-container text-primary' }}">
					<span class="material-symbols-outlined">{{ $icon }}</span>
				</div>

				<h3 class="text-xl font-headline font-bold text-on-surface mb-2">{{ $title }}</h3>
				<p class="text-sm text-on-surface-variant font-body">{{ $description }}</p>
			</div>

			<div class="px-6 py-4 flex justify-end gap-2">
				<x-button @click="open = false" variant="outline" class="w-full">
					Cancel
				</x-button>
				<x-button @click="open = false" wire:click="{{ $actionMethod }}" :variant="$variant" class="w-full">
					{{ $actionText }}
				</x-button>
			</div>
		</div>
	</div>
</div>
