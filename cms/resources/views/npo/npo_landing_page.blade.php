@extends('layouts.common_nav_lp')
@include('layouts.head')
@include('layouts.script')
@include('layouts.nav_lp')
@section('content')
    {{-- description area --}}
    {{-- <div class="container tim-container"> --}}
    <div id="description-areas">
        {{--     *********    HEADERS     *********      --}}
        <div class="cd-section" id="headers">
            <!-- <div class="page-header" style="background-image: linear-gradient(red, yellow, green);"> -->
            <div class="page-header" style="background-image: url('https://images.unsplash.com/photo-1486310662856-32058c639c65?dpr=2&auto=format&fit=crop&w=1500&h=1125&q=80&cs=tinysrgb&crop=');">
                <div class="filter"></div>
                <div class="content-center">
                    <div class="container">
                        <div class="row">
                            @if (( $npo_info->embed_youtube ) != "")
                            <div class="col-md-5">
                                <div class="iframe-container">
                                    <iframe src="https://www.youtube.com/embed/{{ $npo_info->embed_youtube }}?modestbranding=1&autohide=1&showinfo=0" frameborder="0" allowfullscreen height="250"></iframe>
                                    <!--<iframe src="https://www.youtube.com/embed/xdgqBFFQXKY?modestbranding=1&autohide=1&showinfo=0" frameborder="0" allowfullscreen height="250"></iframe>-->
                                </div>
                            </div>
                            <div class="col-md-6 ml-auto">
                            @else
                            <div class="col-md-12 ml-auto">
                            @endif
                                <h2 class="title">{!! nl2br(e(trans($npo_info->subtitle))) !!}</h2>
                                <h5 class="description">{!! nl2br(e(trans($npo_info->title))) !!}</h5>
                                <br>
                                @if(( $npo_info->support_price ) != 0)
                                <div>
                                    <a href="#support" class="btn btn-danger">
                                        支援する
                                    </a>
                                </div>
                                <br>
                                <h6>目標金額：{{$npo_info->support_price}}円（{{$parcentage}}％達成）</h6>
                                <h6>現在：{{$currency_data}}円 ／ 寄付数：{{$buyer_data}}</h6>
                                <br>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-success" role="progressbar" style="width: {{$parcentage}}%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="0">
                                    </div>
                                </div>
                                <br>
                                <!--<div class="progress">-->
                                <!--    <div class="progress-bar progress-bar-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>-->
                                <!--</div>-->
                                <!--<br/>-->
                                <!--<div class="progress">-->
                                <!--    <div class="progress-bar progress-bar-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>-->
                                <!--</div>-->
                                <!--<br/>-->
                                <!--<div class="progress">-->
                                <!--    <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>-->
                                <!--    <div class="progress-bar progress-bar-success" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>-->
                                <!--    <div class="progress-bar progress-bar-warning" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>-->
                                <!--</div>-->
                                <!--<br>-->
                                @endif
                                
                                <a href="https://twitter.com/intent/tweet?text={!! $npo_info->subtitle !!} {!! $npo_info->title !!}の支援のために。ひとりでも多くの方に広めてください♪%20-%20FSHARP%20%20https://fsharp.me/npo/{{ $npo_info->npo_name }}" class="btn btn-round btn-twitter">
                                    <!--<i class="twitter-share-button" data-href="https://fsharp.me/npo/{{ $npo_info->npo_name }}" aria-hidden="true" data-text="{{ $npo_info->subtitle }} {{ $npo_info->title }}の支援のために。ひとりでも多くの方に広めてください♪%20-%20F#%20%20https://fsharp.me/npo/{{ $npo_info->npo_name }}" data-show-count="true" data-dnt="true"></i>Tweet-->
                                    <i class="fa fa-twitter" aria-hidden="true"></i> Tweet 
                                </a>
                                <!--<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Ffsharp.me%2F&amp;src=sdkpreparse" class="btn btn-round btn-facebook">-->
                                    
                                <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Ffsharp.me/npo/{{ $npo_info->npo_name }}%2F&amp;src=sdkpreparse" class="btn btn-round btn-facebook" data-layout="button_count">
                                    <i class="fb-share-button" data-href="https://fsharp.me/npo/{{ $npo_info->npo_name }}" data-layout="button_count" data-size="small" data-mobile-iframe="true" aria-hidden="true"></i>
                                <!-- シェアボタンこみ -->
                                <!--<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Ffsharp.me%2F&amp;src=sdkpreparse" class="btn btn-round btn-facebook">-->
                                <!--    <i class="fb-like" data-href="https://fsharp/npo/{{ $npo_info->npo_name }}" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"></i>-->
                                </a>
                                
                                
                                <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                                
                                
                                
                                <script>(function(d, s, id) {
                                  var js, fjs = d.getElementsByTagName(s)[0];
                                  if (d.getElementById(id)) return;
                                  js = d.createElement(s); js.id = id;
                                  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0&appId=1545608625538119&autoLogAppEvents=1';
                                  fjs.parentNode.insertBefore(js, fjs);
                                }(document, 'script', 'facebook-jssdk'));</script>
                                
                                <!--<a class="fb-xfbml-parse-ignore">-->
                                
                                
                                <!--<a href="" class="btn btn-round btn-facebook">-->
                                <!--    <i class="fa fa-facebook" aria-hidden="true"></i> Share &middot; 1-->
                                <!--</a>-->
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
                        <h2 class="title">支援方法を選択</h2>
                        <div class="choose-plan">
                            <ul class="nav nav-pills nav-pills-danger" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#personal" id="#aa" role="tab">{{ $npo_info->title }}を支援</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#commercial" id="bb" role="tab">法人の方</a>
                                </li>
                            </ul>
                        </div>
                        <br/>
                        <div class="tab-content text-center" >
                            
                            <p>hogehoge
                            <!--    F♯のWebサービスは、全て仮想通貨でNPOに支援（寄付）を行います。支援には2種類あります。<br>-->
                            <!--    【コイン】個人や法人（学生、社会人、株式会社、一般社団法人、NPO法人など）は、自由にコインを購入することができます。-->
                            <!--    コインと引き換えに、特典を使用することができます。また、コインを持っているだけで支援をしている証明になったり、何かリターンや優待を得ることができる場合もございますので、そちらもお楽しみください。<br>-->
                            <!--    【アドバンスト】NPOのオリジナル仮想通貨（トークン）をご購入できます。自由にブロックチェーン上で、NPOの価値を売買することが可能です。-->
                            </p>
                            @if (( $npo_info->code1 ) == "")
                            <p class="description text-gray">
                                <!--【アドバンスト】独自のNPOトークンで運用したい場合は、別途ご相談ください。-->
                            </p>
                            @endif
                        </div>
                    </div>{{ auth()->check() }}

                    <div class="col-md-7 ml-auto" id="support">
                        <div class="tab-content text-center" >
                            <div class="tab-pane active" id="personal" role="tabpanel">
                                <div class="space-top"></div>
                                <div class="row">
                                    {{-- 支援する --}}
                                    <div class="col-md-6">
                                        <div class="card card-pricing">
                                            <div class="card-body">
                                                <h6 class="card-category text-danger">{{ $npo_info->title }}を支援</h6>
                                                <h1 class="card-title">{{ $npo_info->support_amount }}円</h1>
                                                <ul>
                                                    <li><b>使用目的: {{ $npo_info->support_purpose or '活動費' }}</b></li>
                                                    <li><b>リターン: {{ $npo_info->support_contents or '未設定' }}</b></li>
                                                    <li><b>特典利用期限: {{ Carbon\Carbon::parse($npo_info->support_contents_detail)->format('Y年m月d日') }}</b></li>
                                                    {{--<li>※ご購入は、クレジットカードかビットコイン決済です。</li>--}}
                                                    {{--@if (Auth::guest())--}}
                                                    {{--<li><a href="{{ url('/login') }}" class="btn btn-danger btn-round">ログイン</a></li>--}}
                                                    {{--@else--}}
                                                    {{--    @if (( $npo_info->code2 ) != "")--}}
                                                    {{--    <li><a href="{{ $npo_info->code2 }}" target="_blank" class="btn btn-danger btn-round">日本円で支援する</a></li>--}}
                                                    {{--    <li><a href="https://paymo.life/shops/4c67fab166/n0bisuke_dev10" class="btn btn-danger btn-round">ビットコインで支援する</a></li>--}}
                                                    {{--    @else--}}
                                                    {{--    <li><p class="btn btn-success btn-round">準備中</p></li>--}}
                                                    {{--    @endif--}}
                                                    {{--@endif--}}
                                                </ul>
                                                @if (Auth::guest())
                                                <a href="{{ url('/login') }}" class="btn btn-danger btn-round">ログイン</a>
                                                @else
                                                    <form action="/npo/{{$npo_info->npo_name}}/payment" method="POST">
                                                        {!! csrf_field() !!}
                                                        <script
                                                            src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                                            data-key="pk_test_tfM2BWAFRlYSPO939BW5jIj5"
                                                            data-amount="{{ $npo_info->support_amount*1.036 }}"
                                                            data-name="{{ $npo_info->title }}"
                                                            data-email="{{Auth::user()->email}}"
                                                            data-description="クレジット手数料：3.6%"
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
                                                            
                                                    {{--
                                                    @if (( $npo_info->code2 ) != "")
                                                    <a href="https://paymo.life/shops/4c67fab166/{{ $npo_info->npo_name }}" target="_blank" class="btn btn-danger btn-round">日本円決済</a>
                                                    <a href="{{ $npo_info->code2 }}" class="btn btn-danger btn-round">ビットコイン決済</a>
                                                    @else
                                                    <p class="btn btn-success btn-round">プロジェクト準備中</p>
                                                    @endif
                                                     --}}
                                                     
                                                @endif
                                                {{--
                                                <style type="text/css">
                                                button.stripe-button-el,
                                                button.stripe-button-el>span {
                                                  background-color: #c50067 !important;
                                                  background-image: none;
                                                }
                                                </style>
                                                --}}
                                            </div>
                                        </div>
                                    </div>
                                    {{--よう編集！！--}}
                                    {{--<div class="col-md-6">--}}
                                    {{--    <div class="card card-pricing" data-color="orange">--}}
                                    {{--        <div class="card-body">--}}
                                    {{--            <h6 class="card-category text-success">{{ $npo_info->title }}の欲しいものリスト</h6>--}}
                                                {{--<h3 class="card-title">欲しいものリスト</h3>--}}
                                    {{--            <ul>--}}
                                    {{--                <li>絵本 <b>100冊</b></li>--}}
                                    {{--                <li>パソコン <b>10個</b></li>--}}
                                    {{--                <li>スマートフォン <b>10個</b></li>--}}
                                    {{--                <li>家庭用冷蔵庫 <b>1個</b></li>--}}
                                    {{--            </ul>--}}
                                    {{--            <a href="https://wallet.indiesquare.me/" class="btn btn-neutral btn-round">支援する</a>--}}
                                    {{--        </div>--}}
                                    {{--    </div>--}}
                                    {{--</div>--}}
                                    <div class="col-md-6">
                                        <div class="card card-pricing" data-color="orange">
                                            <div class="card-body">
                                                <br><br><br><br><br><br><br><br><br><br><br><br><br>
                                    <!--            <h6 class="card-category text-success">ビットコインをお持ちでない方</h6>-->
                                    <!--            <h3 class="card-title">開設 ¥0</h3>-->
                                    <!--            <div>-->
                                    <!--                {{-- 現在BitFlyer新規募集停止 --}}-->
                                    <!--                {{--<a href="https://bitflyer.jp?bf=hqazqhpu" target="_blank"><img src="https://bitflyer.jp/Images/Affiliate/affi_06_300x250.gif" alt="bitFlyer ビットコインを始めるなら安心・安全な取引所で"></a>--}}-->
                                    <!--                <a href="https://zaif.jp/?ac=ha8meb0fu4 " target="_blank"><img src="https://bitflyer.jp/Images/Affiliate/affi_06_300x250.gif" alt="bitFlyer ビットコインを始めるなら安心・安全な取引所で"></a>-->
                                    <!--            </div>-->
                                            </div>
                                        </div>
                                    </div>
                                    {{--よう編集！！--}}
                                </div>
                            </div>

                            <div class="tab-pane" id="commercial" role="tabpanel">
                                <div class="space-top"></div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card card-pricing">
                                            <div class="card-body">
                                                @if (( $npo_info->code1 ) == "")
                                                <h6 class="card-category text-danger">F#の運営を支援する</h6>
                                                <h1 class="card-title">¥100</h1>
                                                <ul>
                                                    <li>F#の仮想通貨(トークン)です。</li>
                                                    <li><b>ブロックチェーンで管理しています。</b></li>
                                                    <li>XCP上で<b>売買取引</b>も可能です。</li>
                                                    <li>※価格は今後、上下する可能性あり</li>
                                                </ul>
                                                <a class="indiesquare-tip-button btn btn-danger btn-round" href="//widget.indiesquare.me/tip/abc690e1a12d9e88" target="_blank" data-vid="abc690e1a12d9e88" data-domain="indiesquare.me">
                                                    F#のトークンをもらう
                                                </a>
                                                @else
                                                <h6 class="card-category text-danger">{{ $npo_info->title }}の運営を支援する</h6>
                                                <h1 class="card-title">¥100</h1>
                                                <ul>
                                                    <li>{{ $npo_info->title }}の仮想通貨(トークン)です。</li>
                                                    <li><b>ブロックチェーンで管理しています。</b></li>
                                                    <li>XCP上で<b>売買取引</b>も可能です。</li>
                                                    <li>※価格は今後、上下する可能性あり</li>
                                                </ul>
                                                <a class="indiesquare-tip-button btn btn-danger btn-round" href="//widget.indiesquare.me/tip/{{ $npo_info->code1 }}" target="_blank" data-vid="abc690e1a12d9e88" data-domain="indiesquare.me">
                                                    {{ $npo_info->title }}のトークンをもらう
                                                </a>
                                                @endif
                                                {{-- <a href="//widget.indiesquare.me/tip/abc690e1a12d9e88" class="btn btn-warning btn-round">
                                                    
                                                </a> --}}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="card card-pricing" data-color="orange">
                                            <div class="card-body">
                                                <h6 class="card-category text-success">F#トークン購入のためにXCPの購入が必要です。</h6>
                                                <h1 class="card-title">¥0</h1>
                                                <ul>
                                                    <li><b>1.</b> トークンが買えるアプリを<a href="https://wallet.indiesquare.me/">入手</a></li>
                                                    <li><b>2.</b> ビットコインを入金します。</li>
                                                    <li><b>3.</b> XCP(カウンターパーティ)で検索</li>
                                                    <li><b>4.</b> BTCをXCPに変える取引開始</li>
                                                </ul>
                                                <a href="https://wallet.indiesquare.me/" class="btn btn-neutral btn-round">ダウンロード(無料)</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
     {{--     *********    TEAM     *********      --}}
    <div class="nav-tabs-navigation">
    </div>
    <div id="my-tab-content" class="tab-content text-center section-white">
        <div class="cd-section section-white" id="intro-cards">
            <div class="container">
                <div class="row coloured-cards">
                    <div class="col-md-4 col-sm-6">
                        <div class="card card-just-text" data-background="color" data-color="blue">
                            <div class="card-body">
                                <h6 class="card-category">{{ $npo_info->blue_card_title }}</h6>
                                <p class="card-description">
                                    {!! nl2br(e(trans($npo_info->blue_card_body))) !!} 
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="card card-just-text" data-background="color" data-color="green">
                            <div class="card-body">
                                <h6 class="card-category">{{ $npo_info->green_card_title }}</h6>
                                <p class="card-description">
                                    {!! nl2br(e(trans($npo_info->green_card_body))) !!} 
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="card card-just-text" data-background="color" data-color="yellow">
                            <div class="card-body">
                                <h6 class="card-category">{{ $npo_info->yellow_card_title }}</h6>
                                {{-- <h4 class="card-title"><a href="#paper-kit">Yellow Card</a></h4> --}}
                                <p class="card-description"> 
                                    {!! nl2br(e(trans($npo_info->yellow_card_body))) !!} 
                                </p>
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
                    @if (( $npo_info->member1 ) != "")
                    {{-- 一人目 --}}
                    <div class="col-md-6">
                        <div class="card card-profile card-plain">
                            <div class="row">
                                {{-- 画像 --}}
                                <div class="col-md-5">
                                    <div class="card-img-top">
                                        <a href="#pablo">
                                            @if($personal_info1)
                                            <img class="img" src="{{ url('/') }}/../images/{{$personal_info1->image_id}}"/>
                                            @else
                                            <img class="img" src="{{ url('/') }}/../img/placeholder.jpg"/>
                                            @endif
                                        </a>
                                    </div>
                                </div>
                                {{-- 詳細 --}}
                                <div class="col-md-7">
                                    <div class="card-body text-left">
                                        <h4 class="card-title">{{ $npo_info->member1 }}</h4>
                                        <h6 class="card-category">{{ $npo_info->member1_pos }}</h6>
                                        <p class="card-description">
                                            {{ $npo_info->member1_detail }}
                                        </p>
                                        <div class="card-footer pull-left">
                                            @if (( $npo_info->member1_twitter ) != "")
                                            <a href="https://twitter.com/{{ $npo_info->member1_twitter }}" target="_blank" class="btn btn-just-icon btn-link btn-twitter"><i class="fa fa-twitter"></i></a>
                                            @endif
                                            @if (( $npo_info->member1_facebook ) != "")
                                            <a href="https://www.facebook.com/{{ $npo_info->member1_facebook }}" target="_blank" class="btn btn-just-icon btn-link btn-facebook"><i class="fa fa-facebook"></i></a>
                                            @endif
                                            @if (( $npo_info->member1_linkedin ) != "")
                                            <a href="https://www.linkedin.com/in/{{ $npo_info->member1_linkedin }}" target="_blank" class="btn btn-just-icon btn-link btn-linkedin"><i class="fa fa-linkedin"></i></a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    @if (( $npo_info->member2 ) != "")
                    {{-- 二人目 --}}
                    <div class="col-md-6">
                        <div class="card card-profile card-plain">
                            <div class="row">
                                {{-- 画像 --}}
                                <div class="col-md-5">
                                    <div class="card-img-top">
                                        <a href="#pablo">
                                            @if($personal_info2)
                                            <img class="img" src="{{ url('/') }}/../images/{{$personal_info2->image_id}}"/>
                                            @else
                                            <img class="img" src="{{ url('/') }}/../img/placeholder.jpg"/>
                                            @endif
                                        </a>
                                    </div>
                                </div>
                                {{-- 詳細 --}}
                                <div class="col-md-7">
                                    <div class="card-body text-left">
                                        <h4 class="card-title">{{ $npo_info->member2 }}</h4>
                                        <h6 class="card-category">{{ $npo_info->member2_pos }}</h6>
                                        <p class="card-description">
                                            {{ $npo_info->member2_detail }}
                                        </p>
                                        <div class="card-footer pull-left">
                                            @if (( $npo_info->member2_twitter ) != "")
                                            <a href="https://twitter.com/{{ $npo_info->member2_twitter }}" target="_blank" class="btn btn-just-icon btn-link btn-twitter"><i class="fa fa-twitter">{{ $npo_info->member2_twitter }}</i></a>
                                            @endif
                                            @if (( $npo_info->member2_facebook ) != "")
                                            <a href="https://www.facebook.com/{{ $npo_info->member2_facebook }}" target="_blank" class="btn btn-just-icon btn-link btn-facebook"><i class="fa fa-facebook">{{ $npo_info->member2_facebook }}</i></a><br>
                                            @endif
                                            @if (( $npo_info->member2_linkedin ) != "")
                                            <a href="https://www.linkedin.com/in/{{ $npo_info->member2_linkedin }}" target="_blank" class="btn btn-just-icon btn-link btn-linkedin"><i class="fa fa-linkedin">{{ $npo_info->member2_linkedin }}</i></a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    
                    {{-- 三人目 --}}
                    @if (( $npo_info->member3 ) != "")
                    <div class="col-md-6">
                        <div class="card card-profile card-plain">
                            <div class="row">
                                {{-- 画像 --}}
                                <div class="col-md-5">
                                    <div class="card-img-top">
                                        <a href="#pablo">
                                            @if($personal_info3)
                                            <img class="img" src="{{ url('/') }}/../images/{{$personal_info3->image_id}}"/>
                                            @else
                                            <img class="img" src="{{ url('/') }}/../img/placeholder.jpg"/>
                                            @endif 
                                        </a>
                                    </div>
                                </div>
                                {{-- 詳細 --}}
                                <div class="col-md-7">
                                    <div class="card-body text-left">
                                        <h4 class="card-title">{{ $npo_info->member3 }}</h4>
                                        <h6 class="card-category">{{ $npo_info->member3_pos }}</h6>
                                        <p class="card-description">
                                            {{ $npo_info->member3_detail }}
                                        </p>
                                        <div class="card-footer pull-left">
                                            @if (( $npo_info->member3_twitter ) != "")
                                            <a href="https://twitter.com/{{ $npo_info->member3_twitter }}" target="_blank" class="btn btn-just-icon btn-link btn-twitter"><i class="fa fa-twitter"></i></a>
                                            @endif
                                            @if (( $npo_info->member3_facebook ) != "")
                                            <a href="https://www.facebook.com/{{ $npo_info->member3_facebook }}" target="_blank" class="btn btn-just-icon btn-link btn-facebook"><i class="fa fa-facebook"></i></a>
                                            @endif
                                            @if (( $npo_info->member3_linkedin ) != "")
                                            <a href="https://www.linkedin.com/in/{{ $npo_info->member3_linkedin }}" target="_blank" class="btn btn-just-icon btn-link btn-linkedin"><i class="fa fa-linkedin"></i></a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
    
                    {{-- 四人目 --}}
                    @if (( $npo_info->member4 ) != "")
                    <div class="col-md-6">
                        <div class="card card-profile card-plain">
                            <div class="row">
                                {{-- 画像 --}}
                                <div class="col-md-5">
                                    <div class="card-img-top">
                                        <a href="#pablo">
                                            @if($personal_info4)
                                            <img class="img" src="{{ url('/') }}/../images/{{$personal_info4->image_id}}"/>
                                            @else
                                            <img class="img" src="{{ url('/') }}/../img/placeholder.jpg"/>
                                            @endif
                                        </a>
                                    </div>
                                </div>
                                {{-- 詳細 --}}
                                <div class="col-md-7">
                                    <div class="card-body text-left">
                                        <h4 class="card-title">{{ $npo_info->member4 }}</h4>
                                        <h6 class="card-category">{{ $npo_info->member4_pos }}</h6>
                                        <p class="card-description">
                                            {{ $npo_info->member4_detail }}
                                        </p>
                                        <div class="card-footer pull-left">
                                            @if (( $npo_info->member4_twitter ) != "")
                                            <a href="https://twitter.com/{{ $npo_info->member4_twitter }}" target="_blank" class="btn btn-just-icon btn-link btn-twitter"><i class="fa fa-twitter"></i></a>
                                            @endif
                                            @if (( $npo_info->member4_facebook ) != "")
                                            <a href="https://www.facebook.com/{{ $npo_info->member4_facebook }}" target="_blank" class="btn btn-just-icon btn-link btn-facebook"><i class="fa fa-facebook"></i></a>
                                            @endif
                                            @if (( $npo_info->member4_linkedin ) != "")
                                            <a href="https://www.linkedin.com/in/{{ $npo_info->member4_linkedin }}" target="_blank" class="btn btn-just-icon btn-link btn-linkedin"><i class="fa fa-linkedin"></i></a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    
                    {{-- ５人目 --}}
                    @if (( $npo_info->member5 ) != "")
                    <div class="col-md-6">
                        <div class="card card-profile card-plain">
                            <div class="row">
                                {{-- 画像 --}}
                                <div class="col-md-5">
                                    <div class="card-img-top">
                                        <a href="#pablo">
                                            @if($personal_info5)
                                            <img class="img" src="{{ url('/') }}/../images/{{$personal_info5->image_id}}"/>
                                            @else
                                            <img class="img" src="{{ url('/') }}/../img/placeholder.jpg"/>
                                            @endif
                                        </a>
                                    </div>
                                </div>
                                {{-- 詳細 --}}
                                <div class="col-md-7">
                                    <div class="card-body text-left">
                                        <h4 class="card-title">{{ $npo_info->member5 }}</h4>
                                        <h6 class="card-category">{{ $npo_info->member5_pos }}</h6>
                                        <p class="card-description">
                                            {{ $npo_info->member5_detail }}
                                        </p>
                                        <div class="card-footer pull-left">
                                            @if (( $npo_info->member5_twitter ) != "")
                                            <a href="https://twitter.com/{{ $npo_info->member5_twitter }}" target="_blank" class="btn btn-just-icon btn-link btn-twitter"><i class="fa fa-twitter"></i></a>
                                            @endif
                                            @if (( $npo_info->member5_facebook ) != "")
                                            <a href="https://www.facebook.com/{{ $npo_info->member5_facebook }}" target="_blank" class="btn btn-just-icon btn-link btn-facebook"><i class="fa fa-facebook"></i></a>
                                            @endif
                                            @if (( $npo_info->member5_linkedin ) != "")
                                            <a href="https://www.linkedin.com/in/{{ $npo_info->member5_linkedin }}" target="_blank" class="btn btn-just-icon btn-link btn-linkedin"><i class="fa fa-linkedin"></i></a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    
                    {{-- 6人目 --}}
                    @if (( $npo_info->member6 ) != "")
                    <div class="col-md-6">
                        <div class="card card-profile card-plain">
                            <div class="row">
                                {{-- 画像 --}}
                                <div class="col-md-5">
                                    <div class="card-img-top">
                                        <a href="#pablo">
                                            @if($personal_info6)
                                            <img class="img" src="{{ url('/') }}/../images/{{$personal_info6->image_id}}"/>
                                            @else
                                            <img class="img" src="{{ url('/') }}/../img/placeholder.jpg"/>
                                            @endif
                                        </a>
                                    </div>
                                </div>
                                {{-- 詳細 --}}
                                <div class="col-md-7">
                                    <div class="card-body text-left">
                                        <h4 class="card-title">{{ $npo_info->member6 }}</h4>
                                        <h6 class="card-category">{{ $npo_info->member6_pos }}</h6>
                                        <p class="card-description">
                                            {{ $npo_info->member6_detail }}
                                        </p>
                                        <div class="card-footer pull-left">
                                            @if (( $npo_info->member6_twitter ) != "")
                                            <a href="https://twitter.com/{{ $npo_info->member6_twitter }}" target="_blank" class="btn btn-just-icon btn-link btn-twitter"><i class="fa fa-twitter"></i></a>
                                            @endif
                                            @if (( $npo_info->member6_facebook ) != "")
                                            <a href="https://www.facebook.com/{{ $npo_info->member6_facebook }}" target="_blank" class="btn btn-just-icon btn-link btn-facebook"><i class="fa fa-facebook"></i></a>
                                            @endif
                                            @if (( $npo_info->member6_linkedin ) != "")
                                            <a href="https://www.linkedin.com/in/{{ $npo_info->member6_linkedin }}" target="_blank" class="btn btn-just-icon btn-link btn-linkedin"><i class="fa fa-linkedin"></i></a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    
                    {{-- 7人目 --}}
                    @if (( $npo_info->member7 ) != "")
                    <div class="col-md-6">
                        <div class="card card-profile card-plain">
                            <div class="row">
                                {{-- 画像 --}}
                                <div class="col-md-5">
                                    <div class="card-img-top">
                                        <a href="#pablo">
                                            @if($personal_info7)
                                            <img class="img" src="{{ url('/') }}/../images/{{$personal_info7->image_id}}"/>
                                            @else
                                            <img class="img" src="{{ url('/') }}/../img/placeholder.jpg"/>
                                            @endif
                                        </a>
                                    </div>
                                </div>
                                {{-- 詳細 --}}
                                <div class="col-md-7">
                                    <div class="card-body text-left">
                                        <h4 class="card-title">{{ $npo_info->member7 }}</h4>
                                        <h6 class="card-category">{{ $npo_info->member7_pos }}</h6>
                                        <p class="card-description">
                                            {{ $npo_info->member7_detail }}
                                        </p>
                                        <div class="card-footer pull-left">
                                            @if (( $npo_info->member7_twitter ) != "")
                                            <a href="https://twitter.com/{{ $npo_info->member7_twitter }}" target="_blank" class="btn btn-just-icon btn-link btn-twitter"><i class="fa fa-twitter"></i></a>
                                            @endif
                                            @if (( $npo_info->member7_facebook ) != "")
                                            <a href="https://www.facebook.com/{{ $npo_info->member7_facebook }}" target="_blank" class="btn btn-just-icon btn-link btn-facebook"><i class="fa fa-facebook"></i></a>
                                            @endif
                                            @if (( $npo_info->member7_linkedin ) != "")
                                            <a href="https://www.linkedin.com/in/{{ $npo_info->member7_linkedin }}" target="_blank" class="btn btn-just-icon btn-link btn-linkedin"><i class="fa fa-linkedin"></i></a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    
                    {{-- 8人目 --}}
                    @if (( $npo_info->member8 ) != "")
                    <div class="col-md-6">
                        <div class="card card-profile card-plain">
                            <div class="row">
                                {{-- 画像 --}}
                                <div class="col-md-5">
                                    <div class="card-img-top">
                                        <a href="#pablo">
                                            @if($personal_info8)
                                            <img class="img" src="{{ url('/') }}/../images/{{$personal_info8->image_id}}"/>
                                            @else
                                            <img class="img" src="{{ url('/') }}/../img/placeholder.jpg"/>
                                            @endif
                                        </a>
                                    </div>
                                </div>
                                {{-- 詳細 --}}
                                <div class="col-md-7">
                                    <div class="card-body text-left">
                                        <h4 class="card-title">{{ $npo_info->member8 }}</h4>
                                        <h6 class="card-category">{{ $npo_info->member8_pos }}</h6>
                                        <p class="card-description">
                                            {{ $npo_info->member8_detail }}
                                        </p>
                                        <div class="card-footer pull-left">
                                            @if (( $npo_info->member8_twitter ) != "")
                                            <a href="https://twitter.com/{{ $npo_info->member8_twitter }}" target="_blank" class="btn btn-just-icon btn-link btn-twitter"><i class="fa fa-twitter"></i></a>
                                            @endif
                                            @if (( $npo_info->member8_facebook ) != "")
                                            <a href="https://www.facebook.com/{{ $npo_info->member8_facebook }}" target="_blank" class="btn btn-just-icon btn-link btn-facebook"><i class="fa fa-facebook"></i></a>
                                            @endif
                                            @if (( $npo_info->member8_linkedin ) != "")
                                            <a href="https://www.linkedin.com/in/{{ $npo_info->member8_linkedin }}" target="_blank" class="btn btn-just-icon btn-link btn-linkedin"><i class="fa fa-linkedin"></i></a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    
                    {{-- 9人目 --}}
                    @if (( $npo_info->member9 ) != "")
                    <div class="col-md-6">
                        <div class="card card-profile card-plain">
                            <div class="row">
                                {{-- 画像 --}}
                                <div class="col-md-5">
                                    <div class="card-img-top">
                                        <a href="#pablo">
                                            @if($personal_info9)
                                            <img class="img" src="{{ url('/') }}/../images/{{$personal_info9->image_id}}"/>
                                            @else
                                            <img class="img" src="{{ url('/') }}/../img/placeholder.jpg"/>
                                            @endif
                                        </a>
                                    </div>
                                </div>
                                {{-- 詳細 --}}
                                <div class="col-md-7">
                                    <div class="card-body text-left">
                                        <h4 class="card-title">{{ $npo_info->member9 }}</h4>
                                        <h6 class="card-category">{{ $npo_info->member9_pos }}</h6>
                                        <p class="card-description">
                                            {{ $npo_info->member9_detail }}
                                        </p>
                                        <div class="card-footer pull-left">
                                            @if (( $npo_info->member9_twitter ) != "")
                                            <a href="https://twitter.com/{{ $npo_info->member9_twitter }}" target="_blank" class="btn btn-just-icon btn-link btn-twitter"><i class="fa fa-twitter"></i></a>
                                            @endif
                                            @if (( $npo_info->member9_facebook ) != "")
                                            <a href="https://www.facebook.com/{{ $npo_info->member9_facebook }}" target="_blank" class="btn btn-just-icon btn-link btn-facebook"><i class="fa fa-facebook"></i></a>
                                            @endif
                                            @if (( $npo_info->member9_linkedin ) != "")
                                            <a href="https://www.linkedin.com/in/{{ $npo_info->member9_linkedin }}" target="_blank" class="btn btn-just-icon btn-link btn-linkedin"><i class="fa fa-linkedin"></i></a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    
                    {{-- 10人目 --}}
                    @if (( $npo_info->member10 ) != "")
                    <div class="col-md-6">
                        <div class="card card-profile card-plain">
                            <div class="row">
                                {{-- 画像 --}}
                                <div class="col-md-5">
                                    <div class="card-img-top">
                                        <a href="#pablo">
                                            @if($personal_info10)
                                            <img class="img" src="{{ url('/') }}/../images/{{$personal_info10->image_id}}"/>
                                            @else
                                            <img class="img" src="{{ url('/') }}/../img/placeholder.jpg"/>
                                            @endif
                                        </a>
                                    </div>
                                </div>
                                {{-- 詳細 --}}
                                <div class="col-md-7">
                                    <div class="card-body text-left">
                                        <h4 class="card-title">{{ $npo_info->member10 }}</h4>
                                        <h6 class="card-category">{{ $npo_info->member10_pos }}</h6>
                                        <p class="card-description">
                                            {{ $npo_info->member10_detail }}
                                        </p>
                                        <div class="card-footer pull-left">
                                            @if (( $npo_info->member10_twitter ) != "")
                                            <a href="https://twitter.com/{{ $npo_info->member10_twitter }}" target="_blank" class="btn btn-just-icon btn-link btn-twitter"><i class="fa fa-twitter"></i></a>
                                            @endif
                                            @if (( $npo_info->member10_facebook ) != "")
                                            <a href="https://www.facebook.com/{{ $npo_info->member10_facebook }}" target="_blank" class="btn btn-just-icon btn-link btn-facebook"><i class="fa fa-facebook"></i></a>
                                            @endif
                                            @if (( $npo_info->member10_linkedin ) != "")
                                            <a href="https://www.linkedin.com/in/{{ $npo_info->member10_linkedin }}" target="_blank" class="btn btn-just-icon btn-link btn-linkedin"><i class="fa fa-linkedin"></i></a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>

    </div>
    
        <div class="section section-gray">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 ml-auto mr-auto text-center">
                        <h2 class="title">{!! nl2br(e(trans($npo_info->subtitle))) !!}に関してお問い合わせ</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 ml-auto mr-auto text-center">
                        <form class="contact">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Name（お名前）" value="{{!Auth::guest() ? Auth::user()->name : ''}}">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Email（メールアドレス）" value="{{!Auth::guest() ? Auth::user()->email : ''}}">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="text" class="form-control" placeholder="Subject（タイトル）" value="{!! nl2br(e(trans($npo_info->subtitle))) !!}に関して">
                                </div>
                            </div>
                            <br>
                            <textarea class="form-control" placeholder="Message（お問い合わせ内容）" rows="7" ></textarea>
                            <br>
                            <div class="row">
                                <div class="col-md-6 ml-auto mr-auto">
                                    <button class="btn btn-primary btn-block btn-round">Send </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection
@include('layouts.footer')