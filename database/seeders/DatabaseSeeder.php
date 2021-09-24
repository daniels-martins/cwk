<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
	/**
	 * Seed the application's database.
	 *
	 * @return void
	 */
	public function run()
	{
		// \App\Models\User::factory(10)->create();

		// using additional seeders
		$this->call(
			[
				// the FeesTableSeeder can always be run, it has a check in its definition
				// it knows when to create a seeder or not by itself...AI
				FeesTableSeeder::class,
			]
		);

	}
}
