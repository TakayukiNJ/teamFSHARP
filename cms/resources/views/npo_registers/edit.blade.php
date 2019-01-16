@extends('layouts.app')
@section('content')
    @include('error')

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<div class="container">
    <div class="page-header">
        <h1><i class="glyphicon glyphicon-edit"></i> Edit【{{$npo_info->title}}】</h1>
    </div>
    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('npo_registers.update', $npo_info->id) }}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    {{--
                    <div class="form-group @if($errors->has('manager')) has-error @endif">
                       <label for="manager-field">Owner(サイト作成者)</label>
                    <input type="text" id="manager-field" name="manager" class="form-control" value="{{ is_null(old("manager")) ? $npo_info->manager : old("manager") }}" readonly="readonly"/>
                       @if($errors->has("manager"))
                        <span class="help-block">{{ $errors->first("manager") }}</span>
                       @endif
                    </div>
                    --}}
                    <div class="form-group @if($errors->has('title')) has-error @endif">
                       <label for="title-field">団体の名前</label>
                    <input type="text" id="title-field" name="title" class="form-control" value="{{ is_null(old("title")) ? $npo_info->title : old("title") }}"/>
                       @if($errors->has("title"))
                        <span class="help-block">{{ $errors->first("title") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('subtitle')) has-error @endif">
                       <label for="subtitle-field">プロジェクト名</label>
                    <input type="text" id="subtitle-field" name="subtitle" class="form-control" value="{{ is_null(old("subtitle")) ? $npo_info->subtitle : old("subtitle") }}"/>
                       @if($errors->has("subtitle"))
                        <span class="help-block">{{ $errors->first("subtitle") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('embed_youtube')) has-error @endif">
                       <label for="embed_youtube-field">Embed YouTube(トップに載せるYouTube) https://www.youtube.com/watch?v=〇〇〇〇〇〇〇〇の部分</label>
                    <input type="text" id="url-field" name="embed_youtube" class="form-control" value="{{ is_null(old("embed_youtube")) ? $npo_info->embed_youtube : old("embed_youtube") }}"/>
                       @if($errors->has("embed_youtube"))
                        <span class="help-block">{{ $errors->first("embed_youtube") }}</span>
                       @endif
                    </div>
                    <h1><i class="glyphicon glyphicon-edit"></i>3枚のカード</h1>
                    <!-- ブルーカード -->
                    <div class="form-group @if($errors->has('blue_card_title')) has-error @endif">
                       <label for="blue_card_title-field">ブルーカード（1枚目）のタイトル</label>
                    <input type="text" id="blue_card_title-field" name="blue_card_title" class="form-control" value="{{ is_null(old("blue_card_title")) ? $npo_info->blue_card_title : old("blue_card_title") }}"/>
                       @if($errors->has("blue_card_title"))
                        <span class="help-block">{{ $errors->first("blue_card_title") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('blue_card_body')) has-error @endif">
                       <label for="blue_card_body-field">ブルーカード（1枚目）の内容</label>
                    <textarea class="form-control" id="blue_card_body-field" rows="6" name="blue_card_body">{{ is_null(old("blue_card_body")) ? $npo_info->blue_card_body : old("blue_card_body") }}</textarea>
                       @if($errors->has("blue_card_body"))
                        <span class="help-block">{{ $errors->first("blue_card_body") }}</span>
                       @endif
                    </div>
                    <!-- グリーンカード -->
                    <div class="form-group @if($errors->has('green_card_title')) has-error @endif">
                       <label for="green_card_title-field">グリーンカード（2枚目）のタイトル</label>
                    <input type="text" id="green_card_title-field" name="green_card_title" class="form-control" value="{{ is_null(old("green_card_title")) ? $npo_info->green_card_title : old("green_card_title") }}"/>
                       @if($errors->has("green_card_title"))
                        <span class="help-block">{{ $errors->first("green_card_title") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('green_card_body')) has-error @endif">
                       <label for="green_card_body-field">グリーンカード（2枚目）の内容</label>
                    <textarea class="form-control" id="green_card_body-field" rows="6" name="green_card_body">{{ is_null(old("green_card_body")) ? $npo_info->green_card_body : old("green_card_body") }}</textarea>
                       @if($errors->has("green_card_body"))
                        <span class="help-block">{{ $errors->first("green_card_body") }}</span>
                       @endif
                    </div>
                    <!-- イエローカード -->
                    <div class="form-group @if($errors->has('yellow_card_title')) has-error @endif">
                       <label for="yellow_card_title-field">イエローカード（3枚目）のタイトル</label>
                    <input type="text" id="yellow_card_title-field" name="yellow_card_title" class="form-control" value="{{ is_null(old("yellow_card_title")) ? $npo_info->yellow_card_title : old("yellow_card_title") }}"/>
                       @if($errors->has("yellow_card_title"))
                        <span class="help-block">{{ $errors->first("yellow_card_title") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('yellow_card_body')) has-error @endif">
                       <label for="yellow_card_body-field">イエローカード（3枚目）の内容</label>
                    <textarea class="form-control" id="yellow_card_body-field" rows="6" name="yellow_card_body">{{ is_null(old("yellow_card_body")) ? $npo_info->yellow_card_body : old("yellow_card_body") }}</textarea>
                       @if($errors->has("yellow_card_body"))
                        <span class="help-block">{{ $errors->first("yellow_card_body") }}</span>
                       @endif
                    </div>
                    
                    <h1><i class="glyphicon glyphicon-edit"></i>チームメンバー</h1>
                    
                    @for ($i = 1; $i < 11; $i++)
                        <?php 
                           $member          = "member".$i;
                           $member_pos      = $member."_pos";
                           $member_detail   = $member."_detail";
                           $member_twitter  = $member."_twitter";
                           $member_facebook = $member."_facebook";
                           $member_linkedin = $member."_linkedin";
                           // member追加は一人だけにしたい処理
                           $member_check    = "member1"; 
                           if($i > 1){
                              $member_check_1  = $i - 1;
                              $member_check    = "member".$member_check_1;
                           }
                        ?>
                        @if($npo_info->$member_check != "")
                        <div class="form-group @if($errors->has('{{$member}}')) has-error @endif">
                           <label for="{{$member}}-field">【メンバーの名前{{$i}}人目】</label>
                        <input type="text" id="{{$member}}-field" name="{{$member}}" class="form-control" value="{{ is_null(old("$member")) ? $npo_info->$member : old("$member") }}"/>
                           @if($errors->has($member))
                            <span class="help-block">{{ $errors->first("$member") }}aaaaaa</span>
                           @endif
                        </div>
                        @endif
                        @if($npo_info->$member != "")
                           <div class="form-group @if($errors->has($member_pos)) has-error @endif">
                              <p for="{{$member_pos}}-field">メンバーの役割</p>
                              <input type="text" id="{{$member_pos}}-field" rows="3" name="{{$member_pos}}" class="form-control" value="{{ is_null(old($member_pos)) ? $npo_info->$member_pos : old($member_pos) }}"/>
                              @if($errors->has($member_pos))
                               <span class="help-block">{{ $errors->first($member_pos) }}</span>
                              @endif
                           </div>
                           <div class="form-group @if($errors->has($member_detail)) has-error @endif">
                              <p for="{{$member_detail}}-field">メンバーの詳細</p>
                              <textarea class="form-control" id="{{$member_detail}}-field" rows="6" name="{{$member_detail}}">{{ is_null(old($member_detail)) ? $npo_info->$member_detail : old($member_detail) }}</textarea>
                              @if($errors->has($member_detail))
                                 <span class="help-block">{{ $errors->first($member_detail) }}</span>
                              @endif
                           </div>
                           {{-- 編集権限 --}}
                           @if($npo_info->$member != $npo_info->manager)
                           <div class="form-group @if($errors->has('$member_twitter')) has-error @endif">
                                <label for="{{$member_twitter}}-field">{{$npo_info->$member}}さんの編集権限</label><br>
            					@if ($npo_info->$member_twitter == $npo_info->$member)
                                <input type="radio" id="{{$member_twitter}}-field_1" name="{{$member_twitter}}" value="{{$npo_info->$member}}1" style="width:40px;height:30px">編集権限有り
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="radio" id="{{$member_twitter}}-field_0" name="{{$member_twitter}}" value="{{$npo_info->$member}}" style="width:40px;height:30px" CHECKED>編集権限なし
                                @else
                                <input type="radio" id="{{$member_twitter}}-field_1" name="{{$member_twitter}}" value="{{$npo_info->$member}}1" style="width:40px;height:30px" CHECKED>編集権限有り
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="radio" id="{{$member_twitter}}-field_0" name="{{$member_twitter}}" value="{{$npo_info->$member}}" style="width:40px;height:30px">編集権限なし
                                @endif
                                @if($errors->has("$member_twitter"))
                                <span class="help-block">{{ $errors->first("$member_twitter") }}</span>
                                @endif
                            </div>
                            @endif
                           {{--
                           <div class="form-group @if($errors->has('member1_twitter')) has-error @endif">
                              <label for="member1_twitter-field">{{$i}}のメンバーのTwitter（twitter.com/〇〇〇〇〇〇〇〇〇/の〇の部分を記入）</label>
                           <input type="text" id="member1_twitter-field" name="member1_twitter" class="form-control" value="{{ is_null(old("member1_twitter")) ? $npo_info->member1_twitter : old("member1_twitter") }}"/>
                              @if($errors->has("member1_twitter"))
                               <span class="help-block">{{ $errors->first("member1_twitter") }}</span>
                              @endif
                           </div>
                           <!--<div class="form-group @if($errors->has('member1_facebook')) has-error @endif">-->
                           <!--   <label for="member1_facebook-field">{{$i}}のメンバーのFacebook（facebook.com/〇〇〇〇〇〇〇〇〇/の〇の部分を記入）</label>-->
                           <!--<input type="text" id="member1_facebook-field" name="member1_facebook" class="form-control" value="{{ is_null(old("member1_facebook")) ? $npo_info->member1_facebook : old("member1_facebook") }}"/>-->
                           <!--   @if($errors->has("member1_facebook"))-->
                           <!--    <span class="help-block">{{ $errors->first("member1_facebook") }}</span>-->
                           <!--   @endif-->
                           <!--</div>-->
                           <!--<div class="form-group @if($errors->has('member1_linkedin')) has-error @endif">-->
                           <!--   <label for="member1_linkedin-field">①のメンバーのlinkedinのURL（linkedin.com/in/〇〇〇〇〇〇〇〇〇/の〇の部分を記入）</label>-->
                           <!--<input type="text" id="member1_linkedin-field" name="member1_linkedin" class="form-control" value="{{ is_null(old("member1_linkedin")) ? $npo_info->member1_linkedin : old("member1_linkedin") }}"/>-->
                           <!--   @if($errors->has("member1_linkedin"))-->
                           <!--    <span class="help-block">{{ $errors->first("member1_linkedin") }}</span>-->
                           <!--   @endif-->
                           <!--</div>-->
                           --}}
                        @endif
                    @endfor
                    
                    <h1><i class="glyphicon glyphicon-edit"></i>寄付内容の設定</h1>
                    <!-- 目的 -->
                    <div class="form-group @if($errors->has('support_purpose')) has-error @endif">
                       <label for="support_purpose-field">資金の使い道</label>
                    <input type="text" id="support_purpose-field" name="support_purpose" class="form-control" value="{{ is_null(old("support_purpose")) ? $npo_info->support_purpose : old("support_purpose") }}"/>
                       @if($errors->has("support_purpose"))
                        <span class="help-block">{{ $errors->first("support_purpose") }}</span>
                       @endif
                    </div>
                    <!-- 寄付金額 -->
                    <div class="form-group @if($errors->has('support_amount')) has-error @endif">
                       <label for="support_amount-field">値段*公開後変更不可</label>
                    <input type="text" id="support_amount-field" name="support_amount" class="form-control" value="{{ is_null(old("support_amount")) ? $npo_info->support_amount : old("support_amount") }}" {{ !$npo_info->published ? '' : 'readonly="readonly"'}}/>
                       @if($errors->has("support_amount"))
                        <span class="help-block">{{ $errors->first("support_amount") }}</span>
                       @endif
                    </div>
                    <!-- リターン -->
                    <div class="form-group @if($errors->has('support_contents')) has-error @endif">
                       <label for="support_contents-field">購入者へのリターン（無しでも可能）</label>
                    <input type="text" id="support_contents-field" name="support_contents" class="form-control" value="{{ is_null(old("support_contents")) ? $npo_info->support_contents : old("support_contents") }}"/>
                       @if($errors->has("support_contents"))
                        <span class="help-block">{{ $errors->first("support_contents") }}</span>
                       @endif
                    </div>
                    <!-- 特典利用期限 -->
                    <div class="form-group @if($errors->has('support_contents_detail')) has-error @endif">
                       <label for="support_contents_detail-field">購入者へのリターン有効期限</label>
                    <input type="date" id="support_contents_detail-field" name="support_contents_detail" class="form-control" value="{{ is_null(old("support_contents_detail")) ? $npo_info->support_contents_detail : old("support_contents_detail") }}"/>
                       @if($errors->has("support_contents_detail"))
                        <span class="help-block">{{ $errors->first("support_contents_detail") }}</span>
                       @endif
                    </div>
                    
                    <h1><i class="glyphicon glyphicon-edit"></i>法人からの寄付内容の設定</h1>
                    {{-- 寄付金額（法人） --}}
                    <div class="form-group @if($errors->has('support_price_gold')) has-error @endif">
                       <label for="support_price_gold-field">法人寄付の値段*公開後変更不可</label>
                    <input type="text" id="support_price_gold-field" name="support_price_gold" class="form-control" value="{{ is_null(old("support_price_gold")) ? $npo_info->support_price_gold : old("support_price_gold") }}" {{ !$npo_info->published ? '' : 'readonly="readonly"'}}/>
                       @if($errors->has("support_price_gold"))
                        <span class="help-block">{{ $errors->first("support_price_gold") }}</span>
                       @endif
                    </div>
                    <!-- 寄付の募集数 -->
                    <div class="form-group @if($errors->has('support_amount_gold')) has-error @endif">
                       <label for="support_amount_gold-field">法人寄付の募集数</label>
                    <input type="text" id="support_amount_gold-field" name="support_amount_gold" class="form-control" value="{{ is_null(old("support_amount_gold")) ? $npo_info->support_amount_gold : old("support_amount_gold") }}"/>
                       @if($errors->has("support_amount_gold"))
                        <span class="help-block">{{ $errors->first("support_amount_gold") }}</span>
                       @endif
                    </div>
                    <!-- リターン -->
                    <div class="form-group @if($errors->has('support_contents_gold')) has-error @endif">
                       <label for="support_contents_gold-field">法人寄付リターンの内容（無しでも可能）</label>
                    <input type="text" id="support_contents_gold-field" name="support_contents_gold" class="form-control" value="{{ is_null(old("support_contents_gold")) ? $npo_info->support_contents_gold : old("support_contents_gold") }}"/>
                       @if($errors->has("support_contents_gold"))
                        <span class="help-block">{{ $errors->first("support_contents_gold") }}</span>
                       @endif
                    </div>
                    <!-- リターン詳細 -->
                    <div class="form-group @if($errors->has('support_contents_detail_pratinum')) has-error @endif">
                       <label for="support_contents_detail_pratinum-field">法人寄付リターンの詳細リンク（URLを入力。無しでも可能）</label>
                    <input type="text" id="support_contents_detail_pratinum-field" name="support_contents_detail_pratinum" class="form-control" value="{{ is_null(old("support_contents_detail_pratinum")) ? $npo_info->support_contents_detail_pratinum : old("support_contents_detail_pratinum") }}"/>
                       @if($errors->has("support_contents_detail_pratinum"))
                        <span class="help-block">{{ $errors->first("support_contents_detail_pratinum") }}</span>
                       @endif
                    </div>
                    
                    <h1><i class="glyphicon glyphicon-edit"></i>法人からのプラチナ寄付内容の設定</h1>
                    <!-- 寄付金額（プラチナ法人） -->
                    <div class="form-group @if($errors->has('support_price_pratinum')) has-error @endif">
                       <label for="support_price_pratinum-field">法人寄付の値段(プラチナ寄付)*公開後変更不可</label>
                    <input type="text" id="support_price_pratinum-field" name="support_price_pratinum" class="form-control" value="{{ is_null(old("support_price_pratinum")) ? $npo_info->support_price_pratinum : old("support_price_pratinum") }}" {{ !$npo_info->published ? '' : 'readonly="readonly"'}}/>
                       @if($errors->has("support_price_pratinum"))
                        <span class="help-block">{{ $errors->first("support_price_pratinum") }}</span>
                       @endif
                    </div>
                    <!-- 寄付の募集数 -->
                    <div class="form-group @if($errors->has('support_amount_pratinum')) has-error @endif">
                       <label for="support_amount_pratinum-field">プラチナ寄付の募集数</label>
                    <input type="text" id="support_amount_pratinum-field" name="support_amount_pratinum" class="form-control" value="{{ is_null(old("support_amount_pratinum")) ? $npo_info->support_amount_pratinum : old("support_amount_pratinum") }}"/>
                       @if($errors->has("support_amount_pratinum"))
                        <span class="help-block">{{ $errors->first("support_amount_pratinum") }}</span>
                       @endif
                    </div>
                    <!-- リターン -->
                    <div class="form-group @if($errors->has('support_contents_pratinum')) has-error @endif">
                       <label for="support_contents_pratinum-field">プラチナ寄付リターンの内容（無しでも可能）</label>
                    <input type="text" id="support_contents_pratinum-field" name="support_contents_pratinum" class="form-control" value="{{ is_null(old("support_contents_pratinum")) ? $npo_info->support_contents_pratinum : old("support_contents_pratinum") }}"/>
                       @if($errors->has("support_contents_pratinum"))
                        <span class="help-block">{{ $errors->first("support_contents_pratinum") }}</span>
                       @endif
                    </div>
                    <!-- リターン詳細 -->
                    <div class="form-group @if($errors->has('support_contents_detail_pratinum')) has-error @endif">
                       <label for="support_contents_detail_pratinum-field">プラチナ寄付リターンの詳細リンク（URLを入力。無しでも可能）</label>
                    <input type="text" id="support_contents_detail_pratinum-field" name="support_contents_detail_pratinum" class="form-control" value="{{ is_null(old("support_contents_detail_pratinum")) ? $npo_info->support_contents_detail_pratinum : old("support_contents_detail_pratinum") }}"/>
                       @if($errors->has("support_contents_detail_pratinum"))
                        <span class="help-block">{{ $errors->first("support_contents_detail_pratinum") }}</span>
                       @endif
                    </div>
                    
                    <h1><i class="glyphicon glyphicon-edit"></i>目標とURLの設定</h1>
                    <!-- 目標金額 -->
                    <div class="form-group @if($errors->has('support_price')) has-error @endif">
                       <label for="support_price-field">目標金額*公開中変更不可</label>
                    <input type="text" id="support_price-field" name="support_price" class="form-control" value="{{ is_null(old("support_price")) ? $npo_info->support_price : old("support_price") }}" {{ !$npo_info->proval == 1 ? '' : 'readonly="readonly"'}}/>
                       @if($errors->has("support_price"))
                        <span class="help-block">公開する場合、目標金額は必須です。（10,000円以上）</span>
                       @endif
                    </div>
                    <!-- URL -->
                    <div class="form-group @if($errors->has('npo_name')) has-error @endif">
                       <label for="npo_name-field">ページURL（https://fsharp.me/〇〇〇〇の〇部分）*設定後変更不可</label>
                    <input type="text" id="npo_name-field" name="npo_name" class="form-control" value="{{ is_null(old("npo_name")) ? $npo_info->npo_name : old("npo_name") }}" {{ !$npo_info->npo_name ? '' : 'readonly="readonly"'}}/>
                       @if($errors->has("npo_name"))
                        <span class="help-block">この{{ $errors->first("npo_name") }}(URL)はすでに使われております。</span>
                       @endif
                    </div>
                    <!-- 公開非公開 -->
                    <div class="form-group @if($errors->has('proval')) has-error @endif">
                        <label for="title-field">公開・未公開</label><br>
    					@if ($npo_info->proval == 0)
                        <input type="radio" id="proval-field_1" name="proval" value="1" style="width:40px;height:30px">公開
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio" id="proval-field_0" name="proval" value="0" style="width:40px;height:30px" CHECKED>未公開
                        @else
                        <input type="radio" id="proval-field_1" name="proval" value="1" style="width:40px;height:30px" CHECKED>公開
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio" id="proval-field_0" name="proval" value="0" style="width:40px;height:30px">未公開
                        @endif
                        @if($errors->has("proval"))
                        <span class="help-block">{{ $errors->first("proval") }}</span>
                        @endif
                    </div>
                   <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a class="btn btn-link pull-right" href="{{ route('npo_registers.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>
                </div>
            </form>
            <br><br><br><br><br>
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
