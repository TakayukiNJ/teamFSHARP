@extends('layouts.common_nav_lp')
@include('layouts.head')
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
                                <br>
                                @if(( $npo_info->support_price ) != 0)
                                <div>
                                    @if($npo_info->url)
                                    <a href="{{ $npo_info->url }}" class="btn btn-success" target="_blank">
                                        公式サイト    
                                    </a>
                                    @endif
                                    <a href="#support" class="btn btn-danger">
                                        支援する
                                    </a>
                                </div>
                                <br>
                                <h6>目標金額：{{$npo_info->support_price}}円（{{$parcentage}}％達成）</h6>
                                <h6>現在：{{$currency_data}}円 ／ 寄付数：{{$npo_info->buyer}}</h6>
                                <br>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-success" role="progressbar" style="width: {{$parcentage}}%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="0">
                                    </div>
                                </div>
                                <br>
                                @endif
                                
                                <a href="https://twitter.com/intent/tweet?text={!! $npo_info->title !!} {!! $npo_info->subtitle !!}の支援のために。ひとりでも多くの方に広めてください♪%20-%20FSHARP%20%20https://fsharp.me/{{ $npo_info->npo_name }}" class="btn btn-round btn-twitter">
                                    <!--<i class="twitter-share-button" data-href="https://fsharp.me/{{ $npo_info->npo_name }}" aria-hidden="true" data-text="{{ $npo_info->subtitle }} {{ $npo_info->title }}の支援のために。ひとりでも多くの方に広めてください♪%20-%20F#%20%20https://fsharp.me/{{ $npo_info->npo_name }}" data-show-count="true" data-dnt="true"></i>Tweet-->
                                    <i class="fa fa-twitter" aria-hidden="true"></i> Tweet 
                                </a>
                                <!--<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Ffsharp.me%2F&amp;src=sdkpreparse" class="btn btn-round btn-facebook">-->
                                    
                                <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Ffsharp.me/{{ $npo_info->npo_name }}%2F&amp;src=sdkpreparse" class="btn btn-round btn-facebook" data-layout="button_count">
                                    <i class="fb-share-button" data-href="https://fsharp.me/{{ $npo_info->npo_name }}" data-layout="button_count" data-size="small" data-mobile-iframe="true" aria-hidden="true"></i>
                                <!-- シェアボタンこみ -->
                                <!--<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Ffsharp.me%2F&amp;src=sdkpreparse" class="btn btn-round btn-facebook">-->
                                <!--    <i class="fb-like" data-href="https://fsharp/{{ $npo_info->npo_name }}" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"></i>-->
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
                                <!--<br>-->
                                <div class="avatar">
                                    <br>
                                    @if($npo_info->certificated_npo)
                                    <a href="https://www.npo-homepage.go.jp/npoportal/detail/{{ $npo_info->certificated_npo }}" target="_blank">
                                        <img src="img/sdgs-logo/certificated_npo.jpeg" class="img-thumbnail img-responsive media-object" alt="Rounded Image" width="72" height="72">
                                    </a>
                                    @endif
                                    @for ($i = 1; $i < 7; $i++)
                                        <?php $sdgs = "sdgs".$i ?>
                                        @if($npo_info->$sdgs)
                                        <img src="img/sdgs-logo/sdg_icon_{{$npo_info->$sdgs}}.png" class="img-thumbnail img-responsive media-object" alt="Rounded Image" width="72" height="72">
                                        @endif
                                    @endfor
                                </div>
                                
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
                        <h2 class="title text-center">支援する</h2>
                        {{--
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
                        --}}
                        <div class="tab-content text-center" >
                            <p>現在寄付数：<b>{{ $buyer_data }}</b>回</p>
                            <p>寄付するとユーザー名がバッジに記載されます。</p>
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
                                                    <li><b>リターン: {{ $npo_info->support_contents or '未設定' }}</b></li>
                                                    @if($npo_info->support_contents_detail)
                                                    <li><b>特典利用期限: {{ Carbon\Carbon::parse($npo_info->support_contents_detail)->format('Y年m月d日') }}</b></li>
                                                    @endif
                                                </ul>
                                                @if (Auth::guest())
                                                <a href="{{ url('/login') }}" class="btn btn-danger btn-round">ログイン</a>
                                                @else
                                                    <form action="/{{$npo_info->npo_name}}/payment" method="POST">
                                                        {!! csrf_field() !!}
                                                        <script
                                                            src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                                            data-key="{{$stripe_key}}"
                                                            data-amount="{{ $npo_info->support_amount }}"
                                                            data-name="{{ $npo_info->title }}"
                                                            data-email="{{Auth::user()->email}}"
                                                            data-description="バッジがもらえます。"
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
                                        <div href="/{{ $npo_info->npo_name }}" class="badge" data-toggle="modal" data-target="#{{ $npo_info->npo_name }}">
                                            <svg viewBox="0 0 210 210">
                                                <g stroke="none" fill="none">
                                                    <path d="M22,104.5 C22,58.9365081 58.9365081,22 104.5,22 C150.063492,22 187,58.9365081 187,104.5" id="top"></path>
                                                    <path d="M22,104.5 C22,150.063492 58.9365081,187 104.5,187 C150.063492,187 187,150.063492 187,104.5" id="bottom"></path>
                                                </g>
                                        		<circle cx="105" cy="105" r="62" stroke="currentColor" stroke-width="1" fill="none" />
                                                <text width="120" font-size="12" fill="currentColor">
                                                    <textPath startOffset="50%" text-anchor="middle" alignment-baseline="middle" xlink:href="#top">
                                                        {{$npo_info->subtitle}}
                                                    </textPath>
                                                </text>
                                                <text width="120" font-size="12" fill="currentColor">
                                                    <textPath startOffset="50%" text-anchor="middle" alignment-baseline="middle" xlink:href="#bottom">
                                                        {{$npo_info->title}}
                                                    </textPath>
                                                </text>
                                            </svg>
                                            <span>現在寄付者：<b>{{$donater_count}}人</span>
                                        </div>
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
                                                    </div>
                                                    <div class="modal-body">
                                                        <label>管理者</label>
                                                        <p>{{ $npo_info->manager }}</p>
                                                        <label>目標</label>
                                                        <p>{{ $npo_info->support_price }}円</p>
                                                        <label>現在</label>
                                                        <p>{{ $npo_info->follower }}円</p>
                                                        <label>寄付数</label>
                                                        <p>{{ $npo_info->buyer }}</p>
                                                        <label>寄付者</label>
                                                        <p>
                                                        @if(count($donater)>1)
                                                            @for ($i = 1; $i < count($donater); $i++)
                                                                @if($i == 1)
                                                                    {{$donater[$i]}}さん
                                                                @else
                                                                    、{{$donater[$i]}}さん
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

                            {{--
                            <div class="tab-pane" id="commercial" role="tabpanel">
                                <div class="space-top"></div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card card-pricing">
                                            <div class="card-body">
                                                <h6 class="card-category text-danger">法人（団体・チーム）として支援する</h6>
                                                <h1 class="card-title">¥{{$npo_info->support_price_gold}}</h1>
                                                <ul>
                                                    <li>現在<b>{{$company_count_gold}}</b>法人が支援中です。</li>
                                                    <li>最大<b>{{$npo_info->support_amount_gold}}</b>法人まで支援可能。</li>
                                                    @if($npo_info->support_contents_gold)
                                                        <li>リターン：<b>{{$npo_info->support_contents_gold}}</b></li>
                                                    @endif
                                                    @if(count($donater_gold)>1)
                                                        <li>支援法人名：
                                                        @for ($i = 1; $i < count($donater_gold); $i++)
                                                            @if($i == 1)
                                                                {{$donater_gold[$i]}}
                                                            @else
                                                                、{{$donater_gold[$i]}}
                                                            @endif
                                                        @endfor
                                                        </li>
                                                    @else
                                                    <li>支援した法人名をこちらに掲載。</li>
                                                    @endif
                                                </ul>
                                                @if($npo_info->support_contents_detail_gold)
                                                    <a class="btn btn-success btn-round" href="{{$npo_info->support_contents_detail_gold}}" target="_blank">
                                                        内容の詳細はこちら
                                                    </a>
                                                    <br><br>
                                                @endif
                                                @if (Auth::guest())
                                                <a href="{{ url('/login') }}" class="btn btn-danger btn-round">ログイン</a>
                                                @elseif(Auth::user()->npo == "")
                                                <a href="{{ url('/npo_registers/create') }}" class="btn btn-danger btn-round">まずは団体登録</a>
                                                @elseif($company_count_gold < $npo_info->support_amount_gold)
                                                    <form action="/{{$npo_info->npo_name}}/payment_company" method="POST">
                                                        {!! csrf_field() !!}
                                                        <script
                                                            src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                                            data-key="{{$stripe_key}}"
                                                            data-amount="{{ $npo_info->support_price_gold }}"
                                                            data-name="{{ $npo_info->title }}の法人寄付"
                                                            data-email="{{Auth::user()->email}}"
                                                            data-description="法人寄付"
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
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card card-pricing" data-color="orange">
                                            <div class="card-body">
                                                <h6 class="card-category text-success">プラチナ法人として支援する</h6>
                                                <h1 class="card-title">¥{{$npo_info->support_price_pratinum}}</h1>
                                                <ul>
                                                    <li>現在<b>{{$company_count_pratinum}}</b>法人が支援中です。</li>
                                                    <li>最大<b>{{$npo_info->support_amount_pratinum}}</b>法人まで支援可能。</li>
                                                    @if($npo_info->support_contents_pratinum)
                                                        <li>リターン：<b>{{$npo_info->support_contents_pratinum}}</b></li>
                                                    @endif
                                                    @if(count($donater_pratinum)>1)
                                                        <li>支援法人名：
                                                        @for ($i = 1; $i < count($donater_pratinum); $i++)
                                                            @if($i == 1)
                                                                {{$donater_pratinum[$i]}}
                                                            @else
                                                                、{{$donater_pratinum[$i]}}
                                                            @endif
                                                        @endfor
                                                        </li>
                                                    @else
                                                    <li>支援した法人名をこちらに掲載。</li>
                                                    @endif
                                                </ul>
                                                @if($npo_info->support_contents_detail_pratinum)
                                                    <a href="{{$npo_info->support_contents_detail_pratinum}}" class="btn btn-neutral btn-round">
                                                        内容の詳細はこちら
                                                    </a>
                                                    <br><br>
                                                @endif
                                                @if (Auth::guest())
                                                <a href="{{ url('/login') }}" class="btn btn-neutral btn-round">ログイン</a>
                                                @elseif(Auth::user()->npo == "")
                                                <a href="{{ url('/npo_registers/create') }}" class="btn btn-neutral btn-round">まずは団体登録</a>
                                                @elseif($company_count_pratinum < $npo_info->support_amount_pratinum)
                                                
                                                    <form action="/{{$npo_info->npo_name}}/payment_company_pratinum" method="POST">
                                                        {!! csrf_field() !!}
                                                        <script
                                                            src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                                            data-key="{{$stripe_key}}"
                                                            data-amount="{{ $npo_info->support_price_pratinum }}"
                                                            data-name="{{ $npo_info->title }}の法人プラチナ寄付"
                                                            data-email="{{Auth::user()->email}}"
                                                            data-description="法人プラチナ寄付"
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
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    --}}
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
    <div id="my-tab-content" class="tab-content text-center section-white">
        <div class="cd-section section-white" id="intro-cards">
            <div class="container">
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
                                            @if($npo_info->$member_pos){
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