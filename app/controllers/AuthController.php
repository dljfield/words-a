<?php

class AuthController extends BaseController {

    public function login()
    {
        // handle user logins

        $input = Input::all();

        // replace this with getting an actual user from the database n stuff
        if ($input['email'] != 'a@a.a' || $input['password'] != 'aaa') {
            return Response::make('No user could be found with this email and password', 401);
        }

        // replace this with making a proper token
        $profile = [
            'name' => 'Test User'
        ];

        $claims = [
            'iss' => 'thedebonair',
            'iat' => date("U")
        ];

        // find an appropriate place to store the key
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