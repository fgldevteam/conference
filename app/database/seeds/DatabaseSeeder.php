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
		$this->call('UserTableSeeder');
		$this->command->info('User table seeded!');
	}
}


class UserTableSeeder extends Seeder {

	public function run()
	{
		DB::table('users')->delete();

		User::create(array('first' => 'firstname', 'last' => 'lastname', 'email' => 'foo@bar.com', 'password' => Hash::make('1234')));
		User::create(array('first' => 'firstname', 'last' => 'lastname', 'email' => 'test@test.com', 'password' => Hash::make('1234')));
		User::create(array('first' => 'firstname', 'last' => 'lastname', 'email' => 'hello@hello.com', 'password' => Hash::make('1234')));
		User::create(array('first' => 'firstname', 'last' => 'lastname', 'email' => 'brent@brent.com', 'password' => Hash::make('1234')));
		User::create(array('first' => 'firstname', 'last' => 'lastname', 'email' => 'one@more.com', 'password' => Hash::make('1234')));
	}
}
