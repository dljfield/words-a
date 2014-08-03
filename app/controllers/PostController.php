<?php

class PostController extends BaseController
{
    public function index()
    {

        $posts = Post::all();

        foreach ($posts as $post) {
            $post['body'] = str_limit($post['body'], $limit = 100, $end = '...');
        }

        return $posts->toJson();
    }

    public function show($id)
    {
        return Post::find($id)->toJson();
    }
}