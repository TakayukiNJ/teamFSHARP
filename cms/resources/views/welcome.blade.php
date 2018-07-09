@extends('layouts.welcome_common')

@include('layouts.welcome_head')
@include('layouts.welcome_script')
@include('layouts.nav_lp')
@include('layouts.welcome_script')

@section('welcome_content')

<div class="page-header section-dark" style="background-image: url('{{ url('/') }}/../img/sections/forest-bg.jpg')">
	<div class="content-center">
		<div class="container">
			<div class="title-brand">
				<h1 class="presentation-title">F♯</h1>
				<!--<div class="type">F♯</div>-->
			</div>
			<h2 class="presentation-subtitle text-center">NPO専用 資金調達サービス</h2>
			
            <div class="w3-panel w3-large">
                <br>
                <a style="color: black; background-image: linear-gradient(to top, #96fbc4 0%, #f9f586 100%);" href="{{ url('/npo_registers/create') }}" class="btn btn-default btn-lg"><span class="network-name">NPOページ作成</span></a>
            </div>
		</div>
	</div>
</div>
	
<div class="wrapper">
	<div class="team-5 section-image" style="background-image: url('{{ url('/') }}/../img/sections/martin-knize.jpg')">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 ml-auto mr-auto text-center">
                        <h2 class="title">The Executive Team</h2>
                        <h5 class="description">F♯に関わっている、主なチームメンバーです。メンバー募集中です！</h5>
                    </div>
                </div>
                <div class="row">
    				<!-- 仲条 -->
    				<div class="col-md-6">
    					<div class="card card-profile card-plain">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="card-img-top">
                                        <a href="#pablo">
                                            <img class="img" src="{{ url('/') }}/../img/faces/nakajo.jpg" />
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="card-body text-left">
                                        <h4 class="card-title">Nakajo Takayuki</h4>
                                        <h6 class="card-category">Founder</h6>
                                        <p class="card-description">
                                        	デジタルハリウッド大学大学院の1年生。個人の価値を売買するサービス『VALU』で、購入者ランキング3位。NPOを通じて1年間アメリカに留学経験有
                                        </p>
                                        <div class="card-footer">
                                            <a href="https://twitter.com/TakayukiNakajo" class="btn btn-just-icon btn-link btn-neutral"><i class="fa fa-twitter"></i></a>
                                            <a href="https://www.facebook.com/nj.takayuki" class="btn btn-just-icon btn-link btn-neutral" target="_blank"><i class="fa fa-facebook"></i></a>
                                            <a href="https://github.com/TakayukiNJ" class="btn btn-just-icon btn-link btn-neutral"><i class="fa fa-github"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
    					</div>
    				</div>
    				<!-- カズさん -->
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
                                        <h4 class="card-title">Watanabe Kazuki</h4>
                                        <h6 class="card-category">WEB ENGENEER</h6>
                                        <p class="card-description">
                                        	WEBエンジニア歴20年以上。銀行の大規模システム開発経験有。北海道在住の二児の父。F♯のバグ改修や機能の改善をサポートしています。
                                        </p>
                                        <div class="card-footer">
                                            <a href="https://www.facebook.com/DRGK.feat.lhormace" class="btn btn-just-icon btn-link btn-neutral" target="_blank"><i class="fa fa-facebook"></i></a>
                                            <a href="https://github.com/lhormace" class="btn btn-just-icon btn-link btn-neutral"><i class="fa fa-github"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
    					</div>
    				</div>
    				<!-- 寺ちゃん -->
    				<div class="col-md-6">
    					<div class="card card-profile card-plain">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="card-img-top">
                                        <a href="#pablo">
                                            <img class="img" src="{{ url('/') }}/../img/faces/yuya.jpg" />
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="card-body text-left">
                                        <h4 class="card-title">Terada Yuya</h4>
                                        <h6 class="card-category">General Researcher</h6>
                                        <p class="card-description">
                                        	メンタルヘルスのスタートアップで勤務する、大阪大学卒のAIエンジニア。現在米国シリコンバレーやデンマークで資金調達を実施中。
                                        </p>
                                        <div class="card-footer">
                                            <a href="https://twitter.com/mktrdbg" class="btn btn-just-icon btn-link btn-neutral"><i class="fa fa-twitter"></i></a>
                                            <a href="https://www.facebook.com/yuya.terada.777" class="btn btn-just-icon btn-link btn-neutral" target="_blank"><i class="fa fa-facebook"></i></a>
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
                                            <img class="img" src="{{ url('/') }}/../img/placeholder.jpg" />
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="card-body text-left">
                                        <h4 class="card-title">WANTED</h4>
                                        <h6 class="card-category"></h6>
                                        <p class="card-description">
                                            メンバー募集中
                                        </p>
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