﻿@extends('layouts.app')

@section('content')
<div class="container">


    <div class="row">

        <div class="col-md-8 col-md-offset-2">

            <!-- Vision購入確認画面 -->

            <div class="panel panel-default">
                <div class="panel-heading">
                    Vision購入確認画面
                    (審査期間:約1週間)
                </div>
                <div class="panel-body">
                    ID:{{ $id }}
                    USER:{{ $user }}
                </div>
            </div>

            </div>
        </div>
    </div>
</div>
@endsection
