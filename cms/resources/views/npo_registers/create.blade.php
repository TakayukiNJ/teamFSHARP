@extends('layouts.common_nav_lp')
@include('layouts.head')
@include('layouts.script')
@include('layouts.nav_lp')
@section('content')

    @include('error')
<div class="container">
    <br><br><br><br>
    <form enctype="multipart/form-data" action="{{ route('npo_registers.store') }}" method="POST">
        @if ((Auth::user()->npo) == "")
        <h3><i class="glyphicon glyphicon-edit"></i> プロジェクト作成ページ</h3>
        @else
        <h3><i class="glyphicon glyphicon-edit"></i> {{ Auth::user()->npo }}のプロジェクト追加ページ</h3>
        @endif
        <br>
        <div class="row">
            <div class="col-md-3 col-sm-3">
                <h6>ロゴ編集</h6>
                <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                    <div class="fileinput-new thumbnail img-no-padding" style="max-width: 200px; max-height: 200px;">
                        @if($npo_info->avater)
                        <img src='/img/project_logo/{{ $npo_info->avater }}' alt="{{ Auth::user()->npo }}">
                        @else
                        <img src="{{ url('/') }}/../img/placeholder.jpg" alt="default">
                        @endif
                    </div>
                    <div class="fileinput-preview fileinput-exists thumbnail img-no-padding" style="max-width: 200px; max-height: 200px;"></div>
                    <div>
                        <span class="btn btn-outline-default btn-round btn-file"><span class="fileinput-new">ロゴ画像変更</span><span class="fileinput-exists">Change</span><input type="file" name="avater"></span>
                        <a href="#paper-kit" class="btn btn-link btn-danger fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                    </div>
                <br>
                </div>
            </div>
            <div class="col-md-9 col-sm-9">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    @if ((Auth::user()->npo) == "")
                    <div class="form-group @if($errors->has('title')) has-error @endif">
                        <label for="title-field">団体名 ※右上のユーザー名の左に表示されます。</label>
                        <input type="text" id="title-field" name="title" class="form-control" value="{{ old("title") }}"/>
                        @if($errors->has("title"))
                        <span class="help-block">{{ $errors->first("title") }}</span>
                        @endif
                    </div>
                    <div class="form-group @if($errors->has('subtitle')) has-error @endif">
                       <label for="subtitle-field">最初のプロジェクト名</label>
                    <input type="text" id="subtitle-field" name="subtitle" class="form-control" value="{{ old("subtitle") }}"/>
                       @if($errors->has("subtitle"))
                        <span class="help-block">{{ $errors->first("subtitle") }}</span>
                       @endif
                    </div>
                    @else
                    <div class="form-group @if($errors->has('subtitle')) has-error @endif">
                       <label for="subtitle-field">プロジェクト名</label>
                    <input type="text" id="subtitle-field" name="subtitle" class="form-control" value="{{ old("subtitle") }}"/>
                       @if($errors->has("subtitle"))
                        <span class="help-block">{{ $errors->first("subtitle") }}</span>
                       @endif
                    </div>
                    <input type="hidden" id="title-field" name="title" class="form-control" value="{{ Auth::user()->npo }}"/>
                    @endif
                        
                    
                    <!-- 目標金額 -->
                    <div class="form-group @if($errors->has('support_price')) has-error @endif">
                       <label for="support_price-field">目標金額</label>
                    <input type="text" id="support_price-field" name="support_price" class="form-control" value="{{ old("support_price") }}"/>
                       @if($errors->has("support_price"))
                        <span class="help-block">目標金額は必須です。</span>
                       @endif
                    </div>
                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">Create</button>
                    <a class="btn btn-link pull-right" href="{{ route('npo_registers.index') }}"><i class="glyphicon glyphicon-backward"></i> Back</a>
                </div>
                {!! csrf_field() !!}
            </div>
        </div>
    </form>
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
@include('layouts.footer')