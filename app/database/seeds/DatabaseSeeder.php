<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('ProductTableSeeder');
	}

}

class ProductTableSeeder extends Seeder {

    public function run()
    {
        DB::table('orders')->truncate();

        $faker = Faker\Factory::create();

        for ($i=1; $i <= 1000; $i++){
        	$date = $faker->dateTimeBetween($startDate = '-90 days', $endDate = 'now')->format('Y-m-d H:i:s');
        	$orders[] = [
        		'id'				 => $i,
        		'product'		 => $faker->bs,
        		'amount'		 => $faker->randomFloat(2, $min = 5, $max = 100),  
        		'created_at' => $date, 
        		'updated_at' => $date,
        	];
        }


        DB::table('orders')->insert($orders);
    }

}