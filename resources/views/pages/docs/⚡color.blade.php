<?php
use Livewire\Attributes\Title;
use Livewire\Component;

new
	#[Title('Color Palette')]
class extends Component
{
    //
};
?>

{{-- ============================================================ --}}
{{-- DESIGN SYSTEM PREVIEW --}}
{{-- ============================================================ --}}

<div class="p-6 space-y-10 bg-background text-on-background">

	{{-- Surface Scale --}}
	<section>
		<h2 class="text-md font-bold mb-4 uppercase">Surface Scale</h2>
		<div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-2">
			<div class="bg-surface text-on-surface p-2 rounded border border-outline-variant">
				<p class="font-medium">surface</p>
				<p class="text-xs opacity-70">bg: surface</p>
				<p class="text-xs opacity-70">text: on-surface</p>
			</div>
			<div class="bg-surface-dim text-on-surface p-2 rounded">
				<p class="font-medium">surface-dim</p>
				<p class="text-xs opacity-70">bg: surface-dim</p>
				<p class="text-xs opacity-70">text: on-surface</p>
			</div>
			<div class="bg-surface-bright text-on-surface p-2 rounded border border-outline-variant">
				<p class="font-medium">surface-bright</p>
				<p class="text-xs opacity-70">bg: surface-bright</p>
				<p class="text-xs opacity-70">text: on-surface</p>
			</div>
			<div class="bg-surface-container-lowest text-on-surface p-2 rounded border border-outline-variant">
				<p class="font-medium">container-lowest</p>
				<p class="text-xs opacity-70">bg: surface-container-lowest</p>
				<p class="text-xs opacity-70">text: on-surface</p>
			</div>
			<div class="bg-surface-container-low text-on-surface p-2 rounded">
				<p class="font-medium">container-low</p>
				<p class="text-xs opacity-70">bg: surface-container-low</p>
				<p class="text-xs opacity-70">text: on-surface</p>
			</div>
			<div class="bg-surface-container text-on-surface p-2 rounded">
				<p class="font-medium">container</p>
				<p class="text-xs opacity-70">bg: surface-container</p>
				<p class="text-xs opacity-70">text: on-surface</p>
			</div>
			<div class="bg-surface-container-high text-on-surface p-2 rounded">
				<p class="font-medium">container-high</p>
				<p class="text-xs opacity-70">bg: surface-container-high</p>
				<p class="text-xs opacity-70">text: on-surface</p>
			</div>
			<div class="bg-surface-container-highest text-on-surface p-2 rounded">
				<p class="font-medium">container-highest</p>
				<p class="text-xs opacity-70">bg: surface-container-highest</p>
				<p class="text-xs opacity-70">text: on-surface</p>
			</div>
			<div class="bg-surface-variant text-on-surface-variant p-2 rounded">
				<p class="font-medium">surface-variant</p>
				<p class="text-xs opacity-70">bg: surface-variant</p>
				<p class="text-xs opacity-70">text: on-surface-variant</p>
			</div>
			<div class="bg-surface-tint text-on-primary p-2 rounded">
				<p class="font-medium">surface-tint</p>
				<p class="text-xs opacity-70">bg: surface-tint</p>
				<p class="text-xs opacity-70">text: on-primary</p>
			</div>
		</div>
	</section>

	{{-- On-Surface & Inverse --}}
	<section>
		<h2 class="text-md font-bold mb-4 uppercase">On-Surface & Inverse</h2>
		<div class="grid grid-cols-2 md:grid-cols-4 gap-2">
			<div class="bg-on-surface text-surface p-2 rounded">
				<p class="font-medium">on-surface</p>
				<p class="text-xs opacity-70">bg: on-surface</p>
				<p class="text-xs opacity-70">text: surface</p>
			</div>
			<div class="bg-on-surface-variant text-surface p-2 rounded">
				<p class="font-medium">on-surface-variant</p>
				<p class="text-xs opacity-70">bg: on-surface-variant</p>
				<p class="text-xs opacity-70">text: surface</p>
			</div>
			<div class="bg-inverse-surface text-inverse-on-surface p-2 rounded">
				<p class="font-medium">inverse-surface</p>
				<p class="text-xs opacity-70">bg: inverse-surface</p>
				<p class="text-xs opacity-70">text: inverse-on-surface</p>
			</div>
			<div class="bg-inverse-on-surface text-inverse-surface p-2 rounded border border-outline-variant">
				<p class="font-medium">inverse-on-surface</p>
				<p class="text-xs opacity-70">bg: inverse-on-surface</p>
				<p class="text-xs opacity-70">text: inverse-surface</p>
			</div>
		</div>
	</section>

	{{-- Outline --}}
	<section>
		<h2 class="text-md font-bold mb-4 uppercase">Outline</h2>
		<div class="grid grid-cols-2 gap-2">
			<div class="bg-outline text-on-primary p-2 rounded">
				<p class="font-medium">outline</p>
				<p class="text-xs opacity-70">bg: outline</p>
				<p class="text-xs opacity-70">text: on-primary</p>
			</div>
			<div class="bg-outline-variant text-on-surface p-2 rounded">
				<p class="font-medium">outline-variant</p>
				<p class="text-xs opacity-70">bg: outline-variant</p>
				<p class="text-xs opacity-70">text: on-surface</p>
			</div>
		</div>
	</section>

	{{-- Primary Palette --}}
	<section>
		<h2 class="text-md font-bold mb-4 uppercase">Primary Palette</h2>
		<div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-2">
			<div class="bg-primary text-on-primary p-2 rounded">
				<p class="font-medium">primary</p>
				<p class="text-xs opacity-70">bg: primary</p>
				<p class="text-xs opacity-70">text: on-primary</p>
			</div>
			<div class="bg-primary-container text-on-primary-container p-2 rounded">
				<p class="font-medium">primary-container</p>
				<p class="text-xs opacity-70">bg: primary-container</p>
				<p class="text-xs opacity-70">text: on-primary-container</p>
			</div>
			<div class="bg-primary-fixed text-on-primary-fixed p-2 rounded">
				<p class="font-medium">primary-fixed</p>
				<p class="text-xs opacity-70">bg: primary-fixed</p>
				<p class="text-xs opacity-70">text: on-primary-fixed</p>
			</div>
			<div class="bg-primary-fixed-dim text-on-primary-fixed-variant p-2 rounded">
				<p class="font-medium">primary-fixed-dim</p>
				<p class="text-xs opacity-70">bg: primary-fixed-dim</p>
				<p class="text-xs opacity-70">text: on-primary-fixed-variant</p>
			</div>
			<div class="bg-inverse-primary text-primary p-2 rounded">
				<p class="font-medium">inverse-primary</p>
				<p class="text-xs opacity-70">bg: inverse-primary</p>
				<p class="text-xs opacity-70">text: primary</p>
			</div>
		</div>
	</section>

	{{-- Secondary Palette --}}
	<section>
		<h2 class="text-md font-bold mb-4 uppercase">Secondary Palette</h2>
		<div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-2">
			<div class="bg-secondary text-on-secondary p-2 rounded">
				<p class="font-medium">secondary</p>
				<p class="text-xs opacity-70">bg: secondary</p>
				<p class="text-xs opacity-70">text: on-secondary</p>
			</div>
			<div class="bg-secondary-container text-on-secondary-container p-2 rounded">
				<p class="font-medium">secondary-container</p>
				<p class="text-xs opacity-70">bg: secondary-container</p>
				<p class="text-xs opacity-70">text: on-secondary-container</p>
			</div>
			<div class="bg-secondary-fixed text-on-secondary-fixed p-2 rounded">
				<p class="font-medium">secondary-fixed</p>
				<p class="text-xs opacity-70">bg: secondary-fixed</p>
				<p class="text-xs opacity-70">text: on-secondary-fixed</p>
			</div>
			<div class="bg-secondary-fixed-dim text-on-secondary-fixed-variant p-2 rounded">
				<p class="font-medium">secondary-fixed-dim</p>
				<p class="text-xs opacity-70">bg: secondary-fixed-dim</p>
				<p class="text-xs opacity-70">text: on-secondary-fixed-variant</p>
			</div>
		</div>
	</section>

	{{-- Tertiary Palette --}}
	<section>
		<h2 class="text-md font-bold mb-4 uppercase">Tertiary Palette</h2>
		<div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-2">
			<div class="bg-tertiary text-on-tertiary p-2 rounded">
				<p class="font-medium">tertiary</p>
				<p class="text-xs opacity-70">bg: tertiary</p>
				<p class="text-xs opacity-70">text: on-tertiary</p>
			</div>
			<div class="bg-tertiary-container text-on-tertiary-container p-2 rounded">
				<p class="font-medium">tertiary-container</p>
				<p class="text-xs opacity-70">bg: tertiary-container</p>
				<p class="text-xs opacity-70">text: on-tertiary-container</p>
			</div>
			<div class="bg-tertiary-fixed text-on-tertiary-fixed p-2 rounded">
				<p class="font-medium">tertiary-fixed</p>
				<p class="text-xs opacity-70">bg: tertiary-fixed</p>
				<p class="text-xs opacity-70">text: on-tertiary-fixed</p>
			</div>
			<div class="bg-tertiary-fixed-dim text-on-tertiary-fixed-variant p-2 rounded">
				<p class="font-medium">tertiary-fixed-dim</p>
				<p class="text-xs opacity-70">bg: tertiary-fixed-dim</p>
				<p class="text-xs opacity-70">text: on-tertiary-fixed-variant</p>
			</div>
		</div>
	</section>

	{{-- Semantic Palette --}}
	<section>
		<h2 class="text-md font-bold mb-4 uppercase">Semantic Palette</h2>
		<div class="grid grid-cols-2 md:grid-cols-4 gap-2">
			<div class="bg-success text-on-success p-2 rounded">
				<p class="font-medium">success</p>
				<p class="text-xs opacity-70">bg: success</p>
				<p class="text-xs opacity-70">text: on-success</p>
			</div>
			<div class="bg-success-container text-on-success-container p-2 rounded">
				<p class="font-medium">success-container</p>
				<p class="text-xs opacity-70">bg: success-container</p>
				<p class="text-xs opacity-70">text: on-success-container</p>
			</div>
			<div class="bg-warning text-on-warning p-2 rounded">
				<p class="font-medium">warning</p>
				<p class="text-xs opacity-70">bg: warning</p>
				<p class="text-xs opacity-70">text: on-warning</p>
			</div>
			<div class="bg-warning-container text-on-warning-container p-2 rounded">
				<p class="font-medium">warning-container</p>
				<p class="text-xs opacity-70">bg: warning-container</p>
				<p class="text-xs opacity-70">text: on-warning-container</p>
			</div>
			<div class="bg-error text-on-error p-2 rounded">
				<p class="font-medium">error</p>
				<p class="text-xs opacity-70">bg: error</p>
				<p class="text-xs opacity-70">text: on-error</p>
			</div>
			<div class="bg-error-container text-on-error-container p-2 rounded">
				<p class="font-medium">error-container</p>
				<p class="text-xs opacity-70">bg: error-container</p>
				<p class="text-xs opacity-70">text: on-error-container</p>
			</div>
			<div class="bg-info text-on-info p-2 rounded">
				<p class="font-medium">info</p>
				<p class="text-xs opacity-70">bg: info</p>
				<p class="text-xs opacity-70">text: on-info</p>
			</div>
			<div class="bg-info-container text-on-info-container p-2 rounded">
				<p class="font-medium">info-container</p>
				<p class="text-xs opacity-70">bg: info-container</p>
				<p class="text-xs opacity-70">text: on-info-container</p>
			</div>
		</div>
	</section>

	{{-- Gradients --}}
	<section>
		<h2 class="text-md font-bold mb-4 uppercase">Gradients</h2>
		<div class="grid grid-cols-1 md:grid-cols-2 gap-2">
			<div class="gradient-primary text-white p-4 rounded">
				<p class="font-medium">gradient-primary</p>
				<p class="text-xs opacity-70">primary → secondary</p>
			</div>
			<div class="gradient-secondary text-white p-4 rounded">
				<p class="font-medium">gradient-secondary</p>
				<p class="text-xs opacity-70">secondary → primary</p>
			</div>
			<div class="gradient-tertiary text-white p-4 rounded">
				<p class="font-medium">gradient-tertiary</p>
				<p class="text-xs opacity-70">tertiary → tertiary-container</p>
			</div>
			<div class="gradient-quaternary text-white p-4 rounded">
				<p class="font-medium">gradient-quaternary</p>
				<p class="text-xs opacity-70">#1218a6 → #7b1fa2</p>
			</div>
			<div class="gradient-brand text-white p-4 rounded">
				<p class="font-medium">gradient-brand</p>
				<p class="text-xs opacity-70">#0a52ce → #bc1333</p>
			</div>
			<div class="gradient-animated text-white p-4 rounded">
				<p class="font-medium">gradient-animated</p>
				<p class="text-xs opacity-70">primary → secondary (animated)</p>
			</div>
		</div>
	</section>

	{{-- Text Gradient --}}
	<section>
		<h2 class="text-md font-bold mb-4 uppercase">Text Gradient</h2>
		<p class="gradient-text text-3xl font-bold">gradient-text</p>
		<p class="text-sm text-on-surface-variant mt-1">utility: gradient-text</p>
	</section>

	{{-- Glass Card --}}
	<section>
		<h2 class="text-md font-bold mb-4 uppercase">Glass Card</h2>
		<div class="gradient-primary p-6 rounded-xl">
			<div class="glass-card p-6 rounded-lg text-white">
				<p class="font-semibold text-lg">glass-card</p>
				<p class="text-xs opacity-70 mt-1">utility: glass-card</p>
				<p class="text-xs opacity-70">bg: rgba(255,255,255,0.1) + backdrop-blur</p>
				<p class="text-xs opacity-70">text: white (manual)</p>
			</div>
		</div>
	</section>

</div>
