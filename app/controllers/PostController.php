<?php

class PostController extends BaseController {

    public function index()
    {
        // return JSON containing all posts
        return Post::where('published', '=', true)
        ->orderBy('published_at', 'DESC')
        ->get()
        ->toJson();
    }

    public function unpublished()
    {
        // return JSON containing all unpublished posts
        return Post::where('published', '=', false)
        ->orderBy('created_at', 'DESC')
        ->get()
        ->toJson();
    }

    public function show($id)
    {
        // return JSON containing single post
        return Post::find($id)->toJson();
    }

    public function store()
    {
        // create a new post
    }

}