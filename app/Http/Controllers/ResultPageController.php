<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class ResultPageController extends Controller {

    public function show(){
       return view('result');
    }
	
}