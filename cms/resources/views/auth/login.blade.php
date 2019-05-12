@extends('layouts.welcome_common')
@include('layouts.welcome_head')
@include('layouts.welcome_script')
@include('layouts.nav_lp')
@include('layouts.welcome_script')
@section('welcome_content')
<body class="full-screen login">
    <div class="wrapper">
        <div class="page-header" style="background-image: url('/img/sections/bruno-abatti.jpg');">
            <br>
            <div class="filter"><br></div>
            <br>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 ml-auto mr-auto">
                        <div class="card card-register">
                            <h3 class="card-title">ようこそ</h3>
                            <form class="register-form" role="form" method="POST" action="{{ url('/login') }}">
                            {{ csrf_field() }}
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email">E-Mailアドレス</label>
                                <div id="root">
                                    <input id="email" type="email" class="form-control" name="email" v-model="email" value="{{ old('email') }}" required autofocus>
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password">パスワード</label>
                                <input id="password" type="password" class="form-control" name="password" required>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" name="remember" {{ old('remember') ? 'checked' : ''}}> 次回から自動ログイン
                                </label>
                            </div>
                            <div class="form-group forgot">
                                <button type="submit" class="btn btn-danger btn-block btn-round">ログイン</button>
                                <button type="button" class="btn btn-outline-neutral" data-toggle="modal" data-target="#loginModal">
                                    ご登録がお済みでない方はこちら
                                </button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                <br>
				<div class="demo-footer text-center">
					<h6>&copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by F♯</h6>
				</div>
            </div>
        </div>
    </div>

</body>
@endsection
