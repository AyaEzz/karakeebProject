@extends('layouts.app')

@section('content')
    <!-- Slider -->
    <div class="slider">
        <ul class="rslides" id="slider">
            <li>
                <div class="w3ls-slide-text">
                    <h3>اعلن أى شئ مجانا </h3>
                    <a href="{{route('advertisment.index')}}" class="w3layouts-explore-all">تصفح كل الفئات</a>
                </div>
            </li>
            <li>
                <div class="w3ls-slide-text">
                    <h3>سوف تجد أجمد العروض </h3>
                    <a href="categories.html" class="w3layouts-explore">استكشف </a>
                </div>
            </li>
            <li>
                <div class="w3ls-slide-text">
                    <h3>ابنى منزلك مثل ما تحلم به </h3>
                    <a href="real-estate.html" class="w3layouts-explore">استكشف</a>
                </div>
            </li>
            <li>
                <div class="w3ls-slide-text">
                    <h3>حلمك عندنا </h3>
                    <a href="bikes.html" class="w3layouts-explore">استكشف</a>
                </div>
            </li>

        </ul>
    </div>
    <!-- //Slider -->
    <!-- content-starts-here -->
    <div class="main-content">
        <div class="w3-categories">
            <h3>تصفح كل الفئات </h3>
            <div class="container">
                <div class="col-md-3">
                    <div class="focus-grid w3layouts-boder1">
                        <a class="btn-8" href="{{route('category.show',['type'=>'mobiles'])}}">
                            <div class="focus-border">
                                <div class="focus-layout">
                                    <div class="focus-image"><i class="fa fa-mobile"></i></div>
                                    <h4 class="clrchg">موبايلات </h4>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="focus-grid w3layouts-boder2">
                        <a class="btn-8" href="{{route('category.show',['type'=>'Electronics'])}}">
                            <div class="focus-border">
                                <div class="focus-layout">
                                    <div class="focus-image"><i class="fa fa-laptop"></i></div>
                                    <h4 class="clrchg"> الأجهزه الكهربائيه </h4>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="focus-grid w3layouts-boder3">
                        <a class="btn-8" href="{{route('category.show',['type'=>'cars'])}}">
                            <div class="focus-border">
                                <div class="focus-layout">
                                    <div class="focus-image"><i class="fa fa-car"></i></div>
                                    <h4 class="clrchg">سيارات</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="focus-grid w3layouts-boder4">
                        <a class="btn-8" href="{{route('category.show',['type'=>'cycles'])}}">
                            <div class="focus-border">
                                <div class="focus-layout">
                                    <div class="focus-image"><i class="fa fa-motorcycle"></i></div>
                                    <h4 class="clrchg">دراجات </h4>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="focus-grid w3layouts-boder5">
                        <a class="btn-8" href="{{route('category.show',['type'=>'furnitures'])}}">
                            <div class="focus-border">
                                <div class="focus-layout">
                                    <div class="focus-image"><i class="fa fa-wheelchair"></i></div>
                                    <h4 class="clrchg">أثاث</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="focus-grid w3layouts-boder7">
                        <a class="btn-8" href="{{route('category.show',['type'=>'funs'])}}">
                            <div class="focus-border">
                                <div class="focus-layout">
                                    <div class="focus-image"><i class="fa fa-book"></i></div>
                                    <h4 class="clrchg">الترفيهات </h4>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="focus-grid w3layouts-boder8">
                        <a class="btn-8" href="{{route('category.show',['type'=>'fashions'])}}">
                            <div class="focus-border">
                                <div class="focus-layout">
                                    <div class="focus-image"><i class="fa fa-asterisk"></i></div>
                                    <h4 class="clrchg">الموضه </h4>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="focus-grid w3layouts-boder9">
                        <a class="btn-8" href="{{route('category.show',['type'=>'games'])}}">
                            <div class="focus-border">
                                <div class="focus-layout">
                                    <div class="focus-image"><i class="fa fa-gamepad"></i></div>
                                    <h4 class="clrchg">العاب</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>



                <div class="clearfix"></div>
            </div>
        </div>
        <!-- most-popular-ads -->
        <div class="w3l-popular-ads">
            <h3>آخر العروض </h3>
            <div class="w3l-popular-ads-info">
                <div class="col-md-4 w3ls-portfolio-left">
                    <div class="portfolio-img event-img">
                        <img src="images/ad1.jpg" class="img-responsive" alt=""/>
                        <div class="over-image"></div>
                    </div>
                    <div class="portfolio-description">
                        <h4><a href="{{route('advertisment.index')}}">سيارات</a></h4>
                        <p>سياره اخر موديل استعمال خارجى </p>
                        <a href="{{route('advertisment.index')}}">
                            <span>اكتشف </span>
                        </a>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="col-md-4 w3ls-portfolio-left">
                    <div class="portfolio-img event-img">
                        <img src="images/ad2.jpg" class="img-responsive" alt=""/>
                        <div class="over-image"></div>
                    </div>
                    <div class="portfolio-description">
                        <h4><a href="{{route('advertisment.index')}}">عقارات </a></h4>
                        <p>شقه 150 متر تطل على منظر متميز  </p>
                        <a href="{{route('advertisment.index')}}">
                            <span>اكتشف </span>
                        </a>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="col-md-4 w3ls-portfolio-left">
                    <div class="portfolio-img event-img">
                        <img src="images/ad3.jpg" class="img-responsive" alt=""/>
                        <div class="over-image"></div>
                    </div>
                        <div class="portfolio-description">
                        <h4><a href="{{route('advertisment.index')}}">العاب</a></h4>
                        <p>العاب مثيرة </p>
                        <a href="{{route('advertisment.index')}}">
                            <span>اكتشف</span>
                        </a>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="col-md-4 w3ls-portfolio-left">
                    <div class="portfolio-img event-img">
                        <img src="images/ad4.jpg" class="img-responsive" alt=""/>
                        <div class="over-image"></div>
                    </div>
                    <div class="portfolio-description">
                        <h4><a href="{{route('advertisment.index')}}">اكسسوارات</a></h4>
                        <p>اكسسوار عربيه رائع </p>
                        <a href="{{route('advertisment.index')}}">
                            <span>اكتشف</span>
                        </a>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="col-md-4 w3ls-portfolio-left">
                    <div class="portfolio-img event-img">
                        <img src="images/ad5.jpg" class="img-responsive" alt=""/>
                        <div class="over-image"></div>
                    </div>
                        <div class="portfolio-description">
                        <h4><a href="{{route('advertisment.index')}}">اأثاث</a></h4>
                        <p>اثاث كلاسكي وحديث </p>
                        <a href="{{route('advertisment.index')}}">
                            <span>اكتشف</span>
                        </a>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="col-md-4 w3ls-portfolio-left">
                    <div class="portfolio-img event-img">
                        <img src="images/ad6.jpg" class="img-responsive" alt=""/>
                        <div class="over-image"></div>
                    </div>
                    <div class="portfolio-description">
                        <h4><a href="{{route('advertisment.index')}}">ملابس </a></h4>
                        <p>سويت سيرت اخضر </p>
                        <a href="{{route('advertisment.index')}}">
                            <span>اكتشف </span>
                        </a>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <!-- most-popular-ads -->

        <!--partners-->

        <!--//partners-->
        <!-- mobile app -->
        <div class="agile-info-mobile-app">
            <div class="container">
                <div class="col-md-5 w3-app-left">
                    <a href="#"><img src="images/9.png" alt=""></a>
                </div>
                <div class="col-md-7 w3-app-right">
                    <h3>كراكيب <span>أسهل </span> طريقه لتبادل واستخدام الأشياء المستخدمه </h3>
                    <p></p>

                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

    <!-- Navigation-Js-->
    <script type="text/javascript" src="{{asset('js/main.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/classie.js')}}"></script>
    <!-- //Navigation-Js-->
    <!-- js -->
    <script type="text/javascript" src="{{asset('"js/jquery.min.js')}}"></script>
    <!-- js -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{asset('js/bootstrap.js')}}"></script>
    <script src="{{asset('js/bootstrap-select.js')}}"></script>
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
    <!-- language-select -->
    <script type="text/javascript" src="js/jquery.leanModal.min.js"></script>
    <link href="{{asset('css/jquery.uls.css')}}" rel="stylesheet"/>
    <link href="{{asset('css/jquery.uls.grid.css')}}" rel="stylesheet"/>
    <link href="{{asset('css/jquery.uls.lcd.css')}}" rel="stylesheet"/>
    <!-- Source -->
    <script src="{{asset('js/jquery.uls.data.js')}}"></script>
    <script src="{{asset('js/jquery.uls.data.utils.js')}}"></script>
    <script src="js/jquery.uls.lcd.js"></script>
    <script src="js/jquery.uls.languagefilter.js"></script>
    <script src="js/jquery.uls.regionfilter.js"></script>
    <script src="js/jquery.uls.core.js"></script>
    <script>
        $( document ).ready( function() {
            $( '.uls-trigger' ).uls( {
                onSelect : function( language ) {
                    var languageName = $.uls.data.getAutonym( language );
                    $( '.uls-trigger' ).text( languageName );
                },
                quickList: ['en', 'hi', 'he', 'ml', 'ta', 'fr'] //FIXME
            } );
        } );
    </script>
    <!-- //language-select -->
    <script type="text/javascript" src="js/jquery.flexisel.js"></script><!-- flexisel-js -->
    <script type="text/javascript">
        $(window).load(function() {
            $("#flexiselDemo3").flexisel({
                visibleItems:1,
                animationSpeed: 1000,
                autoPlay: true,
                autoPlaySpeed: 5000,
                pauseOnHover: true,
                enableResponsiveBreakpoints: true,
                responsiveBreakpoints: {
                    portrait: {
                        changePoint:480,
                        visibleItems:1
                    },
                    landscape: {
                        changePoint:640,
                        visibleItems:1
                    },
                    tablet: {
                        changePoint:768,
                        visibleItems:1
                    }
                }
            });

        });
    </script>
    <!-- Slider-JavaScript -->
    <script src="js/responsiveslides.min.js"></script>
    <script>
        $(function () {
            $("#slider").responsiveSlides({
                auto: true,
                pager: false,
                nav: true,
                speed: 500,
                maxwidth: 800,
                namespace: "large-btns"
            });

        });
    </script>
    <!-- //Slider-JavaScript -->
    <!-- here stars scrolling icon -->
    <script type="text/javascript">
        $(document).ready(function() {
            /*
                var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear'
                };
            */

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
    @endsection