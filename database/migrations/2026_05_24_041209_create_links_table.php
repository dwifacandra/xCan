<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
	/**
	 * Run the migrations.
	 */
	public function up(): void
	{
		Schema::create('links', function (Blueprint $table) {
			$table->id();
			$table->foreignId('user_id')->constrained()->onDelete('cascade');

			// Identity
			$table->string('title');
			$table->string('slug')->unique();
			$table->text('bio')->nullable();
			$table->string('avatar')->nullable();

			// Type
			$table->enum('type', [
				'linktree',     // kumpulan link
				'vcard',        // kartu nama digital
				'portfolio',    // portofolio
				'landing',      // landing page
				'store',        // toko/katalog
			])->default('linktree');

			// Status & Theme
			$table->enum('status', ['draft', 'published', 'archived'])->default('draft');
			$table->string('theme')->default('default');
			$table->string('custom_css')->nullable();

			// SEO
			$table->string('meta_title')->nullable();
			$table->text('meta_description')->nullable();
			$table->string('meta_image')->nullable();           // og:image
			$table->string('meta_keywords')->nullable();
			$table->enum('meta_robots', [
				'index,follow',
				'noindex,follow',
				'index,nofollow',
				'noindex,nofollow',
			])->default('index,follow');
			$table->string('canonical_url')->nullable();
			$table->json('meta_structured_data')->nullable();  // JSON-LD schema.org

			// Favicon
			$table->string('favicon')->nullable();             // path file upload
			$table->string('favicon_emoji')->nullable();       // alternatif pakai emoji, misal: 🔗
			$table->enum('favicon_type', [
				'default',
				'upload',
				'emoji',
			])->default('default');

			// Social Preview (Open Graph & Twitter Card)
			$table->string('og_title')->nullable();
			$table->text('og_description')->nullable();
			$table->string('og_image')->nullable();
			$table->string('twitter_card')->default('summary_large_image');
			$table->string('twitter_site')->nullable();        // @handle twitter

			// Analytics & Tracking
			$table->string('ga_id')->nullable();               // Google Analytics ID
			$table->string('pixel_id')->nullable();            // Meta Pixel ID
			$table->string('gtm_id')->nullable();              // Google Tag Manager ID

			// Settings
			$table->boolean('is_indexed')->default(true);
			$table->boolean('show_branding')->default(true);
			$table->string('password')->nullable();            // proteksi password
			$table->timestamp('published_at')->nullable();
			$table->timestamp('expires_at')->nullable();

			$table->timestamps();
			$table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void
	{
		Schema::dropIfExists('links');
	}
};
