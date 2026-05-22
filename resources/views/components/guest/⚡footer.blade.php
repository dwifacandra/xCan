<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<!-- Footer -->
<footer class="bg-surface-container-lowest w-full rounded-t-xl mt-20">
	<div class="flex flex-col gap-stack-lg w-full px-6 py-12 md:max-w-8/12 mx-auto">
		<div class="grid grid-cols-1 md:grid-cols-4 gap-12">
			<div class="col-span-1 md:col-span-1 space-y-4">
				<div class="flex items-center gap-3">
					<img alt="Logo" class="w-10 h-10 object-contain" src="{{ asset('logo.png') }}">
				</div>
				<p class="text-on-surface-variant text-body-md">The ultimate ecosystem for developers and digital creators to
					unify their presence.</p>
				<div class="flex gap-6">
					<a class="text-on-surface-variant hover:text-primary transition-all text-xl" href="#"><i
							class="fa-brands fa-github"></i></a>
					<a class="text-on-surface-variant hover:text-primary transition-all text-xl" href="#"><i
							class="fa-brands fa-youtube"></i></a>
					<a class="text-on-surface-variant hover:text-primary transition-all text-xl" href="#"><i
							class="fa-brands fa-linkedin"></i></a>
				</div>
			</div>
			<div class="col-span-1 flex flex-col gap-4">
				<h5 class="font-bold text-on-surface uppercase text-xs tracking-widest">Platform</h5>
				<a class="text-on-surface-variant hover:text-secondary-container transition-colors font-label-sm text-label-sm"
					href="#">Custom Pages</a>
				<a class="text-on-surface-variant hover:text-secondary-container transition-colors font-label-sm text-label-sm"
					href="#">Stream Overlays</a>
				<a class="text-on-surface-variant hover:text-secondary-container transition-colors font-label-sm text-label-sm"
					href="#">Monetization</a>
			</div>
			<div class="col-span-1 flex flex-col gap-4">
				<h5 class="font-bold text-on-surface uppercase text-xs tracking-widest">Resources</h5>
				<a class="text-on-surface-variant hover:text-secondary-container transition-colors font-label-sm text-label-sm"
					href="#">API Docs</a>
				<a class="text-on-surface-variant hover:text-secondary-container transition-colors font-label-sm text-label-sm"
					href="#">Privacy Policy</a>
				<a class="text-on-surface-variant hover:text-secondary-container transition-colors font-label-sm text-label-sm"
					href="#">Terms of Service</a>
			</div>
			<div class="col-span-1 flex flex-col gap-4">
				<h5 class="font-bold text-on-surface uppercase text-xs tracking-widest">Enterprise</h5>
				<a class="text-on-surface-variant hover:text-secondary-container transition-colors font-label-sm text-label-sm"
					href="#">Licensing</a>
				<a class="text-on-surface-variant hover:text-secondary-container transition-colors font-label-sm text-label-sm"
					href="#">Compliance</a>
				<a class="text-on-surface-variant hover:text-secondary-container transition-colors font-label-sm text-label-sm"
					href="#">Institutional</a>
			</div>
		</div>
		<div class="pt-12 border-t border-outline-variant/20 flex flex-col md:flex-row justify-between items-center gap-6">
			<p class="font-label-sm text-label-sm text-on-surface-variant text-center md:text-left">© 2024 xCan Ecosystem. All
				rights reserved. Professional tools for the high-performance developer.</p>
		</div>
	</div>
</footer>
