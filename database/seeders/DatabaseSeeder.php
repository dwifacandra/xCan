<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
	use WithoutModelEvents;

	/**
	 * Seed the application's database.
	 */
	public function run(): void
	{
		if (app()->isLocal()) {
			$user = User::create([
				'name' => 'Aditya Candra',
				'username' => 'aditya',
				'email' => 'aditya@xcan.test',
				'password' => Hash::make('password123')
			]);
			// $this->call([
			// 	\Database\Seeders\DemoSystemSeeder::class,
			// ]);
		}
	}
}
