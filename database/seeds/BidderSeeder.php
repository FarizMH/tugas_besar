<?php

use Illuminate\Database\Seeder;

class BidderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
  //
  $faker = Faker\Factory::create(); //import library faker
  $limit = 20; //batasan berapa banyak data
  
  for ($i = 0; $i < $limit; $i++) {
			DB::table('users')->insert([ //mengisi data di database
				'username' => $faker->name,
				'email_bidder' => $faker->unique()->email, //email unique sehingga tidak ada yang sama
				'password_bidder' => $faker->password,
			]);
		}
	}
}
