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
                            <h4 class="title text-center"> {{ Auth::user()->name }}@if($personal_info)<br><small>{{ $personal_info->description}}</small>@endif</h4>
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
                            <a class="nav-link" data-toggle="tab" href="#supporting" role="tab">バッジ</a>
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
                                    <h4 class="text-muted text-center">【法人バッジ（履歴）】</h4>
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
                                    <h4 class="text-muted text-center">【個人バッジ（履歴）】</h4>
                                    <br><br><br><br><br>
                                    @for($i = 0; $i < count($npo_info_personal); $i++)
                                        <li>
                                            <div class="row">
                                                <div class="col-md-6 col-6">
                                                    <!--<a href="/{{ $npo_info_personal[$i]->npo_name }}" class="badge">-->
                                                    <div href="/{{ $npo_info_personal[$i]->npo_name }}" class="badge" data-toggle="modal" data-target="#loginModal">
                                                        <svg viewBox="0 0 210 210">
                                                            <g stroke="none" fill="none">
                                                                <path d="M22,104.5 C22,58.9365081 58.9365081,22 104.5,22 C150.063492,22 187,58.9365081 187,104.5" id="top"></path>
                                                                <path d="M22,104.5 C22,150.063492 58.9365081,187 104.5,187 C150.063492,187 187,150.063492 187,104.5" id="bottom"></path>
                                                            </g>
                                                    		<circle cx="105" cy="105" r="62" stroke="currentColor" stroke-width="1" fill="none" />
                                                            <text width="120" font-size="12" fill="currentColor">
                                                                <textPath startOffset="50%" text-anchor="middle" alignment-baseline="middle" xlink:href="#top">
                                                                    {{$npo_info_personal[$i]->subtitle}}
                                                                </textPath>
                                                            </text>
                                                            <text width="200" font-size="20" fill="currentColor">
                                                                <textPath startOffset="50%" text-anchor="middle" alignment-baseline="middle" xlink:href="#bottom">
                                                                    {{$npo_info_personal[$i]->title}}
                                                                </textPath>
                                                            </text>
                                                        </svg>
                                                        <span>{{$npo_info_personal[$i]->npo_name}}</span>
                                                    </div>
                                                    
                                                    
                                                    
                                                    
                    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="false">
                        <div class="modal-dialog modal-register">
                            <div class="modal-content">
                                <div class="modal-header no-border-header text-center">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                    <h3 class="modal-title text-center">ようこそ！</h3>
                                    <p>まずはご登録をお願いします。</p>
                                </div>
                                <div class="modal-body">
                                    <form class="register-form" role="form" method="POST" action="{{ url('/register') }}">
                                        {{ csrf_field() }}
                                        {{-- ユーザー名 --}}
                                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                            <label for="name">ユーザー名(半角英数)</label>
                                            <input id="name" type="text" class="form-control" name="name" placeholder="ユーザー名(半角英数)" value="{{ old('name') }}" required autofocus>
                                            @if ($errors->has('name'))
                                                <span class="help-block division">
                                                <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        {{-- メールアドレス --}}
                                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                            <label for="email">E-Mailアドレス</label>
                                            <input id="email" type="email" class="form-control" name="email" placeholder="メールアドレス" value="{{ old('email') }}" required>
                                            @if ($errors->has('email'))
                                                <span class="help-block division">
                                                <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        {{-- パスワード --}}
                                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                            <label for="password">パスワード</label>
                                            <input id="password" type="password" class="form-control" placeholder="パスワード" name="password" required>
                                            @if ($errors->has('password'))
                                                <span class="help-block division">
                                                <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        {{-- パスワード確認 --}}
                                        <div class="form-group division">
                                            <label for="password">パスワード確認</label>
                                            <input id="password-confirm" type="password" class="form-control" placeholder="パスワード確認" name="password_confirmation" required>
                                        </div>
                                        {{-- 利用規約とプライバシーポリシー --}}
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" required>
                                                <span class="form-check-sign">
                                                    本サイトの<strong><a href="{{ url('/terms') }}" target="_blank"> 利用規約 </a>および</strong><strong><a href="{{ url('/privacy_policy') }}" target="_blank"> プライバシーポリシー </a></strong>に同意する（チェックを入れる）
                                                </span>
                                            </label>
                                        </div>
                                        <button type="submit" class="btn btn-block btn-primary btn-round">登録</button>
                                    </form>
                                    <div class="modal-footer no-border-footer">
                                        <p>すでにご登録済みの方は <a href="{{ url('/login') }}">こちら</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                                                    
                                                    
                                                    
                                                    
                                                </div>
                                                <div class="col-md-3 col-3">
                                                    <h6><a href="/{{ $npo_info_personal[$i]->npo_name }}">{{ $npo_info_personal[$i]->subtitle }}</a><br>
                                                    <small>{{ $npo_info_personal[$i]->title }}</small><br>
                                                    <small>単価:{{ $npo_info_personal[$i]->support_amount }}円</small><br>
                                                    <small>目標:{{ $npo_info_personal[$i]->support_price }}円</small><br>
                                                    <small>現在:{{ $npo_info_personal[$i]->follower }}円</small><br>
                                                    <small>寄付数:{{ $npo_info_personal[$i]->buyer }}</small><br>
                                                    @if($npo_info_personal[$i]->support_contents != "このページに名前を記載")
                                                    <small>バッジの効果:{{ $npo_info_personal[$i]->support_contents }}</small><br>
                                                    @endif
                                                    @if($npo_info_personal[$i]->support_contents_detail)
                                                    <small>期限:{{ $npo_info_personal[$i]->support_contents_detail }}</small><br>
                                                    @endif
                                                    <!--<small>現在:{{ $npo_info_personal[$i]->follower }}円</small><br>-->
                                                    <!--<small>現在:{{ $npo_info_personal[$i]->follower }}円</small><br>-->
                                                    </h6></h6><br>
                                                </div>
                                                <div class="col-md-1 col-1">
                                                    <a class="btn btn-xs btn-primary" href="/{{ $npo_info_proval[$i]->npo_name }}">GO!</a>
                                                </div>
                                            </div>
                                        </li>
                                        <hr><br><br>
                                    @endfor
                                @elseif(!$npo_info_enterprise)
                                    <p class="text-muted text-center">まだどこにも寄付していないようです！</p>
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
--}}
@endsection
@include('layouts.footer')