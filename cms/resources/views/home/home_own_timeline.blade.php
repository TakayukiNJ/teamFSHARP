@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
</style>
<div class="w3-light-grey w3-content" style="max-width:1600px">
    
    <!-- モバイル対応 -->
    <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>
    
    <!-- 左側 -->
    <nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
      <div class="w3-container">
        <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
          <i class="fa fa-remove"></i>
        </a>
        @if (!$image_id )
          <IMG id='own_image' src='/img/contents/user-default.png' style="width:150px">
        @else
          <IMG id='own_image' src="{{ $image_id }}" style="width:150px">
        @endif
          <!--<IMG id='own_image' src="{{ '' == $image_id  or '/img/contents/nike.jpeg' }}" style="width:150px">-->
          <!--<IMG id='own_image' src="{{ '' !== $image_id ? $image_id : '/img/contents/user-default.png' }}" style="width:150px">-->
          <!--<IMG id='own_image' src="{{ $image_id }}" style="width:150px">-->
        <br>
      	<!--<INPUT TYPE="button" id="image_upload_button" value="　画像登録　" onClick="ZZ1_run('HOME_REGIST')" >-->
      	  <h4><b>{{ Auth::user()->name }}</b></h4>
        <p class="w3-text-grey">{{ $user }}</p>
      </div>
      <div class="w3-bar-block">
        <a href="#portfolio" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-th-large fa-fw w3-margin-right"></i>PICKUP</a>
        <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>ABOUT</a>
        <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-envelope fa-fw w3-margin-right"></i>CONTACT</a>
      </div>
      <div class="w3-panel w3-large">
        <a href="https://fb.me/LiCleOrg" target="_blank"><i class="fa fa-facebook-official" style="font-size:36px"></i></a>
        <!--<a href="https://twitter.com/TakayukiNakajo" target="_blank"><i class="fa fa-twitter" style="font-size:36px"></i></a>-->
        <!--<a href="https://www.instagram.com/nj.takayuki" target="_blank"><i class="fa fa-instagram" style="font-size:36px"></i></a>-->
        <!--<a href="goo.gl/2fgfE" target="_blank"><i class="fa fa-youtube-play" style="font-size:36px"></i></a>-->
        <!--<a href="https://www.linkedin.com/in/%E9%AB%98%E5%B9%B8-%E4%BB%B2%E6%9D%A1-68513984/" target="_blank"><i class="fa fa-linkedin-square" style="font-size:36px"></i></a>-->
        <a href="https://vote.fe-ver.jp/communities/90" target="_blank"><i class="fa fa-globe" style="font-size:36px"></i></a>
      </div>
        
    </nav>
    
<div class="w3-main" style="margin-left:300px">
  
  <!-- First Photo Grid-->
  <div class="w3-container w3-padding-large">
    <!--<h4 id="portfolio"><b>HISTORY (購入履歴)</b></h3>-->
    <h4 id="portfolio"><b>PICKUP おすすめ</b></h4>
  </div>
  <div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
      <a href="{{ url('/npo/teamFSHARP') }}">
      <img src="https://greatmiddleway.files.wordpress.com/2014/04/light.jpg?w=600&h=400" alt="NPO" style="width:100%" class="w3-hover-opacity">
      </a>
      <div class="w3-container w3-white">
        <p><b>もうNPOは資金に困らない。</b></p>
        <p>F#</p>
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
      <a href="{{ url('/npo/nipponshotenkai') }}">
      <img src="https://greatmiddleway.files.wordpress.com/2014/04/light.jpg?w=600&h=400" alt="NPO" style="width:100%" class="w3-hover-opacity">
      </a>
      <div class="w3-container w3-white">
        <p><b>共に学び共に成長し共に勝つ</b></p>
        <p>NPO法人日本商店会</p>
      </div>
    </div>
  <!--  <div class="w3-third w3-container w3-margin-bottom">-->
  <!--    <a href="{{ url('/npo/piecesTest') }}">-->
  <!--    <img src="{{ url('/') }}/../img/contents/pieces.jpg" alt="NPO" style="width:100%" class="w3-hover-opacity" onClick="alert('Coming soon')">-->
  <!--    </a>-->
  <!--    <div class="w3-container w3-white">-->
  <!--      <p><b>PIECES</b></p>-->
  <!--    </div>-->
  <!--  </div>-->
  <!--  <div class="w3-third w3-container w3-margin-bottom">-->
  <!--    <img src="{{ url('/') }}/../img/contents/p_friends.jpg" alt="NPO" style="width:100%" class="w3-hover-opacity" onClick="alert('Coming soon')">-->
  <!--    <div class="w3-container w3-white">-->
  <!--      <p><b>プロジェクトフレンズ</b></p>-->
  <!--      </div>-->
  <!--  </div>-->
  </div>
  
  <!-- Second Photo Grid-->
  <!--<div class="w3-row-padding">-->
  <!--  <div class="w3-third w3-container w3-margin-bottom">-->
  <!--    <img src="{{ url('/') }}/../img/contents/florence.jpg" alt="NPO" style="width:100%" class="w3-hover-opacity"  onClick="alert('Coming soon')">-->
  <!--    <div class="w3-container w3-white">-->
  <!--      <p><b>フローレンス</b></p>-->
  <!--      </div>-->
  <!--  </div>-->
  <!--  <div class="w3-third w3-container w3-margin-bottom">-->
  <!--    <img src="{{ url('/') }}/../img/contents/kamonohashi.jpg" alt="NPO" style="width:100%" class="w3-hover-opacity" onClick="alert('Coming soon')">-->
  <!--    <div class="w3-container w3-white">-->
  <!--      <p><b>かものはし</b></p>-->
  <!--      </div>-->
  <!--  </div>-->
  <!--  <div class="w3-third w3-container w3-margin-bottom">-->
  <!--    <img src="{{ url('/') }}/../img/contents/whitehands.png" alt="NPO" style="width:100%" class="w3-hover-opacity" onClick="alert('Coming soon')">-->
  <!--    <div class="w3-container w3-white">-->
  <!--      <p><b>ホワイトハンズ</b></p>-->
  <!--      </div>-->
  <!--  </div>-->
  <!--</div>-->

  <!-- Pagination -->
  <!--<div class="w3-center w3-padding-32">-->
  <!--  <div class="w3-bar">-->
  <!--    <a href="#" class="w3-bar-item w3-button w3-hover-black">«</a>-->
  <!--    <a href="#" class="w3-bar-item w3-black w3-button">1</a>-->
  <!--    <a href="#" class="w3-bar-item w3-button w3-hover-black">2</a>-->
      <!--<a href="#" class="w3-bar-item w3-button w3-hover-black">3</a>-->
      <!--<a href="#" class="w3-bar-item w3-button w3-hover-black">4</a>-->
  <!--    <a href="#" class="w3-bar-item w3-button w3-hover-black">»</a>-->
  <!--  </div>-->
  <!--</div>-->
  <!-- Contact Section -->
  <div class="w3-container w3-padding-large">
    <!--<h4 id="about"><b>About Me (自己紹介)</b></h4>-->
    <h4 id="about"><b>USAGE (使い方)</b></h4>
    <p><strong>ご登録、誠にありがとうございます。</strong></p>
    <p>もしビットコインをお持ちなら、応援したい団体を選んで支援や寄附をすることができます。仮想通貨なので、世界中どこからでも送金手数料・送金速度は一律です。</p>
    <p>NPOの支援・寄附した場合、お名前（ユーザーネーム）がサイトに公開され、NPO側にはメールアドレスもお伝えいたします。(購入履歴は、今後ご活用できる仕組みを作成中です。)</p>
    <!--<p>購入履歴は、今後その支援した団体のオリジナルコイン(トークン)をゲットしてご利用できるようになります。お楽しみに！</p>-->
    <!--<p><strong>①マイページに関して</strong></p>-->
    <!--<p>トップバーの「ユーザー名」→マイページ編集」で、ご本名や生年月日を入力して本登録完了といたします。(外部公開はいたしません。)</p>-->
    <!--<p>本登録完了後、マイページに写真を追加したり、ご自身のNPOをICOで資金調達にチャレンジすることができます。</p>-->
    <p><strong>【NPOページ掲載に関して】</strong></p>
    <p>ご自身のNPOを登録することできます。（審査期間：約1週間）</p>
    <p>お気軽に、ご申請の程よろしくお願いいたします。</p>
    <!--<p><strong>③ICO(資金調達)に関して</strong></p>-->
    <p>ご自身のNPOページが登録されると、新たに項目がトップバーに追加されます。</p>
    <p>自分のNPOのホームページとしてだけでもご活用いただけますし、資金調達も始めることができます。（審査期間：約1週間）</p>
    <p>お気軽に、ご相談ください。</p>
    <!--<p>オリジナルトークン(ICO)ではなく、</p>-->
    <hr>
  </div>
  
  
  <div class="w3-container w3-padding-large w3-grey">
    <h4 id="contact"><b>Contact with FSHARP</b></h4>
    
    <form action="/action_page.php" target="_blank">
      <div class="w3-section">
      <!--  <label>Name</label>-->
      <!--  <input class="w3-input w3-border" type="text" name="Name" required>-->
      <!--</div>-->
      <!--<div class="w3-section">-->
      <!--  <label>Email</label>-->
      <!--  <input class="w3-input w3-border" type="text" name="Email" required>-->
      <!--</div>-->
      <!--<div class="w3-section">-->
      <!--  <label>Message</label>-->
      <!--  <input class="w3-input w3-border" type="text" name="Message" required>-->
      <!--</div>-->
      <a href="https://goo.gl/YZLao1" target="_blank">
        <!--<button type="submit" class="w3-button w3-black w3-margin-bottom">-->
        <!--<i class="fa fa-paper-plane w3-margin-right" style="font-size:36px"></i>-->
        <i class="fa fa-paper-plane" style="font-size:36px"></i>
        <!--@lang('app.help')-->
        <!--</button>-->
      </a>
      <!--<div>-->
        <a href="https://fb.me/LiCleOrg"><i class="fa fa-facebook-official" style="font-size:36px"></i></a>
        <!--<a href="https://twitter.com/TakayukiNakajo"><i class="fa fa-twitter" style="font-size:36px"></i></a>-->
        <!--<a href="https://www.instagram.com/nj.takayuki"><i class="fa fa-instagram" style="font-size:36px"></i></a>-->
        <!--<a href="https://www.youtube.com/channel/UCtEvLQ00OoOioktf5g5EgIQ?view_as=subscriber" target="_blank"><i class="fa fa-youtube-play" style="font-size:36px"></i></a>-->
        <!--<a href="https://www.linkedin.com/in/%E9%AB%98%E5%B9%B8-%E4%BB%B2%E6%9D%A1-68513984/" target="_blank"><i class="fa fa-linkedin-square" style="font-size:36px"></i></a>-->
        <a href="https://vote.fe-ver.jp/communities/90" target="_blank"><i class="fa fa-globe" style="font-size:36px"></i></a>
      </div>
        <a class="indiesquare-tip-button" href="//widget.indiesquare.me/tip/abc690e1a12d9e88" target="_blank" data-vid="abc690e1a12d9e88" data-domain="indiesquare.me" style="width:150px">Donate with IndieSquare</a><script src="//widget.indiesquare.me/tip/buttonjs" async="" type="text/javascript"></script>
      
    </form>
    
<br><br><br><br><br>
  </div>

  <!-- Footer -->
  <!--<footer class="w3-container w3-padding-32 w3-dark-grey">-->
  <!--<div class="w3-row-padding">-->
  <!--  <div class="w3-third">-->
  <!--    <h3>FOOTER</h3>-->
  <!--    <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>-->
  <!--    <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>-->
  <!--  </div>-->
  
  <!--  <div class="w3-third">-->
  <!--    <h3>BLOG POSTS</h3>-->
  <!--    <ul class="w3-ul w3-hoverable">-->
  <!--      <li class="w3-padding-16">-->
  <!--        <img src="/w3images/workshop.jpg" class="w3-left w3-margin-right" style="width:50px">-->
  <!--        <span class="w3-large">Lorem</span><br>-->
  <!--        <span>Sed mattis nunc</span>-->
  <!--      </li>-->
  <!--      <li class="w3-padding-16">-->
  <!--        <img src="/w3images/gondol.jpg" class="w3-left w3-margin-right" style="width:50px">-->
  <!--        <span class="w3-large">Ipsum</span><br>-->
  <!--        <span>Praes tinci sed</span>-->
  <!--      </li> -->
  <!--    </ul>-->
  <!--  </div>-->

  <!--  <div class="w3-third">-->
  <!--    <h3>POPULAR TAGS</h3>-->
  <!--    <p>-->
  <!--      <span class="w3-tag w3-black w3-margin-bottom">Travel</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">New York</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">London</span>-->
  <!--      <span class="w3-tag w3-grey w3-small w3-margin-bottom">IKEA</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">NORWAY</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">DIY</span>-->
  <!--      <span class="w3-tag w3-grey w3-small w3-margin-bottom">Ideas</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">Baby</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">Family</span>-->
  <!--      <span class="w3-tag w3-grey w3-small w3-margin-bottom">News</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">Clothing</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">Shopping</span>-->
  <!--      <span class="w3-tag w3-grey w3-small w3-margin-bottom">Sports</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">Games</span>-->
  <!--    </p>-->
  <!--  </div>-->

  <!--</div>-->
  <!--</footer>-->
  
  

<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
</script>
<form name="changeform">
{{ csrf_field() }}
</form>
<script type="text/javascript">
/* 画像アップロード */
function ZZ1_run(val) {
    window.open("", "subwindow");
    window.document.subwindow.action = "{{ url('/../other/image_upload_index') }}";
    window.document.subwindow.target = "subwindow";
    make_hidden('mode', val, 'subwindow');
    window.document.subwindow.method = "POST";
    window.document.subwindow.submit();
}
/* 画像アップロード */
function ZZ1_run(val) {
    window.open("", "subwindow");
    window.document.subwindow.action = "{{ url('other/image_upload_index') }}";
    window.document.subwindow.target = "subwindow";
    make_hidden('mode', val, 'subwindow');
    window.document.subwindow.method = "POST";
    window.document.subwindow.submit();
}
/* 検索画面 */
function H03_1_run() {
    window.document.changeform.action = "{{ url('home/home_search_outer_member') }}";
    window.document.changeform.method = "POST";
    window.document.changeform.submit();
}
/* 自己紹介登録画面 */
function C02_run() {
    window.document.changeform.action = "{{ url('home/home_register') }}";
    window.document.changeform.method = "POST";
    window.document.changeform.submit();
}
/* 自己紹介登録画面 */
function H03_1_run() {
    window.document.changeform.action = "{{ url('home/home_search_outer_member') }}";
    window.document.changeform.method = "POST";
    window.document.changeform.submit();
}
/* Vision売却画面 */
function E01_1_run() {
    window.document.changeform.action = "{{ url('connect/sell') }}";
    window.document.changeform.method = "POST";
    window.document.changeform.submit();
}
/* 新おみくじ登録画面 */
function E04_1_run(val) {
    window.document.changeform.action = "{{ url('connect/sell_detail_regist') }}";
    window.document.changeform.method = "POST";
    make_hidden('omikuji_id', val, 'changeform');
    window.document.changeform.submit();
}
</script>

</div>
<!-- End page content -->
</div>
@endsection