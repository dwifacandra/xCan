<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Link;
use App\Models\LinkItem;
use App\Models\LinkVisit;

class LinkSeeder extends Seeder
{
	public function run(): void
	{
		// -----------------------------------------------------------------
		// Microsite 1 — Linktree
		// -----------------------------------------------------------------

		$linktree = Link::create([
			'user_id'              => 1,
			'title'                => 'John Doe',
			'slug'                 => 'johndoe',
			'bio'                  => 'Designer & Developer based in Jakarta 🇮🇩',
			'avatar'               => null,
			'type'                 => Link::TYPE_LINKTREE,
			'status'               => Link::STATUS_PUBLISHED,
			'theme'                => 'default',
			'meta_title'           => 'John Doe — Links',
			'meta_description'     => 'Kumpulan link John Doe: portfolio, sosial media, dan kontak.',
			'meta_keywords'        => 'john doe, designer, developer, jakarta',
			'meta_robots'          => 'index,follow',
			'og_title'             => 'John Doe — Links',
			'og_description'       => 'Kunjungi semua link John Doe di sini.',
			'twitter_card'         => 'summary_large_image',
			'twitter_site'         => '@johndoe',
			'favicon_type'         => Link::FAVICON_EMOJI,
			'favicon_emoji'        => '🔗',
			'is_indexed'           => true,
			'show_branding'        => true,
			'published_at'         => now(),
		]);

		$linktreeItems = [
			['label' => 'Portfolio',       'url' => 'https://johndoe.dev',             'icon' => 'ti-briefcase',   'type' => LinkItem::TYPE_URL,     'order' => 1],
			['label' => 'GitHub',          'url' => 'https://github.com/johndoe',      'icon' => 'ti-brand-github', 'type' => LinkItem::TYPE_URL,     'order' => 2],
			['label' => 'Instagram',       'url' => 'https://instagram.com/johndoe',   'icon' => 'ti-brand-instagram', 'type' => LinkItem::TYPE_URL, 'order' => 3],
			['label' => 'Sosial Media',    'url' => null,                              'icon' => null,             'type' => LinkItem::TYPE_HEADER,  'order' => 4],
			['label' => 'Twitter/X',       'url' => 'https://x.com/johndoe',           'icon' => 'ti-brand-x',    'type' => LinkItem::TYPE_URL,     'order' => 5],
			['label' => 'LinkedIn',        'url' => 'https://linkedin.com/in/johndoe', 'icon' => 'ti-brand-linkedin', 'type' => LinkItem::TYPE_URL, 'order' => 6],
			['label' => null,              'url' => null,                              'icon' => null,             'type' => LinkItem::TYPE_DIVIDER, 'order' => 7],
			['label' => 'Email Saya',      'url' => 'hello@johndoe.dev',               'icon' => 'ti-mail',        'type' => LinkItem::TYPE_EMAIL,   'order' => 8],
			['label' => 'WhatsApp',        'url' => '6281234567890',                   'icon' => 'ti-brand-whatsapp', 'type' => LinkItem::TYPE_PHONE, 'order' => 9],
		];

		foreach ($linktreeItems as $item) {
			$linktree->items()->create([...$item, 'is_active' => true]);
		}

		// -----------------------------------------------------------------
		// Microsite 2 — vCard
		// -----------------------------------------------------------------

		$vcard = Link::create([
			'user_id'              => 1,
			'title'                => 'John Doe — Kartu Nama Digital',
			'slug'                 => 'johndoe-card',
			'bio'                  => 'Senior UI/UX Designer at Acme Corp',
			'avatar'               => null,
			'type'                 => Link::TYPE_VCARD,
			'status'               => Link::STATUS_PUBLISHED,
			'theme'                => 'minimal',
			'meta_title'           => 'John Doe — Kartu Nama Digital',
			'meta_description'     => 'Kartu nama digital John Doe, Senior UI/UX Designer.',
			'meta_robots'          => 'noindex,nofollow',
			'favicon_type'         => Link::FAVICON_EMOJI,
			'favicon_emoji'        => '👤',
			'is_indexed'           => false,
			'show_branding'        => false,
			'published_at'         => now(),
		]);

		$vcard->items()->createMany([
			['label' => 'Email',     'url' => 'hello@johndoe.dev',    'icon' => 'ti-mail',           'type' => LinkItem::TYPE_EMAIL, 'is_active' => true, 'order' => 1],
			['label' => 'Telepon',   'url' => '6281234567890',        'icon' => 'ti-phone',          'type' => LinkItem::TYPE_PHONE, 'is_active' => true, 'order' => 2],
			['label' => 'Website',   'url' => 'https://johndoe.dev',  'icon' => 'ti-world',          'type' => LinkItem::TYPE_URL,   'is_active' => true, 'order' => 3],
			['label' => 'LinkedIn',  'url' => 'https://linkedin.com/in/johndoe', 'icon' => 'ti-brand-linkedin', 'type' => LinkItem::TYPE_URL, 'is_active' => true, 'order' => 4],
		]);

		// -----------------------------------------------------------------
		// Microsite 3 — Draft (Landing Page)
		// -----------------------------------------------------------------

		$landing = Link::create([
			'user_id'              => 1,
			'title'                => 'Produk Baru Kami',
			'slug'                 => 'produk-baru',
			'bio'                  => 'Coming soon — stay tuned!',
			'type'                 => Link::TYPE_LANDING,
			'status'               => Link::STATUS_DRAFT,
			'theme'                => 'dark',
			'meta_title'           => 'Produk Baru — Coming Soon',
			'meta_description'     => 'Sesuatu yang besar sedang kami siapkan.',
			'meta_robots'          => 'noindex,nofollow',
			'favicon_type'         => Link::FAVICON_EMOJI,
			'favicon_emoji'        => '🚀',
			'is_indexed'           => false,
			'show_branding'        => true,
		]);

		$landing->items()->createMany([
			['label' => 'Daftar Waitlist', 'url' => 'https://forms.gle/example', 'icon' => 'ti-forms',    'type' => LinkItem::TYPE_URL, 'is_active' => true, 'order' => 1],
			['label' => 'Hubungi Kami',    'url' => 'hello@johndoe.dev',         'icon' => 'ti-mail',     'type' => LinkItem::TYPE_EMAIL, 'is_active' => true, 'order' => 2],
		]);

		// -----------------------------------------------------------------
		// Sample Visits untuk microsite 1 (linktree)
		// -----------------------------------------------------------------

		$clickableItems = $linktree->items()->active()->get();

		$devices   = ['mobile', 'desktop', 'tablet'];
		$countries = ['ID', 'SG', 'MY', 'US', 'AU'];
		$referers  = ['https://google.com', 'https://instagram.com', null, 'https://twitter.com'];

		// Page views (tanpa link_item_id)
		foreach (range(1, 30) as $i) {
			LinkVisit::create([
				'link_id'      => $linktree->id,
				'link_item_id' => null,
				'ip'           => fake()->ipv4(),
				'user_agent'   => fake()->userAgent(),
				'referer'      => fake()->randomElement($referers),
				'country'      => fake()->randomElement($countries),
				'device'       => fake()->randomElement($devices),
				'created_at'   => fake()->dateTimeBetween('-30 days', 'now'),
			]);
		}

		// Clicks per item
		foreach ($clickableItems as $item) {
			foreach (range(1, rand(3, 10)) as $i) {
				LinkVisit::create([
					'link_id'      => $linktree->id,
					'link_item_id' => $item->id,
					'ip'           => fake()->ipv4(),
					'user_agent'   => fake()->userAgent(),
					'referer'      => fake()->randomElement($referers),
					'country'      => fake()->randomElement($countries),
					'device'       => fake()->randomElement($devices),
					'created_at'   => fake()->dateTimeBetween('-30 days', 'now'),
				]);
			}
		}
	}
}
