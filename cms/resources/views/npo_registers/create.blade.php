@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    @include('error')
<div class="container">
    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('npo_registers.store') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    
                    <div class="form-group @if($errors->has('title')) has-error @endif">
                       <label for="title-field">NPO NAME</label>
                    <input type="text" id="title-field" name="npo_name" class="form-control" value="{{ old("npo_name") }}"/>
                       @if($errors->has("npo_name"))
                        <span class="help-block">{{ $errors->first("npo_name") }}</span>
                       @endif
                    </div>
                    
                    <div class="form-group @if($errors->has('title')) has-error @endif">
                       <label for="title-field">Title</label>
                    <input type="text" id="title-field" name="title" class="form-control" value="{{ old("title") }}"/>
                       @if($errors->has("title"))
                        <span class="help-block">{{ $errors->first("title") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('subtitle')) has-error @endif">
                       <label for="subtitle-field">Subtitle</label>
                    <input type="text" id="subtitle-field" name="subtitle" class="form-control" value="{{ old("subtitle") }}"/>
                       @if($errors->has("subtitle"))
                        <span class="help-block">{{ $errors->first("subtitle") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('proval')) has-error @endif">
                       <label for="subtitle-field">proval</label>
                    <input type="text" id="subtitle-field" name="proval" class="form-control" value="{{ old("proval") }}"/>
                       @if($errors->has("proval"))
                        <span class="help-block">{{ $errors->first("proval") }}</span>
                       @endif
                    </div>
                    <!--<div class="form-group @if($errors->has('facebook')) has-error @endif">-->
                    <!--   <label for="facebook-field">Facebook</label>-->
                    <!--<input type="text" id="facebook-field" name="facebook" class="form-control" value="{{ old("facebook") }}"/>-->
                    <!--   @if($errors->has("facebook"))-->
                    <!--    <span class="help-block">{{ $errors->first("facebook") }}</span>-->
                    <!--   @endif-->
                    <!--</div>-->
                    <!--<div class="form-group @if($errors->has('twitter')) has-error @endif">-->
                    <!--   <label for="twitter-field">Twitter</label>-->
                    <!--<input type="text" id="twitter-field" name="twitter" class="form-control" value="{{ old("twitter") }}"/>-->
                    <!--   @if($errors->has("twitter"))-->
                    <!--    <span class="help-block">{{ $errors->first("twitter") }}</span>-->
                    <!--   @endif-->
                    <!--</div>-->
                    <!--<div class="form-group @if($errors->has('instagram')) has-error @endif">-->
                    <!--   <label for="instagram-field">Instagram</label>-->
                    <!--<input type="text" id="instagram-field" name="instagram" class="form-control" value="{{ old("instagram") }}"/>-->
                    <!--   @if($errors->has("instagram"))-->
                    <!--    <span class="help-block">{{ $errors->first("instagram") }}</span>-->
                    <!--   @endif-->
                    <!--</div>-->
                    <!--<div class="form-group @if($errors->has('youtube')) has-error @endif">-->
                    <!--   <label for="youtube-field">Youtube</label>-->
                    <!--<input type="text" id="youtube-field" name="youtube" class="form-control" value="{{ old("youtube") }}"/>-->
                    <!--   @if($errors->has("youtube"))-->
                    <!--    <span class="help-block">{{ $errors->first("youtube") }}</span>-->
                    <!--   @endif-->
                    <!--</div>-->
                    <!--<div class="form-group @if($errors->has('linkedin')) has-error @endif">-->
                    <!--   <label for="linkedin-field">Linkedin</label>-->
                    <!--<input type="text" id="linkedin-field" name="linkedin" class="form-control" value="{{ old("linkedin") }}"/>-->
                    <!--   @if($errors->has("linkedin"))-->
                    <!--    <span class="help-block">{{ $errors->first("linkedin") }}</span>-->
                    <!--   @endif-->
                    <!--</div>-->
                    <!--<div class="form-group @if($errors->has('url')) has-error @endif">-->
                    <!--   <label for="url-field">Url</label>-->
                    <!--<input type="text" id="url-field" name="url" class="form-control" value="{{ old("url") }}"/>-->
                    <!--   @if($errors->has("url"))-->
                    <!--    <span class="help-block">{{ $errors->first("url") }}</span>-->
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
                    
                    <!--<div class="form-group @if($errors->has('follower')) has-error @endif">-->
                    <!--   <label for="follower-field">Follower</label>-->
                    <!--<input type="text" id="follower-field" name="follower" class="form-control" value="{{ old("follower") }}"/>-->
                    <!--   @if($errors->has("follower"))-->
                    <!--    <span class="help-block">{{ $errors->first("follower") }}</span>-->
                    <!--   @endif-->
                    <!--</div>-->
                    <!--<div class="form-group @if($errors->has('buyer')) has-error @endif">-->
                    <!--   <label for="buyer-field">Buyer</label>-->
                    <!--<input type="text" id="buyer-field" name="buyer" class="form-control" value="{{ old("buyer") }}"/>-->
                    <!--   @if($errors->has("buyer"))-->
                    <!--    <span class="help-block">{{ $errors->first("buyer") }}</span>-->
                    <!--   @endif-->
                    <!--</div>-->
                    
                    <!--<div class="form-group @if($errors->has('body')) has-error @endif">-->
                    <!--   <label for="body-field">Body</label>-->
                    <!--<textarea class="form-control" id="body-field" rows="3" name="body">{{ old("body") }}</textarea>-->
                    <!--   @if($errors->has("body"))-->
                    <!--    <span class="help-block">{{ $errors->first("body") }}</span>-->
                    <!--   @endif-->
                    <!--</div>-->
                    <!--<div class="form-group @if($errors->has('published')) has-error @endif">-->
                    <!--   <label for="published-field">Published</label>-->
                    <!--<input type="text" id="published-field" name="published" class="form-control" value="{{ old("published") }}"/>-->
                    <!--   @if($errors->has("published"))-->
                    <!--    <span class="help-block">{{ $errors->first("published") }}</span>-->
                    <!--   @endif-->
                    <!--</div>-->
                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">Create</button>
                    <a class="btn btn-link pull-right" href="{{ route('npo_registers.index') }}"><i class="glyphicon glyphicon-backward"></i> Back</a>
                </div>
            </form>

        </div>
    </div>
</div>

<br><br><br><br>
@endsection
@section('scripts')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/js/bootstrap-datepicker.min.js"></script>
  <script>
    $('.date-picker').datepicker({
    });
  </script>
@endsection
