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

		$body = "### Test Title \n A paragraph";

		$posts = [
			['title' => 'First Post', 'body' => $body],
			['title' => 'Second Post', 'body' => $body],
			['title' => 'Third Post', 'body' => $body],
			['title' => 'Fourth Post', 'body' => $body],
			['title' => 'Fifth Post', 'body' => $body]
		];

		foreach ($posts as $post) {
			Post::create($post);
		}

	}

}