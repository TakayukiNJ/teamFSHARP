@extends('layouts.app')

@section('content')
<div class="container">
   
    <div class="row">
       
        <div class="col-md-8 col-md-offset-2">
            
            編集画面！！！！！！！！
            
            <br>
            <br>
  			    
            <!-- 目標 -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    1st目標達成金額
                </div>
                <div class="panel-body">
                    10,000,000円
                </div>
                <div class="panel-heading">
                    2nd目標達成金額
                </div>
                <div class="panel-body">
                    50,000,000円
                </div>
            </div>
            
            <a href="{{ url('/connect/sell') }}">
  			    <div class="center_column">
  			        <h2>新しいくじを発行</h2>
  			    <div>
  			</a>
  			<br>
  			
            <div class="panel panel-default">   
                <!-- リターン -->
                <div class="panel-heading">
                    優待くじ① 
                </div>
                <div class="panel-body">
                    優待内容: うまい棒1年分
                </div>
                <div class="panel-body">
                    金額: 1000円
                </div>
                <div class="panel-body">
                    残り: 100人
                </div>
                <div class="panel-body">
                    当選日: 2017年12月31日
                </div>
          		
                <div class="panel-heading">
                    優待くじ②
                </div>
                <div class="panel-body">
                    優待内容: うまい棒1年分
                </div>
                <div class="panel-body">
                    金額: 10000円
                </div>
                <div class="panel-body">
                    残り: 10人
                </div>
                <div class="panel-body">
                    当選日: 2018年1月18日
                </div>
                
                <div class="panel-heading">
                    優待くじ③ 
                </div>
                <div class="panel-body">
                    優待内容: マグロ1年分
                </div>
                <div class="panel-body">
                    金額: 100,000円
                </div>
                <div class="panel-body">
                    残り: 1人
                </div>
                <div class="panel-body">
                    当選日: 2018年2月2日
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
