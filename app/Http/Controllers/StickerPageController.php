<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class StickerPageController extends Controller {

    public function show(){
        $user_name = $_POST['name'];
       return view('sticker',['user_name' => $user_name]);
    }
	
}