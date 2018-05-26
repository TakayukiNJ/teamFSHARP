@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<div class="jumbotron text-center" style="background-image: url(https://greatmiddleway.files.wordpress.com/2014/04/light.jpg?w=600&h=400); background-repeat: no-repeat; background-size: cover; background-attachment: fixed;">
  <!-- 自己紹介表示画面 -->
  <h1>{{ $npo_info->subtitle }}</h1>
  <p>{{ $npo_info->title }}</p>
  @if($npo_info->facebook != "")
  <a href="{{ $npo_info->facebook }}"><i class="fa fa-facebook-official" style="font-size:36px"></i></a>
  @endif
  @if($npo_info->twitter != "")
  <a href="{{ $npo_info->twitter }}"><i class="fa fa-twitter" style="font-size:36px"></i></a>
  @endif
  @if($npo_info->instagram != "")
  <a href="{{ $npo_info->instagram }}"><i class="fa fa-instagram" style="font-size:36px"></i></a>
  @endif
  @if($npo_info->youtube != "")
  <a href="{{ $npo_info->youtube }}"><i class="fa fa-youtube-play" style="font-size:36px"></i></a>
  @endif
  @if($npo_info->linkedin != "")
  <a href="{{ $npo_info->linkedin }}"><i class="fa fa-linkedin-square" style="font-size:36px"></i></a>
  @endif
  @if($npo_info->url != "")
  <a href="{{ $npo_info->url }}"><i class="fa fa-globe" style="font-size:36px"></i></a>
  @endif
</div>

<div class="container">
  <div class="row">
    <div class="col-sm-4">
      @if($npo_info->embed_youtube != "")
      <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{ $npo_info->embed_youtube }}"></iframe>
      </div>
      @else
        <!--ここにYouTubeの動画を貼ることができます。動画のURLのwatch?v=<strong>"_______"</strong>←この部分-->
      @endif

      @if($npo_info->code3 != "")
      <h3>ビットコインキャッシュで支援</h3>
      <div style="word-wrap: break-word;">
      <p> BCH Address: {{ $npo_info->code3 }}</p>
      <!-- <img src='{ { url(/img/code3/} }{ { $npo_info->npo_name } }.png)'><br><br> -->
      <img src="/img/code3/teamFSHARP.png"><br><br>
      <p>※ビットコインキャッシュでの寄附は、手数料が一切かからず、そのまま全額団体に寄附されます。</p>
      <p>※ビットコインキャッシュでの寄附は、優待やコインなどでのリターンはございません。見返りのない寄附となります。</p>
      </div>
      @endif

    </div>

    <div class="col-sm-4">
      <h3>詳細</h3>
      <div class="panel-body">
         {{ $npo_info->body }}
         <p><strong>①支援・寄附に関して</strong></p>
         <p>もしビットコインをお持ちなら、応援したい団体を選んで支援や寄附をすることができます。仮想通貨なので、世界中どこからでも手数料・送金速度は一律です。</p>
         <p>NPOの支援・寄附した場合、お名前（ユーザーネーム）がサイトに公開され、NPO側にはメールアドレスもお伝えいたします。(購入履歴は、今後ご活用できる仕組みを作成中です。)</p>
         <p>購入履歴は、今後その支援した団体のオリジナルコイン(トークン)をゲットしてご利用できるようになります。お楽しみに！</p>
         <!--<p><strong>①マイページに関して</strong></p>-->
         <!--<p>トップバーの「ユーザー名」→マイページ編集」で、ご本名や生年月日を入力して本登録完了といたします。(外部公開はいたしません。)</p>-->
         <!--<p>本登録完了後、マイページに写真を追加したり、ご自身のNPOをICOで資金調達にチャレンジすることができます。</p>-->
         <p><strong>②NPOページ掲載に関して</strong></p>
         <p>トップバーの「掲載/相談する」から、ご自身のNPOを登録できます。（審査期間：約1週間）</p>
         <!--<p><strong>③ICO(資金調達)に関して</strong></p>-->
         <p>ご自身のNPOページが登録されると、新たに項目がトップバーに追加されます。</p>
         <p>トップバーの「NPO名」→「NPOページ編集」から、優待を設定し、資金調達を始めることができます。（審査期間：約1週間）</p>
         <p>お気軽に、ご相談ください。</p>
      </div>
    </div>

    <div class="col-sm-4">
        <div style="background-image: linear-gradient(to top, #fff1eb 0%, #ace0f9 100%); padding:6px;">
        <h3 color="linear-gradient(180deg, #2af598 0%, #009efd 100%)">支援する</h3>

        @if(($npo_info->manager) == "仲条高幸")
		    <div class="panel-body">
                優待内容: 東京都内でFSHARPメンバーと食事
            </div>
            <div class="panel-body">
                金額: 5,000円相当のビットコイン
            </div>
            <div class="panel-body">
                詳細: FSHARPを運営するために、活用させて頂きます。現在、全て手数料無料で運営しておりますので、少しでもお気持ち程度でご支援頂ければ、大変嬉しく思います。。
            </div>
            <div class="panel-body">
                第一目標金額: 10,000,000円
            </div>
            <div class="panel-body">
                第二目標金額: 100,000,000円
            </div>
        @endif
            @if ((Auth::user()->name) == "{{ $npo_info->manager }}" )

      @if(!$collections->count())
        <a href="#" onClick="E01_1_run()">
          <!--ラッフル機能 要編集！！！！！！！！！！！！-->
  	        <h4>新規作成</h4>
  		</a>
      @else
        @foreach($collections as $row)
        <div class="panel panel-default">
            <div class="panel-heading">
            	タイトル
            </div>
            <div class="panel-body">
            	{{ $row->vision_title }}
            </div>
            <!--<div class="panel-heading">-->
            <!--	写真-->
            <!--</div>-->
            <!--<div class="panel-body">-->
            <!--	<image src="{{ asset('/images'). '/'. $row->image_id }}">-->
            <!--</div>-->
            <div class="panel-heading">
            	ステータス
            </div>
            <div class="panel-body">
                @if ($row->vision_status == 'open')
                公開待ち
                @elseif ($row->vision_status == 'process')
                公開中
                @elseif ($row->vision_status == 'bid')
                おみくじ判定中
                @elseif ($row->vision_status == 'close')
                受付終了
                @endif
            </div>
            <div class="panel-heading">
            	VISION作成日
            </div>
            <div class="panel-body">
            	{{ $row->vision_published }}
            </div>
            <div class="panel-heading">
            	VISION詳細
            </div>
            <div class="panel-body">
            	{{ $row->vision_description }}
            </div>
            <div class="panel-heading">
            	1st目標達成金額
            </div>
            <div class="panel-body">
            	{{ $row->first_commitment_stage }}
            </div>
            <div class="panel-heading">
            	2st目標達成金額
            </div>
            <div class="panel-body">
            	{{ $row->second_commitment_stage }}
            </div>
            <div class="panel panel-default">
            @foreach($row->premier_collection as $premier)
                <!-- リターン -->
                <div class="panel-heading">
                    タイトル：{{ $premier->title }}
                </div>
                <div class="panel-body">
                    説明：{{ $premier->description }}
                </div>
                <div class="panel-body">
                    状態：{{ $premier->status }}
                </div>
                <div class="panel-body">
                    金額: 確定{{ $premier->bidder_price }} 上限{{ $premier->max_price }} ～ 下限{{ $premier->min_price }} 円
                </div>
                <div class="panel-body">
                    残り:
                </div>
                <div class="panel-body">
                    当選日:
                </div>
                <a href="#" onClick="E04_5_run('{{ $premier->premier_id }}')">
                    <div class="panel-body">
      			        <h4>優待を編集</h4>
      			    </div>
          		</a>
            @endforeach
            </div>
            <button type="button" class="btn btn-primary" onClick="E01_5_run('{{ $row->vision_id }}')">VISIONの編集</button>
            <button type="button" class="btn btn-primary" onClick="E04_1_run('{{ $row->vision_id }}')">優待を設定する</button>
            <!--<button type="button" class="btn btn-primary" onClick="">VISIONの公開開始</button>-->
            <!--<button type="button" class="btn btn-primary" onClick="">VISIONの公開終了</button>-->
        <br>
        </div>
        @endforeach

    @endif

            @endif

         <!--   <a href="{{ url('connect/buy') }}">-->
         <!--       <div class="panel-body">-->
      			<!--       <button style="font-size:24px">くじを買う <i class="fa fa-ticket"></i></button>-->
         <!-- 		  </div>-->
      			<!--</a>-->
         <!--   <a href="{{ url('connect/buy') }}">-->
         <!--       <div class="panel-body">-->
      			<!--       くじを買う-->
         <!-- 		  </div>-->
      			<!--</a>-->
      @if (Auth::guest())
      <div class="panel-body">
          <button>
      	      <a href="{{ url('/login') }}">
      	          <span class="glyphicon glyphicon-log-in">@lang('app.login')
      	      </a>
          </button>
      </div>
        @else
            @if($npo_info->code2 != "")
                <a href="{{ $npo_info->code2 }}" target="_blank">
                    <div class="panel-body">
              	       <button>ビットコインでNPOのF#をもらう<i class="fa fa-ticket"></i></button>
              	  </div>
              	</a>
            @else
              <p><strong>☆★☆★ただいま審査中★☆★☆</strong></p>
        @endif
    @endif

        <!-- <h3>支援者</h3>
        <div class="panel-body">
        @if( $npo_info->buyer == "")
        該当なし（{{ $npo_info->buyer }} 人）
        @else
        {{ $npo_info->buyer }} 人
        @endif
        
        </div> -->
        </div>
            @if($npo_info->code1 != "")
            <br>
            <div style="width:10px:">
                <a class="indiesquare-tip-button" href="//widget.indiesquare.me/tip/{{ $npo_info->code1 }}" target="_blank" data-vid="{{ $npo_info->code1 }}" data-domain="indiesquare.me">
                    IndieSquareでコインをゲット
                </a>
            </div>
            @endif

    </div>


  </div>
</div>



@endsection
