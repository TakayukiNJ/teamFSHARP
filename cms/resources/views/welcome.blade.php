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
    			<h2 class="presentation-subtitle text-center">社会課題をもっと身近に。NPOと繋がりませんか？</h2>
    			
                <div class="w3-panel w3-large">
                    <br>
                    @if (Auth::guest())
                    <!--<a href="{{ url('/login') }}" class="btn-lg btn btn-outline-neutral"><span class="network-name">スタート</span></a>-->
                    <button type="button" class="btn-lg btn btn-outline-neutral" data-toggle="modal" data-target="#loginModal">
                        スタート
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
                                        {{-- ユーザー名 --}}
                                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                            <label for="name">ユーザー名(半角英数)</label>
                                            <input id="name" type="text" class="form-control" name="name" placeholder="ユーザー名(半角英数)" value="{{ old('name') }}" required autofocus>
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
                                            <label for="password">パスワード</label>
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
								<p class="description">寄付をすると、ユーザー名（もしくは法人名）が記載されます。寄付者は、マイページで「バッジ」が寄付履歴としてもらえ、最新情報が見れます。</p>
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
								<p>世界中の解決すべき課題のプロジェクトを、簡単に公開できます。寄付者やチームメンバーには、メールを送ることができます。</p>
                            </div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="info">
							<div class="icon icon-danger">
								<i class="nc-icon nc-bulb-63"></i>
							</div>
							<div class="description">
								<h4 class="info-title">ポイント還元</h4>
								<p>寄付が完了すると、<strong>1</strong>ポイント<strong>1</strong>円分のポイントが寄付金の<strong>1%</strong>分もらえます。現在はキャンペーン中で<strong>10%</strong>分のポイントがもらえます。（3/31まで）</p>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="info">
							<div class="icon icon-danger">
								<i class="nc-icon nc-sun-fog-29"></i>
							</div>
							<div class="description">
								<h4 class="info-title">NPO版ふるさと納税</h4>
								<p><a href="https://www.npo-homepage.go.jp/npoportal" target="_blank">内閣府公式サイト</a>掲載の認定NPOに寄付をすると、確定申告で税務署から約半分の金額が戻ります。ポイントとリターンを合わせると、同額相当の金額が戻ります。</p>
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
									<a href="/{{ $npo_info1->npo_name }}">
    									<img class="img img-raised" src="{{ url('/') }}/../img/sdgs-logo/sdg_icon_10_ja_2.png" />
	                                </a>
								</div>
								<div class="card-body">
									<h6 class="card-category text-danger">
									    Reduced Inequalities
									</h6>
									<h5 class="card-title">
										<a href="/{{ $npo_info1->npo_name }}">{{ $npo_info1->title }}</a>
									</h5>
									<p class="card-description">
										{{ $npo_info1->subtitle }}<br>
										現在合計：{{ $npo_info1->follower }}円<br>
										支援額：{{ $npo_info1->support_amount }}円<br>
                                        目標金額：{{ $npo_info1->support_price }}円<br>
										@if($npo_info1->support_contents != 'このページに名前を記載')
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
									<a href="/{{ $npo_info2->npo_name }}">
										<img class="img img-raised" src="{{ url('/') }}/../img/sdgs-logo/sdg_icon_15_ja.png" />
									</a>
								</div>
								<div class="card-body">
									<h6 class="card-category text-success">
										Life on Land
									</h6>
									<h5 class="card-title">
										<a href="/{{ $npo_info2->npo_name }}">{{ $npo_info2->title }}</a>
									</h5>
									<p class="card-description">
										{{ $npo_info2->subtitle }}<br>
										現在合計：{{ $npo_info2->follower }}円<br>
										支援額：{{ $npo_info2->support_amount }}円<br>
                                        目標金額：{{ $npo_info2->support_price }}円<br>
										@if($npo_info2->support_contents != 'このページに名前を記載')
    										リターン：{{ $npo_info2->support_contents }}<br>
										@endif
									</p>
                                    <hr>
                                    <div class="card-footer">
                                        <div class="author">
	                                       <span>{{ $npo_info2->manager }}</span>
    	                                </div>
                                        <div class="stats">
     	                                    現在寄付数：{{ $npo_info2->buyer }}
     	                                </div>
    	                            </div>
								</div>
							</div>
						</div>
                        <br>
						<div class="col-md-4">
							<div class="card card-blog">
								<div class="card-image">
									<a href="/{{ $npo_info3->npo_name }}">
										<img class="img img-raised" src="{{ url('/') }}/../img/sdgs-logo/sdg_icon_11_ja.png" />
									</a>
								</div>

								<div class="card-body">
									<h6 class="card-category text-warning">
										Sustainable Cities And Communities
									</h6>
									<h5 class="card-title">
										<a href="/{{ $npo_info3->npo_name }}">{{ $npo_info3->title }}</a>
									</h5>
									<p class="card-description">
										{{ $npo_info3->subtitle }}<br>
										現在合計：{{ $npo_info3->follower }}円<br>
										支援額：{{ $npo_info3->support_amount }}円<br>
                                        目標金額：{{ $npo_info3->support_price }}円<br>
										@if($npo_info3->support_contents != 'このページに名前を記載')
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
                                        <h2 class="presentation-subtitle text-center">社会課題をもっと身近に。NPOと繋がりませんか？</h2>

                                        <div class="w3-panel w3-large">
                                            <br>
                                            @if (Auth::guest())
                                            <button type="button" class="btn-lg btn btn-outline-neutral" data-toggle="modal" data-target="#loginModal">
                                                スタート
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
                                                                {{-- ユーザー名 --}}
                                                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                                                    <label for="name">ユーザー名(半角英数)</label>
                                                                    <input id="name" type="text" class="form-control" name="name" placeholder="ユーザー名(半角英数)" value="{{ old('name') }}" required autofocus>
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
                                                                    <label for="password">パスワード</label>
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