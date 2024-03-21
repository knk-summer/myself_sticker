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
      <h1 class="logo"><img src="{{ asset('img/logo.gif') }}" alt="じぶんステッカー"></h1>
      <div class="mv"><img src="{{ asset('img/main.gif') }}" alt="メイン画像"></div>
      <h2 class="headcopy">例えば、初めましての時<br>
        例えば、お久しぶりですの時<br>
        話し始めの一言目に困ることはありませんか？<br>
        そんな時のための名札生成ツール<br>
        「じぶんステッカー」です。<br>
        属性ステッカーを貼ることで<br>
        その人の好きなものを可視化します。<br>
        ぜひ話のタネにしてください！<br>
      </h2>
      <button class="start_btn" onclick="location.href='/name' ">はじめる</button>
    </div>
  </div>
</div>
</body>
</html>
