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
            'name' => 'testatron',
            'type' => 'explosion'
        ];

        // find an appropriate place to store the key
        $token = JWT::encode($profile, 'test_key');

        $response = [
            'token' => $token,
            'other' => 'swag'
        ];

        return Response::json($response);

    }

    public function logout()
    {
        // handle user logout
    }

}