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
		$this->call('PostsTableSeeder');
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

class PostsTableSeeder extends Seeder {
	public function run()
	{
		DB::table('posts')->truncate();

		$body = "##Markdown \n A paragraph. Has *italics* and even **bold**. Absolutely shocking!";

		for ($i=1; $i <= 5; $i++) {
			Post::create([
				'title' => 'Title ' + $i,
				'body' => $body,
				'summary' => 'Summary of post ' + $i
			]);
		}


	}
}