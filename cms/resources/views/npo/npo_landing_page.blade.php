@extends('layouts.common_nav_npo_lp')
@include('layouts.head_npo_lp')
@include('layouts.script')
@include('layouts.nav_lp')
@section('content')
    {{-- description area --}}{{-- auth()->check() --}}
    {{-- <div class="container tim-container"> --}}
    <div id="description-areas">
        {{--     *********    HEADERS     *********      --}}
        <div class="cd-section" id="headers">
            @if($npo_info->background_pic)
            <div class="page-header" style="background-image: url('/img/project_back/{{ $npo_info->background_pic }}');">
            @else
            <div class="page-header" style="background-image: url('https://images.unsplash.com/photo-1486310662856-32058c639c65?dpr=2&auto=format&fit=crop&w=1500&h=1125&q=80&cs=tinysrgb&crop=');">
            @endif
                <div class="filter"></div>
                <div class="content-center">
                    <div class="container">
                        <div class="row">
                            @if (( $npo_info->embed_youtube ) != "")
                            <div class="col-md-5">
                                <br>
                                <div class="iframe-container">
                                    <iframe src="https://www.youtube.com/embed/{{ $npo_info->embed_youtube }}?modestbranding=1&autohide=1&showinfo=0" frameborder="0" allowfullscreen height="250"></iframe>
                                </div>
                            </div>
                            <div class="col-md-6 ml-auto">
                            @else
                            <div class="col-md-12 ml-auto">
                            @endif
                                <h2 class="title">{!! nl2br(e(trans($npo_info->subtitle))) !!}</h2>
                                <h5 class="description">
                                    @if($npo_info->avater)
                                    <img src="{{ url('/') }}/img/project_logo/{{$npo_info->avater}}" class="img-thumbnail img-no-padding img-responsive" alt="Rounded Image" width="32" height="32">
                                    @endif
                                    {!! nl2br(e(trans($npo_info->title))) !!}
                                </h5>
                                <div>
                                    @if(Auth::guest())
                                        <button type="button" class="btn btn-danger btn-round" data-toggle="modal" data-target="#loginModal">
                                            ユーザー登録
                                        </button>
                                    @else
                                        @if($npo_info->manager == Auth::user()->name)
                                        <a href="{{ url('/npo_registers') }}/{{ $npo_info->id }}/edit" class="btn btn-warning">
                                            編集する
                                        </a>
                                        @else
                                            @for ($i = 1; $i <= 10; $i++)
                                                <?php $member = "member".$i ?>
                                                @if($npo_info->$member)
                                                    <?php $member_twitter = $member."_twitter" ?>
                                                    <?php $member_auth    = $npo_info->$member . "1" ?>
                                                    @if($npo_info->$member_twitter == $member_auth && Auth::user()->name == $npo_info->$member)
                                                        <a href="{{ url('/npo_registers') }}/{{ $npo_info->id }}/edit" class="btn btn-warning">
                                                            編集する
                                                        </a>
                                                    @endif
                                                @endif
                                            @endfor
                                            @if($npo_info->buyer < $npo_info->support_limit)
                                            <a href="#support" class="btn btn-danger">
                                                支援する
                                            </a>
                                            @else
                                            <a href="#support" class="btn btn-danger">
                                                募集完売
                                            </a>
                                            @endif
                                        @endif
                                    @endif
                                </div>
                                <br>
                                <h6>現在：{{$npo_info->buyer}}口（{{$currency_data}}円）／ 募集：{{$npo_info->support_limit}}口（残り{{$npo_info->support_limit - $npo_info->buyer}}口）</h6>
                                @if($npo_info->buyer != 0)
                                @if($parcentage < 10)
                                <div class="progress">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" style="width: {{$parcentage}}%" aria-valuenow="" aria-valuemin="0" aria-valuemax="0">
                                    </div>
                                </div>
                                @elseif($parcentage < 50)
                                <div class="progress">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" style="width: {{$parcentage}}%" aria-valuenow="" aria-valuemin="0" aria-valuemax="0">
                                    </div>
                                </div>
                                @else
                                <div class="progress">
                                    <div class="progress-bar progress-bar-success" role="progressbar" style="width: {{$parcentage}}%" aria-valuenow="" aria-valuemin="0" aria-valuemax="0">
                                    </div>
                                </div>
                                @endif
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--     *********    PRICING     *********      --}}
        <div class="pricing-5 section-gray" id="pricing">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h2 class="title text-center">SUPPORT</h2>
                        <div class="tab-content text-center" >
                            <p>現在<b>{{$npo_info->buyer}}</b>口（残り{{$npo_info->support_limit - $npo_info->buyer}}口）</p>
                            <p>支援するとバッジにニックネームが記載されます。</p>
                            @if($npo_info->body)
                            <button type="button" class="btn btn-round btn-warning"
                                data-toggle="popover"
                                data-placement="bottom"
                                title="説明・紹介文"
                                data-content="{{ $npo_info->body }}">説明・紹介文
                            </button>
                            <br>
                            @endif
                            <br>
                            <div class="containersns">
                                {{-- Facebook --}}
                                <div class="fb-like" data-href="https://fsharp.me/{{ $npo_info->npo_name }}" data-layout="button_count" data-action="like" data-size="small" data-show-faces="false" data-share="true"></div>
                                <script async defer src="https://connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v3.2&appId=1545608625538119&autoLogAppEvents=1"></script>
                                <div>　</div>
                                {{-- Twitter --}}
                                <a href="https://twitter.com/share?ref_src=twsrc%5Etfw&text={!! $npo_info->title !!} {!! $npo_info->subtitle !!}の支援のために。ひとりでも多くの方に広めてください♪" class="twitter-share-button" data-show-count="false"></a>
                                <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                                <div>　</div>
                                {{-- LINE --}}
                                <div class="line-it-button" data-lang="ja" data-type="share-a" data-ver="2" data-url="https://fsharp.me/{{ $npo_info->npo_name }}" style="display: none;"></div>
                                <script src="https://d.line-scdn.net/r/web/social-plugin/js/thirdparty/loader.min.js" async="async" defer="defer"></script>
                                {{-- SDGs --}}
                            </div>
                            <div class="avatar">
                                <br>
                                @if($npo_info->certificated_npo)
                                <a href="https://www.npo-homepage.go.jp/npoportal/detail/{{ $npo_info->certificated_npo }}" target="_blank">
                                    <img src="img/sdgs-logo/certificated_npo.jpeg" class="img-thumbnail img-responsive media-object" alt="Rounded Image" width="72" height="72">
                                </a>
                                @endif
                                @for($i = 1; $i < 7; $i++)
                                    <?php $sdgs = "sdgs".$i ?>
                                    @if($npo_info->$sdgs)
                                    <img src="img/sdgs-logo/sdg_icon_{{$npo_info->$sdgs}}.png" class="img-thumbnail img-responsive media-object" alt="Rounded Image" width="72" height="72">
                                    @endif
                                @endfor
                            </div>
                            <!--<p>*集まった寄付金は全額担当者にお渡しします。</p>-->
                            @if($npo_info->certificated_npo == 1)
                            <p>**こちらは<a href="https://www.npo-homepage.go.jp/npoportal" target="_blank">内閣府公式サイト</a>に掲載されている認定NPO法人の寄付先なので、税額控除の対象です。</p>
                            @endif
                            <p class="description text-gray">
                                <!--*決済時に258円と4.6%の手数料がかかります。<br>-->
                                @if($npo_info->certificated_npo)
                                **10,000円を認定NPO法人に寄付した場合、最大約5,000円の税額控除を受けられます。
                                @endif
                            </p>
                        </div>
                    </div>

                    <div class="col-md-7 ml-auto" id="support">
                        <div class="tab-content text-center" >
                            <div class="tab-pane active" id="personal" role="tabpanel">
                                <div class="space-top"></div>
                                <div class="row">
                                    {{-- 支援する --}}
                                    <div class="col-md-6">
                                        <div class="card card-pricing">
                                            <div class="card-body">
                                                <h6 class="card-category text-danger">{{ $npo_info->subtitle }}を支援</h6>
                                                <h1 class="card-title">{{ $npo_info->support_amount }}円</h1>
                                                <ul>
                                                    <li><b>使用目的: {{ $npo_info->support_purpose or '活動費' }}</b></li>
                                                    @if($npo_info->support_contents)
                                                    <li><b>リターン: {{ $npo_info->support_contents or '未設定' }}</b></li>
                                                    @endif
                                                    @if($npo_info->support_contents_detail)
                                                    <li><b>特典利用期限: {{ Carbon\Carbon::parse($npo_info->support_contents_detail)->format('Y年m月d日H:i') }}</b></li>
                                                    @endif
                                                </ul>
                                                @if (Auth::guest())
                                                <button type="button" class="btn btn-danger btn-round" data-toggle="modal" data-target="#loginModal">
                                                    ユーザー登録
                                                </button>
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
                                                                    {{-- ニックネーム(半角英数) --}}
                                                                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                                                        <label for="name">ニックネーム(半角英数)</label>
                                                                        <input id="name" type="text" class="form-control" name="name" placeholder="ニックネーム(半角英数)" value="{{ old('name') }}" required autofocus>
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
                                                                        <label for="password">パスワード(8文字以上)</label>
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
                                                @elseif($npo_info->buyer < $npo_info->support_limit)
                                                    <form action="/{{$npo_info->npo_name}}/payment" method="POST">
                                                        {!! csrf_field() !!}
                                                        <script
                                                            src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                                            data-key="{{$stripe_key}}"
                                                            data-amount="{{ $npo_info->support_amount }}"
                                                            data-name="{{ $npo_info->npo_name }}"
                                                            data-email="{{Auth::user()->email}}"
                                                            data-description=@if($npo_info->support_contents_detail)"利用期限:{{ Carbon\Carbon::parse($npo_info->support_contents_detail)->format('Y年m月d日H:i') }}"@else""@endif
                                                            data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                                                            data-locale="auto"
                                                            data-currency="jpy"
                                                            $.ajaxSetup({
                                                            headers: {
                                                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                                            }
                                                        })
                                                        >
                                                        </script>
                                                     </form>
                                                    {{-- data-description="寄付後にユーザー名と画像が自動記載"--}}
                                                @endif
                                                
                                                <style type="text/css">
                                                button.stripe-button-el,
                                                button.stripe-button-el>span {
                                                  background-color: #F57763 !important;
                                                  background-image: none;
                                                }
                                                </style>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <br><br><br><br><br>
                                        <a href="/{{ $npo_info->npo_name }}" class="badge" data-toggle="modal" data-target="#{{ $npo_info->npo_name }}" aria-label="Close">
                                            <svg viewBox="0 0 210 210">
                                                <g stroke="none" fill="none">
                                                    <path d="M22,104.5 C22,58.9365081 58.9365081,22 104.5,22 C150.063492,22 187,58.9365081 187,104.5" id="top"></path>
                                                    <path d="M22,104.5 C22,150.063492 58.9365081,187 104.5,187 C150.063492,187 187,150.063492 187,104.5" id="bottom"></path>
                                                </g>
                                        		<circle cx="105" cy="105" r="62" stroke="currentColor" stroke-width="1" fill="none" />
                                                <text width="120" font-size="12" fill="currentColor">
                                                    <textPath startOffset="50%" text-anchor="middle" alignment-baseline="middle" xlink:href="#top">
                                                        {{$npo_info->npo_name}}
                                                    </textPath>
                                                </text>
                                                <text width="80" font-size="8" fill="currentColor">
                                                    <textPath startOffset="50%" text-anchor="middle" alignment-baseline="middle" xlink:href="#bottom">
                                                        @if($npo_info->support_contents_detail)
                                                        利用期限:{{ Carbon\Carbon::parse($npo_info->support_contents_detail)->format('Y年m月d日H:i') }}
                                                        @endif
                                                    </textPath>
                                                </text>
                                            </svg>
                                            <span>残り{{$npo_info->support_limit - $npo_info->buyer}}口</span>
                                        </a>
                                        {{-- ポップアップの中身 --}}
                                        <div class="modal fade" id="{{ $npo_info->npo_name }}" tabindex="-1" role="dialog" aria-hidden="false">
                                            <div class="modal-dialog modal-register">
                                                <div class="modal-content">
                                                    <div class="modal-header no-border-header text-center">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                          <span aria-hidden="true">&times;</span>
                                                        </button>
                                                        <h3 class="modal-title text-center">{{ $npo_info->subtitle }}</h3>
                                                        <p>{{ $npo_info->title }}</p>
                                                        @if($npo_info->url)
                                                        <a href="{{ $npo_info->url }}" class="btn btn-danger" target="_blank">
                                                            外部公式サイト
                                                        </a>
                                                        @endif
                                                    </div>
                                                    {{-- SNS share --}}
                                                    <div class="containersns">
                                                        {{-- Facebook --}}
                                                        <div class="fb-like" data-href="https://fsharp.me/{{ $npo_info->npo_name }}" data-layout="button_count" data-action="like" data-size="small" data-show-faces="false" data-share="true"></div>
                                                        <script async defer src="https://connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v3.2&appId=1545608625538119&autoLogAppEvents=1"></script>
                                                        <div>　</div>
                                                        {{-- Twitter --}}
                                                        <a href="https://twitter.com/share?ref_src=twsrc%5Etfw&text={!! $npo_info->title !!} {!! $npo_info->subtitle !!}の支援のために。ひとりでも多くの方に広めてください♪" class="twitter-share-button" data-show-count="false"></a>
                                                        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                                                        <div>　</div>
                                                        {{-- LINE --}}
                                                        <div class="line-it-button" data-lang="ja" data-type="share-a" data-ver="2" data-url="https://fsharp.me/{{ $npo_info->npo_name }}" style="display: none;"></div>
                                                        <script src="https://d.line-scdn.net/r/web/social-plugin/js/thirdparty/loader.min.js" async="async" defer="defer"></script>
                                                    </div>
                                                    {{-- SDGs --}}
                                                    <div class="containersns">
                                                        <div class="avatar">
                                                            <br>
                                                            @if($npo_info->certificated_npo)
                                                            <a href="https://www.npo-homepage.go.jp/npoportal/detail/{{ $npo_info->certificated_npo }}" target="_blank">
                                                                <img src="img/sdgs-logo/certificated_npo.jpeg" class="img-thumbnail img-responsive media-object" alt="Rounded Image" width="60" height="60">
                                                            </a>
                                                            @endif
                                                            @for ($i = 1; $i < 7; $i++)
                                                                <?php $sdgs = "sdgs".$i ?>
                                                                @if($npo_info->$sdgs)
                                                                <img src="img/sdgs-logo/sdg_icon_{{$npo_info->$sdgs}}.png" class="img-thumbnail img-responsive media-object" alt="Rounded Image" width="60" height="60">
                                                                @endif
                                                            @endfor
                                                        </div>
                                                        <style type="text/css">
                                                            .containersns {
                                                              display: flex;
                                                              justify-content: center;
                                                              align-items: center;
                                                            }
                                                        </style>
                                                    </div>
                                                    <div class="modal-body">
                                                        <label>管理者</label>
                                                        <p>{{ $npo_info->manager }}</p>
                                                        <label>募集支援数</label>
                                                        <p>{{ $npo_info->support_limit }}口</p>
                                                        <label>現在</label>
                                                        <p>{{ $npo_info->buyer }}口（{{ $npo_info->follower }}円）</p>
                                                        <label>寄付者</label>
                                                        <p>
                                                        @if(count($donater)>1)
                                                            @for($i = 1; $i < count($donater); $i++)
                                                                @if($i > 1)
                                                                    、
                                                                @endif
                                                                @if(!Auth::guest())
                                                                    @if((Auth::user()->name) == $donater[$i])
                                                                        <b><font color="red">{{$donater[$i]}}（あなた）@if($donater_times[$i] > 1)<small>×{{$donater_times[$i]}}</small>@endif</font></b>
                                                                    @else
                                                                        {{$donater[$i]}}さん@if($donater_times[$i] > 1)<small>×{{$donater_times[$i]}}</small>@endif
                                                                    @endif
                                                                @else
                                                                    {{$donater[$i]}}さん@if($donater_times[$i] > 1)<small>×{{$donater_times[$i]}}</small>@endif
                                                                @endif
                                                            @endfor
                                                        @else
                                                            まだ寄付者はいません。
                                                        @endif
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
     {{--     *********    3cards     *********      --}}
    <div class="nav-tabs-navigation">
    </div>
    <div id="my-tab-content" class="tab-content text-center section-white container tim-container">
        <div class="cd-section section-white" id="intro-cards">
            <div class="container ">
                <div class="row coloured-cards">
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <div class="card card-blog">
    							<div class="card-image">
    							    @if($npo_info->code1)
    								{{--<a href="#pablo">--}}
    									<img class="img" src="{{ url('/') }}/img/project_code/{{$npo_info->code1}}">
    								{{--</a>--}}
    								@endif
                                </div>
    							<div class="card-body text-center">
                                    <h4 class="card-title">
                                        {{ $npo_info->blue_card_title }}
                                    </h4>
                                    <div class="card-description">
                                        {!! nl2br(e(trans($npo_info->blue_card_body))) !!}
                                    </div>
    							</div>
    						</div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="card card-blog">
    							<div class="card-image">
    							    @if($npo_info->code2)
    								{{--<a href="#pablo">--}}
    									<img class="img" src="{{ url('/') }}/img/project_code//{{$npo_info->code2}}">
    								{{--</a>--}}
    							    @endif
                                </div>
    							<div class="card-body text-center">
                                    <h4 class="card-title">
                                        {{ $npo_info->green_card_title }}
                                    </h4>
                                    <div class="card-description">
                                        {!! nl2br(e(trans($npo_info->green_card_body))) !!}
                                    </div>
    							</div>
    						</div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="card card-blog">
    							<div class="card-image">
    							    @if($npo_info->code3)
    								{{--<a href="#pablo">--}}
									<img class="img" src="{{ url('/') }}/img/project_code/{{$npo_info->code3}}">
    								{{--</a>--}}
    								@endif
                                </div>
    							<div class="card-body text-center">
                                    <h4 class="card-title">
                                        {{ $npo_info->yellow_card_title }}
                                    </h4>
                                    <div class="card-description">
                                        {!! nl2br(e(trans($npo_info->yellow_card_body))) !!}
                                    </div>
    							</div>
    						</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{--     *********    TEAM     *********      --}}
        <div class="cd-section section-white" id="teams">
            <div class="container">
                <div class="space-top"></div>
                <h2 class="title">メンバー</h2>
                <div class="row">
                    @for ($i = 1; $i <= 10; $i++)
                        <?php $member = "member".$i ?>
                        @if (( $npo_info->$member ) != "")
                        <?php $member_pos = "member".$i."_pos" ?>
                        <?php $member_detail = "member".$i."_detail" ?>
                        <div class="col-md-6">
                            <div class="card card-profile card-plain">
                                <div class="row">
                                    {{-- 画像 --}}
                                    <div class="col-md-5">
                                        <div class="card-img-top">
                                            {{--<a href="#pablo">--}}
                                                @if($personal_info_image_id[$i])
                                                    <img class="img" src="{{ !$personal_info_image_id[$i] ? 'img/placeholder.jpg' : '/img/personal_info/'.$personal_info_image_id[$i]}}"/>
                                                @else
                                                <img class="img" src="{{ url('/') }}/../img/placeholder.jpg"/>
                                                @endif
                                            {{--</a>--}}
                                        </div>
                                    </div>
                                    {{-- 詳細 --}}
                                    <div class="col-md-7">
                                        <div class="card-body text-left">
                                            <h4 class="card-title">{{ $npo_info->$member }}</h4>
                                            @if($npo_info->$member_pos)
                                            <h6 class="card-category">{{ $npo_info->$member_pos }}</h6>
                                            @else
                                            <h6 class="card-category">{{ $personal_info_company_name[$i] }}</h6>
                                            @endif
                                            <p class="card-description">
                                                {{ $personal_info_description[$i] }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                    @endfor
                </div>
            </div>
        </div>
    </div>
    {{--
    @if($mail_message == "")
    <div class="section section-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto text-center">
                    <h2 class="title">{!! nl2br(e(trans($npo_info->subtitle))) !!}に関するお問い合わせ</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 ml-auto mr-auto text-center">
                    <form action="/{{$npo_info->npo_name}}/send_mail" method="POST" class="contact">
                        {!! csrf_field() !!}
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="Name（お名前）" value="{{!Auth::guest() ? Auth::user()->name : ''}}">
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="email" class="form-control" placeholder="Email（メールアドレス）" value="{{!Auth::guest() ? Auth::user()->email : ''}}">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                <input type="text" name="title" class="form-control" placeholder="Subject（タイトル）" value="{!! nl2br(e(trans($npo_info->subtitle))) !!}に関して">
                            </div>
                        </div>
                        <br>
                        <textarea class="form-control" name="message" placeholder="Message（お問い合わせ内容）" rows="7" ></textarea>
                        <br>
                        <div class="row">
                            <div class="col-md-6 ml-auto mr-auto">
                                <button type="submit" class="btn btn-primary btn-block btn-round">Send </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @else
        {{$mail_message}}
    @endif
    --}}<br>
</div>
@endsection
@include('layouts.footer')