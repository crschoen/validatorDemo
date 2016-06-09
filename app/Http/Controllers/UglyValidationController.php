<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

class UglyValidationController
{

    /**
     * A demonstration of form validation without using any built-in Laravel functionality.
     * It's ugly.
     *
     * @param Request $request The query parameters sent to this action.
     */
    public function store(Request $request)
    {
        if (!($name = $request->get('name'))) {
            throw new BadRequestHttpException('Name is required.');
        }

        if (filter_var(($email = $request->get('email')), FILTER_VALIDATE_EMAIL) === false) {
            throw new BadRequestHttpException('Email does not match expected format.');
        }

        if (!($password = $request->get('password'))) {
            throw new BadRequestHttpException('Password is required.');
        }

        if (!($confirm = $request->get('password_confirmation'))) {
            throw new BadRequestHttpException('Password confirmation is required.');
        }

        if ($password !== $confirm) {
            throw new BadRequestHttpException('Passwords must match.');
        }

        if (!preg_match('/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{4,8}$/', $password)) {
            throw new BadRequestHttpException(
                'Password must be at least 4 characters, no more than 8 characters, and must include at least one upper'
                    . 'case letter, one lower case letter, and one numeric digit.'
            );
        }

        // Do stuff
    }

}
