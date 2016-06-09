<?php namespace App\Providers;

use App\Services\MyValidator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->app->make('validator')->resolver(function ($translator, $data, $rules, $messages, $customAttributes) {
			return new MyValidator($translator, $data, $rules, $messages, $customAttributes);
		});

		/*

        Validator::extend('foo', function($attribute, $value, $parameters, $validator) {
            return $value == 'foo';
        });

		 */
	}

	/**
	 * Register any application services.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

}
