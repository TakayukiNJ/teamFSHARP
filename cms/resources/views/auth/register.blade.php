@extends('layouts.welcome_common')
@include('layouts.welcome_head')
@include('layouts.welcome_script')
@include('layouts.nav_lp')
@include('layouts.welcome_script')
@section('welcome_content')
<body class="full-screen register">
    <div class="wrapper">
        <div class="page-header" style="background-image: url('../img/farid-askerov.jpg');">
            <div class="filter"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-7 col-12 ml-auto">
                        <div class="info info-horizontal">
                            <div class="icon">
                                <i class="fa fa-umbrella"></i>
                            </div>
                            <div class="description">
                                <h3> 人とお金の流れを変える </h3>
                                <p>食費と宿泊費はプロジェクトオーナーが負担。<br>プロジェクトに対して、自分の資金調達の頑張り次第で、大きな事にもチャレンジできます。</p>
                            </div>
                        </div>
                        <div class="info info-horizontal">
                            <div class="icon">
                                <i class="fa fa-map-signs"></i>
                            </div>
                            <div class="description">
                                <h3> プロジェクトに参画 </h3>
                                <p>世界中の解決しなければいけない課題に対して、真剣に取り組んでいる世界中のプロジェクトに、計画段階から関わることができます。</p>
                            </div>
                        </div>
                        <div class="info info-horizontal">
                            <div class="icon">
                                <i class="fa fa-user-secret"></i>
                            </div>
                            <div class="description">
                                <h3> 安心・安全に社会貢献 </h3>
                                <p><a href="https://www.npo-homepage.go.jp/npoportal" target="_blank">内閣府公式サイト</a>に掲載されている特定非営利活動法人のプロジェクトのみ記載しています。</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-5 col-12 mr-auto">
                        <div class="card card-register">
                            <!--<a href="" class="btn btn-round btn-facebook">-->
                            <!--    <i class="fa fa-facebook" aria-hidden="true"></i> Facebook で 登録-->
                            <!--</a>-->
                            <!--<div class="division">-->
                            <!--    <div class="line l"></div>-->
                                <!--<span>登録</span>-->
                            <!--    <div class="line r"></div>-->
                            <!--</div>-->
                            <form class="register-form" role="form" method="POST" action="{{ url('/register') }}">
                                {{ csrf_field() }}
                                {{-- ユーザー名 --}}
                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <input id="name" type="text" class="form-control" name="name" placeholder="ユーザー名(半角英数)" value="{{ old('name') }}" required autofocus>
                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                {{-- メールアドレス --}}
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <input id="email" type="email" class="form-control" name="email" placeholder="メールアドレス" value="{{ old('email') }}" required>
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
                                    <input id="password-confirm" type="password" class="form-control" placeholder="パスワード確認" name="password_confirmation" required>
                                </div>
                                {{-- 利用規約とプライバシーポリシー --}}
                                <div class="form-group division">
                                    <input type="checkbox" name="terms-of-service" required>
                                    <strong><a href="{{ url('/terms') }}"> 利用規約 </a></strong>および<strong><a href="{{ url('/privacy_policy') }}"> プライバシーポリシー </a></strong>に同意する
                                </div>
                                <button type="submit" class="btn btn-block btn-primary btn-round">登録</button>
                            </form>
                            <div class="login">
                                <p>Already have an account? <a href="#0">Log in</a>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection
@include('layouts.footer')