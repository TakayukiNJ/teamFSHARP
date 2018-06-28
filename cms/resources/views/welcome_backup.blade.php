 <!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>F#</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/landing-page.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
    <!-- Header -->
    <a name="about"></a>
    <div class="intro-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                        <h1 color="linear-gradient(180deg, #2af598 0%, #009efd 100%);">F#</h1>
                        <h3>NPOの資金不足を解決！</h3>
                        <h3>資金調達WEBサービス</h3>
                        <hr class="intro-divider">
                        <div class="w3-panel w3-large">
                            <a style="background-image: linear-gradient(to top, #96fbc4 0%, #f9f586 100%);" href="{{ url('/npo_registers/create') }}" class="btn btn-default btn-lg"><span class="network-name">NPOページ作成</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container -->
    </div>
    <!-- /.intro-header -->

    <!-- Page Content -->
	<a name="services"></a>
    <div class="content-section-a" align="center">
        <div class="container" align="center" margin="0 autozs">
            <div class="row" align="center">
                <div class="col-lg-5 col-sm-6">
                    <div class="w3-third w3-container w3-margin-bottom">
                        <a href="{{ url('/npo/nipponshotenkai') }}">
                            <img src="https://nipponshotenkai.com/wp-content/uploads/2017/03/others.png" alt="NPO" style="width:100%" class="w3-hover-opacity">
                        </a>
                        <div class="w3-container w3-white">
                            <h3><b>共に学び共に成長し共に勝つ</b></h3>
                            <p>NPO法人日本商店会</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <div class="w3-third w3-container w3-margin-bottom">
                        <a href="{{ url('/npo/teamFSHARP') }}">
                            <img src="https://greatmiddleway.files.wordpress.com/2014/04/light.jpg?w=600&h=400" alt="NPO" style="width:100%" class="w3-hover-opacity">
                        </a>
                        <div class="w3-container w3-white">
                            <h3><b>NPOの為の資金調達サービス</b></h3>
                            <p>F#</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container -->
    </div>
<!--ちなみにハイチ公認アプリを取れたらフィリピン（国内GDP37兆円、海外送金3.7兆円）にかかっている手数料2,960億円市場も変えられると思われ、フィリピンGDPを2,590億円上昇、開発ベンダーに370億円の収益があがる。-->

　
<!--<br>-->
<!--- 海外送金の割合が多い東南アジアなどの政府関係者と連携することで横展開をしていける-->

<!--<br><br>-->
<!--(2) 発展途上国の貯蓄銀行になる-->
<!--　<br>-->
<!--発展途上国ではニカラグアのように銀行口座を国民の19%しか持たず、8%しか貯蓄しないで、家畜を貯蓄とする国もある。海外からの送金を仮想通貨ないし自国通貨としてモバイルウォレットに格納・貯蓄することで、銀行モデルを飛び越したモバイル銀行業になる。-->
<!--これを村民で協働出資・船の購買・水産業の起業などに充てる（これもブロックチェーンに記録し透明性を担保することで紛争を防ぐ）ことで途上国での起業を促進できる-->
<!--　<br><br>-->
<!--(3) 赤十字やYahoo!募金等の透明化、直接送金化-->
<!--　<br>-->
<!--ハイチ地震で赤十字が集めた500億円は途中に入った国や地方・担当者のところで回収され、13万軒建てると宣言された家は6件しか建たなかった。500億円は無駄になった。募金モデルは直接届け、使用用途を制限しない限り効力を失いやすいがブロックチェーンのP2P直接送金とスマートコントラクト（利用時に目的外では使えない制約を入れる）によってこれらの問題が改善できる。寄付者が募金の結末を分かるようになる。寄付系テックが大型募金を集めている機関の改善を提案できる時期に来ている。-->
<!--　<br><br>-->
<!--(4) アーティスト・芸能人の直接応援プラットフォーム-->
<!--　<br>-->
<!--現在、アーティストの制作した楽曲の売り上げは最低30%がレーベルに入り、それ以外でも多くの手数料が引かれ制作した楽曲の利益のアーティスト取り分は最後の最後になってしまうそうですが、インターネット上で音楽を聞いたらブロックチェーンのスマートコントラクトで自動的にアーティストへ直接1円入るみたいなプラットフォームをつくることで、アーティスト中心の収益モデルが作れます。ここで使われる通貨は今のところアーティストの発行したトークンがメインになっているようですが、換金性を考えるとビットコインを使うべきで、現金化の課題がうまく解決されてくるとキンコン西野さんのレターポットとかも相性が良いように感じます。-->
<!--　<br><br>-->
<!--(5) 発展途上国の起業家/子どもたちへの直接投資や融資-->
<!--　<br>　-->
<!--発展途上国の子どもたちへお金を送る寄付のやり方も、ブロックチェーンを使うことで変える事ができます。投資先の子どもたちがきちんと体調管理が出来たり、勉強できたりしていると病院診断の結果やテスト結果などがブロックチェーンに書き込まれ、これが一定値以上であればスマートコントラクト(目的縛りを行い、親の目的外使い込みなども制限)で自動的に投資や融資を継続、状況がおかしい場合にはアラートを出し、直接連絡をとってみる等の遠方にいる人の状況把握がしやすくなります。これによって、社会貢献的な意識の人だけでなくマイクロファイナンスをしたい意識の方も途上国支援に参入してもらいやすくなり、信用するまで時間がかかっていた発展途上国起業家への投資も個人ベースで始まる気がします。例えばインド(途上国じゃないけど中国)の若い起業家など。ここの起業家リストを作成できるところがタイアップしたり。-->
<!--　<br><br><br>-->
<!--</div></div>-->
<!--</div>-->
	<a name="contact"></a>
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2>F#</h2>
                    <h3>NPOの為の資金調達サービス</h3>
                </div>
                <div class="col-lg-6">
                    <div class="w3-panel w3-large">
                        <br>
                        <a style="background-image: linear-gradient(to top, #96fbc4 0%, #f9f586 100%);" href="{{ url('/register') }}" class="btn btn-default btn-lg"><span class="network-name">登録</span></a>
                        <a style="background-image: linear-gradient(to top, #96fbc4 0%, #f9f586 100%);" href="{{ url('/login') }}" class="btn btn-default btn-lg"><span class="network-name">ログイン</span></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container -->
    </div>
    <!-- /.banner -->

    <!-- Footer -->
    <!--<footer>-->
    <!--    <div class="container">-->
    <!--        <div class="row">-->
    <!--            <div class="col-lg-12">-->
    <!--                <ul class="list-inline">-->
    <!--                    <li>-->
    <!--                        <a href="#">Home</a>-->
    <!--                    </li>-->
    <!--                    <li class="footer-menu-divider">&sdot;</li>-->
    <!--                    <li>-->
    <!--                        <a href="#about">About</a>-->
    <!--                    </li>-->
    <!--                    <li class="footer-menu-divider">&sdot;</li>-->
    <!--                    <li>-->
    <!--                        <a href="#services">Services</a>-->
    <!--                    </li>-->
    <!--                    <li class="footer-menu-divider">&sdot;</li>-->
    <!--                    <li>-->
    <!--                        <a href="#contact">Contact</a>-->
    <!--                    </li>-->
    <!--                </ul>-->
    <!--                <p class="copyright text-muted small">Copyright &copy; Your Company 2014. All Rights Reserved</p>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</footer>-->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
