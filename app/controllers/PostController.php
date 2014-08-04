<?php

class PostController extends BaseController
{
    public function index()
    {

        $posts = Post::orderBy('created_at', 'DESC')->get();

        // foreach ($posts as $post) {
        //     $post['body'] = str_limit($post['body'], $limit = 100, $end = '...');
        // }

        return $posts->toJson();
    }

    public function show($id)
    {
        return Post::find($id)->toJson();
    }

    public function store()
    {
        $post = new Post();

        $input = Input::all();

        // validation
        $validatorRules = [
            'title'   => 'required',
            'body'    => 'required',
            'summary' => 'required'
        ];
        $validator = Validator::make(Input::all(), $validatorRules);

        if ($validator->fails()) {
            throw new PostValidException('The post submitted is invalid. How have you managed this?');
        }

        // saving to database
        $post->title   = $input['title'];
        $post->body    = $input['body'];
        $post->summary = $input['summary'];

        $post->save();
    }
}