@extends('layouts.app')

@section('content')


<!-- このページは2月以降に作成 -->


<div class="container">
   
    <div class="row">
       
        <div class="col-md-8 col-md-offset-2">
            
            チャット画面！！！！！！！！
            
            <br>
            <br>
  			    
            <div id="chat">
                <textarea v-model="message"></textarea>
                <br>
                <button type="button">送信</button>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/vue@2.5.17/dist/vue.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js"></script>
            <script>
        
                new Vue({
                    el: '#chat',
                    data: {
                        message: ''
                    }
                });
        
            </script>
  			    
  			    
  			    
  			    
  			    
  			    
            <!-- 目標 -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    hi!
                </div>
                <div class="panel-body">
                    こんにちは。
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
