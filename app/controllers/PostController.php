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

    public function publish($id)
    {
        $post = Post::find($id);
        $post->published = true;
        $post->save();
    }

    public function show($id)
    {
        // return JSON containing single post
        return Post::find($id)->toJson();
    }

    public function store()
    {
        // create a new post
        $post = new Post();

        // validation
        $validatorRules = [
            'title' => 'required',
            'body' => 'required',
            'summary' => 'required'
        ];

        $validator = Validator::make(Input::all(), $validatorRules);

        if ($validator->fails()) {
            throw new Exception('The post submitted is invalid. How have you managed this?');
        }

        // saving to database
        $post->title = $input['title'];
        $post->body = $input['body'];
        $post->summary = $input['summary'];
        $post->save();
    }

}