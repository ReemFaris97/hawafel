@extends('site.layout')
@section('title' , 'حوافل || الرئيسية')
@section('styles')
<link rel="stylesheet" href="{{asset('website/dist/css/jquery.fancybox.min.css')}}">
<link rel="stylesheet" href="{{asset('website/dist/css/a-style.css')}}">
<link rel="stylesheet" href="{{asset('website/dist/css/r-style.css')}}">
<link rel="stylesheet" href="{{asset('website/dist/css/home-navbar.css')}}">
<link rel="stylesheet" href="{{asset('website/scss/first.css')}}">

@endsection
@section('content')
<!---//////////// Start Header //////////////////------------>
<header class="my-header">
    <div class="container">
        <div class="head-txt">
            <div class="eyire wow animate__ animate__fadeIn animated">
                <h2 class="white">حوافل</h2>
                <h2 class="shadow-txt">للحجوزات</h2>
            </div>
            <p>هذا النص هو مثال لنص يمكن ان يستبدل</p>
            <a href="{{url('categories')}}" class="btn-hvr">احجز الان</a>
        </div>
    </div>
</header>
<!---//////////// End header //////////////////------------>

<!---//////////// Start header Search Form //////////////////------------>
<section class="search-box">
    <div class="container">
        <div class="srch-form wow animate__ animate__backInUp animated">
            <form action="{{url('categories')}}" class="blue-srch">
                <div class="form-group">
                    <label>القسم</label>
                    <select class="form-control" title="اختر القسم">
                        <option disabled>اختر القسم</option>
                        <option>قسم A</option>
                        <option>قسم B</option>
                        <option>قسم C</option>
                        <option>قسم D</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>تاريخ الوصول</label>
                    <input type="date" class="form-control">
                </div>
                <div class="form-group">
                    <label>تاريخ المغادرة</label>
                    <input type="date" class="form-control">
                </div>
                <div class="form-group">
                    <label>المدينة</label>
                    <select class="form-control" title="اختر المدينة">
                        <option disabled>اختر القسم</option>
                        <option>قسم A</option>
                        <option>قسم B</option>
                        <option>قسم C</option>
                        <option>قسم D</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>الحى</label>
                    <select class="form-control" title="اختر الحى">
                        <option disabled>اختر القسم</option>
                        <option>قسم A</option>
                        <option>قسم B</option>
                        <option>قسم C</option>
                        <option>قسم D</option>
                    </select>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn-hvr">بحث <i class="fas fa-search"></i></button>
                </div>
            </form>
        </div>
    </div>
</section>
<!---//////////// End header Search Form //////////////////------------>

<!---//////////// Start My Services //////////////////------------>
<section class="my-services">
    <div class="container">
        <div class="head-title">
            <h2>الخدمات المتوفرة</h2>
            <p>هذا النص هو مثال لنص يمكن أن يستبدل</p>
        </div>
        <div class="row grid grid1">
            <div class="col-sm-4 col-xs-6 wow animate__ animate__backInUp animated">
                <div class=" item">
                    <figure class="gradient-overlay-hover icon-zoom-hover zoom-image-hover">
                        <a data-fancybox="gallery" href="{{asset('website/dist/img/Asset4.jpg')}}">
                            <span class="fancyaa"><i class="fas fa-eye"></i></span>
                            <img src="{{asset('website/dist/img/Asset4.jpg')}}" alt="Sea">
                        </a>
                    </figure>
                    <a href="{{url('service-single')}}">
                        <div class="gallery_item_info">
                            <div class="vilacity">
                                <span class="block">فندق نارسس الرياض</span>
                                <span class="block">السعودية</span>
                            </div>
                            <div class="">
                                <div class="inline-stars">
                                    <span> <i class="fas fa-star"></i> </span>
                                    <span> <i class="fas fa-star"></i> </span>
                                    <span> <i class="fas fa-star"></i> </span>
                                    <span> <i class="fas fa-star"></i> </span>
                                    <span> <i class="fas fa-star"></i> </span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-4 col-xs-6 wow animate__ animate__backInUp animated">
                <div class=" item">
                    <figure class="gradient-overlay-hover icon-zoom-hover zoom-image-hover">
                        <a data-fancybox="gallery" href="{{asset('website/dist/img/Asset4.jpg')}}">
                            <span class="fancyaa"><i class="fas fa-eye"></i></span>
                            <img src="{{asset('website/dist/img/Asset4.jpg')}}" alt="Sea">
                        </a>
                    </figure>
                    <a href="{{url('service-single')}}">
                        <div class="gallery_item_info">
                            <div class="vilacity">
                                <span class="block">فندق نارسس الرياض</span>
                                <span class="block">السعودية</span>
                            </div>
                            <div class="">
                                <div class="inline-stars">
                                    <span> <i class="fas fa-star"></i> </span>
                                    <span> <i class="fas fa-star"></i> </span>
                                    <span> <i class="fas fa-star"></i> </span>
                                    <span> <i class="fas fa-star"></i> </span>
                                    <span> <i class="fas fa-star"></i> </span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-4 col-xs-6 wow animate__ animate__backInUp animated">
                <div class=" item">
                    <figure class="gradient-overlay-hover icon-zoom-hover zoom-image-hover">
                        <a data-fancybox="gallery" href="{{asset('website/dist/img/Asset4.jpg')}}">
                            <span class="fancyaa"><i class="fas fa-eye"></i></span>
                            <img src="{{asset('website/dist/img/Asset4.jpg')}}" alt="Sea">
                        </a>
                    </figure>
                    <a href="{{url('service-single')}}">
                        <div class="gallery_item_info">
                            <div class="vilacity">
                                <span class="block">فندق نارسس الرياض</span>
                                <span class="block">السعودية</span>
                            </div>
                            <div class="">
                                <div class="inline-stars">
                                    <span> <i class="fas fa-star"></i> </span>
                                    <span> <i class="fas fa-star"></i> </span>
                                    <span> <i class="fas fa-star"></i> </span>
                                    <span> <i class="fas fa-star"></i> </span>
                                    <span> <i class="fas fa-star"></i> </span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-4 col-xs-6 wow animate__ animate__backInUp animated">
                <div class=" item">
                    <figure class="gradient-overlay-hover icon-zoom-hover zoom-image-hover">
                        <a data-fancybox="gallery" href="{{asset('website/dist/img/Asset4.jpg')}}">
                            <span class="fancyaa"><i class="fas fa-eye"></i></span>
                            <img src="{{asset('website/dist/img/Asset4.jpg')}}" alt="Sea">
                        </a>
                    </figure>
                    <a href="{{url('service-single')}}">
                        <div class="gallery_item_info">
                            <div class="vilacity">
                                <span class="block">فندق نارسس الرياض</span>
                                <span class="block">السعودية</span>
                            </div>
                            <div class="">
                                <div class="inline-stars">
                                    <span> <i class="fas fa-star"></i> </span>
                                    <span> <i class="fas fa-star"></i> </span>
                                    <span> <i class="fas fa-star"></i> </span>
                                    <span> <i class="fas fa-star"></i> </span>
                                    <span> <i class="fas fa-star"></i> </span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-4 col-xs-6 wow animate__ animate__backInUp animated">
                <div class=" item">
                    <figure class="gradient-overlay-hover icon-zoom-hover zoom-image-hover">
                        <a data-fancybox="gallery" href="{{asset('website/dist/img/Asset4.jpg')}}">
                            <span class="fancyaa"><i class="fas fa-eye"></i></span>
                            <img src="{{asset('website/dist/img/Asset4.jpg')}}" alt="Sea">
                        </a>
                    </figure>
                    <a href="{{url('service-single')}}">
                        <div class="gallery_item_info">
                            <div class="vilacity">
                                <span class="block">فندق نارسس الرياض</span>
                                <span class="block">السعودية</span>
                            </div>
                            <div class="">
                                <div class="inline-stars">
                                    <span> <i class="fas fa-star"></i> </span>
                                    <span> <i class="fas fa-star"></i> </span>
                                    <span> <i class="fas fa-star"></i> </span>
                                    <span> <i class="fas fa-star"></i> </span>
                                    <span> <i class="fas fa-star"></i> </span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-4 col-xs-6 wow animate__ animate__backInUp animated">
                <div class=" item">
                    <figure class="gradient-overlay-hover icon-zoom-hover zoom-image-hover">
                        <a data-fancybox="gallery" href="{{asset('website/dist/img/Asset4.jpg')}}">
                            <span class="fancyaa"><i class="fas fa-eye"></i></span>
                            <img src="{{asset('website/dist/img/Asset4.jpg')}}" alt="Sea">
                        </a>
                    </figure>
                    <a href="{{url('service-single')}}">
                        <div class="gallery_item_info">
                            <div class="vilacity">
                                <span class="block">فندق نارسس الرياض</span>
                                <span class="block">السعودية</span>
                            </div>
                            <div class="">
                                <div class="inline-stars">
                                    <span> <i class="fas fa-star"></i> </span>
                                    <span> <i class="fas fa-star"></i> </span>
                                    <span> <i class="fas fa-star"></i> </span>
                                    <span> <i class="fas fa-star"></i> </span>
                                    <span> <i class="fas fa-star"></i> </span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>





        </div>
    </div>
</section>
<!---//////////// End My Services //////////////////------------>

<!---//////////// Start My Rankings //////////////////------------>
<section class="my-rankings">
    <div class="container">
        <div class="head-title">
            <h2>التصنيفات</h2>
            <p>هذا النص هو مثال لنص يمكن أن يستبدل</p>
        </div>
        <div class="row grid grid1">
            <div class="col-sm-4 col-xs-6 wow animate__ animate__backInUp animated">
                <div class=" item ranking">
                    <figure class="gradient-overlay-hover icon-zoom-hover zoom-image-hover">
                        <a href="{{url('sub-categories')}}">
                            <span class="fancyaa"><i class="fas fa-eye"></i></span>
                            <img src="{{asset('website/dist/img/Asset4.jpg')}}" alt="Sea">
                            <div class="gallery_item_info">
                                <h2>شاليهات</h2>
                            </div>
                        </a>
                    </figure>

                </div>
            </div>
            <div class="col-sm-4 col-xs-6 wow animate__ animate__backInUp animated">
                <div class=" item ranking">
                    <figure class="gradient-overlay-hover icon-zoom-hover zoom-image-hover">
                        <a href="{{url('sub-categories')}}">
                            <span class="fancyaa"><i class="fas fa-eye"></i></span>
                            <img src="{{asset('website/dist/img/Asset4.jpg')}}" alt="Sea">
                            <div class="gallery_item_info">
                                <h2>شاليهات</h2>
                            </div>
                        </a>
                    </figure>

                </div>
            </div>
            <div class="col-sm-4 col-xs-6 wow animate__ animate__backInUp animated">
                <div class=" item ranking">
                    <figure class="gradient-overlay-hover icon-zoom-hover zoom-image-hover">
                        <a href="{{url('sub-categories')}}">
                            <span class="fancyaa"><i class="fas fa-eye"></i></span>
                            <img src="{{asset('website/dist/img/Asset4.jpg')}}" alt="Sea">
                            <div class="gallery_item_info">
                                <h2>شاليهات</h2>
                            </div>
                        </a>
                    </figure>

                </div>
            </div>
            <div class="col-xs-12">
                <a href="{{url('categories')}}" class="btn-hvr see-more">عرض الكل</a>
            </div>
        </div>
</section>
<!---//////////// End My Rankings //////////////////------------>

<!---//////////// Start My Offers //////////////////------------>
<section class="my-offers">
    <div class="container">
        <div class="head-title">
            <h2>العروض</h2>
            <p>هذا النص هو مثال لنص يمكن أن يستبدل</p>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <form action="#" class="emailing">
                    <div class="above-overlay">
                        <h3>اشترك معنا</h3>
                        <h3>ليصلك العروض الجديدة</h3>
                        <input class="form-control" type="text" placeholder="الاسم">
                        <input class="form-control" type="email" placeholder="البريد الالكترونى">
                        <button type="submit" class="btn-hvr">اشترك</button>
                    </div>
                </form>
            </div>
            <div class="col-md-9 col-sm-6 col-xs-12">
                <div class="col-xs-12 no-padding">
                    <ul class="flex-offers">
                        <li class=" wow animate__ animate__backInUp animated">
                            <div class="offer1">
                                <a href="{{url('single')}}" class="off-img">
                                    <img src="{{asset('website/dist/img/Asset(6).jpg')}}" alt="Sea">
                                </a>
                                <div class="off-body">
                                    <a href="{{url('single')}}" class="off-name">فندق كمبينسكى العثمان</a>
                                    <div class="inline-stars">
                                        <span> <i class="fas fa-star"></i> </span>
                                        <span> <i class="fas fa-star"></i> </span>
                                        <span> <i class="fas fa-star"></i> </span>
                                        <span> <i class="fas fa-star"></i> </span>
                                        <span> <i class="fas fa-star"></i> </span>
                                    </div>
                                    <p class="off-time">26 JUN - 30 JUN</p>
                                    <div class="flex-r">
                                        <div class="location">السعودية - القصيم</div>
                                        <div class="off-price">
                                            <p>1000 ريال</p>
                                            <sub>/ سعر الليلة</sub>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class=" wow animate__ animate__backInUp animated">
                            <div class="offer1">
                                <a href="{{url('single')}}" class="off-img">
                                    <img src="{{asset('website/dist/img/Asset(6).jpg')}}" alt="Sea">
                                </a>
                                <div class="off-body">
                                    <a href="{{url('single')}}" class="off-name">شيراتون مكة</a>
                                    <div class="inline-stars">
                                        <span> <i class="fas fa-star"></i> </span>
                                        <span> <i class="fas fa-star"></i> </span>
                                        <span> <i class="fas fa-star"></i> </span>
                                        <span> <i class="fas fa-star"></i> </span>
                                        <span> <i class="fas fa-star"></i> </span>
                                    </div>
                                    <p class="off-time">26 JUN - 30 JUN</p>
                                    <div class="flex-r">
                                        <div class="location">السعودية - القصيم</div>
                                        <div class="off-price">
                                            <p>1000 ريال</p>
                                            <sub>/ سعر الليلة</sub>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class=" wow animate__ animate__backInUp animated">
                            <div class="offer1">
                                <a href="{{url('single')}}" class="off-img">
                                    <img src="{{asset('website/dist/img/Asset(6).jpg')}}" alt="Sea">
                                </a>
                                <div class="off-body">
                                    <a href="{{url('single')}}" class="off-name">فندق نارسس الرياض</a>
                                    <div class="inline-stars">
                                        <span> <i class="fas fa-star"></i> </span>
                                        <span> <i class="fas fa-star"></i> </span>
                                        <span> <i class="fas fa-star"></i> </span>
                                        <span> <i class="fas fa-star"></i> </span>
                                        <span> <i class="fas fa-star"></i> </span>
                                    </div>
                                    <p class="off-time">26 JUN - 30 JUN</p>
                                    <div class="flex-r">
                                        <div class="location">السعودية - القصيم</div>
                                        <div class="off-price">
                                            <p>1000 ريال</p>
                                            <sub>/ سعر الليلة</sub>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class=" wow animate__ animate__backInUp animated">
                            <div class="offer1">
                                <a href="{{url('single')}}" class="off-img">
                                    <img src="{{asset('website/dist/img/Asset(6).jpg')}}" alt="Sea">
                                </a>
                                <div class="off-body">
                                    <a href="{{url('single')}}" class="off-name">شيراتون الرياض</a>
                                    <div class="inline-stars">
                                        <span> <i class="fas fa-star"></i> </span>
                                        <span> <i class="fas fa-star"></i> </span>
                                        <span> <i class="fas fa-star"></i> </span>
                                        <span> <i class="fas fa-star"></i> </span>
                                        <span> <i class="fas fa-star"></i> </span>
                                    </div>
                                    <p class="off-time">26 JUN - 30 JUN</p>
                                    <div class="flex-r">
                                        <div class="location">السعودية - القصيم</div>
                                        <div class="off-price">
                                            <p>1000 ريال</p>
                                            <sub>/ سعر الليلة</sub>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class=" wow animate__ animate__backInUp animated">
                            <div class="offer1">
                                <a href="{{url('single')}}" class="off-img">
                                    <img src="{{asset('website/dist/img/Asset(6).jpg')}}" alt="Sea">
                                </a>
                                <div class="off-body">
                                    <a href="{{url('single')}}" class="off-name">فندق فيرمونت مكة</a>
                                    <div class="inline-stars">
                                        <span> <i class="fas fa-star"></i> </span>
                                        <span> <i class="fas fa-star"></i> </span>
                                        <span> <i class="fas fa-star"></i> </span>
                                        <span> <i class="fas fa-star"></i> </span>
                                        <span> <i class="fas fa-star"></i> </span>
                                    </div>
                                    <p class="off-time">26 JUN - 30 JUN</p>
                                    <div class="flex-r">
                                        <div class="location">السعودية - القصيم</div>
                                        <div class="off-price">
                                            <p>1000 ريال</p>
                                            <sub>/ سعر الليلة</sub>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class=" wow animate__ animate__backInUp animated">
                            <div class="offer1">
                                <a href="{{url('single')}}" class="off-img">
                                    <img src="{{asset('website/dist/img/Asset(6).jpg')}}" alt="Sea">
                                </a>
                                <div class="off-body">
                                    <a href="{{url('single')}}" class="off-name">فندق فيرمونت مكة</a>
                                    <div class="inline-stars">
                                        <span> <i class="fas fa-star"></i> </span>
                                        <span> <i class="fas fa-star"></i> </span>
                                        <span> <i class="fas fa-star"></i> </span>
                                        <span> <i class="fas fa-star"></i> </span>
                                        <span> <i class="fas fa-star"></i> </span>
                                    </div>
                                    <p class="off-time">26 JUN - 30 JUN</p>
                                    <div class="flex-r">
                                        <div class="location">السعودية - القصيم</div>
                                        <div class="off-price">
                                            <p>1000 ريال</p>
                                            <sub>/ سعر الليلة</sub>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-xs-12 no-padding">
                    <a href="{{url('offers')}}" class="btn-hvr see-more">عرض الكل</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!---//////////// End My Offers //////////////////------------>


@endsection
@section('scripts')
<script src="{{asset('website/dist/js/jquery.fancybox.min.js')}}"></script>
<!---- email form height dynamic -->
<script>
    $(window).load(function() {
        var newHeight = $(".flex-offers").height();
        // $(".emailing").height(newHeight);
        $('.emailing').css({
            'min-height': (newHeight + 75) + 'px'
        });

    });
</script>

<!-- <script src="{{asset('website/dist/js/addToCart.js')}}"></script> -->
<!------- toggle like ----->
<!-- <script>
    jQuery(document).ready(function($) {
        $('.toggle-like').on('click', function() {
            if ($(this).attr('data-click-state') == 1) {
                $(this).attr('data-click-state', 0);
                $(this).css('color', '#616161');
            } else {
                $(this).attr('data-click-state', 1);
                $(this).css('color', 'red');
            }
        });
    });
</script> -->
@endsection