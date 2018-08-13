@extends('layouts.welcome_common')

@include('layouts.welcome_head')
@include('layouts.welcome_script')
@include('layouts.nav_lp')
@include('layouts.welcome_script')

@section('welcome_content')
<body class="presentation-page loading">

    <div class="page-header section-dark" style="background-image: url('/img/farid-askerov.jpg')">
    	<div class="content-center">
    		<div class="container">
    			<div class="title-brand">
    				<h1 class="presentation-title"></h1>
    				<!--<div class="type">F♯</div>-->
    			</div>
    			<h2 class="presentation-subtitle text-center">F♯で資金調達、初めてみませんか？</h2>
    			
                <div class="w3-panel w3-large">
                    <br>
                    @if (Auth::guest())
                    <a href="{{ url('/login') }}" class="btn-lg btn btn-outline-neutral"><span class="network-name">スタート</span></a>
                    @elseif ((Auth::user()->npo) == "")
                    <a href="{{ url('/npo_registers/create') }}" class="btn-lg btn btn-outline-neutral"><span class="network-name">スタート</span></a>
                    @else
                    <a href="{{ url('/npo') }}/{{ Auth::user()->npo }}" class="btn-lg btn btn-outline-neutral"><span class="network-name">スタート</span></a>
                    @endif
                </div>
    		</div>
    	</div>
    </div>
    	
    <div>
    	<div class="team-5 section-image" style="background-image: url('/img/sections/martin-knize.jpg')">
            <div class="projects-1">
                
                <div class="container">
                    <div class="row">
                        
                        <div class="col-md-8 ml-auto mr-auto text-center">
                            <h2 class="title">【デジハリ公式】<br>支援プロダクト</h2>
                            <h5 class="description">デジタルハリウッド大学大学院の2018年度学内コンペティション（インテリム・コンペティション）に選出されたプロダクトです。</h5>
                            </div>
                        <div class="project-pills">
                            <ul class="nav nav-pills nav-pills-danger">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="pill" href="#pick-up" role="tab">Pick Up</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="pill" href="#developers" role="tab">Developers</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="https://fsharp.me/npo/teamFSHARP#pricing" role="tab" target="_blank">Support Us</a>
                                </li>
                                <!--<li class="nav-item">-->
                                <!--    <a class="nav-link" data-toggle="pill" href="#pill-3" role="tab">Ranking</a>-->
                                <!--</li>-->
                                <li class="nav-item">
                                    <a class="nav-link" href="https://docs.google.com/forms/d/e/1FAIpQLSfM5FkFx27lREs-yMsY11P9dmx8ZQCkDVlPXL2Ch-AOoiz1vA/viewform?c=0&w=1" role="tab" target="_blank">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="tab-content">
        				<div class="row tab-pane active" id="pick-up" role="tabpanel">
            				<!-- pick up ここから -->
        				    <div class="row">
                                <div class="col-md-10 ml-auto mr-auto">
                					<h4 class="title">社会的課題の解決を目的とする事業に取り組むNPOやコミュニティを応援しています。</h4>
                					<br>
                					<div class="row">
                						<div class="col-md-4">
                							<div class="card card-blog">
                								<div class="card-image">
                									<a href="https://fsharp.me/npo/nipponshotenkai">
                										<img class="img img-raised" src="{{ url('/') }}/../img/npologo/nihonShotenkaiLogo.png" />
                									</a>
                								</div>
                								<div class="card-body">
                									<h6 class="card-category text-danger">
                									    Decent Work And Economic Growth
                									</h6>
                									<h5 class="card-title">
                										<a href="https://fsharp.me/npo/nipponshotenkai">NPO法人日本商店会</a>
                									</h5>
                									<p class="card-description">
                										日本商店会を通じて日本を元気にする<br>
                                                        【ミッション】<br>
                                                        ・会員に貢献する<br>
                                                        ・地域に貢献する<br>
                                                        ・日本に貢献する<br>
                                                        ・世界に貢献する<br>
                									</p>
                                                    <hr>
                                                    <div class="card-footer">
                                                        <div class="author">
                    	                                    <a href="https://fsharp.me/npo/nipponshotenkai">
                    	                                       <!--<img src="{{ url('/') }}/../img/faces/kazu.jpg" alt="..." class="avatar img-raised">-->
                    	                                       <span>支援者0人</span>
                    	                                    </a>
                    	                                </div>
                                                        <div class="stats">
                     	                                    50,000円
                     	                                </div>
                    	                            </div>
                								</div>
                							</div>
                						</div>
            
                						<div class="col-md-4">
                							<div class="card card-blog">
                								<div class="card-image">
                									<a href="https://fsharp.me/npo/helper-c">
                										<img class="img img-raised" src="{{ url('/') }}/../img/npologo/helpercallLogo.jpg" />
                									</a>
                								</div>
                								<div class="card-body">
                									<h6 class="card-category text-success">
                										Good Health And Well-being
                									</h6>
                									<h5 class="card-title">
                										<a href="https://fsharp.me/npo/helper-c">NPO法人ヘルパーコール</a>
                									</h5>
                									<p class="card-description">
                										今後、益々高齢化社会が進むなか、高齢者の方々が、生き活き楽しく過ごしていただけるようなサービス提供を目指し、ご利用者やご家族、また職員・スタッフの全員が、前を向いて元気よく歩いていけるよう、運営してまいります。
                									</p>
                                                    <hr>
                                                    <div class="card-footer">
                                                        <div class="author">
                    	                                    <a href="https://fsharp.me/npo/helper-c">
                    	                                       <span>支援者0人</span>
                    	                                    </a>
                    	                                </div>
                                                        <div class="stats">
                     	                                    300,000円
                     	                                </div>
                    	                            </div>
                								</div>
                							</div>
                						</div>
            
                						<div class="col-md-4">
                							<div class="card card-blog">
                								<div class="card-image">
                									<a href="https://fsharp.me/npo/n0bisuke">
                										<img class="img img-raised" src="{{ url('/') }}/../img/npologo/n0bisuke.jpg" />
                									</a>
                								</div>
            
                								<div class="card-body">
                									<h6 class="card-category text-muted">
                										Partnerships For The Goals
                									</h6>
                									<h5 class="card-title">
                										<a href="https://fsharp.me/npo/n0bisuke">のびすけ班</a>
                									</h5>
                									<p class="card-description">
                									    G's Academy（エンジニア養成学校）で菅原のびすけさんのメンターを受けた（あるいは受けている）人たちのコミュニティ	
                									</p>
                                                    <hr>
                                                    <div class="card-footer">
                                                        <div class="author">
                    	                                    <a href="https://fsharp.me/npo/n0bisuke">
                    	                                       <img src="{{ url('/') }}/../img/faces/n0bisukeRice.jpg" alt="..." class="avatar img-raised">
                    	                                       <span>支援者1人</span>
                    	                                    </a>
                    	                                </div>
                                                        <div class="stats">
                     	                                    3,000円
                     	                                </div>
                    	                            </div>
                								</div>
                							</div>
                						</div>
                					</div>
                				</div>
                			</div>
            				<!-- pick up ここまで -->
            			</div>
            			
            			<div class="row tab-pane" id="developers" role="tabpanel">
            				<!-- team member ここまで -->
            				
            				<div class="col-md-6">
            					<div class="card card-profile card-plain">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="card-img-top">
                                                <a href="https://facebook.com/nj.takayuki" target="_blank">
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
                                                    <a href="https://twitter.com/TakayukiNakajo" class="btn btn-just-icon btn-link btn-neutral" target="_blank"><i class="fa fa-twitter"></i></a>
                                                    <a href="https://www.facebook.com/nj.takayuki" class="btn btn-just-icon btn-link btn-neutral" target="_blank"><i class="fa fa-facebook"></i></a>
                                                    <a href="https://github.com/TakayukiNJ" class="btn btn-just-icon btn-link btn-neutral" target="_blank"><i class="fa fa-github"></i></a>
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
                                                <a href="https://facebook.com/DRGK.feat.lhormace" target="_blank">
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
                                                <a href="https://facebook.com/mktrdbg" target="_blank">
                                                    <img class="img" src="{{ url('/') }}/../img/faces/yuya.jpg" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="card-body text-left">
                                                <h4 class="card-title">Terada Yuya</h4>
                                                <h6 class="card-category">General Researcher</h6>
                                                <p class="card-description">
                                                	スタートアップ企業でメンタルヘルス用チャットボットの開発経験がある、大阪大学卒のAIエンジニア。現在米国シリコンバレーやデンマークで資金調達を実施中。
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
            			<!-- team member ここまで -->
            			</div>
            			
            			
        			</div><!-- tabcontents　ここまで-->
                    
                    
                    
                    
                    
                    
                    
                    
                    
                </div> <!-- container -->
            <!--</div>-->
                    <!---->
                    <!---->
                    
            			
            			
            			
            			
            			
            			
            			
        			
        			
        			
            </div>
        </div>
    </div>
</body>
@endsection
@include('layouts.footer')