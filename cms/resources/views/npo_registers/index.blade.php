@extends('layouts.common_nav_lp')
@include('layouts.head_npo_index')
@include('layouts.script')
@include('layouts.nav_lp')
@section('content')
@include('error')
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<div class="wrapper">
    <div class="page-header page-header-small" style="background-image: url('https://images.unsplash.com/photo-1486310662856-32058c639c65?dpr=2&auto=format&fit=crop&w=1500&h=1125&q=80&cs=tinysrgb&crop=');">
        <div class="filter"></div>
        <div class="content-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 ml-auto">
                        <div class="owner text-center">

                            <form action="{{action('FollowController@store')}}" method="POST">
                                <input name="followee" type="hidden" value="{{ $npo_owner_info->npo }}" readonly="readonly">

                                <div class="name">
                                    <h3>{{$npo_owner_info->npo}} <small>({{ $follower_count }})</small></h3>
                                </div>
                                @if(Auth::user())
                                    @if($npo_owner_info->npo == Auth::user()->npo)
                                    <div class="following">
                                        <a class="btn btn-success" href="{{ route('npo_registers.create') }}"><i class="glyphicon glyphicon-plus"></i>プロジェクト作成</a>
                                    </div>
                                    @else
                                        @if($this_follow)
                                            @if($this_follow->delete_flg === 0)
                                                <input name="delete_flg" type="hidden" value="1" readonly="readonly">
                                                <button class="btn btn-neutral btn-fill">
                                                    フォロー中
                                                </button>
                                            @else
                                                <input name="delete_flg" type="hidden" value="0" readonly="readonly">
                                                <button class="btn btn-outline-neutral btn-fill">
                                                    フォローする
                                                </button>
                                            @endif
                                        @else
                                            <input name="new_flg" type="hidden" value="new" readonly="readonly">
                                            <input name="delete_flg" type="hidden" value="0" readonly="readonly">
                                            <button class="btn btn-outline-neutral btn-fill">
                                                フォローする
                                            </button>
                                        @endif
                                    @endif
                                @else
                                <button type="button" class="btn btn-outline-neutral" data-toggle="modal" data-target="#loginModal">
                                    フォローする
                                </button>
                                @endif

                                {!! csrf_field() !!}
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="profile-content section-white-gray">
        <div class="container">
            <div class="row owner">
                <div class="col-md-2 col-sm-4 col-6 ml-auto mr-auto text-center">
                    <div class="avatar">
                        @if($npo_info)
                            @if($npo_info->avater)
                            <img src="{{ url('/') }}/img/project_logo/{{$npo_info->avater}}" class="img-thumbnail img-no-padding img-responsive" alt="Rounded Image" width="32" height="32">
                            @else
                            <br><br><br>
                            @endif
                        @else
                        <br><br><br>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 ml-auto mr-auto text-center">
                    <p>管理者：<a href="{{ url('/home') }}/{{ $npo_owner_info->name }}">{{ $npo_owner_info->name }}さん</a></p>
                    <div class="description-details">
                        <ul class="list-unstyled">
                            <li>合計獲得金額：{{ number_format($project_total_price) }}円</li>
                            @if(Auth::user())
                            @if($npo_owner_info->npo == Auth::user()->npo)
                            <li>出金可能金額：{{ $npo_owner_info->total_deposit }}円</li>
                            <li>※出金可能金額は管理者のみ表示</li>
                            @endif
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                @if($npo_registers->count())
                    @foreach($npo_registers as $npo_register)
                        <div class="col-md-4">
                            <div class="card card-profile card-plain">
                                <div class="card-img-top">
                                    @if(($npo_register->npo_name) == "")
                                        <a href="{{ url('/npo_registers') }}/{{ $npo_register->id }}">
                                    @else
                                        <a href="/{{$npo_owner_info->npo}}/{{ $npo_register->npo_name }}">
                                    @endif
                                        @if($npo_register->background_pic)
                                        <img class="img" src="/img/project_back/{{ $npo_register->background_pic }}" />
                                        @else
                                        <!--<img class="img" src="https://images.unsplash.com/photo-1486310662856-32058c639c65?dpr=2&auto=format&fit=crop&w=1500&h=1125&q=80&cs=tinysrgb&crop=" />-->
                                        @endif
                                    </a>
                                </div>
                                <div class="card-body">
                                    @if(($npo_register->proval) > 0)
                                        <h4 class="card-title"><a href="/{{$npo_owner_info->npo}}/{{ $npo_register->npo_name }}">{{$npo_register->subtitle}}</a></h4>
                                        <p class="card-description">獲得金額: {{number_format($npo_register->follower)}} 円</p>
                                        <p class="card-description">寄付数: {{$npo_register->buyer}}</p>
                                        <a class="btn btn-info btn-round" href="/{{$npo_owner_info->npo}}/{{ $npo_register->npo_name }}">公開画面</a>
                                        @if(Auth::user())
                                        @if($npo_owner_info->npo == Auth::user()->npo)
                                        <a class="btn btn-success btn-round" href="{{ url('/npo_registers') }}/{{ $npo_register->id }}/edit">編集</a>
                                        @endif
                                        @endif
                                    @elseif(Auth::user())
                                        @if($npo_owner_info->npo == Auth::user()->npo)
                                            @if(($npo_register->proval) == 0)
                                            <h4 class="card-title"><a href="{{ url('/npo_registers') }}/{{ $npo_register->id }}">{{$npo_register->subtitle}}（未公開）</a></h4>
                                            @elseif(($npo_register->proval) == -1)
                                            <h4 class="card-title"><a href="/{{$npo_owner_info->npo}}/{{ $npo_register->npo_name }}">{{$npo_register->subtitle}}（期限切れ）</a></h4>
                                            @elseif(($npo_register->proval) == -2)
                                            <h4 class="card-title"><a href="/{{$npo_owner_info->npo}}/{{ $npo_register->npo_name }}">{{$npo_register->subtitle}}（要編集）</a></h4>
                                            @else
                                            <h4 class="card-title"><a href="/{{$npo_owner_info->npo}}/{{ $npo_register->npo_name }}">{{$npo_register->subtitle}}</a></h4>
                                            @endif
                                            <p class="card-description">獲得金額: {{number_format($npo_register->follower)}} 円</p>
                                            <p class="card-description">寄付数: {{$npo_register->buyer}}</p>
                                            @if(($npo_register->npo_name) == "")
                                                <a class="btn btn-info btn-round" href="{{ url('/npo_registers') }}/{{ $npo_register->id }}">プレビュー</a>
                                                <a class="btn btn-success btn-round" href="{{ url('/npo_registers') }}/{{ $npo_register->id }}/edit">編集</a>
                                            @else
                                                <a class="btn btn-info btn-round" href="/{{$npo_owner_info->npo}}/{{ $npo_register->npo_name }}">プレビュー</a>
                                                <a class="btn btn-success btn-round" href="{{ url('/npo_registers') }}/{{ $npo_register->id }}/edit">編集</a>
                                            @endif
                                            @if(($npo_register->published) == "")
                                            <form action="{{ route('npo_registers.destroy', $npo_register->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                                                <input type="hidden" name="_method" value="DELETE">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <button type="submit" class="btn btn-danger btn-round">削除</button>
                                            </form>
                                            @endif
                                        @endif
                                    @endif
                                </div>
            				</div>
        				</div>
                    @endforeach
                    {!! $npo_registers->render() !!}
                @else
                <!--<h3 class="text-center alert alert-info">Empty!</h3>-->
                <br>
                <br>
                @endif
			</div>
        </div>
    </div>
</div>
@endsection
@include('layouts.footer')