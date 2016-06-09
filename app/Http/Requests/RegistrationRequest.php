<?php namespace App\Http\Requests;

class RegistrationRequest extends Request
{

    /**
     * Set validation rules that apply to the request.
     *
     * @return array The validation rules.
     */
    public function rules()
    {
        return [
            'name'  => 'required',
            'email' => 'required|email',
            'password' => ['required', 'regex:/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{4,8}$/', 'confirmed'],
        ];
    }

    /**
     * Set custom messages for validator errors.
     *
     * @return array The validation error message(s).
     */
    public function messages()
    {
        return [
            'password.regex' => 'Password must be at least 4 characters, no more than 8 characters, and must include at'
                . ' least one upper case letter, one lower case letter, and one numeric digit.'
        ];
    }

}