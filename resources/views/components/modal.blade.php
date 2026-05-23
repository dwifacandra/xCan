@props(['trigger', 'title' => 'Modal Title', 'modalId'])

<div x-data="{
    open: false,
    init() {
			const modalId = '{{ $modalId }}';
			const params = new URLSearchParams(window.location.search);
			if (params.get('modal') === modalId) {
				setTimeout(() => {
						this.open = true;
				}, 50);
				const url = new URL(window.location);
				url.searchParams.delete('modal');
				window.history.replaceState({}, document.title, url);
			}
    }
	}" x-init="init()">
	<div @click="open = true" class="cursor-pointer">
		{{ $trigger }}
	</div>

	<div class="fixed inset-0 z-100 flex items-center justify-center bg-on-background/40 backdrop-blur-sm p-4" x-cloak
		x-show="open" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0"
		x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200"
		x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">

		<div @click.away="open = false"
			class="rounded shadow-2xl w-full max-w-lg overflow-hidden flex flex-col transform transition-all" x-show="open"
			x-transition:enter="transition ease-out duration-300 delay-100"
			x-transition:enter-start="opacity-0 translate-y-4 scale-95"
			x-transition:enter-end="opacity-100 translate-y-0 scale-100" x-transition:leave="transition ease-in duration-200"
			x-transition:leave-start="opacity-100 translate-y-0 scale-100"
			x-transition:leave-end="opacity-0 translate-y-4 scale-95">

			<div class="px-4 py-2 border-b border-outline-variant flex justify-between items-center bg-primary">
				<h3 class="text-xl font-headline font-bold text-on-primary">{{ $title }}</h3>
				<button @click="open = false" class="text-on-primary-container hover:text-inverse-primary">
					<span class="material-symbols-outlined">close</span>
				</button>
			</div>

			<div class="bg-surface-container-lowest border border-outline-variant">
				{{ $content }}
			</div>

			@isset($actions)
			<div class="px-4 py-2  border-t border-outline-variant bg-surface-bright flex justify-end gap-2">
				{{ $actions }}
			</div>
			@endisset
		</div>
	</div>
</div>
