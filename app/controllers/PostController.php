<?php

class PostController extends BaseController
{
    public function index()
    {
        return Post::all()->toJson();
    }

    public function show($id)
    {
        return Post::find($id)->toJson();
    }
}