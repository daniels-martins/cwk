<?php

namespace Database\Seeders;

use App\Models\Fee;
use Illuminate\Database\Seeder;

class FeesTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$regFee = Fee::where([
			['title', 'registration fee'],
			['cost', '1050'],
		])->get();

		if ($regFee) {
			return true;
		}
		Fee::create([
			'cost' => 1050,
			'title' => 'registration fee',
		]);
	}
}
