<?php namespace App\Http\Requests;

use App\Services\MyValidator;

class ProductCreateRequest extends Request
{
    public function rules()
    {
        return [
			'products' => 'array|products',
		];
    }

    public function messages()
    {
        return ['products' => 'product must have properties ' . implode(', ', MyValidator::$required)];
    }
}