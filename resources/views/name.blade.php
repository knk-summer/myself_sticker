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
    <div class="explanation_img"><img src="{{ asset('img/name_explanation.gif') }}" alt="名前入力＿説明画像"></div>
      <div class="explanation_txt"><p>&#9312;中央に名前を配置します</p></div>
      <form action="/sticker" method="post" class="form">
      <!-- CSRF対策 -->
      @csrf
      <h2>あなたの名前を入力してください。</br><span class="small_txt">(上限14文字まで)</span></h2>
        <p><input type="text" name="name" class="name_form" placeholder="name"/></p>
        <p><button type="submit" class="next_btn">次へ</button>
        <!-- type=buttonにすると値が送られないので注意 -->
      </form>
      <button class="btn" onclick="history.back()">前の画面に戻る</button>
    </div>
  </div>
</div>
</body>
</html>
