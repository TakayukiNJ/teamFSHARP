@extends('layouts.common_nav_lp')
@include('layouts.head')
@include('layouts.script')
@include('layouts.nav_lp')
@section('content')
<div class="cd-section" id="headers">
    <div class="page-header" style="background-image: url('https://images.unsplash.com/photo-1486310662856-32058c639c65?dpr=2&auto=format&fit=crop&w=1500&h=1125&q=80&cs=tinysrgb&crop=');">
        <div class="filter"></div>
            <div class="content-center">
                @include('error')
                <div class="container">
                    <form enctype="multipart/form-data" action="{{ route('npo_registers.store') }}" method="POST">
                        <div class="row">
                            <div class="col-md-3 col-sm-3">
                                <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail img-no-padding" style="max-width: 150px; max-height: 150px;">
                                        @if($npo_info->avater)
                                        <img src='/img/project_logo/{{ $npo_info->avater }}' alt="{{ Auth::user()->npo }}">
                                        @else
                                        <img src="{{ url('/') }}/../img/placeholder.jpg" alt="default">
                                        @endif
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail img-no-padding" style="max-width: 150px; max-height: 150px;"></div>
                                    <div>
                                        <span class="btn btn-outline-neutral btn-round btn-file"><span class="fileinput-new">ロゴ変更*</span><span class="fileinput-exists">Change</span><input type="file" name="avater"></span>
                                        <a href="#paper-kit" class="btn btn-link btn-danger fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                        <h6>*全プロジェクトのロゴに適応</h6>
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
                                       <label for="subtitle-field">新しいプロジェクト名</label>
                                    <input type="text" id="subtitle-field" name="subtitle" class="form-control" value="{{ old("subtitle") }}"/>
                                       @if($errors->has("subtitle"))
                                        <span class="help-block">{{ $errors->first("subtitle") }}</span>
                                       @endif
                                    </div>
                                    <input type="hidden" id="title-field" name="title" class="form-control" value="{{ Auth::user()->npo }}"/>
                                    {{-- 目標金額 --}}
                                    <div class="form-group @if($errors->has('support_price')) has-error @endif">
                                       <label for="support_price-field">目標金額</label>
                                    <input type="text" id="support_price-field" name="support_price" class="form-control" value="{{ old("support_price") }}"/>
                                       @if($errors->has("support_price"))
                                        <span class="help-block">{{ $errors->first("support_price") }}<</span>
                                       @endif
                                    </div>
                                    @endif
                                <div class="well well-sm">
                                    <button type="submit" class="btn btn-primary">Create</button>
                                    <!--<a class="btn btn-link pull-right" href="{{ route('npo_registers.index') }}"><i class="glyphicon glyphicon-backward"></i> Back</a>-->
                                </div>
                                {!! csrf_field() !!}
                            </div>
                        </div>
                    </form>
                </div>
            </div>
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
@include('layouts.footer')