@section('headers')
<div class="cd-section" id="headers">
    <!-- <div class="page-header" style="background-image: linear-gradient(red, yellow, green);"> -->
    <div class="page-header" style="background-image: url('https://images.unsplash.com/photo-1486310662856-32058c639c65?dpr=2&auto=format&fit=crop&w=1500&h=1125&q=80&cs=tinysrgb&crop=');">
        <div class="filter"></div>
        <div class="content-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="iframe-container">
                            <iframe src="https://www.youtube.com/embed/xdgqBFFQXKY?modestbranding=1&autohide=1&showinfo=0" frameborder="0" allowfullscreen height="250"></iframe>
                        </div>
                    </div>
                    <div class="col-md-6  ml-auto">
                        <h2 class="title">{{ $npo_info->title }}</h2>
                        <h5 class="description">{{ $npo_info->subtitle }}</h5>
                        <br>
                        <div>
                        <a href="https://www.youtube.com/watch?v=RcmrbNRK-jY" target="_blank" class="btn btn-danger">
                            支援する（残り4/5）
                        </a>
                        </div>
                        <br>
                        <div class="progress">
                            <div class="progress-bar progress-bar-success" role="progressbar" style="width: 20%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="0"></div>
                        </div>
                        <br>
                        <!--
                        <div class="progress">
                            <div class="progress-bar progress-bar-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div><br/>
                        <div class="progress">
                            <div class="progress-bar progress-bar-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div><br/>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                            <div class="progress-bar progress-bar-success" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                            <div class="progress-bar progress-bar-warning" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                        </div> -->

                        
                        <a href="https://twitter.com/intent/tweet?text={{ $npo_info->subtitle }} {{ $npo_info->title }}の支援のために。ひとりでも多くの方に広めてください♪%20-%20FSHARP%20%20https://fsharp.me/npo/{{ $npo_info->npo_name }}" class="btn btn-round btn-twitter">
                            <!--<i class="twitter-share-button" data-href="https://fsharp.me/npo/{{ $npo_info->npo_name }}" aria-hidden="true" data-text="{{ $npo_info->subtitle }} {{ $npo_info->title }}の支援のために。ひとりでも多くの方に広めてください♪%20-%20F#%20%20https://fsharp.me/npo/{{ $npo_info->npo_name }}" data-show-count="true" data-dnt="true"></i>Tweet-->
                            <i class="fa fa-twitter" aria-hidden="true"></i> ツイート
                        </a>
                        <!--<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Ffsharp.me%2F&amp;src=sdkpreparse" class="btn btn-round btn-facebook">-->
                            
                        <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Ffsharp.me/npo/{{ $npo_info->npo_name }}%2F&amp;src=sdkpreparse" class="btn btn-round btn-facebook" data-layout="button_count">
                            <i class="fb-share-button" data-href="https://fsharp.me/npo/{{ $npo_info->npo_name }}" data-layout="button_count" data-size="small" data-mobile-iframe="true" aria-hidden="true"></i>
                        </a>
                        <!-- シェアボタンこみ -->
                        <!--<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Ffsharp.me%2F&amp;src=sdkpreparse" class="btn btn-round btn-facebook">-->
                        <!--    <i class="fb-like" data-href="https://fsharp/npo/{{ $npo_info->npo_name }}" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"></i>-->
                        <!--</a>-->
                        
                        
                        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                        
                        
                        
                        <script>(function(d, s, id) {
                          var js, fjs = d.getElementsByTagName(s)[0];
                          if (d.getElementById(id)) return;
                          js = d.createElement(s); js.id = id;
                          js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0&appId=1545608625538119&autoLogAppEvents=1';
                          fjs.parentNode.insertBefore(js, fjs);
                        }(document, 'script', 'facebook-jssdk'));</script>
                        
                        <!--<a class="fb-xfbml-parse-ignore">-->
                        
                        
                        <!--<a href="" class="btn btn-round btn-facebook">-->
                        <!--    <i class="fa fa-facebook" aria-hidden="true"></i> Share &middot; 1-->
                        <!--</a>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection