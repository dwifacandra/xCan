<?php
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Link;

new
#[Title('Links Management')]
class extends Component
{
    use WithPagination;

    public string $search = '';
    public string $status = '';
    public string $type = '';

    public function updatingSearch(): void
    {
        $this->resetPage();
    }

    public function updatingStatus(): void
    {
        $this->resetPage();
    }

    public function updatingType(): void
    {
        $this->resetPage();
    }

    public function toggleStatus(int $id): void
    {
        $link = Link::where('id', $id)
            ->where('user_id', auth()->id())
            ->firstOrFail();

        $link->update([
            'status'       => $link->status === Link::STATUS_PUBLISHED
                ? Link::STATUS_DRAFT
                : Link::STATUS_PUBLISHED,
            'published_at' => $link->status === Link::STATUS_DRAFT ? now() : $link->published_at,
        ]);
    }

    public function deleteData(int $id): void
    {
        Link::where('id', $id)
            ->where('user_id', auth()->id())
            ->firstOrFail()
            ->delete();
    }

    public function with(): array
    {
        return [
            'links' => Link::query()
                ->where('user_id', auth()->id())
                ->when($this->search, fn($q) => $q->where('title', 'like', "%{$this->search}%")
                    ->orWhere('slug', 'like', "%{$this->search}%"))
                ->when($this->status, fn($q) => $q->where('status', $this->status))
                ->when($this->type, fn($q) => $q->where('type', $this->type))
                ->withCount([
                    'visits as total_clicks' => fn($q) => $q->whereNotNull('link_item_id')
                        ->where('created_at', '>=', now()->subDays(30)),
                ])
                ->latest()
                ->paginate(10),
        ];
    }
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
	{{-- Filters --}}
	<div class="flex flex-col sm:flex-row gap-2 mb-4">
		<input wire:model.live.debounce.300ms="search" type="text" placeholder="Cari title atau slug..."
			class="border border-outline-variant rounded-md px-3 py-1.5 text-sm bg-surface text-on-surface w-full sm:w-64" />
		<select wire:model.live="status"
			class="border border-outline-variant rounded-md px-3 py-1.5 text-sm bg-surface text-on-surface">
			<option value="">Semua Status</option>
			<option value="{{ App\Models\Link::STATUS_PUBLISHED }}">Published</option>
			<option value="{{ App\Models\Link::STATUS_DRAFT }}">Draft</option>
			<option value="{{ App\Models\Link::STATUS_ARCHIVED }}">Archived</option>
		</select>
		<select wire:model.live="type"
			class="border border-outline-variant rounded-md px-3 py-1.5 text-sm bg-surface text-on-surface">
			<option value="">Semua Tipe</option>
			<option value="{{ App\Models\Link::TYPE_LINKTREE }}">Linktree</option>
			<option value="{{ App\Models\Link::TYPE_VCARD }}">vCard</option>
			<option value="{{ App\Models\Link::TYPE_PORTFOLIO }}">Portfolio</option>
			<option value="{{ App\Models\Link::TYPE_LANDING }}">Landing</option>
			<option value="{{ App\Models\Link::TYPE_STORE }}">Store</option>
		</select>
	</div>

	{{-- Links Table Card --}}
	<section class="grid grid-cols-4 gap-2">
		@forelse ($links as $link)
		<div
			class="bg-surface-container-lowest border border-outline-variant/50 rounded-lg px-4 py-3 hover:border-outline-variant hover:bg-surface-container transition-all">
			<div class="flex flex-col items-start justify-center gap-2">
				{{-- Icon Type --}}
				@php
				$typeIcon = match($link->type) {
				App\Models\Link::TYPE_LINKTREE => 'link',
				App\Models\Link::TYPE_VCARD => 'contact_page',
				App\Models\Link::TYPE_PORTFOLIO => 'work',
				App\Models\Link::TYPE_LANDING => 'web',
				App\Models\Link::TYPE_STORE => 'storefront',
				default => 'link',
				};
				$typeColor = match($link->type) {
				App\Models\Link::TYPE_LINKTREE => 'bg-primary-fixed text-on-primary-fixed-variant',
				App\Models\Link::TYPE_VCARD => 'bg-info-container text-on-info-container',
				App\Models\Link::TYPE_PORTFOLIO => 'bg-secondary-fixed text-on-secondary-fixed-variant',
				App\Models\Link::TYPE_LANDING => 'bg-warning-container text-on-warning-container',
				App\Models\Link::TYPE_STORE => 'bg-tertiary-fixed text-on-tertiary-fixed-variant',
				default => 'bg-surface-variant text-on-surface-variant',
				};
				@endphp
				<div class="flex items-center gap-2">
					<div class="shrink-0 w-9 h-9 rounded {{ $typeColor }} flex items-center justify-center">
						<span class="material-symbols-outlined text-base">{{ $typeIcon }}</span>
					</div>

					{{-- Title & URL --}}
					<div class="flex-1 leading-0 gap-1 flex flex-col items-start">
						<span
							class="text-sm font-semibold text-on-surface truncate @if($link->status !== App\Models\Link::STATUS_PUBLISHED) opacity-50 @endif">
							{{ $link->title }}
						</span>
						@php
						$typeBadge = match($link->type) {
						App\Models\Link::TYPE_LINKTREE => 'badge-primary-container',
						App\Models\Link::TYPE_VCARD => 'badge-info-container',
						App\Models\Link::TYPE_PORTFOLIO => 'badge-secondary-container',
						App\Models\Link::TYPE_LANDING => 'badge-warning-container',
						App\Models\Link::TYPE_STORE => 'badge-tertiary-container',
						default => 'badge-surface',
						};
						$statusBadge = match($link->status) {
						App\Models\Link::STATUS_PUBLISHED => 'badge-success-container',
						App\Models\Link::STATUS_DRAFT => 'badge-surface',
						App\Models\Link::STATUS_ARCHIVED => 'badge-error-container',
						default => 'badge-surface',
						};
						@endphp
						<div>
							<span class="badge badge-sm {{ $typeBadge }}">{{ ucfirst($link->type) }}</span>
							<span class="badge badge-sm {{ $statusBadge }}">{{ ucfirst($link->status) }}</span>
						</div>
						<x-link href="{{ url($link->slug) }}" target="_blank" icon="open_in_new" size="xs" @class(['opacity-50'=>
							$link->status !== App\Models\Link::STATUS_PUBLISHED])
							>
							{{ config('app.url') }}/{{ $link->slug }}
						</x-link>
					</div>
				</div>

				<div class="flex w-full items-center justify-between gap-2">
					{{-- Stats --}}
					<div class="hidden sm:flex flex-col items-center shrink-0 w-16 text-center">
						<span
							class="text-base font-bold text-primary @if($link->status !== App\Models\Link::STATUS_PUBLISHED) opacity-50 @endif">
							{{ number_format($link->total_clicks) }}
						</span>
						<span class="text-[10px] text-on-surface-variant">clicks/30d</span>
					</div>

					{{-- Created --}}
					<div class="hidden md:flex flex-col items-center shrink-0 w-20 text-center">
						<span class="text-xs font-medium text-on-surface">{{ $link->created_at->format('d M Y') }}</span>
						<span class="text-[10px] text-on-surface-variant">{{ $link->created_at->diffForHumans() }}</span>
					</div>

					{{-- Actions --}}
					<div class="flex items-center gap-0.5 shrink-0 scale-80">
						<x-button variant="outline" size="square-xs" icon="open_in_new" link="{{ url($link->slug) }}"
							target="_blank" />
						<x-button variant="outline" size="square-xs" icon="edit" />
						<x-button wire:click="toggleStatus({{ $link->id }})" variant="outline" size="square-xs"
							title="Toggle Status">
							<span class="material-symbols-outlined text-sm">
								{{ $link->status === App\Models\Link::STATUS_PUBLISHED ? 'visibility' : 'visibility_off' }}
							</span>
						</x-button>
						<x-confirm-modal title="Delete Link?"
							description="Are you sure you want to delete this link? This action cannot be undone." actionText="Delete"
							actionMethod="deleteData" :actionParams="[$link->id]">
							<x-slot:trigger>
								<x-button variant="error" icon="delete" size="square-xs" />
							</x-slot:trigger>
						</x-confirm-modal>
					</div>
				</div>

			</div>
		</div>
		@empty
		<div class="bg-surface-container-lowest border border-outline-variant/50 rounded-lg px-6 py-12 text-center">
			<span class="material-symbols-outlined text-4xl text-outline mb-2 block">link_off</span>
			<p class="text-sm text-on-surface-variant">Belum ada link.</p>
			<a href="#" class="text-sm text-primary hover:underline mt-1 inline-block">Buat link pertamamu</a>
		</div>
		@endforelse

		{{-- Pagination --}}
		@if($links->hasPages())
		<div class="flex items-center justify-between pt-2">
			<span class="text-xs text-on-surface-variant">
				{{ $links->firstItem() }}–{{ $links->lastItem() }} of {{ $links->total() }}
			</span>
			{{ $links->links() }}
		</div>
		@endif
	</section>
</section>
