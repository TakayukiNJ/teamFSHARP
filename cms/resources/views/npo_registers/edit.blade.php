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

                    <div class="form-group @if($errors->has('manager')) has-error @endif">
                       <label for="manager-field">Owner(サイト作成者)</label>
                    <input type="text" id="manager-field" name="manager" class="form-control" value="{{ is_null(old("manager")) ? $npo_info->manager : old("manager") }}" readonly="readonly"/>
                       @if($errors->has("manager"))
                        <span class="help-block">{{ $errors->first("manager") }}</span>
                       @endif
                    </div>

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
                       <label for="blue_card_title-field">ブルーカード（左）のタイトル</label>
                    <input type="text" id="blue_card_title-field" name="blue_card_title" class="form-control" value="{{ is_null(old("blue_card_title")) ? $npo_info->blue_card_title : old("blue_card_title") }}"/>
                       @if($errors->has("blue_card_title"))
                        <span class="help-block">{{ $errors->first("blue_card_title") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('blue_card_body')) has-error @endif">
                       <label for="blue_card_body-field">ブルーカード（右）の内容</label>
                    <textarea class="form-control" id="blue_card_body-field" rows="6" name="blue_card_body">{{ is_null(old("blue_card_body")) ? $npo_info->blue_card_body : old("blue_card_body") }}</textarea>
                       @if($errors->has("blue_card_body"))
                        <span class="help-block">{{ $errors->first("blue_card_body") }}</span>
                       @endif
                    </div>
                    <!-- グリーンカード -->
                    <div class="form-group @if($errors->has('green_card_title')) has-error @endif">
                       <label for="green_card_title-field">グリーンカード（中央）のタイトル</label>
                    <input type="text" id="green_card_title-field" name="green_card_title" class="form-control" value="{{ is_null(old("green_card_title")) ? $npo_info->green_card_title : old("green_card_title") }}"/>
                       @if($errors->has("green_card_title"))
                        <span class="help-block">{{ $errors->first("green_card_title") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('green_card_body')) has-error @endif">
                       <label for="green_card_body-field">グリーンカード（右）の内容</label>
                    <textarea class="form-control" id="green_card_body-field" rows="6" name="green_card_body">{{ is_null(old("green_card_body")) ? $npo_info->green_card_body : old("green_card_body") }}</textarea>
                       @if($errors->has("green_card_body"))
                        <span class="help-block">{{ $errors->first("green_card_body") }}</span>
                       @endif
                    </div>
                    <!-- イエローカード -->
                    <div class="form-group @if($errors->has('yellow_card_title')) has-error @endif">
                       <label for="yellow_card_title-field">イエローカード（右）のタイトル</label>
                    <input type="text" id="yellow_card_title-field" name="yellow_card_title" class="form-control" value="{{ is_null(old("yellow_card_title")) ? $npo_info->yellow_card_title : old("yellow_card_title") }}"/>
                       @if($errors->has("yellow_card_title"))
                        <span class="help-block">{{ $errors->first("yellow_card_title") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('yellow_card_body')) has-error @endif">
                       <label for="yellow_card_body-field">イエローカード（右）の内容</label>
                    <textarea class="form-control" id="yellow_card_body-field" rows="6" name="yellow_card_body">{{ is_null(old("yellow_card_body")) ? $npo_info->yellow_card_body : old("yellow_card_body") }}</textarea>
                       @if($errors->has("yellow_card_body"))
                        <span class="help-block">{{ $errors->first("yellow_card_body") }}</span>
                       @endif
                    </div>
                    
                    <h1><i class="glyphicon glyphicon-edit"></i>チームメンバー</h1>
                    <!-- 1人目 -->
                    <div class="form-group @if($errors->has('member1')) has-error @endif">
                       <label for="member1-field">メンバーの名前①</label>
                    <input type="text" id="member1-field" name="member1" class="form-control" value="{{ is_null(old("member1")) ? $npo_info->member1 : old("member1") }}"/>
                       @if($errors->has("member1"))
                        <span class="help-block">{{ $errors->first("member1") }}</span>
                       @endif
                    </div>
                    @if($npo_info->member1 != "")
                       <div class="form-group @if($errors->has('member1_pos')) has-error @endif">
                          <label for="member1_pos-field">①のメンバーの役割</label>
                       <input type="text" id="member1_pos-field" rows="3" name="member1_pos" class="form-control" value="{{ is_null(old("member1_pos")) ? $npo_info->member1_pos : old("member1_pos") }}"/>
                          @if($errors->has("member1_pos"))
                           <span class="help-block">{{ $errors->first("member1_pos") }}</span>
                          @endif
                       </div>
                       <div class="form-group @if($errors->has('member1_detail')) has-error @endif">
                          <label for="member1_detail-field">①のメンバーの詳細</label>
                       <input type="text" id="member1_detail-field" name="member1_detail" class="form-control" value="{{ is_null(old("member1_detail")) ? $npo_info->member1_detail : old("member1_detail") }}"/>
                          @if($errors->has("member1_detail"))
                           <span class="help-block">{{ $errors->first("member1_detail") }}</span>
                          @endif
                       </div>
                       <div class="form-group @if($errors->has('member1_twitter')) has-error @endif">
                          <label for="member1_twitter-field">①のメンバーのTwitter（twitter.com/〇〇〇〇〇〇〇〇〇/の〇の部分を記入）</label>
                       <input type="text" id="member1_twitter-field" name="member1_twitter" class="form-control" value="{{ is_null(old("member1_twitter")) ? $npo_info->member1_twitter : old("member1_twitter") }}"/>
                          @if($errors->has("member1_twitter"))
                           <span class="help-block">{{ $errors->first("member1_twitter") }}</span>
                          @endif
                       </div>
                       <div class="form-group @if($errors->has('member1_facebook')) has-error @endif">
                          <label for="member1_facebook-field">①のメンバーのFacebook（facebook.com/〇〇〇〇〇〇〇〇〇/の〇の部分を記入）</label>
                       <input type="text" id="member1_facebook-field" name="member1_facebook" class="form-control" value="{{ is_null(old("member1_facebook")) ? $npo_info->member1_facebook : old("member1_facebook") }}"/>
                          @if($errors->has("member1_facebook"))
                           <span class="help-block">{{ $errors->first("member1_facebook") }}</span>
                          @endif
                       </div>
                       <div class="form-group @if($errors->has('member1_linkedin')) has-error @endif">
                          <label for="member1_linkedin-field">①のメンバーのlinkedinのURL（linkedin.com/in/〇〇〇〇〇〇〇〇〇/の〇の部分を記入）</label>
                       <input type="text" id="member1_linkedin-field" name="member1_linkedin" class="form-control" value="{{ is_null(old("member1_linkedin")) ? $npo_info->member1_linkedin : old("member1_linkedin") }}"/>
                          @if($errors->has("member1_linkedin"))
                           <span class="help-block">{{ $errors->first("member1_linkedin") }}</span>
                          @endif
                       </div>
                    @endif
                    
                    <!-- 2人目 -->
                    <div class="form-group @if($errors->has('member2')) has-error @endif">
                       <label for="member2-field">メンバーの名前②</label>
                    <input type="text" id="member2-field" name="member2" class="form-control" value="{{ is_null(old("member2")) ? $npo_info->member2 : old("member2") }}"/>
                       @if($errors->has("member2"))
                        <span class="help-block">{{ $errors->first("member2") }}</span>
                       @endif
                    </div>
                    @if($npo_info->member2 != "")
                       <div class="form-group @if($errors->has('member2_pos')) has-error @endif">
                          <label for="member2_pos-field">②のメンバーの役割</label>
                       <input type="text" id="member2_pos-field" rows="3" name="member2_pos" class="form-control" value="{{ is_null(old("member2_pos")) ? $npo_info->member2_pos : old("member2_pos") }}"/>
                          @if($errors->has("member2_pos"))
                           <span class="help-block">{{ $errors->first("member2_pos") }}</span>
                          @endif
                       </div>
                       <div class="form-group @if($errors->has('member2_detail')) has-error @endif">
                          <label for="member2_detail-field">②のメンバーの詳細</label>
                       <input type="text" id="member2_detail-field" name="member2_detail" class="form-control" value="{{ is_null(old("member2_detail")) ? $npo_info->member2_detail : old("member2_detail") }}"/>
                          @if($errors->has("member2_detail"))
                           <span class="help-block">{{ $errors->first("member2_detail") }}</span>
                          @endif
                       </div>
                       <div class="form-group @if($errors->has('member2_twitter')) has-error @endif">
                          <label for="member2_twitter-field">②のメンバーのTwitter（twitter.com/〇〇〇〇〇〇〇〇〇/の〇の部分を記入</label>
                       <input type="text" id="member2_twitter-field" name="member2_twitter" class="form-control" value="{{ is_null(old("member2_twitter")) ? $npo_info->member2_twitter : old("member2_twitter") }}"/>
                          @if($errors->has("member2_twitter"))
                           <span class="help-block">{{ $errors->first("member2_twitter") }}</span>
                          @endif
                       </div>
                       <div class="form-group @if($errors->has('member2_facebook')) has-error @endif">
                          <label for="member2_facebook-field">②のメンバーのFacebook（facebook.com/〇〇〇〇〇〇〇〇〇/の〇の部分を記入）</label>
                       <input type="text" id="member2_facebook-field" name="member2_facebook" class="form-control" value="{{ is_null(old("member2_facebook")) ? $npo_info->member2_facebook : old("member2_facebook") }}"/>
                          @if($errors->has("member2_facebook"))
                           <span class="help-block">{{ $errors->first("member2_facebook") }}</span>
                          @endif
                       </div>
                       <div class="form-group @if($errors->has('member2_linkedin')) has-error @endif">
                          <label for="member2_linkedin-field">②のメンバーのlinkedinのURL（linkedin.com/in/〇〇〇〇〇〇〇〇〇/の〇の部分を記入）</label>
                       <input type="text" id="member2_linkedin-field" name="member2_linkedin" class="form-control" value="{{ is_null(old("member2_linkedin")) ? $npo_info->member2_linkedin : old("member2_linkedin") }}"/>
                          @if($errors->has("member2_linkedin"))
                           <span class="help-block">{{ $errors->first("member2_linkedin") }}</span>
                          @endif
                       </div>
                    @endif
                    
                    <!-- 3人目 -->
                    <div class="form-group @if($errors->has('member3')) has-error @endif">
                       <label for="member3-field">メンバーの名前③</label>
                    <input type="text" id="member3-field" name="member3" class="form-control" value="{{ is_null(old("member3")) ? $npo_info->member3 : old("member3") }}"/>
                       @if($errors->has("member3"))
                        <span class="help-block">{{ $errors->first("member3") }}</span>
                       @endif
                    </div>
                    @if($npo_info->member3 != "")
                       <div class="form-group @if($errors->has('member3_pos')) has-error @endif">
                          <label for="member3_pos-field">③のメンバーの役割</label>
                       <input type="text" id="member3_pos-field" rows="3" name="member3_pos" class="form-control" value="{{ is_null(old("member3_pos")) ? $npo_info->member3_pos : old("member3_pos") }}"/>
                          @if($errors->has("member3_pos"))
                           <span class="help-block">{{ $errors->first("member3_pos") }}</span>
                          @endif
                       </div>
                       <div class="form-group @if($errors->has('member3_detail')) has-error @endif">
                          <label for="member3_detail-field">③のメンバーの詳細</label>
                       <input type="text" id="member3_detail-field" name="member3_detail" class="form-control" value="{{ is_null(old("member3_detail")) ? $npo_info->member3_detail : old("member3_detail") }}"/>
                          @if($errors->has("member3_detail"))
                           <span class="help-block">{{ $errors->first("member3_detail") }}</span>
                          @endif
                       </div>
                       <div class="form-group @if($errors->has('member3_twitter')) has-error @endif">
                          <label for="member3_twitter-field">③のメンバーのTwitter（twitter.com/〇〇〇〇〇〇〇〇〇/の〇の部分を記入）</label>
                       <input type="text" id="member3_twitter-field" name="member3_twitter" class="form-control" value="{{ is_null(old("member3_twitter")) ? $npo_info->member3_twitter : old("member3_twitter") }}"/>
                          @if($errors->has("member3_twitter"))
                           <span class="help-block">{{ $errors->first("member3_twitter") }}</span>
                          @endif
                       </div>
                       <div class="form-group @if($errors->has('member3_facebook')) has-error @endif">
                          <label for="member3_facebook-field">③のメンバーのFacebook（facebook.com/〇〇〇〇〇〇〇〇〇/の〇の部分を記入）</label>
                       <input type="text" id="member3_facebook-field" name="member3_facebook" class="form-control" value="{{ is_null(old("member3_facebook")) ? $npo_info->member3_facebook : old("member3_facebook") }}"/>
                          @if($errors->has("member3_facebook"))
                           <span class="help-block">{{ $errors->first("member3_facebook") }}</span>
                          @endif
                       </div>
                       <div class="form-group @if($errors->has('member3_linkedin')) has-error @endif">
                          <label for="member3_linkedin-field">③のメンバーのlinkedinのURL（linkedin.com/in/〇〇〇〇〇〇〇〇〇/の〇の部分を記入）</label>
                       <input type="text" id="member3_linkedin-field" name="member3_linkedin" class="form-control" value="{{ is_null(old("member3_linkedin")) ? $npo_info->member3_linkedin : old("member3_linkedin") }}"/>
                          @if($errors->has("member3_linkedin"))
                           <span class="help-block">{{ $errors->first("member3_linkedin") }}</span>
                          @endif
                       </div>
                    @endif
                    
                    <!-- 4人目 -->
                    <div class="form-group @if($errors->has('member4')) has-error @endif">
                       <label for="member4-field">メンバーの名前④</label>
                    <input type="text" id="member4-field" name="member4" class="form-control" value="{{ is_null(old("member4")) ? $npo_info->member4 : old("member4") }}"/>
                       @if($errors->has("member4"))
                        <span class="help-block">{{ $errors->first("member4") }}</span>
                       @endif
                    </div>
                    @if($npo_info->member4 != "")
                      <div class="form-group @if($errors->has('member4_pos')) has-error @endif">
                         <label for="member4_pos-field">④のメンバーの役割</label>
                      <input type="text" id="member4_pos-field" rows="3" name="member4_pos" class="form-control" value="{{ is_null(old("member4_pos")) ? $npo_info->member4_pos : old("member4_pos") }}"/>
                         @if($errors->has("member4_pos"))
                          <span class="help-block">{{ $errors->first("member4_pos") }}</span>
                         @endif
                      </div>
                      <div class="form-group @if($errors->has('member4_detail')) has-error @endif">
                         <label for="member4_detail-field">④のメンバーの詳細</label>
                      <input type="text" id="member4_detail-field" name="member4_detail" class="form-control" value="{{ is_null(old("member4_detail")) ? $npo_info->member4_detail : old("member4_detail") }}"/>
                         @if($errors->has("member4_detail"))
                          <span class="help-block">{{ $errors->first("member4_detail") }}</span>
                         @endif
                      </div>
                      <div class="form-group @if($errors->has('member4_twitter')) has-error @endif">
                         <label for="member4_twitter-field">④のメンバーのTwitter（twitter.com/〇〇〇〇〇〇〇〇〇/の〇の部分を記入）</label>
                      <input type="text" id="member4_twitter-field" name="member4_twitter" class="form-control" value="{{ is_null(old("member4_twitter")) ? $npo_info->member4_twitter : old("member4_twitter") }}"/>
                         @if($errors->has("member4_twitter"))
                          <span class="help-block">{{ $errors->first("member4_twitter") }}</span>
                         @endif
                      </div>
                      <div class="form-group @if($errors->has('member4_facebook')) has-error @endif">
                         <label for="member4_facebook-field">④のメンバーのFacebook（facebook.com/〇〇〇〇〇〇〇〇〇/の〇の部分を記入）</label>
                      <input type="text" id="member4_facebook-field" name="member4_facebook" class="form-control" value="{{ is_null(old("member4_facebook")) ? $npo_info->member4_facebook : old("member4_facebook") }}"/>
                         @if($errors->has("member4_facebook"))
                          <span class="help-block">{{ $errors->first("member4_facebook") }}</span>
                         @endif
                      </div>
                      <div class="form-group @if($errors->has('member4_linkedin')) has-error @endif">
                         <label for="member4_linkedin-field">④のメンバーのlinkedinのURL（linkedin.com/in/〇〇〇〇〇〇〇〇〇/の〇の部分を記入）</label>
                      <input type="text" id="member4_linkedin-field" name="member4_linkedin" class="form-control" value="{{ is_null(old("member4_linkedin")) ? $npo_info->member4_linkedin : old("member4_linkedin") }}"/>
                         @if($errors->has("member4_linkedin"))
                          <span class="help-block">{{ $errors->first("member4_linkedin") }}</span>
                         @endif
                      </div>
                    @endif
                    
                    <!-- 5人目 -->
                    <div class="form-group @if($errors->has('member5')) has-error @endif">
                       <label for="member5-field">メンバーの名前⑤</label>
                    <input type="text" id="member5-field" name="member5" class="form-control" value="{{ is_null(old("member5")) ? $npo_info->member5 : old("member5") }}"/>
                       @if($errors->has("member5"))
                        <span class="help-block">{{ $errors->first("member5") }}</span>
                       @endif
                    </div>
                    @if($npo_info->member5 != "")
                      <div class="form-group @if($errors->has('member5_pos')) has-error @endif">
                         <label for="member5_pos-field">⑤のメンバーの役割</label>
                      <input type="text" id="member5_pos-field" rows="3" name="member5_pos" class="form-control" value="{{ is_null(old("member5_pos")) ? $npo_info->member5_pos : old("member5_pos") }}"/>
                         @if($errors->has("member5_pos"))
                          <span class="help-block">{{ $errors->first("member5_pos") }}</span>
                         @endif
                      </div>
                      <div class="form-group @if($errors->has('member5_detail')) has-error @endif">
                         <label for="member5_detail-field">⑤のメンバーの詳細</label>
                      <input type="text" id="member5_detail-field" name="member5_detail" class="form-control" value="{{ is_null(old("member5_detail")) ? $npo_info->member5_detail : old("member5_detail") }}"/>
                         @if($errors->has("member5_detail"))
                          <span class="help-block">{{ $errors->first("member5_detail") }}</span>
                         @endif
                      </div>
                      <div class="form-group @if($errors->has('member5_twitter')) has-error @endif">
                         <label for="member5_twitter-field">⑤のメンバーのTwitter（twitter.com/〇〇〇〇〇〇〇〇〇/の〇の部分を記入）</label>
                      <input type="text" id="member5_twitter-field" name="member5_twitter" class="form-control" value="{{ is_null(old("member5_twitter")) ? $npo_info->member5_twitter : old("member5_twitter") }}"/>
                         @if($errors->has("member5_twitter"))
                          <span class="help-block">{{ $errors->first("member5_twitter") }}</span>
                         @endif
                      </div>
                      <div class="form-group @if($errors->has('member5_facebook')) has-error @endif">
                         <label for="member5_facebook-field">⑤のメンバーのFacebook（facebook.com/〇〇〇〇〇〇〇〇〇/の〇の部分を記入）</label>
                      <input type="text" id="member5_facebook-field" name="member5_facebook" class="form-control" value="{{ is_null(old("member5_facebook")) ? $npo_info->member5_facebook : old("member5_facebook") }}"/>
                         @if($errors->has("member5_facebook"))
                          <span class="help-block">{{ $errors->first("member5_facebook") }}</span>
                         @endif
                      </div>
                      <div class="form-group @if($errors->has('member5_linkedin')) has-error @endif">
                         <label for="member5_linkedin-field">⑤のメンバーのlinkedinのURL（linkedin.com/in/〇〇〇〇〇〇〇〇〇/の〇の部分を記入）</label>
                      <input type="text" id="member5_linkedin-field" name="member5_linkedin" class="form-control" value="{{ is_null(old("member5_linkedin")) ? $npo_info->member5_linkedin : old("member5_linkedin") }}"/>
                         @if($errors->has("member5_linkedin"))
                          <span class="help-block">{{ $errors->first("member5_linkedin") }}</span>
                         @endif
                      </div>
                    @endif
                    
                    
                    <!-- 6人目 -->
                    <div class="form-group @if($errors->has('member6')) has-error @endif">
                       <label for="member6-field">メンバーの名前⑥</label>
                    <input type="text" id="member6-field" name="member6" class="form-control" value="{{ is_null(old("member6")) ? $npo_info->member6 : old("member6") }}"/>
                       @if($errors->has("member6"))
                        <span class="help-block">{{ $errors->first("member6") }}</span>
                       @endif
                    </div>
                    @if($npo_info->member6 != "")
                      <div class="form-group @if($errors->has('member6_pos')) has-error @endif">
                         <label for="member6_pos-field">⑥のメンバーの役割</label>
                      <input type="text" id="member6_pos-field" rows="3" name="member6_pos" class="form-control" value="{{ is_null(old("member6_pos")) ? $npo_info->member6_pos : old("member6_pos") }}"/>
                         @if($errors->has("member6_pos"))
                          <span class="help-block">{{ $errors->first("member6_pos") }}</span>
                         @endif
                      </div>
                      <div class="form-group @if($errors->has('member6_detail')) has-error @endif">
                         <label for="member6_detail-field">⑥のメンバーの詳細</label>
                      <input type="text" id="member6_detail-field" name="member6_detail" class="form-control" value="{{ is_null(old("member6_detail")) ? $npo_info->member6_detail : old("member6_detail") }}"/>
                         @if($errors->has("member6_detail"))
                          <span class="help-block">{{ $errors->first("member6_detail") }}</span>
                         @endif
                      </div>
                      <div class="form-group @if($errors->has('member6_twitter')) has-error @endif">
                         <label for="member6_twitter-field">⑥のメンバーのTwitter（twitter.com/〇〇〇〇〇〇〇〇〇/の〇の部分を記入）</label>
                      <input type="text" id="member6_twitter-field" name="member6_twitter" class="form-control" value="{{ is_null(old("member6_twitter")) ? $npo_info->member6_twitter : old("member6_twitter") }}"/>
                         @if($errors->has("member6_twitter"))
                          <span class="help-block">{{ $errors->first("member6_twitter") }}</span>
                         @endif
                      </div>
                      <div class="form-group @if($errors->has('member6_facebook')) has-error @endif">
                         <label for="member6_facebook-field">⑥のメンバーのFacebook（facebook.com/〇〇〇〇〇〇〇〇〇/の〇の部分を記入）</label>
                      <input type="text" id="member6_facebook-field" name="member6_facebook" class="form-control" value="{{ is_null(old("member6_facebook")) ? $npo_info->member6_facebook : old("member6_facebook") }}"/>
                         @if($errors->has("member6_facebook"))
                          <span class="help-block">{{ $errors->first("member6_facebook") }}</span>
                         @endif
                      </div>
                      <div class="form-group @if($errors->has('member6_linkedin')) has-error @endif">
                         <label for="member6_linkedin-field">⑥のメンバーのlinkedinのURL（linkedin.com/in/〇〇〇〇〇〇〇〇〇/の〇の部分を記入）</label>
                      <input type="text" id="member6_linkedin-field" name="member6_linkedin" class="form-control" value="{{ is_null(old("member6_linkedin")) ? $npo_info->member6_linkedin : old("member6_linkedin") }}"/>
                         @if($errors->has("member6_linkedin"))
                          <span class="help-block">{{ $errors->first("member6_linkedin") }}</span>
                         @endif
                      </div>
                    @endif
                    
                    <!-- 7人目 -->
                    <div class="form-group @if($errors->has('member7')) has-error @endif">
                       <label for="member7-field">メンバーの名前⑦</label>
                    <input type="text" id="member7-field" name="member7" class="form-control" value="{{ is_null(old("member7")) ? $npo_info->member7 : old("member7") }}"/>
                       @if($errors->has("member7"))
                        <span class="help-block">{{ $errors->first("member7") }}</span>
                       @endif
                    </div>
                    @if($npo_info->member7 != "")
                      <div class="form-group @if($errors->has('member7_pos')) has-error @endif">
                         <label for="member7_pos-field">⑦のメンバーの役割</label>
                      <input type="text" id="member7_pos-field" rows="3" name="member7_pos" class="form-control" value="{{ is_null(old("member7_pos")) ? $npo_info->member7_pos : old("member7_pos") }}"/>
                         @if($errors->has("member7_pos"))
                          <span class="help-block">{{ $errors->first("member7_pos") }}</span>
                         @endif
                      </div>
                      <div class="form-group @if($errors->has('member7_detail')) has-error @endif">
                         <label for="member7_detail-field">⑦のメンバーの詳細</label>
                      <input type="text" id="member7_detail-field" name="member7_detail" class="form-control" value="{{ is_null(old("member7_detail")) ? $npo_info->member7_detail : old("member7_detail") }}"/>
                         @if($errors->has("member7_detail"))
                          <span class="help-block">{{ $errors->first("member7_detail") }}</span>
                         @endif
                      </div>
                      <div class="form-group @if($errors->has('member7_twitter')) has-error @endif">
                         <label for="member7_twitter-field">⑦のメンバーのTwitter（twitter.com/〇〇〇〇〇〇〇〇〇/の〇の部分を記入）</label>
                      <input type="text" id="member7_twitter-field" name="member7_twitter" class="form-control" value="{{ is_null(old("member7_twitter")) ? $npo_info->member7_twitter : old("member7_twitter") }}"/>
                         @if($errors->has("member7_twitter"))
                          <span class="help-block">{{ $errors->first("member7_twitter") }}</span>
                         @endif
                      </div>
                      <div class="form-group @if($errors->has('member7_facebook')) has-error @endif">
                         <label for="member7_facebook-field">⑦のメンバーのFacebook（facebook.com/〇〇〇〇〇〇〇〇〇/の〇の部分を記入）</label>
                      <input type="text" id="member7_facebook-field" name="member7_facebook" class="form-control" value="{{ is_null(old("member7_facebook")) ? $npo_info->member7_facebook : old("member7_facebook") }}"/>
                         @if($errors->has("member7_facebook"))
                          <span class="help-block">{{ $errors->first("member7_facebook") }}</span>
                         @endif
                      </div>
                      <div class="form-group @if($errors->has('member7_linkedin')) has-error @endif">
                         <label for="member7_linkedin-field">⑦のメンバーのlinkedinのURL（linkedin.com/in/〇〇〇〇〇〇〇〇〇/の〇の部分を記入）</label>
                      <input type="text" id="member7_linkedin-field" name="member7_linkedin" class="form-control" value="{{ is_null(old("member7_linkedin")) ? $npo_info->member7_linkedin : old("member7_linkedin") }}"/>
                         @if($errors->has("member7_linkedin"))
                          <span class="help-block">{{ $errors->first("member7_linkedin") }}</span>
                         @endif
                      </div>
                    @endif
                    
                    <!-- 8人目 -->
                    <div class="form-group @if($errors->has('member8')) has-error @endif">
                       <label for="member8-field">メンバーの名前⑧</label>
                    <input type="text" id="member8-field" name="member8" class="form-control" value="{{ is_null(old("member8")) ? $npo_info->member8 : old("member8") }}"/>
                       @if($errors->has("member8"))
                        <span class="help-block">{{ $errors->first("member8") }}</span>
                       @endif
                    </div>
                    @if($npo_info->member8 != "")
                      <div class="form-group @if($errors->has('member8_pos')) has-error @endif">
                         <label for="member8_pos-field">⑧のメンバーの役割</label>
                      <input type="text" id="member8_pos-field" rows="3" name="member8_pos" class="form-control" value="{{ is_null(old("member8_pos")) ? $npo_info->member8_pos : old("member8_pos") }}"/>
                         @if($errors->has("member8_pos"))
                          <span class="help-block">{{ $errors->first("member8_pos") }}</span>
                         @endif
                      </div>
                      <div class="form-group @if($errors->has('member8_detail')) has-error @endif">
                         <label for="member8_detail-field">⑧のメンバーの詳細</label>
                      <input type="text" id="member8_detail-field" name="member8_detail" class="form-control" value="{{ is_null(old("member8_detail")) ? $npo_info->member8_detail : old("member8_detail") }}"/>
                         @if($errors->has("member8_detail"))
                          <span class="help-block">{{ $errors->first("member8_detail") }}</span>
                         @endif
                      </div>
                      <div class="form-group @if($errors->has('member8_twitter')) has-error @endif">
                         <label for="member8_twitter-field">⑧のメンバーのTwitter（twitter.com/〇〇〇〇〇〇〇〇〇/の〇の部分を記入）</label>
                      <input type="text" id="member8_twitter-field" name="member8_twitter" class="form-control" value="{{ is_null(old("member8_twitter")) ? $npo_info->member8_twitter : old("member8_twitter") }}"/>
                         @if($errors->has("member8_twitter"))
                          <span class="help-block">{{ $errors->first("member8_twitter") }}</span>
                         @endif
                      </div>
                      <div class="form-group @if($errors->has('member8_facebook')) has-error @endif">
                         <label for="member8_facebook-field">⑧のメンバーのFacebook（facebook.com/〇〇〇〇〇〇〇〇〇/の〇の部分を記入）</label>
                      <input type="text" id="member8_facebook-field" name="member8_facebook" class="form-control" value="{{ is_null(old("member8_facebook")) ? $npo_info->member8_facebook : old("member8_facebook") }}"/>
                         @if($errors->has("member8_facebook"))
                          <span class="help-block">{{ $errors->first("member8_facebook") }}</span>
                         @endif
                      </div>
                      <div class="form-group @if($errors->has('member8_linkedin')) has-error @endif">
                         <label for="member8_linkedin-field">⑧のメンバーのlinkedinのURL（linkedin.com/in/〇〇〇〇〇〇〇〇〇/の〇の部分を記入）</label>
                      <input type="text" id="member8_linkedin-field" name="member8_linkedin" class="form-control" value="{{ is_null(old("member8_linkedin")) ? $npo_info->member8_linkedin : old("member8_linkedin") }}"/>
                         @if($errors->has("member8_linkedin"))
                          <span class="help-block">{{ $errors->first("member8_linkedin") }}</span>
                         @endif
                      </div>
                    @endif
                    
                    <!-- 9人目 -->
                    <div class="form-group @if($errors->has('member9')) has-error @endif">
                       <label for="member9-field">メンバーの名前⑨</label>
                    <input type="text" id="member9-field" name="member9" class="form-control" value="{{ is_null(old("member9")) ? $npo_info->member9 : old("member9") }}"/>
                       @if($errors->has("member9"))
                        <span class="help-block">{{ $errors->first("member9") }}</span>
                       @endif
                    </div>
                    @if($npo_info->member9 != "")
                      <div class="form-group @if($errors->has('member9_pos')) has-error @endif">
                         <label for="member9_pos-field">⑨のメンバーの役割</label>
                      <input type="text" id="member9_pos-field" rows="3" name="member9_pos" class="form-control" value="{{ is_null(old("member9_pos")) ? $npo_info->member9_pos : old("member9_pos") }}"/>
                         @if($errors->has("member9_pos"))
                          <span class="help-block">{{ $errors->first("member9_pos") }}</span>
                         @endif
                      </div>
                      <div class="form-group @if($errors->has('member9_detail')) has-error @endif">
                         <label for="member9_detail-field">⑨のメンバーの詳細</label>
                      <input type="text" id="member9_detail-field" name="member9_detail" class="form-control" value="{{ is_null(old("member9_detail")) ? $npo_info->member9_detail : old("member9_detail") }}"/>
                         @if($errors->has("member9_detail"))
                          <span class="help-block">{{ $errors->first("member9_detail") }}</span>
                         @endif
                      </div>
                      <div class="form-group @if($errors->has('member9_twitter')) has-error @endif">
                         <label for="member9_twitter-field">⑨のメンバーのTwitter（twitter.com/〇〇〇〇〇〇〇〇〇/の〇の部分を記入）</label>
                      <input type="text" id="member9_twitter-field" name="member9_twitter" class="form-control" value="{{ is_null(old("member9_twitter")) ? $npo_info->member9_twitter : old("member9_twitter") }}"/>
                         @if($errors->has("member9_twitter"))
                          <span class="help-block">{{ $errors->first("member9_twitter") }}</span>
                         @endif
                      </div>
                      <div class="form-group @if($errors->has('member9_facebook')) has-error @endif">
                         <label for="member9_facebook-field">⑨のメンバーのFacebook（facebook.com/〇〇〇〇〇〇〇〇〇/の〇の部分を記入）</label>
                      <input type="text" id="member9_facebook-field" name="member9_facebook" class="form-control" value="{{ is_null(old("member9_facebook")) ? $npo_info->member9_facebook : old("member9_facebook") }}"/>
                         @if($errors->has("member9_facebook"))
                          <span class="help-block">{{ $errors->first("member9_facebook") }}</span>
                         @endif
                      </div>
                      <div class="form-group @if($errors->has('member9_linkedin')) has-error @endif">
                         <label for="member9_linkedin-field">⑨のメンバーのlinkedinのURL（linkedin.com/in/〇〇〇〇〇〇〇〇〇/の〇の部分を記入）</label>
                      <input type="text" id="member9_linkedin-field" name="member9_linkedin" class="form-control" value="{{ is_null(old("member9_linkedin")) ? $npo_info->member9_linkedin : old("member9_linkedin") }}"/>
                         @if($errors->has("member9_linkedin"))
                          <span class="help-block">{{ $errors->first("member9_linkedin") }}</span>
                         @endif
                      </div>
                    @endif
                    
                    <!-- 10人目 -->
                    <div class="form-group @if($errors->has('member10')) has-error @endif">
                       <label for="member10-field">メンバーの名前⑩</label>
                    <input type="text" id="member10-field" name="member10" class="form-control" value="{{ is_null(old("member10")) ? $npo_info->member10 : old("member10") }}"/>
                       @if($errors->has("member10"))
                        <span class="help-block">{{ $errors->first("member10") }}</span>
                       @endif
                    </div>
                    @if($npo_info->member10) != "")
                      <div class="form-group @if($errors->has('member10_pos')) has-error @endif">
                         <label for="member10_pos-field">⑩のメンバーの役割</label>
                      <input type="text" id="member10_pos-field" rows="3" name="member10_pos" class="form-control" value="{{ is_null(old("member10_pos")) ? $npo_info->member10_pos : old("member10_pos") }}"/>
                         @if($errors->has("member10_pos"))
                          <span class="help-block">{{ $errors->first("member10_pos") }}</span>
                         @endif
                      </div>
                      <div class="form-group @if($errors->has('member10_detail')) has-error @endif">
                         <label for="member10_detail-field">⑩のメンバーの詳細</label>
                      <input type="text" id="member10_detail-field" name="member10_detail" class="form-control" value="{{ is_null(old("member10_detail")) ? $npo_info->member10_detail : old("member10_detail") }}"/>
                         @if($errors->has("member10_detail"))
                          <span class="help-block">{{ $errors->first("member10_detail") }}</span>
                         @endif
                      </div>
                      <div class="form-group @if($errors->has('member10_twitter')) has-error @endif">
                         <label for="member10_twitter-field">⑩のメンバーのTwitter（twitter.com/〇〇〇〇〇〇〇〇〇/の〇の部分を記入）</label>
                      <input type="text" id="member10_twitter-field" name="member10_twitter" class="form-control" value="{{ is_null(old("member10_twitter")) ? $npo_info->member10_twitter : old("member10_twitter") }}"/>
                         @if($errors->has("member10_twitter"))
                          <span class="help-block">{{ $errors->first("member10_twitter") }}</span>
                         @endif
                      </div>
                      <div class="form-group @if($errors->has('member10_facebook')) has-error @endif">
                         <label for="member10_facebook-field">⑩のメンバーのFacebook（facebook.com/〇〇〇〇〇〇〇〇〇/の〇の部分を記入）</label>
                      <input type="text" id="member10_facebook-field" name="member10_facebook" class="form-control" value="{{ is_null(old("member10_facebook")) ? $npo_info->member10_facebook : old("member10_facebook") }}"/>
                         @if($errors->has("member10_facebook"))
                          <span class="help-block">{{ $errors->first("member10_facebook") }}</span>
                         @endif
                      </div>
                      <div class="form-group @if($errors->has('member10_linkedin')) has-error @endif">
                         <label for="member10_linkedin-field">⑩のメンバーのlinkedinのURL（linkedin.com/in/〇〇〇〇〇〇〇〇〇/の〇の部分を記入）</label>
                      <input type="text" id="member10_linkedin-field" name="member10_linkedin" class="form-control" value="{{ is_null(old("member10_linkedin")) ? $npo_info->member10_linkedin : old("member10_linkedin") }}"/>
                         @if($errors->has("member10_linkedin"))
                          <span class="help-block">{{ $errors->first("member10_linkedin") }}</span>
                         @endif
                      </div>
                    @endif
                    
                    <h1><i class="glyphicon glyphicon-edit"></i>スポンサー設定</h1>
                    <!-- 目的 -->
                    <div class="form-group @if($errors->has('support_purpose')) has-error @endif">
                       <label for="support_purpose-field">資金の使い道</label>
                    <input type="text" id="support_purpose-field" name="support_purpose" class="form-control" value="{{ is_null(old("support_purpose")) ? $npo_info->support_purpose : old("support_purpose") }}"/>
                       @if($errors->has("support_purpose"))
                        <span class="help-block">{{ $errors->first("support_purpose") }}</span>
                       @endif
                    </div>
                    <!-- リターン -->
                    <div class="form-group @if($errors->has('support_contents')) has-error @endif">
                       <label for="support_contents-field">スポンサーへの特典(リターン)</label>
                    <input type="text" id="support_contents-field" name="support_contents" class="form-control" value="{{ is_null(old("support_contents")) ? $npo_info->support_contents : old("support_contents") }}"/>
                       @if($errors->has("support_contents"))
                        <span class="help-block">{{ $errors->first("support_contents") }}</span>
                       @endif
                    </div>
                    <!-- 特典利用期限 -->
                    <div class="form-group @if($errors->has('support_contents_detail')) has-error @endif">
                       <label for="support_contents_detail-field">特典利用期限</label>
                    <input type="date" id="support_contents_detail-field" name="support_contents_detail" class="form-control" value="{{ is_null(old("support_contents_detail")) ? $npo_info->support_contents_detail : old("support_contents_detail") }}"/>
                       @if($errors->has("support_contents_detail"))
                        <span class="help-block">{{ $errors->first("support_contents_detail") }}</span>
                       @endif
                    </div>
                    <!-- 特典利用期限 -->
                    <div class="form-group @if($errors->has('support_amount')) has-error @endif">
                       <label for="support_amount-field">値段（例:3000）※審査期間一週間</label>
                    <input type="text" id="support_amount-field" name="support_amount" class="form-control" value="{{ is_null(old("support_amount")) ? $npo_info->support_amount : old("support_amount") }}"/>
                       @if($errors->has("support_amount"))
                        <span class="help-block">{{ $errors->first("support_amount") }}</span>
                       @endif
                    </div>
                    <!-- 目標金額 -->
                    <div class="form-group @if($errors->has('support_price')) has-error @endif">
                       <label for="support_price-field">目標金額</label>
                    <input type="text" id="support_price-field" name="support_price" class="form-control" value="{{ is_null(old("support_price")) ? $npo_info->support_price : old("support_price") }}"/>
                       @if($errors->has("support_price"))
                        <span class="help-block">{{ $errors->first("support_price") }}</span>
                       @endif
                    </div>
                    <!-- 公開非公開 -->
                    <div class="form-group @if($errors->has('proval')) has-error @endif">
                       <label for="proval-field">公開設定</label>
                    <input type="text" id="proval-field" name="proval" class="form-control" value="{{ is_null(old("proval")) ? $npo_info->proval : old("proval") }}"/>
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
