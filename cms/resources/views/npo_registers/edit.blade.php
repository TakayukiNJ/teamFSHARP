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
                       <label for="manager-field">Owner(NPOサイト作成者)</label>
                    <input type="text" id="manager-field" name="manager" class="form-control" value="{{ is_null(old("manager")) ? $npo_info->manager : old("manager") }}" readonly="readonly"/>
                       @if($errors->has("manager"))
                        <span class="help-block">{{ $errors->first("manager") }}</span>
                       @endif
                    </div>

                    <div class="form-group @if($errors->has('title')) has-error @endif">
                       <label for="title-field">Title(タイトル)</label>
                    <input type="text" id="title-field" name="title" class="form-control" value="{{ is_null(old("title")) ? $npo_info->title : old("title") }}"/>
                       @if($errors->has("title"))
                        <span class="help-block">{{ $errors->first("title") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('subtitle')) has-error @endif">
                       <label for="subtitle-field">Subtitle(小見出し)</label>
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
                       <label for="blue_card_body-field">イエローカード（右）の内容</label>
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
                       <label for="green_card_body-field">イエローカード（右）の内容</label>
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
                    <div class="form-group @if($errors->has('member1_pos')) has-error @endif">
                       <label for="member1_pos-field">①のメンバーの役割</label>
                    <input type="text" id="member1_pos-field" name="member1_pos" class="form-control" value="{{ is_null(old("member1_pos")) ? $npo_info->member1_pos : old("member1_pos") }}"/>
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
                    <div class="form-group @if($errors->has('member1_insta')) has-error @endif">
                       <label for="member1_insta-field">①のメンバーのインスタ（instagram.com/〇〇〇〇〇〇〇〇〇/の〇の部分を記入）</label>
                    <input type="text" id="member1_insta-field" name="member1_insta" class="form-control" value="{{ is_null(old("member1_insta")) ? $npo_info->member1_insta : old("member1_insta") }}"/>
                       @if($errors->has("member1_insta"))
                        <span class="help-block">{{ $errors->first("member1_insta") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('member1_youtube')) has-error @endif">
                       <label for="member1_youtube-field">①のメンバーのYouTubeのURL</label>
                    <input type="text" id="member1_youtube-field" name="member1_youtube" class="form-control" value="{{ is_null(old("member1_youtube")) ? $npo_info->member1_youtube : old("member1_youtube") }}"/>
                       @if($errors->has("member1_youtube"))
                        <span class="help-block">{{ $errors->first("member1_youtube") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('member1_linkedin')) has-error @endif">
                       <label for="member1_linkedin-field">①のメンバーのlinkedinのURL</label>
                    <input type="text" id="member1_linkedin-field" name="member1_linkedin" class="form-control" value="{{ is_null(old("member1_linkedin")) ? $npo_info->member1_linkedin : old("member1_linkedin") }}"/>
                       @if($errors->has("member1_linkedin"))
                        <span class="help-block">{{ $errors->first("member1_linkedin") }}</span>
                       @endif
                    </div>
                    <!-- 2人目 -->
                    <div class="form-group @if($errors->has('member2')) has-error @endif">
                       <label for="member2-field">メンバーの名前①</label>
                    <input type="text" id="member2-field" name="member2" class="form-control" value="{{ is_null(old("member2")) ? $npo_info->member2 : old("member2") }}"/>
                       @if($errors->has("member2"))
                        <span class="help-block">{{ $errors->first("member2") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('member2_pos')) has-error @endif">
                       <label for="member2_pos-field">①のメンバーの役割</label>
                    <input type="text" id="member2_pos-field" name="member2_pos" class="form-control" value="{{ is_null(old("member2_pos")) ? $npo_info->member2_pos : old("member2_pos") }}"/>
                       @if($errors->has("member2_pos"))
                        <span class="help-block">{{ $errors->first("member2_pos") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('member2_detail')) has-error @endif">
                       <label for="member2_detail-field">①のメンバーの詳細</label>
                    <input type="text" id="member2_detail-field" name="member2_detail" class="form-control" value="{{ is_null(old("member2_detail")) ? $npo_info->member2_detail : old("member2_detail") }}"/>
                       @if($errors->has("member2_detail"))
                        <span class="help-block">{{ $errors->first("member2_detail") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('member2_twitter')) has-error @endif">
                       <label for="member2_twitter-field">①のメンバーのTwitter（twitter.com/〇〇〇〇〇〇〇〇〇/の〇の部分を記入）</label>
                    <input type="text" id="member2_twitter-field" name="member2_twitter" class="form-control" value="{{ is_null(old("member2_twitter")) ? $npo_info->member2_twitter : old("member2_twitter") }}"/>
                       @if($errors->has("member2_twitter"))
                        <span class="help-block">{{ $errors->first("member2_twitter") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('member2_facebook')) has-error @endif">
                       <label for="member2_facebook-field">①のメンバーのFacebook（facebook.com/〇〇〇〇〇〇〇〇〇/の〇の部分を記入）</label>
                    <input type="text" id="member2_facebook-field" name="member2_facebook" class="form-control" value="{{ is_null(old("member2_facebook")) ? $npo_info->member2_facebook : old("member2_facebook") }}"/>
                       @if($errors->has("member2_facebook"))
                        <span class="help-block">{{ $errors->first("member2_facebook") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('member2_insta')) has-error @endif">
                       <label for="member2_insta-field">①のメンバーのインスタ（instagram.com/〇〇〇〇〇〇〇〇〇/の〇の部分を記入）</label>
                    <input type="text" id="member2_insta-field" name="member2_insta" class="form-control" value="{{ is_null(old("member2_insta")) ? $npo_info->member2_insta : old("member2_insta") }}"/>
                       @if($errors->has("member2_insta"))
                        <span class="help-block">{{ $errors->first("member2_insta") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('member2_youtube')) has-error @endif">
                       <label for="member2_youtube-field">①のメンバーのYouTubeのURL</label>
                    <input type="text" id="member2_youtube-field" name="member2_youtube" class="form-control" value="{{ is_null(old("member2_youtube")) ? $npo_info->member2_youtube : old("member2_youtube") }}"/>
                       @if($errors->has("member2_youtube"))
                        <span class="help-block">{{ $errors->first("member2_youtube") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('member2_linkedin')) has-error @endif">
                       <label for="member2_linkedin-field">①のメンバーのlinkedinのURL</label>
                    <input type="text" id="member2_linkedin-field" name="member2_linkedin" class="form-control" value="{{ is_null(old("member2_linkedin")) ? $npo_info->member2_linkedin : old("member2_linkedin") }}"/>
                       @if($errors->has("member2_linkedin"))
                        <span class="help-block">{{ $errors->first("member2_linkedin") }}</span>
                       @endif
                    </div>
                    <!-- 3人目 -->
                    <div class="form-group @if($errors->has('member3')) has-error @endif">
                       <label for="member3-field">メンバーの名前①</label>
                    <input type="text" id="member3-field" name="member3" class="form-control" value="{{ is_null(old("member3")) ? $npo_info->member3 : old("member3") }}"/>
                       @if($errors->has("member3"))
                        <span class="help-block">{{ $errors->first("member3") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('member3_pos')) has-error @endif">
                       <label for="member3_pos-field">①のメンバーの役割</label>
                    <input type="text" id="member3_pos-field" name="member3_pos" class="form-control" value="{{ is_null(old("member3_pos")) ? $npo_info->member3_pos : old("member3_pos") }}"/>
                       @if($errors->has("member3_pos"))
                        <span class="help-block">{{ $errors->first("member3_pos") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('member3_detail')) has-error @endif">
                       <label for="member3_detail-field">①のメンバーの詳細</label>
                    <input type="text" id="member3_detail-field" name="member3_detail" class="form-control" value="{{ is_null(old("member3_detail")) ? $npo_info->member3_detail : old("member3_detail") }}"/>
                       @if($errors->has("member3_detail"))
                        <span class="help-block">{{ $errors->first("member3_detail") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('member3_twitter')) has-error @endif">
                       <label for="member3_twitter-field">①のメンバーのTwitter（twitter.com/〇〇〇〇〇〇〇〇〇/の〇の部分を記入）</label>
                    <input type="text" id="member3_twitter-field" name="member3_twitter" class="form-control" value="{{ is_null(old("member3_twitter")) ? $npo_info->member3_twitter : old("member3_twitter") }}"/>
                       @if($errors->has("member3_twitter"))
                        <span class="help-block">{{ $errors->first("member3_twitter") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('member3_facebook')) has-error @endif">
                       <label for="member3_facebook-field">①のメンバーのFacebook（facebook.com/〇〇〇〇〇〇〇〇〇/の〇の部分を記入）</label>
                    <input type="text" id="member3_facebook-field" name="member3_facebook" class="form-control" value="{{ is_null(old("member3_facebook")) ? $npo_info->member3_facebook : old("member3_facebook") }}"/>
                       @if($errors->has("member3_facebook"))
                        <span class="help-block">{{ $errors->first("member3_facebook") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('member3_insta')) has-error @endif">
                       <label for="member3_insta-field">①のメンバーのインスタ（instagram.com/〇〇〇〇〇〇〇〇〇/の〇の部分を記入）</label>
                    <input type="text" id="member3_insta-field" name="member3_insta" class="form-control" value="{{ is_null(old("member3_insta")) ? $npo_info->member3_insta : old("member3_insta") }}"/>
                       @if($errors->has("member3_insta"))
                        <span class="help-block">{{ $errors->first("member3_insta") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('member3_youtube')) has-error @endif">
                       <label for="member3_youtube-field">①のメンバーのYouTubeのURL</label>
                    <input type="text" id="member3_youtube-field" name="member3_youtube" class="form-control" value="{{ is_null(old("member3_youtube")) ? $npo_info->member3_youtube : old("member3_youtube") }}"/>
                       @if($errors->has("member3_youtube"))
                        <span class="help-block">{{ $errors->first("member3_youtube") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('member2_linkedin')) has-error @endif">
                       <label for="member2_linkedin-field">①のメンバーのlinkedinのURL</label>
                    <input type="text" id="member2_linkedin-field" name="member2_linkedin" class="form-control" value="{{ is_null(old("member2_linkedin")) ? $npo_info->member2_linkedin : old("member2_linkedin") }}"/>
                       @if($errors->has("member2_linkedin"))
                        <span class="help-block">{{ $errors->first("member2_linkedin") }}</span>
                       @endif
                    </div>
                    <!-- 4人目 -->
                    <div class="form-group @if($errors->has('member4')) has-error @endif">
                       <label for="member4-field">メンバーの名前①</label>
                    <input type="text" id="member4-field" name="member4" class="form-control" value="{{ is_null(old("member4")) ? $npo_info->member4 : old("member4") }}"/>
                       @if($errors->has("member4"))
                        <span class="help-block">{{ $errors->first("member4") }}</span>
                       @endif
                    </div>
                    if(is_null(old("member4")) != "")
                      <div class="form-group @if($errors->has('member4_pos')) has-error @endif">
                         <label for="member4_pos-field">①のメンバーの役割</label>
                      <input type="text" id="member4_pos-field" name="member4_pos" class="form-control" value="{{ is_null(old("member4_pos")) ? $npo_info->member4_pos : old("member4_pos") }}"/>
                         @if($errors->has("member4_pos"))
                          <span class="help-block">{{ $errors->first("member4_pos") }}</span>
                         @endif
                      </div>
                      <div class="form-group @if($errors->has('member4_detail')) has-error @endif">
                         <label for="member4_detail-field">①のメンバーの詳細</label>
                      <input type="text" id="member4_detail-field" name="member4_detail" class="form-control" value="{{ is_null(old("member4_detail")) ? $npo_info->member4_detail : old("member4_detail") }}"/>
                         @if($errors->has("member4_detail"))
                          <span class="help-block">{{ $errors->first("member4_detail") }}</span>
                         @endif
                      </div>
                      <div class="form-group @if($errors->has('member4_twitter')) has-error @endif">
                         <label for="member4_twitter-field">①のメンバーのTwitter（twitter.com/〇〇〇〇〇〇〇〇〇/の〇の部分を記入）</label>
                      <input type="text" id="member4_twitter-field" name="member4_twitter" class="form-control" value="{{ is_null(old("member4_twitter")) ? $npo_info->member4_twitter : old("member4_twitter") }}"/>
                         @if($errors->has("member4_twitter"))
                          <span class="help-block">{{ $errors->first("member4_twitter") }}</span>
                         @endif
                      </div>
                      <div class="form-group @if($errors->has('member4_facebook')) has-error @endif">
                         <label for="member4_facebook-field">①のメンバーのFacebook（facebook.com/〇〇〇〇〇〇〇〇〇/の〇の部分を記入）</label>
                      <input type="text" id="member4_facebook-field" name="member4_facebook" class="form-control" value="{{ is_null(old("member4_facebook")) ? $npo_info->member4_facebook : old("member4_facebook") }}"/>
                         @if($errors->has("member4_facebook"))
                          <span class="help-block">{{ $errors->first("member4_facebook") }}</span>
                         @endif
                      </div>
                      <div class="form-group @if($errors->has('member4_insta')) has-error @endif">
                         <label for="member4_insta-field">①のメンバーのインスタ（instagram.com/〇〇〇〇〇〇〇〇〇/の〇の部分を記入）</label>
                      <input type="text" id="member4_insta-field" name="member4_insta" class="form-control" value="{{ is_null(old("member4_insta")) ? $npo_info->member4_insta : old("member4_insta") }}"/>
                         @if($errors->has("member4_insta"))
                          <span class="help-block">{{ $errors->first("member4_insta") }}</span>
                         @endif
                      </div>
                      <div class="form-group @if($errors->has('member4_youtube')) has-error @endif">
                         <label for="member4_youtube-field">①のメンバーのYouTubeのURL</label>
                      <input type="text" id="member4_youtube-field" name="member4_youtube" class="form-control" value="{{ is_null(old("member4_youtube")) ? $npo_info->member4_youtube : old("member4_youtube") }}"/>
                         @if($errors->has("member4_youtube"))
                          <span class="help-block">{{ $errors->first("member4_youtube") }}</span>
                         @endif
                      </div>
                      <div class="form-group @if($errors->has('member2_linkedin')) has-error @endif">
                         <label for="member2_linkedin-field">①のメンバーのlinkedinのURL</label>
                      <input type="text" id="member2_linkedin-field" name="member2_linkedin" class="form-control" value="{{ is_null(old("member2_linkedin")) ? $npo_info->member2_linkedin : old("member2_linkedin") }}"/>
                         @if($errors->has("member2_linkedin"))
                          <span class="help-block">{{ $errors->first("member2_linkedin") }}</span>
                         @endif
                      </div>
                    @endif
                    
                    <h1><i class="glyphicon glyphicon-edit"></i>ファンクラブ設定</h1>
                    <!-- リターン -->
                    <div class="form-group @if($errors->has('support_contents')) has-error @endif">
                       <label for="support_contents-field">ファンクラブ会員への特典(リターン)</label>
                    <input type="text" id="support_contents-field" name="support_contents" class="form-control" value="{{ is_null(old("support_contents")) ? $npo_info->support_contents : old("support_contents") }}"/>
                       @if($errors->has("support_contents"))
                        <span class="help-block">{{ $errors->first("support_contents") }}</span>
                       @endif
                    </div>
                    <!-- 特典利用期限 -->
                    <div class="form-group @if($errors->has('support_contents_detail')) has-error @endif">
                       <label for="support_contents_detail-field">特典利用期限</label>
                    <input type="text" id="support_contents_detail-field" name="support_contents_detail" class="form-control" value="{{ is_null(old("support_contents_detail")) ? $npo_info->support_contents_detail : old("support_contents_detail") }}"/>
                       @if($errors->has("support_contents_detail"))
                        <span class="help-block">{{ $errors->first("support_contents_detail") }}</span>
                       @endif
                    </div>
                    <!-- 特典利用期限 -->
                    <div class="form-group @if($errors->has('support_amount')) has-error @endif">
                       <label for="support_amount-field">特典利用期限（例:2018年12月31日）</label>
                    <input type="text" id="support_amount-field" name="support_amount" class="form-control" value="{{ is_null(old("support_amount")) ? $npo_info->support_amount : old("support_amount") }}"/>
                       @if($errors->has("support_amount"))
                        <span class="help-block">{{ $errors->first("support_amount") }}</span>
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
