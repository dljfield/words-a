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
		$summary = "Summary of post.";

		$posts = [
			['title' => 'First Post', 'body' => $body, 'summary' => $summary],
			['title' => 'Second Post', 'body' => $body, 'summary' => $summary],
			['title' => 'Third Post', 'body' => $body, 'summary' => $summary],
			['title' => 'Fourth Post', 'body' => $body, 'summary' => $summary],
			['title' => 'Fifth Post', 'body' => $body, 'summary' => $summary]
		];

		foreach ($posts as $post) {
			Post::create($post);
		}

	}

}