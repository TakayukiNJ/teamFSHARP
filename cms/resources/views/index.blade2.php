<!-- resources/views/books.blade.php -->

<!-- ララベルでは「.」は「その中」のという意味。つまり、ここではlayoutsフォルダのappファイルという意味。 -->
@extends('layouts.app')

@section('content')


    <div class="panel-body">
        <!-- バリデーションエラーの表示に使用-->
        @include('common.errors')

       <!--<article>-->
      <div class="center_column_top">
      	index.php画面2
        <h3>&nbsp;【速報】新規追加のお知らせ</h3>

            <div class="easy_one">
              <a class="single" href="img/contents/p_friends.jpg" title="つながる心。つながる未来。(プロジェクト・フレンズ)">
                <img src="img/contents/p_friends.jpg" class="easy_img">
              </a>
              <div class="easy_text">
                <a href="{{ url('/home/ProjectFriends') }}">
                  <h3>「つながる心。つながる未来。」プロジェクト・フレンズ</h3>
                </a>
                <br>
                <p>
                  &nbsp;&nbsp;&nbsp;世界の人々との交流を通じ、相互理解に基づく友情を深めながら、それぞれが抱える課題の解決や夢の実現に向けて協力の輪を広げ活動できるグローバルな人材の育成を目指しています。<br>
                  １．関係を深め、２．一緒に学習し、３．一緒に行動する。この順番を大切にしています。<br>
                  <div class="detail">
                    <a href="{{ url('/mikujis') }}">続きを読む</a>
                  </div>
                </p>
              </div>
            </div>

            <div class="easy_one">
              <a class="single" href="img/contents/takeuchi_masaki.jpg" title="「大切な人たちと大切な時間を過ごす生き方を体現する」竹内政希">
                <img src="img/contents/takeuchi_masaki.jpg" class="easy_img">
              </a>
              <div class="easy_text">
                <a href="{{ url('/home/TakeuchiMasaki') }}"><h3>「大切な人たちと大切な時間を過ごす生き方を体現する」竹内政希</h3></a>
                <br>
                <p>
                  &nbsp;&nbsp;&nbsp;大切って思えるような人たちと、好きな人たちと、<br>
                  シゴトでも、プライベートでも、生きていきたい。<br>
    　　　           <div class="detail">
                    <a href="{{ url('/visions') }}">続きを読む</a>
                  </div>
                </p>
              </div>
            </div>
          </div>











      <?php if (Auth::check())  { ?>
      <div class="center_column_bottom">
        <h3>&nbsp;【タイムライン】</h3>
        <ul>
            <br>
            <!-- ここにエラーチェック文を入れる予定 -->
        </ul>
        <!-- ログイン時のみ、呟く機能が追加 -->
        <?php if (Auth::check())  { ?>
        <form method="post">
          <div>
            <input
              type="hidden"
              name="name"
              value=""
              size="56"
              class="hitokoto"
              >
          </div>
          <div>
            ひとこと: <textarea
              name="message"
              cols="50"
              rows="5"
              padding-top="2"
              wrap="hard"
              value=""
              ></textarea>
              <br>
            タグ: <textarea
              name="tag"
              cols="40"
              rows="1"
              padding-top="2"
              wrap="hard"
              value=""
              ></textarea>
            <input type="hidden" name="category_id" value="0">
            <input type="submit" value="呟く。">
            <input type="hidden" name="mode" value="insert_hitokoto">
          </div>
        </form>
        <?php } ?>

    </div>

        <?php } ?>
<!--</article>-->
<form name="changeform">
</form>
<script type="text/javascript">
    window.document.changeform.action = "home/home_own_timeline";
    window.document.changeform.method = "POST";
    window.document.changeform.submit();
</script>

</div>
@endsection