<!doctype html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>じぶんステッカー</title>
<link rel="stylesheet" href="{{  asset('css/reset.css') }}" />
<link rel="stylesheet" href="{{  asset('css/style.css') }}" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Zen+Kaku+Gothic+New:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
<div class="wrap">
  <div class="container">
    <div class="contents">
    <h1 class="logo_small"><img src="{{ asset('img/logo.gif') }}" alt="じぶんステッカー"></h1>
      <!-- <div class="explanation_img"><img src="{{ asset('img/name.png') }}" alt="仮"></div> -->
      <div class="explanation_txt">&#9313;四隅に属性ステッカーを貼ります</div>
      <form action="/result" method="post">
      <!-- CSRF対策 -->
      @csrf
      <h2>あなたの属性を選択してください</h2>
      <div class="selectbox">
      (1)
      <select name="style_upperleft">
      <option value = "simple_" selected>シンプル</option>
      <option value = "yurume_">ゆるめ</option>
      <option value = "chottochic_">ちょっとシック</option>
      </select>
      な
      <select name="sticker_upperleft">
        <option value = "like_dogs">犬好き</option>
        <option value = "like_cats">猫好き</option>
        <option value = "like_game" selected>ゲーム好き</option>
        <option value = "like_coffee">コーヒー派</option>
        <option value = "like_tea">紅茶派</option>
        <option value = "my_fave">推し活中</option>
      </select>
      </div>
      <div class="selectbox">
      (2)
      <select name="style_upperright">
      <option value = "simple_" selected>シンプル</option>
      <option value = "yurume_">ゆるめ</option>
      <option value = "chottochic_">ちょっとシック</option>
      </select>
      な
      <select name="sticker_upperright">
      <option value = "like_dogs" selected>犬好き</option>
        <option value = "like_cats">猫好き</option>
        <option value = "like_game">ゲーム好き</option>
        <option value = "like_coffee">コーヒー派</option>
        <option value = "like_tea">紅茶派</option>
        <option value = "my_fave">推し活中</option>
      </select>
      </div>
      <div class="selectbox">
      (3)
      <select name="style_lowerleft">
      <option value = "simple_" selected>シンプル</option>
      <option value = "yurume_">ゆるめ</option>
      <option value = "chottochic_">ちょっとシック</option>
      </select>
      な
      <select name="sticker_lowerleft">
      <option value = "like_dogs" selected>犬好き</option>
        <option value = "like_cats">猫好き</option>
        <option value = "like_game">ゲーム好き</option>
        <option value = "like_coffee">コーヒー派</option>
        <option value = "like_tea">紅茶派</option>
        <option value = "my_fave">推し活中</option>
      </select>
      </div>
      <div class="selectbox">
      (4)
      <select name="style_lowerright">
      <option value = "simple_" selected>シンプル</option>
      <option value = "yurume_">ゆるめ</option>
      <option value = "chottochic_">ちょっとシック</option>
      </select>
      な
      <select name="sticker_lowerright">
      <option value = "like_dogs" selected>犬好き</option>
        <option value = "like_cats">猫好き</option>
        <option value = "like_game">ゲーム好き</option>
        <option value = "like_coffee">コーヒー派</option>
        <option value = "like_tea">紅茶派</option>
        <option value = "my_fave">推し活中</option>
      </select>
      </div>
        <input type="hidden" name="name" value="<?php echo $user_name ?>">
        <button type="submit" class="next_btn">出来上がりを見る</button>
      </form>
      <button class="btn" onclick="history.back()">前の画面に戻る</button>
    </div>
  </div>
</div>
</body>
</html>
