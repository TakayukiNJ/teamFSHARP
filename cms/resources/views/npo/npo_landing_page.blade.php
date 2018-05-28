@extends('layouts.common_nav_lp')

@include('layouts.head')
@include('layouts.script')
@include('layouts.nav_lp')
@include('layouts.body_headers')

@section('content')

<!-- description area -->
<!-- <div class="container tim-container"> -->
<div id="description-areas">
    <!-- <div class="row"> -->
        <!-- <div class="col-md-5 col-sm-12"> -->
    <div class="nav-tabs-navigation">
        <!--<div class="nav-tabs-wrapper">-->
        <!--    <ul id="tabs" class="nav nav-tabs" role="tablist">-->
        <!--        <li class="nav-item">-->
        <!--            <a class="nav-link active" data-toggle="tab" href="#home" role="tab">ホーム</a>-->
        <!--        </li>-->
        <!--        <li class="nav-item">-->
        <!--            <a class="nav-link" data-toggle="tab" href="#return" role="tab">運営側の声</a>-->
        <!--        </li>-->
        <!--        <li class="nav-item">-->
        <!--            <a class="nav-link" data-toggle="tab" href="#fans" role="tab">ファンの声</a>-->
                    <!-- <a class="nav-link" data-toggle="tab" href="#messages" role="tab">ファン</a> -->
        <!--        </li>-->
        <!--    </ul>-->
        <!--</div>-->
    </div>
    <div id="my-tab-content" class="tab-content text-center section-white">
         <!--     *********    TEAM     *********      -->
            <div class="cd-section section-white" id="intro-cards">
                <div class="container">
            
                    <div class="row coloured-cards">
                        <div class="col-md-4 col-sm-6">
                            <!-- <div class="card-big-shadow"> -->
                                <div class="card card-just-text" data-background="color" data-color="blue">
                                    <div class="card-body">
                                        <h6 class="card-category">{{ $npo_info->blue_card_title }}</h6>
                                        <p class="card-description">
                                            {!! nl2br(e(trans($npo_info->blue_card_body))) !!} 
                                        </p>
                                    </div>
                                </div> <!-- end card -->
                            <!-- </div> -->
                        </div>
    
                        <div class="col-md-4 col-sm-6">
                            <!-- <div class="card-big-shadow"> -->
                                <div class="card card-just-text" data-background="color" data-color="green">
                                    <div class="card-body">
                                        <h6 class="card-category">{{ $npo_info->green_card_title }}</h6>
                                        <!-- <h4 class="card-title"><a href="#paper-kit">Green Card</a></h4> -->
                                        <p class="card-description">
                                            {!! nl2br(e(trans($npo_info->green_card_body))) !!} 
                                        </p>
                                    </div>
                                </div> <!-- end card -->
                            <!-- </div> -->
                        </div>
    
                        <div class="col-md-4 col-sm-6">
                            <!-- <div class="card-big-shadow"> -->
                                <div class="card card-just-text" data-background="color" data-color="yellow">
                                    <div class="card-body">
                                        <h6 class="card-category">{{ $npo_info->yellow_card_title }}</h6>
                                        <!-- <h4 class="card-title"><a href="#paper-kit">Yellow Card</a></h4> -->
                                        <p class="card-description"> 
                                            {!! nl2br(e(trans($npo_info->yellow_card_body))) !!} 
                                        </p>
                                    </div>
                                </div> <!-- end card -->
                            <!-- </div> -->
                        </div>

                        <!-- <div class="card col-md-4 col-sm-6" data-background="color" data-color="green">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-8 ml-auto mr-auto text-center">

                                        <h2 class="title">F#とは？</h2>
                                        <h5 class="description">
                                            F#の"F"は、ファンディングやファイナンシャルの"F"を意味しています。F#の"#"は、半音上がることを意味しています。<br>
                                            楽譜で最初に#がつくのは、C(ド)ではなく、A(ラ)でもなく、F(ファ)です。Webで資金調達をしながら、NPOに関わる仲間(ファミリーやフレンド、ファン)のモチベーションも半音あげたい。そんな意味が込められています♪
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>  -->

                    </div>
                </div>
            </div>

            <!--     *********    TEAM     *********      -->
            <div class="cd-section section-white" id="teams">
                <div class="container">
                    <div class="space-top"></div>
                    <h2 class="title">チームメンバー</h2>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card card-profile card-plain">
                                <div class="row">
                                    <!-- 画像 -->
                                    <div class="col-md-5">
                                        <div class="card-img-top">
                                            <a href="#pablo">
                                                <img class="img" src="{{ url('/') }}/../img/faces/{{ $npo_info->member1_pic }}"/>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- 詳細 -->
                                    <div class="col-md-7">
                                        <div class="card-body text-left">
                                            <h4 class="card-title">{{ $npo_info->member1 }}</h4>
                                            <h6 class="card-category">{{ $npo_info->member1_pos }}</h6>
                                            <p class="card-description">
                                                {{ $npo_info->member1_detail }}
                                            </p>
                                            <div class="card-footer pull-left">
                                                @if (( $npo_info->member1_twitter ) != "")
                                                <a href="https://twitter.com/{{ $npo_info->member1_twitter }}" class="btn btn-just-icon btn-link btn-twitter"><i class="fa fa-twitter"></i></a>
                                                @endif
                                                @if (( $npo_info->member1_facebook ) != "")
                                                <a href="https://www.facebook.com/{{ $npo_info->member1_facebook }}" class="btn btn-just-icon btn-link btn-facebook"><i class="fa fa-facebook"></i></a>
                                                @endif
                                                @if (( $npo_info->member1_insta ) != "")
                                                <a href="https://www.instagram.com/{{ $npo_info->member1_insta }}" class="btn btn-just-icon btn-link btn-instagram"><i class="fa fa-instagram"></i></a>
                                                @endif
                                                @if (( $npo_info->member1_youtube ) != "")
                                                <a href="{{ $npo_info->member1_youtube }}" class="btn btn-just-icon btn-link btn-youtube"><i class="fa fa-youtube"></i></a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- 二人目 -->
                        @if (( $npo_info->member2 ) != "")
                        <div class="col-md-6">
                            <div class="card card-profile card-plain">
                                <div class="row">
                                    <!-- 画像 -->
                                    <div class="col-md-5">
                                        <div class="card-img-top">
                                            <a href="#pablo">
                                                <img class="img" src="{{ url('/') }}/../img/faces/{{ $npo_info->member2_pic }}"/>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- 詳細 -->
                                    <div class="col-md-7">
                                        <div class="card-body text-left">
                                            <h4 class="card-title">{{ $npo_info->member2 }}</h4>
                                            <h6 class="card-category">{{ $npo_info->member2_pos }}</h6>
                                            <p class="card-description">
                                                {{ $npo_info->member2_detail }}
                                            </p>
                                            <div class="card-footer pull-left">
                                                @if (( $npo_info->member2_twitter ) != "")
                                                <a href="https://twitter.com/{{ $npo_info->member2_twitter }}" class="btn btn-just-icon btn-link btn-twitter"><i class="fa fa-twitter"></i></a>
                                                @endif
                                                @if (( $npo_info->member2_facebook ) != "")
                                                <a href="https://www.facebook.com/{{ $npo_info->member2_facebook }}" class="btn btn-just-icon btn-link btn-facebook"><i class="fa fa-facebook"></i></a>
                                                @endif
                                                @if (( $npo_info->member2_insta ) != "")
                                                <a href="https://www.instagram.com/{{ $npo_info->member2_insta }}" class="btn btn-just-icon btn-link btn-instagram"><i class="fa fa-instagram"></i></a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                        
                        <!-- 三人目 -->
                        @if (( $npo_info->member3 ) != "")
                        <div class="col-md-6">
                            <div class="card card-profile card-plain">
                                <div class="row">
                                    <!-- 画像 -->
                                    <div class="col-md-5">
                                        <div class="card-img-top">
                                            <a href="#pablo">
                                                <img class="img" src="{{ url('/') }}/../img/faces/{{ $npo_info->member3_pic }}"/>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- 詳細 -->
                                    <div class="col-md-7">
                                        <div class="card-body text-left">
                                            <h4 class="card-title">{{ $npo_info->member3 }}</h4>
                                            <h6 class="card-category">{{ $npo_info->member3_pos }}</h6>
                                            <p class="card-description">
                                                {{ $npo_info->member3_detail }}
                                            </p>
                                            <div class="card-footer pull-left">
                                                @if (( $npo_info->member3_twitter ) != "")
                                                <a href="https://twitter.com/{{ $npo_info->member3_twitter }}" class="btn btn-just-icon btn-link btn-twitter"><i class="fa fa-twitter"></i></a>
                                                @endif
                                                @if (( $npo_info->member3_facebook ) != "")
                                                <a href="https://www.facebook.com/{{ $npo_info->member3_facebook }}" class="btn btn-just-icon btn-link btn-facebook"><i class="fa fa-facebook"></i></a>
                                                @endif
                                                @if (( $npo_info->member3_insta ) != "")
                                                <a href="https://www.instagram.com/{{ $npo_info->member3_insta }}" class="btn btn-just-icon btn-link btn-instagram"><i class="fa fa-instagram"></i></a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
        
                        <!-- 四人目 -->
                        @if (( $npo_info->member4 ) != "")
                        <div class="col-md-6">
                            <div class="card card-profile card-plain">
                                <div class="row">
                                    <!-- 画像 -->
                                    <div class="col-md-5">
                                        <div class="card-img-top">
                                            <a href="#pablo">
                                                <img class="img" src="{{ url('/') }}/../img/faces/{{ $npo_info->member4_pic }}"/>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- 詳細 -->
                                    <div class="col-md-7">
                                        <div class="card-body text-left">
                                            <h4 class="card-title">{{ $npo_info->member4 }}</h4>
                                            <h6 class="card-category">{{ $npo_info->member4_pos }}</h6>
                                            <p class="card-description">
                                                {{ $npo_info->member4_detail }}
                                            </p>
                                            <div class="card-footer pull-left">
                                                @if (( $npo_info->member4_twitter ) != "")
                                                <a href="https://twitter.com/{{ $npo_info->member4_twitter }}" class="btn btn-just-icon btn-link btn-twitter"><i class="fa fa-twitter"></i></a>
                                                @endif
                                                @if (( $npo_info->member4_facebook ) != "")
                                                <a href="https://www.facebook.com/{{ $npo_info->member4_facebook }}" class="btn btn-just-icon btn-link btn-facebook"><i class="fa fa-facebook"></i></a>
                                                @endif
                                                @if (( $npo_info->member4_insta ) != "")
                                                <a href="https://www.instagram.com/{{ $npo_info->member4_insta }}" class="btn btn-just-icon btn-link btn-instagram"><i class="fa fa-instagram"></i></a>
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

            <!--     *********    PRICING     *********      -->
            <!-- <div class="cd-section" id="pricing"> -->
                <div class="pricing-5 section-gray" id="pricing">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <h2 class="title">支援方法を選択</h2>
                                <div class="choose-plan">
                                    <ul class="nav nav-pills nav-pills-danger" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#personal" id="#aa" role="tab">ビットコインで{{ $npo_info->title }}を支援</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#commercial" id="bb" role="tab">アドバンスト</a>
                                        </li>
                                    </ul>
                                </div>
                                <br/>
                                <div class="tab-content text-center" >
                                    <!-- <div class="tab-pane active" id="aa" role="tabpanel">
                                        <div class="row"> -->
                                            <p class="description text-gray">
                                                F#のWebサービスは、全て仮想通貨でNPOに資金調達の支援（寄付）を行います。<br>
                                                仮想通貨の送金が受理されると、支援したNPOの<b>コインがもらえます</b>。そのコインを保有していると<strong>リターン（優待）がもらえる場合もございます。</strong>
                                                リターンを受け取った後も、<strong>コインが失われることはございません。</strong>
                                            </p>
                                        <!-- </div>
                                    </div> -->
                                    <!-- <div class="tab-pane" id="bb" role="tabpanel">
                                        <div class="row">
                                            <p class="description text-gray">
                                                トークンの説明
                                            </p>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
        
                            <div class="col-md-7 ml-auto" id="support"3>
                                <div class="tab-content text-center" >
                                    <div class="tab-pane active" id="personal" role="tabpanel">
                                        <div class="space-top"></div>
                                        <div class="row">
                                            
                                            <!-- ビットコインで支援する -->
                                            <div class="col-md-6">
                                                <div class="card card-pricing">
                                                    <div class="card-body">
                                                        <h6 class="card-category text-danger">支援してコインをもらう</h6>
                                                        <h1 class="card-title">¥{{ $npo_info->support_amount }}</h1>
                                                        <ul>
                                                            <li><b>コイン名: {{ $npo_info->title }}</b></li>
                                                            <li><b>リターン: {{ $npo_info->support_contents }}</b></li>
                                                            <li><b>優待利用期限: {!! nl2br(e(trans($npo_info->support_contents_detail))) !!}</b></li>
                                                            <!--<li>※優待は変更する場合がございます。</li>-->
                                                            <li>※ご購入は、ビットコイン決済です。</li>
                                                        </ul>
                                                        @if (Auth::guest())
                                                        <a href="{{ url('/login') }}" class="btn btn-danger btn-round">ログイン</a>
                                                        @else
                                                            @if (( $npo_info->code2 ) != "")
                                                            <a href="{{ $npo_info->code2 }}" target="_blank" class="btn btn-danger btn-round">支援する</a>
                                                            @else
                                                            <p class="btn btn-success btn-round">準備中</p>
                                                            @endif
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="card card-pricing" data-color="orange">
                                                    <div class="card-body">
                                                        <h6 class="card-category text-success">BTCをお持ちでない方</h6>
                                                        <h3 class="card-title">開設 ¥0</h3>
                                                        <div>
                                                            <a href="https://bitflyer.jp?bf=hqazqhpu" target="_blank"><img src="https://bitflyer.jp/Images/Affiliate/affi_06_300x250.gif" alt="bitFlyer ビットコインを始めるなら安心・安全な取引所で"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
        
                                    <div class="tab-pane" id="commercial" role="tabpanel">
                                        <div class="space-top"></div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="card card-pricing">
                                                    <div class="card-body">
                                                        <h6 class="card-category text-danger">F#の運営を支援する</h6>
                                                        <h1 class="card-title">¥100</h1>
                                                        <ul>
                                                            <li>F#のトークンを保有していると</li>
                                                            <li><b>利益の10%をビットコインで還元。</b></li>
                                                            <li>XCPに上場しているので<b>取引可能</b></li>
                                                            <li>※価格は今後、上下する可能性あり</li>
                                                        </ul>
                                                        <a class="indiesquare-tip-button btn btn-danger btn-round" href="//widget.indiesquare.me/tip/abc690e1a12d9e88" target="_blank" data-vid="abc690e1a12d9e88" data-domain="indiesquare.me">
                                                            F#のトークンをもらう
                                                        </a>
                                                        <!-- <a href="//widget.indiesquare.me/tip/abc690e1a12d9e88" class="btn btn-warning btn-round">
                                                            
                                                        </a> -->
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
                                                            <li><b>2.</b> BTCとXCPを入金する</li>
                                                            <li><b>3.</b> FSHARPのトークンを検索</li>
                                                            <li><b>4.</b> BTC・XCPで取引して購入</li>
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
            <!-- </div> -->

    </div>
</div>
@endsection

@include('layouts.footer')