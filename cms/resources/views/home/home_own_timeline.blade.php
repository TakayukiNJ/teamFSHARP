@extends('home.common_home_lp')
@include('home.head_profile')
@include('home.nav_home')
@include('layouts.script')
@section('content')
<div class="wrapper">
    <div class="page-header page-header-small" style="background-image: url('{{ url('/') }}/../img/sections/joshua-earles.jpg');">
        <div class="filter"></div>
    </div>
    <div class="profile-content section">
        <div class="container">
            <div class="row">
                <div class="profile-picture">
                    <div class="fileinput fileinput-new" data-provides="fileinput">
                        <div class="fileinput-new img-no-padding text-center">
                            @if($personal_info)
                                @if($personal_info->image_id)
                                    <img src='/img/personal_info/{{ $personal_info->image_id }}' alt="{{ Auth::user()->name }}">
                                @else
                                    <img src="{{ url('/') }}/../img/placeholder.jpg" alt="default">
                                @endif
                            @else
                                <img src="{{ url('/') }}/../img/placeholder.jpg" alt="default">
                            @endif
                        </div>
                        <div class="name">
                            <h4 class="title text-center">{{ Auth::user()->name }}<br /><small>{{ Auth::user()->email }}</small></h4>
                        </div>
                  </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 ml-auto mr-auto text-center">
                    <!--<p>An artist of considerable range, Chet Faker — the name taken by Melbourne-raised, Brooklyn-based Nick Murphy — writes, performs and records all of his own music, giving it a warm, intimate feel with a solid groove structure. </p>-->
                    <!--<br />-->
                    <a href="{{ url('/home/home_register') }}" class="btn btn-outline-default btn-round"><i class="fa fa-cog"></i> 設定</a>
                </div>
            </div>
            <br/>
            <div class="nav-tabs-navigation">
                <div class="nav-tabs-wrapper">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#new" role="tab">新着</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#supporting" role="tab">サポート</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#myProjects" role="tab">プロジェクト</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Tab panes -->
            <div class="tab-content">
                
                <div class="tab-pane text-center" id="myProjects" role="tabpanel">
                    @if(Auth::user()->npo)
                    <a href="{{ url('/npo_registers') }}" class="btn btn-success btn-round">管理ページへ</a>
                    @else
                    <h3 class="text-muted">まずは団体登録！</h3>
                    <br>
                    <a href="{{ url('/npo_registers') }}" class="btn btn-warning btn-round">プロジェクト作成</a>
                    @endif
                </div>
                <div class="tab-pane" id="supporting" role="tabpanel">
                    <div class="row">
                        <div class="col-md-6 ml-auto mr-auto">
                            <ul class="list-unstyled follows">
                                @if($npo_info_enterprise)
                                    <h4 class="text-muted text-center">【法人サポート履歴】</h4>
                                    <br>
                                    @for($i = 0; $i < count($npo_info_enterprise); $i++)
                                        <li>
                                            <div class="row">
                                                <div class="col-md-2 col-3">
                                                    {{$i + 1}}
                                                    <!--<img src="../assets/img/faces/clem-onojeghuo-3.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">-->
                                                </div>
                                                <div class="col-md-7 col-4">
                                                    <h6><a href="/{{ $npo_info_enterprise[$i]->npo_name }}">{{ $npo_info_enterprise[$i]->subtitle }}</a><br><small>{{ $npo_info_enterprise[$i]->title }}</small></h6></h6>
                                                </div>
                                                <div class="col-md-3 col-2">
                                                    <a class="btn btn-xs btn-primary" href="/{{ $npo_info_enterprise[$i]->npo_name }}">GO!</a>
                                                </div>
                                            </div>
                                        </li>
                                        <hr>
                                    @endfor
                                    <br>
                                @endif
                                @if($npo_info_personal)
                                    <h4 class="text-muted text-center">【個人サポート履歴】</h4>
                                    <br>
                                    @for($i = 0; $i < count($npo_info_personal); $i++)
                                        <li>
                                            <div class="row">
                                                <div class="col-md-2 col-3">
                                                    {{$i + 1}}
                                                    <!--<img src="../assets/img/faces/clem-onojeghuo-3.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">-->
                                                </div>
                                                <div class="col-md-7 col-4">
                                                    <h6><a href="/{{ $npo_info_personal[$i]->npo_name }}">{{ $npo_info_personal[$i]->subtitle }}</a><br><small>{{ $npo_info_personal[$i]->title }}</small></h6></h6>
                                                </div>
                                                <div class="col-md-3 col-2">
                                                    <a class="btn btn-xs btn-primary" href="/{{ $npo_info_personal[$i]->npo_name }}">GO!</a>
                                                </div>
                                            </div>
                                        </li>
                                        <hr>
                                    @endfor
                                @elseif(!$npo_info_enterprise)
                                    <p class="text-muted">まだどこにも寄付していないようです！</p>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-pane active" id="new" role="tabpanel">
                    <div class="row">
                        <div class="col-md-6 ml-auto mr-auto">
                            <ul class="list-unstyled follows">
                                @for($i = 0; $i < count($npo_info_proval); $i++)
                                <li>
                                    <div class="row">
                                        <div class="col-md-2 col-3">
                                            {{$i + 1}}
                                            <!--<img src="../assets/img/faces/clem-onojeghuo-3.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">-->
                                        </div>
                                        <div class="col-md-7 col-4">
                                            <h6><a href="/{{ $npo_info_proval[$i]->npo_name }}">{{ $npo_info_proval[$i]->subtitle }}</a><br><small>{{ $npo_info_proval[$i]->title }}</small></h6></h6>
                                        </div>
                                        <div class="col-md-3 col-2">
                                            <a class="btn btn-xs btn-primary" href="/{{ $npo_info_proval[$i]->npo_name }}">GO!</a>
                                        </div>
                                    </div>
                                </li>
                                <hr />
                                @endfor
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>    
{{--
<div class="w3-main" style="margin-left:300px">
</div>

  <!--<div class="w3-container w3-padding-large">-->
  <!--  <h4 id="portfolio"><b>PICKUP おすすめ</b></h4>-->
  <!--</div>-->
  <!-- Contact Section -->
  <!--<div class="w3-container w3-padding-large">-->
  <!--  <h4 id="about"><b>About Me (自己紹介)</b></h4>-->
    
  <!--  <p>ご登録、誠にありがとうございます。<br>F♯は、<strong>デジタルハリウッド大学大学院の2018年度学内コンペティション（インテリム・コンペティション）に選出されたWebサービスです。</strong></p>-->
    <!--<h4 id="about"><b>USAGE (使い方)</b></h4>-->
    <!--<p>応援したいNPOやコミュニティを選んで、コインを購入することによって支援や寄附をすることができます。</p>-->
    <!--<p>NPOの支援・寄附した場合、お名前（ユーザーネーム）がサイトに公開され、NPO側にはメールアドレスもお伝えいたします。(購入履歴は、今後ご活用できる仕組みを作成中です。)</p>-->
    <!--<p>コインをご購入すると、その団体の特典などを使用することができます。</p>-->
    <!--<p><strong>【NPOページ掲載に関して】</strong></p>-->
    <!--<p>ご自身のNPOやコミュニティを登録することできます。（審査期間：約1週間）</p>-->
    <!--<p>お気軽に、右上の「NPOページを作成」からご登録ください。</p>-->
    <!--<p><strong>③ICO(資金調達)に関して</strong></p>-->
    <!--<p>登録後、運営側からの承認を得ると、新たにご自身のNPOやコミュニティが右上の項目に追加されます。</p>-->
    <!--<p>公開されたご自身のホームページとしてだけでもご活用いただけますし、資金調達も始めることができます。（審査期間：約1週間）</p>-->
    <!--<p>その他、何かご不明点がございましたら、<a href="https://docs.google.com/forms/d/e/1FAIpQLSfM5FkFx27lREs-yMsY11P9dmx8ZQCkDVlPXL2Ch-AOoiz1vA/viewform?c=0&w=1">お気軽にご相談ください。</a></p>-->
    <!--<p>オリジナルトークン(ICO)ではなく、</p>-->
  <!--  <hr>-->
  <!--</div>-->
  
  
  <!--<div class="w3-container w3-padding-large w3-grey">-->
  <!--  <h4 id="contact"><b>Contact with FSHARP</b></h4>-->
    
    <!--<form action="/action_page.php" target="_blank">-->
    <!--  <div class="w3-section">-->
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
    <!--  <a href="https://goo.gl/YZLao1" target="_blank">-->
        <!--<button type="submit" class="w3-button w3-black w3-margin-bottom">-->
        <!--<i class="fa fa-paper-plane w3-margin-right" style="font-size:36px"></i>-->
    <!--    <i class="fa fa-paper-plane" style="font-size:36px"></i>-->
        <!--@lang('app.help')-->
        <!--</button>-->
    <!--  </a>-->
      <!--<div>-->
        <!--<a href="https://fb.me/LiCleOrg"><i class="fa fa-facebook-official" style="font-size:36px"></i></a>-->
        <!--<a href="https://twitter.com/TakayukiNakajo"><i class="fa fa-twitter" style="font-size:36px"></i></a>-->
        <!--<a href="https://www.instagram.com/nj.takayuki"><i class="fa fa-instagram" style="font-size:36px"></i></a>-->
        <!--<a href="https://www.youtube.com/channel/UCtEvLQ00OoOioktf5g5EgIQ?view_as=subscriber" target="_blank"><i class="fa fa-youtube-play" style="font-size:36px"></i></a>-->
        <!--<a href="https://www.linkedin.com/in/%E9%AB%98%E5%B9%B8-%E4%BB%B2%E6%9D%A1-68513984/" target="_blank"><i class="fa fa-linkedin-square" style="font-size:36px"></i></a>-->
        <!--<a href="https://vote.fe-ver.jp/communities/90" target="_blank"><i class="fa fa-globe" style="font-size:36px"></i></a>-->
    <!--  </div>-->
    <!--  <a class="indiesquare-tip-button" href="//widget.indiesquare.me/tip/abc690e1a12d9e88" target="_blank" data-vid="abc690e1a12d9e88" data-domain="indiesquare.me" style="width:150px">Donate with IndieSquare</a><script src="//widget.indiesquare.me/tip/buttonjs" async="" type="text/javascript"></script>-->
      
    <!--</form>-->
    
<br><br><br><br><br>
<!--  </div>-->

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
$(document).ready(function() {
	// 画像の再描画
    var changeCheckModule = function() {
		$.get("{{ url('other/own_image_picture') }}", {target : "HOME_REGIST"},
			function(data){
				// 画像データのパスが取得できれば表示する
				if(data != "0") {
					$('#own_image').attr('src', data);
				}
           	});
        // 画像ボタンの押下可否判定
        var own_image = $("img[id='own_image']").attr('src');
        if (own_image) {
    		$("input[id='image_delete_button']").show();
        } else {
    		$("input[id='image_delete_button']").hide();
        }
    };
    setInterval(changeCheckModule, 1000);
});
</script>

</div>
<!-- End page content -->
</div>
--}}
@endsection
@include('layouts.footer')