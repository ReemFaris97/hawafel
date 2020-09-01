<!DOCTYPE html>
<html>

<head>
    <!-- /////////////////////|||||||Start Layout |||||||||||||||||||| -->
    <meta charset="UTF-8" lang="ar">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <!------ start generated favicon ---->
    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('website/dist/img/favicon/apple-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset('website/dist/img/favicon/apple-icon-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('website/dist/img/favicon/apple-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('website/dist/img/favicon/apple-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('website/dist/img/favicon/apple-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('website/dist/img/favicon/apple-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('website/dist/img/favicon/apple-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('website/dist/img/favicon/apple-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('website/dist/img/favicon/apple-icon-180x180.png')}}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{asset('website/dist/img/favicon/android-icon-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('website/dist/img/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('website/dist/img/favicon/favicon-96x96.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('website/dist/img/favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('website/dist/img/favicon/manifest.json')}}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!------ End generated favicon ----->
    <link rel="stylesheet" href="{{asset('website/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('website/dist/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('website/dist/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('website/dist/css/button.css')}}">
    <link rel="stylesheet" href="{{asset('website/dist/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('website/scss/first.css')}}">
    @yield('styles')
    <!-- /////////////////////|||||||End Layout |||||||||||||||||||| -->
</head>

<body>
    <div class="body-overlay"></div>
    <!-- Start Loading-Page -->
    <div class="loader">
        <svg width="200" height="200" id="svg">
            <circle id="dot1" class="shape" />
            <circle id="dot2" class="shape" />
            <circle id="dot3" class="shape" />
            <circle id="dot4" class="shape" />
        </svg>
    </div>
    <!-- End Loading-Page -->

        <!-- /////////////////////|||||| Start Navbar |||||||||||||||||||||||||||| -->
        <div class="navbar">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-md-3 col-sm-2 col-xs-3">
                        <div class="nav-right">
                            <a href="{{url('/')}}" class="logo-nav">
                                <img src="{{asset('website/dist/img/logo.png')}}">
                            </a>
                        </div>
                    </div>

                    <div class="col-md-5 col-sm-5 col-xs-9">
                        <div class="navy">
                            <ul class="nav cf" id="ul1">
                                <li><a href="{{url('/')}}" class="active">الرئيسية</a></li>
                                <li><a href="{{url('categories')}}">الأقسام</a></li>
                                <li><a href="{{url('services')}}">الطلبات</a></li>
                                <li><a href="{{url('favourites')}}">المفضلة</a></li>
                                <li><a href="{{url('contact-us')}}">مكتبة الصور والفيديوهات</a></li>
                            </ul>
                          </div>
                    </div>

                    <div class="col-md-4 col-sm-5 col-xs-12">
                        <div class="xs-flex-r">
                            <div id="nav-icon1">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                            <ul class="nav-tools">

                        <!-- /////////////////////||||||||||| Start Searchbar |||||||||||||||||||| -->
                                 <li>
                                    <form action="{{url('products')}}" method="GET" class="search-form" role="search">
                                        <div class="form-group" id="search">
                                        <input type="text" class="form-control" placeholder="بحث">
                                        <button type="submit" class="form-control form-control-submit">بحث</button>
                                        <span class="nav-icon"> <i class="fas fa-search"></i></span>
                                        </div>
                                    </form>
                                </li>
                        <!-- /////////////////////||||||||||| End Searchbar |||||||||||||||||||| -->

                        <!-- /////////////////////||||||||||| Start Nav Cart |||||||||||||||||||| -->
                                <li>
                                    <a href="{{url('cart')}}">
                                            <span class="nav-icon"> <i class="fas fa-shopping-cart"></i></span>
                                    </a>
                                </li>
                        <!-- /////////////////////||||||||||| End Nav Cart |||||||||||||||||||| -->

                        <!-- /////////////////////||||||||||| Start Nav Profile  |||||||||||||||||||| -->
                        <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <span class="nav-icon"><i class="fas fa-user"></i></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="{{url('my-profile')}}#!">
                                                <h4>الحساب الشخصى</h4>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{url('/')}}#!">
                                                <h4>تسجيل الخروج</h4>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                        <!-- /////////////////////||||||||||| End Nav Profile  |||||||||||||||||||| -->

                        <!-- /////////////////////||||||||||| Start Nav Notifications  |||||||||||||||||||| -->
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <span class="nav-icon"><i class="fas fa-bell"></i></span>
                                    </a>
                                    <ul class="dropdown-menu andNotifi">
                                        <li>
                                            <a href="{{url('my-profile')}}#!" class="flexx">
                                                <span class="bell"><i class="fas fa-bell"></i></span>
                                                <div class="notify">
                                                    <h4>إشعار جديد</h4>
                                                    <p>هذا النص هو مثال لنص يمكن أن يستبدل فى المساحة هذا النص هذا النص</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{url('my-profile')}}#!" class="flexx">
                                                <span class="bell"><i class="fas fa-bell"></i></span>
                                                <div class="notify">
                                                    <h4>إشعار جديد</h4>
                                                    <p>هذا النص هو مثال لنص يمكن أن يستبدل فى المساحة هذا النص هذا النص</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{url('my-profile')}}#!" class="flexx">
                                                <span class="bell"><i class="fas fa-bell"></i></span>
                                                <div class="notify">
                                                    <h4>إشعار جديد</h4>
                                                    <p>هذا النص هو مثال لنص يمكن أن يستبدل فى المساحة هذا النص هذا النص</p>
                                                </div>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{url('my-profile')}}#!" class="flexx">
                                                <span class="bell"><i class="fas fa-bell"></i></span>
                                                <div class="notify">
                                                    <h4>إشعار جديد</h4>
                                                    <p>هذا النص هو مثال لنص يمكن أن يستبدل فى المساحة هذا النص هذا النص</p>
                                                </div>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{url('my-profile')}}#!" class="flexx">
                                                <span class="bell"><i class="fas fa-bell"></i></span>
                                                <div class="notify">
                                                    <h4>إشعار جديد</h4>
                                                    <p>هذا النص هو مثال لنص يمكن أن يستبدل فى المساحة هذا النص هذا النص</p>
                                                </div>
                                            </a>

                                        </li>
                                        <li>
                                            <a href="{{url('my-profile')}}" class="flexx">
                                                <span class="bell"><i class="fas fa-bell"></i></span>
                                                <div class="notify">
                                                    <h4>إشعار جديد</h4>
                                                    <p>هذا النص هو مثال لنص يمكن أن يستبدل فى المساحة هذا النص هذا النص</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li><a href="{{url('notifications')}}" class="fixed-li">عرض كل الاشعارات</a></li>
                                    </ul>
                                </li>
                        <!-- /////////////////////||||||||||| End Nav Notifications  |||||||||||||||||||| -->

                            </ul>
                        </div>
                    </div>
                </div>



            </div>


</div>

        <!-- /////////////////////|||||| End Navbar |||||||||||||||||||||||||||| -->
    <!---////////////  //////////////////------------>


    <!---////////////  //////////////////------------>
    @yield('content')
    <!-- /////////////////////||||||||||||||||||||||||||||| Start Footer |||||||||||||||||||||||||||| -->

    <footer class="footer">
        <div class="foot-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-5 col-sm-6 col-xs-12">
                        <div class="flex-r foot1">
                            <a href="{{url('/')}}" class="foot-logo">
                                <img src="{{asset('website/dist/img/logo.png')}}">
                            </a>
                            <div>
                                <h3 class="f-title">حوافل</h3>
                                <p>
                                    هذا النص هو مثال لنص يمكن ان يستبدل من مولد النص العربى
                                </p>
                                <a href="{{url('contact-us')}}" class="btn-hvr">تواصل معنا</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
                        <div class="foot1">
                            <h3 class="f-title">روابط مهمة</h3>
                            <ul>
                                <li><a href="{{url('about')}}">من نحن</a></li>
                                <li><a href="{{url('contact-us')}}">اتصل بنا</a></li>
                                <li><a href="{{url('terms-of-use')}}">سياسة الاستخدام</a></li>
                                <li><a href="{{url('/')}}">الرئيسية</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
                        <div class="foot1">
                            <h3 class="f-title">القائمة</h3>
                            <ul>
                                <li><a href="{{url('categories')}}">التصنيفات</a></li>
                                <li><a href="{{url('services')}}">الخدمات</a></li>
                                <li><a href="{{url('offers')}}">العروض</a></li>
                                <li><a href="{{url('/sub-sections')}}">الفئات</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-3 col-sm-8 col-xs-12">
                        <div class="foot1">
                            <h3 class="f-title">تواصل معنا</h3>
                            <ul>
                                <li>
                                    <a href="tel0504890011" class="display-inline">0504890011</a>
                                </li>
                                <li>
                                    <a href="tel0504890011" class="display-inline">0504890011</a>
                                </li>
                                <li>
                                    <a href="mailto:bookings@gmail.com">bookings@gmail.com</a></li>
                                <li>
                                    <p class="m-b-10">
                                        المملكة السعودية - القصيم - طريق الملك فهد
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                &copy;
                جميع الحقوق محفوظة لدى شركة<a href="http://panorama-q.com/">بانوراما القصيم</a> <span id="currentYear"></span>
            </div>
        </div>
    </footer>
    <!--Scroll Button-->
    <div id="scroll-top">
        <i class="fa fa-angle-up"></i>
        <p>إلى الأعلى</p>
    </div>
    <!-- /////////////////////||||||||||||||||||||||||||||| End Footer |||||||||||||||||||||||||||| -->


    <!-- /////////////////////||||||||||||||||||||||||||||| Start Script |||||||||||||||||||||||||||| -->
    <script src="{{asset('website/dist/js/jquery-1.11.2.min.js')}}"></script>
    <script src="{{asset('website/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('website/dist/js/fontawesome.min.js')}}"></script>
    <script src="{{asset('website/dist/js/wow.min.js')}}"></script>
    <script>
        new WOW().init();
    </script>
    <script src="{{asset('website/dist/js/main.js')}}"></script>
    <script>
        $('ul.nav-tools .dropdown').hover(function() {
            $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
        }, function() {
            $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
        });
    </script>
    <script>
        $(document).ready(function() {
            $('.sm-remove').click(function() {
                $(this).closest('.one-cart').parent("li").remove();
            });
        });
    </script>
    <!---- search form -->
    <script>
        $(document).ready(function(){
  $('#search').on("click",(function(e){
  $(".search-form .form-group").addClass("sb-search-open");
    e.stopPropagation()
  }));
   $(document).on("click", function(e) {
    if ($(e.target).is("#search") === false && $(".search-form .form-control").val().length == 0) {
      $(".search-form .form-group").removeClass("sb-search-open");
    }
  });
    $(".form-control-submit").click(function(e){
      $(".search-form .form-control").each(function(){
        if($(".search-form .form-control").val().length == 0){
          e.preventDefault();
          $(this).css('border', '2px solid #ea6b60');
        }
    })
  })
})
    </script>
    @yield('scripts')
    <!-- /////////////////////||||||||||||||||||||||||||||| End Script |||||||||||||||||||||||||||| -->
</body>

</html>
