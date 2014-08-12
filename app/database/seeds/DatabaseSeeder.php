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
	}

}

class UserTableSeeder extends Seeder {
	public function run()
	{
		DB::table('users')->truncate();

		User::create([
			'email' => 'a@a.a',
			'password' => Hash::make('aaa'),
			'name' => 'Larry Test'
		]);
	}
}