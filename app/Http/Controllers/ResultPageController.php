<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManagerStatic as Image;
// use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ResultPageController extends Controller {

    public function img()
    {
        $user_name = $_POST['name'];
        $style_upperleft = $_POST['style_upperleft'];
        $sticker_upperleft = $_POST['sticker_upperleft'];
        $style_upperright = $_POST['style_upperright'];
        $sticker_upperright = $_POST['sticker_upperright'];
        $style_lowerleft = $_POST['style_lowerleft'];
        $sticker_lowerleft = $_POST['sticker_lowerleft'];
        $style_lowerright = $_POST['style_lowerright'];
        $sticker_lowerright = $_POST['sticker_lowerright'];

        // マネージャー インスタンスを作成する
        $manager = new ImageManager(new Driver());
        $img = $manager->read(public_path('img/nameplate_bg.gif'));

        // 画像上に文字を配置
        $img->text($user_name,627,379,function($font){
        $font->file('fonts/ZenKakuGothicNew-Bold.ttf'); // フォントファイル
        $font->size(84);
        $font->color('#333');
        $font->align('center');
        $font->valign('middle');
        });
        
        // ステッカー画像の読み込みと配置
        $img_sticker_upperleft = $manager->read(public_path('img/'.$style_upperleft.$sticker_upperleft.'.gif'));
        $img->place($img_sticker_upperleft,'top-left',50,30,);
        $img_sticker_upperright = $manager->read(public_path('img/'.$style_upperright.$sticker_upperright.'.gif'));
        $img->place($img_sticker_upperright,'top-right',30,30,);
        $img_sticker_lowerleft = $manager->read(public_path('img/'.$style_lowerleft.$sticker_lowerleft.'.gif'));
        $img->place($img_sticker_lowerleft,'bottom-left',40,40,);
        $img_sticker_lowerright = $manager->read(public_path('img/'.$style_lowerright.$sticker_lowerright.'.gif'));
        $img->place($img_sticker_lowerright,'bottom-right',30,50,);

        // uuidを生成して画像名に
        $hash_user_name = Str::uuid();
        // $hash_user_name = Hash::make($user_name);
        $img_name = $hash_user_name.'.gif';
        $img->save(public_path('img/'.$img_name));

        return view('result',['img_name' => 'img/'.$img_name]);
    }
}
