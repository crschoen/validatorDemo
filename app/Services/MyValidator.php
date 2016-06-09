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
     * @param  array  $value     The products to be validated.
     * @return bool   True if the products are valid, false if not.
     */
    public function validateProducts($attribute, array $value)
    {
        foreach ($value as $product) {
            foreach (self::$required as $property) {
                if (!array_get($product, $property)) {
                    return false;
                }
            }
        }

        return true;
    }
}
