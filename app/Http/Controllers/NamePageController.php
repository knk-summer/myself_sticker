<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class NamePageController extends Controller {

    public function show(){
       return view('name');
    }
	
}