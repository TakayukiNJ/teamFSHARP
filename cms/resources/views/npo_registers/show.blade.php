@extends('layouts.app')

@section('header')
<div class="page-header">
        <h1>Npo_registers / Show {{$npo_register->npo_name}}</h1>
        <form action="{{ route('npo_registers.destroy', $npo_register->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="btn-group pull-right" role="group" aria-label="...">
                <a class="btn btn-warning btn-group" role="group" href="{{ route('npo_registers.edit', $npo_register->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                <button type="submit" class="btn btn-danger">Delete <i class="glyphicon glyphicon-trash"></i></button>
            </div>
        </form>
    </div>
@endsection

@section('content')

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<div class="container">
    <div class="row">
        <div class="col-md-12">

            <form action="#">
                <div class="form-group">
                    <label for="nome">ID</label>
                    <p class="form-control-static"></p>
                </div>
                <div class="form-group">
                     <label for="title">TITLE</label>
                     <p class="form-control-static">{{$npo_register->title}}</p>
                </div>
                    <div class="form-group">
                     <label for="subtitle">SUBTITLE</label>
                     <p class="form-control-static">{{$npo_register->subtitle}}</p>
                </div>
                    <div class="form-group">
                     <label for="facebook">FACEBOOK</label>
                     <p class="form-control-static">{{$npo_register->facebook}}</p>
                </div>
                    <div class="form-group">
                     <label for="twitter">TWITTER</label>
                     <p class="form-control-static">{{$npo_register->twitter}}</p>
                </div>
                    <div class="form-group">
                     <label for="instagram">INSTAGRAM</label>
                     <p class="form-control-static">{{$npo_register->instagram}}</p>
                </div>
                    <div class="form-group">
                     <label for="youtube">YOUTUBE</label>
                     <p class="form-control-static">{{$npo_register->youtube}}</p>
                </div>
                    <div class="form-group">
                     <label for="linkedin">LINKEDIN</label>
                     <p class="form-control-static">{{$npo_register->linkedin}}</p>
                </div>
                    <div class="form-group">
                     <label for="url">URL</label>
                     <p class="form-control-static">{{$npo_register->url}}</p>
                </div>
                    <div class="form-group">
                     <label for="follower">FOLLOWER</label>
                     <p class="form-control-static">{{$npo_register->follower}}</p>
                </div>
                    <div class="form-group">
                     <label for="buyer">BUYER</label>
                     <p class="form-control-static">{{$npo_register->buyer}}</p>
                </div>
                    <div class="form-group">
                     <label for="body">BODY</label>
                     <p class="form-control-static">{{$npo_register->body}}</p>
                </div>
                    <div class="form-group">
                     <label for="published">PUBLISHED</label>
                     <p class="form-control-static">{{$npo_register->published}}</p>
                </div>
            </form>

            <a class="btn btn-link" href="{{ route('npo_registers.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>

        </div>
    </div>
</div>
@endsection