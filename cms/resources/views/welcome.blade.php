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
    			<h2 class="presentation-subtitle text-center">NPOの資金不足を解決する、資金調達Webサービス</h2>
    			<div class="w3-panel w3-large">
                    <br>
                    <button type="button" class="btn-lg btn btn-neutral" data-toggle="modal" data-target="#howtoModal">
                        使い方
                    </button>
                    <div class="modal fade" id="howtoModal" tabindex="-1" role="dialog" aria-hidden="false">
                        <div class="modal-dialog modal-register">
                            <div class="modal-content">
                                <div class="modal-header no-border-header text-center">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                    <h3 class="modal-title text-center">使い方</h3>
                                </div>
                                <div class="modal-body">
                                	<iframe class="text-center" width="392" height="220" src="https://www.youtube.com/embed/pxyYDFHtJp4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	                                <br>
	                                <br>
	                                <h5>使い方の手順</h5>
                                	<p>①ユーザー登録</p>
									<p>②団体登録</p>
									<p>③プロジェクト登録</p>
									<p>④プロジェクト編集・公開</p>
									<p>⑤拡散</p>
                                    <div class="modal-footer no-border-footer">
                                        <p>質問がございました、お気軽にご連絡ください→g181tg2061@dhw.ac.jp</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if (Auth::guest())
                    <!--<a href="{{ url('/login') }}" class="btn-lg btn btn-outline-neutral"><span class="network-name">スタート</span></a>-->
                    <button type="button" class="btn-lg btn btn-outline-neutral" data-toggle="modal" data-target="#loginModal">
                        スタート
                    </button>
                    @if($errors->has('name') || $errors->has('email') || $errors->has('password'))
                        <br>
                    @endif
                    @if($errors->has('name'))
                        <br>
                        <span class="help-block division">
                        <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                    @if ($errors->has('email'))
                        <br>
                        <span class="help-block division">
                        <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                    @if ($errors->has('password'))
                        <br>
                        <span class="help-block division">
                        <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                    {{-- NPO登録をまだしていなかった場合 --}}
                    @elseif ((Auth::user()->npo) == "")
                    <a href="{{ url('/home/home_own_timeline') }}" class="btn-lg btn btn-outline-neutral"><span class="network-name">スタート</span></a>
                    @else
                    <a href="{{ url('/npo_registers') }}" class="btn-lg btn btn-outline-neutral"><span class="network-name">スタート</span></a>
                    @endif
                    <br>
                    <h1 class="presentation-subtitle text-center">▼</h1>
                </div>
    		</div>
    	</div>
    </div>
    
    <div class="team-5 section-image" style="background-image: url('/img/sections/martin-knize.jpg')">
        <div class="projects-1">
            <div class="container">
                <div class="col-md-8 ml-auto mr-auto text-center">
                    <h2 class="title">Features<br></h2>
                    <h5 class="description">このWebサービスでできること</h5>
                    <br><br>
                </div>
                <div class="row">
					<div class="col-md-3">
						<div class="info">
							<div class="icon icon-danger">
								<i class="nc-icon nc-palette"></i>
							</div>
							<div class="description">
								<h4 class="info-title">人とお金の流れを可視化</h4>
								<p class="description">寄付すると、登録したニックネームが記載されます。プロジェクトページあるいはマイページで、黒いバッジをタップすると、寄付履歴と最新情報を見ることができます。</p>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="info">
							<div class="icon icon-danger">
								<i class="nc-icon nc-chart-bar-32"></i>
							</div>
							<div class="description">
								<h4 class="info-title">簡単公開・簡単管理 </h4>
								<p>ログイン後、右上のメニューバーから団体登録をしてください。審査に合格後、ご自身の団体とプロジェクトを簡単に公開と管理ができ、資金調達がより手軽にできます。</p>
                            </div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="info">
							<div class="icon icon-danger">
								<i class="nc-icon nc-bulb-63"></i>
							</div>
							<div class="description">
								<h4 class="info-title">SDGsポイント</h4>
								<p>総額の<strong>1%</strong>がポイントとして溜まり、マイページで確認ができます。<strong>SDGs</strong>の内訳も見ることができ、自分がどの分野に貢献したのかご確認いただけます。</p>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="info">
							<div class="icon icon-danger">
								<i class="nc-icon nc-sun-fog-29"></i>
							</div>
							<div class="description">
								<h4 class="info-title">リターン</h4>
								<p>プロジェクトによっては、リターンがあるものや、個数に限りがございます。(掲載側は、自由に変更できます。突然内容が変わることもあるとは思いますが、ご了承ください。){{--宛先や詳細などに関しては、メッセージでやりとりをしてください。<br>※費用は一切かかりません。--}}</p>
							</div>
						</div>
					</div>
				</div>

                <div class="col-md-8 ml-auto mr-auto text-center">
                    <h2 class="title">Projects Pick Up<br></h2>
                    <h5 class="description">登録されたプロジェクトの中から3つ選出</h5>
                    <br><br>
                </div>
                {{--
                Muted Text グレー
                Primary Text 水色
                Success Text グリーン
                Info Text 青
                Warning Text 黄色
                Danger Text レッド
                --}}
                <div class="col-md-10 ml-auto mr-auto">
					<div class="row">
						<div class="col-md-4">
							<div class="card card-blog">
								<div class="card-image">
									<a href="/{{$npo1}}/{{ $npo_info1->npo_name }}">
									    @if($npo_info1->background_pic)
                                        <img class="img img-raised" src="{{ url('/') }}/../img/project_back/{{ $npo_info1->background_pic }}" />
                                        @else
                                        <img class="img img-raised" src="https://images.unsplash.com/photo-1486310662856-32058c639c65?dpr=2&auto=format&fit=crop&w=1500&h=1125&q=80&cs=tinysrgb&crop=">
                                        @endif
    								</a>
								</div>
								<div class="card-body">
									<!--<h6 class="card-category text-warning">-->
									<!--    Sustainable Cities And Communities-->
									<!--</h6>-->
									<h5 class="card-title">
										<a href="/{{$npo1}}/{{ $npo_info1->npo_name }}">{{ $npo_info1->subtitle }}</a>
									</h5>
									<p class="card-description">
										{{ $npo_info1->title }}<br>
										現在合計：{{ $npo_info1->follower }}円<br>
										一口：{{ $npo_info1->support_amount }}円<br>
                                        残り：{{ $npo_info1->support_limit - $npo_info1->buyer}}口<br>
										@if($npo_info1->support_contents != '')
    										リターン：{{ $npo_info1->support_contents }}<br>
										@endif
									</p>
                                    <hr>
                                    <div class="card-footer">
                                        <div class="author">
	                                       <span>{{ $npo_info1->manager }}</span>
    	                                </div>
                                        <div class="stats">
     	                                    現在寄付数：{{ $npo_info1->buyer }}
     	                                </div>
    	                            </div>
								</div>
							</div>
						</div>
						<br>
						<div class="col-md-4">
							<div class="card card-blog">
								<div class="card-image">
									<a href="/{{$npo2}}/{{ $npo_info2->npo_name }}">
									    @if($npo_info2->background_pic)
                                        <img class="img img-raised" src="{{ url('/') }}/../img/project_back/{{ $npo_info2->background_pic }}" />
                                        @else
                                        <img class="img img-raised" src="https://images.unsplash.com/photo-1486310662856-32058c639c65?dpr=2&auto=format&fit=crop&w=1500&h=1125&q=80&cs=tinysrgb&crop=">
                                        @endif
									</a>
								</div>
								<div class="card-body">
									<!--<h6 class="card-category text-danger">-->
									<!--	Quality Education-->
									<!--</h6>-->
									<h5 class="card-title">
										<a href="/{{$npo2}}/{{ $npo_info2->npo_name }}">{{ $npo_info2->subtitle }}</a>
									</h5>
									<p class="card-description">
										{{ $npo_info2->title }}<br>
										現在合計：{{ $npo_info2->follower }}円<br>
										一口：{{ $npo_info2->support_amount }}円<br>
                                        残り：{{ $npo_info2->support_limit - $npo_info2->buyer}}口<br>
										@if($npo_info2->support_contents != '')
    										リターン：{{ $npo_info2->support_contents }}<br>
										@endif
									</p>
                                    <hr>
                                    <div class="card-footer">
                                        <div class="author">
	                                       <span>{{ $npo_info2->manager }}</span>
    	                                </div>
                                        <div class="stats">
     	                                    現在寄付数：{{ $npo_info2->buyer}}
     	                                </div>
    	                            </div>
								</div>
							</div>
						</div>
                        <br>
						<div class="col-md-4">
							<div class="card card-blog">
								<div class="card-image">
									<a href="/{{$npo3}}/{{ $npo_info3->npo_name }}">
									    @if($npo_info3->background_pic)
                                        <img class="img img-raised" src="{{ url('/') }}/../img/project_back/{{ $npo_info3->background_pic }}" />
                                        @else
                                        <img class="img img-raised" src="https://images.unsplash.com/photo-1486310662856-32058c639c65?dpr=2&auto=format&fit=crop&w=1500&h=1125&q=80&cs=tinysrgb&crop=">
                                        @endif
										{{--<img class="img img-raised" src="{{ url('/') }}/../img/sdgs-logo/sdg_icon_15_ja.png" /> --}}
									</a>
								</div>
								<div class="card-body">
									<!--<h6 class="card-category text-success">-->
									<!--	Life No Land-->
									<!--</h6>-->
									<h5 class="card-title">
										<a href="/{{$npo3}}/{{ $npo_info3->npo_name }}">{{ $npo_info3->subtitle }}</a>
									</h5>
									<p class="card-description">
										{{ $npo_info3->title }}<br>
										現在合計：{{ $npo_info3->follower }}円<br>
										一口：{{ $npo_info3->support_amount }}円<br>
                                        残り：{{ $npo_info3->support_limit - $npo_info3->buyer}}口<br>
										@if($npo_info3->support_contents != '')
    										リターン：{{ $npo_info3->support_contents }}<br>
										@endif
									</p>
                                    <hr>
                                    <div class="card-footer">
                                        <div class="author">
	                                       <span>{{ $npo_info3->manager }}</span>
    	                                </div>
                                        <div class="stats">
     	                                    現在寄付数：{{ $npo_info3->buyer }}
     	                                </div>
    	                            </div>
								</div>
							</div>
						</div>
					</div>
				    <div class="row">
                        <div class="col-md-12 ml-auto mr-auto">
        					<!--<h4 class="title">NPO法人（内閣府公式サイトに掲載されている特定非営利活動法人）や社会課題の解決を目的とする団体のプロジェクトに、チームメンバーとして関わったり、そのプロジェクトに寄付を行ったりすると、当サイトにユーザー名や自分の団体名を証として掲載することができます。</h4>-->
        					<div class="page-header section-dark" style="background-image: url('/img/farid-askerov.jpg')">
                                <div class="content-center">
                                    <div class="container">
                                        <div class="title-brand">
                                            <h1 class="presentation-title"></h1>
                                        </div>
                                        <h2 class="presentation-subtitle text-center">NPOの資金不足を解決する、資金調達Webサービス</h2>

                                        <div class="w3-panel w3-large">
                                            <br>
                                            @if (Auth::guest())
                                            <button type="button" class="btn-lg btn btn-outline-neutral" data-toggle="modal" data-target="#loginModal">
                                                スタート
                                            </button>
                                            {{-- NPO登録がなければ--}}
                                            @elseif ((Auth::user()->npo) == "")
                                            <a href="{{ url('//home/home_own_timeline') }}" class="btn-lg btn btn-outline-neutral"><span class="network-name">スタート</span></a>
                                            @else
                                            <a href="{{ url('/npo_registers') }}" class="btn-lg btn btn-outline-neutral"><span class="network-name">スタート</span></a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                        	</div>
            			</div>
        				<!-- overview ここまで -->
        			</div>
    			</div><!-- tabcontents　ここまで-->
            </div> <!-- container -->
        <!--</div>-->
        </div>
    </div>
</body>
@endsection
@include('layouts.footer')