@extends('layouts.app')
@section('content')
    @include('error')

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<div class="container">
    <div class="page-header">
        <h1><i class="glyphicon glyphicon-edit"></i> Npo_registers / Edit【{{$npo_register->title}}】</h1>
    </div>
    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('npo_registers.update', $npo_register->id) }}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="form-group @if($errors->has('manager')) has-error @endif">
                       <label for="manager-field">管理者(Manager)</label>
                    <input type="text" id="manager-field" name="manager" class="form-control" value="{{ is_null(old("manager")) ? $npo_register->manager : old("manager") }}" readonly="readonly"/>
                       @if($errors->has("manager"))
                        <span class="help-block">{{ $errors->first("manager") }}</span>
                       @endif
                    </div>

                    <div class="form-group @if($errors->has('title')) has-error @endif">
                       <label for="title-field">Title(タイトル)</label>
                    <input type="text" id="title-field" name="title" class="form-control" value="{{ is_null(old("title")) ? $npo_register->title : old("title") }}"/>
                       @if($errors->has("title"))
                        <span class="help-block">{{ $errors->first("title") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('subtitle')) has-error @endif">
                       <label for="subtitle-field">Subtitle(小見出し)</label>
                    <input type="text" id="subtitle-field" name="subtitle" class="form-control" value="{{ is_null(old("subtitle")) ? $npo_register->subtitle : old("subtitle") }}"/>
                       @if($errors->has("subtitle"))
                        <span class="help-block">{{ $errors->first("subtitle") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('facebook')) has-error @endif">
                       <label for="facebook-field">Facebook URL</label>
                    <input type="text" id="facebook-field" name="facebook" class="form-control" value="{{ is_null(old("facebook")) ? $npo_register->facebook : old("facebook") }}"/>
                       @if($errors->has("facebook"))
                        <span class="help-block">{{ $errors->first("facebook") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('twitter')) has-error @endif">
                       <label for="twitter-field">Twitter URL</label>
                    <input type="text" id="twitter-field" name="twitter" class="form-control" value="{{ is_null(old("twitter")) ? $npo_register->twitter : old("twitter") }}"/>
                       @if($errors->has("twitter"))
                        <span class="help-block">{{ $errors->first("twitter") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('instagram')) has-error @endif">
                       <label for="instagram-field">Instagram URL </label>
                    <input type="text" id="instagram-field" name="instagram" class="form-control" value="{{ is_null(old("instagram")) ? $npo_register->instagram : old("instagram") }}"/>
                       @if($errors->has("instagram"))
                        <span class="help-block">{{ $errors->first("instagram") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('youtube')) has-error @endif">
                       <label for="youtube-field">Youtube URL</label>
                    <input type="text" id="youtube-field" name="youtube" class="form-control" value="{{ is_null(old("youtube")) ? $npo_register->youtube : old("youtube") }}"/>
                       @if($errors->has("youtube"))
                        <span class="help-block">{{ $errors->first("youtube") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('linkedin')) has-error @endif">
                       <label for="linkedin-field">Linkedin URL</label>
                    <input type="text" id="linkedin-field" name="linkedin" class="form-control" value="{{ is_null(old("linkedin")) ? $npo_register->linkedin : old("linkedin") }}"/>
                       @if($errors->has("linkedin"))
                        <span class="help-block">{{ $errors->first("linkedin") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('url')) has-error @endif">
                       <label for="url-field">ウェブサイトのURL the own webpage Url</label>
                    <input type="text" id="url-field" name="url" class="form-control" value="{{ is_null(old("url")) ? $npo_register->url : old("url") }}"/>
                       @if($errors->has("url"))
                        <span class="help-block">{{ $errors->first("url") }}</span>
                       @endif
                    </div>
                    
                    <!--<div class="form-group @if($errors->has('code1')) has-error @endif">-->
                    <!--   <label for="code1-field">寄付先</label>-->
                    <!--<input type="text" id="code1-field" name="code1" class="form-control" value="{{ is_null(old("code1")) ? $npo_register->code1 : old("code1") }}"/>-->
                    <!--   @if($errors->has("code1"))-->
                    <!--    <span class="help-block">{{ $errors->first("code1") }}</span>-->
                    <!--   @endif-->
                    <!--</div>-->
                    
                    
                    
        <!--$npo_register->code1 = $request->input("code1");-->
        <!--$npo_register->code2 = $request->input("code2");-->
        <!--$npo_register->code3 = $request->input("code3");-->
        <!--$npo_register->manager = $request->input("manager");-->
        <!--$npo_register->member1 = $request->input("member1");-->
        <!--$npo_register->member2 = $request->input("member2");-->
        <!--$npo_register->member3 = $request->input("member3");-->
        <!--$npo_register->member4 = $request->input("member4");-->
                    
                    <div class="form-group @if($errors->has('body')) has-error @endif">
                       <label for="body-field">詳細/Details</label>
                    <textarea class="form-control" id="body-field" rows="20" name="body">{{ is_null(old("body")) ? $npo_register->body : old("body") }}</textarea>
                       @if($errors->has("body"))
                        <span class="help-block">{{ $errors->first("body") }}</span>
                       @endif
                    </div>
                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a class="btn btn-link pull-right" href="{{ route('npo_registers.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection
@section('scripts')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/js/bootstrap-datepicker.min.js"></script>
  <script>
    $('.date-picker').datepicker({
    });
  </script>
@endsection
