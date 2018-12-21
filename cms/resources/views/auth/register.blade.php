@extends('layouts.welcome_common')
@include('layouts.welcome_head')
@include('layouts.welcome_script')
@include('layouts.nav_lp')
@include('layouts.welcome_script')
@section('welcome_content')
<body class="full-screen register">
    <div class="wrapper">
        <div class="page-header" style="background-image: url('../assets/img/sections/soroush-karimi.jpg');">
            <div class="filter"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-7 col-12 ml-auto">
                        <div class="info info-horizontal">
                            <div class="icon">
                                <i class="fa fa-umbrella"></i>
                            </div>
                            <div class="description">
                                <h3> We've got you covered </h3>
                                <p>Larger, yet dramatically thinner. More powerful, but remarkably power efficient. Everything you need in a single case.</p>
                            </div>
                        </div>
                        <div class="info info-horizontal">
                            <div class="icon">
                                <i class="fa fa-map-signs"></i>
                            </div>
                            <div class="description">
                                <h3> Clear Directions </h3>
                                <p>Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas.</p>
                            </div>
                        </div>
                        <div class="info info-horizontal">
                            <div class="icon">
                                <i class="fa fa-user-secret"></i>
                            </div>
                            <div class="description">
                                <h3> We value your privacy </h3>
                                <p>Completely synergize resource taxing relationships via premier niche markets.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-5 col-12 mr-auto">
                        <div class="card card-register">
                            {{--<h3 class="card-title text-center">Register</h3>--}}
                            <div class="social">
                                <button href="#paper-kit" class="btn btn-just-icon btn-facebook"><i class="fa fa-facebook"></i></button>
                                <button href="#paper-kit" class="btn btn-just-icon btn-google"><i class="fa fa-google"></i></button>
                                <button href="#paper-kit" class="btn btn-just-icon btn-twitter"><i class="fa fa-twitter"></i></button>
                            </div>

                            <div class="division">
                                <div class="line l"></div>
                                <span>or</span>
                                <div class="line r"></div>
                            </div>
                            <form class="register-form" role="form" method="POST" action="{{ url('/register') }}">
                                {{ csrf_field() }}
                                {{-- ユーザー名 --}}
                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <input id="name" type="text" class="form-control" name="name" placeholder="ユーザー名(ニックネーム)" value="{{ old('name') }}" required autofocus>
                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                {{-- メールアドレス --}}
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <input id="email" type="email" class="form-control" placeholder="メールアドレス" name="email" value="{{ old('email') }}" required>
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                {{-- パスワード --}}
                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <input id="password" type="password" class="form-control" placeholder="パスワード" name="password" required>
                                        @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                {{-- パスワード確認 --}}
                                <div class="form-group">
                                    <input id="password-confirm" type="password" class="form-control" placeholder="パスワード確認"　name="password_confirmation" required>
                                </div>
                                {{-- 利用規約とプライバシーポリシー --}}
                                <div class="form-group division">
                                    <input type="checkbox" name="terms-of-service" required>
                                    <strong><a href="{{ url('/terms') }}"> 利用規約 </a></strong>および<strong><a href="{{ url('/privacy_policy') }}"> プライバシーポリシー </a></strong>に同意する
                                </div>
                                {{--<div class="form-group">--}}
                                    {{--<button type="submit" class="btn btn-primary">登録</button>--}}
                                {{--</div>--}}
                                <button class="btn btn-block btn-primary btn-round">登録</button>
                            </form>
                            <div class="login">
                                <p>Already have an account? <a href="#0">Log in</a>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="demo-footer text-center">
                <h6>&copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by F♯</h6>
            </div>
        </div>
    </div>
</body>
@endsection
