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
		Schema::create('link_items', function (Blueprint $table) {
			$table->id();
			$table->foreignId('link_id')->constrained()->onDelete('cascade');
			$table->string('label')->nullable();
			$table->string('url')->nullable();
			$table->string('icon')->nullable();
			$table->enum('type', ['url', 'email', 'phone', 'header', 'divider'])->default('url');
			$table->boolean('is_active')->default(true);
			$table->integer('order')->default(0);
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void
	{
		Schema::dropIfExists('link_items');
	}
};
