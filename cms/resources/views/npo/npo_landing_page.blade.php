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

    </div>
</div>
@endsection
@include('layouts.footer')