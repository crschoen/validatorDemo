<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Validator;

class ValidatorMakeController
{

    /**
     * A demonstration of form validation using Laravel's built-in validator called manually.
     *
     * @param Request $request The query parameters sent to this action.
     */
    public function store(Request $request)
    {
        $rules = [
            'name'  => 'required',
            'email' => 'required|email',
            'password' => ['required', 'regex:/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{4,8}$/', 'confirmed'],
        ];

        $messages = [
            'password.regex' => 'Password must be at least 4 characters, no more than 8 characters, and must '
                    . 'include at least one upper case letter, one lower case letter, and one numeric digit.'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            throw new BadRequestHttpException($validator->messages());
        }

        // Do stuff
    }

}
