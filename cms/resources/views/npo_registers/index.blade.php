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
                            <div class="name">
                                <h3>{{Auth::user()->npo}}</h3>
                            </div>
                            <div class="following">
                                <a class="btn btn-success" href="{{ route('npo_registers.create') }}"><i class="glyphicon glyphicon-plus"></i>プロジェクト作成</a>        
                            </div>
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
                    <p>{{ $npo_owner_info->name }} — {{ $npo_owner_info->email }}</p>
                    <div class="description-details">
                        <ul class="list-unstyled">
                            <li>集まっている金額：{{ $npo_owner_info->total_deposit }}円</li>
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
                                    @if($npo_register->background_pic)
                                    <img class="img" src="/img/project_back/{{ $npo_register->background_pic }}" />
                                    @else
                                    <img class="img" src="https://images.unsplash.com/photo-1486310662856-32058c639c65?dpr=2&auto=format&fit=crop&w=1500&h=1125&q=80&cs=tinysrgb&crop=" />
                                    @endif
                                </div>
                                <div class="card-body">
                                    @if(($npo_register->proval) > 0)
                                        <h4 class="card-title"><a href="/{{ $npo_register->npo_name }}">{{$npo_register->subtitle}}</a></h4>
                                        <p class="card-description">獲得金額: {{$npo_register->follower}} 円</p>
                                        <p class="card-description">寄付数: {{$npo_register->buyer}}</p>
                                        <a class="btn btn-info btn-round" href="/{{ $npo_register->npo_name }}">公開画面</a>
                                        <a class="btn btn-success btn-round" href="/{{ $npo_register->npo_name }}/edit">編集</a>
                                    @else
                                        @if(($npo_register->proval) == 0)
                                        <h4 class="card-title"><a href="/{{ $npo_register->npo_name }}">{{$npo_register->subtitle}}（未公開）</a></h4>
                                        @elseif(($npo_register->proval) == -1)
                                        <h4 class="card-title"><a href="/{{ $npo_register->npo_name }}">{{$npo_register->subtitle}}（期限切れ）</a></h4>
                                        @elseif(($npo_register->proval) == -2)
                                        <h4 class="card-title"><a href="/{{ $npo_register->npo_name }}">{{$npo_register->subtitle}}（要編集）</a></h4>
                                        @else
                                        <h4 class="card-title"><a href="/{{ $npo_register->npo_name }}">{{$npo_register->subtitle}}</a></h4>
                                        @endif
                                        <p class="card-description">獲得金額: {{$npo_register->follower}} 円</p>
                                        <p class="card-description">寄付数: {{$npo_register->buyer}}</p>
                                        @if(($npo_register->npo_name) == "")
                                            <a class="btn btn-info btn-round" href="{{ url('/npo_registers') }}/{{ $npo_register->id }}">プレビュー</a>
                                            <a class="btn btn-success btn-round" href="{{ url('/npo_registers') }}/{{ $npo_register->id }}/edit">編集</a>
                                        @else
                                            <a class="btn btn-info btn-round" href="/{{ $npo_register->npo_name }}">プレビュー</a>
                                            <a class="btn btn-success btn-round" href="/{{ $npo_register->npo_name }}/edit">編集</a>
                                        @endif
                                        @if(($npo_register->published) == "")
                                        <form action="{{ route('npo_registers.destroy', $npo_register->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <button type="submit" class="btn btn-danger btn-round">削除</button>
                                        </form>
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