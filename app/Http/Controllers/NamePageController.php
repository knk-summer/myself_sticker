<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Validator;

class NamePageController extends Controller {

    public function show(){
       return view('name');
    }
	
}