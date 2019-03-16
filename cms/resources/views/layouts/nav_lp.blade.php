@section('nav_lp')
<body class="presentation-page loading">
    <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute">
        <div class="container">
            <div class="navbar-translate">
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{ url('/') }}">F♯ BETA</a>
                </div>
        
                <button class="navbar-toggler navbar-burger" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar"></span>
                    <span class="navbar-toggler-bar"></span>
                    <span class="navbar-toggler-bar"></span>
                </button>
            </div>
        
            <div class="collapse navbar-collapse">
                
                <ul class="navbar-nav ml-auto">
                    {{--
                    <form class="form-inline" action="{{ url('/npo_registers') }}">
                        <input class="form-control mr-sm-2 no-border" type="text" placeholder="Search" name="search">
                        <button type="submit" class="btn btn-primary btn-just-icon btn-round"><i class="nc-icon nc-zoom-split"></i></button>
                    </form>
                    --}}
                    
                    @if (Auth::guest())
                        <li class="nav-item">
                            <a class="nav-link" data-scroll="true" href="{{ url('/login') }}">
                                @lang('app.login')
                            </a>
                        </li>
                        <li class="nav-item">
                            <button type="button" class="btn btn-round btn-danger" data-toggle="modal" data-target="#loginModal">
                                登録
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
                                                {{-- ニックネーム(半角英数) --}}
                                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                                    <label for="name">ニックネーム(半角英数)</label>
                                                    <input id="name" type="text" class="form-control" name="name" placeholder="ニックネーム(半角英数)" value="{{ old('name') }}" required autofocus>
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
                                                    <label for="password">パスワード(8文字以上)</label>
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
                        </li>
                    @else
                        @if ((Auth::user()->npo) == "")
                        <li class="nav-item">
                            <a class="nav-link" href="https://goo.gl/YZLao1" target="_blank">@lang('app.ask my page')</a>
                        </li>
        						
        				<li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle"  data-toggle="dropdown" href="javascript:void(0)">{{ Auth::user()->name }}</a>
                            <ul class="dropdown-menu dropdown-menu-right dropdown-danger">
        						<a class="dropdown-item" href="{{ url('/npo_registers/create') }}"><i class="nc-icon nc-money-coins"></i>&nbsp; 団体登録</a>
                        @else
                        <li class="nav-item">
                            <a class="nav-link" href="https://goo.gl/YZLao1" target="_blank">@lang('app.ask my page')</a>
                        </li>
                            
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="javascript:void(0)">{{ Auth::user()->name }} </a>
                            <ul class="dropdown-menu dropdown-menu-right dropdown-danger">
                                <a class="dropdown-item" href="{{ url('/npo_registers') }}"><i class="nc-icon nc-money-coins"></i>&nbsp; {{ Auth::user()->npo }}</a>
                        @endif        		
                                <a class="dropdown-item" href="{{ url('home/home_own_timeline') }}"><i class="nc-icon nc-badge"></i>&nbsp; @lang('app.mypage')</a>
                                <a class="dropdown-item" href="{{ url('home/home_register') }}"><i class="nc-icon nc-ruler-pencil"></i>&nbsp; @lang('app.mypage edit')</a>
                                <a class="dropdown-item" href="{{ url('/logout') }}" onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();"><i class="nc-icon nc-spaceship"></i>&nbsp; @lang('app.logout')</a>
                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
@endsection