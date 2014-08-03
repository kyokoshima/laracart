<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ProductsTableSeeder extends Seeder {

	public function run()
	{
		// $faker = Faker::create();

		// foreach(range(1, 10) as $index)
		// {
		// 	Product::create([

		// 	]);
		// }

		$datas = [
			['name' => '商品１', 'price' => '100'],
			['name' => '商品２', 'price' => '200'],
			['name' => '商品３', 'price' => '300']
		];

		foreach ($datas as $data) {
			Product::create($data);
		}
	}

}