<?php namespace App\Http\Controllers;

use App\Http\Requests\RegistrationRequest;

class ValidatedRequestController
{

    /**
     * A demonstration of Laravel's form request validation feature, which delegates validation to a request object.
     *
     * @param RegistrationRequest $request The pre-validated query parameters sent to this action.
     */
    public function store(RegistrationRequest $request)
    {
        // Do stuff
    }

}
