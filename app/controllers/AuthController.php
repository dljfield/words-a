<?php

class AuthController extends BaseController {

    public function login()
    {
        $input = Input::all();

        // replace this with getting an actual user from the database n stuff
        if ($input['email'] != 'a@a.a' || $input['password'] != 'aaa') {
            return Response::make('No user could be found with this email and password', 401);
        }

        $profile = [
            'name' => 'Test User'
        ];

        $claims = [
            'iss' => 'thedebonair',
            // issued now
            'iat' => date("U"),
            // expire 7 days from now
            'exp' => mktime(0, 0, 0, date("m"), date("d")+7, date("Y"))
        ];

        // TODO: find an appropriate place to store the key
        $token = JWT::encode($claims, 'test_key');

        $response = [
            'token' => $token,
            'user' => $profile
        ];

        return Response::json($response);

    }

    public function logout()
    {
        // handle user logout
    }

}