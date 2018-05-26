@extends('layouts.app')

@section('content')

<div class="jumbotron text-center">
  <!-- 自己紹介表示画面 -->
  <h1>セカンドハーベストジャパン</h1><!-- ID -->
  <p>全ての人に、食べ物を。</p><!-- USER -->
  <a href="http://fb.me"><i class="fa fa-facebook-official" style="font-size:36px"></i></a>
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
      <h2>このくじのついて</h2>
		        <div class="panel-body">
                優待内容: うまい棒1年分
            </div>
            <div class="panel-body">
                金額: 0.001BTC
            </div>
            <div class="panel-body">
                残り: 10個
            </div>
            <div class="panel-body">
                当選日: 2017年12月31日
            </div>
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
            <a href="https://bitflyer.jp/easypayp/2aRk37" target="_blank">
                <div class="panel-body">
      			       <button>ビットコインで買う<i class="fa fa-ticket"></i></button>
          		  </div>
      			</a>
      			
      <h3>過去の当選者</h3>
      <div class="panel-body">
        該当なし
      </div>
    </div>
    
  </div>
</div>



@endsection