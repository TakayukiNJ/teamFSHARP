@section('footer')

<!--     *********    メッセージ     *********      -->
<!--<div class="cd-section section-white" id="contact-us">-->
<!--    <div class="contactus-1 section-image" style="background-image: url('{{ url('/') }}/../img/sections/soroush-karimi.jpg')">-->
<!--        <div class="container">-->
<!--            <div class="row">-->
<!--                <div class="col-md-10 ml-auto mr-auto">-->
<!--                    <div class="card card-contact no-transition">-->
<!--                        <h3 class="card-title text-center">F#にメッセージ</h3>-->
                        
<!--                        <form role="form" id="contact-form" method="post">-->
<!--                            <div class="card-body">-->
<!--                                <div class="row">-->
<!--                                    <div class="col-md-6">-->
<!--                                        <div class="form-group label-floating">-->
<!--                                            <label class="control-label">姓</label>-->
<!--                                            <input type="text" name="name" class="form-control" placeholder="桃野">-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="col-md-6">-->
<!--                                        <div class="form-group label-floating">-->
<!--                                            <label class="control-label">名</label>-->
<!--                                            <input type="text" name="name" class="form-control" placeholder="太郎">-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="form-group label-floating">-->
<!--                                    <label class="control-label">メールアドレス</label>-->
<!--                                    <input type="email" name="email" class="form-control" placeholder="Email"/>-->
<!--                                </div>-->
<!--                                <div class="form-group label-floating">-->
<!--                                    <label class="control-label">メッセージ</label>-->
<!--                                    <textarea name="message" class="form-control" id="message" rows="6" placeholder="Message"></textarea>-->
                                
<!--                                    <div class="checkbox">-->
<!--                                        <input id="checkbox1" type="checkbox">-->
<!--                                        <label for="checkbox1">-->
<!--                                            メッセージの公開を許可-->
<!--                                        </label>-->
<!--                                    </div>-->
<!--                                    <button type="submit" class="btn btn-primary pull-right">-->
<!--                                        Send Message-->
<!--                                    </button>-->
<!--                                    <br>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </form>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->

<div class="container">
    <div class="row">
        <div class="col-md-2 text-center col-sm-3 col-12 ml-auto mr-auto">
            <h4>F#</h4>
            <div class="social-area">
                <a class="btn btn-just-icon btn-round btn-facebook" href="https://www.facebook.com/nj.takayuki">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
                <a class="btn btn-just-icon btn-round btn-twitter" href="https://twitter.com/IbRducocvvsX0bC">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
            </div>
        </div>
        <div class="col-md-9 col-sm-9 col-12 ml-auto mr-auto">
            <div class="row">
                <!--<div class="col-md-3 col-sm-3 col-6">-->
                <!--    <div class="links">-->
                <!--        <ul class="uppercase-links stacked-links">-->
                <!--            <li>-->
                <!--                <a href="#home" >-->
                <!--                    Home-->
                <!--                </a>-->
                <!--            </li>-->
                <!--            <li>-->
                <!--                <a href="#">-->
                <!--                    Discover-->
                <!--                </a>-->
                <!--            </li>-->
                <!--            <li>-->
                <!--                <a href="#paper-kit">-->
                <!--                    Blog-->
                <!--                </a>-->
                <!--            </li>-->
                <!--            <li>-->
                <!--                <a href="#paper-kit">-->
                <!--                    Live Support-->
                <!--                </a>-->
                <!--            </li>-->
                <!--            <li>-->
                <!--                <a href="#paper-kit">-->
                <!--                    Money Back-->
                <!--                </a>-->
                <!--            </li>-->
                <!--        </ul>-->

                <!--    </div>-->
                <!--</div>-->
                <div class="col-md-3 col-sm-3 col-6">
                    <div class="links">
                        <ul class="uppercase-links stacked-links">
                            <li>
                                <a href="https://goo.gl/YZLao1">
                                    Contact Us
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('home/home_own_timeline') }}">
                                    <!--We're Hiring-->
                                    Own page
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('npo/teamFSHARP') }}">
                                    About Us
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-6">
                    <div class="links">
                        <ul class="uppercase-links stacked-links">
                            <li>
                                <a href="{{ url('/npo/teamFSHARP#my-tab-content') }}">
                                    Origin
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/npo/teamFSHARP#teams') }}">
                                    Team F# members
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/npo/teamFSHARP#pricing') }}">
                                    Support with F#
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--<div class="col-md-3 col-sm-3 col-6">-->
                <!--    <div class="links">-->
                <!--        <ul class="stacked-links">-->
                <!--            <li>-->
                <!--                <h4>3<br /> <small>NPOs</small></h4>-->
                <!--            </li>-->
                <!--            <li>-->
                <!--                <h4>20<br /> <small>Users</small></h4>-->
                <!--            </li>-->

                <!--        </ul>-->
                <!--    </div>-->
                <!--</div>-->
            </div>
            <hr />
            <div class="copyright">
                <div class="pull-left">
                    &copy; <script>document.write(new Date().getFullYear())</script> FSHARP, made with love
                </div>
                <div class="links pull-right">
                    <ul>
                        <!--<li>-->
                        <!--    <a href="#paper-kit">-->
                        <!--        Company Policy-->
                        <!--    </a>-->
                        <!--</li>-->
                        <!--|-->
                        <li>
                            <a href="{{ url('/terms') }}">
                                Terms
                            </a>
                        </li>
                        |
                        <li>
                            <a href="{{ url('/privacy_policy') }}">
                                Privacy policy
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
