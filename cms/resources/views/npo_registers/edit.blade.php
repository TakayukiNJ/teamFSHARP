@extends('layouts.common_nav_lp')
@include('layouts.head')
@include('layouts.script')
@include('layouts.nav_lp')
@section('content')
<form enctype="multipart/form-data" action="{{ route('npo_registers.update', $npo_info->id) }}" method="POST">
    <input type="hidden" name="_method" value="PUT">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div id="description-areas">
        {{--     *********    HEADERS     *********      --}}
        <div class="cd-section" id="headers">
            @if($npo_info->background_pic)
            <div class="page-header" style="background-image: url('/img/project_back/{{ $npo_info->background_pic }}');">
            @else
            <div class="page-header" style="background-image: url('https://images.unsplash.com/photo-1486310662856-32058c639c65?dpr=2&auto=format&fit=crop&w=1500&h=1125&q=80&cs=tinysrgb&crop=');">
            @endif
                <div class="filter"></div>
                <div class="content-center">
                    @include('error')
                    <div class="container">
                        <div class="row">
                            @if (( $npo_info->embed_youtube ) != "")
                            <div class="col-md-5">
                                <div class="iframe-container">
                                    <iframe src="https://www.youtube.com/embed/{{ $npo_info->embed_youtube }}?modestbranding=1&autohide=1&showinfo=0" frameborder="0" allowfullscreen height="250"></iframe>
                                    <!--<iframe src="https://www.youtube.com/embed/xdgqBFFQXKY?modestbranding=1&autohide=1&showinfo=0" frameborder="0" allowfullscreen height="250"></iframe>-->
                                </div>
                            </div>
                            <div class="col-md-6 ml-auto">
                            @else
                            <div class="col-md-12 ml-auto">
                            @endif
                                <div class="form-group @if($errors->has('subtitle')) has-error @endif">
                                   <label for="subtitle-field">プロジェクト名 <span class="icon-danger">*</span></label>
                                <input type="text" id="subtitle-field" name="subtitle" class="form-control text-center" value="{{ is_null(old("subtitle")) ? $npo_info->subtitle : old("subtitle") }}"/>
                                   @if($errors->has("subtitle"))
                                    <span class="help-block icon-danger">{{ $errors->first("subtitle") }}</span>
                                   @endif
                                </div>
                                <div class="form-group @if($errors->has('title')) has-error @endif">
                                   <label for="title-field">団体の名前（変更不可）</label>
                                   <input type="text" id="title-field" name="title" class="form-control text-center" value="{{ is_null(old("title")) ? $npo_info->title : old("title") }}" readonly="readonly"/>
                                   @if($errors->has("title"))
                                    <span class="help-block icon-danger">{{ $errors->first("title") }}</span>
                                   @endif
                                </div>
                                <div class="form-group @if($errors->has('support_price')) has-error @endif">
                                   <label for="support_price-field">目標金額（公開中変更不可）</label>
                                <input type="text" id="support_price-field" name="support_price" class="form-control text-center" value="{{ is_null(old("support_price")) ? $npo_info->support_price : old("support_price") }}" {{ !$npo_info->proval == 1 ? '' : 'readonly="readonly"'}}/>
                                   @if($errors->has("support_price"))
                                    <span class="help-block icon-danger">公開する場合、目標金額は必須です。（10,000円以上）</span>
                                   @endif
                                </div>
                                <div class="form-group @if($errors->has('embed_youtube')) has-error @endif">
                                   <label for="embed_youtube-field">Embed YouTube(トップに載せるYouTube) https://www.youtube.com/watch?v=〇〇〇〇〇〇〇〇の部分</label>
                                <input type="text" id="embed_youtube-field" name="embed_youtube" class="form-control text-center" value="{{ is_null(old("embed_youtube")) ? $npo_info->embed_youtube : old("embed_youtube") }}"/>
                                   @if($errors->has("embed_youtube"))
                                    <span class="help-block icon-danger">{{ $errors->first("embed_youtube") }}</span>
                                   @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="container">
            <h4>詳細編集</h4>
            <div class="row">
                <div class="col-md-5 col-sm-5">
                    <h6>画像編集</h6>
                    <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                        <div class="fileinput-new thumbnail img-no-padding" style="max-width: 370px; max-height: 250px;">
                            @if($npo_info->background_pic)
                            <img src='/img/project_back/{{ $npo_info->background_pic }}' alt="{{ Auth::user()->npo }}">
                            @else
                            <img src="https://images.unsplash.com/photo-1486310662856-32058c639c65?dpr=2&auto=format&fit=crop&w=1500&h=1125&q=80&cs=tinysrgb&crop=" alt="default">
                            @endif
                        </div>
                        <div class="fileinput-preview fileinput-exists thumbnail img-no-padding" style="max-width: 370px; max-height: 250px;"></div>
                        <div>
                            <span class="btn btn-outline-default btn-round btn-file"><span class="fileinput-new">背景画像変更</span><span class="fileinput-exists">Change</span><input type="file" name="background_pic"></span>
                            <a href="#paper-kit" class="btn btn-link btn-danger fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                        </div>
                    <br>
                    </div>
                    <div class="row price-row text-center">
                        <br>
                        @for ($i = 1; $i < 7; $i++)
                        <div class="col-md-5">
                            <div class="form-group @if($errors->has('sdgs'.$i)) has-error @endif">
                                <select class="selectpicker" data-style="btn btn-outline-default btn-round" name="sdgs{{$i}}">
                                    <?php $sdgs = "sdgs".$i ?>
                                    <option disabled <?php if($npo_info->$sdgs == 0){ echo "selected"; } ?>>SDGsを選択</option>
                                    <option value="01_ja" <?php if($npo_info->$sdgs == "01_ja"){ echo "selected"; } ?>>1.貧困をなくそう</option>
                                    <option value="02_ja" <?php if($npo_info->$sdgs == "02_ja"){ echo "selected"; } ?>>2.飢餓をゼロに</option>
                                    <option value="03_ja" <?php if($npo_info->$sdgs == "03_ja"){ echo "selected"; } ?>>3.すべての人に健康福祉</option>
                                    <option value="04_ja" <?php if($npo_info->$sdgs == "04_ja"){ echo "selected"; } ?>>4.質の高い教育を</option>
                                    <option value="05_ja" <?php if($npo_info->$sdgs == "05_ja"){ echo "selected"; } ?>>5.ジェンダー平等を実現</option>
                                    <option value="06_ja" <?php if($npo_info->$sdgs == "06_ja"){ echo "selected"; } ?>>6.安全な水とトイレを</option>
                                    <option value="07_ja" <?php if($npo_info->$sdgs == "07_ja"){ echo "selected"; } ?>>7.エネルギー＆クリーン</option>
                                    <option value="08_ja" <?php if($npo_info->$sdgs == "08_ja"){ echo "selected"; } ?>>8.働きがいも経済成長も</option>
                                    <option value="09_ja" <?php if($npo_info->$sdgs == "09_ja"){ echo "selected"; } ?>>9.産業と技術革新の基盤</option>
                                    <option value="10_ja_2" <?php if($npo_info->$sdgs=="10_ja_2"){ echo "selected"; } ?>>10.人や国の不平等</option>
                                    <option value="11_ja" <?php if($npo_info->$sdgs == "11_ja"){ echo "selected"; } ?>>11.住み続けられるまち</option>
                                    <option value="12_ja" <?php if($npo_info->$sdgs == "12_ja"){ echo "selected"; } ?>>12.つくる責任つかう責任</option>
                                    <option value="13_ja" <?php if($npo_info->$sdgs == "13_ja"){ echo "selected"; } ?>>13.気候変動に具体的対策</option>
                                    <option value="14_ja" <?php if($npo_info->$sdgs == "14_ja"){ echo "selected"; } ?>>14.海の豊かさを守ろう</option>
                                    <option value="15_ja" <?php if($npo_info->$sdgs == "15_ja"){ echo "selected"; } ?>>15.陸の豊かさを守ろう</option>
                                    <option value="16_ja" <?php if($npo_info->$sdgs == "16_ja"){ echo "selected"; } ?>>16.平和と公正を</option>
                                    <option value="17_ja" <?php if($npo_info->$sdgs == "17_ja"){ echo "selected"; } ?>>17.パートナーシップ</option>
                                    <option value="wheel_rgb" <?php if($npo_info->$sdgs == "wheel_rgb"){ echo "selected"; } ?>>全て</option>
                                    <option value="">該当なし</option>
                               </select>
                            </div>
                        </div>
                        @endfor
                    </div>
         <!--           <div class="text-center">-->
    					<!--<div class="fileinput fileinput-new" data-provides="fileinput" name="avater">-->
         <!--                   <div class="fileinput-new img-no-padding" >-->
         <!--                       @if($npo_info->avater)-->
         <!--                           <img src='/img/project_logo/{{ $npo_info->avater }}' alt="{{ Auth::user()->name }}">-->
         <!--                       @else-->
         <!--                           <img src="{{ url('/') }}/../img/placeholder.jpg" alt="default">-->
         <!--                       @endif-->
         <!--                   </div>-->
         <!--                   <div class="fileinput-preview fileinput-exists img-no-padding"></div>-->
         <!--                   <div class="text-center">-->
         <!--                       <br>-->
         <!--                       <span class="btn btn-outline-default btn-file btn-round"><span class="fileinput-new">ロゴ画像変更</span><span class="fileinput-exists">変更</span><input type="file" name="avater"></span>-->
         <!--                       <br>-->
         <!--                       <a href="#paper-kit" class="btn btn-link btn-danger fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> キャンセル</a>-->
         <!--                   </div>-->
         <!--               </div>-->
         <!--           </div>-->

     <!--               <h6>Format <span class="icon-danger">*</span></h6>-->
					<!--<div class="form-check-radio">-->
     <!--                   <label class="form-check-label">-->
     <!--                       <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" >-->
     <!--                       Digital-->
     <!--                       <span class="form-check-sign"></span>-->
     <!--                   </label>-->
     <!--               </div>-->
     <!--               <div class="form-check-radio">-->
     <!--                   <label class="form-check-label">-->
     <!--                       <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2" checked>-->
     <!--                       Print-->
     <!--                       <span class="form-check-sign"></span>-->
     <!--                   </label>-->
     <!--               </div>-->
                </div>

                <div class="col-md-7 col-sm-7">
                    <br>
                    {{-- FsharpのURL --}}
                    <div class="form-group @if($errors->has('npo_name')) has-error @endif">
                        <label for="npo_name-field">バッジの名前（https://fsharp.me/〇〇〇〇部分のURLに使用。設定後変更不可）</label>
                        <input type="text" id="npo_name-field" name="npo_name" class="form-control" placeholder="test_project" value="{{ is_null(old("npo_name")) ? $npo_info->npo_name : old("npo_name") }}" {{ !$npo_info->npo_name ? '' : 'readonly="readonly"'}}/>
                        @if($errors->has("npo_name"))
                        <span class="help-block icon-danger">この{{ $errors->first("npo_name") }}バッジはすでに使われております。</span>
                        @endif
                    </div>
                    {{-- 公式サイトのURL --}}
                    <div class="form-group @if($errors->has('url')) has-error @endif">
                        <label for="url-field">公式サイトのURL</label>
                        <input type="text" id="url-field" name="url" class="form-control" placeholder="https://www.facebook.com/fsharp.me" value="{{ is_null(old("url")) ? $npo_info->url : old("url") }}"/>
                        @if($errors->has("url"))
                        <span class="help-block icon-danger">この{{ $errors->first("url") }}バッジはすでに使われております。</span>
                        @endif
                    </div>
                    {{-- 資金の使い道 --}}
                    <div class="form-group @if($errors->has('support_purpose')) has-error @endif">
                       <h6 for="support_purpose-field">資金の使い道</h6>
                    <input type="text" id="support_purpose-field" name="support_purpose" class="form-control" value="{{ is_null(old("support_purpose")) ? $npo_info->support_purpose : old("support_purpose") }}"/>
                       @if($errors->has("support_purpose"))
                        <span class="help-block icon-danger">{{ $errors->first("support_purpose") }}</span>
                       @endif
                    </div>
                    <!-- リターン -->
                    <div class="form-group @if($errors->has('support_contents')) has-error @endif">
                       <h6 for="support_contents-field">バッジ購入者へのリターン（無しでも可能）</h6>
                    <input type="text" id="support_contents-field" name="support_contents" class="form-control" value="{{ is_null(old("support_contents")) ? $npo_info->support_contents : old("support_contents") }}"/>
                       @if($errors->has("support_contents"))
                        <span class="help-block icon-danger">{{ $errors->first("support_contents") }}</span>
                       @endif
                    </div>
                    <!-- 特典利用期限 -->
                    
                    
                    <div class="row price-row">
                        <div class="col-md-6">
                            <h6>バッジの値段 <span class="icon-danger">*</span>（公開後変更不可）</h6>
                            <div class="input-group border-input form-group  @if($errors->has('support_amount')) has-error @endif">
                                <span class="input-group-addon"><i class="fa fa-yen"></i></span>
                                <input type="text" id="support_amount-field" name="support_amount" placeholder="3,000" class="form-control border-input" value="{{ is_null(old("support_amount")) ? $npo_info->support_amount : old("support_amount") }}" {{ !$npo_info->published ? '' : 'readonly="readonly"'}}>
                                @if($errors->has("support_amount"))
                                    <span class="help-block icon-danger">{{ $errors->first("support_amount") }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h6 for="support_contents_detail-field">リターン有効期限（なしの場合記入しない）</h6>
    			            <div class="form-group @if($errors->has('support_contents_detail')) has-error @endif">
    			                 <div class='input-group date' id='datetimepicker'>
    			                 <input type='text' id="support_contents_detail-field" class="form-control datetimepicker" name="support_contents_detail" value="{{ is_null(old("support_contents_detail")) ? $npo_info->support_contents_detail : old("support_contents_detail") }}"/>
    			                    @if($errors->has("support_contents_detail"))
                                        <span class="help-block icon-danger">{{ $errors->first("support_contents_detail") }}</span>
                                    @endif
    			                    <span class="input-group-addon">
    			                        <span class="glyphicon glyphicon-calendar"><i class="fa fa-calendar" aria-hidden="true"></i></span>
    			                    </span>
    			                </div>
    			            </div>
                            
                            <!--<div class="input-group border-input">-->
                            <!--    <input type="text" value="" placeholder="enter discount" class="form-control border-input">-->
                            <!--    <span class="input-group-addon">%</span>-->
                            <!--</div>-->
                        </div>
                    </div>
                    <div class="form-group @if($errors->has('body')) has-error @endif">
                        <h6>説明・紹介文</h6>
						<textarea class="form-control textarea-limited" id="body-field" name="body" placeholder="説明・紹介文は、200文字までです。" rows="10", maxlength="200" value="{{ is_null(old("yellow_card_body")) ? $npo_info->yellow_card_body : old("yellow_card_body") }}"></textarea>
                        <h5><small><span id="textarea-limited-message" class="pull-right">残り200文字</span></small></h5>
                        @if($errors->has("yellow_card_body"))
                            <span class="help-block icon-danger">{{ $errors->first("body") }}</span>
                        @endif
                    </div>
                </div>
            </div>
            <h1><i class="glyphicon glyphicon-edit"></i>法人からの寄付内容の設定</h1>
            {{-- 寄付金額（法人） --}}
            <div class="form-group @if($errors->has('support_price_gold')) has-error @endif">
               <label for="support_price_gold-field">法人寄付の値段*公開後変更不可</label>
            <input type="text" id="support_price_gold-field" name="support_price_gold" class="form-control" value="{{ is_null(old("support_price_gold")) ? $npo_info->support_price_gold : old("support_price_gold") }}" {{ !$npo_info->published ? '' : 'readonly="readonly"'}}/>
               @if($errors->has("support_price_gold"))
                <span class="help-block icon-danger">{{ $errors->first("support_price_gold") }}</span>
               @endif
            </div>
            <!-- 寄付の募集数 -->
            <div class="form-group @if($errors->has('support_amount_gold')) has-error @endif">
               <label for="support_amount_gold-field">法人寄付の募集数</label>
            <input type="text" id="support_amount_gold-field" name="support_amount_gold" class="form-control" value="{{ is_null(old("support_amount_gold")) ? $npo_info->support_amount_gold : old("support_amount_gold") }}"/>
               @if($errors->has("support_amount_gold"))
                <span class="help-block icon-danger">{{ $errors->first("support_amount_gold") }}</span>
               @endif
            </div>
            <!-- リターン -->
            <div class="form-group @if($errors->has('support_contents_gold')) has-error @endif">
               <label for="support_contents_gold-field">法人寄付リターンの内容（無しでも可能）</label>
            <input type="text" id="support_contents_gold-field" name="support_contents_gold" class="form-control" value="{{ is_null(old("support_contents_gold")) ? $npo_info->support_contents_gold : old("support_contents_gold") }}"/>
               @if($errors->has("support_contents_gold"))
                <span class="help-block icon-danger">{{ $errors->first("support_contents_gold") }}</span>
               @endif
            </div>
            <!-- リターン詳細 -->
            <div class="form-group @if($errors->has('support_contents_detail_gold')) has-error @endif">
               <label for="support_contents_detail_gold-field">法人寄付リターンの詳細リンク（URLを入力。無しでも可能）</label>
            <input type="text" id="support_contents_detail_gold-field" name="support_contents_detail_gold" class="form-control" value="{{ is_null(old("support_contents_detail_gold")) ? $npo_info->support_contents_detail_gold : old("support_contents_detail_gold") }}"/>
               @if($errors->has("support_contents_detail_gold"))
                <span class="help-block icon-danger">{{ $errors->first("support_contents_detail_gold") }}</span>
               @endif
            </div>
            
            <h1><i class="glyphicon glyphicon-edit"></i>法人からのプラチナ寄付内容の設定</h1>
            <!-- 寄付金額（プラチナ法人） -->
            <div class="form-group @if($errors->has('support_price_pratinum')) has-error @endif">
               <label for="support_price_pratinum-field">法人寄付の値段(プラチナ寄付)*公開後変更不可</label>
            <input type="text" id="support_price_pratinum-field" name="support_price_pratinum" class="form-control" value="{{ is_null(old("support_price_pratinum")) ? $npo_info->support_price_pratinum : old("support_price_pratinum") }}" {{ !$npo_info->published ? '' : 'readonly="readonly"'}}/>
               @if($errors->has("support_price_pratinum"))
                <span class="help-block icon-danger">{{ $errors->first("support_price_pratinum") }}</span>
               @endif
            </div>
            <!-- 寄付の募集数 -->
            <div class="form-group @if($errors->has('support_amount_pratinum')) has-error @endif">
               <label for="support_amount_pratinum-field">プラチナ寄付の募集数</label>
            <input type="text" id="support_amount_pratinum-field" name="support_amount_pratinum" class="form-control" value="{{ is_null(old("support_amount_pratinum")) ? $npo_info->support_amount_pratinum : old("support_amount_pratinum") }}"/>
               @if($errors->has("support_amount_pratinum"))
                <span class="help-block icon-danger">{{ $errors->first("support_amount_pratinum") }}</span>
               @endif
            </div>
            <!-- リターン -->
            <div class="form-group @if($errors->has('support_contents_pratinum')) has-error @endif">
               <label for="support_contents_pratinum-field">プラチナ寄付リターンの内容（無しでも可能）</label>
            <input type="text" id="support_contents_pratinum-field" name="support_contents_pratinum" class="form-control" value="{{ is_null(old("support_contents_pratinum")) ? $npo_info->support_contents_pratinum : old("support_contents_pratinum") }}"/>
               @if($errors->has("support_contents_pratinum"))
                <span class="help-block icon-danger">{{ $errors->first("support_contents_pratinum") }}</span>
               @endif
            </div>
            <!-- リターン詳細 -->
            <div class="form-group @if($errors->has('support_contents_detail_pratinum')) has-error @endif">
               <label for="support_contents_detail_pratinum-field">プラチナ寄付リターンの詳細リンク（URLを入力。無しでも可能）</label>
            <input type="text" id="support_contents_detail_pratinum-field" name="support_contents_detail_pratinum" class="form-control" value="{{ is_null(old("support_contents_detail_pratinum")) ? $npo_info->support_contents_detail_pratinum : old("support_contents_detail_pratinum") }}"/>
               @if($errors->has("support_contents_detail_pratinum"))
                <span class="help-block icon-danger">{{ $errors->first("support_contents_detail_pratinum") }}</span>
               @endif
            </div>
        </div>
        
        {{--     *********    PRICING     *********      --}}
        {{--<div class="pricing-5 section-gray" id="pricing">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h2 class="title">支援方法を選択</h2>
                        <div class="choose-plan">
                            <ul class="nav nav-pills nav-pills-danger" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#personal" id="#aa" role="tab">{{ $npo_info->subtitle }}を支援</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#commercial" id="bb" role="tab">法人の方</a>
                                </li>
                            </ul>
                        </div>
                        <br/>
                        <div class="tab-content text-center" >
                            <p>現在の寄付者と法人の合計数：<b>{{$buyer_data}}</b></p>
                            <p>寄付するとユーザー名・法人名が記載されます。</p>
                            <p>集まった寄付金は全額ご担当者にお渡しします。</p>
                            <p class="description text-gray">
                                決済時に、運営(振込)手数料258円とクレジットカード手数料4.6%がかかります。
                                <!--仮に毎月1,000円の寄付を認定NPO法人に寄付をした場合、最大5,000円の税制控除を受けられます。-->
                            </p>
                        </div>
                    </div>

                    <div class="col-md-7 ml-auto" id="support">
                        <div class="tab-content text-center" >
                            <div class="tab-pane active" id="personal" role="tabpanel">
                                <div class="space-top"></div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card card-pricing">
                                            <div class="card-body">
                                                <h6 class="card-category text-danger">{{ $npo_info->title }}を支援</h6>
                                                <h1 class="card-title">{{ $npo_info->support_amount }}円</h1>
                                                <ul>
                                                    <li><b>使用目的: {{ $npo_info->support_purpose or '活動費' }}</b></li>
                                                    <li><b>リターン: {{ $npo_info->support_contents or '未設定' }}</b></li>
                                                    @if($npo_info->support_contents_detail)
                                                    <li><b>特典利用期限: {{ Carbon\Carbon::parse($npo_info->support_contents_detail)->format('Y年m月d日') }}</b></li>
                                                    @endif
                                                </ul>
                                                @if (Auth::guest())
                                                <a href="{{ url('/login') }}" class="btn btn-danger btn-round">ログイン</a>
                                                @endif
                                                
                                                <style type="text/css">
                                                button.stripe-button-el,
                                                button.stripe-button-el>span {
                                                  background-color: #F57763 !important;
                                                  background-image: none;
                                                }
                                                </style>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card card-pricing" data-color="orange">
                                            <div class="card-body">
                                                <h6 class="card-category text-success">支援者リスト</h6>
                                                <h3 class="card-title">現在の寄付者：<b>{{$donater_count}}人</b></h3>
                                                <ul>
                                                    @if(count($donater)>1)
                                                        <li>
                                                        @for ($i = 1; $i < count($donater); $i++)
                                                            @if($i == 1)
                                                                {{$donater[$i]}}さん
                                                            @else
                                                                、{{$donater[$i]}}さん
                                                            @endif
                                                        @endfor
                                                        </li>
                                                    @else
                                                        <li>まだ寄付者はいません。</li>
                                                        <li>　</li>
                                                        <li>　</li>
                                                    @endif
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane" id="commercial" role="tabpanel">
                                <div class="space-top"></div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card card-pricing">
                                            <div class="card-body">
                                                <h6 class="card-category text-danger">法人（団体・チーム）として支援する</h6>
                                                <h1 class="card-title">¥{{$npo_info->support_price_gold}}</h1>
                                                <ul>
                                                    <li>現在<b>{{$company_count_gold}}</b>法人が支援中です。</li>
                                                    <li>最大<b>{{$npo_info->support_amount_gold}}</b>法人まで支援可能。</li>
                                                    @if($npo_info->support_contents_gold)
                                                        <li>リターン：<b>{{$npo_info->support_contents_gold}}</b></li>
                                                    @endif
                                                    @if(count($donater_gold)>1)
                                                        <li>支援法人名：
                                                        @for ($i = 1; $i < count($donater_gold); $i++)
                                                            @if($i == 1)
                                                                {{$donater_gold[$i]}}
                                                            @else
                                                                、{{$donater_gold[$i]}}
                                                            @endif
                                                        @endfor
                                                        </li>
                                                    @else
                                                    <li>支援した法人名をこちらに掲載。</li>
                                                    @endif
                                                </ul>
                                                @if($npo_info->support_contents_detail_gold)
                                                    <a class="btn btn-success btn-round" href="{{$npo_info->support_contents_detail_gold}}" target="_blank">
                                                        内容の詳細はこちら
                                                    </a>
                                                    <br><br>
                                                @endif
                                                @if (Auth::guest())
                                                <a href="{{ url('/login') }}" class="btn btn-danger btn-round">ログイン</a>
                                                @elseif(Auth::user()->npo == "")
                                                <a href="{{ url('/npo_registers/create') }}" class="btn btn-danger btn-round">まずは団体登録</a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card card-pricing" data-color="orange">
                                            <div class="card-body">
                                                <h6 class="card-category text-success">プラチナ法人として支援する</h6>
                                                <h1 class="card-title">¥{{$npo_info->support_price_pratinum}}</h1>
                                                <ul>
                                                    <li>現在<b>{{$company_count_pratinum}}</b>法人が支援中です。</li>
                                                    <li>最大<b>{{$npo_info->support_amount_pratinum}}</b>法人まで支援可能。</li>
                                                    @if($npo_info->support_contents_pratinum)
                                                        <li>リターン：<b>{{$npo_info->support_contents_pratinum}}</b></li>
                                                    @endif
                                                    @if(count($donater_pratinum)>1)
                                                        <li>支援法人名：
                                                        @for ($i = 1; $i < count($donater_pratinum); $i++)
                                                            @if($i == 1)
                                                                {{$donater_pratinum[$i]}}
                                                            @else
                                                                、{{$donater_pratinum[$i]}}
                                                            @endif
                                                        @endfor
                                                        </li>
                                                    @else
                                                    <li>支援した法人名をこちらに掲載。</li>
                                                    @endif
                                                </ul>
                                                @if($npo_info->support_contents_detail_pratinum)
                                                    <a class="btn btn-success btn-round" href="{{$npo_info->support_contents_detail_pratinum}}" target="_blank">
                                                        内容の詳細はこちら
                                                    </a>
                                                    <br><br>
                                                @endif
                                                @if (Auth::guest())
                                                <a href="{{ url('/login') }}" class="btn btn-neutral btn-round">ログイン</a>
                                                @elseif(Auth::user()->npo == "")
                                                <a href="{{ url('/npo_registers/create') }}" class="btn btn-neutral btn-round">まずは団体登録</a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>--}}
     {{--     *********    3cards     *********      --}}
    <div class="nav-tabs-navigation">
    </div>
    <div id="my-tab-content" class="tab-content text-center section-white">
        <div class="cd-section section-white" id="intro-cards">
            <div class="container">
                <div class="row coloured-cards">
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <div class="card card-blog">
    							{{-- 活動1 --}}
                                <div class="card-image">
            					    <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                        <div class="fileinput-new thumbnail img-no-padding" style="max-width: 370px; max-height: 250px;">
            							    @if($npo_info->code1)
                                            <img src='/img/project_code/{{ $npo_info->code1 }}' alt="{{ $npo_info->code1 }}">
                                            @else
                                            <img src="https://images.unsplash.com/photo-1486310662856-32058c639c65?dpr=2&auto=format&fit=crop&w=1500&h=1125&q=80&cs=tinysrgb&crop=" alt="default">
                                            @endif
                                        </div>
                                        <div class="fileinput-preview fileinput-exists thumbnail img-no-padding"></div>
                                        <div>
                                            <span class="btn btn-outline-default btn-round btn-file"><span class="fileinput-new">活動写真（左）</span><span class="fileinput-exists">Change</span><input type="file" name="code1"></span>
                                            <a href="#" class="btn btn-link btn-danger fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                        </div>
                                    </div>
                                </div>
    							<div class="card-body text-center">
                                    <label for="blue_card_title-field">タイトル(左)</label>
                                    <h4 class="card-title">
                                        <div class="form-group @if($errors->has('blue_card_title')) has-error @endif">
                                        <input type="text" id="blue_card_title-field" name="blue_card_title" class="form-control text-center" value="{{ is_null(old("blue_card_title")) ? $npo_info->blue_card_title : old("blue_card_title") }}"/>
                                           @if($errors->has("blue_card_title"))
                                            <span class="help-block icon-danger">{{ $errors->first("blue_card_title") }}</span>
                                           @endif
                                        </div>
                                    </h4>
                                    <label for="blue_card_body-field">詳細説明</label>
                                    <div class="card-description">
                                        <div class="form-group @if($errors->has('blue_card_body')) has-error @endif">
                                        <textarea class="form-control" id="blue_card_body-field" rows="10" name="blue_card_body">{{ is_null(old("blue_card_body")) ? $npo_info->blue_card_body : old("blue_card_body") }}</textarea>
                                           @if($errors->has("blue_card_body"))
                                            <span class="help-block icon-danger">{{ $errors->first("blue_card_body") }}</span>
                                           @endif
                                        </div>
                                    </div>
    							</div>
    						</div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="card card-blog">
    							{{-- 活動2 --}}
                                <div class="card-image">
            					    <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                        <div class="fileinput-new thumbnail img-no-padding" style="max-width: 370px; max-height: 250px;">
            							    @if($npo_info->code2)
                                            <img src='/img/project_code/{{ $npo_info->code2 }}' alt="{{ $npo_info->code2 }}">
                                            @else
                                            <img src="https://images.unsplash.com/photo-1486310662856-32058c639c65?dpr=2&auto=format&fit=crop&w=1500&h=1125&q=80&cs=tinysrgb&crop=" alt="default">
                                            @endif
                                        </div>
                                        <div class="fileinput-preview fileinput-exists thumbnail img-no-padding"></div>
                                        <div>
                                            <span class="btn btn-outline-default btn-round btn-file"><span class="fileinput-new">活動写真（中）</span><span class="fileinput-exists">Change</span><input type="file" name="code2"></span>
                                            <a href="#" class="btn btn-link btn-danger fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                        </div>
                                    </div>
                                </div>
    							<div class="card-body text-center">
                                    <label for="green_card_title-field">タイトル(中)</label>
                                    <h4 class="card-title">
                                        <div class="form-group @if($errors->has('green_card_title')) has-error @endif">
                                        <input type="text" id="green_card_title-field" name="green_card_title" class="form-control text-center" value="{{ is_null(old("green_card_title")) ? $npo_info->green_card_title : old("green_card_title") }}"/>
                                           @if($errors->has("green_card_title"))
                                            <span class="help-block icon-danger">{{ $errors->first("green_card_title") }}</span>
                                           @endif
                                        </div>
                                    </h4>
                                    <label for="green_card_body-field">詳細説明</label>
                                    <div class="card-description">
                                        <div class="form-group @if($errors->has('green_card_body')) has-error @endif">
                                        <textarea class="form-control" id="green_card_body-field" rows="10" name="green_card_body">{{ is_null(old("green_card_body")) ? $npo_info->green_card_body : old("green_card_body") }}</textarea>
                                           @if($errors->has("green_card_body"))
                                            <span class="help-block icon-danger">{{ $errors->first("green_card_body") }}</span>
                                           @endif
                                        </div>
                                    </div>
    							</div>
    						</div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="card card-blog">
    							{{-- 活動3 --}}
                                <div class="card-image">
            					    <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                        <div class="fileinput-new thumbnail img-no-padding" style="max-width: 370px; max-height: 250px;">
            							    @if($npo_info->code3)
                                            <img src='/img/project_code/{{ $npo_info->code3 }}' alt="{{ $npo_info->code3 }}">
                                            @else
                                            <img src="https://images.unsplash.com/photo-1486310662856-32058c639c65?dpr=2&auto=format&fit=crop&w=1500&h=1125&q=80&cs=tinysrgb&crop=" alt="default">
                                            @endif
                                        </div>
                                        <div class="fileinput-preview fileinput-exists thumbnail img-no-padding"></div>
                                        <div>
                                            <span class="btn btn-outline-default btn-round btn-file"><span class="fileinput-new">活動写真（右）</span><span class="fileinput-exists">Change</span><input type="file" name="code3"></span>
                                            <a href="#" class="btn btn-link btn-danger fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                        </div>
                                    </div>
                                </div>
    							<div class="card-body text-center">
    							    <label for="yellow_card_title-field">タイトル（右）</label>
                                    <h4 class="card-title">
                                        <div class="form-group @if($errors->has('yellow_card_title')) has-error @endif">
                                        <input type="text" id="yellow_card_title-field" name="yellow_card_title" class="form-control text-center" value="{{ is_null(old("yellow_card_title")) ? $npo_info->yellow_card_title : old("yellow_card_title") }}"/>
                                           @if($errors->has("yellow_card_title"))
                                            <span class="help-block icon-danger">{{ $errors->first("yellow_card_title") }}</span>
                                           @endif
                                        </div>
                                    </h4>
                                   <label for="yellow_card_body-field">詳細説明</label>
                                    <div class="card-description">
                                        <div class="form-group @if($errors->has('yellow_card_body')) has-error @endif">
                                        <textarea class="form-control" id="yellow_card_body-field" rows="10" name="yellow_card_body">{{ is_null(old("yellow_card_body")) ? $npo_info->yellow_card_body : old("yellow_card_body") }}</textarea>
                                           @if($errors->has("yellow_card_body"))
                                            <span class="help-block icon-danger">{{ $errors->first("yellow_card_body") }}</span>
                                           @endif
                                        </div>
                                    </div>
    							</div>
    						</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--     *********    TEAM     *********      --}}
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
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
                            <h4>【メンバー{{$i}}人目】</h4>
                            <label for="{{$member}}-field">名前(既に登録済みのユーザー名を記入してください。)</label>
                            <input type="text" id="{{$member}}-field" name="{{$member}}" class="form-control" value="{{ is_null(old("$member")) ? $npo_info->$member : old("$member") }}"/>
                           @if($errors->has($member))
                            <span class="help-block icon-danger">{{ $errors->first("$member") }}</span>
                           @endif
                        </div>
                        @endif
                        @if($npo_info->$member != "")
                           <div class="form-group @if($errors->has($member_pos)) has-error @endif">
                              <p for="{{$member_pos}}-field">メンバーの役割</p>
                              <input type="text" id="{{$member_pos}}-field" rows="3" name="{{$member_pos}}" class="form-control" value="{{ is_null(old($member_pos)) ? $npo_info->$member_pos : old($member_pos) }}"/>
                              @if($errors->has($member_pos))
                               <span class="help-block icon-danger">{{ $errors->first($member_pos) }}</span>
                              @endif
                           </div>
                           {{--
                           <div class="form-group @if($errors->has($member_detail)) has-error @endif">
                              <p for="{{$member_detail}}-field">メンバーの詳細</p>
                              <textarea class="form-control" id="{{$member_detail}}-field" rows="6" name="{{$member_detail}}">{{ is_null(old($member_detail)) ? $npo_info->$member_detail : old($member_detail) }}</textarea>
                              @if($errors->has($member_detail))
                                 <span class="help-block icon-danger">{{ $errors->first($member_detail) }}</span>
                              @endif
                           </div>
                           --}}
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
                                <span class="help-block icon-danger">{{ $errors->first("$member_twitter") }}</span>
                                @endif
                            </div>
                            @endif
                        @endif
                    @endfor
                    
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
                        <span class="help-block icon-danger">{{ $errors->first("proval") }}</span>
                        @endif
                    </div>
                   <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a class="btn btn-link pull-right" href="{{ route('npo_registers.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>
                </div>
            <br><br><br><br><br>
        </div>
    </div>
</div>
</form>
@endsection
@section('scripts')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/js/bootstrap-datepicker.min.js"></script>
  <script>
    $('.date-picker').datepicker({
    });
  </script>
@endsection
@include('layouts.footer')