<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Hash;

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
        // $imgPath = storage_path('img/nameplate_bg.gif');
        $img = $manager->read(public_path('img/nameplate_bg.gif'));
        // $img = \Image::make($imgPath);

        // 画像上に文字を配置
    $img->text($user_name,627,379,function($font){
        $font->file('fonts/ZenKakuGothicNew-Bold.ttf'); // フォントファイル
        $font->size(84);
        $font->color('#333');
        $font->align('center');
        $font->valign('middle');
    });

    // $sticker_upperleft = $manager->read(public_path('img/nameplate_bg.gif'));
    $img_sticker_upperleft = $manager->read(public_path('img/'.$style_upperleft.$sticker_upperleft.'.png'));
    $img->place($img_sticker_upperleft,'top-left',20,20,);
    $img_sticker_upperright = $manager->read(public_path('img/'.$style_upperright.$sticker_upperright.'.png'));
    $img->place($img_sticker_upperright,'top-right',20,20,);
    $img_sticker_lowerleft = $manager->read(public_path('img/'.$style_lowerleft.$sticker_lowerleft.'.png'));
    $img->place($img_sticker_lowerleft,'bottom-left',20,20,);
    $img_sticker_lowerright = $manager->read(public_path('img/'.$style_lowerright.$sticker_lowerright.'.png'));
    $img->place($img_sticker_lowerright,'bottom-right',20,20,);


        // $img->save(storage_path('img/hoge-flip.png'));
        $hash_user_name = Hash::make($user_name);
        // 画像名をハッシュ化
        $img_name = $hash_user_name.'.png';
        $img->save(public_path('img/'.$img_name));

        return view('result',['img_name' => 'img/'.$img_name,'style_upperleft' => $style_upperleft,'sticker_upperleft' => $sticker_upperleft]);
    }

    // public function show(){
    //     $user_name = $_POST['name'];
    //     $sticker_upperleft = $_POST['sticker_upperleft'];
    //    return view('result',['user_name' => $user_name,'sticker_upperleft' => $sticker_upperleft]);
    // }
	
}

// $file_name = 'nameplate_bg.png'; // アイキャッチ背景にしたい画像のファイル名
// $path = storage_path('app/public/images/' . $file_name );
// $img = \Image::make($path);

// // 画像にテキストを入れる。のちほど調整
// $img->text($title, 500, 220, function ($font) { // $title = 記事のタイトル
//     $font->size(40);
//     $font->color("#FFF");
//     $font->align("center");
//     $font->valign("top");
// });

// // 名前を指定してstorageに保存
// $save_path = storage_path('app/public/images/eyecatch_' . $id . '.png'); // $id = 記事のidで、これをアイキャッチのファイル名につけます。
// $img->save($save_path);

// $title = $this->mb_wordwrap($title, 18); // https://nullnull.dev/blog/i-made-a-perfect-mb-wordwrap-function/ を参考

// $img->text($title, 100, 220, function ($font) { // x = 100、y = 200
//     $font->file(storage_path('app/public/fonts/NotoSansJP-SemiBold.ttf')); // フォントファイルを日本語対応に
//     $font->size(54); // フォントサイズ54に
//     $font->color("#FFF");
//     $font->align("left"); // 左よせに
//     $font->valign("top");
// });