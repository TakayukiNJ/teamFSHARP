@extends('layouts.common_nav_lp')
@include('layouts.head')
@include('layouts.script')
@include('layouts.nav_lp')
@include('layouts.body_headers')
@section('content')

<!-- description area -->
<!-- <div class="container tim-container"> -->
<div id="description-areas">
    <div class="nav-tabs-navigation">
    </div>
    <div id="my-tab-content" class="tab-content text-center section-white">
         <!--     *********    TEAM     *********      -->
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
                                <!-- <h4 class="card-title"><a href="#paper-kit">Yellow Card</a></h4> -->
                                <p class="card-description"> 
                                    {!! nl2br(e(trans($npo_info->yellow_card_body))) !!} 
                                </p>
                            </div>
                        </div>
                    </div>
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
                                            @if(($npo_info->member1_pic) != "")
                                            <img class="img" src="{{ url('/') }}/../img/faces/{{ $npo_info->member1_pic }}"/>
                                            @else
                                            <img class="img" src="{{ url('/') }}/../img/placeholder.jpg"/>
                                            @endif
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
                    
                    <!-- 二人目 -->
                    @if (( $npo_info->member2 ) != "")
                    <div class="col-md-6">
                        <div class="card card-profile card-plain">
                            <div class="row">
                                <!-- 画像 -->
                                <div class="col-md-5">
                                    <div class="card-img-top">
                                        <a href="#pablo">
                                            @if(($npo_info->member2_pic) != "")
                                            <img class="img" src="{{ url('/') }}/../img/faces/{{ $npo_info->member2_pic }}"/>
                                            @else
                                            <img class="img" src="{{ url('/') }}/../img/placeholder.jpg"/>
                                            @endif    
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
                                            <a href="https://twitter.com/{{ $npo_info->member2_twitter }}" target="_blank" class="btn btn-just-icon btn-link btn-twitter"><i class="fa fa-twitter"></i></a>
                                            @endif
                                            @if (( $npo_info->member2_facebook ) != "")
                                            <a href="https://www.facebook.com/{{ $npo_info->member2_facebook }}" target="_blank" class="btn btn-just-icon btn-link btn-facebook"><i class="fa fa-facebook"></i></a>
                                            @endif
                                            @if (( $npo_info->member2_linkedin ) != "")
                                            <a href="https://www.linkedin.com/in/{{ $npo_info->member2_linkedin }}" target="_blank" class="btn btn-just-icon btn-link btn-linkedin"><i class="fa fa-linkedin"></i></a>
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
                                            @if(($npo_info->member3_pic) != "")
                                            <img class="img" src="{{ url('/') }}/../img/faces/{{ $npo_info->member3_pic }}"/>
                                            @else
                                            <img class="img" src="{{ url('/') }}/../img/placeholder.jpg"/>
                                            @endif    
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
    
                    <!-- 四人目 -->
                    @if (( $npo_info->member4 ) != "")
                    <div class="col-md-6">
                        <div class="card card-profile card-plain">
                            <div class="row">
                                <!-- 画像 -->
                                <div class="col-md-5">
                                    <div class="card-img-top">
                                        <a href="#pablo">
                                            @if(($npo_info->member4_pic) != "")
                                            <img class="img" src="{{ url('/') }}/../img/faces/{{ $npo_info->member4_pic }}"/>
                                            @else
                                            <img class="img" src="{{ url('/') }}/../img/placeholder.jpg"/>
                                            @endif    
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
                    
                    <!-- ５人目 -->
                    @if (( $npo_info->member5 ) != "")
                    <div class="col-md-6">
                        <div class="card card-profile card-plain">
                            <div class="row">
                                <!-- 画像 -->
                                <div class="col-md-5">
                                    <div class="card-img-top">
                                        <a href="#pablo">
                                            @if(($npo_info->member5_pic) != "")
                                            <img class="img" src="{{ url('/') }}/../img/faces/{{ $npo_info->member5_pic }}"/>
                                            @else
                                            <img class="img" src="{{ url('/') }}/../img/placeholder.jpg"/>
                                            @endif    
                                        </a>
                                    </div>
                                </div>
                                <!-- 詳細 -->
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
                    
                    <!-- 6人目 -->
                    @if (( $npo_info->member6 ) != "")
                    <div class="col-md-6">
                        <div class="card card-profile card-plain">
                            <div class="row">
                                <!-- 画像 -->
                                <div class="col-md-5">
                                    <div class="card-img-top">
                                        <a href="#pablo">
                                            @if(($npo_info->member6_pic) != "")
                                            <img class="img" src="{{ url('/') }}/../img/faces/{{ $npo_info->member6_pic }}"/>
                                            @else
                                            <img class="img" src="{{ url('/') }}/../img/placeholder.jpg"/>
                                            @endif    
                                        </a>
                                    </div>
                                </div>
                                <!-- 詳細 -->
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
                    
                    <!-- 7人目 -->
                    @if (( $npo_info->member7 ) != "")
                    <div class="col-md-6">
                        <div class="card card-profile card-plain">
                            <div class="row">
                                <!-- 画像 -->
                                <div class="col-md-5">
                                    <div class="card-img-top">
                                        <a href="#pablo">
                                            @if(($npo_info->member7_pic) != "")
                                            <img class="img" src="{{ url('/') }}/../img/faces/{{ $npo_info->member7_pic }}"/>
                                            @else
                                            <img class="img" src="{{ url('/') }}/../img/placeholder.jpg"/>
                                            @endif    
                                        </a>
                                    </div>
                                </div>
                                <!-- 詳細 -->
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
                    
                    <!-- 8人目 -->
                    @if (( $npo_info->member8 ) != "")
                    <div class="col-md-6">
                        <div class="card card-profile card-plain">
                            <div class="row">
                                <!-- 画像 -->
                                <div class="col-md-5">
                                    <div class="card-img-top">
                                        <a href="#pablo">
                                            @if(($npo_info->member8_pic) != "")
                                            <img class="img" src="{{ url('/') }}/../img/faces/{{ $npo_info->member8_pic }}"/>
                                            @else
                                            <img class="img" src="{{ url('/') }}/../img/placeholder.jpg"/>
                                            @endif    
                                        </a>
                                    </div>
                                </div>
                                <!-- 詳細 -->
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
                    
                    <!-- 9人目 -->
                    @if (( $npo_info->member9 ) != "")
                    <div class="col-md-6">
                        <div class="card card-profile card-plain">
                            <div class="row">
                                <!-- 画像 -->
                                <div class="col-md-5">
                                    <div class="card-img-top">
                                        <a href="#pablo">
                                            @if(($npo_info->member9_pic) != "")
                                            <img class="img" src="{{ url('/') }}/../img/faces/{{ $npo_info->member9_pic }}"/>
                                            @else
                                            <img class="img" src="{{ url('/') }}/../img/placeholder.jpg"/>
                                            @endif    
                                        </a>
                                    </div>
                                </div>
                                <!-- 詳細 -->
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
                    
                    <!-- 10人目 -->
                    @if (( $npo_info->member10 ) != "")
                    <div class="col-md-6">
                        <div class="card card-profile card-plain">
                            <div class="row">
                                <!-- 画像 -->
                                <div class="col-md-5">
                                    <div class="card-img-top">
                                        <a href="#pablo">
                                            @if(($npo_info->member10_pic) != "")
                                            <img class="img" src="{{ url('/') }}/../img/faces/{{ $npo_info->member10_pic }}"/>
                                            @else
                                            <img class="img" src="{{ url('/') }}/../img/placeholder.jpg"/>
                                            @endif    
                                        </a>
                                    </div>
                                </div>
                                <!-- 詳細 -->
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

        <!--     *********    PRICING     *********      -->
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
                                    <a class="nav-link" data-toggle="tab" href="#commercial" id="bb" role="tab">アドバンスト</a>
                                </li>
                            </ul>
                        </div>
                        <br/>
                        <div class="tab-content text-center" >
                            <p>
                                F♯のWebサービスは、全て仮想通貨でNPOに支援（寄付）を行います。支援には2種類あります。<br>
                                【コイン】個人や法人（学生、社会人、株式会社、一般社団法人、NPO法人など）は、自由にコインを購入することができます。
                                コインと引き換えに、特典を使用することができます。また、コインを持っているだけで支援をしている証明になったり、何かリターンや優待を得ることができる場合もございますので、そちらもお楽しみください。<br>
                                【アドバンスト】NPOのオリジナル仮想通貨（トークン）をご購入できます。自由にブロックチェーン上で、NPOの価値を売買することが可能です。
                            </p>
                            @if (( $npo_info->code1 ) == "")
                            <p class="description text-gray">
                                【アドバンスト】独自のNPOトークンで運用したい場合は、別途ご相談ください。
                            </p>
                            @endif
                        </div>
                    </div>

                    <div class="col-md-7 ml-auto" id="support">
                        <div class="tab-content text-center" >
                            <div class="tab-pane active" id="personal" role="tabpanel">
                                <div class="space-top"></div>
                                <div class="row">
                                    <!-- 支援する -->
                                    <div class="col-md-6">
                                        <div class="card card-pricing">
                                            <div class="card-body">
                                                <h6 class="card-category text-danger">{{ $npo_info->title }}を支援</h6>
                                                <h1 class="card-title">{{ $npo_info->support_amount }}円</h1>
                                                <ul>
                                                    <li><b>使用目的: {{ $npo_info->support_purpose or '活動費' }}</b></li>
                                                    <li><b>リターン: {{ $npo_info->support_contents or '未設定' }}</b></li>
                                                    <li><b>特典利用期限: {{ Carbon\Carbon::parse($npo_info->support_contents_detail)->format('Y年m月d日') }}</b></li>
                                                    <!--<li>※ご購入は、クレジットカードかビットコイン決済です。</li>-->
                                                    <!--@if (Auth::guest())-->
                                                    <!--<li><a href="{{ url('/login') }}" class="btn btn-danger btn-round">ログイン</a></li>-->
                                                    <!--@else-->
                                                    <!--    @if (( $npo_info->code2 ) != "")-->
                                                    <!--    <li><a href="{{ $npo_info->code2 }}" target="_blank" class="btn btn-danger btn-round">日本円で支援する</a></li>-->
                                                    <!--    <li><a href="https://paymo.life/shops/4c67fab166/n0bisuke_dev10" class="btn btn-danger btn-round">ビットコインで支援する</a></li>-->
                                                    <!--    @else-->
                                                    <!--    <li><p class="btn btn-success btn-round">準備中</p></li>-->
                                                    <!--    @endif-->
                                                    <!--@endif-->
                                                </ul>
                                                @if (Auth::guest())
                                                <a href="{{ url('/login') }}" class="btn btn-danger btn-round">ログイン</a>
                                                @else
                                                    @if (( $npo_info->code2 ) != "")
                                                    <a href="https://paymo.life/shops/4c67fab166/{{ $npo_info->npo_name }}" target="_blank" class="btn btn-danger btn-round">日本円決済</a>
                                                    <a href="{{ $npo_info->code2 }}" class="btn btn-danger btn-round">ビットコイン決済</a>
                                                    @else
                                                    <p class="btn btn-success btn-round">準備中</p>
                                                    @endif
                                                @endif

                                                <form action="/welcome" method="POST">
                                                    {!! csrf_field() !!}
                                                    <script
                                                            src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                                            data-key="pk_test_tfM2BWAFRlYSPO939BW5jIj5"
                                                            data-amount="{{ $npo_info->support_amount }}"
                                                            data-name="{{ $npo_info->title }}"
                                                            data-description="Example charge"
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
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!--よう編集！！-->
                                    <!--よう編集！！-->
                                    <!--よう編集！！-->
                                    <!--よう編集！！-->
                                    <!--よう編集！！-->
                                    <!--よう編集！！-->
                                    <!--よう編集！！-->
                                    <!--<div class="col-md-6">-->
                                    <!--    <div class="card card-pricing" data-color="orange">-->
                                    <!--        <div class="card-body">-->
                                    <!--            <h6 class="card-category text-success">{{ $npo_info->title }}の欲しいものリスト</h6>-->
                                                <!--<h3 class="card-title">欲しいものリスト</h3>-->
                                    <!--            <ul>-->
                                    <!--                <li>絵本 <b>100冊</b></li>-->
                                    <!--                <li>パソコン <b>10個</b></li>-->
                                    <!--                <li>スマートフォン <b>10個</b></li>-->
                                    <!--                <li>家庭用冷蔵庫 <b>1個</b></li>-->
                                    <!--            </ul>-->
                                    <!--            <a href="https://wallet.indiesquare.me/" class="btn btn-neutral btn-round">支援する</a>-->
                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--</div>-->
                                    <div class="col-md-6">
                                        <div class="card card-pricing" data-color="orange">
                                            <div class="card-body">
                                                <h6 class="card-category text-success">ビットコインをお持ちでない方</h6>
                                                <h3 class="card-title">開設 ¥0</h3>
                                                <div>
                                                    <!-- 現在BitFlyer新規募集停止 -->
                                                    <!--<a href="https://bitflyer.jp?bf=hqazqhpu" target="_blank"><img src="https://bitflyer.jp/Images/Affiliate/affi_06_300x250.gif" alt="bitFlyer ビットコインを始めるなら安心・安全な取引所で"></a>-->
                                                    <a href="https://zaif.jp/?ac=ha8meb0fu4 " target="_blank"><img src="https://bitflyer.jp/Images/Affiliate/affi_06_300x250.gif" alt="bitFlyer ビットコインを始めるなら安心・安全な取引所で"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--よう編集！！-->
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
    </div>
</div>
@endsection
@include('layouts.footer')