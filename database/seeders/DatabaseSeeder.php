<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
	/**
	 * Seed the application's database.
	 *
	 * @return void
	 */
	public function run()
	{
		Role::factory()->create([
			'name' => 'Admin',
		]);
		Role::factory()->create([
			'name' => 'Editor',
		]);
		Role::factory()->create([
			'name' => 'Viewer',
		]);

		User::factory()->create([
			'first_name' => 'Admin',
			'last_name' => 'Admin',
			'email' => 'admin@admin.com',
			'role_id' => 1,
		]);

		User::factory()->create([
			'first_name' => 'Editor',
			'last_name' => 'Editor',
			'email' => 'editor@editor.com',
			'role_id' => 2,
		]);

		User::factory()->create([
			'first_name' => 'Viewer',
			'last_name' => 'Viewer',
			'email' => 'viewer@viewer.com',
			'role_id' => 3,
		]);

		User::factory(20)->create();

		// \App\Models\User::factory()->create([
		//     'name' => 'Test User',
		//     'email' => 'test@example.com',
		// ]);
	}
}
