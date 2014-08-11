<?php

class PostController extends BaseController {

    public function index()
    {
        // return JSON containing all posts
    }

    public function unpublished()
    {
        // return JSON containing all unpublished posts
        return "Unpublished posts.";
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