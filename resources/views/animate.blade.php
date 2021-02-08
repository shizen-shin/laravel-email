<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href=" {{ asset('css/app.css') }} ">
  <link rel="stylesheet" href=" {{ asset('css/animate.css') }} ">
  <title>Document</title>
</head>
<body>
  <h1>wow.js</h1>
  <div class="flexbox2">
    <div class="box box--blue wow fadeInUp" data-wow-duration="2s" data-wow-iteration="3"></div>
    <div class="box box--yellow wow fadeInUp" data-wow-delay="200ms" data-wow-duration="2s" data-wow-iteration="3"></div>
    <div class="box box--green wow fadeInUp" data-wow-delay="400ms" data-wow-duration="2s" data-wow-iteration="3"></div>
    <div class="box box--red wow fadeInUp" data-wow-delay="600ms" data-wow-duration="2s" data-wow-iteration="3"></div>
    <div class="box box--cyan wow fadeInUp" data-wow-delay="800ms" data-wow-duration="2s" data-wow-iteration="3"></div>
    <div class="box box--gray wow fadeInUp" data-wow-delay="1s" data-wow-duration="2s" data-wow-iteration="3"></div>
    <div class="box box--pink wow fadeInUp" data-wow-delay="1.2s" data-wow-duration="2s" data-wow-iteration="3"></div>
    <div class="box box--purple wow fadeInUp" data-wow-delay="1.4s" data-wow-duration="2s" data-wow-iteration="3"></div>
    <div class="box box--blue wow fadeInUp" data-wow-delay="1.6s" data-wow-duration="2s" data-wow-iteration="3"></div>
  </div>
  <!-- <h2 class="wow fadeIn">フェードインするタイトル</h2>
  <h2 class="wow animate__animated animate__zoomIn" data-wow-duration="10s">ゆっくり３秒かけてアニメーション</h2>
<h2 class="wow animate__animated animate__zoomIn" data-wow-delay=".5s">可視範囲に入って0.5秒後にアニメーション開始</h2>
<h2 class="wow animate__animated animate__zoomIn" data-wow-offset="100">可視範囲からさらに100pxスクロールされたらアニメーション</h2>
<h2 class="wow animate__animated animate__zoomIn" data-wow-iteration="2">アニメーションを２回繰り返す</h2> -->

  <script src="{{ asset('js/wow.min.js') }}"></script>
  <script>new WOW().init();</script>
</body>
</html>