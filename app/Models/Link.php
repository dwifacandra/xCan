<?php

namespace App\Models;

use App\Models\LinkItem;
use App\Models\LinkVisit;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Link extends Model
{
	use HasFactory, SoftDeletes;

	protected $fillable = [
		// Identity
		'user_id',
		'title',
		'slug',
		'bio',
		'avatar',

		// Type
		'type',

		// Status & Theme
		'status',
		'theme',
		'custom_css',

		// SEO
		'meta_title',
		'meta_description',
		'meta_image',
		'meta_keywords',
		'meta_robots',
		'canonical_url',
		'meta_structured_data',

		// Favicon
		'favicon',
		'favicon_emoji',
		'favicon_type',

		// Social Preview
		'og_title',
		'og_description',
		'og_image',
		'twitter_card',
		'twitter_site',

		// Analytics & Tracking
		'ga_id',
		'pixel_id',
		'gtm_id',

		// Settings
		'is_indexed',
		'show_branding',
		'password',
		'published_at',
		'expires_at',
	];

	protected $casts = [
		'meta_structured_data' => 'array',
		'is_indexed'           => 'boolean',
		'show_branding'        => 'boolean',
		'published_at'         => 'datetime',
		'expires_at'           => 'datetime',
	];

	protected $hidden = [
		'password',
	];

	// -------------------------------------------------------------------------
	// Constants
	// -------------------------------------------------------------------------

	const TYPE_LINKTREE  = 'linktree';
	const TYPE_VCARD     = 'vcard';
	const TYPE_PORTFOLIO = 'portfolio';
	const TYPE_LANDING   = 'landing';
	const TYPE_STORE     = 'store';

	const STATUS_DRAFT     = 'draft';
	const STATUS_PUBLISHED = 'published';
	const STATUS_ARCHIVED  = 'archived';

	const FAVICON_DEFAULT = 'default';
	const FAVICON_UPLOAD  = 'upload';
	const FAVICON_EMOJI   = 'emoji';

	// -------------------------------------------------------------------------
	// Relationships
	// -------------------------------------------------------------------------

	public function user(): BelongsTo
	{
		return $this->belongsTo(User::class);
	}

	public function items(): HasMany
	{
		return $this->hasMany(LinkItem::class)->orderBy('order');
	}

	public function visits(): HasMany
	{
		return $this->hasMany(LinkVisit::class);
	}

	// -------------------------------------------------------------------------
	// Scopes
	// -------------------------------------------------------------------------

	public function scopePublished($query)
	{
		return $query->where('status', self::STATUS_PUBLISHED)
			->whereNotNull('published_at')
			->where('published_at', '<=', now())
			->where(function ($q) {
				$q->whereNull('expires_at')
					->orWhere('expires_at', '>', now());
			});
	}

	public function scopeDraft($query)
	{
		return $query->where('status', self::STATUS_DRAFT);
	}

	public function scopeOfType($query, string $type)
	{
		return $query->where('type', $type);
	}

	// -------------------------------------------------------------------------
	// Accessors
	// -------------------------------------------------------------------------

	public function getUrlAttribute(): string
	{
		return url($this->slug);
	}

	public function getIsPublishedAttribute(): bool
	{
		return $this->status === self::STATUS_PUBLISHED
			&& $this->published_at?->isPast()
			&& ($this->expires_at === null || $this->expires_at->isFuture());
	}

	public function getIsExpiredAttribute(): bool
	{
		return $this->expires_at !== null && $this->expires_at->isPast();
	}

	public function getIsPasswordProtectedAttribute(): bool
	{
		return !empty($this->password);
	}

	public function getEffectiveMetaTitleAttribute(): string
	{
		return $this->meta_title ?? $this->title;
	}

	public function getEffectiveOgTitleAttribute(): string
	{
		return $this->og_title ?? $this->meta_title ?? $this->title;
	}

	public function getEffectiveFaviconAttribute(): ?string
	{
		return match ($this->favicon_type) {
			self::FAVICON_UPLOAD => $this->favicon,
			self::FAVICON_EMOJI  => $this->favicon_emoji,
			default              => null,
		};
	}
}
