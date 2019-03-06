@section('head_npo_lp')
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $npo_info->subtitle }}</title>
    <meta property="og:url" content="https://fsharp.me/{{$npo_info->npo_name}}" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="【{{ $npo_info->subtitle}}】{!! nl2br(e(trans($npo_info->title))) !!}" />
    <meta property="og:description" content="目標金額：{{$npo_info->support_price}}円（{{$parcentage}}％達成）現在：{{$currency_data}}円 ／ 寄付数：{{$npo_info->buyer}}" />
    <meta property="og:site_name" content="Fシャープ" />
    @if($npo_info->background_pic)
    <meta property="og:image" content="https://fsharp.me/img/project_back/{{ $npo_info->background_pic }}" />
    @else
    <meta property="og:image" content="https://fsharp.me/img/sdgs-logo/sdg_icon_18_ja.png" />
    @endif
            
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    
    <link rel="shortcut icon" href="{{ url('/') }}/../favicon.ico" type="img/icon/favicon.ico"/>
    <link rel="apple-touch-icon" sizes="76x76" href="{{ url('/') }}/../img/apple-icon.png">
    <link href="{{ url('/') }}/../css/bootstrap.min.css" rel="stylesheet" />
    <link href="{{ url('/') }}/../css/paper-kit.css?v=2.1.0" rel="stylesheet"/>
    <link href="{{ url('/') }}/../css/demo.css" rel="stylesheet" />
    <!-- Fonts and icons -->
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,300,700' rel='stylesheet' type='text/css'>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ url('/') }}/../css/nucleo-icons.css" rel="stylesheet">

<style type="text/css">
/* 2019.1.31 nakajo added badge css */
/*body {*/
/*  font-family: 'Allerta Stencil', sans-serif;*/
/*  padding: 0;*/
/*  margin: 70px 10px;*/
/*  background: #efefef;*/
/*  display: flex;*/
/*  justify-content: center;*/
/*  align-items: center;*/
/*  min-height: calc(99vh - 140px);*/
/*}*/

.badge {
  position: relative;
  letter-spacing: 0.08em;
  color: #fff;
  display: flex;
  justify-content: center;
  align-items: center;
  text-decoration: none;
  transition: -webkit-transform 0.3s ease;
  transition: transform 0.3s ease;
  transition: transform 0.3s ease, -webkit-transform 0.3s ease;
  -webkit-transform: rotate(-14deg);
          transform: rotate(-14deg);
  text-align: center;
  -webkit-filter: drop-shadow(0.25em 0.7em 0.95em rgba(0, 0, 0, 0.8));
          filter: drop-shadow(0.25em 0.7em 0.95em rgba(0, 0, 0, 0.8));
  /* min-size + (max-size - min-size) * ( (100vw - min-width) / ( max-width - min-width) ) */
  font-size: calc(11px + 14 * ( (100vw - 420px) / ( 860) ));
}
@media screen and (max-width: 420px) {
  .badge {
    font-size: 11px;
  }
}
@media screen and (min-width: 1280px) {
  .badge {
    font-size: 25px;
  }
}
.badge::before {
  content: "";
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
  display: block;
  width: 10em;
  height: 10em;
  border-radius: 100%;
  background: #111;
  opacity: 0.8;
  transition: opacity 0.3s linear;
}
.badge:hover {
  color: #fff;
  text-decoration: none;
  -webkit-transform: rotate(-10deg) scale(1.05);
          transform: rotate(-10deg) scale(1.05);
}
.badge:hover::before {
  opacity: 0.9;
}
.badge svg {
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
  display: block;
  z-index: 0;
  width: 10em;
  height: 10em;
}
.badge span {
  display: block;
  background: #111;
  border-radius: 0.4em;
  padding: 0.4em 1em;
  z-index: 1;
  min-width: 11em;
  border: 1px solid;
  text-transform: uppercase;
}
</style>

@endsection