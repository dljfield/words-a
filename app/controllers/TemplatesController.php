<?php

class TemplatesController extends BaseController {

    public function postsIndex()
    {
        return View::make('posts/index');
    }

    public function postsCreate()
    {
        return View::make('posts/create');
    }

    public function postsShow()
    {
        return View::make('/posts/single');
    }

    public function loginShow()
    {
        return View::make('auth/login');
    }


}