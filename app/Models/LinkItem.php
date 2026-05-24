<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class LinkItem extends Model
{
	use HasFactory;

	protected $fillable = [
		'link_id',
		'label',
		'url',
		'icon',
		'type',
		'is_active',
		'order',
	];

	protected $casts = [
		'is_active' => 'boolean',
		'order'     => 'integer',
	];

	// -------------------------------------------------------------------------
	// Constants
	// -------------------------------------------------------------------------

	const TYPE_URL     = 'url';
	const TYPE_EMAIL   = 'email';
	const TYPE_PHONE   = 'phone';
	const TYPE_HEADER  = 'header';
	const TYPE_DIVIDER = 'divider';

	// -------------------------------------------------------------------------
	// Relationships
	// -------------------------------------------------------------------------

	public function link(): BelongsTo
	{
		return $this->belongsTo(Link::class);
	}

	public function visits(): HasMany
	{
		return $this->hasMany(LinkVisit::class);
	}

	// -------------------------------------------------------------------------
	// Scopes
	// -------------------------------------------------------------------------

	public function scopeActive($query)
	{
		return $query->where('is_active', true);
	}

	public function scopeOfType($query, string $type)
	{
		return $query->where('type', $type);
	}

	public function scopeOrdered($query)
	{
		return $query->orderBy('order');
	}

	// -------------------------------------------------------------------------
	// Accessors
	// -------------------------------------------------------------------------

	public function getIsClickableAttribute(): bool
	{
		return in_array($this->type, [
			self::TYPE_URL,
			self::TYPE_EMAIL,
			self::TYPE_PHONE,
		]);
	}

	public function getFormattedUrlAttribute(): ?string
	{
		return match ($this->type) {
			self::TYPE_EMAIL => "mailto:{$this->url}",
			self::TYPE_PHONE => "tel:{$this->url}",
			default          => $this->url,
		};
	}

	public function getClickCountAttribute(): int
	{
		return $this->visits()->count();
	}
}
