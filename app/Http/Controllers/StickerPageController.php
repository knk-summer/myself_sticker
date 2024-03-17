<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class StickerPageController extends Controller {

    public function show(){
       return view('sticker');
    }
	
}