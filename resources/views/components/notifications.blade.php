<div class="relative" x-data="{ notificationsOpen: false }">
	<button @click="notificationsOpen = !notificationsOpen"
		class="flex h-10 w-10 items-center justify-center rounded-full transition-colors duration-200 hover:bg-surface-variant text-on-surface-variant"
		aria-label="Notifications">
		<span class="material-symbols-outlined text-[24px]">notifications</span>
		<span class="absolute top-2 right-2 w-2 h-2 bg-secondary rounded-full ring-2 ring-surface-container-lowest"></span>
	</button>

	<div x-show="notificationsOpen" x-cloak @click.outside="notificationsOpen = false"
		x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 scale-95"
		x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-150"
		x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
		class="absolute right-0 top-full mt-3 w-80 bg-surface-container-lowest border border-outline-variant/20 rounded-2xl shadow-xl z-50 overflow-hidden">

		<div class="flex items-center justify-between px-5 py-4 border-b border-outline-variant/10">
			<h3 class="text-sm font-semibold text-on-surface">Notifications</h3>
			<button class="text-xs font-medium text-primary hover:underline">Mark all read</button>
		</div>

		<div class="max-h-96 overflow-y-auto">
			<div
				class="px-5 py-4 hover:bg-surface-container-low transition-colors cursor-pointer border-b border-outline-variant/5">
				<p class="text-sm text-on-surface font-medium">Domain connected</p>
				<p class="text-xs text-on-surface-variant mt-0.5">Your domain is now active.</p>
			</div>
		</div>
	</div>
</div>
