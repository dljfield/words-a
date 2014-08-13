<?php

class PostController extends BaseController {

    public function index()
    {
        // return JSON containing all posts
        $posts = Post::where('published', '=', 'true');

        return Response::json($posts, 200);
    }

    public function unpublished()
    {
        // return JSON containing all unpublished posts
        $posts = Post::where('published', '=', 'false');

        return Response::json($posts, 200);
    }

    public function show($id)
    {
        // return JSON containing single post
    }

    public function store()
    {
        // create a new post
    }

}