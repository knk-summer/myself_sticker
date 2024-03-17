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
      <div class="explanation_img"><img src="{{ asset('img/name.png') }}" alt="仮"></div>
      <div class="explanation_txt"><p>&#9313;四隅に属性ステッカーを貼ります</p></div>
      <form action="#" method="post">
      <h2>あなたの属性を選択してください</h2>
      <div class="selectbox">
      (1)
        <select name="sticker">
            <option value = "ダミー">ダミー</option>
        </select>
        </div>
        <div class="selectbox">
      (2)
        <select name="sticker">
            <option value = "ダミー">ダミー</option>
        </select>
        </div>
        <div class="selectbox">
      (3)
        <select name="sticker">
            <option value = "ダミー">ダミー</option>
        </select>
        </div>
        <div class="selectbox">
      (4)
        <select name="sticker">
            <option value = "ダミー">ダミー</option>
        </select>
        </div>
        <p><button type="button">出来上がりを見る</button>
      </form>
      <button class="btn">前の画面に戻る</button>
    </div>
  </div>
</div>
</body>
</html>
