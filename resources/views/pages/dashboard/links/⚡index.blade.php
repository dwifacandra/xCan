<?php
use Livewire\Attributes\Title;
use Livewire\Component;

new
	#[Title('Links Management')]
class extends Component
{
    //
};
?>

<section>
	<!-- Page Content -->
	<!-- Header Section -->
	<section class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8 gap-4">
		<div>
			<h2 class="text-3xl font-headline font-bold text-primary-gradient tracking-tight">
				Link Management
			</h2>
			<p class="text-on-surface-variant font-body mt-1">Manage, track, and organize your short links.</p>
		</div>
		<x-modal title="Create New Link" modalId="create-link">
			<x-slot:trigger>
				<button
					class="quaternary-gradient text-on-primary py-2 px-4 rounded font-semibold text-sm flex items-center gap-2 shadow-sm hover:shadow-md transition-all scale-102">
					<span class="material-symbols-outlined text-sm">add</span>
					Add New Link
				</button>
			</x-slot:trigger>
			<x-slot:content>
				<div class="p-6 space-y-5">
					<div>
						<label class="block text-sm font-semibold font-body text-on-surface mb-1">Link Title</label>
						<input
							class="w-full px-4 py-2 bg-surface rounded border border-outline-variant focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all font-body text-sm text-on-surface"
							placeholder="e.g. Fall Promo Campaign" type="text" />
					</div>
					<div>
						<label class="block text-sm font-semibold font-body text-on-surface mb-1">Description</label>
						<textarea
							class="w-full px-4 py-2 bg-surface rounded border border-outline-variant focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all font-body text-sm text-on-surface"
							placeholder="Enter a description for your link..." rows="3"></textarea>
					</div>
					<div>
						<label class="block text-sm font-semibold font-body text-on-surface mb-1">Custom Slug <span
								class="text-outline font-normal text-xs">(Optional)</span></label>
						<div class="flex rounded-md shadow-sm">
							<span
								class="inline-flex items-center px-3 rounded-l border border-r-0 border-outline-variant bg-surface-container text-outline font-label text-sm">
								xcan.test/
							</span>
							<input
								class="flex-1 block w-full px-4 py-2 bg-surface rounded-none rounded-r border border-outline-variant focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all font-body text-sm text-on-surface"
								placeholder="custom-name" type="text" />
						</div>
					</div>
					<div class="flex items-center justify-between pt-2">
						<div>
							<label class="text-sm font-semibold font-body text-on-surface">Track Clicks &amp; Analytics</label>
							<p class="text-xs text-on-surface-variant font-body">Enable detailed reporting for this link.</p>
						</div>
						<label class="relative inline-flex items-center cursor-pointer">
							<input checked class="sr-only peer" type="checkbox" />
							<div
								class="w-11 h-6 bg-outline-variant peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary">
							</div>
						</label>
					</div>
				</div>
			</x-slot:content>
			<x-slot:actions>
				<button @click="open = false"
					class="px-5 py-2 rounded font-semibold text-sm border border-outline-variant text-on-surface hover:bg-surface-container transition-colors">
					Cancel
				</button>
				<button
					class="px-5 py-2 rounded font-semibold text-sm bg-primary text-on-primary shadow-sm hover:bg-primary-container transition-colors">
					Create Link
				</button>
			</x-slot:actions>
		</x-modal>
	</section>
	<!-- Links Table Card -->
	<section class="rounded overflow-hidden shadow-sm">
		<div class="overflow-x-auto">
			<table class="w-full text-left border-collapse">
				<thead>
					<tr
						class="bg-primary text-on-primary font-label text-xs uppercase tracking-wider border-b border-outline-variant">
						<th class="px-6 py-4 font-semibold">Title &amp; URL</th>
						<th class="px-6 py-4 font-semibold">Clicks (30d)</th>
						<th class="px-6 py-4 font-semibold">Status</th>
						<th class="px-6 py-4 font-semibold hidden md:table-cell">Created</th>
						<th class="px-6 py-4 font-semibold text-right">Actions</th>
					</tr>
				</thead>
				<tbody class="divide-y divide-outline-variant">
					@for ($i = 1; $i <= 10; $i++) <tr class="hover:bg-surface-container-lowest/50 transition-colors group"
						x-data="{ active: true }">
						<td class="px-4 py-2">
							<div class="flex flex-col">
								<span :class="{ 'opacity-60': !active }" class="font-headline font-semibold text-on-surface">
									Campaign #{{ $i }}
								</span>
								<a :class="{ 'opacity-60': !active }"
									class="text-primary text-sm font-label hover:underline flex items-center gap-1 mt-1" href="#">
									xcan.test/campaign-{{ $i }}
									<span class="material-symbols-outlined text-[14px]">open_in_new</span>
								</a>
							</div>
						</td>
						<td class="px-4 py-2">
							<div class="flex items-center gap-3">
								<span :class="{ 'opacity-60': !active }"
									class="font-headline font-semibold text-lg text-primary">12,450</span>
								<div :class="{ 'opacity-40': !active }" class="h-6 w-16 flex items-end gap-[1px] opacity-70">
									<div class="w-full bg-primary rounded-t-sm h-[20%]"></div>
									<div class="w-full bg-primary rounded-t-sm h-[40%]"></div>
									<div class="w-full bg-primary rounded-t-sm h-[35%]"></div>
									<div class="w-full bg-primary rounded-t-sm h-[60%]"></div>
									<div class="w-full bg-primary rounded-t-sm h-[80%]"></div>
									<div class="w-full bg-primary rounded-t-sm h-[100%]"></div>
								</div>
							</div>
						</td>
						<td class="px-4 py-2">
							<span
								class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-label bg-primary-fixed text-on-primary-fixed-variant"
								x-show="active">
								Active
							</span>
							<span
								class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-label bg-surface-variant text-on-surface-variant"
								x-cloak x-show="!active">
								Inactive
							</span>
						</td>
						<td :class="{ 'opacity-60': !active }"
							class="px-4 py-2 text-sm text-on-surface-variant font-body hidden md:table-cell">
							Oct 24, 2023
						</td>
						<td class="px-4 py-2 text-right">
							<div class="flex justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
								<button
									class="px-3 py-1.5 text-xs font-semibold text-primary border border-primary rounded-md hover:bg-primary hover:text-on-primary transition-colors">Manage</button>
								<button @click="active = !active"
									class="p-1.5 text-outline hover:text-primary rounded-md hover:bg-primary-fixed-dim transition-colors"
									title="Toggle Status">
									<span class="material-symbols-outlined text-sm"
										x-text="active ? 'visibility' : 'visibility_off'">visibility</span>
								</button>
								<button @click="confirmDeleteModal = true"
									class="p-1.5 text-outline hover:text-secondary rounded-md hover:bg-secondary-fixed transition-colors"
									title="Delete">
									<span class="material-symbols-outlined text-sm">delete</span>
								</button>
							</div>
						</td>
						</tr>
						@endfor
				</tbody>
			</table>
		</div>
		<!-- Pagination -->
		<div
			class="px-6 py-4 border-t border-outline-variant flex items-center justify-between bg-surface-container-lowest/30">
			<span class="text-sm text-on-surface-variant font-body">Showing 1 to 10 of 42 entries</span>
			<div class="flex gap-1">
				<button
					class="px-3 py-1 border border-outline-variant rounded-md text-sm font-label text-outline hover:bg-surface-variant transition-colors"
					disabled="">&lt;</button>
				<button
					class="px-3 py-1 bg-primary text-on-primary rounded-md text-sm font-label border border-primary">1</button>
				<button
					class="px-3 py-1 border border-outline-variant rounded-md text-sm font-label text-on-surface hover:bg-surface-variant transition-colors">2</button>
				<button
					class="px-3 py-1 border border-outline-variant rounded-md text-sm font-label text-on-surface hover:bg-surface-variant transition-colors">3</button>
				<button
					class="px-3 py-1 border border-outline-variant rounded-md text-sm font-label text-on-surface hover:bg-surface-variant transition-colors">&gt;</button>
			</div>
		</div>
	</section>
	<!-- Confirm Delete Modal -->
	<div class="fixed inset-0 z-50 flex items-center justify-center bg-on-background/40 backdrop-blur-sm p-4" x-cloak=""
		x-show="confirmDeleteModal" x-transition.opacity="">
		<div @click.away="confirmDeleteModal = false"
			class="bg-surface-container-lowest rounded-xl shadow-lg w-full max-w-sm border border-outline-variant overflow-hidden flex flex-col transform transition-all text-center"
			x-show="confirmDeleteModal" x-transition:enter="transition ease-out duration-300"
			x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
			x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
			x-transition:leave="transition ease-in duration-200"
			x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
			x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100">
			<div class="p-6">
				<div class="w-12 h-12 rounded-full bg-error-container text-error mx-auto flex items-center justify-center mb-4">
					<span class="material-symbols-outlined">delete_forever</span>
				</div>
				<h3 class="text-xl font-headline font-bold text-on-surface mb-2">Delete Link?</h3>
				<p class="text-sm text-on-surface-variant font-body">Are you sure you want to delete this link? This action
					cannot
					be undone.</p>
			</div>
			<div class="px-6 py-4 border-t border-outline-variant bg-surface-bright flex justify-end gap-3">
				<button @click="confirmDeleteModal = false"
					class="px-4 py-2 rounded-lg font-semibold text-sm border border-outline-variant text-on-surface hover:bg-surface-container transition-colors w-full">
					Cancel
				</button>
				<button @click="confirmDeleteModal = false"
					class="px-4 py-2 rounded-lg font-semibold text-sm bg-error text-on-error shadow-sm hover:bg-on-error-container transition-colors w-full">
					Delete
				</button>
			</div>
		</div>
	</div>
</section>
