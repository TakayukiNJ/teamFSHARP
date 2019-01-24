@section('nav_home')
<body class="profile presentation-page loading">
    <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute">
        <div class="container">
            <div class="navbar-translate">
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{ url('/') }}">F♯</a>
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
                        <a class="btn btn-round btn-danger" href="{{ url('/register') }}">
                            @lang('app.register')
                        </a>
                    </li>
                    @else
                        @if ((Auth::user()->npo) == "")
                        <li class="nav-item">
                            {{--<a class="nav-link" href="{{ url('/npo_registers/create') }}">@lang('app.produceMyPage')</a>--}}
                            <a class="nav-link" href="{{ url('/npo_registers/create') }}">お問い合わせ</a>
                        </li>
        						
        				<li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle"  data-toggle="dropdown" href="javascript:void(0)">{{ Auth::user()->name }}</a>
                            <ul class="dropdown-menu dropdown-menu-right dropdown-danger">
        						<a class="dropdown-item" href="{{ url('/npo_registers/create') }}"><i class="nc-icon nc-money-coins"></i>&nbsp; 団体登録</a>
                        @else
                        <li class="nav-item">
                            <a class="nav-link" href="https://goo.gl/YZLao1">@lang('app.ask my page')</a>
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