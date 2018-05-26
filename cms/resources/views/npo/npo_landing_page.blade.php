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
                                        <h6 class="card-category">F#の名前の由来</h6>
                                        <!-- <h4 class="card-title"><a href="#paper-kit">F#の由来</a></h4> -->
                                        <p class="card-description">
                                            "F"はFundやFinance "#"は半音上がることを意味します。<br>
                                            楽譜で最初に#がつくのは、C(ド)ではなく、F(ファ)です。Webで資金調達をしながら、NPOに関わる仲間(Family, Friend, Fun)のモチベーションも半音あげたい。
                                        </p>
                                    </div>
                                </div> <!-- end card -->
                            <!-- </div> -->
                        </div>
    
                        <div class="col-md-4 col-sm-6">
                            <!-- <div class="card-big-shadow"> -->
                                <div class="card card-just-text" data-background="color" data-color="green">
                                    <div class="card-body">
                                        <h6 class="card-category">F#の詳細</h6>
                                        <!-- <h4 class="card-title"><a href="#paper-kit">Green Card</a></h4> -->
                                        <p class="card-description">
                                            NPOの資金不足をブロックチェーンの技術を活用して解決するWebサービスです。<br>
                                            お気に入りのNPOを見つけて支援すると、そのNPOを支援した証(コイン)がもらえます。コインを持っていると、良いことがあるかも！？
                                        </p>
                                    </div>
                                </div> <!-- end card -->
                            <!-- </div> -->
                        </div>
    
                        <div class="col-md-4 col-sm-6">
                            <!-- <div class="card-big-shadow"> -->
                                <div class="card card-just-text" data-background="color" data-color="yellow">
                                    <div class="card-body">
                                        <h6 class="card-category">リターン(優待)</h6>
                                        <!-- <h4 class="card-title"><a href="#paper-kit">Yellow Card</a></h4> -->
                                        <p class="card-description">
                                            F#に支援すると、毎月のF#に掲載しているNPOごとの支援状況をメールでお伝えいたします。
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
                                    <!-- 左の人の画像 -->
                                    <div class="col-md-5">
                                        <div class="card-img-top">
                                            <a href="#pablo">
                                                <img class="img" src="{{ url('/') }}/../img/faces/nakajo.jpg"/>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- 左の人の詳細 -->
                                    <div class="col-md-7">
                                        <div class="card-body text-left">
                                            <h4 class="card-title">Nakajo Takayuki</h4>
                                            <h6 class="card-category">Founder</h6>
                                            <p class="card-description">
                                                G's AcademyでこのWebサービス(F#)を開発。その後、奨学生としてデジタルハリウッド大学大学院に入学。NPOを通じて1年間アメリカに留学経験有。現在大学院1年
                                            </p>
                                            <div class="card-footer pull-left">
                                                <a href="#pablo" class="btn btn-just-icon btn-link btn-twitter"><i class="fa fa-twitter"></i></a>
                                                <a href="#pablo" class="btn btn-just-icon btn-link btn-facebook"><i class="fa fa-facebook"></i></a>
                                                <a href="#pablo" class="btn btn-just-icon btn-link btn-google"><i class="fa fa-google-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
        
                        <div class="col-md-6">
                            <div class="card card-profile card-plain">
                                <div class="row">
                                    <!-- 右の人の画像 -->
                                    <div class="col-md-5">
                                        <div class="card-img-top">
                                            <a href="#pablo">
                                                <img class="img" src="{{ url('/') }}/../img/faces/judai.jpg" />
                                            </a>
                                        </div>
                                    </div>
                                    <!-- 右の人の詳細 -->
                                    <div class="col-md-7">
                                        <div class="card-body text-left">
                                            <h4 class="card-title">Judai Kokubo</h4>
                                            <h6 class="card-category">Business Management Specialist</h6>
                                            <p class="card-description">
                                                米国NPO法人主催の2ヶ月間の海外ビジネスセミナーで、有名大学の学生が多く参加する中、唯一高校生で参加をし、総合優勝を果たした天才。現在大学1年
                                            </p>
                                            <div class="card-footer pull-left">
                                                <a href="#pablo" class="btn btn-just-icon btn-link btn-youtube"><i class="fa fa-youtube"></i></a>
                                                <a href="#pablo" class="btn btn-just-icon btn-link btn-twitter"><i class="fa fa-twitter"></i></a>
                                                <a href="#pablo" class="btn btn-just-icon btn-link btn-instagram"><i class="fa fa-instagram"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
        
                        <div class="col-md-6">
                            <div class="card card-profile card-plain">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="card-img-top">
                                            <a href="#pablo">
                                                <img class="img" src="{{ url('/') }}/../img/faces/kazu.jpg" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="card-body text-left">
                                            <h4 class="card-title">Kazuki Watanabe</h4>
                                            <h6 class="card-category">Web Engeneer</h6>
                                            <p class="card-description">
                                                WEBエンジニア歴20年以上。銀行の大規模システム開発経験有。北海道在住の二児の父。
                                            </p>
                                            <div class="card-footer pull-left">
                                                <a href="https://twitter.com/oHn4UQReyH3rYHA" class="btn btn-just-icon btn-link btn-twitter"><i class="fa fa-twitter"></i></a>
                                                <a href="#pablo" class="btn btn-just-icon btn-link btn-dribbble"><i class="fa fa-dribbble"></i></a>
                                                <a href="#pablo" class="btn btn-just-icon btn-link btn-pinterest"><i class="fa fa-pinterest"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                                            <a class="nav-link active" data-toggle="tab" href="#personal" id="#aa" role="tab">ビットコインで支援する</a>
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
                                                仮想通貨の送金が受理されると、その分のコインがもらえます。そのコインを保有しているとリターン（優待）がもらえる場合もございます。
                                                リターンを使用後も、コインが失われることはございません。
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
        
                            <div class="col-md-7 ml-auto">
                                <div class="tab-content text-center" >
                                    <div class="tab-pane active" id="personal" role="tabpanel">
                                        <div class="space-top"></div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="card card-pricing">
                                                    <div class="card-body">
                                                        <h6 class="card-category text-danger">支援してコインをもらう</h6>
                                                        <h1 class="card-title">¥1,000</h1>
                                                        <ul>
                                                            <li><b>コイン: 1 F#コイン</b> プレゼント</li>
                                                            <li><b>リターン:</b> 開発メンバーとランチ</li>
                                                            <li>※優待は変更する場合がございます。</li>
                                                            <li>※ご購入は、ビットコイン決済です。</li>
                                                        </ul>
                                                        <a href="#pablo" class="btn btn-danger btn-round">支援する（残り4/5）</a>
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
                                                        <h6 class="card-category text-success">F#トークン購入のためにXCPの購入が必要です<a href="https://wallet.indiesquare.me/">こちら</a></h6>
                                                        <h1 class="card-title">¥0</h1>
                                                        <ul>
                                                            <li><b>1.</b> トークンが買えるアプリを<a href="https://wallet.indiesquare.me/">入手</a></li>
                                                            <li><b>2.</b> BTCとXCPを入金する</li>
                                                            <li><b>3.</b> FSHARPのトークンを検索</li>
                                                            <li><b>4.</b> BTCかXCPで取引して購入</li>
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