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
    <div class="contents result">
    <?php
      var_dump($img_name);
      var_dump($style_upperleft);
      var_dump($sticker_upperleft);
      // echo $style_upperleft.$sticker_upperleft;
      ?>
      <h1 class="logo_small"><img src="{{ asset('img/logo.gif') }}" alt="じぶんステッカー"></h1>
      <div class="result_img"><img src="{{ asset($img_name) }}" alt="仮"></div>
      <div class="explanation_txt">あなたのネームプレートはこちら！</div>
      <button class="next_btn">拡大して見る</button>
      <div class="largeimg_explanation_txt"><span class="small_txt">スマートフォンでご覧の方は横持ちにすることで、<br>より大きく表示できます。</span></div>
      <button class="btn">画像をDLする</button>
      <button class="btn" onclick="history.back()">前の画面に戻る</button>
    </div>
  </div>
</div>
</body>
</html>
