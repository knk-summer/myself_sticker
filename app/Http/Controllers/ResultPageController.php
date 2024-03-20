<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class ResultPageController extends Controller {

    public function show(){
        $user_name = $_POST['name'];
        $sticker_upperleft = $_POST['sticker_upperleft'];
       return view('result',['user_name' => $user_name,'sticker_upperleft' => $sticker_upperleft]);
    }
	
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