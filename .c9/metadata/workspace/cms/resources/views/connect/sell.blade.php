{"changed":false,"filter":false,"title":"sell.blade.php","tooltip":"/cms/resources/views/connect/sell.blade.php","undoManager":{"mark":63,"position":63,"stack":[[{"start":{"row":39,"column":28},"end":{"row":39,"column":71},"action":"insert","lines":["href=\"{{ url('/home/home_own_timeline') }}\""],"id":51}],[{"start":{"row":39,"column":71},"end":{"row":39,"column":72},"action":"insert","lines":[" "],"id":52}],[{"start":{"row":39,"column":46},"end":{"row":39,"column":47},"action":"remove","lines":["e"],"id":53}],[{"start":{"row":39,"column":45},"end":{"row":39,"column":46},"action":"remove","lines":["m"],"id":54}],[{"start":{"row":39,"column":44},"end":{"row":39,"column":45},"action":"remove","lines":["o"],"id":55}],[{"start":{"row":39,"column":43},"end":{"row":39,"column":44},"action":"remove","lines":["h"],"id":56}],[{"start":{"row":39,"column":43},"end":{"row":39,"column":44},"action":"insert","lines":["c"],"id":57}],[{"start":{"row":39,"column":44},"end":{"row":39,"column":45},"action":"insert","lines":["o"],"id":58}],[{"start":{"row":39,"column":45},"end":{"row":39,"column":46},"action":"insert","lines":["n"],"id":59}],[{"start":{"row":39,"column":46},"end":{"row":39,"column":47},"action":"insert","lines":["n"],"id":60}],[{"start":{"row":39,"column":47},"end":{"row":39,"column":48},"action":"insert","lines":["e"],"id":61}],[{"start":{"row":39,"column":48},"end":{"row":39,"column":49},"action":"insert","lines":["c"],"id":62}],[{"start":{"row":39,"column":49},"end":{"row":39,"column":50},"action":"insert","lines":["t"],"id":63}],[{"start":{"row":39,"column":51},"end":{"row":39,"column":68},"action":"remove","lines":["home_own_timeline"],"id":64},{"start":{"row":39,"column":51},"end":{"row":39,"column":52},"action":"insert","lines":["s"]}],[{"start":{"row":39,"column":52},"end":{"row":39,"column":53},"action":"insert","lines":["e"],"id":65}],[{"start":{"row":39,"column":53},"end":{"row":39,"column":54},"action":"insert","lines":["l"],"id":66}],[{"start":{"row":39,"column":54},"end":{"row":39,"column":55},"action":"insert","lines":["l"],"id":67}],[{"start":{"row":39,"column":55},"end":{"row":39,"column":56},"action":"insert","lines":["_"],"id":68}],[{"start":{"row":39,"column":56},"end":{"row":39,"column":57},"action":"insert","lines":["c"],"id":69}],[{"start":{"row":39,"column":57},"end":{"row":39,"column":58},"action":"insert","lines":["o"],"id":70}],[{"start":{"row":39,"column":58},"end":{"row":39,"column":59},"action":"insert","lines":["n"],"id":71}],[{"start":{"row":39,"column":51},"end":{"row":39,"column":59},"action":"remove","lines":["sell_con"],"id":72},{"start":{"row":39,"column":51},"end":{"row":39,"column":63},"action":"insert","lines":["sell_confirm"]}],[{"start":{"row":39,"column":65},"end":{"row":39,"column":66},"action":"remove","lines":[" "],"id":74,"ignore":true},{"start":{"row":39,"column":65},"end":{"row":41,"column":20},"action":"insert","lines":["","                    ","                    "]}],[{"start":{"row":41,"column":20},"end":{"row":42,"column":20},"action":"insert","lines":["","                    "],"id":75,"ignore":true}],[{"start":{"row":42,"column":20},"end":{"row":43,"column":20},"action":"insert","lines":["","                    "],"id":76,"ignore":true}],[{"start":{"row":40,"column":20},"end":{"row":43,"column":20},"action":"remove","lines":["","                    ","                    ","                    "],"id":77,"ignore":true}],[{"start":{"row":39,"column":65},"end":{"row":40,"column":20},"action":"remove","lines":["","                    "],"id":78,"ignore":true},{"start":{"row":39,"column":65},"end":{"row":39,"column":66},"action":"insert","lines":[" "]}],[{"start":{"row":39,"column":60},"end":{"row":39,"column":69},"action":"remove","lines":["irm') }}\""],"id":79,"ignore":true}],[{"start":{"row":39,"column":43},"end":{"row":39,"column":60},"action":"remove","lines":["connect/sell_conf"],"id":80,"ignore":true}],[{"start":{"row":39,"column":32},"end":{"row":39,"column":43},"action":"remove","lines":["=\"{{ url('/"],"id":81,"ignore":true}],[{"start":{"row":39,"column":29},"end":{"row":39,"column":32},"action":"remove","lines":["ref"],"id":82,"ignore":true}],[{"start":{"row":39,"column":27},"end":{"row":39,"column":29},"action":"remove","lines":[" h"],"id":83,"ignore":true}],[{"start":{"row":38,"column":16},"end":{"row":41,"column":22},"action":"remove","lines":["<div class=\"well well-sm\">","                    <button type=\"button\" class=\"btn btn-primary\" onClick=\"E01_2_run()\">作成</button>","                    <a href=\"{{ url('/home/home_own_timeline') }}\" class=\"btn btn-link pull-right\" onClick=\"H01_run()\"><i class=\"glyphicon glyphicon-backward\"></i> 戻る</a>","                </div>"],"id":84,"ignore":true},{"start":{"row":38,"column":16},"end":{"row":41,"column":22},"action":"insert","lines":["<div class=\"well well-sm\">","                    <button type=\"button\" class=\"btn btn-primary\" onClick=\"E01_2_run()\">作成</button>","                    <a class=\"btn btn-link pull-right\" onClick=\"H01_run()\"><i class=\"glyphicon glyphicon-backward\"></i> 戻る</a>","                </div>"]}],[{"start":{"row":31,"column":20},"end":{"row":41,"column":22},"action":"remove","lines":["<div class=\"form-group @if($errors->has('img')) has-error @endif\">","                       <label for=\"img-field\">写真</label>","                    <input type=\"text\" id=\"img-field\" name=\"img\" class=\"form-control\" value=\"{{ old(\"img\") }}\"/>","                       @if($errors->has(\"img\"))","                        <span class=\"help-block\">{{ $errors->first(\"img\") }}</span>","                       @endif","                    </div>","                <div class=\"well well-sm\">","                    <button type=\"button\" class=\"btn btn-primary\" onClick=\"E01_2_run()\">作成</button>","                    <a class=\"btn btn-link pull-right\" onClick=\"H01_run()\"><i class=\"glyphicon glyphicon-backward\"></i> 戻る</a>","                </div>"],"id":85,"ignore":true},{"start":{"row":31,"column":20},"end":{"row":42,"column":22},"action":"insert","lines":["","                    <div class=\"form-group @if($errors->has('img')) has-error @endif\">","                       <label for=\"img-field\">写真</label>","                    <input type=\"text\" id=\"img-field\" name=\"img\" class=\"form-control\" value=\"{{ old(\"img\") }}\"/>","                       @if($errors->has(\"img\"))","                        <span class=\"help-block\">{{ $errors->first(\"img\") }}</span>","                       @endif","                    </div>","                <div class=\"well well-sm\">","                    <button type=\"button\" class=\"btn btn-primary\" onClick=\"E01_2_run()\">作成</button>","                    <a class=\"btn btn-link pull-right\" onClick=\"H01_run()\"><i class=\"glyphicon glyphicon-backward\"></i> 戻る</a>","                </div>"]}],[{"start":{"row":31,"column":20},"end":{"row":42,"column":22},"action":"remove","lines":["","                    <div class=\"form-group @if($errors->has('img')) has-error @endif\">","                       <label for=\"img-field\">写真</label>","                    <input type=\"text\" id=\"img-field\" name=\"img\" class=\"form-control\" value=\"{{ old(\"img\") }}\"/>","                       @if($errors->has(\"img\"))","                        <span class=\"help-block\">{{ $errors->first(\"img\") }}</span>","                       @endif","                    </div>","                <div class=\"well well-sm\">","                    <button type=\"button\" class=\"btn btn-primary\" onClick=\"E01_2_run()\">作成</button>","                    <a class=\"btn btn-link pull-right\" onClick=\"H01_run()\"><i class=\"glyphicon glyphicon-backward\"></i> 戻る</a>","                </div>"],"id":86,"ignore":true},{"start":{"row":31,"column":20},"end":{"row":41,"column":22},"action":"insert","lines":["<div class=\"form-group @if($errors->has('img')) has-error @endif\">","                       <label for=\"img-field\">写真</label>","                    <input type=\"text\" id=\"img-field\" name=\"img\" class=\"form-control\" value=\"{{ old(\"img\") }}\"/>","                       @if($errors->has(\"img\"))","                        <span class=\"help-block\">{{ $errors->first(\"img\") }}</span>","                       @endif","                    </div>","                <div class=\"well well-sm\">","                    <button type=\"button\" class=\"btn btn-primary\" onClick=\"E01_2_run()\">作成</button>","                    <a class=\"btn btn-link pull-right\" onClick=\"H01_run()\"><i class=\"glyphicon glyphicon-backward\"></i> 戻る</a>","                </div>"]}],[{"start":{"row":31,"column":20},"end":{"row":41,"column":22},"action":"remove","lines":["<div class=\"form-group @if($errors->has('img')) has-error @endif\">","                       <label for=\"img-field\">写真</label>","                    <input type=\"text\" id=\"img-field\" name=\"img\" class=\"form-control\" value=\"{{ old(\"img\") }}\"/>","                       @if($errors->has(\"img\"))","                        <span class=\"help-block\">{{ $errors->first(\"img\") }}</span>","                       @endif","                    </div>","                <div class=\"well well-sm\">","                    <button type=\"button\" class=\"btn btn-primary\" onClick=\"E01_2_run()\">作成</button>","                    <a class=\"btn btn-link pull-right\" onClick=\"H01_run()\"><i class=\"glyphicon glyphicon-backward\"></i> 戻る</a>","                </div>"],"id":87,"ignore":true},{"start":{"row":31,"column":20},"end":{"row":41,"column":22},"action":"insert","lines":["<div class=\"form-group @if($errors->has('img')) has-error @endif\">","                       <label for=\"img-field\">写真</label>","                    <input type=\"text\" id=\"img-field\" name=\"img\" class=\"form-control\" value=\"{{ old(\"img\") }}\"/>","                       @if($errors->has(\"img\"))","                        <span class=\"help-block\">{{ $errors->first(\"img\") }}</span>","                       @endif","                    </div>","                <div class=\"well well-sm\">","                    <button type=\"button\" class=\"btn btn-primary\" onClick=\"E01_2_run()\">作成</button>","                    <a class=\"btn btn-link pull-right\" onClick=\"H01_run()\"><i class=\"glyphicon glyphicon-backward\"></i> 戻る</a>","                </div>"]}],[{"start":{"row":31,"column":20},"end":{"row":41,"column":22},"action":"remove","lines":["<div class=\"form-group @if($errors->has('img')) has-error @endif\">","                       <label for=\"img-field\">写真</label>","                    <input type=\"text\" id=\"img-field\" name=\"img\" class=\"form-control\" value=\"{{ old(\"img\") }}\"/>","                       @if($errors->has(\"img\"))","                        <span class=\"help-block\">{{ $errors->first(\"img\") }}</span>","                       @endif","                    </div>","                <div class=\"well well-sm\">","                    <button type=\"button\" class=\"btn btn-primary\" onClick=\"E01_2_run()\">作成</button>","                    <a class=\"btn btn-link pull-right\" onClick=\"H01_run()\"><i class=\"glyphicon glyphicon-backward\"></i> 戻る</a>","                </div>"],"id":88,"ignore":true},{"start":{"row":31,"column":20},"end":{"row":41,"column":22},"action":"insert","lines":["<div class=\"form-group @if($errors->has('img')) has-error @endif\">","                       <label for=\"img-field\">写真</label>","                    <input type=\"text\" id=\"img-field\" name=\"img\" class=\"form-control\" value=\"{{ old(\"img\") }}\"/>","                       @if($errors->has(\"img\"))","                        <span class=\"help-block\">{{ $errors->first(\"img\") }}</span>","                       @endif","                    </div>","                <div class=\"well well-sm\">","                    <button type=\"button\" class=\"btn btn-primary\" onClick=\"E01_2_run()\">作成</button>","                    <a class=\"btn btn-link pull-right\" onClick=\"H01_run()\"><i class=\"glyphicon glyphicon-backward\"></i> 戻る</a>","                </div>"]}],[{"start":{"row":31,"column":20},"end":{"row":41,"column":22},"action":"remove","lines":["<div class=\"form-group @if($errors->has('img')) has-error @endif\">","                       <label for=\"img-field\">写真</label>","                    <input type=\"text\" id=\"img-field\" name=\"img\" class=\"form-control\" value=\"{{ old(\"img\") }}\"/>","                       @if($errors->has(\"img\"))","                        <span class=\"help-block\">{{ $errors->first(\"img\") }}</span>","                       @endif","                    </div>","                <div class=\"well well-sm\">","                    <button type=\"button\" class=\"btn btn-primary\" onClick=\"E01_2_run()\">作成</button>","                    <a class=\"btn btn-link pull-right\" onClick=\"H01_run()\"><i class=\"glyphicon glyphicon-backward\"></i> 戻る</a>","                </div>"],"id":89,"ignore":true},{"start":{"row":31,"column":20},"end":{"row":42,"column":22},"action":"insert","lines":["","                    <div class=\"form-group @if($errors->has('img')) has-error @endif\">","                       <label for=\"img-field\">写真</label>","                    <input type=\"text\" id=\"img-field\" name=\"img\" class=\"form-control\" value=\"{{ old(\"img\") }}\"/>","                       @if($errors->has(\"img\"))","                        <span class=\"help-block\">{{ $errors->first(\"img\") }}</span>","                       @endif","                    </div>","                <div class=\"well well-sm\">","                    <button type=\"button\" class=\"btn btn-primary\" onClick=\"E01_2_run()\">作成</button>","                    <a class=\"btn btn-link pull-right\" onClick=\"H01_run()\"><i class=\"glyphicon glyphicon-backward\"></i> 戻る</a>","                </div>"]}],[{"start":{"row":31,"column":20},"end":{"row":42,"column":22},"action":"remove","lines":["","                    <div class=\"form-group @if($errors->has('img')) has-error @endif\">","                       <label for=\"img-field\">写真</label>","                    <input type=\"text\" id=\"img-field\" name=\"img\" class=\"form-control\" value=\"{{ old(\"img\") }}\"/>","                       @if($errors->has(\"img\"))","                        <span class=\"help-block\">{{ $errors->first(\"img\") }}</span>","                       @endif","                    </div>","                <div class=\"well well-sm\">","                    <button type=\"button\" class=\"btn btn-primary\" onClick=\"E01_2_run()\">作成</button>","                    <a class=\"btn btn-link pull-right\" onClick=\"H01_run()\"><i class=\"glyphicon glyphicon-backward\"></i> 戻る</a>","                </div>"],"id":90,"ignore":true},{"start":{"row":31,"column":20},"end":{"row":42,"column":22},"action":"insert","lines":["","                    <div class=\"form-group @if($errors->has('img')) has-error @endif\">","                       <label for=\"img-field\">写真</label>","                    <input type=\"text\" id=\"img-field\" name=\"img\" class=\"form-control\" value=\"{{ old(\"img\") }}\"/>","                       @if($errors->has(\"img\"))","                        <span class=\"help-block\">{{ $errors->first(\"img\") }}</span>","                       @endif","                    </div>","                <div class=\"well well-sm\">","                    <button type=\"button\" class=\"btn btn-primary\" onClick=\"E01_2_run()\">作成</button>","                    <a class=\"btn btn-link pull-right\" onClick=\"H01_run()\"><i class=\"glyphicon glyphicon-backward\"></i> 戻る</a>","                </div>"]}],[{"start":{"row":30,"column":26},"end":{"row":31,"column":20},"action":"remove","lines":["","                    "],"id":91,"ignore":true}],[{"start":{"row":33,"column":20},"end":{"row":33,"column":21},"action":"insert","lines":["1"],"id":92,"ignore":true}],[{"start":{"row":33,"column":20},"end":{"row":33,"column":21},"action":"remove","lines":["1"],"id":93,"ignore":true},{"start":{"row":33,"column":20},"end":{"row":33,"column":24},"action":"insert","lines":["    "]}],[{"start":{"row":32,"column":21},"end":{"row":32,"column":23},"action":"remove","lines":["  "],"id":94,"ignore":true}],[{"start":{"row":32,"column":20},"end":{"row":32,"column":21},"action":"remove","lines":[" "],"id":95,"ignore":true}],[{"start":{"row":32,"column":20},"end":{"row":32,"column":24},"action":"insert","lines":["    "],"id":96,"ignore":true}],[{"start":{"row":34,"column":23},"end":{"row":34,"column":27},"action":"insert","lines":["    "],"id":97,"ignore":true}],[{"start":{"row":34,"column":25},"end":{"row":34,"column":27},"action":"remove","lines":["  "],"id":98,"ignore":true}],[{"start":{"row":34,"column":24},"end":{"row":34,"column":25},"action":"remove","lines":[" "],"id":99,"ignore":true}],[{"start":{"row":35,"column":24},"end":{"row":35,"column":28},"action":"insert","lines":["    "],"id":100,"ignore":true}],[{"start":{"row":36,"column":23},"end":{"row":36,"column":24},"action":"insert","lines":[" "],"id":101,"ignore":true}],[{"start":{"row":38,"column":0},"end":{"row":38,"column":4},"action":"insert","lines":["    "],"id":102,"ignore":true},{"start":{"row":39,"column":0},"end":{"row":39,"column":4},"action":"insert","lines":["    "]},{"start":{"row":40,"column":0},"end":{"row":40,"column":4},"action":"insert","lines":["    "]},{"start":{"row":41,"column":0},"end":{"row":41,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":3,"column":2},"end":{"row":3,"column":6},"action":"remove","lines":["<!--"],"id":103,"ignore":true},{"start":{"row":3,"column":127},"end":{"row":3,"column":130},"action":"remove","lines":["-->"]}],[{"start":{"row":4,"column":4},"end":{"row":5,"column":18},"action":"insert","lines":["@endsection","@section('header')"],"id":104,"ignore":true}],[{"start":{"row":0,"column":23},"end":{"row":1,"column":18},"action":"insert","lines":["","@extends('layout')"],"id":105,"ignore":true}],[{"start":{"row":1,"column":0},"end":{"row":1,"column":18},"action":"remove","lines":["@extends('layout')"],"id":106,"ignore":true}],[{"start":{"row":1,"column":0},"end":{"row":1,"column":15},"action":"insert","lines":["@section('css')"],"id":107,"ignore":true}],[{"start":{"row":2,"column":0},"end":{"row":3,"column":19},"action":"remove","lines":["","@section('content')"],"id":108,"ignore":true},{"start":{"row":2,"column":0},"end":{"row":2,"column":1},"action":"insert","lines":["¥"]}],[{"start":{"row":2,"column":1},"end":{"row":2,"column":2},"action":"insert","lines":["¥"],"id":109,"ignore":true}],[{"start":{"row":2,"column":0},"end":{"row":2,"column":2},"action":"remove","lines":["¥¥"],"id":110,"ignore":true}],[{"start":{"row":2,"column":0},"end":{"row":3,"column":19},"action":"insert","lines":["","@section('content')"],"id":111,"ignore":true}],[{"start":{"row":2,"column":0},"end":{"row":3,"column":19},"action":"remove","lines":["","@section('content')"],"id":112,"ignore":true},{"start":{"row":2,"column":0},"end":{"row":2,"column":2},"action":"insert","lines":["¥¥"]}],[{"start":{"row":2,"column":0},"end":{"row":2,"column":2},"action":"remove","lines":["¥¥"],"id":113,"ignore":true}],[{"start":{"row":0,"column":0},"end":{"row":70,"column":0},"action":"remove","lines":["@extends('layouts.app')","@section('css')","","  <link href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css\" rel=\"stylesheet\">","    @endsection","@section('header')","","@section('content')","    @include('error')","<div class=\"container\">","    <div class=\"page-header\">","        <h1><i class=\"glyphicon glyphicon-plus\"></i> Visions / Create </h1>","    </div>","    <div class=\"row\">","        <div class=\"col-md-12\">","","            <form name=\"changeform\" method=\"POST\">","","                <div class=\"form-group @if($errors->has('title')) has-error @endif\">","                       <label for=\"title-field\">タイトル</label>","                    <input type=\"text\" id=\"title-field\" name=\"title\" class=\"form-control\" value=\"{{ old(\"title\") }}\"/>","                       @if($errors->has(\"title\"))","                        <span class=\"help-block\">{{ $errors->first(\"title\") }}</span>","                       @endif","                    </div>","                    <div class=\"form-group @if($errors->has('msg')) has-error @endif\">","                       <label for=\"msg-field\">詳細</label>","                    <textarea class=\"form-control\" id=\"msg-field\" rows=\"3\" name=\"description\">{{ old(\"description\") }}</textarea>","                       @if($errors->has(\"description\"))","                        <span class=\"help-block\">{{ $errors->first(\"description\") }}</span>","                       @endif","                    </div>","                    <div class=\"form-group @if($errors->has('img')) has-error @endif\">","                        <label for=\"img-field\">写真</label>","                        <input type=\"text\" id=\"img-field\" name=\"img\" class=\"form-control\" value=\"{{ old(\"img\") }}\"/>","                        @if($errors->has(\"img\"))","                            <span class=\"help-block\">{{ $errors->first(\"img\") }}</span>","                        @endif","                    </div>","                    <div class=\"well well-sm\">","                        <button type=\"button\" class=\"btn btn-primary\" onClick=\"E01_2_run()\">作成</button>","                        <a class=\"btn btn-link pull-right\" onClick=\"H01_run()\"><i class=\"glyphicon glyphicon-backward\"></i> 戻る</a>","                    </div>","{{ csrf_field() }}","            </form>","","        </div>","    </div>","</div>","@endsection","@section('scripts')","  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/js/bootstrap-datepicker.min.js\"></script>","  <script>","    $('.date-picker').datepicker({","    });","  </script>","<script type=\"text/javascript\">","/* Vision売却確認画面 */","function E01_2_run() {","    window.document.changeform.action = \"{{ url('connect/sell_confirm') }}\";","    window.document.changeform.method = \"POST\";","    window.document.changeform.submit();","}","function H01_run() {","\twindow.document.changeform.action = \"{{ url('home/home_own_timeline') }}\";","    window.document.changeform.method = \"POST\";","    window.document.changeform.submit();","}","</script>","@endsection",""],"id":114,"ignore":true}],[{"start":{"row":0,"column":0},"end":{"row":69,"column":0},"action":"insert","lines":["@extends('layout')","@section('css')","  <link href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css\" rel=\"stylesheet\">","@endsection","@section('header')","    <div class=\"page-header\">","        <h1><i class=\"glyphicon glyphicon-plus\"></i> Visions / Create </h1>","    </div>","@endsection","","@section('content')","    @include('error')","","    <div class=\"row\">","        <div class=\"col-md-12\">","","            <form name=\"changeform\" method=\"POST\">","","                <div class=\"form-group @if($errors->has('title')) has-error @endif\">","                       <label for=\"title-field\">タイトル</label>","                    <input type=\"text\" id=\"title-field\" name=\"title\" class=\"form-control\" value=\"{{ old(\"title\") }}\"/>","                       @if($errors->has(\"title\"))","                        <span class=\"help-block\">{{ $errors->first(\"title\") }}</span>","                       @endif","                    </div>","                    <div class=\"form-group @if($errors->has('msg')) has-error @endif\">","                       <label for=\"msg-field\">詳細</label>","                    <textarea class=\"form-control\" id=\"msg-field\" rows=\"3\" name=\"description\">{{ old(\"description\") }}</textarea>","                       @if($errors->has(\"description\"))","                        <span class=\"help-block\">{{ $errors->first(\"description\") }}</span>","                       @endif","                    </div>","                    <div class=\"form-group @if($errors->has('img')) has-error @endif\">","                       <label for=\"img-field\">写真</label>","                    <input type=\"text\" id=\"img-field\" name=\"img\" class=\"form-control\" value=\"{{ old(\"img\") }}\"/>","                       @if($errors->has(\"img\"))","                        <span class=\"help-block\">{{ $errors->first(\"img\") }}</span>","                       @endif","                    </div>","                <div class=\"well well-sm\">","                    <button type=\"button\" class=\"btn btn-primary\" onClick=\"E01_2_run()\">作成</button>","                    <a class=\"btn btn-link pull-right\" onClick=\"H01_run()\"><i class=\"glyphicon glyphicon-backward\"></i> 戻る</a>","                </div>","{{ csrf_field() }}","            </form>","","        </div>","    </div>","@endsection","@section('scripts')","  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/js/bootstrap-datepicker.min.js\"></script>","  <script>","    $('.date-picker').datepicker({","    });","  </script>","<script type=\"text/javascript\">","/* Vision売却確認画面 */","function E01_2_run() {","    window.document.changeform.action = \"{{ url('connect/sell_confirm') }}\";","    window.document.changeform.method = \"POST\";","    window.document.changeform.submit();","}","function H01_run() {","\twindow.document.changeform.action = \"{{ url('home/home_own_timeline') }}\";","    window.document.changeform.method = \"POST\";","    window.document.changeform.submit();","}","</script>","@endsection",""],"id":115,"ignore":true}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":0,"column":0},"end":{"row":0,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1514622437321}