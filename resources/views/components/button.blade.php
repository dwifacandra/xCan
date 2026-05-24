@props([
'variant' => 'primary',
'size' => 'md',
'type' => 'button',
'link' => null,
'icon' => null,
'target' => '_self',
])

@php
$baseClasses = 'inline-flex items-center justify-center font-semibold rounded transition-all focus:outline-none
cursor-pointer';

$variants = [
// Solid
'primary' => 'bg-primary text-on-primary hover:bg-primary/90',
'secondary' => 'bg-secondary text-on-secondary hover:bg-secondary/90',
'tertiary' => 'bg-tertiary text-on-tertiary hover:bg-tertiary/90',
'error' => 'bg-error text-on-error hover:bg-error-container',
'success' => 'bg-success text-on-success hover:bg-success/90',
'warning' => 'bg-warning text-on-warning hover:bg-warning/90',
'info' => 'bg-info text-on-info hover:bg-info/90',
'surface' => 'bg-surface text-on-surface hover:bg-surface/90',

// Gradient
'gradient-primary' => 'gradient-primary text-on-primary hover:opacity-90 shadow-sm hover:shadow',
'gradient-secondary' => 'gradient-secondary text-on-secondary hover:opacity-90 shadow-sm hover:shadow',
'gradient-tertiary' => 'gradient-tertiary text-on-tertiary hover:opacity-90 shadow-sm hover:shadow',
'gradient-quaternary' => 'gradient-quaternary text-on-primary hover:opacity-90 shadow-sm hover:shadow',

// Outline & Ghost
'outline' => 'border border-outline-variant text-on-surface hover:bg-surface-container',
'ghost' => 'text-outline hover:text-primary hover:bg-primary-fixed-dim',
];

$sizes = [
// Tombol Standar (Teks + Ikon)
'xs' => 'px-[var(--spacing-stack-sm)] py-[var(--spacing-stack-xs)] text-[10px] gap-[var(--spacing-stack-xs)]',
'sm' => 'px-[var(--spacing-stack-md)] py-[var(--spacing-stack-sm)] text-xs gap-[var(--spacing-stack-xs)]',
'md' => 'px-[var(--spacing-stack-lg)] py-[var(--spacing-stack-sm)] text-sm gap-[var(--spacing-stack-sm)]',
'lg' => 'px-[var(--spacing-stack-xl)] py-[var(--spacing-stack-md)] text-base gap-[var(--spacing-stack-md)]',
'xl' => 'px-[var(--spacing-safe-area)] py-[var(--spacing-stack-lg)] text-lg gap-[var(--spacing-stack-md)]',

// Tombol Square (Ikon saja, 1:1, menambahkan text-size agar ikon menyesuaikan)
'square-xs' => 'p-[var(--spacing-stack-xs)] text-xs aspect-square',
'square-sm' => 'p-[var(--spacing-stack-sm)] text-sm aspect-square',
'square-md' => 'p-[var(--spacing-stack-md)] text-md aspect-square',
'square-lg' => 'p-[var(--spacing-stack-lg)] text-lg aspect-square',
'square-xl' => 'p-[var(--spacing-stack-xl)] text-x; aspect-square',

// Tombol Circle (Ikon saja, rounded, menambahkan text-size)
'circle-xs' => 'p-[var(--spacing-stack-xs)] text-xs rounded-full aspect-square',
'circle-sm' => 'p-[var(--spacing-stack-sm)] text-sm rounded-full aspect-square',
'circle-md' => 'p-[var(--spacing-stack-md)] text-md rounded-full aspect-square',
'circle-lg' => 'p-[var(--spacing-stack-lg)] text-lg rounded-full aspect-square',
'circle-xl' => 'p-[var(--spacing-stack-xl)] text-xl rounded-full aspect-square',
];

$classes = implode(' ', [
$baseClasses,
$variants[$variant] ?? $variants['primary'],
$sizes[$size] ?? $sizes['md']
]);
@endphp

@if($link)
{{-- Render sebagai Anchor --}}
<a href="{{ $link }}" target="{{ $target }}" {{ $attributes->merge(['class' => $classes]) }}>
	@if($icon) <span class="material-symbols-outlined leading-none">{{ $icon }}</span> @endif
	{{ $slot }}
</a>
@else
{{-- Render sebagai Button --}}
<button type="{{ $type }}" {{ $attributes->merge(['class' => $classes]) }}>
	@if($icon) <span class="material-symbols-outlined leading-none">{{ $icon }}</span> @endif
	{{ $slot }}
</button>
@endif
