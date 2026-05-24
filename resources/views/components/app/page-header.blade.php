@props([
'title',
'description' => null,
])

<section {{ $attributes->merge(['class' => 'flex flex-col md:flex-row justify-between items-start md:items-center mb-8
	gap-4']) }}>
	<div>
		<h2 class="text-xl font-headline font-bold gradient-text tracking-tight">
			{{ $title }}
		</h2>

		@if($description)
		<p class="text-on-surface-variant text-sm">{{ $description }}</p>
		@endif
	</div>

	@if(isset($actions))
	<div class="flex items-center gap-2">
		{{ $actions }}
	</div>
	@endif
</section>
