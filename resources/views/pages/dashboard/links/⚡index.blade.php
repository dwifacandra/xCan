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

<!-- Page Content -->
<section>
	<!-- Header Section -->
	<x-app.page-header title="Link Management" description="Manage, track, and organize your short links.">
		<x-slot:actions>
			<x-modal title="Create New Link" modalId="create-link">
				<x-slot:trigger>
					<x-button variant="gradient-quaternary" icon="add" class="scale-102 hover:shadow-md">
						Add New Link
					</x-button>
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
					<x-button @click="open = false" variant="outline">
						Cancel
					</x-button>
					<x-button variant="success">
						Create Link
					</x-button>
				</x-slot:actions>
			</x-modal>
		</x-slot:actions>
	</x-app.page-header>
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
									<sup class="material-symbols-outlined align-sup !text-xs">open_in_new</sup>
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
							<div class="flex justify-end gap-1">
								<x-button variant="outline" size="square-xs" icon="open_in_new"
									link="{{ config('app.url') }}/campaign-{{ $i }}" target="_blank" />
								<x-button variant="outline" size="square-xs" icon="edit" />
								<x-button @click="active = !active" variant="outline" size="square-xs" title="Toggle Status">
									<span class="material-symbols-outlined text-sm"
										x-text="active ? 'visibility' : 'visibility_off'">visibility</span>
								</x-button>
								<x-confirm-modal title="Delete Link?"
									description="Are you sure you want to delete this link? This action cannot be undone."
									actionText="Delete" actionMethod="deleteData">
									<x-slot:trigger>
										<x-button variant="error" icon="delete" title="Delete" size="square-xs" />
									</x-slot:trigger>
								</x-confirm-modal>
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
</section>
