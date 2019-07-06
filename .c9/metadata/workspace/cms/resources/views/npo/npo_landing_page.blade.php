{"filter":false,"title":"npo_landing_page.blade.php","tooltip":"/cms/resources/views/npo/npo_landing_page.blade.php","undoManager":{"mark":100,"position":100,"stack":[[{"start":{"row":377,"column":84},"end":{"row":377,"column":85},"action":"remove","lines":["/"],"id":5948}],[{"start":{"row":379,"column":81},"end":{"row":379,"column":82},"action":"remove","lines":["/"],"id":5949}],[{"start":{"row":377,"column":137},"end":{"row":377,"column":141},"action":"insert","lines":["</a>"],"id":5950}],[{"start":{"row":377,"column":173},"end":{"row":377,"column":177},"action":"remove","lines":["</a>"],"id":5951}],[{"start":{"row":377,"column":141},"end":{"row":377,"column":143},"action":"insert","lines":["さん"],"id":5957}],[{"start":{"row":521,"column":14},"end":{"row":522,"column":0},"action":"insert","lines":["",""],"id":5958},{"start":{"row":522,"column":0},"end":{"row":522,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":522,"column":8},"end":{"row":523,"column":0},"action":"insert","lines":["",""],"id":5959},{"start":{"row":523,"column":0},"end":{"row":523,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":523,"column":8},"end":{"row":524,"column":0},"action":"insert","lines":["",""],"id":5960},{"start":{"row":524,"column":0},"end":{"row":524,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":523,"column":8},"end":{"row":573,"column":14},"action":"insert","lines":["<div class=\"cd-section section-white\" id=\"chats\">","            <div class=\"container\">","                <div class=\"space-top\"></div>","                <h2 class=\"title\">交渉チャット</h2>","                <div class=\"row\">","                    <div class=\"col-md-8 ml-auto mr-auto\">","\t                    @if(!Auth::guest())","\t                    <form class=\"contact-form\" action=\"{{action('ChatController@sendMessage')}}\" method=\"POST\">","                            <label>Name</label>","                            <input name=\"from\" class=\"form-control\" placeholder=\"Name\" value=\"{{ Auth::user()->name }}\" readonly=\"readonly\">","\t                        <input name=\"to\" type=\"hidden\" value=\"{{ $npo_info->npo_name }}\" readonly=\"readonly\">","\t                        <label>Message</label>","\t                        <textarea name=\"message\" class=\"form-control\" rows=\"4\" placeholder=\"ここに交渉内容を記述してください。\"></textarea>","\t                        <div class=\"row\">","\t                            <div class=\"col-md-4 offset-md-4\">","\t                                <button class=\"btn btn-danger btn-lg btn-fill\">送信</button>","\t                            </div>","\t                        </div>","\t                        {!! csrf_field() !!}","                        </form>","\t                    @endif","\t                </div>","\t                ","                    <div class=\"col-md-8 ml-auto mr-auto\">","                    @for ($i = 1; $i < count($message); $i++)","                    <div class=\"media\">","                        <a class=\"pull-left\" href=\"#paper-kit\">","                            <div class=\"avatar big-avatar\">","                                @if(\"placeholder.jpg\" != $fromPic[$i])","                                <img class=\"media-object\" alt=\"64x64\" src=\"/img/personal_info/{{ $fromPic[$i] }}\">","                                @else","                                <img class=\"media-object\" alt=\"64x64\" src=\"{{ url('/') }}/../img/placeholder.jpg\">","                                @endif","                            </div>","                        </a>","                        <div class=\"media-body\">","                            <h4 class=\"media-heading pull-left\">{{ $from[$i] }} </h4>","                            <div class=\"right\">","                                <br>","                                <br><!--<a href=\"#paper-kit\" class=\"btn btn-default btn-round \">　</a>-->","                            </div>","                            <p class=\"media-heading pull-left\">{{$message[$i]}}</p>","                        </div>","                        <p> {{ $created[$i] }}</p>","                    </div>","                    ","                    @endfor","                    </div>","                </div>","            </div>","        </div>"],"id":5961}],[{"start":{"row":608,"column":102},"end":{"row":608,"column":103},"action":"remove","lines":[" "],"id":5962}],[{"start":{"row":608,"column":101},"end":{"row":608,"column":102},"action":"remove","lines":["d"],"id":5963}],[{"start":{"row":608,"column":100},"end":{"row":608,"column":101},"action":"remove","lines":["n"],"id":5964}],[{"start":{"row":608,"column":99},"end":{"row":608,"column":100},"action":"remove","lines":["e"],"id":5965}],[{"start":{"row":608,"column":98},"end":{"row":608,"column":99},"action":"remove","lines":["S"],"id":5966}],[{"start":{"row":608,"column":98},"end":{"row":608,"column":100},"action":"insert","lines":["送信"],"id":5973}],[{"start":{"row":534,"column":38},"end":{"row":534,"column":39},"action":"remove","lines":["e"],"id":5974}],[{"start":{"row":534,"column":37},"end":{"row":534,"column":38},"action":"remove","lines":["g"],"id":5975}],[{"start":{"row":534,"column":36},"end":{"row":534,"column":37},"action":"remove","lines":["a"],"id":5976}],[{"start":{"row":534,"column":35},"end":{"row":534,"column":36},"action":"remove","lines":["s"],"id":5977}],[{"start":{"row":534,"column":34},"end":{"row":534,"column":35},"action":"remove","lines":["s"],"id":5978}],[{"start":{"row":534,"column":33},"end":{"row":534,"column":34},"action":"remove","lines":["e"],"id":5979}],[{"start":{"row":534,"column":32},"end":{"row":534,"column":33},"action":"remove","lines":["M"],"id":5980}],[{"start":{"row":534,"column":32},"end":{"row":534,"column":34},"action":"insert","lines":["内容"],"id":5989}],[{"start":{"row":531,"column":38},"end":{"row":531,"column":39},"action":"remove","lines":["e"],"id":5990}],[{"start":{"row":531,"column":37},"end":{"row":531,"column":38},"action":"remove","lines":["m"],"id":5991}],[{"start":{"row":531,"column":36},"end":{"row":531,"column":37},"action":"remove","lines":["a"],"id":5992}],[{"start":{"row":531,"column":35},"end":{"row":531,"column":36},"action":"remove","lines":["N"],"id":5993}],[{"start":{"row":531,"column":35},"end":{"row":531,"column":39},"action":"insert","lines":["ユーザー"],"id":5999}],[{"start":{"row":531,"column":39},"end":{"row":531,"column":41},"action":"insert","lines":["めい"],"id":6002}],[{"start":{"row":531,"column":40},"end":{"row":531,"column":41},"action":"remove","lines":["い"],"id":6003}],[{"start":{"row":531,"column":39},"end":{"row":531,"column":40},"action":"remove","lines":["め"],"id":6004}],[{"start":{"row":531,"column":39},"end":{"row":531,"column":40},"action":"insert","lines":["名"],"id":6008}],[{"start":{"row":567,"column":26},"end":{"row":567,"column":27},"action":"insert","lines":["あ"],"id":6009}],[{"start":{"row":567,"column":26},"end":{"row":567,"column":27},"action":"remove","lines":["あ"],"id":6010}],[{"start":{"row":565,"column":30},"end":{"row":565,"column":31},"action":"insert","lines":["あ"],"id":6011}],[{"start":{"row":565,"column":30},"end":{"row":565,"column":31},"action":"remove","lines":["あ"],"id":6012}],[{"start":{"row":567,"column":26},"end":{"row":567,"column":27},"action":"insert","lines":["あ"],"id":6013}],[{"start":{"row":566,"column":50},"end":{"row":566,"column":51},"action":"insert","lines":["お"],"id":6014}],[{"start":{"row":565,"column":30},"end":{"row":565,"column":31},"action":"insert","lines":["う"],"id":6015}],[{"start":{"row":565,"column":30},"end":{"row":565,"column":31},"action":"remove","lines":["う"],"id":6016}],[{"start":{"row":566,"column":50},"end":{"row":566,"column":51},"action":"remove","lines":["お"],"id":6017}],[{"start":{"row":567,"column":26},"end":{"row":567,"column":27},"action":"remove","lines":["あ"],"id":6018}],[{"start":{"row":548,"column":20},"end":{"row":548,"column":39},"action":"insert","lines":["<div class=\"media\">"],"id":6019}],[{"start":{"row":548,"column":39},"end":{"row":549,"column":24},"action":"insert","lines":["","                        "],"id":6020}],[{"start":{"row":549,"column":24},"end":{"row":550,"column":0},"action":"insert","lines":["",""],"id":6021},{"start":{"row":550,"column":0},"end":{"row":550,"column":24},"action":"insert","lines":["                        "]}],[{"start":{"row":550,"column":20},"end":{"row":550,"column":24},"action":"remove","lines":["    "],"id":6022}],[{"start":{"row":549,"column":20},"end":{"row":549,"column":21},"action":"insert","lines":["<"],"id":6023}],[{"start":{"row":549,"column":21},"end":{"row":549,"column":22},"action":"insert","lines":[">"],"id":6024}],[{"start":{"row":549,"column":21},"end":{"row":549,"column":22},"action":"insert","lines":["/"],"id":6025}],[{"start":{"row":549,"column":22},"end":{"row":549,"column":23},"action":"insert","lines":["d"],"id":6026}],[{"start":{"row":549,"column":23},"end":{"row":549,"column":24},"action":"insert","lines":["i"],"id":6027}],[{"start":{"row":549,"column":24},"end":{"row":549,"column":25},"action":"insert","lines":["v"],"id":6028}],[{"start":{"row":549,"column":29},"end":{"row":549,"column":30},"action":"remove","lines":[" "],"id":6030}],[{"start":{"row":549,"column":28},"end":{"row":549,"column":29},"action":"remove","lines":[" "],"id":6031}],[{"start":{"row":549,"column":27},"end":{"row":549,"column":28},"action":"remove","lines":[" "],"id":6032}],[{"start":{"row":549,"column":26},"end":{"row":549,"column":27},"action":"remove","lines":[" "],"id":6033}],[{"start":{"row":548,"column":20},"end":{"row":550,"column":20},"action":"remove","lines":["<div class=\"media\">","                    </div>","                    "],"id":6034}],[{"start":{"row":547,"column":20},"end":{"row":548,"column":0},"action":"insert","lines":["",""],"id":6035},{"start":{"row":548,"column":0},"end":{"row":548,"column":20},"action":"insert","lines":["                    "]}],[{"start":{"row":547,"column":20},"end":{"row":549,"column":20},"action":"insert","lines":["<div class=\"media\">","                    </div>","                    "],"id":6036}],[{"start":{"row":39,"column":0},"end":{"row":39,"column":4},"action":"remove","lines":["    "],"id":6037},{"start":{"row":40,"column":0},"end":{"row":40,"column":4},"action":"remove","lines":["    "]},{"start":{"row":41,"column":0},"end":{"row":41,"column":4},"action":"remove","lines":["    "]}],[{"start":{"row":182,"column":48},"end":{"row":247,"column":54},"action":"remove","lines":["<div class=\"modal fade\" id=\"loginModal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"false\">","                                                    <div class=\"modal-dialog modal-register\">","                                                        <div class=\"modal-content\">","                                                            <div class=\"modal-header no-border-header text-center\">","                                                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">","                                                                  <span aria-hidden=\"true\">&times;</span>","                                                                </button>","                                                                <h3 class=\"modal-title text-center\">ようこそ！</h3>","                                                                <p>まずはご登録をお願いします。</p>","                                                            </div>","                                                            <div class=\"modal-body\">","                                                                <form class=\"register-form\" role=\"form\" method=\"POST\" action=\"{{ url('/register') }}\">","                                                                    {{ csrf_field() }}","                                                                    {{-- ニックネーム(半角英数) --}}","                                                                    <div class=\"form-group{{ $errors->has('name') ? ' has-error' : '' }}\">","                                                                        <label for=\"name\">ニックネーム(半角英数)</label>","                                                                        <input id=\"name\" type=\"text\" class=\"form-control\" name=\"name\" placeholder=\"ニックネーム(半角英数)\" value=\"{{ old('name') }}\" required autofocus>","                                                                        @if ($errors->has('name'))","                                                                            <span class=\"help-block division\">","                                                                            <strong>{{ $errors->first('name') }}</strong>","                                                                            </span>","                                                                        @endif","                                                                    </div>","                                                                    {{-- メールアドレス --}}","                                                                    <div class=\"form-group{{ $errors->has('email') ? ' has-error' : '' }}\">","                                                                        <label for=\"email\">E-Mailアドレス</label>","                                                                        <input id=\"email\" type=\"email\" class=\"form-control\" name=\"email\" placeholder=\"メールアドレス\" value=\"{{ old('email') }}\" required>","                                                                        @if ($errors->has('email'))","                                                                            <span class=\"help-block division\">","                                                                            <strong>{{ $errors->first('email') }}</strong>","                                                                            </span>","                                                                        @endif","                                                                    </div>","                                                                    {{-- パスワード --}}","                                                                    <div class=\"form-group{{ $errors->has('password') ? ' has-error' : '' }}\">","                                                                        <label for=\"password\">パスワード(8文字以上)</label>","                                                                        <input id=\"password\" type=\"password\" class=\"form-control\" placeholder=\"パスワード\" name=\"password\" required>","                                                                        @if ($errors->has('password'))","                                                                            <span class=\"help-block division\">","                                                                            <strong>{{ $errors->first('password') }}</strong>","                                                                            </span>","                                                                        @endif","                                                                    </div>","                                                                    {{-- パスワード確認 --}}","                                                                    <div class=\"form-group division\">","                                                                        <label for=\"password\">パスワード確認</label>","                                                                        <input id=\"password-confirm\" type=\"password\" class=\"form-control\" placeholder=\"パスワード確認\" name=\"password_confirmation\" required>","                                                                    </div>","                                                                    {{-- 利用規約とプライバシーポリシー --}}","                                                                    <div class=\"form-check\">","                                                                        <label class=\"form-check-label\">","                                                                            <input class=\"form-check-input\" type=\"checkbox\" required>","                                                                            <span class=\"form-check-sign\">","                                                                                本サイトの<strong><a href=\"{{ url('/terms') }}\" target=\"_blank\"> 利用規約 </a>および</strong><strong><a href=\"{{ url('/privacy_policy') }}\" target=\"_blank\"> プライバシーポリシー </a></strong>に同意する（チェックを入れる）","                                                                            </span>","                                                                        </label>","                                                                    </div>","                                                                    <button type=\"submit\" class=\"btn btn-block btn-primary btn-round\">登録</button>","                                                                </form>","                                                                <div class=\"modal-footer no-border-footer\">","                                                                    <p>すでにご登録済みの方は <a href=\"{{ url('/login') }}\">こちら</a></p>","                                                                </div>","                                                            </div>","                                                        </div>","                                                    </div>","                                                </div>"],"id":6038}],[{"start":{"row":182,"column":48},"end":{"row":183,"column":48},"action":"remove","lines":["","                                                "],"id":6039}],[{"start":{"row":460,"column":35},"end":{"row":460,"column":36},"action":"remove","lines":["渉"],"id":6040}],[{"start":{"row":460,"column":34},"end":{"row":460,"column":35},"action":"remove","lines":["交"],"id":6041}],[{"start":{"row":460,"column":37},"end":{"row":460,"column":38},"action":"remove","lines":["ト"],"id":6042}],[{"start":{"row":460,"column":36},"end":{"row":460,"column":37},"action":"remove","lines":["ッ"],"id":6043}],[{"start":{"row":460,"column":35},"end":{"row":460,"column":36},"action":"remove","lines":["ャ"],"id":6044}],[{"start":{"row":460,"column":34},"end":{"row":460,"column":35},"action":"remove","lines":["チ"],"id":6045}],[{"start":{"row":460,"column":34},"end":{"row":460,"column":39},"action":"insert","lines":["メッセージ"],"id":6053}],[{"start":{"row":73,"column":41},"end":{"row":73,"column":42},"action":"insert","lines":[" "],"id":6055}],[{"start":{"row":73,"column":42},"end":{"row":73,"column":56},"action":"insert","lines":["number_format("],"id":6056}],[{"start":{"row":73,"column":72},"end":{"row":73,"column":73},"action":"insert","lines":[")"],"id":6057}],[{"start":{"row":73,"column":73},"end":{"row":73,"column":74},"action":"insert","lines":[" "],"id":6058}],[{"start":{"row":73,"column":80},"end":{"row":73,"column":81},"action":"insert","lines":[" "],"id":6059}],[{"start":{"row":73,"column":81},"end":{"row":73,"column":95},"action":"insert","lines":["number_format("],"id":6060}],[{"start":{"row":73,"column":109},"end":{"row":73,"column":110},"action":"insert","lines":[")"],"id":6061}],[{"start":{"row":73,"column":110},"end":{"row":73,"column":111},"action":"insert","lines":[" "],"id":6062}],[{"start":{"row":73,"column":122},"end":{"row":73,"column":123},"action":"insert","lines":[" "],"id":6063}],[{"start":{"row":73,"column":123},"end":{"row":73,"column":137},"action":"insert","lines":["number_format("],"id":6064}],[{"start":{"row":73,"column":161},"end":{"row":73,"column":162},"action":"insert","lines":[")"],"id":6065}],[{"start":{"row":73,"column":162},"end":{"row":73,"column":163},"action":"insert","lines":[" "],"id":6066}],[{"start":{"row":73,"column":171},"end":{"row":73,"column":172},"action":"insert","lines":[" "],"id":6067}],[{"start":{"row":73,"column":172},"end":{"row":73,"column":186},"action":"insert","lines":["number_format("],"id":6068}],[{"start":{"row":73,"column":229},"end":{"row":73,"column":230},"action":"insert","lines":[" "],"id":6069}],[{"start":{"row":73,"column":229},"end":{"row":73,"column":230},"action":"remove","lines":[" "],"id":6070}],[{"start":{"row":73,"column":229},"end":{"row":73,"column":230},"action":"insert","lines":[")"],"id":6071}],[{"start":{"row":73,"column":230},"end":{"row":73,"column":231},"action":"insert","lines":[" "],"id":6072}],[{"start":{"row":105,"column":66},"end":{"row":105,"column":67},"action":"insert","lines":[" "],"id":6073}],[{"start":{"row":105,"column":67},"end":{"row":105,"column":81},"action":"insert","lines":["number_format("],"id":6074}],[{"start":{"row":105,"column":124},"end":{"row":105,"column":125},"action":"insert","lines":[" "],"id":6075}],[{"start":{"row":105,"column":124},"end":{"row":105,"column":125},"action":"insert","lines":[")"],"id":6076}],[{"start":{"row":105,"column":38},"end":{"row":105,"column":52},"action":"insert","lines":["number_format("],"id":6077}],[{"start":{"row":105,"column":38},"end":{"row":105,"column":39},"action":"insert","lines":[" "],"id":6078}],[{"start":{"row":105,"column":69},"end":{"row":105,"column":70},"action":"insert","lines":[")"],"id":6079}],[{"start":{"row":105,"column":70},"end":{"row":105,"column":71},"action":"insert","lines":[" "],"id":6080}],[{"start":{"row":168,"column":74},"end":{"row":168,"column":88},"action":"insert","lines":["number_format("],"id":6081}],[{"start":{"row":168,"column":113},"end":{"row":168,"column":114},"action":"insert","lines":[")"],"id":6082}],[{"start":{"row":239,"column":54},"end":{"row":239,"column":55},"action":"insert","lines":[" "],"id":6083}],[{"start":{"row":239,"column":55},"end":{"row":239,"column":69},"action":"insert","lines":["number_format("],"id":6084}],[{"start":{"row":239,"column":112},"end":{"row":239,"column":113},"action":"insert","lines":[")"],"id":6085}],[{"start":{"row":239,"column":113},"end":{"row":239,"column":114},"action":"insert","lines":[" "],"id":6086}]]},"ace":{"folds":[],"scrolltop":1170.5,"scrollleft":138,"selection":{"start":{"row":73,"column":42},"end":{"row":73,"column":56},"isBackwards":true},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":24,"state":"start","mode":"ace/mode/php"}},"timestamp":1560610185000,"hash":"fa2af7e71e06215efe92e9bb515e651da48747b3"}