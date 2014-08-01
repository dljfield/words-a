<?php

class InitialController extends BaseController {

    public function index()
    {
        $posts = DB::table('posts')->get();

        return View::make('initial');
    }

}