@props([
'href' => '#',
'target' => '_self',
'icon' => null,
'iconPosition' => 'right',
'size' => 'sm',
])

@php
$baseClasses = 'inline-flex items-center gap-1 font-label transition-colors hover:underline underline-offset-2';

$sizes = [
'xs' => 'text-[10px]',
'sm' => 'text-sm',
'md' => 'text-base',
'lg' => 'text-lg',
];

$classes = implode(' ', [
$baseClasses,
$sizes[$size] ?? $sizes['sm'],
]);
@endphp

<a href="{{ $href }}" target="{{ $target }}" {{ $attributes->merge(['class' => $classes]) }}>
	@if($icon && $iconPosition === 'left')
	<span class="material-symbols-outlined leading-none !text-[1em]">{{ $icon }}</span>
	@endif

	{{ $slot }}

	@if($icon && $iconPosition === 'right')
	<sup class="material-symbols-outlined !text-[0.75em] leading-none">{{ $icon }}</sup>
	@endif
</a>
