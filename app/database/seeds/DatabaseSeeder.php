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

		$this->call('PostsTableSeeder');
	}

}

class PostsTableSeeder extends Seeder {

	public function run()
	{
		DB::table('posts')->truncate();

		$posts = [
			['title' => 'First Post', 'body' => 'First post body.'],
			['title' => 'Second Post', 'body' => 'Second post body.'],
			['title' => 'Third Post', 'body' => 'Third post body.'],
			['title' => 'Fourth Post', 'body' => 'Fourth post body.'],
			['title' => 'Fifth Post', 'body' => 'Fifth post body.']
		];

		foreach ($posts as $post) {
			Posts::create($post);
		}

	}

}