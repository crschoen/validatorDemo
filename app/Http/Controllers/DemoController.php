<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Validator;

class DemoController extends Controller {

	public function store(Request $request) {
        Validator::make();
    }

}
