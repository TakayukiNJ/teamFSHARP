@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
<!-- !PAGE CONTENT! -->
<div class="w3-main w3-content w3-padding" style="max-width:1200px">

  <!-- First Photo Grid-->
  <div class="w3-row-padding w3-padding-16 w3-center" id="food">
    
    <div class="w3-quarter">
      <a href="{{ url('/npo/piecesTest') }}">
      <img src="{{ url('/') }}/../img/contents/pieces.jpg" alt="Popsicle" style="width:100%">
      <h3>PIECES</h3>
      <p>相対的貧困の中にいる７人に１人の子ども達</p>
      </a>
    </div>
    
    <div class="w3-quarter">
      <a href="{{ url('/npo/2hj') }}">
      <img src="{{ url('/') }}/../img/contents/2hj.jpg" alt="Steak" style="width:100%">
      <h3>セカンドハーベストジャパン</h3>
      <p>#全ての人に、食べ物を。</p>
      </a>
    </div>
    
    <div class="w3-quarter">
      <img src="{{ url('/') }}/../img/contents/florence.jpg" alt="Cherries" style="width:100%">
      <h3>フローレンス</h3>
      <p>#新しいあたりまえを、すべての親子に。</p>
    </div>
    <div class="w3-quarter">
      <img src="{{ url('/') }}/../img/contents/whitehands.png" alt="Pasta and Wine" style="width:100%">
      <h3>ホワイトハンズ</h3>
      <p>#新しい「性の公共」をつくるゼミ</p>
    </div>
  </div>
  
  <!-- Second Photo Grid-->
  <div class="w3-row-padding w3-padding-16 w3-center">
    <div class="w3-quarter">
      <img src="{{ url('/') }}/../img/contents/kamonohashi.jpg" alt="Sandwich" style="width:100%">
      <h3>カモノハシプロジェクト</h3>
      <p>#子どもを一緒に守る方法</p>
    </div>
    <div class="w3-quarter">
      <img src="{{ url('/') }}/../img/contents/firebonds.png" alt="Salmon" style="width:100%">
      <h3>福島ファイヤーボンズ</h3>
      <p>#福島の熱い心</p>
    </div>
    <div class="w3-quarter">
      <img src="{{ url('/') }}/../img/contents/p_friends.jpg" alt="Sandwich" style="width:100%">
      <h3>プロジェクトフレンズ</h3>
      <p>#つながる心。つながる未来。</p>
    </div>
    <div class="w3-quarter">
      <img src="{{ url('/') }}/../img/contents/florence.jpg" alt="Croissant" style="width:100%">
      <h3>フローレンス</h3>
      <p>#新しいあたりまえを、すべての親子に</p>
    </div>
  </div>

  <!-- larvelではページネーションを使う。 -->
  <div class="w3-center w3-padding-32">
    <div class="w3-bar">
      <a href="#" class="w3-bar-item w3-button w3-hover-black">«</a>
      <a href="#" class="w3-bar-item w3-black w3-button">1</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">2</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">3</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">4</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">»</a>
    </div>
  </div>
  
  <hr id="about">

        <!--</article>-->
<!--<form name="changeform">-->
<!--{{ csrf_field() }}-->
<!--</form>-->
<!--<script type="text/javascript">-->
<!--	window.document.changeform.action = "{{ url('home/home_own_timeline') }}";-->
<!--    window.document.changeform.method = "POST";-->
<!--    window.document.changeform.submit();-->
<!--</script>-->

</div>
@endsection