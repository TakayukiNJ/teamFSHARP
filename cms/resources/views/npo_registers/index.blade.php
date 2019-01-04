@extends('layouts.app')
@section('content')
@include('error')

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<div class="container">
    <div class="page-header clearfix">
        <h1>
            <i class="glyphicon glyphicon-align-justify"></i> {{Auth::user()->npo}}の登録プロジェクト
            <a class="btn btn-success pull-right" href="{{ route('npo_registers.create') }}"><i class="glyphicon glyphicon-plus"></i> Create</a>
        </h1>

    </div>
    <div class="row">
        <div class="col-md-12">
            @if($npo_registers->count())
                <table class="table table-condensed table-striped">
                    <thead>
                        <tr>
                            <th>TITLE</th>
                            <th>PRICE</th>
                            <th class="text-right">OPTIONS</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($npo_registers as $npo_register)
                            @if(($npo_register->proval) > 1)
                            <tr>
                                <td><a href="{{ url('/npo') }}/{{ $npo_register->npo_name }}"><h1>{{$npo_register->subtitle}}</h1></a></td>
                                <td><h1>{{$npo_register->support_amount}} 円</h1></td>
                                <td class="text-right">
                                    @if (($npo_register->proval) != 0 || (Auth::user()->name) == ($npo_register->manager))
                                    <a class="btn btn-xs btn-primary" href="{{ url('/npo') }}/{{ $npo_register->npo_name }}"><h1><i class="glyphicon glyphicon-eye-open"></i> View</h1></a>
                                    <a class="btn btn-xs btn-warning" href="{{ url('/npo') }}/{{ $npo_register->npo_name }}/edit"><h1><i class="glyphicon glyphicon-edit"></i> 編集/Edit</h1></a>
                                    @endif
                                </td>
                            </tr>
                            @elseif((Auth::user()->name) === ($npo_register->manager))
                            <tr>
                                @if(($npo_register->proval) == 0)
                                <td><a href="{{ url('/npo') }}/{{ $npo_register->npo_name }}"><h1>{{$npo_register->subtitle}}（審査中）</h1></a></td>
                                @elseif(($npo_register->proval) == -1)
                                <td><a href="{{ url('/npo') }}/{{ $npo_register->npo_name }}"><h1>{{$npo_register->subtitle}}（未公開）</h1></a></td>
                                @elseif(($npo_register->proval) == -2)
                                <td><a href="{{ url('/npo') }}/{{ $npo_register->npo_name }}"><h1>{{$npo_register->subtitle}}（要編集）</h1></a></td>
                                @else
                                <td><a href="{{ url('/npo') }}/{{ $npo_register->npo_name }}"><h1>{{$npo_register->subtitle}}</h1></a></td>
                                @endif
                                <td><h1>{{$npo_register->support_amount}} 円</h1></td>
                                <td class="text-right">
                                    <a class="btn btn-xs btn-primary" href="{{ url('/npo') }}/{{ $npo_register->npo_name }}"><h1><i class="glyphicon glyphicon-eye-open"></i> Preview</h1></a>
                                    <a class="btn btn-xs btn-warning" href="{{ url('/npo') }}/{{ $npo_register->npo_name }}/edit"><h1><i class="glyphicon glyphicon-edit"></i> 編集/Edit</h1></a>
                                    <form action="{{ route('npo_registers.destroy', $npo_register->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="btn btn-xs btn-danger"><h1><i class="glyphicon glyphicon-trash"></i> 削除/Delete</h1></button>
                                    </form>
                                </td>
                            </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
                {!! $npo_registers->render() !!}
            @else
                <h3 class="text-center alert alert-info">Empty!</h3>
            @endif
        </div>
    </div>
</div>
@endsection