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
      <?php
      var_dump($user_name);
      echo mb_strlen($user_name);
      ?>
    <h1 class="logo_small"><img src="{{ asset('img/logo.gif') }}" alt="じぶんステッカー"></h1>
      <div class="explanation_img"><img src="{{ asset('img/name.png') }}" alt="仮"></div>
      <div class="explanation_txt">&#9313;四隅に属性ステッカーを貼ります</div>
      <form action="/result" method="post">
      @csrf
      <!-- CSRF対策 -->
      <h2>あなたの属性を選択してください</h2>
      <div class="selectbox">
      (1)
      <select name="style_upperleft">
      <option value = "シンプル">シンプル</option>
      <option value = "キラキラ">キラキラ</option>
      <option value = "ポップ">ポップ</option>
      <option value = "シック">シック</option>
      </select>
      な
      <select name="sticker_upperleft">
        <option value = "犬好き">犬好き</option>
        <option value = "猫好き">猫好き</option>
        <option value = "音楽好き">音楽好き</option>
        <option value = "ゲーム好き">ゲーム好き</option>
        <option value = "コーヒー派">コーヒー派</option>
        <option value = "紅茶派">紅茶派</option>
        <option value = "推し活中">推し活中</option>
        <option value = "カメラ好き">カメラ好き</option>
        <option value = "本好き">本好き</option>
        <option value = "裁縫好き">裁縫好き</option>
        <option value = "コスメ好き">コスメ好き</option>
        <option value = "甘いもの好き">甘いもの好き</option>
        <option value = "辛いもの好き">辛いもの好き</option>
        <option value = "旅好き">旅好き</option>
        <option value = "お酒好き">お酒好き</option>
        <option value = "飲み会好き">飲み会好き</option>
        <option value = "植物好き">植物好き</option>
      </select>
      </div>
      <div class="selectbox">
      (2)
      <select name="style_upperright">
      <option value = "シンプル">シンプル</option>
      <option value = "キラキラ">キラキラ</option>
      <option value = "ポップ">ポップ</option>
      <option value = "シック">シック</option>
      </select>
      な
      <select name="sticker_upperright">
        <option value = "犬好き">犬好き</option>
        <option value = "猫好き">猫好き</option>
        <option value = "音楽好き">音楽好き</option>
        <option value = "ゲーム好き">ゲーム好き</option>
        <option value = "コーヒー派">コーヒー派</option>
        <option value = "紅茶派">紅茶派</option>
        <option value = "推し活中">推し活中</option>
        <option value = "カメラ好き">カメラ好き</option>
        <option value = "本好き">本好き</option>
        <option value = "裁縫好き">裁縫好き</option>
        <option value = "コスメ好き">コスメ好き</option>
        <option value = "甘いもの好き">甘いもの好き</option>
        <option value = "辛いもの好き">辛いもの好き</option>
        <option value = "旅好き">旅好き</option>
        <option value = "お酒好き">お酒好き</option>
        <option value = "飲み会好き">飲み会好き</option>
        <option value = "植物好き">植物好き</option>
      </select>
      </div>
      <div class="selectbox">
      (3)
      <select name="style_lowerleft">
      <option value = "シンプル">シンプル</option>
      <option value = "キラキラ">キラキラ</option>
      <option value = "ポップ">ポップ</option>
      <option value = "シック">シック</option>
      </select>
      な
      <select name="sticker_lowerleft">
        <option value = "犬好き">犬好き</option>
        <option value = "猫好き">猫好き</option>
        <option value = "音楽好き">音楽好き</option>
        <option value = "ゲーム好き">ゲーム好き</option>
        <option value = "コーヒー派">コーヒー派</option>
        <option value = "紅茶派">紅茶派</option>
        <option value = "推し活中">推し活中</option>
        <option value = "カメラ好き">カメラ好き</option>
        <option value = "本好き">本好き</option>
        <option value = "裁縫好き">裁縫好き</option>
        <option value = "コスメ好き">コスメ好き</option>
        <option value = "甘いもの好き">甘いもの好き</option>
        <option value = "辛いもの好き">辛いもの好き</option>
        <option value = "旅好き">旅好き</option>
        <option value = "お酒好き">お酒好き</option>
        <option value = "飲み会好き">飲み会好き</option>
        <option value = "植物好き">植物好き</option>
      </select>
      </div>
      <div class="selectbox">
      (4)
      <select name="style_lowerright">
      <option value = "シンプル">シンプル</option>
      <option value = "キラキラ">キラキラ</option>
      <option value = "ポップ">ポップ</option>
      <option value = "シック">シック</option>
      </select>
      な
      <select name="sticker_lowerright">
        <option value = "犬好き">犬好き</option>
        <option value = "猫好き">猫好き</option>
        <option value = "音楽好き">音楽好き</option>
        <option value = "ゲーム好き">ゲーム好き</option>
        <option value = "コーヒー派">コーヒー派</option>
        <option value = "紅茶派">紅茶派</option>
        <option value = "推し活中">推し活中</option>
        <option value = "カメラ好き">カメラ好き</option>
        <option value = "本好き">本好き</option>
        <option value = "裁縫好き">裁縫好き</option>
        <option value = "コスメ好き">コスメ好き</option>
        <option value = "甘いもの好き">甘いもの好き</option>
        <option value = "辛いもの好き">辛いもの好き</option>
        <option value = "旅好き">旅好き</option>
        <option value = "お酒好き">お酒好き</option>
        <option value = "飲み会好き">飲み会好き</option>
        <option value = "植物好き">植物好き</option>
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
