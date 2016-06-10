<?php namespace App\Services;

use Illuminate\Validation\Validator;

class MyValidator extends Validator
{
    /** @var array Required properties for a product */
    public static $required = ['name', 'price', 'sku'];

    /**
     * Checks that all provided products contain the required properties.
     *
     * @param  string $attribute The name being used the refer to the collection of products. i.e. 'products'
     * @param  mixed  $value     The products to be validated.
     * @return bool   True if the products are valid, false if not.
     */
    public function validateProducts($attribute, $value)
    {
		$passed = true;

        foreach ($value as $key => $product) {
            foreach (self::$required as $property) {
                if (!array_get($product, $property)) {
					$number = $key + 1;
					$this->errors()->add($attribute, "Product $number is missing $property");
                    $passed = false;
                }
            }
        }

        return $passed;
    }
}
