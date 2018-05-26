@extends('layouts.app')
@section('content')
@include('error')
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<div class="container">
    <div class="page-header">
        <h1><i class="glyphicon glyphicon-plus"></i> 自己紹介 </h1>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form name="changeform" method="POST">
                    <div class="form-group">
                        <label for="title-field">ID</label>
                        <input type="text" id="title-field" name="id" class="form-control" value="{{ $id }}" readonly="readonly"/>
                    </div>

                    <div class="form-group">
                        <label for="title-field">USER</label>
                        <input type="text" id="title-field" name="user" class="form-control" value="{{ $user }}" readonly="readonly"/>
                    </div>


                    <div class="form-group @if($errors->has('user_name_sei_kanji')) has-error @endif">
                        <label for="title-field">姓(漢字)</label>
                        <input type="text" id="user_name_sei_kanji-field" name="user_name_sei_kanji" class="form-control" value="{{ $user_name_sei_kanji }}"/>
                        @if($errors->has("user_name_sei_kanji"))
                           <span class="help-block">{{ $errors->first("user_name_sei_kanji") }}</span>
                        @endif
                    </div>

                    <div class="form-group @if($errors->has('user_name_mei_kanji')) has-error @endif">
                        <label for="title-field">名(漢字)</label>
                        <input type="text" id="user_name_mei_kanji-field" name="user_name_mei_kanji" class="form-control" value="{{ $user_name_mei_kanji }}"/>
                        @if($errors->has("user_name_mei_kanji"))
                           <span class="help-block">{{ $errors->first("user_name_mei_kanji") }}</span>
                        @endif
                    </div>

                    <div class="form-group @if($errors->has('user_name_sei_roma')) has-error @endif">
                        <label for="title-field">姓(ローマ字)</label>
                        <input type="text" id="user_name_sei_roma-field" name="user_name_sei_roma" class="form-control" value="{{ $user_name_sei_roma }}"/>
                        @if($errors->has("user_name_sei_roma"))
                           <span class="help-block">{{ $errors->first("user_name_sei_roma") }}</span>
                        @endif
                    </div>

                    <div class="form-group @if($errors->has('user_name_mei_roma')) has-error @endif">
                        <label for="title-field">名(ローマ字)</label>
                        <input type="text" id="user_name_mei_roma-field" name="user_name_mei_roma" class="form-control" value="{{ $user_name_mei_roma }}"/>
                        @if($errors->has("user_name_mei_roma"))
                           <span class="help-block">{{ $errors->first("user_name_mei_roma") }}</span>
                        @endif
                    </div>

                    <div class="form-group @if($errors->has('sex_type')) has-error @endif">
                        <label for="title-field">性別</label>
    					@if ($sex_type == 2)
                        <input type="radio" id="sex_type_1" name="sex_type" value="1" style="width:40px;height:40px">男
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio" id="sex_type_2" name="sex_type" value="2" style="width:40px;height:40px" CHECKED>女
                        @else
                        <input type="radio" id="sex_type_1" name="sex_type" value="1" style="width:40px;height:40px" CHECKED>男
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio" id="sex_type_2" name="sex_type" value="2" style="width:40px;height:40px">女
                        @endif
                        @if($errors->has("sex_type"))
                           <span class="help-block">{{ $errors->first("sex_type") }}</span>
                        @endif
                    </div>

                    <div class="form-group @if($errors->has('birthday_year')) has-error @endif @if($errors->has('birthday_month')) has-error @endif @if($errors->has('birthday_day')) has-error @endif">
                        <label for="title-field">生年月日</label>
                        <input type="text" id="birthday_year-field" name="birthday_year" class="form-control" value="{{ $birthday_year }}"/>
                        <input type="text" id="birthday_month-field" name="birthday_month" class="form-control" value="{{ $birthday_month }}"/>
                        <input type="text" id="birthday_year-field" name="birthday_day" class="form-control" value="{{ $birthday_day }}"/>
                        @if($errors->has("birthday_year"))
                           <span class="help-block">{{ $errors->first("birthday_year") }}</span>
                        @endif
                        @if($errors->has("birthday_month"))
                           <span class="help-block">{{ $errors->first("birthday_month") }}</span>
                        @endif
                        @if($errors->has("birthday_day"))
                           <span class="help-block">{{ $errors->first("birthday_day") }}</span>
                        @endif
                    </div>

                    <div class="form-group">
                    	<label for="title-feled">画像イメージ</label>
	                	<IMG id='own_image'>
		                <INPUT TYPE="button" class="btn btn-primary" value="　画像登録　" onClick="ZZ1_run('HOME_REGIST')" >
		                <INPUT TYPE="button" class="btn btn-primary" value="　画像消す　" onClick="alert('対応中')" >
                    </div>
                <div class="well well-sm">
                    <button type="button" class="btn btn-primary" onClick="C03_run()">　確　認　</button>
                    <a class="btn btn-link pull-right" onClick="H01_run()"><i class="glyphicon glyphicon-backward"></i> 戻る</a>
                </div>
{{ csrf_field() }}
<BR>
<BR>
<BR>
            </form>
        </div>
    </div>
</div>

<form name="subwindow">
{{ csrf_field() }}
</form>
<script type="text/javascript">
/* 自己紹介登録画面 */
function C03_run() {
    window.document.changeform.action = "{{ url('home/home_register_confirm') }}";
    window.document.changeform.method = "POST";
    window.document.changeform.submit();
}
/* 画像アップロード */
function ZZ1_run(val) {
    window.open("", "subwindow");
    window.document.subwindow.action = "{{ url('other/image_upload_index') }}";
    window.document.subwindow.target = "subwindow";
    make_hidden('mode', val, 'subwindow');
    window.document.subwindow.method = "POST";
    window.document.subwindow.submit();
}
// 仲条編集 'home'から'home/home_own_timeline'に(2018/5/19)
function H01_run() {
	window.document.changeform.action = "{{ url('home/home_own_timeline') }}";
    window.document.changeform.method = "POST";
    window.document.changeform.submit();
}

var content;
$(document).ready(function() {
	// 画像の再描画
    var changeCheckModule = function() {
		$.get("{{ url('other/own_image_picture') }}", {target : "HOME_REGIST"},
			function(data){
				// 画像データのパスが取得できれば表示する
				if(data != "0") {
					$('#own_image').attr('src', data);
				}
           	});
    };
    setInterval(changeCheckModule, 1000);

    // 画像ボタンの押下可否判定
    var count = '{{$count}}';
    if (count == 0) {
		$('#image_upload_button').prop("disabled", true);
		$('#image_unload_button').prop("disabled", true);
    } else {
		$('#image_upload_button').prop("disabled", false);
		$('#image_unload_button').prop("disabled", false);
    }
});

</script>
</div>

@endsection