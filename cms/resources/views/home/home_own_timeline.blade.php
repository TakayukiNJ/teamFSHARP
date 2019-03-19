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
                                    <!--<img src="{{ url('/') }}/../img/placeholder.jpg" alt="default">-->
                                @endif
                            @else
                                <!--<img src="{{ url('/') }}/../img/placeholder.jpg" alt="default">-->
                            @endif
                        </div>
                        <div class="name">
                            @if(Auth::user()->point != 0)
                            <h4 class="title text-center">{{ Auth::user()->name }}@if($personal_info)<br><small>{{ $personal_info->description }}</small>@endif<br><br><small>現在保有ポイント：{{ Auth::user()->point }} ポイント</small>
                            @endif
                            @if(Auth::user()->total_deposit)
                                <br><small>出金可能金額：{{Auth::user()->total_deposit}}円</small></h4>
                            @endif
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
                                                    @if($npo_info_enterprise[$i]->url)
                                                    <br><br><a class="btn btn-xs btn-success" href="{{ $npo_info_enterprise[$i]->url }}" target="_blank">外部LINK</a>
                                                    @endif
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
                                                    <a href="/{{ $npo_info_personal[$i]->npo_name }}" class="badge" data-toggle="modal" data-target="#{{ $npo_info_personal[$i]->npo_name }}" aria-label="Close">
                                                        <svg viewBox="0 0 210 210">
                                                            <g stroke="none" fill="none">
                                                                <path d="M22,104.5 C22,58.9365081 58.9365081,22 104.5,22 C150.063492,22 187,58.9365081 187,104.5" id="top"></path>
                                                                <path d="M22,104.5 C22,150.063492 58.9365081,187 104.5,187 C150.063492,187 187,150.063492 187,104.5" id="bottom"></path>
                                                            </g>
                                                    		<circle cx="105" cy="105" r="62" stroke="currentColor" stroke-width="1" fill="none" />
                                                            <text width="80" font-size="8" fill="currentColor">
                                                                <textPath startOffset="50%" text-anchor="middle" alignment-baseline="middle" xlink:href="#top">
                                                                    {{$npo_info_personal[$i]->npo_name}}
                                                                </textPath>
                                                            </text>
                                                            <text width="80" font-size="8" fill="currentColor">
                                                                <textPath startOffset="50%" text-anchor="middle" alignment-baseline="middle" xlink:href="#bottom">
                                                                    @if($npo_info_personal[$i]->support_contents_detail)
                                                                    利用期限:{{ Carbon\Carbon::parse($npo_info_personal[$i]->support_contents_detail)->format('Y年m月d日H:i') }}
                                                                    @endif
                                                                </textPath>
                                                            </text>
                                                        </svg>
                                                        <span><b>{{ $premierData_personal[$i]->participants }}</b>口保有</b></span>
                                                    </a>
                                                    {{-- ポップアップの中身 --}}
                                                    <div class="modal fade" id="{{ $npo_info_personal[$i]->npo_name }}" tabindex="-1" role="dialog" aria-hidden="false">
                                                        <div class="modal-dialog modal-register">
                                                            <div class="modal-content">
                                                                <div class="modal-header no-border-header text-center">
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                      <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                    <h3 class="modal-title text-center">{{ $npo_info_personal[$i]->subtitle }}</h3>
                                                                    <p>{{ $npo_info_personal[$i]->title }}</p>
                                                                </div>
                                                                {{-- SNS share --}}
                                                                <div class="containersns">
                                                                    {{-- Facebook --}}
                                                                    <div class="fb-like" data-href="https://fsharp.me/{{ $npo_info_personal[$i]->npo_name }}" data-layout="button_count" data-action="like" data-size="small" data-show-faces="false" data-share="false"></div>
                                                                    <script async defer src="https://connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v3.2&appId=1545608625538119&autoLogAppEvents=1"></script>
                                                                    <div>　</div>
                                                                    {{-- Twitter --}}
                                                                    <a href="https://twitter.com/share?ref_src=twsrc%5Etfw&text={!! $npo_info_personal[$i]->title !!} {!! $npo_info_personal[$i]->subtitle !!}の支援のために。ひとりでも多くの方に広めてください♪" class="twitter-share-button" data-show-count="false"></a>
                                                                    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                                                                    <div>　</div>
                                                                    {{-- LINE --}}
                                                                    <div class="line-it-button" data-lang="ja" data-type="share-a" data-ver="2" data-url="https://fsharp.me/{{ $npo_info_personal[$i]->npo_name }}" style="display: none;"></div>
                                                                    <script src="https://d.line-scdn.net/r/web/social-plugin/js/thirdparty/loader.min.js" async="async" defer="defer"></script>
                                                                </div>
                                                                <style type="text/css">
                                                                    .containersns {
                                                                      display: flex;
                                                                      justify-content: center;
                                                                      align-items: center;
                                                                    }
                                                                </style>
                                                                {{-- SDGs --}}
                                                                <div class="containersns">
                                                                    <div class="avatar">
                                                                        <br>
                                                                        @if($npo_info_personal[$i]->certificated_npo)
                                                                        <a href="https://www.npo-homepage.go.jp/npoportal/detail/{{ $npo_info_personal[$i]->certificated_npo }}" target="_blank">
                                                                            <img src="/img/sdgs-logo/certificated_npo.jpeg" class="img-thumbnail img-responsive media-object" alt="Rounded Image" width="72" height="72">
                                                                        </a>
                                                                        @endif
                                                                        @for ($j = 1; $j < 7; $j++)
                                                                            <?php $sdgs = "sdgs".$j ?>
                                                                            @if($npo_info_personal[$i]->$sdgs)
                                                                            <img src="/img/sdgs-logo/sdg_icon_{{$npo_info_personal[$i]->$sdgs}}.png" class="img-thumbnail img-responsive media-object" alt="Rounded Image" width="72" height="72">
                                                                            @endif
                                                                        @endfor
                                                                    </div>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <label>管理者：<b>{{ $npo_info_personal[$i]->manager }}さん</b></label><br>
                                                                    <label>{{Auth::user()->name}}さんの合計支援回数：<b>{{ $premierData_personal[$i]->participants }}口</b></label><br>
                                                                    <label>{{Auth::user()->name}}さんの合計支援金額：<b>{{ $premierData_personal[$i]->status }}円</b></label><br>
                                                                    <label>{{Auth::user()->name}}さんの最終支援日時：<b>{{ Carbon\Carbon::parse($premierData_personal[$i]->updated_at)->format('Y年m月d日H:i') }}</b></label><br>
                                                                    <label><b>支援者</b></label>
                                                                    <p>
                                                                        @for($d = 1; $d < count($donater[$i]); $d++)
                                                                            @if($d > 1)
                                                                                、
                                                                            @endif
                                                                            @if((Auth::user()->name) == $donater[$i][$d])
                                                                                <b><font color="red">{{$donater[$i][$d]}}（あなた）@if($donater_times[$i][$d] > 1)<small>×{{$donater_times[$i][$d]}}</small>@endif</font></b>
                                                                            @else
                                                                                {{$donater[$i][$d]}}さん@if($donater_times[$i][$d] > 1)<small>×{{$donater_times[$i][$d]}}</small>@endif
                                                                            @endif
                                                                        @endfor
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-3">
                                                    <h6><a href="/{{ $npo_info_personal[$i]->npo_name }}">{{ $npo_info_personal[$i]->subtitle }}</a><br>
                                                    <small>{{ $npo_info_personal[$i]->title }}</small><br>
                                                    <small>単価:{{ $npo_info_personal[$i]->support_amount }}円</small><br>
                                                    <small>現在:{{ $npo_info_personal[$i]->follower }}円</small><br>
                                                    <small>支援数:{{ $npo_info_personal[$i]->buyer }}</small><br>
                                                    <small>募集数:{{ $npo_info_personal[$i]->support_limit }}</small><br>
                                                    @if($npo_info_personal[$i]->support_contents != "")
                                                    <small>リターン:{{ $npo_info_personal[$i]->support_contents }}</small><br>
                                                    @endif
                                                    @if($npo_info_personal[$i]->support_contents_detail)
                                                    <small>期限:{{ Carbon\Carbon::parse($npo_info_personal[$i]->support_contents_detail)->format('Y年m月d日H:i') }}</small><br>
                                                    @endif
                                                    <!--<small>現在:{{ $npo_info_personal[$i]->follower }}円</small><br>-->
                                                    <!--<small>現在:{{ $npo_info_personal[$i]->follower }}円</small><br>-->
                                                    </h6></h6><br>
                                                </div>
                                                <div class="col-md-1 col-1">
                                                    <a class="btn btn-xs btn-primary" href="/{{ $npo_info_personal[$i]->npo_name }}">GO!</a>
                                                    @if($npo_info_personal[$i]->url)
                                                    <br><br><a class="btn btn-xs btn-success" href="{{ $npo_info_personal[$i]->url }}" target="_blank">外部LINK</a>
                                                    @endif
                                                </div>
                                            </div>
                                        </li>
                                        <hr><br><br>
                                    @endfor
                                @elseif(!$npo_info_enterprise)
                                    <p class="text-muted text-center">まだどこにも支援していないようです！</p>
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
                                        <div class="col-md-1 col-3">
                                            {{$i + 1}}
                                            <!--<img src="../assets/img/faces/clem-onojeghuo-3.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">-->
                                        </div>
                                        <div class="col-md-8 col-4">
                                            <h6><a href="/{{ $npo_info_proval[$i]->npo_name }}">{{ $npo_info_proval[$i]->subtitle }}</a><br>{{ $npo_info_proval[$i]->title }}</h6>
                                            <h6><small>
                                                現在合計：{{ $npo_info_proval[$i]->follower }}円
        										<br>一口：{{ $npo_info_proval[$i]->support_amount }}円
                                                <br>残り：{{ $npo_info_proval[$i]->support_limit - $npo_info_proval[$i]->buyer}}口
        										@if($npo_info_proval[$i]->support_contents != '')
            										<br>リターン：{{ $npo_info_proval[$i]->support_contents }}
        										@endif
        									</small></h6>
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