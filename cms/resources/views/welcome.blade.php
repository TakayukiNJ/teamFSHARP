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
    			<h2 class="presentation-subtitle text-center">F♯でそのプロジェクトの資金、集めませんか？</h2>
    			
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
                                            <label for="name">ユーザー名</label>
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
                                                    <strong><a href="{{ url('/terms') }}" target="_blank"> 利用規約 </a>および</strong><strong><a href="{{ url('/privacy_policy') }}" target="_blank"> プライバシーポリシー </a></strong>に同意する（チェックを入れる）
                                                    
                                                </span>
                                            </label>
                                        </div>
                                        <button type="submit" class="btn btn-block btn-primary btn-round">登録</button>
                                    </form>
                                    <div class="modal-footer no-border-footer">
                                        <p>すでにご登録済みの方は <a href="#0">こちら</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- NPO登録をまだしていなかった場合 --}}
                    @elseif ((Auth::user()->npo) == "")
                    <a href="{{ url('//home/home_own_timeline') }}" class="btn-lg btn btn-outline-neutral"><span class="network-name">スタート</span></a>
                    @else
                    <a href="{{ url('/npo_registers') }}" class="btn-lg btn btn-outline-neutral"><span class="network-name">スタート</span></a>
                    @endif
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
								<p class="description">寄付をすると、ユーザー名（もしくは法人名）が記載されます。</p>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="info">
							<div class="icon icon-danger">
								<i class="nc-icon nc-chart-bar-32"></i>
							</div>
							<div class="description">
								<h4 class="info-title">プロジェクトを簡単公開 </h4>
								<p>世界中の解決すべき課題のプロジェクトを、簡単に公開できます。</p>
                            </div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="info">
							<div class="icon icon-danger">
								<i class="nc-icon nc-bulb-63"></i>
							</div>
							<div class="description">
								<h4 class="info-title">手数料258円+4.6%</h4>
								<p>支払者のみ、<strong>258</strong>円(税込)と<strong>4.6%</strong>手数料が決済時にかかります。集まった寄付金は、<strong>全額担当者にお渡しします</strong>。</p>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="info">
							<div class="icon icon-danger">
								<i class="nc-icon nc-sun-fog-29"></i>
							</div>
							<div class="description">
								<h4 class="info-title">NPO版 ふるさと納税</h4>
								<p><a href="https://www.npo-homepage.go.jp/npoportal" target="_blank">内閣府公式サイト</a>に掲載されている認定NPO法人に、仮に毎月<strong>1,000</strong>円の寄付をした場合、最大<strong>5,000</strong>円が確定申告で税務署から戻ってきます。</p>
							</div>
						</div>
					</div>
				</div>

                <div class="col-md-8 ml-auto mr-auto text-center">
                    <h2 class="title">Projects Pick Up<br></h2>
                    <h5 class="description">登録されたプロジェクトの中から3つ選出</h5>
                    <br><br>
                </div>
                <div class="col-md-10 ml-auto mr-auto">
					<div class="row">
						<div class="col-md-4">
							<div class="card card-blog">
								<div class="card-image">
									<a href="https://fsharp.me/nipponshotenkai">
										<img class="img img-raised" src="{{ url('/') }}/../img/farid-askerov.jpg" />
									</a>
								</div>
								<div class="card-body">
									<h6 class="card-category text-danger">
									    Decent Work And Economic Growth
									</h6>
									<h5 class="card-title">
										<a href="https://fsharp.me/nipponshotenkai">NPO法人日本商店会</a>
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
    	                                    <a href="https://fsharp.me/nipponshotenkai">
    	                                       <img src="{{ url('/') }}/../img/faces/kazu.jpg" alt="..." class="avatar img-raised">
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
						<br>
						<div class="col-md-4">
							<div class="card card-blog">
								<div class="card-image">
									<a href="https://fsharp.me/helper-c">
										<img class="img img-raised" src="{{ url('/') }}/../img/sections/david-marcu.jpg" />
									</a>
								</div>
								<div class="card-body">
									<h6 class="card-category text-success">
										Good Health And Well-being
									</h6>
									<h5 class="card-title">
										<a href="https://fsharp.me/helper-c">NPO法人ヘルパーコール</a>
									</h5>
									<p class="card-description">
										今後、益々高齢化社会が進むなか、高齢者の方々が、生き活き楽しく過ごしていただけるようなサービス提供を目指し、ご利用者やご家族、また職員・スタッフの全員が、前を向いて元気よく歩いていけるよう、運営してまいります。
									</p>
                                    <hr>
                                    <div class="card-footer">
                                        <div class="author">
    	                                    <a href="https://fsharp.me/helper-c">
    	                                       <span>支援者0人</span>
    	                                    </a>
    	                                </div>
                                        <div class="stats">
     	                                    100,000円
     	                                </div>
    	                            </div>
								</div>
							</div>
						</div>
                        <br>
						<div class="col-md-4">
							<div class="card card-blog">
								<div class="card-image">
									<a href="https://fsharp.me/DHUMediaArt">
										<img class="img img-raised" src="{{ url('/') }}/../img/sections/takahiro-sakamoto.jpg" />
									</a>
								</div>

								<div class="card-body">
									<h6 class="card-category text-muted">
										Partnerships For The Goals
									</h6>
									<h5 class="card-title">
										<a href="https://fsharp.me/DHUMediaArt">落合陽一メディアアート㍻展＠デジハリ</a>
									</h5>
									<p class="card-description">
									    2017年からデジタルハリウッド大学で開催されている落合陽一先生の授業の最終成果物を展示する展示会です。2018年の展示会の名前は、㍻展です。	
									</p>
                                    <hr>
                                    <div class="card-footer">
                                        <div class="author">
    	                                    <a href="https://fsharp.me/DHUMediaArt">
    	                                       <img src="{{ url('/') }}/../img/faces/n0bisukeRice.jpg" alt="..." class="avatar img-raised">
    	                                       <span>支援者3人</span>
    	                                    </a>
    	                                </div>
                                        <div class="stats">
     	                                    9,800円
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
                                            <!--<div class="type">F♯</div>-->
                                        </div>
                                        <h2 class="presentation-subtitle text-center">F♯でそのプロジェクトの資金、集めませんか？</h2>

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
                                                                    <label for="name">ユーザー名</label>
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
                                                                            <strong><a href="{{ url('/terms') }}" target="_blank"> 利用規約 </a>および</strong><strong><a href="{{ url('/privacy_policy') }}" target="_blank"> プライバシーポリシー </a></strong>に同意する（チェックを入れる）
                                                                            
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                                <button type="submit" class="btn btn-block btn-primary btn-round">登録</button>
                                                            </form>
                                                            <div class="modal-footer no-border-footer">
                                                                <p>すでにご登録済みの方は <a href="#0">こちら</a></p>
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