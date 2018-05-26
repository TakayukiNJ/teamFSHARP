@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style type="text/css">
TABLE.table-list-main{
  border: inset 2px #999999;
  margin:2px;
  width:98%;
  font-size:40px;
}

TR.tr-list-main{
  border: inset 2px #999999;
  margin:2px;
  font-size:40px;
}

TD.td-list-header{
  border: inset 2px #999999;
  background-color: #d0d0d0;
  margin:2px;
  font-size:100px;
  height:50px;
  width:500px;
}
TD.td-list-main{
  border: inset 2px #999999;
  margin:2px;
  font-size:100px;
  height:200px;
}
div.submit_button {
 text-align : center ;
}
INPUT.button {
  font-size:100px;
}
</style>

<div class="jumbotron text-center" style="background-image: url(https://greatmiddleway.files.wordpress.com/2014/04/light.jpg?w=600&h=400); background-repeat: no-repeat; background-size: cover; background-attachment: fixed;">
  <!-- 自己紹介表示画面 -->
  <img >
  <h1>セカンドハーベストジャパン</h1><!-- ID -->
  <p>全ての人に、食べ物を。</p><!-- USER -->
  <a href="http://fb.me" target="_blank"><i class="fa fa-facebook-official" style="font-size:36px"></i></a>
  <i class="fa fa-twitter" style="font-size:36px"></i>
  <i class="fa fa-instagram" style="font-size:36px"></i>
  <i class="fa fa-youtube-play" style="font-size:36px"></i>
  <i class="fa fa-linkedin-square" style="font-size:36px"></i>
  <i class="fa fa-globe" style="font-size:36px"></i>
</div>

<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/XUE01i11OBI"></iframe>
      </div>
      <p>目標調達金額: <i class="fa fa-bitcoin" style="font-size:24px"></i>100.000000</p>
      <p>現在の調達金額:<i class="fa fa-bitcoin" style="font-size:24px;color:red"></i>59.484000</p>
      <p>フォロワー数:<i class="fa fa-users" style="font-size:24px"></i>744人
      <!--<button style="font-size:24px">フォローする -->
      <!--<i class="fa fa-user"></i>-->
      <!--</button>-->
      </p>
      <p>購入者数:<i class="fa fa-users" style="font-size:24px;color:red"></i></i>30人
      <!--<button style="font-size:24px">くじを買う <i class="fa fa-ticket"></i></button></p>-->
    </div>
    
    <div class="col-sm-4">
      <h3>詳細</h3>
      <div class="panel-body">
        <p><strong>私たちの目標　フードセーフティネットの構築</strong></p>
        <p>誰もが安全で栄養のある食品を手にすることができる。 これが基本的なセーフティネットの一部であるべきだと私たちは考えています。 
それは社会保障の制度はもちろん、例えば地域で困った時に相談にのる交番の存在のように、怪我や病気の際に治療が受けられる病院のように、火事の時に消火活動を行う消防署のように。 
いつでも住んでいる地域にて緊急食料支援を受けられる。セカンドハーベスト・ジャパンでは、そんな「食」のセーフティネットを構築します。</p>
        <p><strong>フードセーフティネットの構築</strong></p>
        <p>社会の誰からも助けを得られず、食べ物に困る状態になってしまった人に
直接食料を届けるハーベストパントリー活動を拡大し、
食料に関するセーフティーネット＝フードセーフティーネットの構築を目指します。</p>
        <p><strong>フードライフラインの強化</strong></p>
        <p>食品を提供する企業と、受け取る施設・団体がフードバンクをより利用しやすくなるよう様々な取り組みを行います。特に重要視しているのは、流通企業、食品企業や物流関連企業などの協力を得ながら、フードバンクの基幹流通をつくることです。</p>
        <!--<p>１．関係を深め、２．一緒に学習し、３．一緒に行動する。この順番を大切にしています。</p>-->
        <!--<p><strong>寄り添う活動</strong>　さらに、傷の多い孤児院の子どもたちの心をケアしてあげるために、短期孤児院訪問はしないことになりました。できるだけ安定した規律正しい生活を送って欲しいです。お客さんに必要以上にべったりする子どもたちもいます。そして悲しいお別れ。愛着形成が未熟な子どもたちの心の傷を更に深めてしまうのです。プロジェクトフレンズは、施設を出た若者に寄り添う活動に絞っています。そして、「家庭」の中ですくすくと子どもたちが成長できる未来に少しでも貢献できたらと願っています。</p>-->
      </div>
    </div>
    
    <div class="col-sm-4">
      @if(!$collections->count())
        <a href="#" onClick="E01_1_run()">
          <!--ラッフル機能 要編集！！！！！！！！！！！！-->
  	        <h4>新規作成</h4>
  		</a>
      @else
        @foreach($collections as $row)
        <div class="panel panel-default">
            <div class="panel-heading">
                VISION ID
            </div>
            <div class="panel-body">
            	{{ $row->vision_id }}
            </div>
            <div class="panel-heading">
            	タイトル
            </div>
            <div class="panel-body">
            	{{ $row->vision_title }}
            </div>
            <div class="panel-heading">
            	写真
            </div>
            <div class="panel-body">
            	<image src="{{ asset('/images'). '/'. $row->image_id }}">
            </div>
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
    </div>
     <!--<h2>このくじのついて</h2>-->
		    <!--    <div class="panel-body">-->
      <!--          優待内容: うまい棒1年分-->
      <!--      </div>-->
      <!--      <div class="panel-body">-->
      <!--          金額: 0.001BTC-->
      <!--      </div>-->
      <!--      <div class="panel-body">-->
      <!--          残り: 10個-->
      <!--      </div>-->
      <!--      <div class="panel-body">-->
      <!--          当選日: 2017年12月31日-->
      <!--      </div>-->
      <!--      <a href="{{ url('connect/buy') }}">-->
      <!--          <div class="panel-body">-->
      			       <!--<button style="font-size:24px">くじを買う <i class="fa fa-ticket"></i></button>-->
      <!--    		  </div>-->
      <!--			</a>-->
      <!--<h3>前回の当選者</h3>-->
      <!--<div class="panel-body">-->
      <!--  該当なし-->
      <!--</div>-->
  </div>
</div>

<!-- Contact Section -->
  <!--<div class="w3-container w3-padding-large w3-grey">-->
  <!--  <h1 id="contact"><b>Contact</b></h1>-->
  <!--  <div class="w3-row-padding w3-center w3-padding-24" style="margin:0 -16px">-->
  <!--    <div class="w3-third w3-dark-grey">-->
  <!--      <p><i class="fa fa-envelope w3-xxlarge w3-text-light-grey"></i></p>-->
  <!--      <p>email@email.com</p>-->
  <!--    </div>-->
  <!--    <div class="w3-third w3-teal">-->
  <!--      <p><i class="fa fa-map-marker w3-xxlarge w3-text-light-grey"></i></p>-->
  <!--      <p>Chicago, US</p>-->
  <!--    </div>-->
  <!--    <div class="w3-third w3-dark-grey">-->
  <!--      <p><i class="fa fa-phone w3-xxlarge w3-text-light-grey"></i></p>-->
  <!--      <p>512312311</p>-->
  <!--    </div>-->
  <!--  </div>-->
  <!--  <hr class="w3-opacity">-->
  <!--  <form action="/action_page.php" target="_blank">-->
  <!--    <div class="w3-section">-->
  <!--      <label>Name</label>-->
  <!--      <input class="w3-input w3-border" type="text" name="Name" required>-->
  <!--    </div>-->
  <!--    <div class="w3-section">-->
  <!--      <label>Email</label>-->
  <!--      <input class="w3-input w3-border" type="text" name="Email" required>-->
  <!--    </div>-->
  <!--    <div class="w3-section">-->
  <!--      <label>Message</label>-->
  <!--      <input class="w3-input w3-border" type="text" name="Message" required>-->
  <!--    </div>-->
  <!--    <button type="submit" class="w3-button w3-black w3-margin-bottom"><i class="fa fa-paper-plane w3-margin-right"></i>Send Message</button>-->
  <!--  </form>-->
  <!--</div>-->

<form name="changeform">
{{ csrf_field() }}
</form>
<script type="text/javascript">
function H01_run() {
	window.document.changeform.action = "{{ url('home/home_own_timeline') }}";
    window.document.changeform.method = "POST";
    window.document.changeform.submit();
}
/* Vision作成画面 */
function E01_1_run() {
    window.document.changeform.action = "{{ url('connect/vision_sell_regist') }}";
    window.document.changeform.method = "POST";
    window.document.changeform.submit();
}
/* 優待登録画面 */
function E04_1_run(val) {
    window.document.changeform.action = "{{ url('connect/sell_detail_regist') }}";
    window.document.changeform.method = "POST";
    make_hidden('vision_id', val, 'changeform');
    window.document.changeform.submit();
}
/* 優待更新画面 */
function E04_5_run(val) {
    window.document.changeform.action = "{{ url('connect/sell_detail_modify') }}";
    window.document.changeform.method = "POST";
    make_hidden('premier_id', val, 'changeform');
    window.document.changeform.submit();
}
/* Vision編集画面 */
function E01_5_run(val) {
    window.document.changeform.action = "{{ url('connect/vision_sell_modify') }}";
    window.document.changeform.method = "POST";
    make_hidden('vision_id', val, 'changeform');
    window.document.changeform.submit();
}
</script>
@endsection
