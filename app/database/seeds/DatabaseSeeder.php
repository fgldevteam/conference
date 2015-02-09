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
	//	$this->call('UserTableSeeder');
	//	$this->command->info('User table seeded!');

		$this->call('ConfSessionSeeder');
		$this->command->info('conf_sessions table seeded!');
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


class ConfSessionSeeder extends Seeder {

	public function run()
	{
		DB::table('conf_sessions')->delete();

		ConfSession::create(array('type' => '1','duration' => '2','title' => 'Classroom session 1','location' => 'Some Room','facilitator' => 'Some Person','description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.','start' => '2015-01-27 11:27:16','end' => '2015-01-27 01:27:19','seats' => '30'));
		ConfSession::create(array('type' => '1','duration' => '2','title' => 'Classroom session 2','location' => 'Some Room','facilitator' => 'Some Person','description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.','start' => '2015-01-27 11:27:16','end' => '2015-01-27 01:27:19','seats' => '30'));
		ConfSession::create(array('type' => '1','duration' => '2','title' => 'Classroom session 3','location' => 'Some Room','facilitator' => 'Some Person','description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.','start' => '2015-01-27 11:27:16','end' => '2015-01-27 01:27:19','seats' => '30'));
		ConfSession::create(array('type' => '1','duration' => '2','title' => 'Classroom session 4','location' => 'Some Room','facilitator' => 'Some Person','description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.','start' => '2015-01-27 11:27:16','end' => '2015-01-27 01:27:19','seats' => '30'));
		ConfSession::create(array('type' => '1','duration' => '2','title' => 'Classroom session 5','location' => 'Some Room','facilitator' => 'Some Person','description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.','start' => '2015-01-27 11:27:16','end' => '2015-01-27 01:27:19','seats' => '30'));
		ConfSession::create(array('type' => '1','duration' => '2','title' => 'Classroom session 6','location' => 'Some Room','facilitator' => 'Some Person','description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.','start' => '2015-01-27 11:27:16','end' => '2015-01-27 01:27:19','seats' => '30'));
		ConfSession::create(array('type' => '1','duration' => '2','title' => 'Classroom session 7','location' => 'Some Room','facilitator' => 'Some Person','description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.','start' => '2015-01-27 11:27:16','end' => '2015-01-27 01:27:19','seats' => '30'));
		ConfSession::create(array('type' => '1','duration' => '2','title' => 'Classroom session 8','location' => 'Some Room','facilitator' => 'Some Person','description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.','start' => '2015-01-27 11:27:16','end' => '2015-01-27 01:27:19','seats' => '30'));
		ConfSession::create(array('type' => '1','duration' => '2','title' => 'Classroom session 9','location' => 'Some Room','facilitator' => 'Some Person','description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.','start' => '2015-01-27 11:27:16','end' => '2015-01-27 01:27:19','seats' => '30'));
		ConfSession::create(array('type' => '1','duration' => '2','title' => 'Classroom session 10','location' => 'Some Room','facilitator' => 'Some Person','description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.','start' => '2015-01-27 11:27:16','end' => '2015-01-27 01:27:19','seats' => '30'));
		ConfSession::create(array('type' => '1','duration' => '2','title' => 'Classroom session 11','location' => 'Some Room','facilitator' => 'Some Person','description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.','start' => '2015-01-27 11:27:16','end' => '2015-01-27 01:27:19','seats' => '30'));

		ConfSession::create(array('type' => '2','duration' => '2','title' => 'Activity 1','location' => 'Somewhere','facilitator' => 'Some Person','description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.','start' => '2015-01-27 11:27:16','end' => '2015-01-27 01:27:19','seats' => '30'));
		ConfSession::create(array('type' => '2','duration' => '2','title' => 'Activity 2','location' => 'Somewhere','facilitator' => 'Some Person','description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.','start' => '2015-01-27 11:27:16','end' => '2015-01-27 01:27:19','seats' => '30'));
		ConfSession::create(array('type' => '2','duration' => '2','title' => 'Activity 3','location' => 'Somewhere','facilitator' => 'Some Person','description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.','start' => '2015-01-27 11:27:16','end' => '2015-01-27 01:27:19','seats' => '30'));
		ConfSession::create(array('type' => '2','duration' => '2','title' => 'Activity 4','location' => 'Somewhere','facilitator' => 'Some Person','description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.','start' => '2015-01-27 11:27:16','end' => '2015-01-27 01:27:19','seats' => '30'));
		ConfSession::create(array('type' => '2','duration' => '2','title' => 'Activity 5','location' => 'Somewhere','facilitator' => 'Some Person','description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.','start' => '2015-01-27 11:27:16','end' => '2015-01-27 01:27:19','seats' => '30'));
		ConfSession::create(array('type' => '2','duration' => '2','title' => 'Activity 6','location' => 'Somewhere','facilitator' => 'Some Person','description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.','start' => '2015-01-27 11:27:16','end' => '2015-01-27 01:27:19','seats' => '30'));
		ConfSession::create(array('type' => '2','duration' => '2','title' => 'Activity 7','location' => 'Somewhere','facilitator' => 'Some Person','description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.','start' => '2015-01-27 11:27:16','end' => '2015-01-27 01:27:19','seats' => '30'));
		ConfSession::create(array('type' => '2','duration' => '2','title' => 'Activity 8','location' => 'Somewhere','facilitator' => 'Some Person','description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.','start' => '2015-01-27 11:27:16','end' => '2015-01-27 01:27:19','seats' => '30'));
		ConfSession::create(array('type' => '2','duration' => '2','title' => 'Activity 9','location' => 'Somewhere','facilitator' => 'Some Person','description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.','start' => '2015-01-27 11:27:16','end' => '2015-01-27 01:27:19','seats' => '30'));
		ConfSession::create(array('type' => '2','duration' => '2','title' => 'Activity 10','location' => 'Somewhere','facilitator' => 'Some Person','description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.','start' => '2015-01-27 11:27:16','end' => '2015-01-27 01:27:19','seats' => '30'));
		ConfSession::create(array('type' => '2','duration' => '2','title' => 'Activity 11','location' => 'Somewhere','facilitator' => 'Some Person','description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.','start' => '2015-01-27 11:27:16','end' => '2015-01-27 01:27:19','seats' => '30'));
	}
}
