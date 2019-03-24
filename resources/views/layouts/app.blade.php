<!DOCTYPE html>

<html lang="en">
<head>
    <title>Karakeeb</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"><!-- bootstrap-CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap-rtl.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-select.css')}}">

    <!-- bootstrap-select-CSS -->

    <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all" /><!-- style.css -->
    <link rel="stylesheet" href="{{asset('css/flexslider.css')}}" type="text/css" media="screen" /><!-- flexslider-CSS -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}" /><!-- fontawesome-CSS -->
    <link rel="stylesheet" href="{{asset('css/menu_sideslide.css')}}" type="text/css" media="all"><!-- Navigation-CSS -->
    <link rel="stylesheet" href="{{asset('css/profile.css')}}" />
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <!-- meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Resale Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //meta tags -->
    <!--fonts-->
    <link href='//fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

    <!--//fonts-->

    <!-- js -->
    <script type="text/javascript" src="{{asset("js/jquery.min.js")}}"></script>

    <script>
        window.Forum = <?php echo json_encode([
            'auth' => Auth::check(),
            'user_id' => Auth::check() ? Auth::user()->id : -1
        ]); ?>

    </script>

    <!-- js -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{asset("js/bootstrap.js")}}"></script>
    <script src="{{asset("js/bootstrap-select.js")}}"></script>
    <script>
        $(document).ready(function () {
            var mySelect = $('#first-disabled2');

            $('#special').on('click', function () {
                mySelect.find('option:selected').prop('disabled', true);
                mySelect.selectpicker('refresh');
            });

            $('#special2').on('click', function () {
                mySelect.find('option:disabled').prop('disabled', false);
                mySelect.selectpicker('refresh');
            });

            $('#basic2').selectpicker({
                liveSearch: true,
                maxOptions: 1
            });
        });
    </script>
</head>
<body>
<div id="app">
<!-- header -->
<header>
    <div class="w3ls-header"><!--header-one-->
        <div class="w3ls-header-left">

        </div>
        <div class="w3ls-header-right">
            <ul>
                <li class="dropdown head-dpdn">
                    @guest
                        <a href="{{ route('login') }}" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i> تسجيل دخول</a>
                        <a href="{{ route('register') }}" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i> إنشاء حساب</a>

                   @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                            @if(Auth::guard('web')->check())
                                {{ Auth::user()->firstname }}
                            @endif
                                @if(Auth::guard('admin')->check())
                                    {{ Auth::user()->name }}
                                @endif
                            <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu">

                            <li><a href="{{ route('user.chat.threads.index') }}">رسائلي {!! Auth::user()->hasUnreadMessages() ? '<span class="badge">' . Auth::user()->unreadMessageCount(). '</span>' : '' !!}</a></li>

                            <li>

                                @if(Auth::guard('web')->check())
                                <a href="{{ route('home') }}">الصفحة الشخصية</a>
                                @endif

                                @if(Auth::guard('admin')->check())
                                    <a href="{{ route('admin.dashboard') }}">الصفحة الشخصية</a>
                                @endif

                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    تسجيل خروج
                                </a>


                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>

                        </ul>
                    </li>
                    @endguest

                    </li>
                    <li class="dropdown head-dpdn">
                        <a href="/help"><i class="fa fa-question-circle" aria-hidden="true"></i> مساعده</a>
                    </li>
                    <li class="dropdown head-dpdn">
                        <a href="#"><span class="active uls-trigger"><i class="fa fa-language" aria-hidden="true"></i>اللغه</span></a>
                    </li>
                    <li class="dropdown head-dpdn">
                        <div class="header-right">
                            <!-- Large modal -->

                        </div>


                    </li>
            </ul>
        </div>

        <div class="clearfix"> </div>
    </div>
    <div class="container">
        <div class="agile-its-header">
            <div class="logo">
                <h1><a href="/"><span>كر</span>اكيب </a></h1>
            </div>
            <div class="agileits_search">
                <form action="{{route('category.store')}}" method="post">
                     {{csrf_field()}}
                    <input name="search" type="text" placeholder="كيف يمكننى مساعدتك"  />
                    <select id="agileinfo_search" name="category" >
                        <option value="all">كل الفئات </option>
                            <option value="Mobiles">موبايلات</option>
                            <option value="Electronics">الأجهزه الالكترونيه</option>
                            <option value="Cars">سيارات</option>
                            <option value="cycles">دراجات</option>
                            <option value="furnitures">أثاث</option>
                            <option value="funs">الترفيهيات </option>
                            <option value="fashions">الموضه </option>
                            <option value="games">العاب</option>

                    </select>
                    <button type="submit" class="btn btn-default" aria-label="Left Align">
                        <i class="fa fa-search" aria-hidden="true"> </i>
                    </button>
                </form>
                @if(!Auth::guard('admin')->check())
                    <a class="post-w3layouts-ad" href="{{route('advertisment.create')}}">قم بإنشاء إعلانك </a>
                @endif

            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</header>




        @yield('content')



</div>

<footer>
    <div class="w3-agileits-footer-top">
        <div class="container">
            <div class="wthree-foo-grids">
                <div class="col-md-3 wthree-footer-grid">
                    <h4 class="footer-head">من نحن </h4>
                    <p>هو أفضل موقع محلّي للإعلانات المُبوبة. حيث ستتمكّن من اعاره أو بيع وشراء أي شيئ ممكن أن تتخيله، من موبايلك القديم والمقاعد التي مللت منها أو حتى سيارتك، أو الشقة </p>

                </div>
                <div class="col-md-3 wthree-footer-grid">
                    <h4 class="footer-head">مساعده</h4>
                    <ul>
                        <li><a href="/help"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>كيف يعمل </a></li>
                        <li><a href="/feedback"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>رايك يهمنا </a></li>
                        <li><a href="contact.html"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>تواصل معنا</a></li>


                    </ul>
                </div>
                <div class="col-md-3 wthree-footer-grid">
                    <h4 class="footer-head">معلومات </h4>
                    <ul>

                        <li><a href="/terms"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>قواعد الاستخدام </a></li>
                        <li><a href="/privacy"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>الخصوصيه </a></li>
                    </ul>
                </div>
                <div class="col-md-3 wthree-footer-grid">
                    <h4 class="footer-head">تواصل معنا</h4>

                    <address>
                        <ul class="location">
                            <li><span class="glyphicon glyphicon-map-marker"></span></li>
                            <li>كراكيب سنتر للخدمات العامه </li>
                        </ul>
                        <div class="clearfix"> </div>
                        <ul class="location">
                            <li><span class="glyphicon glyphicon-earphone"></span></li>
                            <li>+0 561 111 235</li>
                        </ul>
                        <div class="clearfix"> </div>
                        <ul class="location">
                            <li><span class="glyphicon glyphicon-envelope"></span></li>
                            <li><a href="mailto:info@example.com">mail@example.com</a></li>
                        </ul>
                    </address>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="agileits-footer-bottom text-center">
        <div class="container">
            <div class="w3-footer-logo">
                <h1><a href="index.html"><span>كر</span>اكيب</a></h1>
            </div>
            <div class="w3-footer-social-icons">
                <ul>
                    <li><a class="facebook" href="#"><i class="fa fa-facebook" aria-hidden="true"></i><span>فيسبوك</span></a></li>
                    <li><a class="twitter" href="#"><i class="fa fa-twitter" aria-hidden="true"></i><span>تويتر</span></a></li>
                    <li><a class="flickr" href="#"><i class="fa fa-flickr" aria-hidden="true"></i><span>فليكر</span></a></li>
                    <li><a class="googleplus" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i><span>جوجل بلس</span></a></li>

                </ul>
            </div>
            <div class="copyrights">
                <p> © 2017 حقوق الملكيه لصالح معهد تكنولوجيا المعلومات   <a href=""> كراكيب </a></p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</footer>

<script>
    window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
            'pusherKey' => config('broadcasting.connections.pusher.key'),
            'pusherCluster' => config('broadcasting.connections.pusher.options.cluster')
        ]) !!};
</script>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    {{--<script src={{asset("assets/js/jquery-1.8.2.min.js")}}></script>
    <script src={{asset("assets/bootstrap/js/bootstrap.min.js")}}></script>
    <script src={{asset("assets/js/jquery.backstretch.min.js")}}></script>
    <script src={{asset("assets/js/scripts.js")}}></script>--}}
<!-- here stars scrolling icon -->
<script type="text/javascript">
    $(document).ready(function() {

        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
    });
</script>
<!-- start-smoth-scrolling -->
<!-- //here ends scrolling icon -->

</body>
</html>
