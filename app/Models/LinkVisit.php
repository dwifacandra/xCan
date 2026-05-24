<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LinkVisit extends Model
{
	use HasFactory;

	const UPDATED_AT = null; // hanya butuh created_at

	protected $fillable = [
		'link_id',
		'link_item_id',
		'ip',
		'user_agent',
		'referer',
		'country',
		'device',
	];

	protected $casts = [
		'created_at' => 'datetime',
	];

	// -------------------------------------------------------------------------
	// Relationships
	// -------------------------------------------------------------------------

	public function link(): BelongsTo
	{
		return $this->belongsTo(Link::class);
	}

	public function item(): BelongsTo
	{
		return $this->belongsTo(LinkItem::class, 'link_item_id');
	}

	// -------------------------------------------------------------------------
	// Scopes
	// -------------------------------------------------------------------------

	public function scopePageViews($query)
	{
		return $query->whereNull('link_item_id');
	}

	public function scopeClicks($query)
	{
		return $query->whereNotNull('link_item_id');
	}

	public function scopeToday($query)
	{
		return $query->whereDate('created_at', today());
	}

	public function scopeThisWeek($query)
	{
		return $query->whereBetween('created_at', [now()->startOfWeek(), now()->endOfWeek()]);
	}

	public function scopeThisMonth($query)
	{
		return $query->whereMonth('created_at', now()->month)
			->whereYear('created_at', now()->year);
	}

	public function scopeByCountry($query, string $country)
	{
		return $query->where('country', $country);
	}

	public function scopeByDevice($query, string $device)
	{
		return $query->where('device', $device);
	}

	// -------------------------------------------------------------------------
	// Accessors
	// -------------------------------------------------------------------------

	public function getIsPageViewAttribute(): bool
	{
		return $this->link_item_id === null;
	}

	public function getIsClickAttribute(): bool
	{
		return $this->link_item_id !== null;
	}
}
