@extends('layouts.app')
@section('content')
    @include('error')

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<div class="container">
    <div class="page-header clearfix">
        <h1>
            <i class="glyphicon glyphicon-align-justify"></i> Npo_registers
            <!--lass="btn btn-success pull-right" href="{{ route('npo_registers.create') }}"><i class="glyphicon glyphicon-plus"></i> Create</a>-->
        </h1>

    </div>
    <div class="row">
        <div class="col-md-12">
            @if($npo_registers->count())
                <table class="table table-condensed table-striped">
                    <thead>
                        <tr>
                            <th>TITLE</th>
                            <th>SUBTITLE</th>
                            <!--<th>DETAILS</th>-->
                            <th class="text-right">OPTIONS</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($npo_registers as $npo_register)
                            <tr>
                                <td>{{$npo_register->title}}</td>
                                <td>{{$npo_register->subtitle}}</td>
                                <!--<td>{{$npo_register->body}}</td>-->
                                <td class="text-right">
                                    @if (($npo_register->proval) != 0)
                                    <a class="btn btn-xs btn-primary" href="{{ url('/npo') }}/{{ $npo_register->npo_name }}"><i class="glyphicon glyphicon-eye-open"></i> View</a>
                                    @endif
                                    @if ((Auth::user()->npo) == ($npo_register->npo_name))
                                    <!--<a class="btn btn-xs btn-warning" href="{{ route('npo_registers.edit', $npo_register->npo_name) }}"><i class="glyphicon glyphicon-edit"></i> 編集/Edit</a>-->
                                    <a class="btn btn-xs btn-warning" href="{{ url('/npo') }}/{{ $npo_register->npo_name }}/edit"><i class="glyphicon glyphicon-edit"></i> 編集/Edit</a>
                                    @endif
                                    <!--m action="{{ route('npo_registers.destroy', $npo_register->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">-->
                                    <!--<input type="hidden" name="_method" value="DELETE">-->
                                    <!--<input type="hidden" name="_token" value="{{ csrf_token() }}">-->
                                    <!--<button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</button>-->
                                    <!--rm>-->
                                </td>
                            </tr>
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